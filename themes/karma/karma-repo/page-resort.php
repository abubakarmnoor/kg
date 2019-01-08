<?php
/**
 * Template Name: Resort Page
 */

get_header(); 
$page_id = get_the_ID();
?>
<div id="type-location" class="post_type-<?php echo $post->post_type;?>">
	
	<div class="main_content">
	<?php
	$area = 'Main Content';
	$rendered = karma_render_blocks($page_id, array());
	if (isset($rendered[$area])) {
		echo $rendered[$area];
	}	
	?>
	</div>
	
</div><!-- #type -->

<script>
$(window).resize(function() {
  if ($(window).width() > 1040) {
     $('.main_nav').show();         
  }
  if (is_desktop && $(window).width() < 992) {
	  location.reload();
  }
  if (!is_desktop && $(window).width() > 992) {
	  location.reload();
  }
});
</script>
<?php get_footer(); ?>
