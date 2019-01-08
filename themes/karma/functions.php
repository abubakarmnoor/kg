<?php

//delete wp-json
add_filter( 'rest_endpoints', 'remove_default_endpoints' );
function remove_default_endpoints( $endpoints ) {
  return array( );
}
function get_karma_api_base_url(){
	return "https://karmamobileapps.appspot.com";
}

function get_oddysey_api(){
	return "https://karmagroup-d66ca.appspot.com";
}

function karma_getPageBlockNames($page_id = false) {
	global $wpdb;
	if (!$page_id) {
		$page_id = get_the_ID();
	}
	$sql = 'SELECT meta_value FROM wp_postmeta WHERE meta_key="area_0_blocks" AND post_id='.$page_id;
	trigger_error($sql);
	$results = $wpdb->get_results($sql) or die(mysql_error());
	foreach ($results as $result) {
		$blocks = unserialize($result->meta_value);
	}
	return $blocks;
}

function karma_limit_text($text, $limit) {
  if (str_word_count($text, 0) > $limit) {
      $words = str_word_count($text, 2);
      $pos = array_keys($words);
      $text = substr($text, 0, $pos[$limit]) . '...';
  }
  return $text;
}

function karma_getResortType($post) {
	$parent = get_post($post->post_parent);
	return $parent->post_title;
}

$images_per_page = 32;
function karma_getGalleryImages($gallery_id = false, $pagenum = false) {
	if ( get_post_type( $gallery_id ) == 'galleries') {
		$images = get_field('gallery_images', $gallery_id);
		$gallery_images = array();
		foreach ($images as $key => $image) {
			$new_image = array(
				'url' => $image['url'],
				'alttext' => $image['alt'],
				'description' => $image['description'],				
			);
			$gallery_images[] = (object) $new_image;
		}
		return $gallery_images;
		//$gallery_new = 
		/*
		$gallery_page = get_field('gallery_images', $gallery_id);
		for ($i=0; $i < $images_per_page ; $i++) { 
			= $gallery_page[$i]['url'];
			= $gallery_page[$i]['description'];
			= $gallery_page[$i]['alt'];
		}*/
	}
	else {
		global $wpdb, $images_per_page;
		$sql = 'SELECT * FROM wp_ngg_pictures p LEFT JOIN wp_ngg_gallery g ON p.galleryid=g.gid';
		if ($gallery_id) {
			$sql .= ' WHERE galleryid='.$gallery_id;
		}
		$sql .= ' ORDER BY sortorder ASC';
		if ($pagenum) {
			$start = $images_per_page * ($pagenum - 1);
			$sql .= ' LIMIT '.$start.','.$images_per_page;
		}
		//trigger_error($sql);
		$results = $wpdb->get_results($sql) or die(mysql_error());
		foreach ($results as $result) {
			$result->url = get_option( 'home' ) . '/wp-content/gallery/'.$result->name.'/'.$result->filename;
		}
			return $results;
	}

	
}

function karma_highlightedMarkup($fulltext, $highlight) {
	if (!$highlight) {
		return $fulltext;
	}
	$this_hText = $fulltext;
	$this_hHighlight  = $highlight;
	$this_hText = @preg_replace('#' . preg_quote($this_hHighlight, '#') . '#ui', '<span style="border-bottom: 1px solid #dba849;">$0</span>', $this_hText );
	return $this_hText;
}

function karma_getGalleryPageCount($gallery_id = false) {
	global $wpdb, $images_per_page;
	$sql = 'SELECT COUNT(*) as image_count FROM wp_ngg_pictures p LEFT JOIN wp_ngg_gallery g ON p.galleryid=g.gid';
	if ($gallery_id) {
		$sql .= ' WHERE galleryid='.$gallery_id;
	}
	//trigger_error($sql);
	$results = $wpdb->get_results($sql) or die(mysql_error());
	return ceil($results[0]->image_count/$images_per_page);
}

function karma_getGalleryTitle($gallery_id = false) {
	global $wpdb;
	if (!$gallery_id) {
		return '';
	}
	$sql = 'SELECT * FROM wp_ngg_gallery WHERE gid='.$gallery_id;
	$results = $wpdb->get_results($sql) or die(mysql_error());
	return $results[0]->title;
}

function karma_getFindAResortMenu() {
	$html = '<div class="find_destination_select">';
	$resorts_pages = array(
		'Karma Resort' => karma_get_destination_pages_resort(),
		'Karma Retreat' => karma_get_destination_pages_retreat(),
		'Karma Royal' => karma_get_destination_pages_royal(),
		'Karma Estate' => karma_get_destination_pages_estate(),
		'Karma Sanctum' => karma_get_destination_pages_sanctum()
	);
	if (!empty($resorts_pages)) {
		$html .= '<form class="page_list_select_form">
					 <select class="find_destination" id="find_destination" onChange="if(this.selectedIndex != 0)self.location=this.options[this.selectedIndex].value">
					 	<option value="" selected disabled>Find Destination</option>';
		foreach ($resorts_pages as $resort_type => $pages) {
			$html .= '<optgroup label="' .$resort_type. '">';
			foreach ($pages as $c) {
				if (get_field('exclude_from_nav', $c->ID)) {
					continue;
				}
				$location = get_field('resort_location', $c->ID);
				$html .= '<option value="'.get_option( 'home' ).'/'.get_page_uri($c->ID). '">' .$c->post_title. ' - ' .$location. '</option>';
			}
			$html .= '</optgroup>';
		}
		$html .= '</select></form>';
	}
	$html .= '</div>';
	return $html;
}

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(); // see https://www.advancedcustomfields.com/resources/options-page/ for advanced config
}

function karma_get_nearest_timezone($cur_lat, $cur_long, $country_code = '') {
    $timezone_ids = ($country_code) ? DateTimeZone::listIdentifiers(DateTimeZone::PER_COUNTRY, $country_code)
                                    : DateTimeZone::listIdentifiers();
    if($timezone_ids && is_array($timezone_ids) && isset($timezone_ids[0])) {
        $time_zone = '';
        $tz_distance = 0;
        //only one identifier?
        if (count($timezone_ids) == 1) {
            $time_zone = $timezone_ids[0];
        } else {
            foreach($timezone_ids as $timezone_id) {
                $timezone = new DateTimeZone($timezone_id);
                $location = $timezone->getLocation();
                $tz_lat   = $location['latitude'];
                $tz_long  = $location['longitude'];
                $theta    = $cur_long - $tz_long;
                $distance = (sin(deg2rad($cur_lat)) * sin(deg2rad($tz_lat)))
                + (cos(deg2rad($cur_lat)) * cos(deg2rad($tz_lat)) * cos(deg2rad($theta)));
                $distance = acos($distance);
                $distance = abs(rad2deg($distance));
                if (!$time_zone || $tz_distance > $distance) {
                    $time_zone   = $timezone_id;
                    $tz_distance = $distance;
                }
            }
        }
        return  $time_zone;
    }
    return 'unknown';
}

