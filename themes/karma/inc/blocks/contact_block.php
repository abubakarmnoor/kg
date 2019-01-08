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
		            $karmaSanctum = karma_get_destination_pages_sanctum();
		            
		            $allDestinations = array_merge($karmaResorts, $karmaRetreats, $karmaRoyal, $karmaEstates);
		            $page_id = get_the_ID();

//$default = url_to_postid($_SERVER['HTTP_REFERER']); if($default == ''){$default = '193';}

if(isset($_GET['pid'])){
$default = $_GET['pid'];
}else{
$default = '193';
}
					?>

				    <select class="contact_select" id="contact_select">
						<option value="" selected disabled>Select a resort</option>

						<optgroup label="Karma Resort">
							<?php foreach ($karmaResorts as $page): ?>
								<?php
									echo '<option value="resort_page_id_' . $page->ID . '" '. ($default == $page->ID ? 'selected="selected"' : '') .'>' . $page->post_title . '</option>'; 
								?>
							<?php endforeach; ?>
						</optgroup>

						<optgroup label="Karma Retreat">
							<?php foreach ($karmaRetreats as $page): ?>
								<?php echo '<option value="resort_page_id_' . $page->ID . '" '. ($default == $page->ID ? 'selected="selected"' : '') .'>' . $page->post_title . '</option>'; ?>
							<?php endforeach; ?>
						</optgroup>

						<optgroup label="Karma Royal">
							<?php foreach ($karmaRoyal as $page): ?>
								<?php echo '<option value="resort_page_id_' . $page->ID . '" '. ($default == $page->ID ? 'selected="selected"' : '') .'>' . $page->post_title . '</option>'; ?>
							<?php endforeach; ?>
						</optgroup>

						<optgroup label="Karma Estate">
							<?php foreach ($karmaEstates as $page): ?>
								<?php echo '<option value="resort_page_id_' . $page->ID . '" '. ($default == $page->ID ? 'selected="selected"' : '') .'>' . $page->post_title . '</option>'; ?>
							<?php endforeach; ?>
						</optgroup>
						<optgroup label="Karma Sanctum">
						<?php foreach ($karmaSanctum as $page): ?>
						<?php echo '<option value="resort_page_id_' . $page->ID . '" '. ($default == $page->ID ? 'selected="selected"' : '') .'>' . $page->post_title . '</option>'; ?>
						<?php endforeach; ?>
						</optgroup>	

						<optgroup label="Karma Beach">
							<option value="karmabeachbali">Karma Beach Bali</option>
							<option value="karmabeachgilimeno">Karma Beach Gili Meno</option>
						</optgroup>
						
						<optgroup label="Karma Spa">
							<option value="karmaspakandara">Karma Spa at Karma Kandara</option>
							<option value="karmaspajimbaran">Karma Spa at Karma Jimbaran</option>
							<option value="karmaspareef">Karma Spa at Karma Reef</option>
						</optgroup>



				    </select>

