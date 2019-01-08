<?php
$fields = array(
	'left_content' => get_sub_field('left_content')
);
ob_start();
?>
<div class="hotel_resort_search cf">
	<div class="left">
		<?php  if (!empty($fields['left_content'])): ?>
			<?php  echo $fields['left_content']; ?>
		<?php  endif; ?>
	</div>
	<div class="right">
		<p><img src="<?php echo get_template_directory_uri();?>/imgs/icons/magnifying-icon.png" alt=""> Find a Hotel or Resort</p>
		<div class="form_container">
			<form method="get" action="/search">
				<input name="query" type="text" placeholder="Search">
				<button type="submit" class="submit">
					<img src="<?php echo get_template_directory_uri();?>/imgs/icons/search-icon.png" alt="Search Icon">
				</button>
			</form>
		</div>
	</div>

</div>
<?php 
$html = ob_get_contents();
ob_end_clean();
?>