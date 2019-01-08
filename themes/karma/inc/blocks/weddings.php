<?php
$fields = array(
	'background_image' => get_sub_field('background_image'),
	'content' => get_sub_field('content')
);
ob_start();
?>
<div id="accordion-weddings" class="accordion">
	<div class="accordion-heading">
		<div class="icon"><i class="fa fa-female" aria-hidden="true"></i><i class="fa fa-male" aria-hidden="true"></i></div>
		Weddings
		<div class="indicator"></div>
	</div>
	<div id="weddings" class="accordion-content">
		<div class="cta_banner" style="background: url('<?php echo $fields['background_image']['sizes']['large'];?>') no-repeat; background-position: center; background-size: cover; 
		filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $fields['background_image']['sizes']['large']; ?>', sizingMethod='scale'); 
		-ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $fields['background_image']['sizes']['large']; ?>', sizingMethod='scale')";">
				<div class="cta_banner_overlay"></div>			
			<div class="content">
				<?php echo $fields['content']; ?>				
			</div><!-- .content -->
		</div>
	</div><!-- #weddings -->
</div><!-- .accordion -->
<?php 
$html = ob_get_contents();
ob_end_clean();
?>
