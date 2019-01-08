<?php //v1.2 - booking bar 17/06/2016 02:27
$rightNowDate = date("m-d-Y");
$date1 = str_replace('-', '/', $date);
$tomorrow = date('d/m/Y',strtotime($date1 . "+1 days"));
$today = date("d/m/Y");
$dateonly = date("d");
$dateonlytomorrow = substr($tomorrow, 0,2);

/*

Karma Bavaria = 152
Karma Haveli = 158
Karma Jimbaran = 153
Karma Kandara = 142
Karma Rottnest = 160
Karma Grove = 184
Karma Mayura = 171
Karma Reef = 202
Karma St Martin = 154
Karma Royal Candidasa = 186
Karma Royal Chiang mai = 189
Karma Royal Haati Mahal= 179
Karma Royal Jimbaran = 185
Karma Royal Monterio = 182
Karma Royal Palms = 181
Karma Royal Phuket = 188
Karma Royal Sanur = 187
Karma Royal Shimla 183
Karma Royal Villea = 190
Karma Le-preverger = 177
Karma Pelikanos = 178

*/

?>
<!-- booking bar 17/06/2016 11:20 -->

<div style="width:100%; background: #fff;">
<div id="ctrlSiteHeader_ctrlBooking_ctrlBookingDevice" class="bookingMask">

<div id="deviceCover" class="cover device">
    
    <div id="bookingDevice" class="form">
    
        <fieldset class="line">
            <label for="bookingDevice">Check Rates &amp; Availability </label>
            <fieldset class="space">
                <select id="karmaResort" class="ddkarmaresort" name="karmaResort">
                <option value="none" selected="selected" disabled>FIND A RESORT</option>

                <optgroup label="Karma Resort">
                    <option value="1">Karma Bavaria - Germany</option>
                    <option value="2">Karma Haveli - India</option>
                    <option value="3">Karma Jimbaran - Bali</option>
                    <option value="4">Karma Kandara - Bali</option>
                    <option value="5">Karma Rottnest - Australia</option>
                </optgroup>

                <optgroup label="Karma Retreat">
                    <option value="6">Karma Carcassonne - France</option>
                    <option value="7">Karma Grove - India</option>                            
                    <option value="8">Karma Mayura - Bali</option>                            
                    <option value="9">Karma Reef - Indonesia</option>                            
                    <option value="10">Karma St Martin's - Isles of Scilly</option>              
                </optgroup>

                <optgroup label="Karma Royal">
                    <option value="11">Karma Royal Benaulim - India</option>
                    <option value="12">Karma Royal Candidasa - Bali</option>                          
                    <option value="13">Karma Royal Chiang Mai - Thailand</option>                            
                    <option value="14">Karma Royal Haathi Mahal - Goa</option>                            
                    <option value="15">Karma Royal Jimbaran - Bali</option>                            
                    <option value="16">Karma Royal MonteRio - Goa</option>                            
                    <option value="17">Karma Royal Palms - Goa</option>                            
                    <option value="18">Karma Royal Phuket - Thailand</option>                            
                    <option value="19">Karma Royal Sanur - Bali</option>                            
                    <option value="20">Karma Royal Shimla - India</option>                            
                    <option value="21">Karma Royal Villea - Crete</option>                    
                </optgroup>

                <optgroup label="Karma Estate">
                    <option value="22">Le Preverger - France</option>                            
                    <option value="23">Pelikanos - Mykonos</option>                    
                </optgroup>
                </select>
                    
            </fieldset>            

            <fieldset class="date">
                <label for="bookCheckIn">Check-In</label>
                <div class="inputBG1"><input type="text" class="required hasDatepicker" maxlength="10" name="bookCheckIn" id="bookCheckIn" value="<?php echo $today; ?>" readonly="readonly" aria-required="true"><a href="#" class="btn small" id="dp4" data-date-format="dd/mm/yyyy" placeholder="<?php echo $today; ?>" data-date=""><img id="bookCheckInImage" src="/booking/<?php echo $dateonly; ?>.png" alt="..." title="..."></a>
                <input type="hidden" name="bookCheckInValue" id="bookCheckInValue" value="">
                </div>
            </fieldset>
            
            <fieldset class="date">
                <label for="bookCheckOut">Check-Out</label>
                <div class="inputBG1"><input type="text" class="required enddate hasDatepicker" maxlength="10" name="bookCheckOut" id="bookCheckOut" value="<?php echo $tomorrow; ?>" readonly="readonly" aria-required="true"><a href="#" class="btn small" id="dp5" data-date-format="dd/mm/yyyy" placeholder="<?php echo $tomorrow; ?>" data-date=""><img id="bookCheckOutImage" src="/booking/<?php echo $dateonlytomorrow; ?>.png" alt="..." title="..."></a>
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
