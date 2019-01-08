<?php
/**
 * Template Name: Booking Iframe Sanctum New
 */
?>

<!DOCTYPE html>
<html>
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WZDHLPS');</script>
<!-- End Google Tag Manager -->
	<title>Booking Karma Sanctum Soho.</title>

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/booking-iframe/css/slick.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/booking-iframe/css/slick-theme.css"/>
	<!-- <link rel="stylesheet" type="text/css" href="css/jquery-ui.css"> -->

	<style type="text/css">
		BODY{
			background-color: #fff;
			margin: 0;
			font-family: 'Open Sans', sans-serif;
		}
		a{
			cursor: pointer;
		}
		#wrapper{
			width: 1136px;
			display: table;
			margin: auto;
			font-family: arial;
			/*box-shadow: 0 0 5px #ccc;*/
		}
		#header{
			width: 100%;
			background-color: #1c1c1c;
		}

		#slider_wrapper{
			max-height: 350px;
			overflow-y: hidden;
			background-image: url(images/s1.jpg);
			background-size: cover;
			width: 1136px;
		}
		.slider-nav {
			width: 300px;
			bottom: 20px;
			position: absolute;
			left: calc(50% - 150px);
		}
		.slider-nav .slick-slide{
			height: 32px;
			width: 32px!important;
			display: table;
			margin: 5px;
			border: 1px solid #fff;
			overflow: hidden;	
		}
		.slider-nav img{
			height: 32px;
			width: 100%;
		}

		.top{
			height: 70px;
			color: #fff;
			
		}
		.inner{
			width: 100%;
			margin: auto;
		}	
		.row{
			width: 100%;
			clear: all;
			position: relative;
		}
		.top .left{
			float: left;
			margin-left: 40px;
			height: 54px;
		}
		.top .left img{
			margin-top: 6px;
		}
		.top .right{
			float: right;
			height: 60px;
			padding-top: 10px;
			background-color: #88714f;
		}
		.top .right img{
			height: 54px;
		}	

		#slider{
			height: 300px;
			background-image: url(images/s1.jpg);
			background-size: cover;
		}
		#titlepage{
			position: absolute;
			bottom: 0;
			background-color: rgba(255,255,255,.9);
			color: #333;
			height: 68px;
			width: 100%;
		}
		#titlepage .star {
		    background: url('images/star.png');
		    background-size: 20px;
		    width: 100px;
		    display: table;
		    height: 17px;
		    margin-left: 29px;
		    margin-top: -4px;
		}
		#titlepage .star.s4{
			width: 80px;
		}
		#titlepage h1{
			font-size: 28px;
			margin: 5px 10px;
			margin-left: 28px;
			text-shadow: 1px 1px 1px #fff;
		}
		#titlepage a{
			float: left;
		}
		#titlepage span:nth-child(1){
			float: left;
		}
		#titlepage span:nth-child(2){
			float: right;
			height: 60px;
			margin-top: 16px;
			width: 470px;
		}
		#titlepage span:nth-child(2) a{
			margin: 0 10px;
		}
		#titlepage .lpg{
			border: 1px solid #8a704d;
			border-radius: 5px;
			background-color: #8a704d;
			display: table;
			padding: 5px 18px 0px;
		}
		#tabs ul,
		#tabs li{
			padding: 0;
			margin: 0;
		}
		#tabs_title{
			display: table;
			width: 100%;
		}
		#tabs #tabs_title li{
			float: left;
			width: calc(50% - 2px);
			color: #3e3e3e;
			margin: 1px;
			list-style: none;
			height: 85px;
			cursor: pointer;
			text-align: center;
			border-top: 8px solid #e1e6e0;	
			background-color: #f6f6f6;	
		}
		#tabs #tabs_title li:nth-child(2){
			float: right;
		}
		#tabs #tabs_title li.active{
			border-top: 8px solid #867450;
			background-color: #eaeaea;
		}
		#tabs #tabs_title .left{
			float: left;
		}
		#tabs #tabs_title .left:nth-child(1){
			margin-right: 15px;
		}
		#tabs #tabs_title .left:nth-child(1) span{
			padding-right: 20px;
			font-weight: bold;
			text-shadow: 1px 1px 1px #fff;
			padding-top: 5px;
			border-right: 1px solid #ccc;
			color: red;
			margin-left: 50px;
			margin-top: 10px;
			display: table;
			font-size: 48px;
			height: 70px;
		}
		#tabs #tabs_title .left:nth-child(2){
			padding-top: 20px;
		}
		#tabs #tabs_title > li:nth-child(1) .left:nth-child(2){
			width: 320px;
			text-align: left;
		}
		#tabs #tabs_title > li:nth-child(2) .left:nth-child(2){
			width: 380px;
		}

		#tabs #tabs_content{
			background-color: #eaeaea;
		}
		#tabs #tabs_content li{
			display: table;
			width: 100%;
		}
		#tabs #tabs_content li{
			display: none;
		}
		#tabs #tabs_content li.active{
			display: block;
		}

		#filter{
			width: 100%;
			height: 85px;
			color: #fff;
			background-color: #88714f;
		}
		#filter form div{
			float: left;
		}
		.booking_filter{
			padding-top: 20px;
			display: table;
		}
		.booking_filter > div{
			display: table;
			margin-right: 9px;			
		}
		.booking_filter > div label{
			font-size: 11px;
			font-weight: bold;
			width: 100%;
			display: table;
			margin-bottom: 3px;
		}
		.booking_filter select,
		.booking_filter input{
			border: 1px solid #6b553e;
			border-radius: 5px;
			padding: 7px 9px;
			width: 140px;
			color: #444;
			font-size: 14px;
		}
		.booking_filter select{
			width: 90px;	
		}
		.booking_filter input[type="submit"]{
			margin-top: 16px;
			cursor: pointer;
		}
		.calendar_wrapper{
			position: relative;
		}
		.calendar_wrapper::after {
		    content: '';
		    width: 20px;
		    height: 20px;
		    display: table;
		    position: absolute;
		    right: 5px;
		    background-image: url('images/calendar.jpg');
		    background-repeat: no-repeat;
		    top: 25px;
		}
		.calendar_wrapper input{
			cursor: pointer;
		}
		iframe {
			height: 600px;
			border: none;
		}

		#footer{
			height: 100px;
			background-color: #000;
		}

