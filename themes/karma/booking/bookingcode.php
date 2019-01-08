<?php
include_once 'bookingcode-config.php';
$rightNowDate = date("m-d-Y");
$date1 = str_replace('-', '/', $date);
$tomorrow = date('d/m/Y',strtotime($date1 . "+1 days"));
$today = date("d/m/Y");
$dateonly = date("d");
$dateonlytomorrow = substr($tomorrow, 0,2);

if( $page->getCollectionID()=='1' ||
$page->getCollectionID()=='152' ||
$page->getCollectionID()=='158' ||
$page->getCollectionID()=='153' ||
$page->getCollectionID()=='142' ||
$page->getCollectionID()=='160' ||
$page->getCollectionID()=='186' ||
$page->getCollectionID()=='154' ||
$page->getCollectionID()=='171' ||
$page->getCollectionID()=='179' ) { ?>

<div class="booking-bar-wrapper">
	<div id="ctrlSiteHeader_ctrlBooking_ctrlBookingDevice" class="bookingMask collection_id_<?php echo $page->getCollectionID();?> <?php if($page->getCollectionID()!='1') { echo 'booking_form_top_margin'; } ?>">
		<div id="deviceCover" class="cover device">
		    <div id="bookingDevice" class="form">
		        <fieldset class="line">
		            <label for="bookingDevice">Check Rates &amp; Availability </label>
		            <?php if (!isset($resort_id_by_collection_id[$page->getCollectionID()])) {?>
			            <fieldset class="space">
			                <select id="karmaResort" class="ddkarmaresort" name="karmaResort">
				                <option value="none" selected="selected" disabled>FIND A RESORT</option>
				                <optgroup label="Karma Resort">
				                    <option value="1" <?php if($page->getCollectionID()=='152') { echo 'selected="selected"'; } ?>>Karma Bavaria - Germany</option>
				                    <option value="2" <?php if($page->getCollectionID()=='158') { echo 'selected="selected"'; } ?>>Karma Haveli - India</option>
				                    <option value="3" <?php if($page->getCollectionID()=='153') { echo 'selected="selected"'; } ?>>Karma Jimbaran - Bali</option>
				                    <option value="4" <?php if($page->getCollectionID()=='142') { echo 'selected="selected"'; } ?>>Karma Kandara - Bali</option>
				                    <option value="5" <?php if($page->getCollectionID()=='160') { echo 'selected="selected"'; } ?>>Karma Rottnest - Australia</option>
				                </optgroup>
				                <optgroup label="Karma Retreat">
				                    <option value="7" <?php if($page->getCollectionID()=='171') { echo 'selected="selected"'; } ?>>Karma Grove - India</option>
				                    <option value="9" <?php if($page->getCollectionID()=='154') { echo 'selected="selected"'; } ?>>Karma Reef - Indonesia</option>
				                    <option value="10" <?php if($page->getCollectionID()=='186') { echo 'selected="selected"'; } ?>>Karma St Martin's - Isles of Scilly</option>              
				                </optgroup>
				                <optgroup label="Karma Royal">
				                    <option value="14" <?php if($page->getCollectionID()=='179') { echo 'selected="selected"'; } ?>>Karma Royal Haathi Mahal - Goa</option>                            
				                </optgroup>
			                </select>		                    
			            </fieldset>            
		            <?php } else {?>
		            	<input type="hidden" id="karmaResort" class="ddkarmaresort" name="karmaResort" value="<?php echo $resort_id_by_collection_id[$page->getCollectionID()];?>">
					<?php }?>
		            <fieldset class="date">
		                <label for="bookCheckIn">Check-In</label>
		                <div class="inputBG1"><input type="text" class="required hasDatepicker" maxlength="10" name="bookCheckIn" id="bookCheckIn" value="<?php echo $today; ?>" readonly="readonly" aria-required="true"><a href="#" class="btn small" id="dp4" data-date-format="dd/mm/yyyy" placeholder="<?php echo $today; ?>" data-date=""><img id="bookCheckInImage" src="<?php echo $domainactive; ?>/booking/<?php echo $dateonly; ?>.png" alt="..." title="..."></a>
		                <input type="hidden" name="bookCheckInValue" id="bookCheckInValue" value="">
		                </div>
		            </fieldset>		            
		            <fieldset class="date">
		                <label for="bookCheckOut">Check-Out</label>
		                <div class="inputBG1"><input type="text" class="required enddate hasDatepicker" maxlength="10" name="bookCheckOut" id="bookCheckOut" value="<?php echo $tomorrow; ?>" readonly="readonly" aria-required="true"><a href="#" class="btn small" id="dp5" data-date-format="dd/mm/yyyy" placeholder="<?php echo $tomorrow; ?>" data-date=""><img id="bookCheckOutImage" src="<?php echo $domainactive; ?>/booking/<?php echo $dateonlytomorrow; ?>.png" alt="..." title="..."></a>
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
		                <button class="button" id="submitButton"><span>Check availability</span></button>
		            </fieldset>		            
		        </fieldset>		
		        <div id="enterCode" style="padding-top:60px;">
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
		        </div>		
		        <input type="hidden" id="dteCheckIn" name="dteCheckIn" value="">
		        <input type="hidden" id="dteCheckOut" name="dteCheckOut" value="">
		        <input type="hidden" id="source" name="source" value="desktop">
		        <input type="hidden" id="bc" name="bc" value="AN">		    
		    </div>		
		    <div class="clear"></div>		
		</div>		
	</div>
<!-- end of booking bar -->
</div>
<?php 
}
?>