function karma_enqueue_scripts() {
	$dir = get_template_directory_uri();
	$js_uri = $dir. '/js/';
	$css_uri = $dir. '/css/';
	wp_enqueue_style('stylenewcss', $css_uri. 'main.min.css?a02');
	//wp_enqueue_script('jquery-ui', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/jquery-ui.min.js', array('jquery'));
	wp_enqueue_script('jquery-ui', $js_uri. 'main.js', array('jquery')); // copied from concrete5
	//wp_enqueue_script('flexsliderjs', $js_uri. 'jquery.flexslider.js', array('jquery'), NULL, true); // had to customize flexslider, see "changes by newpathweb" in that file
	//wp_enqueue_style('flexslidercss', $css_uri. 'flexslider.css');
	//wp_enqueue_script('vegasjs', $js_uri. 'vegas.js', array('jquery'), NULL, true);
	//wp_enqueue_style('vegascss', $css_uri. 'vegas.css');
	//wp_enqueue_script('magnific-popupjs', $js_uri. 'jquery.magnific-popup.min.js', array('jquery'), NULL, true);
	//wp_enqueue_style('magnific-popupcss', $css_uri. 'magnific-popup.css');
	//wp_enqueue_script('infobubblejs', $js_uri. 'infobubble.js');
	//wp_enqueue_script('vexjs', $dir. '/vex/vex.combined.min.js', array('jquery'), NULL, true);
	//wp_enqueue_style('vexcss', $dir. '/vex/vex.css');
	//wp_enqueue_style('vexwireframecss', $dir. '/vex/vex-theme-wireframe.css');
	//wp_enqueue_script('calendarjs', $js_uri. 'jquery.calendario.js', array('jquery'), NULL, true);
	//wp_enqueue_style('calendarcss', $css_uri. 'calendar.css');
	//wp_enqueue_style('normalizecss', $css_uri. 'normalize.css');
	//wp_enqueue_script('validatejs', $js_uri. 'jquery.validate.min.js', array('jquery'), NULL, true);
	//wp_enqueue_script('tweetjs', $js_uri. 'jquery.tweet.min.js', array('jquery'), NULL, true);
	//wp_enqueue_script('masonryjs', $js_uri. 'masonry.pkgd.min.js', array('jquery'), NULL, true);
	//wp_enqueue_script('instafeedjs', $js_uri. 'instafeed.min.js', NULL, true);
	//wp_enqueue_script('modernizerjs', $js_uri. 'modernizr.custom.63321.js', NULL, true);
	wp_register_script('bookingbarjs', $dir. '/booking/bookingbar.js?10122018', array('jquery'), NULL, true);
	//wp_enqueue_style('bookingbarcss', $dir. '/booking/bootstrap-bar.css');
	//wp_register_script('bookingdropdownjs', $dir. '/booking/dropdown.js', array('jquery'), NULL, true);
	wp_register_script('datepickerjs', $dir. '/booking/bootstrap-datepicker.js', array('jquery'), NULL, true);
	//wp_enqueue_style('datepickercss', $dir. '/booking/datepicker.css');
	//wp_enqueue_style('bookingstylecss', $dir. '/booking/bookingstyle.css');
	//wp_enqueue_style('jqueryuicss', $css_uri. 'jquery.ui.css');
	wp_enqueue_script('momentjs', $js_uri. 'moment.js', array('jquery'), '20180209', true);
	//wp_localize_script( 'karmajs', 'karma_theme', array( 'timeshare_resort_IDs' => get_timeshare_resort_IDs(), 'resortID' => get_the_id() ) );
	wp_enqueue_script('karmajs', $js_uri. 'karma.min.js?a003', array('jquery'), '20181211-2', true);
        wp_localize_script( 'karmajs', 'karma_theme', array( 'timeshare_resort_IDs' => get_timeshare_resort_IDs(), 'resortID' => get_the_id() ) );
        wp_enqueue_script( 'karmajs' );
	wp_register_script('banner_slider', $js_uri. 'blocks/banner_slider.js?18082307', array('jquery'), '20180822', true);
	wp_register_script('contact_form', $js_uri. 'blocks/contact_form.js', array('jquery'), NULL, true);

}
add_action('wp_enqueue_scripts', 'karma_enqueue_scripts');

function karma_init() {

}

//karya agus ganteng
add_action( 'wp_print_scripts', 'wsds_detect_enqueued_scripts' );
function wsds_detect_enqueued_scripts() {
	global $wp_scripts;
	foreach( $wp_scripts->queue as $handle ) :
		//echo $handle . ' | ';
	endforeach;
}

add_filter( 'script_loader_tag', 'wsds_defer_scripts', 10, 3 );
function wsds_defer_scripts( $tag, $handle, $src ) {

	$defer_scripts = array(
		'prismjs',
		'et_monarch-ouibounce',
		'et_monarch-custom-js',
		'wpshout-js-cookie-demo',
		'cookie',
		'wpshout-no-broken-image',
		'goodbye-captcha-public-script',
		'devicepx',
		'search-box-value',
		'page-min-height',
		'kamn-js-widget-easy-twitter-feed-widget',
		'__ytprefs__',
		'__ytprefsfitvids__',
		'icegram',
		'disqus',
	);

    if ( in_array( $handle, $defer_scripts ) ) {

        return '<script src="' . $src . '" async defer type="text/javascript"></script>' . "\n";
    }

    return $tag;
}

