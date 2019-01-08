<?php
$fields = array(
	'background_image' => get_sub_field('background_image'),
	'title_and_description' => get_sub_field('title_and_description'),
	'specialities' => get_sub_field('specialities')
);
ob_start();
$background_image_url = '';
if ($fields['background_image']) {
	$background_image_url = wp_get_attachment_image_url($fields['background_image'], 'full');
}
?>
<div class="signature_cocktails" style="background: url('<?php echo (!empty($fields['background_image']) ? $background_image_url : get_template_directory_uri() . "/imgs/cocktails.png" ) ?>' cover);">
	<div class="container">

		<?php  if (!empty($fields['title_and_description'])) {echo $fields['title_and_description'];}
		foreach ($fields['specialities'] as $slide) { ?>
		<div class="drink_option">
			<?php  if (!empty($slide['image'])): ?>
				<div class="image">
					<img src="<?php  echo $slide['image']['url']; ?>" alt="" />
				</div><!-- .image -->
			<?php  endif; ?>
			<div class="content">
				<?php  if (!empty($slide['title'])): ?>
					<h3><?php  echo $slide['title']; ?></h3>
				<?php  endif; ?>

				<?php  if (!empty($slide['title'])): ?>
					<p><?php  echo $slide['description']; ?></p>
				<?php  endif; ?>
			</div><!-- .content -->
		</div><!-- .drink_option -->
		<?php }?>
	</div><!-- .container -->
</div>
<?php 
$html = ob_get_contents();
ob_end_clean();
?>