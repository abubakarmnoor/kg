<?php
$fields = array(
	'image' => get_sub_field('image'),
	'text' => get_sub_field('text')
);
ob_start();
?>
<div class="text_image_block">
	<div class="left">
		<?php echo $fields['text']?>
	</div><!-- .left -->

	<div class="right" style="background: url('<?php  echo $fields['image']['sizes']['large']; ?>'); background-size: cover;">		
	</div><!-- .right -->

</div><!-- .text_and_image -->
<?php 
$html = ob_get_contents();
ob_end_clean();
?>