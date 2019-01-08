<?php
$fields = array(
	'text' => get_sub_field('text', false, false),
	'is_quote' => get_sub_field('is_quote')
);
ob_start();
?>
<div class="simple_banner">
	<div class="container" style="position: relative;">
		<?php echo $openQuote; ?>
		<?php if ($fields['is_quote']) {echo '<div class="openQuote"></div>';}?>
		<div class="content">
			<h2 class="georgia_font italic"><?php  echo $fields['text']; ?></h2>			
		</div>
		<?php if ($fields['is_quote']) {echo '<div class="closeQuote"></div>';}?>
	</div>
</div><!-- .simple_banner -->
<?php 
$html = ob_get_contents();
ob_end_clean();
?>