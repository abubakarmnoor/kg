<style>
	.open_booknow_mobile ,
	.open_destination_mobile {
	    background-color: #8d714c;
	    color: #fff;
	    padding: 10px;
	    width: 90%;
	    margin: 15px auto 2px;
	    text-align: center;
	    cursor: pointer;
	}
	#open_booknow_mobile_wrapper,
	#open_destination_mobile_wrapper{
		margin-bottom: 20px;
		text-align: center;
	}

	#open_destination_mobile_wrapper > .ulwrapper {
	    height: calc(100vh - 190px);
		background-color: #8d714c;
		border: 1px solid #8d714c;
	    margin: 0 auto;
	    width: 80%;
	    border-bottom: 35px solid #8d714c;
	}
	#open_destination_mobile_wrapper > .ulwrapper > ul {
	    height: calc(100vh - 220px);
	    overflow-y: scroll;
	    margin: 0 auto;
	    width: 100%;
	    color: #fff!important;
	}
	#open_destination_mobile_wrapper > .ulwrapper > ul > li{
	    text-transform: uppercase;
	    font-size: 18px!important;
	    text-align: center;
	    clear: both;
	    display: table!important;
	    width: 100%;
	    color: #fff!important;
	    padding-top: 0!important;
	}
	#open_destination_mobile_wrapper > .ulwrapper > ul > li > span.group_title {
	    margin-top: 15px;
	    display: table;
	    text-align: center;
	    width: 100%;
	}
	#open_destination_mobile_wrapper > .ulwrapper > ul > li > a {
	    font-size: 14px;
	    font-weight: 100!important;
	    color: #fff!important;
	    text-transform: none;
	    padding: 5px!important;
	}

	.lpg {
	    position: absolute;
	    left: 20px;
	    bottom: 8px;
	    background: url('<?php echo get_template_directory_uri();?>/imgs/lowest-price-guarantee-text.png') #87714d 35px 5px;
	    background-size: auto 16px;
	    width: 120px;
	    height: 25px;
	}
	.lpg::before {
	    content: '';
	    width: 16px;
	    margin: 1px 0 0 6px;
	    height: 21px;
	    /*background: url('<?php echo get_template_directory_uri();?>/imgs/lowest-price-guarantee-icon.png') #87714d center center no-repeat;*/

	    background: url('<?php echo get_template_directory_uri();?>/imgs/icons.png') -45px 2px #87714d no-repeat;
	    display: table;
	    box-shadow: 0 0 2px #99825e;
	}
	.lpg::after {
	    content: '';
	    width: 26px;
	    height: 25px;
	    display: table;
	    border-right: 1px solid #76613f;
	    box-shadow: 0 0 2px #99825e;
	    position: absolute;
	    left: 0;
	    top: 0;
	}
</style>

<?php
//require_once get_template_directory_uri(). '/inc/mobile_detect.php';
include_once 'mobile_detect.php';

$detect = new Mobile_Detect;
//error_reporting(0);
$is_mobile = 0;
if ($detect->isMobile()) {
	$is_mobile = 1;
}
if($detect->isTablet()){
   $is_mobile = 0;
}
?>
<?php

//echo 'is_mobile: '. $is_mobile;

// $rightNowDate = date("m-d-Y");
// $date1 = str_replace('-', '/', $date);
// $tomorrow = date('d/m/Y',strtotime($date1 . "+1 days"));
// $today = date("d/m/Y");
// $dateonly = date("d");
// $dateonlytomorrow = substr($tomorrow, 0,2);

