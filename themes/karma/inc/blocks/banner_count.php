<style type="text/css">

	#mainslider_wrapper{
		height: 500px;
		overflow: hidden;
		width: 100%;
	}
	#mainslider{
		width: 1500px;
	}	
	#mainslider img{
		border: 3px solid #f00;
		height: 500px!important;
	}

	.banner_slider_top_padding{
		position:relative;
	}

#karma .text_image_block .right {
    background-position: center bottom !important;
}

#karma #flex_banner .content {
   background: none;
}

	#countdown{
	background-color: rgba(0,0,0,.5);
	padding:20px 0;
	width:100%;
	display:table;
	position:absolute;
	bottom:0;
	z-index:99;
	}

	.countdown-container {
    position: relative;
    max-width: 500px;
	width: 95%;
    margin: 0px auto;
	}

	.countdown-container .clock-item{
		width: 15%;
		float:left;
		margin: 0 5%;
	}
	.countdown-container .clock-item .inner {
	    height: 0px;
	    padding-bottom: 90%;
	    position: relative;
	    width: 90%;
	    /* border: 1px solid #f00; */
	    margin: auto;
	}

	.countdown-container .clock-canvas {
		background-color: rgba(255, 255, 255, .1);
		border-radius: 50%;
		height: 0px;
		padding-bottom: 100%;
	}

	.countdown-container .text {
		color: #fff!important;	
		font-size: 16px!important;
		font-weight: bold;	
		margin-top: -50px;
		position: absolute;
		top: 75%;
		text-align: center;
		text-shadow: 1px 1px 1px rgba(0, 0, 0, 1);
		width: 100%;
	}
	.countdown-container .text p{
	    margin: 6px!important;
	    line-height: 100%!important;
	}
	.countdown-container .text .val {
		font-size: 30px!important;
	}

	.countdown-container .text .type-time {
		font-size: 8px!important;
	}

	@media (max-width:667px)  {
#karma h2 {
font-size: 18px;
font-weight: 300;
margin: 6px 0;
}

#karma p {
font-size: 14px;
font-weight: 300;
margin: 6px 0;
}

#karma #banner.content_banner p {
font-size: 20px !important;
}

#destination_mobile_outside{
display:none;
}

#flex_banner > ul > li {
background-position: center top !important;
min-height: 200px !important;
}

#karma #flex_banner .content {
padding: 115px 0 130px 0;
}

#karma h3 {
font-size: 18px;
}

#karma #banner {
margin-top: -10px;
}

#karma .text_image_block .right {
    min-height: 240px;
}

#karma #banner.content_banner p {
    display: block !important;
}

#karma #banner .content {
     padding: 130px 0 100px 0; 
}


		.countdown-container{
			max-width: 400px;	
		}
		.countdown-container .clock-item{
			width: 19%;
			margin: 0 3%;
		}	
		.countdown-container .text .val {
		font-size: 20px!important;
		}
		.countdown-container .text p{
	    margin: 10px!important;
		font-style: italic;
		}
	}
#karma .text_image_block .left{
	padding: 20px 90px;
}	

</style>

<?php
if (!isset($fields)) {
	$fields = array(
		'title' => get_sub_field('title'),
		'sub_title' => get_sub_field('sub_title'),
		'text_content' => get_sub_field('text_content'),
		'logo' => get_sub_field('logo'),	// #id
		'text_color' => get_sub_field('text_color'), 	// color code
		'hide_find_destination' => get_sub_field('hide_find_a_destination_button'),		// 1 = yes, 0 = no
		'show_background_shadow' => get_sub_field('show_background_shadow'), 	// 1 = yes, 0 = no
		'slides' => get_sub_field('slides'),	// array of layout with image id
		'include_booking_bar' => get_sub_field('include_booking_bar'),
		'add_top_padding' => get_sub_field('add_top_padding'),
		'timer' => get_sub_field('timer')
	);
}

$fields['text_color'] = $fields['text_color'] ? $fields['text_color'] : '#ffffff';

$styles = $fields['show_background_shadow'] == 1 ? 'background:none;' : '';
//$styles .= $fields['hide_find_destination'] == 1 ? 'padding: 225px 0 130px 0;' : '';
$class = is_front_page() ? 'home_banner' : 'content_banner';

$html = '';

if ($fields['add_top_padding']) {
	$html .= '<div class="banner_slider_top_padding">';
}

