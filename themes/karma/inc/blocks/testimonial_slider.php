<?php
$fields = array(
	'slides' => get_sub_field('slides')
);
$html = '<div id="testimonials">
			<div class="container wide cf">
				<div class="testimonial_slide_container">';
$html .= '<ul class="slides">';
foreach ($fields['slides'] as $slide) {
	if (empty($slide['quote']) || !preg_match('/\S/', $slide['quote'])) {
		continue;
	}
	$html .= '<li>';
	$quote = strip_tags($slide['quote']);
	$html .= '<div class="left">
				 <span class="quote georgia_font italic"><span class="open_quotes"></span>
				 ' .$quote. '<span class="close_quotes"></span>';
	$html .= '<p class="name_location georgia_fonr italic">' .$slide['name']. '</p>';
	$html .= '</div>';	// left
	$html .= '<div class="right">';
	$image = $slide['image']['url'];
	$html .= '<div class="image" alt="Luxury Hotels, Resorts & Accommodation – Karma Group" style="background: url(\''.$image.'\') center; background-size: cover;"></div></div>';
	$html .= '</li>';
}
$html .= '</ul>';
$html .= '</div></div></div>';
?>