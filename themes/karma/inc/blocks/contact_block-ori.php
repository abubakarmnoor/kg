<?php
ob_start();
?>
<div id="contact_section">
	<div class="contacts_list">
		<div class="container wide">
			<li class="active" data-num="1">Our Resort Contacts</li>
			<?php 
			// <li data-num="2">Karma Beach Contacts</li>
			// <li data-num="3">Karma Spa Contacts</li>
			?>
		</div>
	</div><!-- .container.wide -->

	<div class="contact_panels">
		<div class="contact_details resort_contacts" data-panel="1">
			<div class="container">
				<div class="left">
					<h2 class="contacts georgia_font italic">Our Resort Contacts</h2>
					<?php
					$karmaResorts = karma_get_destination_pages_resort();
		            $karmaRetreats = karma_get_destination_pages_retreat();
		            $karmaRoyal = karma_get_destination_pages_royal();
		            $karmaEstates = karma_get_destination_pages_estate();
		            $allDestinations = array_merge($karmaResorts, $karmaRetreats, $karmaRoyal, $karmaEstates);
		            $page_id = get_the_ID();
					?>

				    <select class="contact_select" id="contact_select">
						<option value="" selected disabled>Select a resort</option>

						<optgroup label="Karma Resort">
							<?php foreach ($karmaResorts as $page): ?>
								<?php echo '<option value="resort_page_id_' . $page->ID . '">' . $page->post_title . '</option>'; ?>
							<?php endforeach; ?>
						</optgroup>

						<optgroup label="Karma Retreat">
							<?php foreach ($karmaRetreats as $page): ?>
								<?php echo '<option value="resort_page_id_' . $page->ID . '">' . $page->post_title . '</option>'; ?>
							<?php endforeach; ?>
						</optgroup>

						<optgroup label="Karma Royal">
							<?php foreach ($karmaRoyal as $page): ?>
								<?php echo '<option value="resort_page_id_' . $page->ID . '">' . $page->post_title . '</option>'; ?>
							<?php endforeach; ?>
						</optgroup>

						<optgroup label="Karma Estate">
							<?php foreach ($karmaEstates as $page): ?>
								<?php echo '<option value="resort_page_id_' . $page->ID . '">' . $page->post_title . '</option>'; ?>
							<?php endforeach; ?>
						</optgroup>
				    </select>


					<?php foreach ($allDestinations as $page): ?>

					<!-- prepare data -->
					<?php $pageName = $page->post_title; ?>
					<?php $pageDesc = nl2br(get_post_meta($page->ID, 'resort_address', 1)); ?>
					<?php $resortEmail = get_post_meta($page->ID, 'resort_email', 1); ?>
					<?php $resindo = get_post_meta($page->ID, 'reservations_indo', 1); ?>
					<?php $resoz = get_post_meta($page->ID, 'reservations_oz', 1); ?>
					<?php $resuk = get_post_meta($page->ID, 'reservations_uk', 1); ?>
					<?php $resortTel = get_post_meta($page->ID, 'telephone_number', 1); ?>
					<?php $resortFax = get_post_meta($page->ID, 'fax_number', 1); ?>

					<style>
					#karma #contact_section .contact_details .left .resort_info .tel, #karma #contact_section .contact_details .left .resort_info .fax {
						font-size: 20px;
					}
					
					</style>
					
					
					<div id="resort_page_id_<?php echo $page->ID; ?>" class="resort_contact_info">

						<!-- Title -->
						<div class="resort_info">
						    <h2 class="title georgia_font italic"><?php echo $pageName; ?></h2>
						</div>

						<!-- Address -->
						<?php if (!empty($pageDesc)): ?>
						<div class="resort_info one">
							<div class="icon">
					    		<img src="<?php echo get_template_directory_uri();?>/imgs/icons/location-gold.png">
				    		</div><!-- .icon -->
						    <span class="desc"><?php echo $pageDesc; ?></span>
					    </div>
					    <?php endif; ?>
						
						<!--Resevation indo-->
					    <?php if (!empty($resindo)): ?>
					    <div class="resort_info four">
					    	<div class="icon">
					    		<img src="<?php echo get_template_directory_uri();?>/imgs/icons/tel-gold.png">
				    		</div><!-- .icon -->
					    	<span class="tel">Reservations (INDO): <a href="tel:<?php echo $resindo; ?>"><?php echo $resindo; ?></a></span>
					    </div>
					    <?php endif; ?>

						<!--Resevation OZ-->
					    <?php if (!empty($resoz)): ?>
					    <div class="resort_info four">
					    	<div class="icon">
					    		<img src="<?php echo get_template_directory_uri();?>/imgs/icons/tel-gold.png">
				    		</div><!-- .icon -->
					    	<span class="tel">Reservations (OZ): <?php echo $resoz; ?></span>
					    </div>
					    <?php endif; ?>			

					    <?php if (!empty($resuk)): ?>
					    <div class="resort_info four">
					    	<div class="icon">
					    		<img src="<?php echo get_template_directory_uri();?>/imgs/icons/tel-gold.png">
				    		</div><!-- .icon -->
					    	<span class="tel">Reservations (UK): <?php echo $resuk; ?></span>
					    </div>
					    <?php endif; ?>									


					    <!-- Telephone Number -->
					    <?php if (!empty($resortTel)): ?>
					    <div class="resort_info four">
					    	<div class="icon">
					    		<img src="<?php echo get_template_directory_uri();?>/imgs/icons/tel-gold.png">
				    		</div><!-- .icon -->
					    	<span class="tel">Resort Direct Dial: <?php echo $resortTel; ?></span>
					    </div>
					    <?php endif; ?>


					    <!-- Fax Number -->
					    <?php if (!empty($resortFax)): ?>
					    <div class="resort_info five">
					    	<div class="icon">
					    		<img src="<?php echo get_template_directory_uri();?>/imgs/icons/fax-gold.png">
				    		</div><!-- .icon -->
					    	<span class="fax">Fax: <?php echo $resortFax; ?></span>
					    </div>
					    <?php endif; ?>
						
						<?php if (!empty($resortEmail)): ?>
					    <div class="resort_info six">
					    	<div class="icon">
					    		<img src="<?php echo get_template_directory_uri();?>/imgs/icons/fax-gold.png">
				    		</div><!-- .icon -->
					    	<span class="fax">Email: <?php echo $resortEmail; ?></span>
					    </div>
					    <?php endif; ?>

						<!-- Resort Page Link -->
						<a href="<?php echo get_permalink($page->ID); ?>" class="button_outline gold">View Resort</a>

					</div><!-- .resort_contact_info -->

					<?php endforeach; ?>
					

				</div><!-- .left -->

					
				<div class="right">
					<?php foreach ($allDestinations as $page): ?>
						<?php
						if ($image_id = get_post_meta($page->ID, 'resort_image', 1)) {
							$src = wp_get_attachment_image_url($image_id, 'full');
						    echo '<img class="resort_page_id_'.$page->ID.' resort_image" src="' . $src . '">';
						} ?>
					<?php endforeach; ?>
				</div><!-- .right -->

			</div><!-- .container -->
		</div><!-- .contact_details -->


		



	</div><!-- .contact_panels -->


</div><!-- #contact_section -->




<script>
// Show first one initially
$('.resort_contact_info').first().show();
$('.resort_image').first().show();

$(function() {
    $('.contact_select').change(function(){

    	// Hide all so we can prepare to show only the specific one
        $('.resort_contact_info').hide();
        $('.resort_image').hide();

        $('.' + $(this).val()).show();

        $('#' + $(this).val()).show();
        $('#' + $(this).val()).addClass('show');
    });
});



$(function(){

	$(".contacts_list li").on("click", function(e){
		e.preventDefault();

		// Add/remove active classes on tabs
		$(".contacts_list li").removeClass('active');
		$(this).addClass('active');

		var tab_num = $(this).data("num");

		// show/hide correct panel
		$('.contact_details').hide();
		$('.contact_details[data-panel=' + tab_num +']').fadeIn(1000);

	});

});


</script>
<?php 
$html = ob_get_contents();
ob_end_clean();
?>