#join{display: none !important;}

	</style>	
</head>	
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WZDHLPS"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php
$page_ID = 5939;
$slider = get_post_meta($page_ID, 'area_0_blocks_0_slides', 1);


if(isset($_GET['arrival'])){
$arrival = $_GET['arrival'];
}else{
$arrival = date('d/m/Y');
}

if(isset($_GET['departure'])){
$departure = $_GET['departure'];
}else{
$departure = date('d/m/Y', strtotime("+1 day"));
}
?>

<form id="roomlynx" target="roomlynx" method="post" action="https://uk2.roomlynx.net/rezrooms2/loadOBMApplication.action?siteId=SANCSOHO&chainAction=newAvailabilitySearch&request_locale=en"><input name="arrival" value="<?php echo $arrival; ?>" type="hidden"><input name="departure" value="<?php echo $departure; ?>" type="hidden"><input name="numberOfPersons" value="<?php echo $_GET['numberOfPersons'] ?>" type="hidden"></form>

<div id="wrapper">

		<section id="header">
			<div class="row innerBAK top">
				<div id="logo" class="left"><a href="<?php echo get_option( 'home' ); ?>/find-destination/karma-sanctum/karma-sanctum-soho/"><img src="<?php echo get_option( 'home' ); ?>/images/karma-sanctum-logo.png" height="60" /></a></div>
		
			</div>

			<div class="row">
				
				<div id="slider_wrapper">

					<div class="slider slider-for">
						<?php
						for($i=0; $i<count($slider); $i++){
							$image_id = get_post_meta($page_ID, 'area_0_blocks_0_slides_'. $i .'_image', 1);
							echo'<div><img src="'. wp_get_attachment_image_url($image_id, 'full') .'"></div>';
						}
						?>
					</div>
					
					<div class="slider slider-nav">
						<?php
						for($i=0; $i<count($slider); $i++){
							$image_id = get_post_meta($page_ID, 'area_0_blocks_0_slides_'. $i .'_image', 1);
							echo'<div><img src="'. wp_get_attachment_image_url($image_id, 'full') .'"></div>';
						}
						?>	
					</div>
			</div>
		</section>

		<section id="main">

			<div class="inner" style="height: 600px; display: table; margin: 10px auto;">
				<iframe src="" width="100%" id="iframe1" name="roomlynx"></iframe>
				<p>&nbsp;</p>
			</div>

		</section>

		<section id="footer">
		</section>
</div>

<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/booking-iframe/js/jquery.js'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/booking-iframe/js/slick.min.js'></script>
<!-- <script type='text/javascript' src="js/jquery-ui.js"></script> -->

<script>
    $(document).ready(function() {
			
	    $('form#roomlynx').submit();

			$('.slider-for').slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: false,
				fade: true,
				infinite: true,
				asNavFor: '.slider-nav'
			});
			$('.slider-nav').slick({
				slidesToShow: 3,
				slidesToScroll: 1,
				asNavFor: '.slider-for',
				dots: false,
				centerMode: true,
				infinite: true,
				focusOnSelect: true
			});		
    });
</script>   
</body>
</html>
