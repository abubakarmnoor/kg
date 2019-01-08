<?php
$html = '<div id="flex_banner" class="flex_banner_'.get_the_ID().'">	
<ul class="slides cf">';
foreach (get_sub_field('slides') as $slide) {
	$background_image_url = isset($slide['background_image']['url']) ? $slide['background_image']['url'] : '';
	$html .= '<li class="slide" style="background-image: url(\''.$background_image_url.'\'); background-size: cover; background-position: center;">
        	<div class="container">
	        	<div class="content">'.$slide['content'].'</div>
			</div>
        </li>';
}
$html .= '</ul>
</div><!-- #banner -->
<script>
$(document).ready(function() {
    $(".flex_banner_'.get_the_ID().'").flexslider({
        controlNav: false,
        directionNav: false,
        smoothHeight: false,
        prevText: "",
        nextText: "",
        slideshowSpeed: 6000,
        animation: "fade",
    });
});
// Match the height of tallest slide
var evenSliderHeight = function(slideContainer, slideItem) {
  var slider_height = 0;
  var $slider_slide = $(slideContainer).find(slideItem);
  $slider_slide.each(function() {
    var __height = $(this).outerHeight(true);
    if ( slider_height < __height ) {
       slider_height = __height;
    }
  });
  $slider_slide.css("min-height", slider_height);
};
evenSliderHeight(".flex_banner_'.get_the_ID().'", ".slide");
</script>';
?>