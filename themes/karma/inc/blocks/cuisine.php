<?php
$fields = array(
	'slider_background_image' => get_sub_field('slider_background_image'),
	'title' => get_sub_field('title'),
	'description' => get_sub_field('description'),
	'slides' => get_sub_field('slides')
);
$bID = 'cuisine';
ob_start();
$page_id = get_the_ID();
?>
<div id="accordion-cuisine" class="accordion">
	<div class="accordion-heading">
		<div class="icon"><i class="fa fa-cutlery" aria-hidden="true"></i></div>
		Cuisine
		<div class="indicator"></div>
	</div>
	<div id="cuisine" class="accordion-content">
		<div id="cuisine_slider" class="cuisine_slider cuisine_slider_<?php echo $bID; ?>">
			<div class="top_section" style="background-color: #ebeced;">
				<div class="content">
					<h3><?php  echo $fields['title']; ?></h3>
					

					<?php // Custom St Martins
					if($page_id == '914') { ?>
						<div style="display: none;"><?php  echo $fields['description']; ?></div>	
					<?php } else { ?>
						<div><?php  echo $fields['description']; ?></div>
					<?php } ?>

				</div><!-- .content -->
	
				<div class="slider_btns slider_btns_<?php echo $bID; ?>">
				<?php 
				if (count($fields['slides'])>1) {
					foreach ($fields['slides'] as $slide) {
						echo '<a href="#" class="button_outline" title="'.$slide['title'].'">' .$slide['title']. '</a>';					
					}
				}
				?>
				</div><!-- .slider_btns -->
			</div><!-- .top_section -->
			<div class="bottom_section">
				<div class="slider cf" style="background: #f2e6d6;">
					<ul class="slides">
						<?php
						foreach ($fields['slides'] as $slide) {
						?>
						<li>
							<div alt="<?php echo $slide['title']; ?>" class="left" style="background: url('<?php echo (!empty($slide['image']) ? $slide['image']['sizes']['large'] : '') ?>') center; background-size: cover;"></div>
							<div class="right" style="background:#f2e6d6;">
								<h3 class="title"><?php echo $slide['title']; ?></h3>
									<?php  echo $slide['description']; ?>
							</div><!-- .right -->
						</li>
						<?php } ?>	
					</ul>
				</div><!-- .slider -->
			</div><!-- .bottom_section -->

		<?php // Custom St Martins
		if($page_id == '914') { ?>
			<div class="top_section" style="background-color: #ebeced;">
			<div class="content">
			<div><?php  echo $fields['description']; ?></div>
			</div><!-- .content -->
			</div><!-- .top_section -->

		<?php } ?>

		</div><!-- .accomodation_cuisine_slider -->
	</div><!-- #cuisine -->
</div><!-- .accordion -->
<script>
$(document).ready(function() {
	$('.cuisine_slider_<?php echo $bID; ?> .slider' ).flexslider({
		// controlNav: false,
		// directionNav: false,
		// controlsContainer: ".acommodation_slider .right",
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
