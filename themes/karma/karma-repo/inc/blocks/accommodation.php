<?php
$fields = array(
	'slider_background_image' => get_sub_field('slider_background_image'),
	'title' => get_sub_field('title'),
	'description' => get_sub_field('description'),
	'slides' => get_sub_field('slides')
);
$bID = 'accomodation';
ob_start();
?>
<div id="accordion-accommodation" class="accordion">
	<div class="accordion-heading">
		<div class="icon"><i class="fa fa-bed" aria-hidden="true"></i></div>
		<?php  echo $fields['title']; ?>
		<div class="indicator"></div>
	</div>
	<div id="accommodation" class="accordion-content">
	
		<div id="accomodation_slider" class="accomodation_slider accomodation_slider_<?php echo $bID; ?>">
	
			<div class="top_section" style="background-color: #ebeced;">
				<div class="content">
					<h2><?php echo $fields['title']; ?></h2>
					<div><?php echo $fields['description']; ?></div>					
				</div><!-- .content -->
	
				<div class="slider_btns slider_btns_<?php echo $bID; ?>">
				<?php 
				if (count($fields['slides'])>1) {
					foreach ($fields['slides'] as $slide) {
						echo '<a href="#" class="button_outline">' .$slide['title']. '</a>';					
					}
				}
				?>
				</div><!-- .slider_btns -->				
			</div><!-- .top_section -->
	
			<div class="bottom_section">
				<div class="slider cf" style="background: #54565b;">
					<ul class="slides">						
						<?php
						foreach ($fields['slides'] as $slide) {
						?>
						<li>
							<div alt="<?php  echo $slide['title']; ?>" class="left" style="background: url('<?php echo (!empty($slide['image']) ? $slide['image']['sizes']['large'] : '') ?>') center; background-size: cover;"></div>
							<div class="right" style="background: #54565b;">
								<h3 class="title white_text"><?php  echo $slide['title']; ?></h3>
									<?php echo $slide['description']; ?>
							</div><!-- .right -->
						</li>
						<?php } ?>	
					</ul>
				</div><!-- .slider -->
			</div><!-- .bottom_section -->
		</div><!-- .accomodation_cuisine_slider -->
	</div><!-- #cuisine -->
</div><!-- .accordion -->
<script>
$(document).ready(function() {
	$('.accomodation_slider_<?php echo $bID; ?> .slider' ).flexslider({
		prevText: " ",
		nextText: " ",
		manualControls: ".slider_btns_<?php echo $bID; ?> a",
		slideshow: false,
		touch: false
	});
});
</script>
<?php 
$html = ob_get_contents();
ob_end_clean();
?>