<?php $allDestinations = array_merge($allDestinations, $karmaSanctum); ?>				    
				    
					<?php foreach ($allDestinations as $page): ?>

						<!-- prepare data -->
						<?php $pageName = $page->post_title; ?>
						<?php $pageDesc = nl2br(get_post_meta($page->ID, 'resort_address', 1)); ?>
						<?php $resortEmail = get_post_meta($page->ID, 'resort_email', 1); ?>
						<?php $resindo = get_post_meta($page->ID, 'reservations_indo', 1); ?>
						<?php $resoz = get_post_meta($page->ID, 'reservations_oz', 1); ?>
						<?php $resuk = get_post_meta($page->ID, 'reservations_uk', 1); ?>
						<?php $resfrance = get_post_meta($page->ID, 'reservations_france', 1); ?>
						<?php $resgerman = get_post_meta($page->ID, 'reservations_german', 1); ?>
						<?php $resortsingapore = get_post_meta($page->ID, 'reservations_singapore', 1); ?>
						<?php $gds = get_post_meta($page->ID, 'gds_code', 1); ?>
						<?php $resortTel = get_post_meta($page->ID, 'telephone_number', 1); ?>
						<?php $resortFax = get_post_meta($page->ID, 'fax_number', 1); ?>

					<style>
						#karma #contact_section .contact_details .left .resort_info .tel, #karma #contact_section .contact_details .left .resort_info .fax {
							font-size: 20px;
						}
						@import url(http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100);

						body {
						background-color: #ffffff;
						font-family: "Roboto", helvetica, arial, sans-serif;
						font-size: 16px;
						font-weight: 400;
						text-rendering: optimizeLegibility;
						}

						div.table-title {
						display: block;
						margin: auto;
						max-width: 600px;
						padding:5px;
						width: 100%;
						}

						.table-title h3 {
						color: #fafafa;
						font-size: 30px;
						font-weight: 400;
						font-style:normal;
						font-family: "Roboto", helvetica, arial, sans-serif;
						text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
						text-transform:uppercase;
						}


						/*** Table Styles **/

						.table-fill {
						background: white;
						border-radius:3px;
						border-collapse: collapse;
						height: 320px;
						margin: auto;
						max-width: 600px;
						padding:5px;
						width: 100%;
						box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
						animation: float 5s infinite;
						}
						
						th {
						color:#D5DDE5;;
						background:#1b1e24;
						border-bottom:4px solid #9ea7af;
						border-right: 1px solid #343a45;
						font-size:23px;
						font-weight: 100;
						padding:24px;
						text-align:left;
						text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
						vertical-align:middle;
						}

						th:first-child {
						border-top-left-radius:3px;
						}
						
						th:last-child {
						border-top-right-radius:3px;
						border-right:none;
						}
						
						tr {
						border-top: 1px solid #C1C3D1;
						border-bottom-: 1px solid #C1C3D1;
						color:#666B85;
						font-size:16px;
						font-weight:normal;
						text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
						}
						
						tr:hover td {
						background:#4E5066;
						color:#FFFFFF;
						border-top: 1px solid #22262e;
						border-bottom: 1px solid #22262e;
						}
						
						tr:first-child {
						border-top:none;
						}

						tr:last-child {
						border-bottom:none;
						}
						
						tr:nth-child(odd) td {
						background:#EBEBEB;
						}
						
						tr:nth-child(odd):hover td {
						background:#4E5066;
						}

						tr:last-child td:first-child {
						border-bottom-left-radius:3px;
						}
						
						tr:last-child td:last-child {
						border-bottom-right-radius:3px;
						}
						
						td {
						background:#FFFFFF;
						padding:20px;
						text-align:left;
						vertical-align:middle;
						font-weight:300;
						font-size:15px;
						text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
						border-right: 1px solid #C1C3D1;
						}

						td:last-child {
						border-right: 0px;
						}

						th.text-left {
						text-align: left;
						}

						th.text-center {
						text-align: center;
						}

						th.text-right {
						text-align: right;
						}

						td.text-left {
						text-align: left;
						}

						td.text-center {
						text-align: center;
						}

						td.text-right {
						text-align: right;
						}

				    </style>
						
						
						<div id="resort_page_id_<?php echo $page->ID; ?>" class="resort_contact_info <?php echo ($default == $page->ID ? 'show' : ''); ?>">

							<!-- Title -->
							<div class="resort_info">
								<h2 class="title georgia_font italic"><?php echo $pageName; ?></h2>
							</div>
							<table class="table-fill">
							<tbody class="table-hover">
							
							<?php if (!empty($pageDesc)): ?>
							<tr>						
							<div class="resort_info one">
								<td class="text-left">Address</td>
								<td class="text-left"><span class="desc"><?php echo $pageDesc; ?></span></td>						
							</tr>
							<?php endif; ?>
							
							<?php if (!empty($resindo)): ?>
							<tr>
							<div class="resort_info four">
								<td class="text-left">Reservations (Indonesia)</td>
								<td class="text-left"><span class="tel"><?php echo $resindo; ?></span></td>
							</div>						
							</tr>
							<?php endif; ?>
							
							<?php if (!empty($resoz)): ?>
							<tr>
							<div class="resort_info four">
								<td class="text-left">Reservations (Australia)</td>
								<td class="text-left"><span class="tel"><?php echo $resoz; ?></span></td>
							</div>						
							</tr>
							<?php endif; ?>
							
							<?php if (!empty($resfrance)): ?>
							<tr>
							<div class="resort_info four">
								<td class="text-left">Reservations (France)</td>
								<td class="text-left"><span class="tel"><?php echo $resfrance; ?></span></td>
							</div>						
							</tr>
							<?php endif; ?>
							
							<?php if (!empty($resgerman)): ?>
							<tr>
							<div class="resort_info four">
								<td class="text-left">Reservations (Germany)</td>
								<td class="text-left"><span class="tel"><?php echo $resgerman; ?></span></td>
							</div>						
							</tr>
							<?php endif; ?>
							
							
							
							<?php if (!empty($resuk)): ?>
							<tr>
							<div class="resort_info four">
								<td class="text-left">Reservations (UK)</td>
								<td class="text-left"><span class="tel"><?php echo $resuk; ?></span></td>
							</div>						
							</tr>
							<?php endif; ?>
							
							<?php if (!empty($resortsingapore)): ?>
							<tr>
							<div class="resort_info four">
								<td class="text-left">Reservations (Singapore)</td>
								<td class="text-left"><span class="tel"><?php echo $resortsingapore; ?></span></td>
							</div>						
							</tr>
							<?php endif; ?>
							
							<?php if (!empty($resortTel)): ?>
							<tr>
							<div class="resort_info four">
								<td class="text-left">Resort Direct Dial</td>
								<td class="text-left"><span class="tel"><?php echo $resortTel; ?></span></td>
							</div>						
							</tr>
							<?php endif; ?>


							<?php if (!empty($resortFax)): ?>
							<tr>
							<div class="resort_info four">
								<td class="text-left">Resort Fax Number</td>
								<td class="text-left"><span class="tel"><?php echo $resortFax; ?></span></td>
							</div>						
							</tr>
							<?php endif; ?>
							
							
							<?php if (!empty($resortEmail)): ?>
							<tr>
							<div class="resort_info four">
								<td class="text-left">Email</td>
								<td class="text-left"><span class="tel"><?php echo $resortEmail; ?></span></td>
							</div>						
							</tr>
							<?php endif; ?>
							
							<?php if (!empty($gds)): ?>
							<tr>
							<div class="resort_info four">
								<td class="text-left">GDS Code</td>
								<td class="text-left"><span class="tel"><?php echo $gds; ?></span></td>
							</div>						
							</tr>
							<?php endif; ?>
							
							</tbody>
							</table>	

						<!-- Resort Page Link -->
							<a href="<?php echo get_permalink($page->ID); ?>" class="button_outline gold" style="margin-top: 25px;">View Resort</a>

						</div><!-- .resort_contact_info -->

					<?php endforeach; ?>

					<div id="kb1" class="" style="display: none;">
						<!-- Title -->
						<div class="resort_info">
								<h2 class="title georgia_font italic">Karma Beach Bali</h2>
						</div>
						<table class="table-fill">
								<tbody class="table-hover">
									<tr>
											<td class="text-left">Address</td>
											<td class="text-left"><span class="desc">Jalan Villa Kandara<br>
											Banjar Wijaya Kusuma<br>
											Ungasan, Bali, 80362 Indonesia<br>
												</span>
											</td>
									</tr>
									<tr>
											<td class="text-left">Resort Direct Dial</td>
											<td class="text-left"><span class="tel">+62 361 848 2202</span></td>
									</tr>
									<tr>
											<td class="text-left">Email Reservations</td>
											<td class="text-left"><span class="tel">reservations@karmabeach.com</span></td>
									</tr>
									<tr>
											<td class="text-left">Email Information</td>
											<td class="text-left"><span class="tel">info@karmabeach.com</span></td>
									</tr>
									<tr>
											<td class="text-left">Email VIP</td>
											<td class="text-left"><span class="tel">vip@karmabeach.com</span></td>
									</tr>
									<tr>
											<td class="text-left">Skype</td>
											<td class="text-left"><span class="tel">edking1122</span></td>
									</tr>
									
								</tbody>
						</table>
						<!-- Resort Page Link -->
						<a href="https://karmagroup.com/karma-beach/" class="button_outline gold" style="margin-top: 25px;">View Beach</a>
					</div>

					<div id="kb2" class="" style="display: none;">
						<!-- Title -->
						<div class="resort_info">
								<h2 class="title georgia_font italic">Karma Beach Gilimeno</h2>
						</div>
						<table class="table-fill">
								<tbody class="table-hover">
									<tr>
											<td class="text-left">Address</td>
											<td class="text-left"><span class="desc">Dusun Gili Meno, Desa Gili Indah, <br>Kec. Pemenang, Lombok Utara, NTB 83352
												</span>
											</td>
									</tr>
									<tr>
											<td class="text-left">Resort Direct Dial</td>
											<td class="text-left"><span class="tel">+62 361 848 2202</span></td>
									</tr>
									<tr>
											<td class="text-left">Email Reservations</td>
											<td class="text-left"><span class="tel">reservations@karmabeach.com</span></td>
									</tr>
									<tr>
											<td class="text-left">Email Information</td>
											<td class="text-left"><span class="tel">info@karmabeach.com</span></td>
									</tr>
									<tr>
											<td class="text-left">Email VIP</td>
											<td class="text-left"><span class="tel">vip@karmabeach.com</span></td>
									</tr>
									<tr>
											<td class="text-left">Skype</td>
											<td class="text-left"><span class="tel">edking1122</span></td>
									</tr>								
							</tbody>
						</table>
						<!-- Resort Page Link -->
						<a href="https://karmagroup.com/karma-beach/" class="button_outline gold" style="margin-top: 25px;">View Beach</a>
					</div>

					<div id="kb3" class="" style="display: none;">
						<!-- Title -->
						<div class="resort_info">
								<h2 class="title georgia_font italic">Karma Spa at Karma Kandara</h2>
						</div>
						<table class="table-fill">
								<tbody class="table-hover">
									<tr>
											<td class="text-left">Address</td>
											<td class="text-left"><span class="desc">Jalan Villa Kandara, Banjar Wijaya Kusuma, Ungasan, Bali, 80362 Indonesia
												</span>
											</td>
									</tr>
									<tr>
											<td class="text-left">Tel - Reservations</td>
											<td class="text-left"><span class="tel">+62 (0) 8482200</span></td>
									</tr>
									<tr>
											<td class="text-left">Email</td>
											<td class="text-left"><span class="tel">info@karmaspas.com</span></td>
									</tr>
									
								</tbody>
						</table>
						<!-- Resort Page Link -->
						<a href="https://karmagroup.com/karma-spa/" class="button_outline gold" style="margin-top: 25px;">View Spa</a>
					</div>

					
					<div id="kb4" class="" style="display: none;">
						<!-- Title -->
						<div class="resort_info">
								<h2 class="title georgia_font italic">Karma Spa at Karma Jimbaran</h2>
						</div>
						<table class="table-fill">
								<tbody class="table-hover">
									<tr>
											<td class="text-left">Address</td>
											<td class="text-left"><span class="desc">Jalan Bukit Permai, Jimbaran Bay, Bali 80362, Indonesia
												</span>
											</td>
									</tr>
									<tr>
											<td class="text-left">Tel - Reservations</td>
											<td class="text-left"><span class="tel">+62 (0) 8482200</span></td>
									</tr>
									<tr>
											<td class="text-left">Email</td>
											<td class="text-left"><span class="tel">info@karmaspas.com</span></td>
									</tr>
									
								</tbody>
						</table>
						<!-- Resort Page Link -->
						<a href="https://karmagroup.com/karma-spa/" class="button_outline gold" style="margin-top: 25px;">View Spa</a>
					</div>

					
					<div id="kb5" class="" style="display: none;">
						<!-- Title -->
						<div class="resort_info">
								<h2 class="title georgia_font italic">Karma Spa at Karma Reef</h2>
						</div>
						<table class="table-fill">
								<tbody class="table-hover">
									<tr>
											<td class="text-left">Address</td>
											<td class="text-left"><span class="desc">Gili Meno, Lombok,Indonesia
												</span>
											</td>
									</tr>
									<tr>
											<td class="text-left">Tel - Reservations</td>
											<td class="text-left"><span class="tel">+62 (0) 8482200</span></td>
									</tr>
									<tr>
											<td class="text-left">Email</td>
											<td class="text-left"><span class="tel">info@karmaspas.com</span></td>
									</tr>
									
								</tbody>
						</table>
						<!-- Resort Page Link -->
						<a href="https://karmagroup.com/karma-spa/" class="button_outline gold" style="margin-top: 25px;">View Spa</a>
					</div>

					
					

				</div><!-- .left -->

						
					<div class="right">
						<?php foreach ($allDestinations as $page): ?>
							<?php
							if ($image_id = get_post_meta($page->ID, 'resort_image', 1)) {
								$src = wp_get_attachment_image_url($image_id, 'full');
								echo '<img class="resort_page_id_'.$page->ID.' resort_image" src="' . $src . '" style="'. ($default == $page->ID ? 'display:block;' : '') .'">';
							} ?>
						<?php endforeach; ?>

						<img id="img1" src="https://karmagroup.com/karma-beach/images/carousel/karma-beach-bali3.jpg" style="display: none;">
						<img id="img2" src="https://karmagroup.com/karma-beach/images/carousel/karma-beach-gili-meno.jpg" style="display: none;">
						<img id="img3" src="https://karmagroup.com/wp-content/uploads/2016/09/1._Karma-Kandara-Karma-Spa.jpg" style="display: none;">
						<img id="img4" src="https://karmagroup.com/wp-content/uploads/2016/09/19._Karma-Jimbaran-Karma-Spa.jpg" style="display: none;">
						<img id="img5" src="https://karmagroup.com/wp-content/uploads/2016/09/10._Karma-Reef-Karma_Spa.jpg" style="display: none;">
					</div><!-- .right -->

			</div><!-- .container -->
		</div><!-- .contact_details -->


		



	</div><!-- .contact_panels -->