//tambahan baru 2018-01-02
function add_defer_attribute($tag, $handle) {
	// add script handles to the array below
	$scripts_to_defer = array(
		'html5',
		'jquery-migrate',
		'wp-embed',
		'twentyseventeen-skip-link-focus-fix',
		'jquery-scrollto',
		'twentyseventeen-global',
		'twentyseventeen-navigation',
    'prismjs',
		'et_monarch-ouibounce',
		'et_monarch-custom-js',
		'wpshout-js-cookie-demo',
		'cookie',
		'wpshout-no-broken-image',
		'goodbye-captcha-public-script',
		'devicepx',
		'search-box-value',
		'page-min-height',
		'kamn-js-widget-easy-twitter-feed-widget',
		'__ytprefs__',
		'__ytprefsfitvids__',
		'icegram',
		'disqus',
		'comment-reply');

	foreach($scripts_to_defer as $defer_script) {
	   if ($defer_script === $handle) {
		  return str_replace(' src', ' defer="defer" src', $tag);
	   }
	}
	return $tag;
 }

 function add_async_attribute($tag, $handle) {
	$scripts_to_async = array(

		'jquery-core',
		);

	foreach($scripts_to_async as $async_script) {
	   if ($async_script === $handle) {
	     if (strpos( $tag, 'jquery.js' )) return $tag;
		  return str_replace(' src', ' async="async" src', $tag);
	   }
	}
	return $tag;
 }
 add_filter('script_loader_tag', 'add_defer_attribute', 10, 2);
 add_filter('script_loader_tag', 'add_async_attribute', 10, 2);

function getDestinationName($propertyID){
	 $destination = array(
		11500 => "karma-borgo-di-colleoli",
		963 => "cay-tre",
		11873 => "karma-manori-des-deux-amants",
		6504 => "karma-minoan",
		1012 => "karma-royal-bella-vista",
		1037 => "karma-royalboat-lagoon"
	 );
	 return $destination[$propertyID];
 }


//for lazyload
function lazyloadImages($html) {
	$matches = array();

	preg_match_all( '/<img[\s\r\n]+.*?>/is', $html, $matches );

	$search = array();
	$replace = array();
	foreach ( $matches[0] as $imgHTML ) {

		// don't do the replacement if the image is a data-uri
		if ( ! preg_match( "/src=['\"]data:image/is", $imgHTML ) ) {
			$placeholder_url_used = 'data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==';

			if( preg_match( '/class=["\'].*?wp-image-([0-9]*)/is', $imgHTML, $id_matches ) ) {
				$img_id = intval($id_matches[1]);

			}
			// replace the src and add the data-src attribute
			$replaceHTML = preg_replace( '/<img(.*?)src=/is', '<img$1src="' . esc_attr( $placeholder_url_used ) . '" data-lazy-type="image" data-lazy-src=', $imgHTML );

			// also replace the srcset (responsive images)
			$replaceHTML = str_replace( 'srcset', 'data-lazy-srcset', $replaceHTML );
			// replace sizes to avoid w3c errors for missing srcset
			$replaceHTML = str_replace( 'sizes', 'data-lazy-sizes', $replaceHTML );

			// add the lazy class to the img element
			if ( preg_match( '/class=["\']/i', $replaceHTML ) ) {
				$replaceHTML = preg_replace( '/class=(["\'])(.*?)["\']/is', 'class=$1lazy lazy-hidden $2$1', $replaceHTML );
			} else {
				$replaceHTML = preg_replace( '/<img/is', '<img class="lazy lazy-hidden"', $replaceHTML );
			}

			$replaceHTML .= '<noscript>' . $imgHTML . '</noscript>';

			array_push( $search, $imgHTML );
			array_push( $replace, $replaceHTML );
		}
	}
	$html = str_replace( $search, $replace, $html );
	return $html;
}
add_filter('the_content', 'lazyloadImages' );
add_filter('post_thumbnail_html','lazyloadImages');
//end lazyload
//end 2018-01-02
//end karya agus ganteng


function karma_get_destination_pages_all() {
	$pages = get_pages(array('parent' => 275)); // Find a Destination page
	foreach ($pages as $page) {
		$children = get_pages(array('parent' => $page->ID, 'orderby' => 'title', 'order' => 'ASC'));
		foreach ($children as $child) {
			if (!get_post_meta($child->ID, 'exclude_from_nav', 1)) {
				$page->children[] = $child;
			}
		}
	}
	return $pages;
}
function karma_get_destination_pages_resort() {
	$pages = get_pages(array('parent' => 277, 'orderby' => 'title', 'order' => 'ASC'));
	foreach ($pages as $page) {
		if (!get_post_meta($page->ID, 'exclude_from_nav', 1)) {
			$r_pages[] = $page;
		}
	}
	return $r_pages;
}
function karma_get_destination_pages_retreat() {
	$pages = get_pages(array('parent' => 328, 'orderby' => 'title', 'order' => 'ASC'));
	return $pages;
}
function karma_get_destination_pages_royal() {
	$pages = get_pages(array('parent' => 522, 'orderby' => 'title', 'order' => 'ASC'));
	return $pages;
}
function karma_get_destination_pages_estate() {
	$pages = get_pages(array('parent' => 524, 'orderby' => 'title', 'order' => 'ASC'));
	return $pages;
}
function karma_get_destination_pages_sanctum() {
    $pages = get_pages(array('parent' => 5932, 'orderby' => 'title', 'order' => 'ASC'));
    return $pages;
}

function karma_get_news_parent_id() {
	return 279;
}

function karma_get_calendar_page_id() {
	return 3814;
}

function karma_shortenTextWord($textStr, $numChars = 255, $tail = '…') {
	if (intval($numChars) == 0) {
    	$numChars = 255;
	}
    $textStr = strip_tags($textStr);
    if (function_exists('mb_substr')) {
    	if (mb_strlen($textStr) > $numChars) {
        	$textStr = preg_replace('/\s+?(\S+)?$/', '', mb_substr($textStr, 0, $numChars + 1));
            // this is needed if the shortened string consists of one single word
            $textStr = mb_substr($textStr, 0, $numChars) . $tail;
        }
    } else {
    	if (strlen($textStr) > $numChars) {
        	$textStr = preg_replace('/\s+?(\S+)?$/', '', substr($textStr, 0, $numChars + 1));
            $textStr = substr($textStr, 0, $numChars) . $tail;
        }
    }
    return $textStr;
}