// current date
	$today = date('d/m/Y');
	$tomorrow = date('d/m/Y', strtotime('tomorrow'));
	$dateonly = date('d');
	$tomorrow_dateonly = date('d', strtotime('tomorrow'));

	global $post;

	// using page name (slug)
	$dest_with_availability = array(

		// resorts
		'karma-bavaria',
		'karma-jimbaran',
		'karma-kandara',
		'karma-rottnest',

		// retreats
		'karma-grove',
		'karma-reef',
		'karma-st-martins',
                'karma-residence-normande',
		'karma-manoir-des-deux-amants',

		// royal
		'karma-royal-haathi-mahal',
	);

	$all_destinations = karma_get_destination_pages_all();

	$booking_html = '<div class="booking-bar-wrapper">

				<div id="open_destination_mobile_wrapper" style="display: none;">
					<div class="open_destination_mobile">Find Destination</div>
					
					<div class="ulwrapper" style="display: none;">
					<ul>
						<li>xxx</li>
						<li>xxx</li>
						<li>xxx</li>
					</ul>
					<div class="arrowdown"></div>
					</div>
				</div>

				<div id="open_booknow_mobile_wrapper" style="display: block;">
					<div class="open_booknow_mobile" style="display: none;">Book Now</div>
				</div>

				<div id="ctrlSiteHeader_ctrlBooking_ctrlBookingDevice" class="bookingMask collection_id_' .$post->ID. (!is_front_page() ? ' booking_form_top_margin' : ''). '">
					<div class="deviceCover" class="cover device">
						<div id="bookingDevice" class="form">
							<fieldset class="line">';
	/*
	$booking_html.= '<fieldset class="space">
									<select id="karmaResort" class="ddkarmaresort" name="karmaResort">
										<option value="none" selected="selected" disabled>FIND A RESORT</option>';
	foreach ($all_destinations as $dest) {
		if ($dest->ID != 524) { // don't show Karma Estates opt group as it has no resorts available for the form
			$booking_html .= '<optgroup label="' .$dest->post_title. '">';
		}
		$i = 0;
		foreach ($dest->children as $c) {
			$i++;
			if (in_array($c->post_name, $dest_with_availability)) {
				$location = get_field('resort_location', $c->ID);
				$booking_html .= '<option value="' .$i. '" ' .($post->ID == $c->ID ? 'selected' : ''). '>' .$c->post_title. ($location ? ' - ' .$location : ''). '</option>';
			}
		}

		$booking_html .= '</optgroup>';
	}

	$booking_html .= '</select></fieldset>';
	*/

	// if($post->ID=='731') { // karma+bavaria
	// 	$bookkbv = 'selected="selected"';
	// } 
	// else if($post->ID=='837') { // karma+jimbaran
	// 	$bookjim = 'selected="selected"';
	//  } 
	// else if($post->ID=='193') { // karma+kandara
	// 	$bookkdr = 'selected="selected"';
	//  } 
	// else if($post->ID=='802') { // Karma+Rottnest
	// 	$bookrot = 'selected="selected"';
	//  } 
	// else if($post->ID=='866') { // Karma+Reef
	// 	$bookref = 'selected="selected"';
	//  } 
	// else if($post->ID=='914') { // St.Martin
	// 	$bookmar = 'selected="selected"';
	//  } 
	// else if($post->ID=='1087') { // hati mahal
	// 	$bookroy = 'selected="selected"';
	//  }	 

	$booking_html .= '
						<fieldset class="">
							<label for="bookingDevice">Check Rates &amp; Availability</label>
							<input type="hidden" name="is_mobile" id="is_mobile" value="'. $is_mobile .'" />
						    <input type="hidden" name="karmaResort" id="karmaResort" value="" />
						    <div class="formselect inputBG1">

						        <div>FIND A RESORT</div>

						        <ul class="content">

						        	<li><b>Karma Resort</b></li>
						            <li id="1" class="sub">Karma Bavaria - Germany</li>
						            <li id="3" class="sub">Karma Jimbaran - Bali</li>
						            <li id="4" class="sub">Karma Kandara - Bali</li>
						            <li id="5" class="sub">Karma Rottnest - Australia</li>

						            <li><b>Karma Retreat</b></li>
						            <li id="9" class="sub">Karma Reef - Indonesia</li>
						            <li id="10" class="sub">Karma St Martin\'s - Isles of Scilly</li>
                                                            <li id="11322" class="sub">Karma Manoir des Deux Amants - France</li>  
							    <li id="11357" class="sub">Karma Residence Normande - France</li>   

						            <li><b>Karma Royal</b></li>
						            <li id="14" class="sub">Karma Royal Haathi Mahal - Goa</li>
						            
						            <li><b>Karma Sanctum</b></li>
									<li id="5825" class="sub">Karma Sanctum Soho - London</li>                                   
									<li id="8109" class="sub">Karma Sanctum On The Green - England</li>                                   
						        </ul>
						    </div>

						<!--
			                <select id="karmaResort" class="ddkarmaresort" name="karmaResort">
				                <option value="none" selected="selected" disabled>FIND A RESORT</option>
				                <optgroup label="Karma Resort">
				                    <option value="1" '.$bookkbv.'>Karma Bavaria - Germany</option>
				                    <option value="3" '.$bookjim.'>Karma Jimbaran - Bali</option>
				                    <option value="4" '.$bookkdr.'>Karma Kandara - Bali</option>
				                    <option value="5" '.$bookrot.'>Karma Rottnest - Australia</option>
				                </optgroup>
				                <optgroup label="Karma Retreat">
				                    <option value="9" '.$bookref.'>Karma Reef - Indonesia</option>
				                    <option value="10" '.$bookmar.'>Karma St Martin\'s - Isles of Scilly</option>              
				                </optgroup>
				                <optgroup label="Karma Royal">
				                    <option value="14" '.$bookroy.'>Karma Royal Haathi Mahal - Goa</option>                            
				                </optgroup>
			                </select>-->
			            </fieldset>';            
	
	
	$template_uri = get_template_directory_uri();

	$booking_html .= '<fieldset class="date">
				 <label for="bookCheckIn">Check-In</label>
				 <div class="inputBG1">
				 	<input type="text" class="required hasDatepicker" maxlength="10" name="bookCheckIn" id="bookCheckIn" value="' .$today. '" readonly="readonly" aria-required="true" style="cursor: pointer;">
			 		<a href="#" class="btn small" id="dp4" data-date-format="dd/mm/yyyy" placeholder="' .$today. '" data-date="">
			 			<img id="bookCheckInImage" src="' .$template_uri. '/booking/' .$dateonly. '.png' .'" alt="..." title="...">
			 		</a>
				 	<input type="hidden" name="bookCheckInValue" id="bookCheckInValue" value="' .$today. '">
				 </div>
			</fieldset>
			<fieldset class="date">
                <label for="bookCheckOut">Check-Out</label>
                <div class="inputBG1">
                	<input type="text" class="required enddate hasDatepicker" maxlength="10" name="bookCheckOut" id="bookCheckOut" value="' .$tomorrow. '" readonly="readonly" aria-required="true" style="cursor: pointer;"><a href="#" class="btn small" id="dp5" data-date-format="dd/mm/yyyy" placeholder="' .$tomorrow. '" data-date=""><img id="bookCheckOutImage" src="' .$template_uri. '/booking/' .$tomorrow_dateonly. '.png'. '" alt="..." title="..."></a>
	                <input type="hidden" name="bookCheckOutValue" id="bookCheckOutValue" value="' .$tomorrow. '">
                </div>
            </fieldset>
            <fieldset style="display:none;">
                <label for="Rooms">Room(s)</label>
                <div class="inputBG2">
                    <input type="text" class="required fixwidth" maxlength="2" name="Rooms" id="Rooms" value="1" aria-required="true">
                </div>
            </fieldset>
            <fieldset>
                <label for="Adults">Adult(s)</label>
                <div class="inputBG2">
                    <input type="text" class="required fixwidth" maxlength="2" name="Adults" id="Adults" value="2" aria-required="true">
                </div>
            </fieldset>
            <fieldset class="children">
                <label for="Children">Children</label>
                <div class="inputBG2">
                    <input type="text" class="required fixwidth" maxlength="2" name="Children" id="Children" value="0" aria-required="true">
                </div>
                <span class="subyeartitle">(5-13 yrs)</span>
            </fieldset>
            <fieldset class="infant">
                <label for="infant">Infant(s)</label>
                <div class="inputBG2">
                    <input type="text" class="required fixwidth" maxlength="2" name="Infant" id="Infant" value="0" aria-required="true">
                </div>
                <span class="subyeartitle">(< 5 yrs)</span>
            </fieldset>
            <fieldset class="btn">
                <button class="button" id="submitButton" title="Book Now"><span>Book Now</span></button>
            </fieldset>
         </fieldset>

         <a href="#" class="lpg bvg"></a>';

	$booking_html .= '<div id="enterCode" style="padding-top:60px;">

		            <fieldset style="display: none;">
		                <label style="margin-top:8px;" id="titlePromotionalLabel">Have a <a href="#" id="promoCode">promotional code</a>?</label>
		            </fieldset>
		            <fieldset style="display: none;">
		                <label style="margin-top:8px;" id="titleCode">Enter the code</label>
		            </fieldset>		        
		            <fieldset style="display: none;">
		                <div class="inputBG1" style="float:left; width:81px; margin-top:8px;" id="textFieldCode">
		                    <input class="promocode" type="text" maxlength="16" name="promotionCode" id="promotionCode" value="">
		                </div>
		            </fieldset>
		            <div class="clear"></div>
	          </div>';

	$booking_html .= '<input type="hidden" id="dteCheckIn" name="dteCheckIn" value="">
		       <input type="hidden" id="dteCheckOut" name="dteCheckOut" value="">
		       <input type="hidden" id="source" name="source" value="desktop">
		       <input type="hidden" id="bc" name="bc" value="AN">';

	$booking_html .= '</div><div class="clear"></div></div></div></div>';	    


	// enqueue scripts.
	wp_enqueue_script('bookingbarjs');
	wp_enqueue_script('bookingdropdownjs');
	wp_enqueue_script('datepickerjs');
?>

