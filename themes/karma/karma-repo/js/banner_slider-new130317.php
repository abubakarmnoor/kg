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

$charset = get_bloginfo('charset');

// title and sub title
if (!empty($fields['title'])) {
	$html .= '<h2 class="title" style="color:' .$fields['text_color']. '">' .htmlentities($fields['title'], ENT_QUOTES, $charset). '
				 <span>' .htmlentities($fields['sub_title'], ENT_QUOTES, $charset). '</span>
			  </h2>';
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
}
$html .= '</div>';
if ($fields['add_top_padding']) {
	$html .= '</div>';
}
?>