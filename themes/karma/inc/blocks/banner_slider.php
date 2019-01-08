<style type="text/css">
	#weedingbtn_right {
		text-shadow: 0px 0px 13px #5f5b5b80;
		color: #ffffff;
		font-size: 20px;
		font-weight: 600;
		position: absolute;
		right: 100px;
		bottom: 50px;
		border: 2px solid #ffffff;
		padding: 10px;
		background-color: #00000069
	}
	#weedingbtn_right .white_button{
		background-color: #8d7249;
	}
	#weedingbtnblack{
		position: absolute;
		left: 50px;
		top: 210px;
	}
	#weedingbtnblack img{
		max-width: 560px !important;
	}
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
	#weedingbtn{
		position: absolute;
		left: 70px;
		top: 60px;
	}

	#weedingbtn .white_button{
		background-color: #8d7249;
	}

	#weedingbtns{
		position: absolute;
		right: 70px;
		top: 60px;
	}

	#weedingbtns .white_button{
		background-color: #8d7249;
	}

	#videoresorts{		
		background-color: rgba(0, 0, 0, 0); 
		object-position: center center; 
		object-fit: cover; width: 100%; 
		position: relative;
		top: -200px;
	}
	@media all and (max-width: 1025px) {
		#weedingbtnblack img {
		max-width: 250px !important;
		}

	}
	@media all and (max-width: 640px) {
		#weedingbtn .white_button{
			font-size:11px;
		}
		#weedingbtn_right .white_button{
			font-size:20px;
			width: 253px
		}
		#weedingbtn_right {
			position: absolute;
			left: 50px;
			bottom: 20px;
			width: 280px
		}
		#videoresorts{		
			position: relative;
			top: 0 !important;
		}
		#weedingbtn {
			position: absolute;
			left: 10px;
			top: 15px;
		}

		#weedingbtns .white_button{
			font-size:11px;
		}
		#weedingbtns {
			position: absolute;
			left: 10px;
			top: 15px;
		}
		
		#weedingbtnblack {
			position: absolute;
			top: 16%;
			left: 50%;
			margin-right: -50%;
			transform: translate(-50%, -50%)
		}

		#weedingbtnblack img{
			max-width: 250px !important;
		}
	}

	


</style>

<?php $page_id = get_the_ID(); ?>

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
		'add_top_padding' => get_sub_field('add_top_padding')
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

$html .= '<div id="banner_slider_wrapper">
		 <div id="banner" class="banner_slider ' .$class. '"><div class="container">
			<div class="content" style="' .$styles. '">';

if ($page_id == '1285') {
	$html .= '<div id="weedingbtn"><a class="white_button" title="Read about Le Preverger\'s most recent wedding here" href="https://karmagroup.com/news-events/chris-robshaw-wedding-le-preverger/" target="_blank" rel="noopener noreferrer">Read about Le Preverger’s most recent wedding here</a></div>';
}


if ($page_id == '914') {
	$html .= '<div id="weedingbtn"><a class="white_button" title="Top 5 Reasons to Visit Scilly in Spring..." href="https://karmagroup.com/find-destination/karma-retreats/karma-st-martins/autumn-at-karma-st-martins/" target="_blank" rel="noopener noreferrer">Top 5 Reasons to Visit Scilly in Spring...</a></div>';
}

if ($page_id == '22179') {
	$html .= '<div id="weedingbtn_right">Don\'t miss out on this offer <a class="white_button" title="Book Now" href="https://karma.dbm.guestline.net/availability?hotel=KARMAJIMB&promoCode=holidaywithkids&arrival=2019-02-15&departure=2019-02-19&adults=2&children=0" rel="noopener noreferrer">BOOK NOW</a></div>';
}

//if ($page_id == '837') {

//$html .= '<div id="weedingbtnblack"><a class="" title="Blackfriday" href="https://karma.dbm.guestline.net/availability?hotel=KARMAJIMB&promoCode=BLACKFRI" target="_blank" rel="noopener noreferrer"><img src="https://storage.googleapis.com/karmagroup-d66ca.appspot.com/karmagroupcdn/2018/11/241a059f-blackfriday.jpg"></a></div>';

//}
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

  	$html .= '@media only screen 
	  and (min-device-width : 375px) 
	  and (max-device-width : 667px) 
	  and (orientation : landscape) {'; //FOR IPHONE LANDSCAPE

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

  	$html .= '@media only screen 
	  and (min-device-width : 375px) 
	  and (max-device-width : 667px) 
	  and (orientation : portrait) {'; //FOR IPHONE PORTRAIT

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
  if( isset($slide['video_src']) && $slide['video_src'] ){
    $slides[] = array(
      'video' => array(
        'src' => array( $slide['video_src'] ),
        'loop' => true,
        'mute' => true
      )
    );
    break;
  }
  
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










