<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header();
?>

<div id="type-content" class="type-content">
			
	<div class="main_content">
	<?php
	$area = 'Main Content';
	$rendered = karma_render_blocks($page_id, array());
	if (isset($rendered[$area])) {
		echo $rendered[$area];
	}
	//$globalEnquiryForm = new GlobalArea('Global Enquiry Form');
	//$globalEnquiryForm ->display($c);
	?>
	</div>

	<div id="blocks_section">
		<div class="grid-sizer"></div>
		<?php
		$area = 'Blocks Section';
		if (isset($rendered[$area])) {
			echo $rendered[$area];
		}
		?>
	</div>
		
</div><!-- #type -->


<?php get_footer(); ?>