if ($fields['timer']){
	$html .= '<div id="countdown">
    	                
                <div class="countdown countdown-container">
                    <div class="clock row">
                        <div class="clock-item clock-days countdown-time-value">
                            <div class="wrap">
                                <div class="inner">
                                    <div id="canvas-days" class="clock-canvas"></div>
                
                                    <div class="text">
                                        <p class="val">0</p>
                                        <p class="type-days type-time">DAYS</p>
                                    </div><!-- /.text -->
                                </div><!-- /.inner -->
                            </div><!-- /.wrap -->
                        </div><!-- /.clock-item -->
                
                        <div class="clock-item clock-hours countdown-time-value">
                            <div class="wrap">
                                <div class="inner">
                                    <div id="canvas-hours" class="clock-canvas"></div>
                
                                    <div class="text">
                                        <p class="val">0</p>
                                        <p class="type-hours type-time">HOURS</p>
                                    </div><!-- /.text -->
                                </div><!-- /.inner -->
                            </div><!-- /.wrap -->
                        </div><!-- /.clock-item -->
                
                        <div class="clock-item clock-minutes countdown-time-value">
                            <div class="wrap">
                                <div class="inner">
                                    <div id="canvas-minutes" class="clock-canvas"></div>
                
                                    <div class="text">
                                        <p class="val">0</p>
                                        <p class="type-minutes type-time">MINUTES</p>
                                    </div><!-- /.text -->
                                </div><!-- /.inner -->
                            </div><!-- /.wrap -->
                        </div><!-- /.clock-item -->
                
                        <div class="clock-item clock-seconds countdown-time-value">
                            <div class="wrap">
                                <div class="inner">
                                    <div id="canvas-seconds" class="clock-canvas"></div>
                
                                    <div class="text">
                                        <p class="val">0</p>
                                        <p class="type-seconds type-time">SECONDS</p>
                                    </div><!-- /.text -->
                                </div><!-- /.inner -->
                            </div><!-- /.wrap -->
                        </div><!-- /.clock-item -->
                    </div><!-- /.clock -->
                </div><!-- /.countdown-wrapper -->                        
        </div>';
}

$html .= '<div id="banner_slider_wrapper">
		 <div id="banner" class="banner_slider ' .$class. '"><div class="container">
			<div class="content" style="' .$styles. '">';

$charset = get_bloginfo('charset');

// title and sub title
if (!empty($fields['title'])) {
	$html .= '<p class="title" style="font-size: 48px;font-style: normal;font-family: Open Sans, sans-serif;font-weight: 300;text-transform: uppercase;margin: 6px 0;color:' .$fields['text_color']. '">' .htmlentities($fields['title'], ENT_QUOTES, $charset). '
				 <span style="font-style: italic;text-transform: none;font-family: Georgia,Times,Times New Roman,serif;" >' .htmlentities($fields['sub_title'], ENT_QUOTES, $charset). '</span>
			  </p>';
}

// text content
if (!empty($fields['text_content'])) {
	$fields['text_content'] = wp_strip_all_tags($fields['text_content']);

	$html .= '<p style="color:' .$fields['text_color']. '">' .nl2br($fields['text_content']). '</p>';
}

// logo
if ($fields['logo'] && !empty($fields['logo'])) {
	// img html
	$img = '<img src="' .$fields['logo']['sizes']['medium']. '" alt="' .$fields['logo']['alt']. '" title="' .$fields['logo']['title']. '">';
	$html .= $img;		
}

// find destination
if ($fields['hide_find_destination'] == 0) {
	$html .= karma_getFindAResortMenu();
}

$html .= '</div></div></div>';

////---BEGIN GRAB image, image_iphone_l, image_iphone_p///// BY NAWi
$resp_slider_imgs = array();

$i = 0;
foreach ($fields['slides'] as $slide) {

		$image = $slide['image'];	
		if ($image) {
			$resp_slider_imgs[$i]['image'] = $image['url'];
		}		

		$image_for_retina_display = $slide['image_for_retina_display'];
		if ($image_for_retina_display) {
			$resp_slider_imgs[$i]['image_for_retina_display'] = $image_for_retina_display['url'];
		}

		$image_iphone_l = $slide['image_iphone_l'];
		if ($image_iphone_l) {
			$resp_slider_imgs[$i]['image_iphone_l'] = $image_iphone_l['url'];
		}

		$image_iphone_p = $slide['image_iphone_p'];
		if ($image_iphone_p) {
			$resp_slider_imgs[$i]['image_iphone_p'] = $image_iphone_p['url'];
		}

		$image_for_ipad = $slide['image_for_ipad'];
		if ($image_for_ipad) {
			$resp_slider_imgs[$i]['image_for_ipad'] = $image_for_ipad['url'];
		}

	$i++;
}

//echo "<pre>resp_slider_imgs: "; print_r($resp_slider_imgs); echo "</pre>"; 

