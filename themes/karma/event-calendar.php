<?php
/**
 * Template Name: Event Calendars
 */

get_header();
?>

<?php ini_set( "display_errors", 0); ?>

<style>
#banner_slider_wrapper{	
    height: 0;
    width:0;
    overflow:hidden;
}
#karma #banner .content{
	display:none;
}

</style>

	<?php 
		include 'inc/blocks/banner_slider.php';
		echo $html;
	?>


	<iframe src="https://karmagroup.com/event-calendar" width="100%" frameborder="0" height="1500" scrolling="no"></iframe>


<?php get_footer(); ?>
