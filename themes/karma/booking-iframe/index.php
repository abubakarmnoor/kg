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
	<title>Booking</title>

	<link rel="stylesheet" type="text/css" href="css/slick.css"/>
	<link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">

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
			width: 1000px!important;
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
			height: 700px;
			width: 100%;
			overflow-y: hidden;
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
		    border: none;
		    margin-top: -275px;
		    margin-bottom: -625px;
		    height: 1600px;
		}

		#footer{

			height: 100px;
			background-color: #000;
		}
	</style>	
</head>	
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WZDHLPS"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php
if(isset($_GET['resort'])){
	$destination_key = $_GET['resort'];
}else{
	$destination_key = 'jimbaran';
}

$destination['kandara'] = array(
									'url' => 'https://www.thebookingbutton.co.uk/properties/karmabavaria',
									'title' => 'Karma Kandara',
									'star' => 4
								);

$destination['jimbaran'] = array(
									'url' => 'https://www.thebookingbutton.com.au/properties/kjimbarandirect',
									'title' => 'Karma Jimbaran',
									'star' => 5
								);
?>
<div id="wrapper">

		<section id="header">
			<div class="row innerBAK top">
				<div id="logo" class="left"><a href="index.php"><img src="images/logo.png" height="60" /></a></div>
				

			<div class="row">
				
				<div id="slider_wrapper">

					<div class="slider slider-for">
						<div><img src="images/s1.jpg"></div>
						<div><img src="images/s2.jpg"></div>
						<div><img src="images/s2.jpg"></div>
						<div><img src="images/s3.jpg"></div>
						<div><img src="images/s4.jpg"></div>
						<div><img src="images/s1.jpg"></div>
						<div><img src="images/s2.jpg"></div>
						<div><img src="images/s2.jpg"></div>
						<div><img src="images/s3.jpg"></div>
						<div><img src="images/s4.jpg"></div>
					</div>
					
					<div class="slider slider-nav">
						<div><img src="images/s1.jpg"></div>
						<div><img src="images/s2.jpg"></div>
						<div><img src="images/s2.jpg"></div>
						<div><img src="images/s3.jpg"></div>
						<div><img src="images/s4.jpg"></div>
						<div><img src="images/s1.jpg"></div>
						<div><img src="images/s2.jpg"></div>
						<div><img src="images/s2.jpg"></div>
						<div><img src="images/s3.jpg"></div>
						<div><img src="images/s4.jpg"></div>			
					</div>
				</div>

				<div id="titlepage">
					<span><h1><?php echo $destination[$destination_key]['title'] ?></h1><div class="star s<?php echo $destination[$destination_key]['star'] ?>"></div></span>
					<span>
						<a href="https://www.tripadvisor.com"><img src="images/tripad.png" height="30" style="margin-top: 8px;"></a>
						<a><img src="images/map-marker.png" height="40"></a>
						<a class="lpg" style="margin-top: 6px;"><img src="images/lowest-price-guarantee-text.png" height="20"></a>
					</span>
				</div>
			</div>
		</section>

		<section id="main">

				<div id="tabs">

					<ul id="tabs_title">	
						<li data-rel="1" class="active">
							<div class="left"><span>-25%</span></div>
							<div class="left"><span>Karma Club Member Rate Book Now and Join for FREE - No Hidden Fee</span></div>
						</li>
						<li data-rel="2">
							<div class="left"><span>-5%</span></div>
							<div class="left"><span><b>BEST FLEXIBLE RATE</b><br />Great price and delight for easy travel planning</span></div>
						</li>				
					</ul>

					<ul id="tabs_content">	
						<li data-rel="1" class="active">

							<div id="filter">

								<div class="inner">

									<form class="booking_filter" target="iframe1">
										
										<div class="calendar_wrapper">
											<label>Check in</label>
											<input type="text" name="check_in_date" value="<?php echo date('d M Y'); ?>" class="datepicker">
										</div>

										<div class="calendar_wrapper">
											<label>Check out</label>
											<input type="text" name="check_out_date" value="<?php echo date('d M Y', strtotime("+1 day")); ?>" class="datepicker">
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
							
							<div class="inner" style="overflow-y: hidden;">
								<!-- <iframe src="https://www.thebookingbutton.com.au/karmagroup/properties/karmakandaradirect?check_in_date=<?php echo date('Y-m-d'); ?>&check_out_date=<?php echo date('Y-m-d', strtotime("+1 day")); ?>" width="100%" height="900" id="iframe1"></iframe> -->

								<iframe src="" width="100%" id="iframe1"></iframe>
							</div>
						</li>
						<li data-rel="2">

							<div id="filter">
								<div class="inner">
									<form class="booking_filter" target="iframe2">
										
										<div class="calendar_wrapper">
											<label>Check in</label>
											<input type="text" name="check_in_date" value="<?php echo date('d M Y'); ?>" class="datepicker">
										</div>

										<div class="calendar_wrapper">
											<label>Check out</label>
											<input type="text" name="check_out_date" value="<?php echo date('d M Y', strtotime("+1 day")); ?>" class="datepicker">
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

							<div class="inner" style="overflow-y: hidden;">
								<iframe src="" width="100%" id="iframe2"></iframe>
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
                <p class="content3"><img src="https://karmagroup.com/wp-content/uploads/images-bvg/hidden.jpg" width="58" height="43">Many online travel sites charge extra fees for online bookings. We guarantee 5% lower than others.</p>
            </div>
            <div class="block2">
                <p class="content2">EXCLUSIVE OFFERS</p>
                <p class="content3"><img src="https://karmagroup.com/wp-content/uploads/images-bvg/exclusive-offer.jpg" width="58" height="43">Only our sites offer elite level hotel benefits and special offers for Karma Resorts Preferred Guest® members.</p>
            </div>
            <div class="block2">
                <p class="content2">BEST HOTEL INFORMATION</p>
                <p class="content3"><img src="https://karmagroup.com/wp-content/uploads/images-bvg/best-hotel-information.jpg" width="58" height="43">Get the most robust information about our hotels right on our sites.</p>
            </div>
            <div class="block2">
                <p class="content2">CALL CENTER</p>
                <p class="content3"><img src="https://karmagroup.com/wp-content/uploads/images-bvg/call-center.jpg" width="58" height="43">To speak with a Karma Resorts expert, please call: +62 361 8482202</p>
            </div>
            <br>
            <br>
        </div>
    </div>