$html .= '
  <style>';

			$i = 0;
			foreach ($fields['slides'] as $slide) { 

		  		$html .= '	
				      .vegas-slide-inner.nb'. $i .'{
				          background-image: url(\''. $resp_slider_imgs[$i]['image'] .'\');
				      }';
				$i++;
			}

  	//$html .= '@media screen and (min-width: 1367px) {'; //FOR RETINA DISPLAY
  	$html .= '@media  only screen and (min-device-pixel-ratio: 2), only screen and (min-resolution: 192dpi) {'; //FOR RETINA DISPLAY

			$i = 0;
			foreach ($fields['slides'] as $slide) { 

				$img = $resp_slider_imgs[$i]['image_for_retina_display'];

				if(trim($img) != ''){

			  		$html .= '
					      .vegas-slide-inner.nb'. $i .'{
					          background-image: url(\''. $img .'\');
					      }';
				}
				$i++;
			}
	$html .= '}';

  	$html .= '@media screen and (max-width: 1024px) {'; //FOR IPAD

			$i = 0;
			foreach ($fields['slides'] as $slide) { 

				$img = $resp_slider_imgs[$i]['image_for_ipad'];

				if(trim($img) != ''){

			  		$html .= '
					      .vegas-slide-inner.nb'. $i .'{
					          background-image: url(\''. $img .'\');
					      }';
				}
				$i++;
			}
	$html .= '}';

  	$html .= '@media screen and (max-width: 735px) {'; //FOR IPHONE LANDSCAPE

			$i = 0;
			foreach ($fields['slides'] as $slide) { 

				$img = $resp_slider_imgs[$i]['image_iphone_l'];

				if(trim($img) != ''){

			  		$html .= '
					      .vegas-slide-inner.nb'. $i .'{
					          background-image: url(\''. $img .'\');
					      }';
				}
				$i++;
			}
	$html .= '}';

  	$html .= '@media screen and (max-width: 375px) {'; //FOR IPHONE PORTRAIT

			$i = 0;
			foreach ($fields['slides'] as $slide) { 

				$img = $resp_slider_imgs[$i]['image_iphone_p'];
				
				if(trim($img) != ''){

			  		$html .= '
					      .vegas-slide-inner.nb'. $i .'{
					          background-image: url(\''. $img .'\');
					      }';
				}
				$i++;
			}
	$html .= '}';


$html .= '
  </style>
';
////---END GRAB image, image_iphone_l, image_iphone_p///// BY NAWi

// slides
$slides = array();
foreach ($fields['slides'] as $slide) {
	$img = $slide['image'];

	if ($img) {
		$slides[] = $img['url'];
	}
}

// slider script.
wp_localize_script('banner_slider', 'slides', $slides);
wp_enqueue_script('banner_slider');

// include booking bar.
if ($fields['include_booking_bar']) {
	require_once get_template_directory(). '/booking/bookingbar.php';
	$html .= $booking_html;
}else {
     echo '<style type="text/css">
         .booking-bar-wrapper{
                height:0;width:0;overflow:hidden;
                    }   
                        </style>';
                    	require_once get_template_directory(). '/booking/bookingbar.php';
                    	    $html .= $booking_html;
                    	    
                    	    }
                    	    


$html .= '</div>';
if ($fields['add_top_padding']) {
	$html .= '</div>';
}

?>

<script type="text/javascript" src="<?php echo get_option( 'home' ); ?>/wp-content/themes/karma/js/kinetic.js"></script>
<script type="text/javascript" src="<?php echo get_option( 'home' ); ?>/wp-content/themes/karma/js/jquery.final-countdown.js"></script>
<script type="text/javascript">  
    $('document').ready(function() {  
    	'use strict';  
    	var date1 = '<?php echo get_sub_field('date_start') ?>';
    	var date2 = '<?php echo get_sub_field('date_end') ?>';


    	var myDate1 = new Date(date1); 
    	var myDate2 = new Date(date2);
    	

		var d1t1 = myDate1.getTime() / 1000.0;
		var d1t2 = myDate2.getTime() / 1000.0;


		// var d1t1 = Math.round(myDate1.getTime()/1000.0);
		// var d1t2 = Math.round(myDate2.getTime()/1000.0);

		
		var start = '1522039073';
		var end = '1525063073';
		var now = new Date().getTime() / 1000;

		$('.countdown').final_countdown({
		'start': start,
		'end': end,
		'now': now,
		seconds: {
		borderColor: '#af936c',
		borderWidth: '6'
		},
		minutes: {
		borderColor: '#af936c',
		borderWidth: '6'
		},
		hours: {
		borderColor: '#af936c',
		borderWidth: '6'
		},
		days: {
		borderColor: '#af936c',
		borderWidth: '6'
		}

		});
		console.log('date1:'+start);
		console.log('date2:'+end);

	});
	
</script>
