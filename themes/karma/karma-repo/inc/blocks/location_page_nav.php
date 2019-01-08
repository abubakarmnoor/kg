<?php
/*********EN LANGUAGE****/
$language['en']['menu_about'] = 'About Karma';
$language['en']['menu_karma_experiences'] = 'Karma Experiences';
$language['en']['menu_destinations'] = 'Destinations';
$language['en']['menu_membership'] = 'Membership';
$language['en']['menu_news_events'] = 'News & Events';
$language['en']['menu_contact_us'] = 'Contact Us';
$language['en']['menu_book_online'] = 'Book Online';
$language['en']['menu_oddysey_member_login'] = 'Oddysey Member Login';
$language['en']['location_page_nav_location'] = 'Location';
$language['en']['location_page_nav_amenities'] = 'Amenities';
$language['en']['location_page_nav_accommodation'] = 'Accommodation';
$language['en']['location_page_nav_cuisine'] = 'Cuisine';
$language['en']['location_page_nav_weddings'] = 'Weddings';
$language['en']['location_page_nav_conference'] = 'Conference';
$language['en']['location_page_nav_gallery'] = 'Gallery';
$language['en']['location_page_nav_make_a_reservation'] = 'Make a Reservation';

/*********DE LANGUAGE****/
$language['de']['menu_about'] = 'Über Karma';
$language['de']['menu_karma_experiences'] = 'Karma Erlebnisse';
$language['de']['menu_destinations'] = 'Destinationen';
$language['de']['menu_membership'] = 'Mitgliedschaft';
$language['de']['menu_news_events'] = 'Neuigkeiten & Events';
$language['de']['menu_contact_us'] = 'Kontaktieren Sie uns';
$language['de']['menu_book_online'] = 'Online buchen';
$language['de']['menu_oddysey_member_login'] = 'Oddysey Mitglieder Login';
$language['de']['location_page_nav_location'] = 'Lage';
$language['de']['location_page_nav_amenities'] = 'Ausstattung';
$language['de']['location_page_nav_accommodation'] = 'Zimmer';
$language['de']['location_page_nav_cuisine'] = 'K​ulinarisches';
$language['de']['location_page_nav_weddings'] = 'Hochzeiten';
$language['de']['location_page_nav_conference'] = 'Konferenz';
$language['de']['location_page_nav_gallery'] = 'Galerie';
$language['de']['location_page_nav_make_a_reservation'] = 'Reservieren Sie jetzt';

//CEK LANGUAGE
$lang = 'en';
if(!isset($_GET['lang'])){

    $lang = 'en';
}else{

    $lang = $_GET['lang'];
}
?>

<?php
ob_start();
$block_names = karma_getPageBlockNames(get_the_ID());
//echo '<pre>'.var_export($block_names,1).'</pre>';

//include("inc/lang.php");

?>
<!-- Desktop Location Page Nav -->
<div id="location_page_nav">
	<div class="container wide">
		<?php echo (in_array('location', $block_names) ? '<li><a href="#location">'. $language[$lang]['location_page_nav_location'] .'</a></li>' : ''); ?>
		<?php echo (in_array('services', $block_names) ? '<li><a href="#services">'. $language[$lang]['location_page_nav_amenities'] .'</a></li>' : ''); ?>
		<?php echo (in_array('accommodation', $block_names) ? '<li><a href="#accommodation">'. $language[$lang]['location_page_nav_accommodation'] .'</a></li>' : ''); ?>
		<?php echo (in_array('cuisine', $block_names) ? '<li><a href="#cuisine">'. $language[$lang]['location_page_nav_cuisine'] .'</a></li>' : ''); ?>
		<?php echo (in_array('weddings', $block_names) ? '<li><a href="#weddings">'. $language[$lang]['location_page_nav_weddings'] .'</a></li>' : ''); ?>
		<?php echo (in_array('conference', $block_names) ? '<li><a href="#conference">'. $language[$lang]['location_page_nav_conference'] .'</a></li>' : ''); ?>
		<?php echo (in_array('gallery', $block_names) ? '<li><a href="#gallery">'. $language[$lang]['location_page_nav_gallery'] .'</a></li>' : ''); ?>
		<li><a href="#carousel_cta_section_EO">Exclusive Offers</a></li>
		<?php echo (in_array('make_a_reservation', $block_names) ? '<li><a href="#make_reservation">'. $language[$lang]['location_page_nav_make_a_reservation'] .'</a></li>' : ''); ?>
	</div>
</div>

<!-- Mobile Location Page Nav -->
<select name="location_page_nav_select" id="location_nav_mobile">
	<option default>Navigation...</option>
	<?php echo (in_array('location', $block_names) ? '<option><a href="#location">'. $language[$lang]['location_page_nav_location'] .'</a></option>' : ''); ?>
		<?php echo (in_array('services', $block_names) ? '<option><a href="#services">'. $language[$lang]['location_page_nav_amenities'] .'</a></option>' : ''); ?>
		<?php echo (in_array('accommodation', $block_names) ? '<option><a href="#accommodation">'. $language[$lang]['location_page_nav_accommodation'] .'</a></option>' : ''); ?>
		<?php echo (in_array('cuisine', $block_names) ? '<option><a href="#cuisine">'. $language[$lang]['location_page_nav_cuisine'] .'</a></option>' : ''); ?>
		<?php echo (in_array('weddings', $block_names) ? '<option><a href="#weddings">'. $language[$lang]['location_page_nav_weddings'] .'</a></option>' : ''); ?>
		<?php echo (in_array('conference', $block_names) ? '<li><a href="#conference">'. $language[$lang]['location_page_nav_conference'] .'</a></li>' : ''); ?>
		<?php echo (in_array('gallery', $block_names) ? '<option><a href="#gallery">'. $language[$lang]['location_page_nav_gallery'] .'</a></option>' : ''); ?>
		<?php echo (in_array('make_a_reservation', $block_names) ? '<option><a href="#make_reservation">'. $language[$lang]['location_page_nav_make_a_reservation'] .'</a></option>' : ''); ?>
	</div>
</select>


<script type="text/javascript">
	// Location Navbar Fixed on Scroll
	$(document).ready(function() {
	  	var locationNavbar = $('#location_page_nav');
	  	// Get height of header
	  	var headerHeight = $('header').outerHeight(false);
		minusHeight = headerHeight;
	  	// Need to take concrete5 admin bar into account
	  	var locationNavbarPosition = locationNavbar.offset().top - minusHeight;
	  	$(window).on('scroll', function(){
	    	if ($(window).scrollTop() > locationNavbarPosition) {
	      		locationNavbar.addClass('fixed_nav');
	    	}else{
	      		locationNavbar.removeClass('fixed_nav');
	    	};
	  	});
	});
</script>
<?php 
$html = ob_get_contents();
ob_end_clean();
?>