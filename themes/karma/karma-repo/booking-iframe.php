<?php
/**
 * Template Name: Booking Iframe
 */
?>

<!DOCTYPE html>
<html>
<head>
	<title>Booking</title>

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/booking-iframe/css/slick.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/booking-iframe/css/slick-theme.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/booking-iframe/css/jquery-ui.css">
	<link rel="shortcut icon" href="https://karmagroup.com/wp-content/uploads/fbrfg/favicon.ico">

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
			box-shadow: 0 0 5px #ccc;
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
		.bgcover{
			background-size: cover;
			display: table;
			width: 100%;
			height: 355px;
		}		
		.slider-nav {
			width: 300px;
			bottom: 80px;
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
			width: 1050px!important;
			margin: auto;
		}
		.inner .banner{
			margin-top: 50px;
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
		#titlepage{
			position: absolute;
			bottom: 0;
			background-color: rgba(255,255,255,.9);
			color: #333;
			height: 68px;
			width: 100%;
		}
		#titlepage .star {
		    background: url('<?php echo get_template_directory_uri(); ?>/booking-iframe/images/star.png');
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
			width: 170px;
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
		#tabs_title .fullwidth{
			width: calc(100% - 2px)!important;
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
			color: #CDAF35;
			margin-left: 50px;
			margin-top: 10px;
			display: table;
			font-size: 48px;
			height: 70px;		
		}
		#tabs #tabs_title li:nth-child(2) .left:nth-child(1) span{
			border-right: none!important;
			text-indent: -9999px!important;	
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
			height: 880px;
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
		.booking_filter input.invalid{
			border: 1px solid #f00;
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
		.ui-widget-header .ui-icon{
			background-image: url(https://code.jquery.com/ui/1.12.1/themes/base/images/ui-icons_444444_256x240.png);
		}

		#footer{

			height: 100px;
			background-color: #000;
		}
	</style>	
</head>	
<body>

<?php
if(isset($_GET['check_in_date'])){
	$check_in_date = $_GET['check_in_date'];
}else{
	$check_in_date = date('d-m-Y');
}
if(isset($_GET['check_out_date'])){
	$check_out_date = $_GET['check_out_date'];
}else{
	$check_out_date = date('d-m-Y', strtotime("+1 day"));
}

///////////CONVERT DATE TO /////////////////
$check_in_date_ex = explode('-', $check_in_date);
$check_out_date_ex = explode('-', $check_out_date);

$check_in_date_to_time = strtotime($check_in_date_ex[2] .'-'. $check_in_date_ex[1] .'-'. $check_in_date_ex[0]);
$check_in_date_lbl = date('d M Y', $check_in_date_to_time);

$check_out_date_to_time = strtotime($check_out_date_ex[2] .'-'. $check_out_date_ex[1] .'-'. $check_out_date_ex[0]);
$check_out_date_lbl = date('d M Y', $check_out_date_to_time);
////////////////////////////


$q_url = $_SERVER['REQUEST_URI'];
$q_url_ex = explode('?', $q_url);
$q_url_ex2 = explode('&', $q_url_ex[1]);

$key = $q_url_ex2[0]; //echo '<h1>key: '. $key .'</h1>';

///////////////////////////////////////////////////////////////////
//https://www.thebookingbutton.com.au/karmagroup/properties/karmakandaradirect?check_in_date=2017-04-20&check_out_date=2017-04-24&number_adults=2&promotion_code=karmaclubrate

$data['karmabavaria'] = array(
					'url_1' => 'https://www.thebookingbutton.co.uk/properties/karmabavaria?promotion_code=karmaclubrate',
					'url_2' => 'https://www.thebookingbutton.co.uk/properties/karmabavaria',					
					'title' => 'Karma Bavaria - Germany',
					'star' => 4,
					'iframe_margintop' => -245,
					'iframe_marginbottom' => -725,
					'iframe_height' => 1750,
					'pid' => 731
				);
$data['karmajimbaran'] = array(
					'url_1' => 'https://www.thebookingbutton.com.au/karmagroup/properties/kjimbarandirect?promotion_code=karmaclubrate',
					'url_2' => 'https://www.thebookingbutton.com.au/karmagroup/properties/kjimbarandirect',
					'title' => 'Karma Jimbaran - Bali',
					'star' => 4,
					'iframe_margintop' => -245,
					'iframe_marginbottom' => -725,
					'iframe_height' => 1750,
					'pid' => 837
				);
$data['karmakandara'] = array(
					'url' => 'https://www.thebookingbutton.com.au/karmagroup/properties/karmakandaradirect',
					'url_1' => 'https://www.thebookingbutton.com.au/karmagroup/properties/karmakandaradirect?check_in_date='. $check_in_date .'&check_out_date='. $check_out_date,
					'url_2' => 'https://www.thebookingbutton.com.au/karmagroup/properties/karmakandaradirect?check_in_date='. $check_in_date .'&check_out_date='. $check_out_date,
					'title' => 'Karma Kandara - Bali',
					'star' => 5,
					'iframe_margintop' => -240,
					'iframe_height' => 1100,
					'pid' => 193
				);
$data['karmarottnest'] = array(
					'url_1' => 'https://www.thebookingbutton.com.au/karmagroup/properties/karmarottnestdirect?promotion_code=karmaclubrate',
					'url_2' => 'https://www.thebookingbutton.com.au/karmagroup/properties/karmarottnestdirect',
					'title' => 'Karma Rottnest - Australia',
					'star' => 4,
					'iframe_margintop' => -245,
					'iframe_marginbottom' => -725,
					'iframe_height' => 1750,
					'pid' => 802
				);

///////////////////////////////////////////////////////////////////
$data['karmareef'] = array(
					'url_1' => 'https://apac.littlehotelier.com/properties/karma-reef',
					'url_2' => 'https://apac.littlehotelier.com/properties/karma-reef',
					'title' => 'Karma Reef - Indonesia',
					'star' => 4,
					'iframe_margintop' => -310,
					'iframe_marginbottom' => 0,
					'iframe_height' => 1010,
					'pid' => 866
				);
$data['karmastmartin'] = array(
					'url_1' => 'https://www.thebookingbutton.co.uk/properties/karmastmartindirect?promotion_code=karmaclubrate',
					'url_2' => 'https://www.thebookingbutton.co.uk/properties/karmastmartindirect',
					'title' => 'Karma St. Martin\'s - Isles of Scilly',
					'star' => 4,
					'iframe_margintop' => -245,
					'iframe_marginbottom' => -725,
					'iframe_height' => 1750,
					'pid' => 914
				);

///////////////////////////////////////////////////////////////////
$data['1087'] = array(
					'url_1' => 'https://secure.staah.com/common-cgi/properties/b2c/Booknow.pl?action=showpage&PropertyId=968&Ln=&cur=&source=&checkIn=&checkOut=&unk=2&msg=',
					'url_2' => 'https://secure.staah.com/common-cgi/properties/b2c/Booknow.pl?action=showpage&PropertyId=968&Ln=&cur=&source=&checkIn=&checkOut=&unk=2&msg=',
					'title' => 'Karma Royal Haathi Mahal - Goa',
					'star' => 4,
					'iframe_margintop' => 0,
					'iframe_marginbottom' => 0,
					'iframe_height' => 700,
					'pid' => 1087
				);

$slider = get_post_meta($data[$key]['pid'], 'area_0_blocks_0_slides', 1);
?>

<style type="text/css">
	iframe{
		margin-top: <?php echo $data[$key]['iframe_margintop'] ?>px;
		height: <?php echo $data[$key]['iframe_height'] ?>px;
		border: none;
	}
</style>

<div id="wrapper">
		<section id="header">
			<div class="row innerBAK top">
				<div id="logo" class="left"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/booking-iframe/images/logo.png" height="60" /></a></div>
				<div id="join" class="right"><!-- <a href="https://karmaclub.com/join?promocode=DIRECT"><img src="<?php echo get_template_directory_uri(); ?>/booking-iframe/images/joinnow.jpg" /></a> --></div>
			</div>

			<div class="row">
				
				<div id="slider_wrapper">

					<div class="slider slider-for">
						<?php
						for($i=0; $i<count($slider); $i++){
							$image_id = get_post_meta($data[$key]['pid'], 'area_0_blocks_0_slides_'. $i .'_image', 1);
							echo'<div class="bgcover" style="background-image:url('. wp_get_attachment_image_url($image_id, 'full') .');"></div>';
						}
						?>	
					</div>
					
					<div class="slider slider-nav">

						<?php
						for($i=0; $i<count($slider); $i++){
							$image_id = get_post_meta($data[$key]['pid'], 'area_0_blocks_0_slides_'. $i .'_image', 1);
							echo'<div><img src="'. wp_get_attachment_image_url($image_id, 'full') .'"></div>';
						}
						?>	
					</div>
				</div>

				<div id="titlepage">
					<span><h1><?php echo $data[$key]['title'] ?></h1><div class="star s<?php echo $data[$key]['star'] ?>"></div></span>
					<span>
						<!-- <a href="https://www.tripadvisor.com"><img src="<?php echo get_template_directory_uri(); ?>/booking-iframe/images/tripad.png" height="30" style="margin-top: 8px;"></a>
						<a><img src="<?php echo get_template_directory_uri(); ?>/booking-iframe/images/map-marker.png" height="40"></a> -->
						<a class="lpg" style="margin-top: 6px;"><img src="<?php echo get_template_directory_uri(); ?>/booking-iframe/images/lowest-price-guarantee-text.png" height="20"></a>
					</span>
				</div>
			</div>
		</section>

		<section id="main">

				<div id="tabs">

					<ul id="tabs_title">	
						<li data-rel="1" class="active fullwidth">
							<div class="left"><span>25%</span></div>
							<div class="left"><span>
								Karma Club offer + 25% off Food & Beverage and SPA
							</span></div>
						</li>				
					</ul>

					<div id="filter">

						<div class="inner">

							<form class="booking_filter" target="iframe1">
								
								<input type="hidden" name="promotion_code" value="karmaclubrate">
								<div class="calendar_wrapper">
									<label>Check in</label>
									<input type="text" name="check_in_date" value="<?php echo $check_in_date_lbl; ?>" class="datepicker">
								</div>

								<div class="calendar_wrapper">
									<label>Check out</label>
									<input type="text" name="check_out_date" value="<?php echo $check_out_date_lbl; ?>" class="datepicker">
								</div>

								<div>
									<label>Adult</label>
									<select name="number_adults">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>												
									</select>
								</div>

								<div>
									<label>Children (2-12)</label>
									<select name="number_children">
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
									</select>											
								</div>

								<div>
									<label>Infants (<2)</label>
									<select name="number_infants">
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
									</select>											
								</div>																											

								<div>
									<input type="submit" name="submit" value="Submit">
								</div>	
							</form>
						</div>
					</div>

					<ul id="tabs_content">	
						<li data-rel="1" class="active">							
							<div class="inner" style="overflow-y: hidden;">
								<iframe src="<?php echo $data[$key]['url_1'] ?>" width="100%" height="900" id="iframe1"></iframe>
							</div>
						</li>
					</ul>

				</div>		
		</section>

		<section id="footer">
		</section>
</div>

<style type="text/css">
	.bvg_popup_container {
	    display: none;
	    position: fixed;
	    width: 100%;
	    height: 100%;
	    z-index: 999;
	    top: 0;
	    left: 0;
	    color: #fff;
	    background-color: rgba(51, 51, 51, 0.85);
	}
	.bvg_popup_container .content1 {
	    text-align: center;
	    font-size: 30px;
	    font-weight: 400 !important;
	}
	.bvg_popup_container .content2 {
	    text-align: center;
	    font-size: 18px;
	    color: #8d7249 !important;
	    font-weight: 500 !important;
	}
	.bvg_popup_container .content3 {
	    text-align: center;
	    font-size: 14px;
	    font-weight: 400 !important;
	    padding: 0 15px;
	}
	.bvg_popup {
	    width: 90%;
	    max-width: 600px;
	    position: relative;
	    top: 50px;
	    margin: auto;
	    background: #1b1b1b;
	    padding: 25px;
	    display: table;
	    text-align: center;
	}
	.bvg_popup img{
	    display: table;
	    margin: 25px auto 25px;
	}
	.bvg_popup_container .bvg_popup .close_btn {
	    height: 25px;
	    width: 25px;
	    background-size: contain;
	    background-image: url('https://karmagroup.com/themes/karma_group_theme/imgs/icons/close-icon-rounded.png');
	    float: right;
	    cursor: pointer;
	    display: inline-block;
	    vertical-align: middle;
	}
	.bvg_popup .block2 {
	    width: 50%;
	    float: left;
	}  	
</style>
<div class="bvg_popup_container">
    <div class="bvg_popup">
        <div class="cf">
            <div class="close_btn"></div>
            <p class="content1">Best Value Guarantees</p>
            <div class="block2">
                <p class="content2">NO HIDDEN FEES</p>
                <p class="content3"><img src="https://karmagroup.com/wp-content/uploads/images-bvg/hidden.jpg" alt="hidden"  width="58" height="43">Many online travel sites charge extra fees for online bookings. We guarantee 5% lower than others.</p>
            </div>
            <div class="block2">
                <p class="content2">EXCLUSIVE OFFERS</p>
                <p class="content3"><img src="https://karmagroup.com/wp-content/uploads/images-bvg/exclusive-offer.jpg" alt="exclusive"   width="58" height="43">Only our sites offer elite level hotel benefits and special offers for Karma Resorts Preferred Guest® members.</p>
            </div>
            <div class="block2">
                <p class="content2">BEST HOTEL INFORMATION</p>
                <p class="content3"><img src="https://karmagroup.com/wp-content/uploads/images-bvg/best-hotel-information.jpg" alt="information"  width="58" height="43">Get the most robust information about our hotels right on our sites.</p>
            </div>
            <div class="block2">
                <p class="content2">CALL CENTER</p>
                <p class="content3"><img src="https://karmagroup.com/wp-content/uploads/images-bvg/call-center.jpg" alt="call-center"   width="58" height="43">To speak with a Karma Resorts expert, please call: +62 361 8482202</p>
            </div>
            <br>
            <br>
        </div>
    </div>
</div>

<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/booking-iframe/js/jquery.js'></script>
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/booking-iframe/js/slick.min.js'></script>
<script type='text/javascript' src="<?php echo get_template_directory_uri(); ?>/booking-iframe/js/jquery-ui.js"></script>

<script>
	$( function() {
		$( ".datepicker" ).datepicker({ dateFormat: 'dd M yy' });

		///////BEGIN LPG
    	$('.bvg_popup_container').click(function(){
    		$('.bvg_popup_container').hide();    		
    	});
    	$('.lpg').click(function(){
    		$('.bvg_popup_container').show();    		
    	});    	
    	///END LPG
	});
</script>

<script>
    $(document).ready(function() {

    	/////////////DATEPICKER
			var tgl = [];
				tgl['Jan'] = '01';
				tgl['Feb'] = '02';
				tgl['Mar'] = '03';
				tgl['Apr'] = '04';
				tgl['May'] = '05';
				tgl['Jun'] = '06';
				tgl['Jul'] = '07';
				tgl['Aug'] = '08';
				tgl['Sep'] = '09';
				tgl['Oct'] = '10';
				tgl['Nov'] = '11';
				tgl['Dec'] = '12';

			var arr_mo = [];
				arr_mo['1'] = 'Jan';
				arr_mo['2'] = 'Feb';
				arr_mo['3'] = 'Mar';
				arr_mo['4'] = 'Apr';
				arr_mo['5'] = 'May';
				arr_mo['6'] = 'Jun';
				arr_mo['7'] = 'Jul';
				arr_mo['8'] = 'Aug';
				arr_mo['9'] = 'Sep';
				arr_mo['10'] = 'Oct';
				arr_mo['11'] = 'Nov';
				arr_mo['12'] = 'Dec';

    		/*****************************/
    		$('form').submit(function(){
 
    				var check_in_date = $(this).find('input[name="check_in_date"]').val();
    				var check_out_date = $(this).find('input[name="check_out_date"]').val();
    				var number_adults = $(this).find('select[name="number_adults"]').val();
    				var number_children = $(this).find('select[name="number_children"]').val();
    				var number_infants = $(this).find('select[name="number_infants"]').val();
					var promotion_code = $(this).find('input[name="promotion_code"]').val();			
  
    				//CHANGE DATE FORMAT
    				check_in_date_split = check_in_date.split(" ");
    				check_out_date_split = check_out_date.split(" ");

    				var min2 = check_in_date_split[1];
    				var mout2 = check_out_date_split[1];

    				check_in_date_2 = check_in_date_split[2] + '-' + tgl[min2] + '-' + check_in_date_split[0];
    				check_out_date_2 = check_out_date_split[2] + '-' + tgl[mout2] + '-' + check_out_date_split[0];

    				check_in_date_ok = check_in_date_split[0] + '-' + tgl[min2] + '-' + check_in_date_split[2];
    				check_out_date_ok = check_out_date_split[0] + '-' + tgl[mout2] + '-' + check_out_date_split[2];    				
    				///END CHANGE DATE FORMAT

    				var diff_in_out = parseInt((new Date(check_out_date_2) - new Date(check_in_date_2)) /1000/60/60/24);    				

    				if(diff_in_out < 1){

    					alert('invalid Check out.');
    					$(this).find('input[name="check_out_date"]').addClass('invalid');
    					$(this).find('input[name="check_out_date"]').focus();
    					return false;
    				}else{
    					$(this).find('input[name="check_out_date"]').removeClass('invalid');    					
    				}

    				//var diff_from_now = parseInt((new Date(check_in_date_2) - new Date()) /1000/60/60/24);

    				//if(diff_from_now < 60 && target == 'iframe1'){

    					// var banner = '<div class="banner"><img src="<?php echo get_template_directory_uri(); ?>/booking-iframe/images/banner.jpg" width="100%" height="auto" /></div>';
    					// $('#'+ target).closest('.inner').append(banner);
    					// $('#'+ target).hide();

    				//}else{

    					// $('#'+ target).show();
    					// $('#'+ target).closest('.inner').find('.banner').remove();

	    				var n_number_adults = '';
	    				var n_number_children = '';
	    				var n_number_infants = '';
	    				var n_promotion_code = '';

	    				if(number_adults != ''){ n_number_adults = '&number_adults='+ number_adults; }
	    				if(number_children != ''){ n_number_children = '&number_children='+ number_children; }
	    				if(number_infants != ''){ n_number_infants = '&number_infants='+ number_infants; }
	    				//if(promotion_code != ''){ n_promotion_code = '&promotion_code='+ promotion_code; }

						var url_1 = '<?php echo $data[$key]['url'] ?>' + '?check_in_date='+ check_in_date_ok +'&check_out_date='+ check_out_date_ok + n_number_adults + n_number_children + n_number_infants + n_promotion_code;
						

						$('#iframe1').attr('src', url_1);	


						//var url_2 = '<?php echo $data[$key]['url'] ?>' + '?check_in_date='+ check_in_date_ok +'&check_out_date='+ check_out_date_ok + n_number_adults + n_number_children + n_number_infants;
						
						//$('#iframe2').attr('src', url_2);	    				
						   				
					//}

					$('html,body').animate({
						scrollTop: 500
					}, 500);

    				return false;
    		});
    		/*****************************/

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

    		$('#tabs #tabs_title li').click(function(){

    				var id = $(this).attr('data-rel');

                    $('#tabs #tabs_title li').removeClass('active');
                    $('#tabs #tabs_content li').removeClass('active');

                    $(this).addClass('active');    		
                     $('#tabs #tabs_content').find('[data-rel="'+ id +'"]').addClass('active');
    		});

    		$('[name="check_in_date"]').change(function(){

    			check_in_date_split = ($(this).val()).split(" ");
				var mo = check_in_date_split[1];
				check_in_date = check_in_date_split[2] + '-' + tgl[mo] + '-' + check_in_date_split[0];
    			real_cid = new Date(check_in_date);
    			real_cid.setDate(real_cid.getDate() + 1);

    			ci_d = real_cid.getDate();
    			ci_m = real_cid.getMonth()+1;
    			ci_y = real_cid.getFullYear();

    			ci_dmy = ci_d + ' ' + arr_mo[ci_m] + ' ' + ci_y;

    			$('[name="check_out_date"]').val(ci_dmy);
    		});
    });
</script>   
</body>
</html>