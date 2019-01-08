<?php

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

		// royal
		'karma-royal-haathi-mahal',

	);

	$all_destinations = karma_get_destination_pages_all();

	$booking_html = '<div class="booking-bar-wrapper">
				<div id="ctrlSiteHeader_ctrlBooking_ctrlBookingDevice" class="bookingMask collection_id_' .$post->ID. (!is_front_page() ? ' booking_form_top_margin' : ''). '">
					<div class="deviceCover" class="cover device">
						<div id="bookingDevice" class="form">
							<fieldset class="line">
								<label for="bookingDevice">Check Rates &amp; Availability </label>';
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
	$booking_html .= '<fieldset class="space">
			                <select id="karmaResort" class="ddkarmaresort" name="karmaResort">
				                <option value="none" selected="selected" disabled>FIND A RESORT</option>
				                <optgroup label="Karma Resort">
				                    <option value="1">Karma Bavaria - Germany</option>
				                    <option value="3">Karma Jimbaran - Bali</option>
				                    <option value="4">Karma Kandara - Bali</option>
				                    <option value="5">Karma Rottnest - Australia</option>
				                </optgroup>
				                <optgroup label="Karma Retreat">
				                    <option value="9">Karma Reef - Indonesia</option>
				                    <option value="10">Karma St Martin\'s - Isles of Scilly</option>              
				                </optgroup>
				                <optgroup label="Karma Royal">
				                    <option value="14">Karma Royal Haathi Mahal - Goa</option>                            
				                </optgroup>
			                </select>		                    
			            </fieldset>';            
	
	
	$template_uri = get_template_directory_uri();

	$booking_html .= '<fieldset class="date">
				 <label for="bookCheckIn">Check-In</label>
				 <div class="inputBG1">
				 	<input type="text" class="required hasDatepicker" maxlength="10" name="bookCheckIn" id="bookCheckIn" value="' .$today. '" readonly="readonly" aria-required="true">
			 		<a href="#" class="btn small" id="dp4" data-date-format="dd/mm/yyyy" placeholder="' .$today. '" data-date="">
			 			<img id="bookCheckInImage" src="' .$template_uri. '/booking/' .$dateonly. '.png' .'" alt="..." title="...">
			 		</a>
				 	<input type="hidden" name="bookCheckInValue" id="bookCheckInValue" value="">
				 </div>
			</fieldset>
			<fieldset class="date">
                <label for="bookCheckOut">Check-Out</label>
                <div class="inputBG1">
                	<input type="text" class="required enddate hasDatepicker" maxlength="10" name="bookCheckOut" id="bookCheckOut" value="' .$tomorrow. '" readonly="readonly" aria-required="true"><a href="#" class="btn small" id="dp5" data-date-format="dd/mm/yyyy" placeholder="' .$tomorrow. '" data-date=""><img id="bookCheckOutImage" src="' .$template_uri. '/booking/' .$tomorrow_dateonly. '.png'. '" alt="..." title="..."></a>
	                <input type="hidden" name="bookCheckOutValue" id="bookCheckOutValue" value="">
                </div>
            </fieldset>
            <fieldset>
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
                <button class="button" id="submitButton"><span>Book Now</span></button>
            </fieldset>
         </fieldset>';

	$booking_html .= '<div id="enterCode" style="padding-top:60px;">
		            <fieldset>
		                <label style="margin-top:8px;" id="titlePromotionalLabel">Have a <a href="#" id="promoCode">promotional code</a>?</label>
		            </fieldset>
		            <fieldset>
		                <label style="margin-top:8px;" id="titleCode">Enter the code</label>
		            </fieldset>		        
		            <fieldset>
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
