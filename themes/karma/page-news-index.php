<?php
/**
 * Template Name: News Articles List
 */

get_header();
?>

<div id="type-content">
			
	<div class="main_content">
	<?php
	$area = 'Main Content';
	$rendered = karma_render_blocks($page_id, array());
	if (isset($rendered[$area])) {
		echo $rendered[$area];
	}
	
	include 'inc/news.php';
	?>	
	</div>
	
</div><!-- #type -->


<?php get_footer(); ?>
