<?php
$fields = array(
	'background_image' => get_sub_field('background_image'),
	'content' => get_sub_field('content')
);
ob_start();
?>
<style>
.toppad{
    padding-top:50px;}
	@media only screen and (max-width: 540px){
	    .toppad{
			padding-top:0px;}
			    }
			    </style>
<div id="accordion-weddings" class="accordion toppad">
	<div class="accordion-heading">
		<div class="icon"><i class="fa fa-female" aria-hidden="true"></i><i class="fa fa-male" aria-hidden="true"></i></div>
		Conference
		<div class="indicator"></div>
	</div>
	<div id="conference" class="accordion-content">
		<div class="cta_banner" style="background: url('<?php echo $fields['background_image']['sizes']['large'];?>') no-repeat; background-position: center; background-size: cover; 
		filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $fields['background_image']['sizes']['large']; ?>', sizingMethod='scale'); 
		-ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $fields['background_image']['sizes']['large']; ?>', sizingMethod='scale')";">
				<div class="cta_banner_overlay" style="background: rgba(0,0,0,.6);"></div>			
			<div class="content">
				<?php echo $fields['content']; ?>				
			</div><!-- .content -->
		</div>
	</div><!-- #karmaspa -->
</div><!-- .accordion -->
<?php 
$html = ob_get_contents();
ob_end_clean();
?>
