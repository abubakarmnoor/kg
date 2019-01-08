<?php

include("inc/lang.php");

/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, PATCH, DELETE');
header('Access-Control-Allow-Headers: *');
header('Access-Control-Allow-Credentials: true');

?>
<!DOCTYPE html>
<!--[if lt IE 7]><html lang="en" class="no_js ie6"><![endif]-->
<!--[if IE 7]><html lang="en" class="no_js ie7"><![endif]-->
<!--[if IE 8]><html lang="en" class="no_js ie8"><![endif]-->
<!--[if IE 9]><html lang="en" class="no_js ie9"><![endif]-->
<!--[if(gt IE 9)|!(IE)]><!--><html lang="en" class="no_js"><!--<![endif]-->
<head>
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
<meta name="google-site-verification" content="tRk1lO6X-Z5m_3okj9xEhd7PixGkpAMpvYjE8-Mk_4M" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js" defer='defer'></script>
<![endif]-->
<!--[if gte IE 9]
    <style type="text/css">
    .gradient {
    filter: none;
    }
    </style>
<![endif]-->

<!-- Fonts -->
<link rel="preload" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" as="style">

<link rel="apple-touch-icon" sizes="180x180" href="/wp-content/uploads/fbrfg/apple-touch-icon.png">
<link rel="icon" type="image/png" href="/wp-content/uploads/fbrfg/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="/wp-content/uploads/fbrfg/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="/wp-content/uploads/fbrfg/manifest.json">
<link rel="mask-icon" href="/wp-content/uploads/fbrfg/safari-pinned-tab.svg" color="#5bbad5">
<link rel="shortcut icon" href="/wp-content/uploads/fbrfg/favicon.ico">
<meta name="msapplication-config" content="/wp-content/uploads/fbrfg/browserconfig.xml">
<link rel='preload' id='genericons-css' href='<?php echo get_template_directory_uri();?>/genericons/genericons.css' as="style" />

<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyABRf90A2Cm3_we0jIPCPKSAJ5qaB2TiYQ" defer='defer'></script>


<?php $page_id = get_the_ID(); ?>

<?php if($page_id == '866'){ 
/*
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-70462293-1', 'auto', {'allowLinker': true });
ga('require', 'linker');
ga('linker:autoLink', ['karmagroup.com', 'littlehotelier.com', 'thebookingbutton.com.au', 'apac.littlehotelier.com'], false, true);
ga('require', 'displayfeatures');
ga('require', 'linkid' );
ga('send', 'pageview');
</script>    
*/
}elseif( $page_id != '837' && $page_id != '193' && $page_id != '802'){ 
/*
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-70462293-1', 'auto', {'allowLinker': true });
ga('send', 'pageview');
ga('require', 'linker');
ga('linker:autoLink', ['karmagroup.com', 'littlehotelier.com'], false, true);
ga('require', 'displayfeatures');
ga('require', 'linkid' );
</script>
*/
 } ?>

<script>
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WZDHLPS');
</script>



