<?php
$fields = array(
	'left_column' => get_sub_field('left_column'),
	'right_column' => get_sub_field('right_column'),
	'spacing' => get_sub_field('spacing'),
	'margin' => get_sub_field('margin')
);
ob_start();
$left_padding = $right_padding = ''; 
if ($fields['spacing'] == 'Left') {
	$left_padding = "padding-left: 25px;";
} elseif ($fields['spacing'] == 'Right') {
	$right_padding = "padding-right: 25px;";
}
?>
<section class="two_column cf" style="<?php echo ($fields['margin'] == 'Top' ? "margin-top: 100px;" : ""); ?> <?php echo ($fields['margin'] == 'Bottom' ? "margin-bottom: 100px;" : ""); ?> <?php echo ($fields['margin'] == 'Top & Bottom' ? "margin: 100px auto;" : ""); ?>">
	<div class="left">
		<div class="inner" style="<?php echo $right_padding; ?>">
			<?php  echo $fields['left_column']; ?>
		</div>
	</div>
	<div class="right">
		<div class="inner" style="<?php echo $left_padding; ?>">
			<?php  echo $fields['right_column']; ?>
		</div>
	</div>
</section>
<?php 
$html = ob_get_contents();
ob_end_clean();
?>