// contact form requires Contact Form 7 plugin
// @todo validation for telephone number see: http://stackoverflow.com/questions/26377034/custom-validation-to-check-business-email-and-phone-number-in-contact-form-7-in
// @todo redesign messages style to conform with karma.
// @todo test mail works.
function karma_render_footer_contact_form() {

	// Original from the Newpath

	// $html = '<!--contact start --><div class="contact_form_container">
	// 			<div id="contact_form">
	// 				<div class="cf">
	// 					<h2 class="form_title">Contact Us</h2>
	// 					<div class="close_btn"></div>
	// 				</div>
	// 				<div class="error_message"></div>';
	// $html .= do_shortcode('[contact-form-7 id="458" title="Contact Form" html_id="contactformpopup"]');

	// $html .= '</div></div><!--contactend-->';

	// Our inbox 25 integration

	$html = '<!-- contact start -->
	<div class="contact_form_container">

	<style>
	.message-validator{
	z-index:1;
	width: 140px;
	}
	#emailus{
	background: #f2e6d6;
	width: 38%;
	padding: 15px;
	position: absolute;
	margin: auto;
	top: -30%;
	left: 80%;
	font-size: 18px;
	text-align:center;
	}
	#contact_form_thanks{
	display:none;
	width: 90%;
	max-width: 600px;
	position: fixed;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	margin: auto;
	background: #1b1b1b;
	padding: 25px;
	}
	.close_btn2{
	height: 25px;
	width: 25px;
	background-size: contain;
	background-image: url(https://karmagroup.com/wp-content/themes/karma/imgs/icons/close-icon-rounded.png);
	float: right;
	cursor: pointer;
	display: inline-block;
	vertical-align: middle;
	}
	#contact_form{
	max-width: 950px !important;
	}
	#resortchoice2{
	display:none;
	}
	.half_form{
	width: 48%;
	display: inline-block;
	float: left;
	}
	.half_form2{
	width: 48%;
	display: inline-block;
	float: right;
	}
	#wrapper{
	display: inline-block;
	}

	@media only screen and (max-width: 768px) {
	#emailus {
	left: 32%;

	}
	}

	@media only screen and (max-width: 480px) {
	.half_form{
	width: 100%;
	}
	.half_form2{
	width: 100%;
	}
	#karma select#find_destination{
	width: 330px;
	}
	#karma #contact_section .contact_details .left select#contact_select{
	width: 330px;
	}
	#emailus {
	width: 65%;
	top: -58%;
	left: 19%;

	}
	}
	</style>

	<div id="contact_form_thanks">
	<div class="cf">
	<p class="form_title" style="color: #fff;margin-top: 0;display: inline-block;vertical-align: middle;font-size: 28px;font-weight: 300;margin: 6px 0;">Contact Us</p>
	<div class="close_btn2"></div>
	</div>
	<p style="color:#ffffff;">Thank you for getting in touch! Our Team will be in contact shortly. <br>For your record, we have sent you an email that includes your request details.</strong><br><br><a href="https://www.facebook.com/karmagroupglobal" target="_blank">Like us on Facebook</a> <br><br></p>
	</div>
    <div id="contact_form">
        <div class="cf">
            <p class="form_title" style="color: #fff;margin-top: 0;display: inline-block;vertical-align: middle;font-size: 28px;font-weight: 300;margin: 6px 0;">Contact Us</p>
            <div class="close_btn"></div>
        </div>
        <div class="error_message"></div>
        <div role="form" class="wpcf7" id="wpcf7-f458-o1" lang="en-US" dir="ltr">
            <div class="screen-reader-response"></div>
            <form id="form-247" action="https://mx9.inboxgateway.com/form-process.php" method="post">
                <div style="display: none;">
                    <input type="hidden" name="_wpcf7" value="458" />
                    <input type="hidden" name="_wpcf7_version" value="4.5.1" />
                    <input type="hidden" name="_wpcf7_locale" value="en_US" />
                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f458-o1" />
                    <input type="hidden" name="_wpnonce" value="fd2e81c5e9" />
                    <!-- inbox 25 -->
                    <input type="hidden" name="key" value="247" />
					<input type="hidden" name="uid" value="0" />
					<input type="hidden" name="sid" value="0" />
					<input type="hidden" name="hosted" value="0" />
					<input id="field-1516767649-text" type="hidden" name="field-1516767649" value="">
					<input id="field-1427866079-text" type="hidden" name="field-1427866079" value="Karma Group">
					<input id="field-1427866111-text" type="hidden" name="field-1427866111" value="Digital">
					<input id="field-1427866217-text" type="hidden" name="field-1427866217" value="Web">
					<input id="field-1427866260-text" type="hidden" name="field-1427866260" value="All Countries">
					<input id="field-1428569141-text" type="hidden" name="field-1428569141" value="KG Contact - Email Enquiry">
                </div>
                <div id="wrapper">
                <div class="half_form">
                <p><span class="wpcf7-form-control-wrap firstName"><input type="text" required="" name="field-1427865019-1" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" id="contactFirstName" aria-required="true" aria-invalid="false" placeholder="First Name:"/></span></p>
                <p><span class="wpcf7-form-control-wrap surname"><input type="text" required="" name="field-1427865019-2" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" id="contactSurname" aria-required="true" aria-invalid="false" placeholder="Surname:"/></span></p>
                <p><span class="wpcf7-form-control-wrap email"><input type="email" required="" name="field-1427865032" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" id="contactEmail" aria-required="true" aria-invalid="false" placeholder="Email:"/></span></p>
                <p><span class="wpcf7-form-control-wrap tel"><input type="text" required="" name="field-1427867633" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" id="contactTel" aria-required="true" aria-invalid="false" placeholder="Tel:"/></span></p>
                <p><span class="wpcf7-form-control-wrap enquiry">

                <select name="field-1427865137" class="wpcf7-form-control wpcf7-select" id="contactEnquiry" aria-invalid="false" required="">
                <option value="Enquiry" selected="true" disabled="disabled">Enquiry</option>
                <option value="Reservation Enquiries (Resorts, Events, Weddings, Beach Club)">Reservation Enquiries (Resorts, Events, Weddings, Beach Club)</option>
                <option value="Member Enquiries">Member Enquiries</option>
                <option value="Karma Group Corporate Enquiries (Investment, Media)">Karma Group Corporate Enquiries (Investment, Media)</option><option value="Career Enquiries">Career Enquiries</option>
                <option value="Karma Experience Enquiries">Karma Experience Enquiries</option>
                </select></span></p>

                <p id="resortchoice2">
                <span class="wpcf7-form-control-wrap senquiry">
                <select name="field-1516787049" class="wpcf7-form-control wpcf7-select" id="resortchoice" aria-invalid="false" required="">
                <option value="Enquiry" selected="true" disabled="disabled">Find A Resort</option>
                <optgroup label="Karma Resorts">
                <option value="Karma Bavaria - Germany">Karma Bavaria - Germany</option>
                <option value="Karma Jimbaran - Bali">Karma Jimbaran - Bali</option>
                <option value="Karma Kandara - Bali">Karma Kandara - Bali</option>
                <option value="Karma Rottnest - WA">Karma Rottnest - WA</option>
                </optgroup>
                <optgroup label="Karma Resorts">
                <option value="Karma Cây Tre - Vietnam">Karma Cây Tre - Vietnam</option>
                <option value="Karma Haveli - Jaipur">Karma Haveli - Jaipur</option>
                <option value="Karma Mayura - Bali">Karma Mayura - Bali</option>
                <option value="Karma Reef - Indonesia">Karma Reef - Indonesia</option>
                <option value="Karma Cây Tre - Vietnam">Karma Cây Tre - Vietnam</option>
                <option value="Karma St. Martin\'s - Isles of Scilly">Karma St. Martin\'s - Isles of Scilly</option>
                <option value="Karma Minoan - Crete">Karma Minoan - Crete</option>
                </optgroup>
                <optgroup label="Karma Royal">
                <option value="Karma Royal MonteRio - Goa">Karma Royal MonteRio - Goa</option>
                <option value="Karma Royal Bella Vista - Thailand">Karma Royal Bella Vista - Thailand</option>
                <option value="Karma Royal Benaulim - Goa">Karma Royal Benaulim - Goa</option>
                <option value="Karma Royal Boat Lagoon - Thailand">Karma Royal Boat Lagoon - Thailand</option>
                <option value="Karma Royal Candidasa - Bali">Karma Royal Candidasa - Bali</option>
                <option value="Karma Royal Haathi Mahal - Goa">Karma Royal Haathi Mahal - Goa</option>
                <option value="Karma Royal Residences at Haathi Mahal - Goa">Karma Royal Residences at Haathi Mahal - Goa</option>
                <option value="Karma Royal Jimbaran - Bali">Karma Royal Jimbaran - Bali</option>
                <option value="Karma Royal Palms - Goa">Karma Royal Palms - Goa</option>
                <option value="Karma Royal Sanur - Bali">Karma Royal Sanur - Bali</option>
                </optgroup>
                <optgroup label="Karma Estate">
                <option value="Pelikanos - Mykonos">Pelikanos - Mykonos</option>
                <option value="Le Preverger - France">Le Preverger - France</option>
                <option value="Chateau de Samary - France">Chateau de Samary - France</option>
                </optgroup>
                <optgroup label="Karma Sanctum">
                <option value="Karma Sanctum Soho - London">Karma Sanctum Soho - London</option>
                <option value="Karma Sanctum On the Green - England">Karma Sanctum On the Green - England</option>
                </optgroup>
                </select>
                </span>
                </p>

                <p><span class="wpcf7-form-control-wrap subject"><input type="text" required="" name="field-1448871775" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" id="contactSubject" aria-required="true" aria-invalid="false" placeholder="Subject:"/></span></p>
                </div>

                <div class="half_form2">
                <p><span class="wpcf7-form-control-wrap message"><textarea name="field-1448871903" cols="30" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" id="contactMessage" aria-required="true" aria-invalid="false"></textarea></span></p>
                <p>
                    <label>
                        <br/><span class="wpcf7-form-control-wrap monthlyNewsletter"><span class="wpcf7-form-control wpcf7-checkbox" id="contactMonthlyNewsletter"><span class="wpcf7-list-item first last"><input type="checkbox" name="field-1449560763[]" value="I would like to receive a monthly Karma Group eNewsletter giving me news, events and offers"/>&nbsp;<span class="wpcf7-list-item-label">I would like to receive a monthly Karma Group eNewsletter giving me news, events and offers</span></span>
                        </span>
                        </span> (your details will not be passed to third parties)
                        <br/>
                    </label>
                </p>
								<div id="contactuskg"></div>
                <p>
                    <button class="wpcf7-form-control wpcf7-submit submit_btn action_link button_outline gold" id="contactsubmitbtn" type="submit">Submit</button>
                </p>
                <div class="wpcf7-response-output wpcf7-display-none"></div>
                 </div>
                  </div>
            </form>
        </div>
    </div>
