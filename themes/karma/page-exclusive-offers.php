<?php
/**
 * Template Name: Exclusive Offers Landing Page
 */
?>

<?php get_header();?>

<?php ini_set( "display_errors", 0); ?>

<style>
.offers-section {
    padding-top: 130px;
}
#banner_slider_wrapper{	
    height: 0;
    width:0;
    overflow:hidden;
}
#karma #banner .content{
	display:none;
}

</style>

<div id="type-content">
	<div class="main_content">
        <div class="offers-section">
         <?php echo do_shortcode('[ess_grid alias="offers"]'); 
        include 'inc/blocks/banner_slider.php';
		echo $html;
		 ?>
        </div>
    </div>
</div>

<script type="text/javascript">
$('#eg-1-post-id-9002 .eg-post-9002 a:contains("BOOK NOW")').text('How to Enter');
//$('#eg-1-post-id-7366 a:contains("READ MORE")').attr('href', 'https://karmagroup.com/fit-recenter-retreat/');
</script>

<?php get_footer(); ?>

