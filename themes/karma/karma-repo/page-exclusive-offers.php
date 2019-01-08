<?php
/**
 * Template Name: Exclusive Offers Landing Page
 */
?>

<style>
.offers-section {
    padding-top: 130px;
}
</style>

<?php get_header();?>

<div id="type-content">
	<div class="main_content">
        <div class="offers-section">
            <?php echo do_shortcode('[ess_grid alias="offers"]'); ?>
        </div>
    </div>
</div>

<script type="text/javascript">
$('#eg-1-post-id-7366 a:contains("READ MORE")').attr('href', 'https://karmagroup.com/fit-recenter-retreat/');
$('#eg-1-post-id-7368 a:contains("READ MORE")').attr('href', 'https://karmagroup.com/aqua-phobia-retreat/');
</script>

<?php get_footer(); ?>