</div>

<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/slick.min.js'></script>
<script type='text/javascript' src="js/jquery-ui.js"></script>

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
				tgl['Mei'] = '05';
				tgl['Jun'] = '06';
				tgl['Jul'] = '07';
				tgl['Aug'] = '08';
				tgl['Sep'] = '09';
				tgl['Oct'] = '10';
				tgl['Nov'] = '11';
				tgl['Dec'] = '12';

    		/*****************************/
    		$('form').submit(function(){    				

    				var mainUrl = "<?php echo $destination[$destination_key]['url'] ?>";

    				var check_in_date = $(this).find('input[name="check_in_date"]').val();
    				var check_out_date = $(this).find('input[name="check_out_date"]').val();
    				var number_adults = $(this).find('input[name="number_adults"]').val();
    				var number_children = $(this).find('input[name="number_children"]').val();
    				var number_infants = $(this).find('input[name="number_infants"]').val();
    				// var promotion_code = $(this).find('input[name="promotion_code"]').val();

    				//CHANGE DATE FORMAT
    				check_in_date_split = check_in_date.split(" ");
    				check_out_date_split = check_out_date.split(" ");

    				var min2 = check_in_date_split[1];
    				var mout2 = check_out_date_split[1];

    				check_in_date_2 = check_in_date_split[2] + '-' + tgl[min2] + '-' + check_in_date_split[0];
    				check_out_date_2 = check_out_date_split[2] + '-' + tgl[mout2] + '-' + check_out_date_split[0];
    				///END CHANGE DATE FORMAT

    				var n_number_adults = '';
    				var n_number_children = '';
    				var n_number_infants = '';

    				if(number_adults != ''){ n_number_adults = '&number_adults='+ number_adults; }
    				if(number_children != ''){ n_number_children = '&number_children='+ number_children; }
    				if(number_infants != ''){ n_number_infants = '&number_infants='+ number_infants; }

    				var url = mainUrl + '?check_in_date='+ check_in_date_2 +'&check_out_date='+ check_out_date_2 + n_number_adults + n_number_children + n_number_infants;

    				//alert(url);
					
					$('html,body').animate({
						scrollTop: 500
					}, 500);
    				
    				$('#'+ $(this).attr('target')).attr('src', url);

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

    				//alert('id: '+ id);
    		});    		
    });
</script>   
</body>
</html>
