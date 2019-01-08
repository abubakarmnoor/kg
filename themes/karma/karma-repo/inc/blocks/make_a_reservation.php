<?php
$fields = array(
	'background_image' => get_sub_field('background_image'),		
	'title' => get_sub_field('title'),				
	'description' => get_sub_field('description'),		
	'link_url' => get_sub_field('link_url'),		
	'link_text' => get_sub_field('link_text'),		
	'text_color' => get_sub_field('text_color'),		
	'overlay_color' => get_sub_field('overlay_color'),		
	'hide_overlay' => get_sub_field('hide_overlay')
);
ob_start();
$text_color = $fields['text_color'] ? $fields['text_color'] : '#FFF';
$overlay_color = '';
if ($fields['overlay_color'] == 'Gold') {
	$overlay_color = 'rgba(219,168,73,0.80)';
}
$booking_url = get_post_meta(get_the_ID(), 'booking_url', 1);
if ($booking_url == false) {
	$booking_link_action = 'onclick="showEnquiryForm();"';
} else {
	$booking_link_action = 'href="'.$booking_url.'"';
}

if(get_the_ID() == 5825){
    $booking_link_action_mobile = 'href="https://uk2.roomlynx.net/rezrooms2/loadOBMApplication.action?siteId=SANCSOHO&chainAction=newAvailabilitySearch&request_locale=en"';
}
    
$background_image_url = '';
if ($fields['background_image']) {
	$background_image_url = wp_get_attachment_image_url($fields['background_image'], 'full');
}
?>

<style type="text/css">
#make_reservation .mobile{
display: none;
}
#make_reservation .desktop{
display: inline-block;
}
@media screen and (max-width: 768px) {
#make_reservation .mobile{
display: inline-block;
}
#make_reservation .desktop{
display: none;
}		
}
</style>

<div id="make_reservation">
	<div class="cta_banner" style="background: url('<?php echo $background_image_url; ?>') no-repeat; background-position: center; background-size: cover;">
		<?php if ($fields['hide_overlay'] != 1): ?>
			<div class="cta_banner_overlay" style="background-color:<?php echo $overlay_color;?>;"></div>
		<?php endif; ?>
		<div class="content">
			<h2 class="georgia_font italic" style="color:<?php echo $text_color;?>;"><?php  echo $fields['title']; ?></h2>
			<h4 style="color:<?php echo $text_color; ?>;"><p><a href="<?php echo get_option('home'); ?>/contact-us/?pid=<?php echo get_the_ID(); ?>" style="color: #fff; border-bottom: 1px solid #fff;">Contact us</a> now and we’ll tailor your perfect getaway.</p><p>&nbsp;</p><!-- <?php  echo nl2br($fields['description']); ?> --></h4>
			
<a <?php echo $booking_link_action;?> 
class="desktop <?php echo ($text_color = $fields['text_color'] == '#FFF' ? "button_outline black" : "white_button") ?>" 
style="<?php echo $text_color; ?>" target="_blank" title="<?php echo (!empty($fields['link_text']) ? $fields['link_text'] : 'Check Availability & Rates'); ?>"><?php echo (!empty($fields['link_text']) ? $fields['link_text'] : 'Check Availability & Rates'); ?></a>

<a <?php echo $booking_link_action_mobile;?> 
class="mobile <?php echo ($text_color = $fields['text_color'] == '#FFF' ? "button_outline black" : "white_button") ?>" 
style="<?php echo $text_color; ?>" title="<?php echo (!empty($fields['link_text']) ? $fields['link_text'] : 'Check Availability & Rates'); ?>"><?php echo (!empty($fields['link_text']) ? $fields['link_text'] : 'Check Availability & Rates'); ?></a>				
		</div>
	</div>
</div><!-- #cta-banner -->
<?php
//include 'enquiry_form.php';
$html = ob_get_contents();
ob_end_clean();
?>