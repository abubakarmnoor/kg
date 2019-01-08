<?php
$fields = array(
	'background_image' => get_sub_field('background_image'),		
	'left_content' => get_sub_field('left_content'),
	'sections' => get_sub_field('sections')
);
ob_start();
$background_image_url = '';
if ($fields['background_image']) {
	$background_image_url = wp_get_attachment_image_url($fields['background_image'], 'full');
}
?>
<div id="karma_music" style="<?php echo ($fields['background_image'] ? "background-image: url('".$background_image_url."')" : "" ) ?>;">
		<div class="container">

			<div class="left">
				<?php if (!empty($fields['left_content'])): ?>
					<?php echo $fields['left_content']; ?>
				<?php endif; ?>
			</div><!-- .left -->

			<div class="right">

				<div class="section one">

					<div class="left_content">
						<?php  if (!empty($fields['sections'][0]['image']['url'])): ?>
							<img src="<?php  echo $fields['sections'][0]['image']['url']; ?>" alt="<?php  echo $fields['sections'][0]['image']['title']; ?>"  title="<?php  echo $fields['sections'][0]['image']['title']; ?>" />
						<?php  endif; ?>
					</div><!-- .left_content -->

					<div class="right_content">
						<?php  if (!empty($fields['sections'][0]['content'])): ?>
							<?php  echo $fields['sections'][0]['content']; ?>
						<?php  endif; ?>
					</div><!-- .right_content -->

				</div><!-- .section.one -->


				<div class="section two">

					<div class="left_content">
						<?php  if (!empty($fields['sections'][1]['image']['url'])): ?>
							<img src="<?php  echo $fields['sections'][1]['image']['url']; ?>" alt="<?php  echo $fields['sections'][1]['image']['title']; ?>" title="<?php  echo $fields['sections'][1]['image']['title']; ?>" />
						<?php  endif; ?>
					</div><!-- .left_content -->

					<div class="right_content">
						<?php  if (!empty($fields['sections'][1]['content'])): ?>
							<?php  echo $fields['sections'][1]['content']; ?>
						<?php  endif; ?>
					</div><!-- .right_content -->

				</div><!-- .section.two -->


				<div class="section three">

					<div class="left_content">
						<?php  if (!empty($fields['sections'][2]['image']['url'])): ?>
							<img src="<?php  echo $fields['sections'][2]['image']['url']; ?>" alt="<?php  echo $fields['sections'][2]['image']['title']; ?>" title="<?php  echo $fields['sections'][2]['image']['title']; ?>" />
						<?php  endif; ?>
					</div><!-- .left_content -->

					<div class="right_content">
						<?php  if (!empty($fields['sections'][2]['content'])): ?>
							<?php  echo $fields['sections'][2]['content']; ?>
						<?php  endif; ?>
					</div><!-- .right_content -->

				</div><!-- .section.three -->


			</div><!-- .right -->

		</div><!-- .container -->
	</div><!-- #karma_music -->
<?php 
$html = ob_get_contents();
ob_end_clean();
?>