<?php include("inc/lang.php");

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
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

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
<meta name="referrer" content="always" />
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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
<link rel='preload' href='<?php echo get_template_directory_uri();?>/genericons/genericons.css' as="style" id='genericons-css' onload="this.onload=null;this.rel='stylesheet'" />
<!-- plugin css, please comment: /wp-content/plugins/contact-form-7/includes/controller.php and find line: 194, 195,196 -->
<link rel="preload" href="/wp-content/plugins/contact-form-7/includes/css/styles.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<!-- /wp-content/plugins/essential-grid/public/essential-grid.class.php and find line: 150. -->
<link rel="stylesheet" href="/wp-content/plugins/essential-grid/public/assets/css/settings.css" as="style" >
<!-- eof -->
<link rel="apple-touch-icon" sizes="180x180" href="/wp-content/uploads/fbrfg/apple-touch-icon.png">
<link rel="icon" type="image/png" href="/wp-content/uploads/fbrfg/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="/wp-content/uploads/fbrfg/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="/wp-content/uploads/fbrfg/manifest.json">
<link rel="mask-icon" href="/wp-content/uploads/fbrfg/safari-pinned-tab.svg" color="#5bbad5">
<link rel="shortcut icon" href="/wp-content/uploads/fbrfg/favicon.ico">
<meta name="msapplication-config" content="/wp-content/uploads/fbrfg/browserconfig.xml">
<style>
        #bookOnline{
            display:none;
        }

        #destination_desktop_wrapper > div > ul > li:nth-child(26){
            display:none !important;
        }

        #destination_mobile_wrapper > div.mobilemn > ul > li:nth-child(26) {
            display:none !important;
        }

        .formselectbook{
            -webkit-appearance: none;
            -moz-appearance: none;
            padding: 11px 0 10px 10px;
            font-size: 13px;
            font-weight: 600;
            color: #fff;
            background-color: #54565b;
            border-radius: 0;
            border: 0;
            cursor: pointer;
            text-align: left;
            width: 155px;
            padding-right: 30px;
            height: 39px;

        }


        .formselectbook .contentresorts{
            display: none;
            background-color: #54565b;
            height: 300px;
            width: 290px;
            overflow-y: scroll;
            border: 1px solid #54565b;
            line-height: 160%;
            padding: 2px 15px;
            position: absolute;
            z-index: 9;
            margin-left: -10px;
            margin-top: 10px;
        }

        .formselectbook .contentresorts li{

            display: block !important;

        }

        .formselectbook .contentresorts li a{
            padding: 0 !important;
            display: block !important;
            text-decoration: none !important;
            color: #fff !important;
            font-weight: 400 !important;
        }


        .formselectbook .contentresorts .sub{
            margin-left: 15px !important;
            font-weight: 400 !important;
        }
        #destination_mobile_wrapper {
            display: none;
        }
</style>
<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyAT6cY6dg_0KTQtDJ2WCnxLXLxfqKnK6m0" defer='defer'></script>

<?php $page_id = get_the_ID(); ?>

<!-- Karma Group Adwords Tracking Code-->

<?php if($page_id == '193' || $page_id =='837') //Kandara and Jimbaran
{ ?>
<!-- Global site tag (gtag.js) - Google Ads: 849002042 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-849002042"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'AW-849002042');
</script>
<?php } ?>

<!-- End of Karma Group Adwords Tracking Code-->


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

