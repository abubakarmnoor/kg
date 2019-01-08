<?php
/**
 * Template Name: Home Page
 */

get_header();
?>
<div id="type-home" class="post_type-<?php echo $post->post_type;?>">
	
	<div class="main_content">
	<?php
	$area = 'Main Content';
	$rendered = karma_render_blocks($page_id, array());
	if (isset($rendered[$area])) {
		echo $rendered[$area];
	}
	//echo '<pre>'.var_export(get_fields(),1).'</pre>';
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
