<style>

#karma #carousel_cta_section .carousel {
    padding: 10px 10px 0 10px;
}
#karma #carousel_cta_section .flex-next {
    margin-top: -40px;
}
#karma #carousel_cta_section .flex-prev {
    margin-top: -40px;
}

.hvrbox {
    background:#f4f4f4 ;
    position:relative;
}

.hvrbox,
.hvrbox * {
	box-sizing: border-box;
}
.hvrbox {
	position: relative;
	display: inline-block;
	overflow: hidden;
	max-width: 100%;
	height: auto;
}
.hvrbox img {
    width: 75%;
    margin: 0 auto;
    padding: 16px 10px;
}
.hvrbox .hvrbox-layer_bottom {
	display: block;
}
.hvrbox .hvrbox-layer_top {
	opacity: 0;
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	width: 100%;
	height: 100%;
	background: rgba(0, 0, 0, 0.8);
	color: #fff;
	padding: 15px;
	-moz-transition: all 0.4s ease-in-out 0s;
	-webkit-transition: all 0.4s ease-in-out 0s;
	-ms-transition: all 0.4s ease-in-out 0s;
	transition: all 0.4s ease-in-out 0s;
}
.hvrbox:hover .hvrbox-layer_top,
.hvrbox.active .hvrbox-layer_top {
	opacity: 1;
}
.hvrbox .hvrbox-text {
	text-align: center;
	width: 90%;
	font-size: 18px;
	display: inline-block;
	position: absolute;
	top: 50%;
	left: 50%;
	-moz-transform: translate(-50%, -50%);
	-webkit-transform: translate(-50%, -50%);
	-ms-transform: translate(-50%, -50%);
	transform: translate(-50%, -50%);
}
.hvrbox .hvrbox-text_mobile {
	font-size: 15px;
	border-top: 1px solid rgb(179, 179, 179); /* for old browsers */
	border-top: 1px solid rgba(179, 179, 179, 0.7);
	margin-top: 5px;
	padding-top: 2px;
	display: none;
}
.hvrbox.active .hvrbox-text_mobile {
	display: block;
}
@media only screen and (max-width: 769px){
	/* #karma #carousel_cta_section .flex-next {
   	 right: -1px;
	}
	#karma #carousel_cta_section .flex-prev {
   	 left: -1px;
	} */

	#karma#carousel_cta_section:hover .flex-next {
    	right: 4px !important;
	}

	#karma #carousel_cta_section .flex-next {
    	right: 4px !important;
	}

	#karma#carousel_cta_section:hover .flex-prev {
    	left: 4px !important;
	}

	#karma #carousel_cta_section .flex-prev {
    	left: 4px !important;
	}

	.hvrbox {
		max-width: 95%;
		display:table;
		margin:0 auto;
	}
	#karma #carousel_cta_section .carousel {
    padding: 0px;
	}
	.flex-direction-nav {
			display: block !important;
	}
}
@media only screen and (max-width: 480px){
	.hvrbox {
		max-width: 75%;
	}
}
</style>


<?php
global $post;
$fields = array(
	'items_per_slide' => get_sub_field('items_per_slide'),
	'slides' => get_sub_field('slides'),
);
$accordion_class = ' for-accordion';
$isThisSpa = false;
$html = '<div class="cf'.$accordion_class.'" id="carousel_cta_section">
			<div class="container wide cf'.$accordion_class.'">
				<div class="carousel_container cf">';
$html .= '<ul class="slides">';
$i = 0;
foreach ($fields['slides'] as $slide) {

	$html .= '<li>';
	$html .= '<div class="carousel">';
	$link = $slide['link_url'];
	if (!empty($slide['external_link'])) {
		$link = $slide['external_link'];
	}
	if (empty($slide['link_text'])) {
		$slide['link_text'] = 'Click Here';
	}
	if (!empty($slide['image'])) {
		// @todo link
		//$html .= '<div class="image" style="background:url(' .$slide['image']['sizes']['medium']. ')  center;background-size: cover"></div>';
		// $html .= '<div title="' .$slide['title']. '" alt="' .$slide['title']. '" class="image" style="background:url(' .$slide['image']['url']. ')  center;background-size: cover"></div>';

		$html .= '<div title="' .$slide['title']. '" alt="' .$slide['title']. '" class="hvrbox" style="">
		<img class="hvrbox-layer_bottom" src=' .$slide['image']['sizes']['large']. '>
		<div class="hvrbox-layer_top">			
			<div class="hvrbox-text">
				<p class="georgia_font italic" style="text-align: center;color:#ffffff;">'.$slide['awards_name'].'<br>'.$slide['awards_give'].'</p>
				<hr style="color: #ffffff;width: 45%;text-align: center;margin: 0 auto;border: 1px solid #ffffff;">		
				<p class="georgia_font italic" style="text-align: center;color:#ffffff;">'.$slide['awards_location'].'</p>
			</div>
		</div>
		</div>';
		//print_r($slide['image']);
	}
	$html .= '<div class="content">';	
	$html .= '</div></div></li>';
}
$html .= '</ul></div></div></div>';
			$html .= '<script>
			$(document).ready(function() {';
			    $html .= '$("#carousel_cta_section .carousel_container").flexslider({
			        animation: "slide",
			        slideshow: false,
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
			      ((window.innerWidth || document.documentElement.clientWidth) < 1200) ? 3 : 4;
			    }';

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

