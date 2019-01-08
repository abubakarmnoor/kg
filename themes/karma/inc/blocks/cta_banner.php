<?php
$fields = array(
	'background_image' => get_sub_field('background_image'),
	'title' => get_sub_field('title'),
	'description' => get_sub_field('description'),
	'link_url' => get_sub_field('link_url'),
	'link_text' => get_sub_field('link_text'),
	'text_color' => get_sub_field('text_color'),
	'overlay_color' => get_sub_field('overlay_color'),
	'hide_overlay' => get_sub_field('hide_overlay')
);
ob_start();
$text_color = $fields['text_color'] ? $fields['text_color'] : '#FFF';
$background_image_url = '';
if ($fields['background_image']) {
	$background_image_url = wp_get_attachment_image_url($fields['background_image'], 'full');
}
?>
<div id="cta_banner">
	<div class="cta_banner" style="background: url('<?php echo $background_image_url; ?>') no-repeat; background-position: center; background-size: cover;">
		<?php if ($fields['hide_overlay'] != 1): ?>
			<div class="cta_banner_overlay" style="background-color:<?php echo $fields['overlay_color'];?>;"></div>
		<?php endif; ?>
		<div class="content">
			<h3 class="georgia_font italic" style="color:<?php echo $text_color;?>;"><?php  echo $fields['title']; ?></h3>
			<h4 style="color:<?php echo $text_color; ?>;"><?php  echo nl2br($fields['description']); ?></h4>			
			<?php  if (!empty($fields['link_url'])): ?>
				<?php
      			if(get_the_ID()=='713') { ?>
				<a style="color:<?php echo $text_color; ?>;" class="showSpaEnquiryForm <?php echo ($text_color = $fields['text_color'] == '#FFF' ? "button_outline black" : "white_button") ?>" href="#" title="<?php echo $fields['link_text']; ?>"><?php echo $fields['link_text']; ?></a>
				<?php } else { ?>
				<a style="color:<?php echo $text_color; ?>;" class="<?php echo ($text_color = $fields['text_color'] == '#FFF' ? "button_outline black" : "white_button") ?>" href="<?php  echo $fields['link_url']; ?>" title="<?php echo $fields['link_text']; ?>"><?php echo $fields['link_text']; ?></a>
				<?php } ?>

			<?php  endif; ?>
		</div>
	</div>
</div><!-- #cta-banner -->
<?php 
$html = ob_get_contents();
ob_end_clean();
?>