<?php if($page_id == '214' || $page_id == '1285 ' || $page_id == '1331' || $page_id == '5825' || $page_id == '8109' || $page_id == '6172' || $page_id == '17500'){ ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-70462293-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

        gtag('config', 'UA-70462293-1');
        </script>
        <?php } ?>


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
.header_nav{position:relative}.header_nav li{padding-left:8px!important}.header_nav li.navItem .navContent{background-color:#020000;color:#fff;left:0;position:absolute;top:45px;width:100%;z-index:999}.header_nav .navContent>li{color:#fff;float:left;padding:10px 0!important;text-align:left;width:33.33333%}.header_nav .navContent ul li a{color:#fff;display:block;padding:6px 10px;font-size:14px;font-weight:100!important;transition:all .3s ease;-webkit-transition:all .3s ease;-moz-transition:all .3s ease;-ms-transition:all .3s ease;-o-transition:all .3s ease}.header_nav .navContent ul li a:hover{background-color:#555;padding-left:20px}.header_nav .navContent .group_title{margin-left:22px;color:#8d714c;font-size:120%}#destination_mobile_wrapper{top:10px;border:1px solid #000;position:absolute;background:#000;margin:0 auto;left:10%;width:80%;padding:20px 0 0;height:calc(100vh - 150px)}#destination_mobile_wrapper ul{height:calc(100vh - 220px);overflow-y:scroll;width:100%}#destination_mobile_wrapper:after{content:url(http://www.karmasanctumclub.com/accordion/down.png);position:absolute;bottom:10px;left:calc(50% - 10px);z-index:999}#destination_mobile_wrapper li{margin-top:4px;color: #fff;text-transform:none;font-size:15px!important;text-align:center;clear:both;display:table!important;width:100%;padding-top:0!important}#destination_mobile_wrapper li a{font-size:14px;font-weight:100!important;text-transform:none;padding:5px!important;color:#fff;font-weight:700}

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
<?php
$fbPixelCode = array(
    10732,
    20471, //limited-time-offer-kandara live
    19563, //pick-your-perks-kandara live
    19957,//new-years-package-kandara live
    12836,
    13436,
    12836
);
if(array_search(get_the_ID(), $fbPixelCode) !== false){ ?>
<script>
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script','https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '335374993891149');
    fbq('track', 'PageView');
</script>
<noscript>
<img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=335374993891149&ev=PageView&noscript=1" />
</noscript>
<?php
}
?>
</head>

<?php
    $timeshare_resort = get_field('timeshare_resort', get_the_ID());
