<?php
/**
 * Template Name: Thankyou New
 */


get_header();
?>

<style type="text/css">
#section6 {
    background-color: #eee;
    font-style: italic;
    padding: 40px 0;
    display: table;
    width: 100%;
}
#section6 p {
    color: #8d7249;
    font-size: 200%;
}

#section6 h3 {
    color: #555;
    font-weight: 900 !important;
}

.sosmed{
	max-width: 900px;
	width: auto;
	display: table;
	margin: auto;
}
.sosmed>a{
	width: auto;
	float: left;
	padding: 0 30px;
}
#floating_image_link{ display: none!important; }
</style>
<div id="type-content" class="type-content">
			
	<div class="main_content">
		<?php
			$area = 'Slider';
			$rendered = karma_render_blocks($page_id, array());
			if (isset($rendered[$area])) {
				echo $rendered[$area];
			}
		?>
	</div>

		
</div><!-- #type -->


<?php get_footer(); ?>