</div>
<!--
<style>
#g-recaptcha-response{
	display: none !important;
}
</style>
<script>

	var userCheck;

	var verifyCallback = function(response) {
		userCheck = response;
	};

	var onloadCallback = function() {
	 grecaptcha.render(document.getElementById("capcay"), {
		 "sitekey" : "6LfydUkUAAAAAMRq9cgPDWxow-Azd3-MiOawC9OK",
		 "callback" : verifyCallback,
	 });
 };

</script>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
-->
<script>
$(document).ready(function() {

$(\'#contactEnquiry\').on(\'change\', function(e){
if($(e.currentTarget).val() == \'Reservation Enquiries (Resorts, Events, Weddings, Beach Club)\')
$(\'#resortchoice2\').css(\'display\',\'block\');
else
$(\'#resortchoice2\').css(\'display\',\'none\');
});
	$(\'.datepicker\').datepicker({
		changeYear: true,
                minDate: 0,
	 	yearRange: \'-80:+10\',
	 	dateFormat: \'dd/mm/yy\'
	});

	$(\'#contact_form_thanks .close_btn2\').on(\'click\', function(e) {
	e.preventDefault();
	$(\'#contact_form_thanks\').css(\'display\',\'none\');
	$(\'.contact_form_container\').css(\'display\',\'none\');
	});

	$(\'.showContactForm\').on(\'click\', function(e) {
	e.preventDefault();
	$(\'#contact_form\').css(\'display\',\'block\');
	$(\'.ajax-loader\').css(\'visibility\',\'hidden\');
	$("#form-247").trigger(\'reset\'); //jquery
	document.getElementById("form-247").reset();
	});

	var datemoment = moment().format(\'LL\');
	$(\'#field-1516767649-text\').val(datemoment);
    $(\'#form-247\').validate({
     	onsubmit: true,
		errorClass: "error-validator",
        errorElement: "div",
        wrapper: "div",
        errorPlacement: function(error, element) {
            offset = element.offset();
            error.insertBefore(element)
            error.addClass(\'message-validator\');
            error.css(\'position\', \'absolute\');
            error.css(\'left\', $(element).position().left + $(element).width() - 145);
        },
        rules: {
        	contactFirstName: "required",
        	contactSurname: "required"
        }
	});

	$.support.cors = true;

	$(\'#form-247\').on(\'submit\', function(e) {
        e.preventDefault();
        //var btn = $(this).children(\'button\');
		var btn = $(\'#contactsubmitbtn\');
        var isvalidate = $(\'#form-247\').valid();
				if (userCheck1 == undefined) {
					alert("Please check the Captcha");
					return false;
				}
        if (isvalidate && userCheck1 != undefined) {
                $(\'.ajax-loader\').css(\'visibility\',\'visible\');
        	btn.prop(\'disabled\', true);
        	var data = $(\'#form-247\').serializeArray().reduce(function(obj, field){
        	obj[field.name] = field.value;
        	return obj;
        	}, {});
		data[\'messages\'] = $(\'#contactMessage\').val();
        	data[\'email\'] = $(\'#contactEmail\').val();
        	data[\'date_submit\'] = $(\'#field-1516767649-text\').val();
        	data[\'subject1\'] = $(\'#contactSubject\').val();
        	data[\'enquiry\'] = $(\'#contactEnquiry\').val();
        	data[\'name\'] = $(\'#contactFirstName\').val()+\' \'+$(\'#contactSurname\').val();
        	data[\'tel\'] = $(\'#contactTel\').val();

        	if ($(\'#contactEnquiry\').val() == \'Reservation Enquiries (Resorts, Events, Weddings, Beach Club)\'){
                data[\'resort\'] = \'Resort: \'+\' \'+$(\'#resortchoice\').val();
        	data[\'replyTo\'] = \'Karma Resorts<res@karmaresorts.com>\';
        	data[\'logoHeader\'] = \'http://karmaresorts.com/wecreate/edm/Karma_Group/thank_you/images/karma-res.jpg\';

        	}if ($(\'#contactEnquiry\').val() == \'Member Enquiries\'){
        	data[\'resort\'] = \'\' ;
        	data[\'replyTo\'] = \'Karma Odyssey<odyssey@odysseypremier.com>\';
        	data[\'logoHeader\'] = \'http://karmaresorts.com/wecreate/edm/Karma_Group/thank_you/images/karma-odyssey.jpg\';

        	}if ($(\'#contactEnquiry\').val() == \'Karma Group Corporate Enquiries (Investment, Media)\'){
        	data[\'resort\'] = \'\' ;
        	data[\'replyTo\'] = \'Karma Group<info@karmagroup.Com>\' ;
        	data[\'logoHeader\'] = \'http://karmaresorts.com/wecreate/edm/Karma_Group/thank_you/images/karma-logo.jpg\';

        	}if ($(\'#contactEnquiry\').val() == \'Career Enquiries\'){
        	data[\'resort\'] = \'\' ;;
        	data[\'replyTo\'] = \'Karma Careers<careers@karmagroup.com>\' ;
        	data[\'logoHeader\'] = \'http://karmaresorts.com/wecreate/edm/Karma_Group/thank_you/images/karma-logo.jpg\';

        	}if ($(\'#contactEnquiry\').val() == \'Karma Experience Enquiries\'){
        	data[\'resort\'] = \'\' ;
        	data[\'replyTo\'] = \'Karma Experience<bookings@karmaexperience.com>\';
        	data[\'logoHeader\'] = \'http://karmaresorts.com/wecreate/edm/Karma_Group/thank_you/images/karmaexperience.jpg\';
        	}


        	console.log(data);

        	$.ajax({
        	type: "POST",
        	url: "';
		$html .= get_karma_api_base_url().'/thankyoumulti",
        	data: data,
        	dataType: "json",
        	}).done(function(data){

	        $.ajax({
	            type: "POST",
	            url: $(this).attr(\'action\'),
	            data:  $(\'#form-247\').serialize(),
	            success: function(data, textStatus, jqXHR) {

					$.ajax({
					    type: "POST",
					    url: "https://karmagroup.com/enquiry.php",
					    data:  $(\'#form-247\').serialize(),
					    success: function(data, textStatus, jqXHR) {

					    }
					});

var first_name = $(\'#contactFirstName\').val();
var last_name = $(\'#contactSurname\').val();
var email = $(\'#contactEmail\').val();
var phone = $(\'#contactTel\').val();
var enquiry_type = $(\'#contactEnquiry\').val();
var enquiry_subject = $(\'#contactSubject\').val();
var enquiry_message = $(\'#contactMessage\').val();
var resort_choice = $(\'#resortchoice\').val();


var yoc = \'2017\';
var lead_source_description = \'Karma Group Enquiry\';

$.ajax({
type: "POST",
url: "https://karmawarehouse.izenoondemand.com/apicollections/whcontactus.php",
contentType: "application/json",
dataType : "json",
data: JSON.stringify({
	"FirstName": first_name,
	"Surname":last_name,
	"Email": email,
	"Phone": phone,
	"Enquiry": enquiry_type,
	"Subject": enquiry_subject,
	"Message": enquiry_message,
	"Destination": resort_choice
}),
success: function(data){
btn.prop(\'disabled\', false);
}
});

	                $(\'#contact_form_thanks\').css(\'display\',\'block\');
	                $(\'#contact_form\').css(\'display\',\'none\');
	                btn.prop(\'disabled\', false);
	                setTimeout(function() { $(\'.close_btn\')[0].click(); }, 5000);

	            }

	        });

	        }).fail(function() {
	        console.log(\'Cannot connect to the API.\');
	        });
        }
        return false;
    });
});
</script>
<!-- contact end -->';

	// enqueue scripts.
	wp_enqueue_script('contact_form');

	return $html;
}

$block_root = 'block';
function karma_render_block($name, $args = array(), $page_id = false) {
	global $block_root;
	require_once get_template_directory(). '/inc/blocks.php';
	if (!$page_id) {
		$page_id = get_the_ID();
	}
	$blocks = array();
	while (have_rows($block_root, $page_id)) {
		the_row();
		$block_name = get_row_layout();
		if ($name !== $block_name) {
			continue;
		}
		$func_name = 'karma_render_' .$block_name;
		if (function_exists($func_name)) {
			$blocks[] = call_user_func_array($func_name, array($args));
		}
	}
	return $blocks;
}

$area_root = 'area';
function karma_render_blocks($page_id = false, $blocks = array()) {
	global $area_root;
	require_once get_template_directory(). '/inc/blocks.php';
	if (!$page_id) {
		$page_id = get_the_ID();
	}
	$results = array();

	$oe = 'odd';
	while (have_rows($area_root, $page_id)) {
		the_row();
		$row_area_name = get_sub_field('area_name');
		while (have_rows('blocks')) {
			if($oe == 'odd'){$oe = 'even';}else{$oe = 'odd';}
			the_row();
			$block_name = get_row_layout();
			$result = '<div class="'. $oe .'">'. _karma_render_block($block_name) .'</div>';
			if ($result) {
				if (!isset($results[$row_area_name])) {
					$results[$row_area_name] = '';
				}
				$results[$row_area_name] .= $result;
			}
		}
	}
	return $results;
}

// ACF fields collapse by default.
function karma_acf_collapse_default() {
	?>
	<script type="text/javascript">
		jQuery(function($) {
			var postboxes = $('.acf-postbox');

			postboxes.addClass('closed');
		});
	</script>
	<?php
}
add_action('acf/input/admin_head', 'karma_acf_collapse_default');

function getDayList($v)
{
$i = 1;
for ($i; $i <= 31; $i++)
{

if($i<=9){
$i2 = "0$i";
}else{
$i2=$i;
}

echo '
<option value="'. $i2 .'"';

if(isset($v)){
if($i2 == $v){ echo ' selected="selected"';}
}

echo '>'. $i2 .'</option>
';
}
}

/**
* Looping years on form page activate
* start 1900 - 2017
*/
function getYearList($v)
{
$i = get_the_date('Y');
for ($i; $i >= 1900; $i--) 
{ 
echo '
<option value="'. $i .'"';

if(isset($v)){
if($i == $v){ echo ' selected="selected"';}
}

echo'>'. $i .'</option>
';  
}
}

/**
 * Twenty Sixteen functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

/**
 * Twenty Sixteen only works in WordPress 4.4 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.4-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'twentysixteen_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * Create your own twentysixteen_setup() function to override in a child theme.
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Twenty Sixteen, use a find and replace
	 * to change 'twentysixteen' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'twentysixteen', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for custom logo.
	 *
	 *  @since Twenty Sixteen 1.2
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1200, 9999 );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'twentysixteen' ),
		'social'  => __( 'Social Links Menu', 'twentysixteen' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'status',
		'audio',
		'chat',
	) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', twentysixteen_fonts_url() ) );

	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif; // twentysixteen_setup
add_action( 'after_setup_theme', 'twentysixteen_setup' );

/**
 * Sets the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'twentysixteen_content_width', 840 );
}
add_action( 'after_setup_theme', 'twentysixteen_content_width', 0 );

/**
 * Registers a widget area.
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'twentysixteen' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Content Bottom 1', 'twentysixteen' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Content Bottom 2', 'twentysixteen' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'twentysixteen_widgets_init' );

if ( ! function_exists( 'twentysixteen_fonts_url' ) ) :
/**
 * Register Google fonts for Twenty Sixteen.
 *
 * Create your own twentysixteen_fonts_url() function to override in a child theme.
 *
 * @since Twenty Sixteen 1.0
 *
 * @return string Google fonts URL for the theme.
 */
function twentysixteen_fonts_url() {
//	$fonts_url = '';
//	$fonts     = array();
//	$subsets   = 'latin,latin-ext';

	/* translators: If there are characters in your language that are not supported by Merriweather, translate this to 'off'. Do not translate into your own language. */
//	if ( 'off' !== _x( 'on', 'Merriweather font: on or off', 'twentysixteen' ) ) {
//		$fonts[] = 'Merriweather:400,700,900,400italic,700italic,900italic';
//	}

	/* translators: If there are characters in your language that are not supported by Montserrat, translate this to 'off'. Do not translate into your own language. */
//	if ( 'off' !== _x( 'on', 'Montserrat font: on or off', 'twentysixteen' ) ) {
//		$fonts[] = 'Montserrat:400,700';
//	}

	/* translators: If there are characters in your language that are not supported by Inconsolata, translate this to 'off'. Do not translate into your own language. */
//	if ( 'off' !== _x( 'on', 'Inconsolata font: on or off', 'twentysixteen' ) ) {
//		$fonts[] = 'Inconsolata:400';
//	}

//	if ( $fonts ) {
//		$fonts_url = add_query_arg( array(
//			'family' => urlencode( implode( '|', $fonts ) ),
//			'subset' => urlencode( $subsets ),
//		), 'https://fonts.googleapis.com/css' );
//	}

//	return $fonts_url;
}
endif;

/**
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'twentysixteen_javascript_detection', 0 );

/**
 * Enqueues scripts and styles.
 *
 * @since Twenty Sixteen 1.0
 */
function twentysixteen_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'twentysixteen-fonts', twentysixteen_fonts_url(), array(), null );

	// Add Genericons, used in the main stylesheet.
	// wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.4.1' );//need to comments

	// Theme stylesheet.
	// wp_enqueue_style( 'twentysixteen-style', get_stylesheet_uri() );

	// Load the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'twentysixteen-ie', get_template_directory_uri() . '/css/ie.css', array( 'twentysixteen-style' ), '20160412' );
	wp_style_add_data( 'twentysixteen-ie', 'conditional', 'lt IE 10' );

	// Load the Internet Explorer 8 specific stylesheet.
	wp_enqueue_style( 'twentysixteen-ie8', get_template_directory_uri() . '/css/ie8.css', array( 'twentysixteen-style' ), '20160412' );
	wp_style_add_data( 'twentysixteen-ie8', 'conditional', 'lt IE 9' );

	// Load the Internet Explorer 7 specific stylesheet.
	wp_enqueue_style( 'twentysixteen-ie7', get_template_directory_uri() . '/css/ie7.css', array( 'twentysixteen-style' ), '20160412' );
	wp_style_add_data( 'twentysixteen-ie7', 'conditional', 'lt IE 8' );

	// Load the html5 shiv.
	wp_enqueue_script( 'twentysixteen-html5', get_template_directory_uri() . '/js/html5.js', array(), '3.7.3' );
	wp_script_add_data( 'twentysixteen-html5', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'twentysixteen-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20160412', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'twentysixteen-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20160412' );
	}

	wp_enqueue_script( 'twentysixteen-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20160412', true );

	wp_localize_script( 'twentysixteen-script', 'screenReaderText', array(
		'expand'   => __( 'expand child menu', 'twentysixteen' ),
		'collapse' => __( 'collapse child menu', 'twentysixteen' ),
	) );
}
add_action( 'wp_enqueue_scripts', 'twentysixteen_scripts' );

/**
 * Adds custom classes to the array of body classes.
 *
 * @since Twenty Sixteen 1.0
 *
 * @param array $classes Classes for the body element.
 * @return array (Maybe) filtered body classes.
 */
function twentysixteen_body_classes( $classes ) {
	// Adds a class of custom-background-image to sites with a custom background image.
	if ( get_background_image() ) {
		$classes[] = 'custom-background-image';
	}

	// Adds a class of group-blog to sites with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of no-sidebar to sites without active sidebar.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'twentysixteen_body_classes' );

/**
 * Converts a HEX value to RGB.
 *
 * @since Twenty Sixteen 1.0
 *
 * @param string $color The original color, in 3- or 6-digit hexadecimal form.
 * @return array Array containing RGB (red, green, and blue) values for the given
 *               HEX code, empty array otherwise.
 */
function twentysixteen_hex2rgb( $color ) {
	$color = trim( $color, '#' );

	if ( strlen( $color ) === 3 ) {
		$r = hexdec( substr( $color, 0, 1 ).substr( $color, 0, 1 ) );
		$g = hexdec( substr( $color, 1, 1 ).substr( $color, 1, 1 ) );
		$b = hexdec( substr( $color, 2, 1 ).substr( $color, 2, 1 ) );
	} else if ( strlen( $color ) === 6 ) {
		$r = hexdec( substr( $color, 0, 2 ) );
		$g = hexdec( substr( $color, 2, 2 ) );
		$b = hexdec( substr( $color, 4, 2 ) );
	} else {
		return array();
	}

	return array( 'red' => $r, 'green' => $g, 'blue' => $b );
}

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for content images
 *
 * @since Twenty Sixteen 1.0
 *
 * @param string $sizes A source size value for use in a 'sizes' attribute.
 * @param array  $size  Image size. Accepts an array of width and height
 *                      values in pixels (in that order).
 * @return string A source size value for use in a content image 'sizes' attribute.
 */
function twentysixteen_content_image_sizes_attr( $sizes, $size ) {
	$width = $size[0];

	840 <= $width && $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 62vw, 840px';

	if ( 'page' === get_post_type() ) {
		840 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
	} else {
		840 > $width && 600 <= $width && $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 61vw, (max-width: 1362px) 45vw, 600px';
		600 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
	}

	return $sizes;
}
add_filter( 'wp_calculate_image_sizes', 'twentysixteen_content_image_sizes_attr', 10 , 2 );

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for post thumbnails
 *
 * @since Twenty Sixteen 1.0
 *
 * @param array $attr Attributes for the image markup.
 * @param int   $attachment Image attachment ID.
 * @param array $size Registered image size or flat array of height and width dimensions.
 * @return string A source size value for use in a post thumbnail 'sizes' attribute.
 */
function twentysixteen_post_thumbnail_sizes_attr( $attr, $attachment, $size ) {
	if ( 'post-thumbnail' === $size ) {
		is_active_sidebar( 'sidebar-1' ) && $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 60vw, (max-width: 1362px) 62vw, 840px';
		! is_active_sidebar( 'sidebar-1' ) && $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px';
	}
	return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'twentysixteen_post_thumbnail_sizes_attr', 10 , 3 );

/**
 * Modifies tag cloud widget arguments to have all tags in the widget same font size.
 *
 * @since Twenty Sixteen 1.1
 *
 * @param array $args Arguments for tag cloud widget.
 * @return array A new modified arguments.
 */
function twentysixteen_widget_tag_cloud_args( $args ) {
	$args['largest'] = 1;
	$args['smallest'] = 1;
	$args['unit'] = 'em';
	return $args;
}
add_filter( 'widget_tag_cloud_args', 'twentysixteen_widget_tag_cloud_args' );

//add_filter( 'jpeg_quality', create_function( '', 'return 100;' ) );

//add_filter(‘jpeg_quality’, function($arg){return 100;});

//function defer_parsing_of_js ( $url ) {
//if ( FALSE === strpos( $url, '.js' ) ) return $url;
//if ( strpos( $url, 'jquery.js' ) ) return $url;
//return "$url' defer ";
//}
//add_filter( 'clean_url', 'defer_parsing_of_js', 11, 1 );

//agus: just running on above 3G network
if (!(is_admin() )) {
     function defer_parsing_of_js ( $url ) {
	if ( FALSE === strpos( $url, '.js' ) ) return $url;

	if ( strpos( $url, 'x-head.min.js' ) ) return $url;
	if ( strpos( $url, 'jquery.js' ) ) return $url;
	return "$url' defer='defer";
	}
add_filter( 'clean_url', 'defer_parsing_of_js', 11, 1 );
}else{
	$GLOBALS['admin_page_hooks']['themepunch-google-fonts'] = true;
}

function _remove_script_version( $src ){
$parts = explode( '?ver', $src );
return $parts[0];
}
add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );
add_action('wp_enqueue_scripts', 'wpse26822_script_fix', 100);
function wpse26822_script_fix()
{
    wp_deregister_script('essential-grid-essential-grid-script');
    wp_register_script('essential-grid-essential-grid-script', 'https://karmagroup.com/wp-content/plugins/essential-grid/public/assets/js/jquery.themepunch.essential-2.js', array( 'jquery', 'tp-tools' ), '2.1.0.2', true );
}

function get_timeshare_resort_IDs(){
  global $wpdb;
  $query = "select DISTINCT b.ID, a.meta_value from wp_postmeta a
	inner join wp_posts b on a.post_id = b.ID
where 
	meta_key = 'timeshare_resort' 
	and meta_value = '1' 
	and b.post_type = 'page' 
	and b.post_status = 'publish'";
  $rows = $wpdb->get_results( $query, ARRAY_A );
  $results = array();
  foreach( $rows as $row ){
    $results[] = $row['ID'];
  }
  return $results;
}