</div><!-- #contact_section -->




<script>
// Show first one initially
//$('.resort_contact_info').first().show();
//$('.resort_image').first().show();	
						
$(function() {
    $('.contact_select').change(function(){

			if ($('.contact_select').val() == 'karmabeachbali'){
				$('#kb2').css('display','none');
				$('#kb3').css('display','none');
				$('#kb4').css('display','none');
				$('#kb5').css('display','none');
				$('#kb1').css('display','block');
				$('#img1').css('display','block');
				$('#img2').css('display','none');
				$('#img3').css('display','none');
				$('#img4').css('display','none');
				$('#img5').css('display','none');		
				$('.resort_contact_info').hide();
				$('.resort_image').hide();
			}else if($('.contact_select').val() == 'karmabeachgilimeno'){
				$('#kb1').css('display','none');
				$('#kb3').css('display','none');
				$('#kb4').css('display','none');
				$('#kb5').css('display','none');
				$('#kb2').css('display','block');
				$('#img1').css('display','none');
				$('#img2').css('display','block');
				$('#img3').css('display','none');
				$('#img4').css('display','none');
				$('#img5').css('display','none');	
				$('.resort_contact_info').hide();
				$('.resort_image').hide();
			}else if($('.contact_select').val() == 'karmaspakandara'){
				$('#kb2').css('display','none');
				$('#kb1').css('display','none');
				$('#kb4').css('display','none');
				$('#kb5').css('display','none');
				$('#kb3').css('display','block');
				$('#img1').css('display','none');
				$('#img2').css('display','none');
				$('#img3').css('display','block');
				$('#img4').css('display','none');
				$('#img5').css('display','none');
				$('.resort_contact_info').hide();
				$('.resort_image').hide();
			}else if($('.contact_select').val() == 'karmaspajimbaran'){
				$('#kb2').css('display','none');
				$('#kb3').css('display','none');
				$('#kb1').css('display','none');
				$('#kb5').css('display','none');
				$('#kb4').css('display','block');
				$('#img1').css('display','none');
				$('#img2').css('display','none');
				$('#img3').css('display','none');
				$('#img4').css('display','block');
				$('#img5').css('display','none');
				$('.resort_contact_info').hide();
				$('.resort_image').hide();
			}else if($('.contact_select').val() == 'karmaspareef'){
				$('#kb1').css('display','none');
				$('#kb2').css('display','none');
				$('#kb3').css('display','none');
				$('#kb4').css('display','none');
				$('#kb5').css('display','block');
				$('#img1').css('display','none');
				$('#img2').css('display','none');
				$('#img3').css('display','none');
				$('#img4').css('display','none');
				$('#img5').css('display','block');
				$('.resort_contact_info').hide();
				$('.resort_image').hide();
			}else{			
    		// Hide all so we can prepare to show only the specific one
        $('.resort_contact_info').hide();
        $('.resort_image').hide();
		$('#kb1').css('display','none');
		$('#kb2').css('display','none');
		$('#kb3').css('display','none');
		$('#kb4').css('display','none');
		$('#kb5').css('display','none');
		$('#img1').css('display','none');
		$('#img2').css('display','none');
		$('#img3').css('display','none');
		$('#img4').css('display','none');
		$('#img5').css('display','none');

		console.log($(this).find('option:selected').val());
		
        $('.' + $(this).find('option:selected').val()).show();

        $('#' + $(this).find('option:selected').val()).show();
        $('#' + $(this).find('option:selected').val()).addClass('show');
			}
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