?>
<body <?php body_class( ($timeshare_resort ? 'resort-time-share' : '') ); ?>>

    <div id="karma">
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

                <?php

                    $karmaResorts = karma_get_destination_pages_resort();
                    $karmaRetreats = karma_get_destination_pages_retreat();
                    $karmaRoyal = karma_get_destination_pages_royal();
                    $karmaEstates = karma_get_destination_pages_estate();
                    $karmasanctum = karma_get_destination_pages_sanctum();
                    // print_r($karmaResorts);

                ?>

            <div class="logo">
                <a href="<?php echo get_option( 'home' ); ?>/"><img src="<?php echo get_template_directory_uri();?>/imgs/karma-logo-new.png" alt="Karma Group Logo" title="Karma Group – Luxury Hotels and Resorts"></a>
            </div>

                    <div id="nav_booking">Book Now</div>

                                <div id="destination_mobile_outside" class="destination_mobile_close"></div>
                                <div id="destination_mobile_wrapper">
                                    <div id="destination_mobile_closebtn" class="destination_mobile_close"><img src="<?php echo get_template_directory_uri();?>/imgs/icons/close.png" alt="Karma Group Logo"></div>
                                <div class="mobilemn">
                                    <ul>
                                    <li class="init"><b>Karma Resorts</b></li>
                                            <?php foreach ($karmaResorts as $resort) {
                                                    $titleName = $resort->post_title.' - '. get_post_meta($resort->ID, 'resort_location', 1);
                                                    if(trim(get_post_meta($resort->ID, 'booking_url', 1)) == ''){ ?>
                                                        <li class="sub" data-value="<?php echo $resort->ID ?>" title="<?php echo "Booking ". $titleName; ?>"><a><?php echo $resort->post_title.' - '. get_post_meta($resort->ID, 'resort_location', 1) ?></a></li>
                                                    <?php } else { ?>
                                                            <li class="sub"><a href="<?php echo trim(get_post_meta($resort->ID, 'booking_url', 1)) ?>" title="<?php echo "Booking ". $titleName; ?>"><?php echo $resort->post_title.' - '. get_post_meta($resort->ID, 'resort_location', 1) ?></a></li>
                                                    <?php } ?>
                                            <?php } ?>
                                        <li><b>Karma Retreats</b></li>
                                        <?php foreach ($karmaRetreats as $resort) {
                                                $titleName = $resort->post_title.' - '. get_post_meta($resort->ID, 'resort_location', 1);
                                                if(trim(get_post_meta($resort->ID, 'booking_url', 1)) == ''){ ?>
                                                <li class="sub" data-value="<?php echo $resort->ID ?>" title="<?php echo "Booking ". $titleName; ?>"><a><?php echo $resort->post_title.' - '. get_post_meta($resort->ID, 'resort_location', 1) ?></a></li>
                                                <?php } else { ?>
                                                <li class="sub"><a href="<?php echo trim(get_post_meta($resort->ID, 'booking_url', 1)) ?>" title="<?php echo "Booking ". $titleName; ?>"><?php echo $resort->post_title.' - '. get_post_meta($resort->ID, 'resort_location', 1) ?></a></li>
                                                <?php } ?>
                                        <?php } ?>

                                        <li><b>Karma Royal</b></li>
                                            <?php foreach ($karmaRoyal as $resort) {
                                                    $titleName = $resort->post_title.' - '. get_post_meta($resort->ID, 'resort_location', 1);
                                                    if(trim(get_post_meta($resort->ID, 'booking_url', 1)) == ''){ ?>
                                                    <li class="sub" data-value="<?php echo $resort->ID ?>" title="<?php echo "Booking ". $titleName; ?>"><a><?php echo $resort->post_title.' - '. get_post_meta($resort->ID, 'resort_location', 1) ?></a></li>
                                                    <?php } else { ?>
                                                            <li class="sub"><a href="<?php echo trim(get_post_meta($resort->ID, 'booking_url', 1)) ?>" title="<?php echo "Booking ". $titleName; ?>"><?php echo $resort->post_title.' - '. get_post_meta($resort->ID, 'resort_location', 1) ?></a></li>
                                                    <?php } ?>
                                            <?php } ?>

                                        <li><b>Karma Estates</b></li>
                                             <?php foreach ($karmaEstates as $resort) {
                                                 $titleName = $resort->post_title.' - '. get_post_meta($resort->ID, 'resort_location', 1);
                                                    if(trim(get_post_meta($resort->ID, 'booking_url', 1)) == ''){ ?>
                                                        <li class="sub" data-value="<?php echo $resort->ID ?>" title="<?php echo "Booking ". $titleName; ?>"><a><?php echo $resort->post_title.' - '. get_post_meta($resort->ID, 'resort_location', 1) ?></a></li>
                                                    <?php } else { ?>
                                                            <li class="sub"><a href="<?php echo trim(get_post_meta($resort->ID, 'booking_url', 1)) ?>" title="<?php echo "Booking ". $titleName; ?>"><?php echo $resort->post_title.' - '. get_post_meta($resort->ID, 'resort_location', 1) ?></a></li>
                                                    <?php } ?>
                                            <?php } ?>

                                        <li><b>Karma Sanctum</b></li>
                                            <?php foreach ($karmasanctum as $resort) {
                                                $titleName = $resort->post_title.' - '. get_post_meta($resort->ID, 'resort_location', 1);
                                                    if(trim(get_post_meta($resort->ID, 'booking_url', 1)) == ''){ ?>
                                                        <li class="sub" data-value="<?php echo $resort->ID ?>" title="<?php echo "Booking ". $titleName; ?>"><a><?php echo $resort->post_title.' - '. get_post_meta($resort->ID, 'resort_location', 1) ?></a></li>
                                                    <?php } else { ?>
                                                            <li class="sub"><a href="<?php echo trim(get_post_meta($resort->ID, 'booking_url', 1)) ?>" title="<?php echo "Booking ". $titleName; ?>"><?php echo $resort->post_title.' - '. get_post_meta($resort->ID, 'resort_location', 1) ?></a></li>
                                                    <?php } ?>
                                            <?php } ?>

                                    </ul>
                                </div>


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
                       
                                                <li class="menu1"><a href="<?php echo get_option( 'home' ); ?>/about-karma/" title="About Karma"><?php echo $language[$lang]['menu_about']; ?></a>
                        <li class="menu1"><a href="<?php echo get_option( 'home' ); ?>/karma-moments/" title="Karma Moments">Karma Moments</a>
                    <li>
                                                <div id="book_online_select">



                            <div id="destination_desktop_wrapper">
                                <p class="menu2">&nbsp;</p>
                                <div class="formselectbook inpt">
                                    <div>Book Online</div>

                                    <ul class="contentresorts">
                                        <li class="init"><b>Karma Resorts</b></li>
                                            <?php foreach ($karmaResorts as $resort) {
                                                $titleName = $resort->post_title.' - '. get_post_meta($resort->ID, 'resort_location', 1);
                                                    if(trim(get_post_meta($resort->ID, 'booking_url', 1)) == ''){ ?>
                                                        <li class="sub" data-value="<?php echo $resort->ID ?>" title="<?php echo "Booking ". $titleName;?>"><?php echo $titleName; ?></li>
                                                    <?php } else { ?>
                                                            <li class="sub"><a href="<?php echo trim(get_post_meta($resort->ID, 'booking_url', 1)) ?>" title="<?php echo "Booking ". $titleName;?>"><?php echo $titleName; ?></a></li>
                                                    <?php } ?>
                                            <?php } ?>
                                        <li><b>Karma Retreats</b></li>
                                                <?php foreach ($karmaRetreats as $resort) {
                                                    $titleName = $resort->post_title.' - '. get_post_meta($resort->ID, 'resort_location', 1);
                                                    if(trim(get_post_meta($resort->ID, 'booking_url', 1)) == ''){ ?>
                                                        <li class="sub" data-value="<?php echo $resort->ID ?>" title="<?php echo "Booking ". $titleName;?>"><a><?php echo $resort->post_title.' - '. get_post_meta($resort->ID, 'resort_location', 1) ?></a></li>
                                                    <?php } else { ?>
                                                        <li class="sub"><a href="<?php echo trim(get_post_meta($resort->ID, 'booking_url', 1)) ?>" title="<?php echo "Booking ". $titleName;?>"><?php echo $resort->post_title.' - '. get_post_meta($resort->ID, 'resort_location', 1) ?></a></li>
                                                <?php } ?>
                                        <?php } ?>

                                        <li><b>Karma Royal</b></li>
                                            <?php foreach ($karmaRoyal as $resort) {
                                                $titleName = $resort->post_title.' - '. get_post_meta($resort->ID, 'resort_location', 1);
                                                    if(trim(get_post_meta($resort->ID, 'booking_url', 1)) == ''){ ?>
                                                        <li class="sub" data-value="<?php echo $resort->ID ?>" title="<?php echo "Booking ". $titleName;?>"><?php echo $resort->post_title.' - '. get_post_meta($resort->ID, 'resort_location', 1) ?></li>
                                                    <?php } else { ?>
                                                            <li class="sub"><a href="<?php echo trim(get_post_meta($resort->ID, 'booking_url', 1)) ?>" title="<?php echo "Booking ". $titleName;?>"><?php echo $resort->post_title.' - '. get_post_meta($resort->ID, 'resort_location', 1) ?></a></li>
                                                    <?php } ?>
                                            <?php } ?>

                                        <li><b>Karma Estates</b></li>
                                             <?php foreach ($karmaEstates as $resort) {
                                                 $titleName = $resort->post_title.' - '. get_post_meta($resort->ID, 'resort_location', 1);
                                                    if(trim(get_post_meta($resort->ID, 'booking_url', 1)) == ''){ ?>
                                                        <li class="sub" data-value="<?php echo $resort->ID ?>" title="<?php echo "Booking ". $titleName;?>"><?php echo $resort->post_title.' - '. get_post_meta($resort->ID, 'resort_location', 1) ?></li>
                                                    <?php } else { ?>
                                                            <li class="sub"><a href="<?php echo trim(get_post_meta($resort->ID, 'booking_url', 1)) ?>" title="<?php echo "Booking ". $titleName;?>"><?php echo $resort->post_title.' - '. get_post_meta($resort->ID, 'resort_location', 1) ?></a></li>
                                                    <?php } ?>
                                            <?php } ?>

                                        <li><b>Karma Sanctum</b></li>
                                            <?php foreach ($karmasanctum as $resort) {
                                                $titleName = $resort->post_title.' - '. get_post_meta($resort->ID, 'resort_location', 1);
                                                    if(trim(get_post_meta($resort->ID, 'booking_url', 1)) == ''){ ?>
                                                        <li class="sub" data-value="<?php echo $resort->ID ?>" title="<?php echo "Booking ". $titleName;?>"><?php echo $resort->post_title.' - '. get_post_meta($resort->ID, 'resort_location', 1) ?></li>
                                                    <?php } else { ?>
                                                            <li class="sub"><a href="<?php echo trim(get_post_meta($resort->ID, 'booking_url', 1)) ?>" title="<?php echo "Booking ". $titleName;?>"><?php echo $resort->post_title.' - '. get_post_meta($resort->ID, 'resort_location', 1) ?></a></li>
                                                    <?php } ?>
                                            <?php } ?>
                                    </ul>
                                </div>
                                <p class="menu2">&nbsp;</p>
                            </div>
                                                </div>
                                        </li>
                    <li class="member_login_btn"><a title="<?php echo $language[$lang]['menu_oddysey_member_login']; ?>" href="https://karmagroup.com/karma-odyssey/"><?php echo $language[$lang]['menu_oddysey_member_login']; ?><span class="lock-icon"></span></a>
                </div>

                <!--DESKTOP DROPDOWN-->
                <ul class="header_nav desktop">

                    <li class="navItem"><a href="#" target="_self" class="" title="<?php echo $language[$lang]['menu_destinations']; ?>"><?php echo $language[$lang]['menu_destinations']; ?></a>

                                <ul class="navContent" style="display: none;">

                                   <li><span class="group_title">Karma Resorts</span>
                                        <ul>
                                              <li><a title="Karma Kandara - Bali" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-resorts/karma-kandara/">Karma Kandara - Bali</a></li>
                                              <li><a title="Karma Bavaria - Germany" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-resorts/karma-bavaria/">Karma Bavaria - Germany</a></li>
                                              <li><a title="Karma Jimbaran - Bali" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-resorts/karma-jimbaran/">Karma Jimbaran - Bali</a></li>
                                              <li><a title="Karma Rottnest - Australia" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-resorts/karma-rottnest/">Karma Rottnest - Australia</a></li>
                                              <li><a title="Karma Borgo di Colleoli - Italy" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-resorts/karma-borgo-di-colleoli/">Karma Borgo di Colleoli - Italy</a></li>
                                        </ul>

                                        <span class="group_title">Karma Retreats</span>
                                        <ul>
                                            <li><a title="Karma Cây Tre - Vietnam" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-retreats/cay-tre/">Karma Cây Tre - Vietnam</a></li>
                                            <li><a title="Karma Chakra - Kerala" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-retreats/karma-chakra/">Karma Chakra - Kerala</a></li>
                                            <li><a title="Karma Haveli - Jaipur" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-retreats/karma-haveli/">Karma Haveli - Jaipur</a></li>
                                            <li><a title="Karma Mayura - Bali" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-retreats/karma-mayura/">Karma Mayura - Bali</a></li>
                                            <li><a title="Karma Reef - Indonesia" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-retreats/karma-reef/">Karma Reef - Indonesia</a></li>
                                            <li><a title="Karma St. Martin's - Isles of Scilly" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-retreats/karma-st-martins/">Karma St. Martin's - Isles of Scilly</a></li>
                                            <li><a title="Karma Minoan - Crete<" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-retreats/karma-minoan/">Karma Minoan - Crete</a></li>
                                            <li><a title="Karma Exotica - Dharamshala" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-retreats/karma-exotica/">Karma Exotica - Dharamshala</a></li>
                                            <li><a title="Karma Manoir des Deux Amants - France" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-retreats/karma-manoir-des-deux-amants/">Karma Manoir des Deux Amants - France</a></li>
                                            <li><a title="Karma Résidence Normande - France" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-retreats/karma-residence-normande/">Karma Résidence Normande - France</a></li>
 <li><a title="Karma Chang Chiangmai – Thailand" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-retreats/karma-chang-chiangmai/">Karma Chang Chiangmai – Thailand</a></li>
                                        </ul>
                                   </li>
                                   <li><span class="group_title">Karma Royal</span>
                                        <ul>
                                              <li><a title="Karma Royal MonteRio - Goa" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-royal/royal-monterio/">Karma Royal MonteRio - Goa</a></li>
                                              <li><a title="Karma Royal Bella Vista - Thailand" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-royal/royal-chiang-mai/">Karma Royal Bella Vista - Thailand</a></li>
                                              <li><a title="Karma Royal Benaulim - Goa" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-royal/karma-royal-benaulim/">Karma Royal Benaulim - Goa</a></li>
                                              <li><a title="Karma Royal Boat Lagoon - Thailand" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-royal/royal-phuket/">Karma Royal Boat Lagoon - Thailand</a></li>
                                              <li><a title="Karma Royal Candidasa - Bali" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-royal/royal-candidasa/">Karma Royal Candidasa - Bali</a></li>
                                              <li><a title="Karma Royal Haathi Mahal - Goa" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-royal/royal-haathi-mahal/">Karma Royal Haathi Mahal - Goa</a></li>
                                              <li><a title="Karma Royal Residences at Haathi Mahal - Goa" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-royal/karma-royal-residences-haathi-mahal/">Karma Royal Residences at Haathi Mahal - Goa</a></li>
                                              <li><a title="Karma Royal Jimbaran - Bali" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-royal/royal-jimbaran/">Karma Royal Jimbaran - Bali</a></li>
                                              <li><a title="Karma Royal Palms - Goa" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-royal/royal-palms/">Karma Royal Palms - Goa</a></li>
                                              <li><a title="Karma Royal Sanur - Bali" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-royal/royal-sanur/">Karma Royal Sanur - Bali</a></li>
                                        </ul>
                                   </li>
                                   <li><span class="group_title">Karma Estate</span>
                                        <ul>
                                              <li><a title="Pelikanos - Mykonos" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-estates/pelikanos/">Pelikanos - Mykonos</a></li>
                                              <li><a title="Le Preverger - France" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-estates/le-preverger/">Le Preverger - France</a></li>
                                              <li><a title="Chateau de Samary - France" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-estates/chateau-de-samary/">Chateau de Samary - France</a></li>
                                        </ul>
                                   </li>
                                   <li><span class="group_title">Karma Sanctum</span>
                                        <ul>
                                              <li><a title="Karma Sanctum Soho - London" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-sanctum/karma-sanctum-soho/">Karma Sanctum Soho - London</a></li>
                                              <li><a title="Karma Sanctum On the Green - England" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-sanctum/karma-sanctum-on-the-green/">Karma Sanctum On the Green - England</a></li>
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
                                    <li><a title="Karma Kandara - Bali" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-resorts/karma-kandara/">Karma Kandara - Bali</a></li>
                                    <li><a title="Karma Bavaria - Germany" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-resorts/karma-bavaria/">Karma Bavaria - Germany</a></li>
                                    <li><a title="Karma Jimbaran - Bali" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-resorts/karma-jimbaran/">Karma Jimbaran - Bali</a></li>
                                    <li><a title="Karma Rottnest - Australia" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-resorts/karma-rottnest/">Karma Rottnest - Australia</a></li>
                                    <li><a title="Karma Borgo di Colleoli - Italy" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-resorts/karma-borgo-di-colleoli/">Karma Borgo di Colleoli - Italy</a></li>

                                    <li><span class="group_title">Karma Retreats</span></li>
                                    <li><a title="Karma Cây Tre - Vietnam" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-retreats/cay-tre/">Karma Cây Tre - Vietnam</a></li>
                                    <li><a title="Karma Chakra - India" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-retreats/karma-chakra/">Karma Chakra - India</a></li>
                                    <li><a title="Karma Haveli - India" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-retreats/karma-haveli/">Karma Haveli - India</a></li>
                                    <li><a title="Karma Mayura - Bali" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-retreats/karma-mayura/">Karma Mayura - Bali</a></li>
                                    <li><a title="Karma Reef - Indonesia" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-retreats/karma-reef/">Karma Reef - Indonesia</a></li>
                                    <li><a title="Karma St. Martin's - Isles of Scilly" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-retreats/karma-st-martins/">Karma St. Martin's - Isles of Scilly</a></li>
                                    <li><a title="Karma Minoan - Crete" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-retreats/karma-minoan/">Karma Minoan - Crete</a></li>
                                    <li><a title="Karma Exotica - Dharamshala" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-retreats/karma-exotica/">Karma Exotica - Dharamshala</a></li>
                                    <li><a title=">Karma Manoir des Deux Amants - France" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-retreats/karma-manoir-des-deux-amants/">Karma Manoir des Deux Amants - France</a></li>
                                   <li><a title="Karma Résidence Normande - France" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-retreats/karma-residence-normande/">Karma Résidence Normande - France</a></li>
 <li><a title="Karma Chang Chiangmai – Thailand" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-retreats/karma-chang-chiangmai/">Karma Chang Chiangmai – Thailand</a></li>

                                    <li><span class="group_title">Karma Royal</span></li>
                                    <li><a title="Karma Royal MonteRio - Goa" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-royal/royal-monterio/">Karma Royal MonteRio - Goa</a></li>
                                    <li><a title="Karma Royal Bella Vista - Thailand" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-royal/royal-chiang-mai/">Karma Royal Bella Vista - Thailand</a></li>

                                    <li><a title="Karma Royal Benaulim - India" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-royal/karma-royal-benaulim/">Karma Royal Benaulim - India</a></li>

                                    <li><a title="Karma Royal Boat Lagoon - Thailand" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-royal/royal-phuket/">Karma Royal Boat Lagoon - Thailand</a></li>
                                    <li><a title="Karma Royal Candidasa - Bali" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-royal/royal-candidasa/">Karma Royal Candidasa - Bali</a></li>
                                    <li><a title="Karma Royal Haathi Mahal - Goa" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-royal/royal-haathi-mahal/">Karma Royal Haathi Mahal - Goa</a></li>
                                    <li><a title="Karma Royal Residences at Haathi Mahal - Goa" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-royal/karma-royal-residences-haathi-mahal/">Karma Royal Residences at Haathi Mahal - Goa</a></li>
                                    <li><a title="Karma Royal Jimbaran - Bali" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-royal/royal-jimbaran/">Karma Royal Jimbaran - Bali</a></li>
                                    <li><a title="Karma Royal Palms - Goa" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-royal/royal-palms/">Karma Royal Palms - Goa</a></li>
                                    <li><a title="Karma Royal Sanur - Bali" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-royal/royal-sanur/">Karma Royal Sanur - Bali</a></li>

                                    <li><span class="group_title">Karma Estate</span></li>

                                    <li><a title="Pelikanos - Mykonos" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-estates/pelikanos/">Pelikanos - Mykonos</a></li>
                                    <li><a title="Le Preverger - France" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-estates/le-preverger/">Le Preverger - France</a></li>
                                    <li><a title="Chateau de Samary - France" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-estates/chateau-de-samary/">Chateau de Samary - France</a></li>

                                    <li><span class="group_title">Karma Sanctum</span></li>
                                    <li><a title="Karma Sanctum Soho - London" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-sanctum/karma-sanctum-soho/">Karma Sanctum Soho - London</a></li>
                                    <li><a title="Karma Sanctum On the Green - England" href="<?php echo get_option( 'home' ); ?>/find-destination/karma-sanctum/karma-sanctum-on-the-green/">Karma Sanctum On the Green - England</a></li>
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
        #textColor{
            font-size: 36px;
            color: #8d7249 !important;
        }
        div#destination_mobile_outside{display: none;}
        div#destination_mobilewrapper{display: none;top: 85px;color: #ffffff;}
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


