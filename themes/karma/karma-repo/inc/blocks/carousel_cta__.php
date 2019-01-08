<?php

$page_id = get_the_ID();
$subdata = get_post_meta($page_id);

// echo'<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>';
// echo $subdata['area_0_special_offers_mobile'][0]; exit;

$accordion_class = ' for-accordion';

$html = '<div class="cf'. $accordion_class .'" id="carousel_cta_section">
			
			<h3 class="title gold_text georgia_font italic" style="margin: 0 auto 0px; display: table;">Exclusive Offers</h3>

			<div class="container wide cf'. $accordion_class .'">
				<div class="carousel_container cf">';
$html .= '<ul class="slides">';

$i = 0;

		//$parent = get_post($page_id);

		$args = array(
		    'post_type' => 'page',
			'orderby' => 'date',
			'order' => 'ASC',     
		    'meta_key' => '_wp_page_template',
		    'meta_value' => 'exclusive-offers.php',
		    'posts_per_page'   => -1,   
		    // 'post_parent' => $page_id,
			);

		$pages = get_posts($args);

		foreach ($pages as $page) {

			$i++;

			$subdata = get_post_meta($page->ID);
			$text = $subdata['area_0_blocks_0_text'][0];
			$image_id = $subdata['area_0_blocks_0_image'][0];
			$image_url = wp_get_attachment_url($image_id);
			$link = $subdata['area_0_special_offers_more_link'][0]; //get_permalink($page->ID);


			if ($accordion_class) {
				$alt_class = 'odd';
				if ($i%2 == 0) {
					$alt_class = 'even';
				}
				$html .= '<div class="accordion-heading '.$alt_class.' cta'.$i.'">
								<div class="icon"><i class="fa '.$slide['icon_code'].'" aria-hidden="true"></i></div>
								'.$page->post_title .'
								<div class="indicator"></div>
							</div>
							<li class="accordion-content '.$alt_class.' cta'.$i.'">';
			} else {
				$html .= '<li>';
			}
			$html .= '<div class="carousel">';

			if (!empty($image_url)) {
				// @todo link
				//$html .= '<div class="image" style="background:url(' .$slide['image']['sizes']['medium']. ')  center;background-size: cover"></div>';
				$html .= '<div title="' .$page->post_title. '" alt="' .$page->post_title. '" class="image" style="background:url(' .$image_url. ')  center;background-size: cover"></div>';
				//print_r($slide['image']);
			}
			$html .= '<div class="content">';
			if (!empty($page->post_title)) {
				$html .= '<h2 class="georgia_font italic">' .$page->post_title. '</h2>';
			}
			if (!empty($text)) {
				$html .= $text;
			}
			if (!empty($link)) {
				$html .= '<a class="button_outline" href="' .$link. '" target="_blank" title="' .$page->post_title. '" title="' .$page->post_title. '" alt="' .$page->post_title. '" style="margin-bottom: 8px;">View More</a>';
			}
			$html .= '</div></div></li>';
		}


$html .= '</ul></div></div></div>
			<script>
			$(document).ready(function() {';
				if ($accordion_class) {
					$html .= 'if(isMobile() == false) { // only use carousel slider on desktop
							';
				}
			    $html .= '$("#carousel_cta_section .carousel_container").flexslider({
			        animation: "slide",
			        slideshow: true,
			        slideshowSpeed: 5000,
			        controlNav: false,
			        prevText: " ",
			        nextText: " ",
			        minItems: getGridSize(),
			        maxItems: getGridSize(),
			        move: getGridSize(),
			        itemWidth: 210
			    });
			    		
			    // Chooses how many thumbnails to show depending on screen size.
			    function getGridSize() {
			      return ((window.innerWidth || document.documentElement.clientWidth) < 600) ? 1 : 
			      ((window.innerWidth || document.documentElement.clientWidth) < 1200) ? 2 : 3;
			    }';
			    if ($accordion_class) {		
					$html .= '
			    }';
			    }
				$html .= '
				// Dynamically tells flexslider how many thumbs to show.
				$(window).resize(function() {
				    var gridSize = getGridSize();
				    var vars = null;
				    $("#carousel_cta_section .carousel_container").data("flexslider").vars.minItems = gridSize;
				    $("#carousel_cta_section .carousel_container").data("flexslider").vars.maxItems = gridSize;
				    // $("#product_carousel").data("flexslider").vars.move = gridSize;
				});
			});
			</script>';
?>	