<?php
$fields = array(
	'content' => get_sub_field('content'),
	'margin' => get_sub_field('margin')
);
ob_start();
switch ($fields['margin']) {
	case 'Top':
		$margin = 'margin-top: 50px;';
		break;
	case 'Bottom':
		$margin = 'margin-bottom: 50px;';
		break;
	case 'Top & Bottom':
		$margin = 'margin: 50px auto;';
		break;
	default:
		$margin = '';
		break;
}
?>
<div id="contained_content" style="<?php echo $margin; ?>">
	<div class="container">
		<?php  echo $fields['content']; ?>
		<?php 
		if(get_the_ID()=='317') { // Careers page
			include 'careers_form.php';
		}
		?>    
	</div>
</div>
<?php 
$html = ob_get_contents();
ob_end_clean();
?>