<?php
// if( isset($page) && $page->ID=='317') { // careers page, @TODO see if this can all be put in style.css instead and used on all pages
?>
<style type="text/css">
<?php if(get_the_ID()=='214') { //hide chat pop up. ?>
    
  .lhnInviteContainer {
		display:none !important;
  }
<?php
}
?>
.form-style-5 legend{font-size:1.4em;margin-bottom:10px}.form-style-5 label{display:block;margin-bottom:8px}.form-style-5 input[type="text"],.form-style-5 input[type="date"],.form-style-5 input[type="datetime"],.form-style-5 input[type="email"],.form-style-5 input[type="number"],.form-style-5 input[type="search"],.form-style-5 input[type="time"],.form-style-5 input[type="url"],.form-style-5 textarea,.form-style-5 select{font-family:Georgia,"Times New Roman",Times,serif;background:#54565b;border:none;border-radius:4px;font-size:16px;margin:0;outline:0;padding:7px;width:100%;box-sizing:border-box;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;background-color:#54565b;color:#fff;-webkit-box-shadow:0 1px 0 rgba(0,0,0,.03) inset;box-shadow:0 1px 0 rgba(0,0,0,.03) inset;margin-bottom:30px}.form-style-5 input[type="text"]:focus,.form-style-5 input[type="date"]:focus,.form-style-5 input[type="datetime"]:focus,.form-style-5 input[type="email"]:focus,.form-style-5 input[type="number"]:focus,.form-style-5 input[type="search"]:focus,.form-style-5 input[type="time"]:focus,.form-style-5 input[type="url"]:focus,.form-style-5 textarea:focus,.form-style-5 select:focus{background:#54565b}.form-style-5 select{-webkit-appearance:menulist-button;height:35px;background-color:#54565b}.form-style-5 .number{background:#8d7249;color:#fff;height:30px;width:30px;display:inline-block;font-size:.8em;margin-right:4px;line-height:30px;text-align:center;text-shadow:0 1px 0 rgba(255,255,255,.2);border-radius:15px 15px 15px 0}.form-style-5 input[type="submit"],.form-style-5 input[type="button"]{position:relative;display:block;padding:19px 39px 18px 39px;color:#fff;margin:0 auto;background:#8d7249;font-size:18px;text-align:center;font-style:normal;width:100%;border:none;margin-bottom:10px}.form-style-5 input[type="submit"]:hover,.form-style-5 input[type="button"]:hover{background:#1b1b1b;border:none;color:#8d7249}.menu2{display:none}
	
	
@media all and (min-width: 1024px) { #nav_booking, #destination_mobile_wrapper{ display:none; }}
@media all and (max-width: 1023px) { #destination_desktop_wrapper{display:none}#karma .quick_enquire{display:none}#nav_booking{font-size:14px;color:#020000;display:table;position:absolute;right:52px;top:15px;background-color:#8d7249;padding:8px 20px 7px;cursor:pointer;font-weight:700}#destination_mobile_outside{width:100%;height:calc(100vh - 70px);display:table;position:absolute;margin-top:70px;left:0;background:rgba(0,0,0,.2);z-index:-1}#destination_mobile_closebtn{position:absolute;top:-11px;right:-11px;z-index:1}              
}

@media all and (min-width: 768px) and (max-width: 1023px) {#nav_booking{right: 62px;}
#karma header .main_nav .upper_nav li:nth-of-type(3){padding-bottom: 0vw !important;}
#karma header .main_nav .upper_nav li.member_login_btn {width: 230px !important;margin: 0 auto !important;}
.lhnInviteContainer {display:none !important;}
}
 
@media all and (min-width: 480px) and (max-width: 768px) { #nav_booking{} #karma header .main_nav .upper_nav li:nth-of-type(3){padding-bottom: 0vw !important;}
#karma header .main_nav .upper_nav li.member_login_btn {width: 230px !important;margin: 0 auto !important;}
.lhnInviteContainer {display:none !important;}
#karma .contact_form_container #contact_form .close_btn, #karma .enquiry_form_container #contact_form .close_btn, #karma .enquiryspa_form_container #contact_form .close_btn, #karma .spa_form_container #spa_form .close_btn, #karma .ba_promo_form #contact_form .close_btn {margin-right: -20px;}}
 
@media all and (max-width: 480px) {
#nav_booking{ /*margin:0;*/ }

#karma .contact_form_container #contact_form,#karma .enquiry_form_container #contact_form,#karma .enquiryspa_form_container #contact_form,#karma .spa_form_container #spa_form,#karma .ba_promo_form #contact_form{top:15px!important}#karma .contact_form_container #contact_form input[type="text"],#karma .contact_form_container #contact_form input[type="email"],#karma .enquiry_form_container #contact_form input[type="text"],#karma .enquiryspa_form_container #contact_form input[type="text"],#karma .spa_form_container #spa_form input[type="text"],#karma .enquiry_form_container #contact_form input[type="email"],#karma .enquiryspa_form_container #contact_form input[type="email"],#karma .spa_form_container #spa_form input[type="email"],#karma .ba_promo_form #contact_form input[type="text"],#karma .ba_promo_form #contact_form input[type="email"]{margin-bottom:3px!important}

#karma header .main_nav .upper_nav li:nth-of-type(3){padding-bottom: 0vw !important;}
#karma header .main_nav .upper_nav li.member_login_btn {width: 230px !important; margin: 0 auto !important;}
.lhnInviteContainer {display:none !important;}

}

@media all and (max-width: 374px) { #nav_booking { font-size: 12px; right: 45px; top: 15px; padding: 7px 10px; }}
@media all and (min-width: 1024px) and (max-width: 1280px) { .bookingMask {margin: -68px auto 0 !important;}

#form-247 > p {margin: 0px !important;}
}

/* booNavigation.css */
.header_nav{position:relative}.header_nav li{padding-left:12px!important}.header_nav li.navItem .navContent{background-color:#020000;color:#fff;left:0;position:absolute;top:45px;width:100%;z-index:999}.header_nav .navContent>li{color:#fff;float:left;padding:10px 0!important;text-align:left;width:33.33333%}.header_nav .navContent ul li a{color:#fff;display:block;padding:6px 10px;font-size:14px;font-weight:100!important;transition:all .3s ease;-webkit-transition:all .3s ease;-moz-transition:all .3s ease;-ms-transition:all .3s ease;-o-transition:all .3s ease}.header_nav .navContent ul li a:hover{background-color:#555;padding-left:20px}.header_nav .navContent .group_title{margin-left:22px;color:#8d714c;font-size:120%}#destination_mobile_wrapper{border:1px solid #000;position:absolute;background:#000;margin:0 auto;left:10%;width:80%;padding:20px 0 0;height:calc(100vh - 150px)}#destination_mobile_wrapper ul{height:calc(100vh - 220px);overflow-y:scroll;width:100%}#destination_mobile_wrapper:after{content:url(http://www.karmasanctumclub.com/accordion/down.png);position:absolute;bottom:10px;left:calc(50% - 10px);z-index:999}#destination_mobile_wrapper li{text-transform:uppercase;font-size:18px!important;text-align:center;clear:both;display:table!important;width:100%;padding-top:0!important}#destination_mobile_wrapper li a{font-size:14px;font-weight:100!important;text-transform:none;padding:5px!important;color:#fff;font-weight:700}

</style>
<?php
//}
?>
<script>
var themePath = '<?php echo get_template_directory_uri();?>';
function getGridSize() { // used by some js galleries
  return ((window.innerWidth || document.documentElement.clientWidth) < 600) ? 1 : 
  ((window.innerWidth || document.documentElement.clientWidth) < 1200) ? 2 : 5;
}
function isMobile() {
	if($('.mobile_hidden').css('color') != 'rgb(0, 0, 0)') {
		return false;
	}
	return true;
}
</script>
<?php wp_head(); ?>
<script>
var $ = jQuery.noConflict(); // wordpress replaces $ with jQuery so we need to restore it here!
function scrollToAmenities() {
	if (isMobile() == false) {
		return;
	}
	$('html,body').animate({
		scrollTop: $('.bottom_section').offset().top - $('.fixed_header').height() + 1
	}, 500);
}
</script>
<script type="text/javascript">
//<![CDATA[
function reload()
{

if(document.cookie)
{
a = document.cookie;
cookiewert = "";
while(a.length > 0)
{
cookiename = a.substring(0,a.indexOf('='));
if(cookiename == "reloadstempel")
{
cookiewert = a.substring(a.indexOf('=')+1,a.indexOf(';'));
break;
}
a = a.substring(a.indexOf(cookiewert)+cookiewert.length+1,a.length);
}
if(cookiewert.length > 0)
{
alter = new Date().getTime() - cookiewert;

if(alter > 3600000000) // 3600000000, 1 hours
{   
document.cookie = "reloadstempel=" + new Date().getTime() + ";";
location.reload(true);
}
else
{
return;
}
}
else
{
document.cookie = "reloadstempel=" + new Date().getTime() + ";";
location.reload(true);
}
}
else
{
document.cookie = "reloadstempel=" + new Date().getTime() + ";";
location.reload(true);
}

}
reload();
//]]>

</script>


</head>

<body <?php body_class(); ?>>

    <div id="karma" style="position: relative;">
    <div class="mobile_hidden"></div>
    <div class="header_social_icons_group">
        <a href="https://www.facebook.com/karmagroupglobal" target="_blank" rel="noopener"  class="icon facebook"></a>
        <a href="https://twitter.com/karmaresorts" target="_blank" rel="noopener" class="icon twitter"></a>
        <a href="https://instagram.com/karma.group/" target="_blank" rel="noopener" class="icon instagram"></a>
        <a href="https://www.snapchat.com/add/karmabeachclubs" rel="noopener" target="_blank" class="icon flickr"></a>
        <a href="https://soundcloud.com/karmamusiccollection" rel="noopener" target="_blank" class="icon soundcloud"></a>
        <a class="icon karma pw-button pw-button-post"></a>
    </div>

	<header>
        <div class="container cf">
            
            <div class="logo">
                <a href="<?php echo get_option( 'home' ); ?>/"><img src="<?php echo get_template_directory_uri();?>/imgs/karma-logo-new.png" alt="Karma Group Logo" title="Karma Group – Luxury Hotels and Resorts"></a>
            </div>

		    <div id="nav_booking">Book Now</div>

                                <div id="destination_mobile_outside" class="destination_mobile_close" style="display: none;"></div>                           
                                <div id="destination_mobile_wrapper" style="display: none; top: 85px; color: #fff;">
                                    <div id="destination_mobile_closebtn" class="destination_mobile_close"><img src="<?php echo get_template_directory_uri();?>/imgs/icons/close.png" alt="Karma Group Logo"></div>
                                    <ul>
                                        <li>Karma Resorts</li>
                                        <li><a href="https://karmagroup.com/securebooking/karma-bavaria/">Karma Bavaria - Germany</a></li>
                                        <li><a href="https://karmagroup.com/securebooking/karma-jimbaran/">Karma Jimbaran - Bali</a></li>
                                        <li><a href="https://karmagroup.com/securebooking/karma-kandara/">Karma Kandara - Bali</a></li>
                                        <li><a href="https://karmagroup.com/securebooking/karma-rottnest/">Karma Rottnest - Australia</a></li>

                                        <li style="margin-top: 15px;">Karma Retreats</li>
                                        <li><a href="#" class="showEnquiryForm">Karma Cây Tre - Vietnam</a></li>
                                        <li><a href="#" class="showEnquiryForm">Karma Chakra - India</a></li>
                                        <li><a href="#" class="showEnquiryForm">Karma Haveli - India</a></li>
                                        <li><a href="#" class="showEnquiryForm">Karma Mayura - Bali</a></li>
                                        <li><a href="https://apac.littlehotelier.com/properties/karma-reef/">Karma Reef - Indonesia</a></li>
                                        <li><a href="https://karmagroup.com/securebooking/karma-st-martins/">Karma St. Martin's - Isles of Scilly</a></li>

                                        <li style="margin-top: 15px;">Karma Royal</li>                                        
                                        <li><a href="#" class="showEnquiryForm">Karma Royal MonteRio - Goa</a></li>
                                        <li><a href="#" class="showEnquiryForm">Karma Royal Bella Vista - Thailand</a></li>

                                        <li><a href="#" class="showEnquiryForm">Karma Royal Benaulim - India</a></li>

                                        <li><a href="#" class="showEnquiryForm">Karma Royal Boat Lagoon - Thailand</a></li>
                                        <li><a href="#" class="showEnquiryForm">Karma Royal Candidasa - Bali</a></li>
                                        <li><a href="https://secure.staah.com/common-cgi/properties/b2c/Booknow.pl?action=showpage&PropertyId=968&Ln=&cur=&source=&checkIn=&checkOut=&unk=2&msg=">Karma Royal Haathi Mahal - Goa</a></li>
                                        <li><a href="#" class="showEnquiryForm">Karma Royal Residences - Haathi Mahal</a></li>
                                        <li><a href="#" class="showEnquiryForm">Karma Royal Jimbaran - Bali</a></li>
                                        <li><a href="#" class="showEnquiryForm">Karma Royal Palms - Goa</a></li>
                                        <li><a href="#" class="showEnquiryForm">Karma Royal Sanur - Bali</a></li>
                                        <!--<li><a href="#" class="showEnquiryForm">Karma Royal Villea - Crete</a></li>-->

                                        <li style="margin-top: 15px;">Karma Estate</li>
                                        <!--<li><a href="#" class="showEnquiryForm">Chateau de Samary - France</a></li>-->
                                        <li><a href="#" class="showEnquiryForm">Pelikanos - Mykonos</a></li>
                                        <li><a href="#" class="showEnquiryForm">Le Preverger - France</a></li>
                                        <li style="margin-top: 15px;">Karma Sanctum</li>
                                        <li><a href="https://uk2.roomlynx.net/rezrooms2/loadOBMApplication.action?siteId=SANCSOHO&chainAction=newAvailabilitySearch&request_locale=en">Karma Sanctum Soho</a></li> 
                                         <li><a href="https://uk2.roomlynx.net/rezrooms2/loadOBMApplication.action?siteId=SANCGREE&chainAction=newAvailabilitySearch&request_locale=en">Karma Sanctum On the Green</a></li>                                      
                                    </ul>
                                </div>
                            

            <div class="nav_toggle">
                <!-- <img src="<?php echo get_template_directory_uri();?>/imgs/icons/navBar.png" alt="Menu" /> -->
                <div class="bar_group">
                    <div class="bar one"></div>
                    <div class="bar two"></div>
                    <div class="bar three"></div>
                </div><!-- /.bar_group -->
            </div><!-- /.mobile_nav_toggle -->



            <div class="main_nav main_nav1">
                <div class="upper_nav">
                    	<li class="menu1"><a href="<?php echo get_option( 'home' ); ?>/karma-experiences/" title="Karma Experience"><?php echo $language[$lang]['menu_karma_experiences']; ?></a>
						</li>
                        <li class="menu1"><a href="https://karmagroup.com/blog/" target="_blank" rel="noopener" title="Blog">Blog</a>
						<li class="menu1"><a href="<?php echo get_option( 'home' ); ?>/about-karma/" title="About Karma"><?php echo $language[$lang]['menu_about']; ?></a>
                        <li class="menu1"><a href="<?php echo get_option( 'home' ); ?>/karmamoments/" title="Karma Moments">Karma Moments</a>
                    <li>
						<div id="book_online_select">

                            <div id="destination_desktop_wrapper">
                                <p class="menu2">&nbsp;</p>
                                <select id="bookOnline" class="karma_group" value="x" title="Book Online">
                                    <option value="" selected disabled><?php echo $language[$lang]['menu_book_online']; ?></option>
                                       <optgroup label="Karma Resorts">
                                          <option value="https://karmagroup.com/securebooking/karma-bavaria/">Karma Bavaria - Germany</option>
                                          <option value="https://karmagroup.com/securebooking/karma-jimbaran/">Karma Jimbaran - Bali</option>
                                          <!--<option value="https://karmagroup.com/securebooking/?karmakandara">Karma Kandara - Bali</option>-->
                                          <option value="https://karmagroup.com/securebooking/karma-kandara/">Karma Kandara - Bali</option>
                                          <option value="https://karmagroup.com/securebooking/karma-rottnest/">Karma Rottnest - Australia</option>
                                       </optgroup>

                                       <optgroup label="Karma Retreats">
                                          <option value="0">Karma Cây Tre - Vietnam</option>
                                          <option value="0">Karma Chakra - India</option>
                                          <option value="0">Karma Haveli - India</option>
                                          <option value="0">Karma Mayura - Bali</option>
                                          <option value="https://apac.littlehotelier.com/properties/karma-reef/">Karma Reef - Indonesia</option>
                                          <option value="https://karmagroup.com/securebooking/karma-st-martins/">Karma St. Martin's - Isles of Scilly</option>
                                       </optgroup>

                                       <optgroup label="Karma Royal">                                                                                   
                                          <option value="0">Karma Royal MonteRio - Goa</option>
                                          <option value="0">Karma Royal Bella Vista - Thailand</option>
                                          <option value="0">Karma Royal Benaulim - India</option>
                                          <option value="0">Karma Royal Boat Lagoon - Thailand</option>
                                          <option value="0">Karma Royal Candidasa - Bali</option>
                                          <option value="https://secure.staah.com/common-cgi/properties/b2c/Booknow.pl?action=showpage&PropertyId=968&Ln=&cur=&source=&checkIn=&checkOut=&unk=2&msg=">Karma Royal Haathi Mahal - Goa</option>
                                          <option value="0">Karma Royal Residences - Haathi Mahal</option>
                                          <option value="0">Karma Royal Jimbaran - Bali</option>
                                          <option value="0">Karma Royal Palms - Goa</option>
                                          <option value="0">Karma Royal Sanur - Bali</option>
                                          <!--<option value="0">Karma Royal Villea - Crete</option>-->
                                       </optgroup>

                                       <optgroup label="Karma Estate">
                                          <!--<option value="">Chateau de Samary - France</option>-->
                                          <option value="0">Pelikanos - Mykonos</option>
                                          <option value="0">Le Preverger - France</option>
                                       </optgroup>
                                       <optgroup label="Karma Sanctum">
                                           <option value="https://karmagroup.com/booking-sanctum/">Karma Sanctum Soho</option>
                                           <option value="https://uk2.roomlynx.net/rezrooms2/loadOBMApplication.action?siteId=SANCGREE&chainAction=newAvailabilitySearch&request_locale=en">Karma Sanctum On the Green</option>
                                       </optgroup>
                                </select>
                                <p class="menu2">&nbsp;</p>
                            </div>
						</div>
					</li>
                    <li class="member_login_btn"><a title="<?php echo $language[$lang]['menu_oddysey_member_login']; ?>" href="https://odysseypremier.com/member/login/"><?php echo $language[$lang]['menu_oddysey_member_login']; ?><span class="lock-icon"></span></a>
                </div>

		<!--DESKTOP DROPDOWN-->
                <ul class="header_nav desktop">

                    <li class="navItem"><a href="#" target="_self" class="" title="<?php echo $language[$lang]['menu_destinations']; ?>"><?php echo $language[$lang]['menu_destinations']; ?></a>

                                <ul class="navContent" style="display: none;">

                                   <li><span class="group_title">Karma Resorts</span>
                                        <ul>
                                              <li><a href="<?php echo get_option( 'home' ); ?>/find-destination/karma-resorts/karma-bavaria/">Karma Bavaria - Germany</a></li>
                                              <li><a href="<?php echo get_option( 'home' ); ?>/find-destination/karma-resorts/karma-jimbaran/">Karma Jimbaran - Bali</a></li>
                                              <li><a href="<?php echo get_option( 'home' ); ?>/find-destination/karma-resorts/karma-kandara/">Karma Kandara - Bali</a></li>
                                              <li><a href="<?php echo get_option( 'home' ); ?>/find-destination/karma-resorts/karma-rottnest/">Karma Rottnest - WA</a></li>
                                        </ul>

                                        <span class="group_title">Karma Retreats</span>
                                        <ul>
                                              <li><a href="<?php echo get_option( 'home' ); ?>/find-destination/karma-retreats/cay-tre/">Karma Cây Tre - Vietnam</a></li>
                                              <li><a href="<?php echo get_option( 'home' ); ?>/find-destination/karma-retreats/karma-chakra/">Karma Chakra - Kerala</a></li>
                                              <li><a href="<?php echo get_option( 'home' ); ?>/find-destination/karma-retreats/karma-haveli/">Karma Haveli - Jaipur</a></li>
                                              <li><a href="<?php echo get_option( 'home' ); ?>/find-destination/karma-retreats/karma-mayura/">Karma Mayura - Bali</a></li>
                                              <li><a href="<?php echo get_option( 'home' ); ?>/find-destination/karma-retreats/karma-reef/">Karma Reef - Indonesia</a></li>
                                              <li><a href="<?php echo get_option( 'home' ); ?>/find-destination/karma-retreats/karma-st-martins/">Karma St. Martin's - Isles of Scilly</a></li>
                                              <li><a href="<?php echo get_option( 'home' ); ?>/find-destination/karma-retreats/karma-minoan/">Karma Minoan - Crete</a></li>                                              
                                        </ul>
                                   </li>
                                   <li><span class="group_title">Karma Royal</span>
                                        <ul>
                                              <li><a href="<?php echo get_option( 'home' ); ?>/find-destination/karma-royal/royal-monterio/">Karma Royal MonteRio - Goa</a></li>
                                              <li><a href="<?php echo get_option( 'home' ); ?>/find-destination/karma-royal/royal-chiang-mai/">Karma Royal Bella Vista - Thailand</a></li>

                                              <li><a href="<?php echo get_option( 'home' ); ?>/find-destination/karma-royal/karma-royal-benaulim/">Karma Royal Benaulim - Goa</a></li>

                                              <li><a href="<?php echo get_option( 'home' ); ?>/find-destination/karma-royal/royal-phuket/">Karma Royal Boat Lagoon - Thailand</a></li>
                                              <li><a href="<?php echo get_option( 'home' ); ?>/find-destination/karma-royal/royal-candidasa/">Karma Royal Candidasa - Bali</a></li>
                                              <li><a href="<?php echo get_option( 'home' ); ?>/find-destination/karma-royal/royal-haathi-mahal/">Karma Royal Haathi Mahal - Goa</a></li>
                                              <li><a href="<?php echo get_option( 'home' ); ?>/find-destination/karma-royal/karma-royal-residences-haathi-mahal/">Karma Royal Residences - Haathi Mahal</a></li>
                                              <li><a href="<?php echo get_option( 'home' ); ?>/find-destination/karma-royal/royal-jimbaran/">Karma Royal Jimbaran - Bali</a></li>
                                              <li><a href="<?php echo get_option( 'home' ); ?>/find-destination/karma-royal/royal-palms/">Karma Royal Palms - Goa</a></li>
                                              <li><a href="<?php echo get_option( 'home' ); ?>/find-destination/karma-royal/royal-sanur/">Karma Royal Sanur - Bali</a></li>
                                             <!-- <li><a href="<?php echo get_option( 'home' ); ?>/find-destination/karma-royal/royal-villea">Karma Royal Villea - Crete</a></li>-->
                                        </ul>
                                   </li>
                                   <li><span class="group_title">Karma Estate</span>
                                        <ul>
                                              <!--<li><a href="<?php echo get_option( 'home' ); ?>/find-destination/karma-estates/karma-samary">Chateau de Samary - France</a></li>-->
                                              <li><a href="<?php echo get_option( 'home' ); ?>/find-destination/karma-estates/pelikanos/">Pelikanos - Mykonos</a></li>
                                              <li><a href="<?php echo get_option( 'home' ); ?>/find-destination/karma-estates/le-preverger/">Le Preverger - France</a></li>
                                              <li><a href="<?php echo get_option( 'home' ); ?>/find-destination/karma-estates/chateau-de-samary/">Chateau de Samary - France</a></li>
                                        </ul>
                                   </li>
                                   <li><span class="group_title">Karma Sanctum</span>
                                        <ul>
                                              <li><a href="<?php echo get_option( 'home' ); ?>/find-destination/karma-sanctum/karma-sanctum-soho/">Karma Sanctum Soho - London</a></li>
                                              <li><a href="<?php echo get_option( 'home' ); ?>/find-destination/karma-sanctum/karma-sanctum-on-the-green/">Karma Sanctum On the Green - England</a></li>
                                        </ul>
                                   </li>
                                </ul>

                    </li>
                    <li class=""><a href="<?php echo get_option( 'home' ); ?>/inspiration/" target="_self" class="" title="Inspiration">Inspiration</a></li>
                    <li class=""><a href="<?php echo get_option( 'home' ); ?>/membership/" target="_self" class="" title="<?php echo $language[$lang]['menu_membership']; ?>"><?php echo $language[$lang]['menu_membership']; ?></a></li>
                    <li class=""><a href="<?php echo get_option( 'home' ); ?>/karma-spa/" target="_self" class="" title="Spa & Wellbeing">Spa & Wellbeing </a></li>
                    <li class=""><a href="<?php echo get_option( 'home' ); ?>/karma-beach/" target="_self" class="" title="Karma Beach">Karma Beach</a></li>
                    <li class=""><a href="<?php echo get_option( 'home' ); ?>/news-events/" target="_self" class="" title="<?php echo $language[$lang]['menu_news_events']; ?>"><?php echo $language[$lang]['menu_news_events']; ?></a></li>
                    <li class=""><a href="<?php echo get_option( 'home' ); ?>/contact-us/" target="_self" class="" title="<?php echo $language[$lang]['menu_contact_us']; ?>"><?php echo $language[$lang]['menu_contact_us']; ?></a></li>
                </ul>

                <ul class="mobile_dropdown">
                    <li><a href="#" target="_self" class="title"><?php echo $language[$lang]['menu_destinations']; ?></a>

                            <div class="content inactive" style="display: none;">
                                <ul>
                                    <li><span class="group_title">Karma Resorts</span></li>
                                    <li><a href="<?php echo get_option( 'home' ); ?>/find-destination/karma-resorts/karma-bavaria/">Karma Bavaria - Germany</a></li>
                                    <li><a href="<?php echo get_option( 'home' ); ?>/find-destination/karma-resorts/karma-jimbaran/">Karma Jimbaran - Bali</a></li>
                                    <li><a href="<?php echo get_option( 'home' ); ?>/find-destination/karma-resorts/karma-kandara/">Karma Kandara - Bali</a></li>
                                    <li><a href="<?php echo get_option( 'home' ); ?>/find-destination/karma-resorts/karma-rottnest/">Karma Rottnest - Australia</a></li>

                                    <li><span class="group_title">Karma Retreats</span></li>
                                    <li><a href="<?php echo get_option( 'home' ); ?>/find-destination/karma-retreats/cay-tre/">Karma Cây Tre - Vietnam</a></li>
                                    <li><a href="<?php echo get_option( 'home' ); ?>/find-destination/karma-retreats/karma-chakra/">Karma Chakra - India</a></li>
                                    <li><a href="<?php echo get_option( 'home' ); ?>/find-destination/karma-retreats/karma-haveli/">Karma Haveli - India</a></li>
                                    <li><a href="<?php echo get_option( 'home' ); ?>/find-destination/karma-retreats/karma-mayura/">Karma Mayura - Bali</a></li>
                                    <li><a href="<?php echo get_option( 'home' ); ?>/find-destination/karma-retreats/karma-reef/">Karma Reef - Indonesia</a></li>
                                    <li><a href="<?php echo get_option( 'home' ); ?>/find-destination/karma-retreats/karma-st-martins/">Karma St. Martin's - Isles of Scilly</a></li>
                                    <li><a href="<?php echo get_option( 'home' ); ?>/find-destination/karma-retreats/karma-minoan/">Karma Minoan - Crete</a></li>

                                    <li><span class="group_title">Karma Royal</span></li>                                    
                                    <li><a href="<?php echo get_option( 'home' ); ?>/find-destination/karma-royal/royal-monterio/">Karma Royal MonteRio - Goa</a></li>
                                    <li><a href="<?php echo get_option( 'home' ); ?>/find-destination/karma-royal/royal-chiang-mai/">Karma Royal Bella Vista - Thailand</a></li>

                                    <li><a href="<?php echo get_option( 'home' ); ?>/find-destination/karma-royal/karma-royal-benaulim/">Karma Royal Benaulim - India</a></li>

                                    <li><a href="<?php echo get_option( 'home' ); ?>/find-destination/karma-royal/royal-phuket/">Karma Royal Boat Lagoon - Thailand</a></li>
                                    <li><a href="<?php echo get_option( 'home' ); ?>/find-destination/karma-royal/royal-candidasa/">Karma Royal Candidasa - Bali</a></li>
                                    <li><a href="<?php echo get_option( 'home' ); ?>/find-destination/karma-royal/royal-haathi-mahal/">Karma Royal Haathi Mahal - Goa</a></li>
                                    <li><a href="<?php echo get_option( 'home' ); ?>/find-destination/karma-royal/karma-royal-residences-haathi-mahal/">Karma Royal Residences - Haathi Mahal</a></li>
                                    <li><a href="<?php echo get_option( 'home' ); ?>/find-destination/karma-royal/royal-jimbaran/">Karma Royal Jimbaran - Bali</a></li>
                                    <li><a href="<?php echo get_option( 'home' ); ?>/find-destination/karma-royal/royal-palms/">Karma Royal Palms - Goa</a></li>
                                    <li><a href="<?php echo get_option( 'home' ); ?>/find-destination/karma-royal/royal-sanur/">Karma Royal Sanur - Bali</a></li>
                                    <!--<li><a href="<?php echo get_option( 'home' ); ?>/find-destination/karma-royal/royal-villea">Karma Royal Villea - Crete</a></li>-->
                                    
                                    <li><span class="group_title">Karma Estate</span></li>

                                    <!--<li><a href="<?php echo get_option( 'home' ); ?>/find-destination/karma-estates/karma-samary">Chateau de Samary - France</a></li>-->
                                    <li><a href="<?php echo get_option( 'home' ); ?>/find-destination/karma-estates/pelikanos/">Pelikanos - Mykonos</a></li>
                                    <li><a href="<?php echo get_option( 'home' ); ?>/find-destination/karma-estates/le-preverger/">Le Preverger - France</a></li>
                                    <li><a href="<?php echo get_option( 'home' ); ?>/find-destination/karma-estates/chateau-de-samary/">Chateau de Samary - France</a></li>

                                    <li><span class="group_title">Karma Sanctum</span></li>
                                    <li><a href="<?php echo get_option( 'home' ); ?>/find-destination/karma-sanctum/karma-sanctum-soho/">Karma Sanctum Soho - London</a></li>
                                    <li><a href="<?php echo get_option( 'home' ); ?>/find-destination/karma-sanctum/karma-sanctum-on-the-green/">Karma Sanctum On the Green - England</a></li>
                                </ul>
                            </div>
                    </li>
                    <li class=""><a href="<?php echo get_option( 'home' ); ?>/inspiration/" target="_self" class="" title="Inspiration">Inspiration</a></li>
                    <li class=""><a href="<?php echo get_option( 'home' ); ?>/membership/" target="_self" class="" title="<?php echo $language[$lang]['menu_membership']; ?>"><?php echo $language[$lang]['menu_membership']; ?></a></li>
                    <li class=""><a href="<?php echo get_option( 'home' ); ?>/karma-spa/" target="_self" class="" title="Spa & Wellbeing">Spa & Wellbeing</a></li>
                    <li class=""><a href="<?php echo get_option( 'home' ); ?>/karma-beach/" target="_self" class="" title="Karma spa">Karma Beach</a></li>
                    <li class=""><a href="<?php echo get_option( 'home' ); ?>/news-events/" target="_self" class="" title="<?php echo $language[$lang]['menu_news_events']; ?>"><?php echo $language[$lang]['menu_news_events']; ?></a></li>
                    <li class=""><a href="<?php echo get_option( 'home' ); ?>/contact-us/" target="_self" class="" title="<?php echo $language[$lang]['menu_contact_us']; ?>"><?php echo $language[$lang]['menu_contact_us']; ?></a></li>
                </ul>
            </div><!-- .main_nav -->                   

        </div><!-- .container -->
    </header>

    <style type="text/css">
        #booknow_iframe_wrapper{
            width: 100%;
            display: none;
            height: calc(100vh - 140px);
            top: 120px;
            position: fixed;
            z-index: 99;
            /*border: 2px solid #f00;*/
        }
        #booknow_iframe_wrapper .close_btn{
            position: absolute;
            top: -6px;
            right: -3px;
        }

        @media screen and (max-width: 1023px) {        
            #booknow_iframe_wrapper td:nth-child(1),
            #booknow_iframe_wrapper td:nth-child(3){
                display: none;
            }
        }
        #booknow_iframe{
            height: calc(100vh - 140px);
        }
        #overlay {
            display: none;
            width: 100%;
            height: calc(100vh - 100px);
            top: 100px;
            position: fixed;
            z-index: 98;
            background-color: rgba(0,0,0,.5);
        }    
    </style>

    <div id="overlay"></div>

    <table width="100%" cellpadding="0" cellspacing="0" border="1" id="booknow_iframe_wrapper">
        <tr>
            <td style="width: calc(50%-394px);" align="center" valign="top"></td>
            <td width="788" style="position: relative;">
                <div class="close_btn"><img src="<?php echo get_option( 'home' ); ?>/wp-content/themes/karma/imgs/icons/close.png" alt="Karma Group Icon"  ></div>
                <iframe width="788" id="booknow_iframe" src=""></iframe></td>
            <td style="width: calc(50%-394px);" align="center" valign="top"></td>
        </tr>
    </table>