<?php 
$submit_url = get_option('home').'/ajax_spabooking_form_submit.php'; // @TODO
?>
<div class="enquiryspa_form_container">
    <div id="contact_form">
        <div class="cf">
            <h2 class="form_title">SPA Booking Request</h2>
            <div class="close_btn"></div>
        </div>
        <div class="error_message"></div>
        <form action="<?php echo $submit_url; ?>" method="post">
            <input type="hidden" name="page_id" value="<?php echo get_the_ID()?>">
            <!-- <input name="membershipNumber" type="text" placeholder="Membership No"> -->
            
            <?php
            $karmaResorts = karma_get_destination_pages_resort();
            $karmaRetreats = karma_get_destination_pages_retreat();
            $karmaRoyal = karma_get_destination_pages_royal();
            $karmaEstates = karma_get_destination_pages_estate();
            $karmaSanctum = karma_get_destination_pages_sanctum();
            $page_id = get_the_ID();
            
            /* 

            REFERENCE:

            <select name="resortChoice" class="karma_group">
                <option value="" selected="" disabled="">Resort</option>
                <optgroup label="Karma Resort">
                    <option value="Karma Bavaria">731 Karma Bavaria - Germany</option>
                    <option value="Karma Haveli">782 Karma Haveli - India</option>
                    <option value="Karma Jimbaran">837 Karma Jimbaran - Bali</option> //active
                    <option value="Karma Kandara">193 Karma Kandara - Bali</option> //active
                    <option value="Karma Rottnest">802 Karma Rottnest - Australia</option>
                </optgroup>
                <optgroup label="Karma Retreat">
                    <option value="Karma Chakra">940 Karma Chakra - India</option> //active
                    <option value="Karma Mayura">889 Karma Mayura - Bali</option> //active
                    <option value="Karma Reef">866 Karma Reef - Indonesia</option> //active
                    <option value="Karma St. Martin's">914 Karma St. Martin's - Isles of Scilly</option>
                </optgroup>
                <optgroup label="Karma Royal">
                    <option value="Karma Benaulim">1275 Karma Benaulim - India</option>
                    <option value="Karma Cay Tre">963 Karma Cay Tre - Vietnam</option>
                    <option value="Karma MonteRio">988 Karma MonteRio - Goa</option>
                    <option value="Karma Royal Bella Vista">1012 Karma Royal Bella Vista - Thailand</option>
                    <option value="Karma Royal Boat Lagoon">1037 Karma Royal Boat Lagoon - Thailand</option>
                    <option value="Karma Royal Candidasa">1058 Karma Royal Candidasa - Bali</option> //active
                    <option value="Karma Royal Haathi Mahal">1087 Karma Royal Haathi Mahal - Goa</option>
                    <option value="Karma Royal Jimbaran">1114 Karma Royal Jimbaran - Bali</option> //active
                    <option value="Karma Royal Palms">1213 Karma Royal Palms - Goa</option> //active
                    <option value="Karma Royal Sanur">1169 Karma Royal Sanur - Bali</option> //active
                    <option value="Karma Royal Villea">1141 Karma Royal Villea - Crete</option>
                </optgroup>
                <optgroup label="Karma Estate">
                    <option value="Chateau de Samary">1356 Chateau de Samary - France</option>
                    <option value="Karma Pelikanos">1331 Karma Pelikanos - Mykonos</option>
                    <option value="Le Preverger">1285 Le Preverger - France</option>
                </optgroup>
            </select>

            Option Group Code:

            <optgroup label="Karma Estate">
                <?php foreach ($karmaEstates as $page): ?>
                    <?php echo '<option ' . ($page->ID == $page_id ? 'selected="selected"' : '') . ' value="' . $page->post_title . '">' . $page->post_title .' - '. get_post_meta($page->ID, 'resort_location', 1) . '</option>'; ?>
                <?php endforeach; ?>
            </optgroup>

            */

            ?>

            <select name="resortChoice" class="karma_group">
                <option value="" selected disabled>Resort</option>

                <optgroup label="Karma Resort">
                    <?php foreach ($karmaResorts as $page): ?>
                        <?php if(($page->ID=='837') || ($page->ID=='193') || ($page->ID=='802') || ($page->ID=='731')) { // 837 Karma Jimbaran - Bali; 193 Karma Kandara - Bali; ?>
                         <?php echo '<option ' . ($page->ID == $page_id ? 'selected="selected"' : '') . ' value="' . $page->post_title . '">' . $page->post_title .' - '. get_post_meta($page->ID, 'resort_location', 1) . '</option>'; ?>
                        <?php } ?>
                    <?php endforeach; ?>
                </optgroup>

                <optgroup label="Karma Retreat">
                    <?php foreach ($karmaRetreats as $page): ?>
                         <?php if(($page->ID=='940') || ($page->ID=='889') || ($page->ID=='866') || ($page->ID=='914')) { // 940 Karma Chakra - India; 889 Karma Mayura - Bali; 866 Karma Reef - Indonesia; ?>
                          <?php echo '<option ' . ($page->ID == $page_id ? 'selected="selected"' : '') . ' value="' . $page->post_title . '">' . $page->post_title .' - '. get_post_meta($page->ID, 'resort_location', 1) . '</option>'; ?>
                         <?php } ?>
                    <?php endforeach; ?>
                </optgroup>

                <optgroup label="Karma Royal">
                    <?php foreach ($karmaRoyal as $page): ?>
                        <?php if(($page->ID=='4781') ||($page->ID=='988') ||($page->ID=='1012') ||($page->ID=='1037') ||($page->ID=='1087') ||($page->ID=='1058') || ($page->ID=='1114') || ($page->ID=='1213') || ($page->ID=='1169')) { 
                          // 1058 Karma Royal Candidasa - Bali; 1114 Karma Royal Jimbaran - Bali; 1213 Karma Royal Palms - Goa; 1169 Karma Royal Sanur - Bali; ?>
                          <?php echo '<option ' . ($page->ID == $page_id ? 'selected="selected"' : '') . ' value="' . $page->post_title . '">' . $page->post_title .' - '. get_post_meta($page->ID, 'resort_location', 1) . '</option>'; ?>
                        <?php } ?>
                    <?php endforeach; ?>
                </optgroup>
                
                <optgroup label="Karma Sanctum">
                <?php foreach ($karmaSanctum as $page): ?>
                <?php if(($page->ID=='5825')) { 
                // 5825 online Karma Sanctum Soho ?>
                <?php echo '<option ' . ($page->ID == $page_id ? 'selected="selected"' : '') . ' value="' . $page->post_title . '">' . $page->post_title .' - '. get_post_meta($page->ID, 'resort_location', 1) . '</option>'; ?>
                <?php } ?>
                <?php endforeach; ?>
                </optgroup>

                

            </select>

            <!--<span>Are you a: </span>
    
            <div class="cf">
                <div style="width: 50%; float: left; margin-bottom: 10px;">
                    <label for="travelling">Guest</label>
                    <input name="travelling" type="radio" value="Guest" checked="checked">
                </div>

                <div style="width: 50%; float: right; margin-bottom: 10px;">
                    <label for="travelling">Member</label>
                    <input name="travelling" type="radio" value="Member">
                </div>
            </div>-->

            <input name="firstName" type="text" placeholder="First Name:">
            <input name="surname" type="text" placeholder="Surname:">
            <input name="email" type="text" placeholder="Email:">
            <!-- <input name="tel" type="text" placeholder="Tel No"> -->
            
            <select name="userCountry" id="">
                <option selected disabled hidden>Country</option>
                <option value="GBR">United Kingdom</option>
                <option value="AFG">Afghanistan</option>
                <option value="ALA">Åland Islands</option>
                <option value="ALB">Albania</option>
                <option value="DZA">Algeria</option>
                <option value="ASM">American Samoa</option>
                <option value="AND">Andorra</option>
                <option value="AGO">Angola</option>
                <option value="AIA">Anguilla</option>
                <option value="ATA">Antarctica</option>
                <option value="ATG">Antigua and Barbuda</option>
                <option value="ARG">Argentina</option>
                <option value="ARM">Armenia</option>
                <option value="ABW">Aruba</option>
                <option value="AUS">Australia</option>
                <option value="AUT">Austria</option>
                <option value="AZE">Azerbaijan</option>
                <option value="BHS">Bahamas</option>
                <option value="BHR">Bahrain</option>
                <option value="BGD">Bangladesh</option>
                <option value="BRB">Barbados</option>
                <option value="BLR">Belarus</option>
                <option value="BEL">Belgium</option>
                <option value="BLZ">Belize</option>
                <option value="BEN">Benin</option>
                <option value="BMU">Bermuda</option>
                <option value="BTN">Bhutan</option>
                <option value="BOL">Bolivia, Plurinational State of</option>
                <option value="BES">Bonaire, Sint Eustatius and Saba</option>
                <option value="BIH">Bosnia and Herzegovina</option>
                <option value="BWA">Botswana</option>
                <option value="BVT">Bouvet Island</option>
                <option value="BRA">Brazil</option>
                <option value="IOT">British Indian Ocean Territory</option>
                <option value="BRN">Brunei Darussalam</option>
                <option value="BGR">Bulgaria</option>
                <option value="BFA">Burkina Faso</option>
                <option value="BDI">Burundi</option>
                <option value="KHM">Cambodia</option>
                <option value="CMR">Cameroon</option>
                <option value="CAN">Canada</option>
                <option value="CPV">Cape Verde</option>
                <option value="CYM">Cayman Islands</option>
                <option value="CAF">Central African Republic</option>
                <option value="TCD">Chad</option>
                <option value="CHL">Chile</option>
                <option value="CHN">China</option>
                <option value="CXR">Christmas Island</option>
                <option value="CCK">Cocos (Keeling) Islands</option>
                <option value="COL">Colombia</option>
                <option value="COM">Comoros</option>
                <option value="COG">Congo</option>
                <option value="COD">Congo, the Democratic Republic of the</option>
                <option value="COK">Cook Islands</option>
                <option value="CRI">Costa Rica</option>
                <option value="CIV">Côte d'Ivoire</option>
                <option value="HRV">Croatia</option>
                <option value="CUB">Cuba</option>
                <option value="CUW">Curaçao</option>
                <option value="CYP">Cyprus</option>
                <option value="CZE">Czech Republic</option>
                <option value="DNK">Denmark</option>
                <option value="DJI">Djibouti</option>
                <option value="DMA">Dominica</option>
                <option value="DOM">Dominican Republic</option>
                <option value="ECU">Ecuador</option>
                <option value="EGY">Egypt</option>
                <option value="SLV">El Salvador</option>
                <option value="GNQ">Equatorial Guinea</option>
                <option value="ERI">Eritrea</option>
                <option value="EST">Estonia</option>
                <option value="ETH">Ethiopia</option>
                <option value="FLK">Falkland Islands (Malvinas)</option>
                <option value="FRO">Faroe Islands</option>
                <option value="FJI">Fiji</option>
                <option value="FIN">Finland</option>
                <option value="FRA">France</option>
                <option value="GUF">French Guiana</option>
                <option value="PYF">French Polynesia</option>
                <option value="ATF">French Southern Territories</option>
                <option value="GAB">Gabon</option>
                <option value="GMB">Gambia</option>
                <option value="GEO">Georgia</option>
                <option value="DEU">Germany</option>
                <option value="GHA">Ghana</option>
                <option value="GIB">Gibraltar</option>
                <option value="GRC">Greece</option>
                <option value="GRL">Greenland</option>
                <option value="GRD">Grenada</option>
                <option value="GLP">Guadeloupe</option>
                <option value="GUM">Guam</option>
                <option value="GTM">Guatemala</option>
                <option value="GGY">Guernsey</option>
                <option value="GIN">Guinea</option>
                <option value="GNB">Guinea-Bissau</option>
                <option value="GUY">Guyana</option>
                <option value="HTI">Haiti</option>
                <option value="HMD">Heard Island and McDonald Islands</option>
                <option value="VAT">Holy See (Vatican City State)</option>
                <option value="HND">Honduras</option>
                <option value="HKG">Hong Kong</option>
                <option value="HUN">Hungary</option>
                <option value="ISL">Iceland</option>
                <option value="IND">India</option>
                <option value="IDN">Indonesia</option>
                <option value="IRN">Iran, Islamic Republic of</option>
                <option value="IRQ">Iraq</option>
                <option value="IRL">Ireland</option>
                <option value="IMN">Isle of Man</option>
                <option value="ISR">Israel</option>
                <option value="ITA">Italy</option>
                <option value="JAM">Jamaica</option>
                <option value="JPN">Japan</option>
                <option value="JEY">Jersey</option>
                <option value="JOR">Jordan</option>
                <option value="KAZ">Kazakhstan</option>
                <option value="KEN">Kenya</option>
                <option value="KIR">Kiribati</option>
                <option value="PRK">Korea, Democratic People's Republic of</option>
                <option value="KOR">Korea, Republic of</option>
                <option value="KWT">Kuwait</option>
                <option value="KGZ">Kyrgyzstan</option>
                <option value="LAO">Lao People's Democratic Republic</option>
                <option value="LVA">Latvia</option>
                <option value="LBN">Lebanon</option>
                <option value="LSO">Lesotho</option>
                <option value="LBR">Liberia</option>
                <option value="LBY">Libya</option>
                <option value="LIE">Liechtenstein</option>
                <option value="LTU">Lithuania</option>
                <option value="LUX">Luxembourg</option>
                <option value="MAC">Macao</option>
                <option value="MKD">Macedonia, the former Yugoslav Republic of</option>
                <option value="MDG">Madagascar</option>
                <option value="MWI">Malawi</option>
                <option value="MYS">Malaysia</option>
                <option value="MDV">Maldives</option>
                <option value="MLI">Mali</option>
                <option value="MLT">Malta</option>
                <option value="MHL">Marshall Islands</option>
                <option value="MTQ">Martinique</option>
                <option value="MRT">Mauritania</option>
                <option value="MUS">Mauritius</option>
                <option value="MYT">Mayotte</option>
                <option value="MEX">Mexico</option>
                <option value="FSM">Micronesia, Federated States of</option>
                <option value="MDA">Moldova, Republic of</option>
                <option value="MCO">Monaco</option>
                <option value="MNG">Mongolia</option>
                <option value="MNE">Montenegro</option>
                <option value="MSR">Montserrat</option>
                <option value="MAR">Morocco</option>
                <option value="MOZ">Mozambique</option>
                <option value="MMR">Myanmar</option>
                <option value="NAM">Namibia</option>
                <option value="NRU">Nauru</option>
                <option value="NPL">Nepal</option>
                <option value="NLD">Netherlands</option>
                <option value="NCL">New Caledonia</option>
                <option value="NZL">New Zealand</option>
                <option value="NIC">Nicaragua</option>
                <option value="NER">Niger</option>
                <option value="NGA">Nigeria</option>
                <option value="NIU">Niue</option>
                <option value="NFK">Norfolk Island</option>
                <option value="MNP">Northern Mariana Islands</option>
                <option value="NOR">Norway</option>
                <option value="OMN">Oman</option>
                <option value="PAK">Pakistan</option>
                <option value="PLW">Palau</option>
                <option value="PSE">Palestinian Territory, Occupied</option>
                <option value="PAN">Panama</option>
                <option value="PNG">Papua New Guinea</option>
                <option value="PRY">Paraguay</option>
                <option value="PER">Peru</option>
                <option value="PHL">Philippines</option>
                <option value="PCN">Pitcairn</option>
                <option value="POL">Poland</option>
                <option value="PRT">Portugal</option>
                <option value="PRI">Puerto Rico</option>
                <option value="QAT">Qatar</option>
                <option value="REU">Réunion</option>
                <option value="ROU">Romania</option>
                <option value="RUS">Russian Federation</option>
                <option value="RWA">Rwanda</option>
                <option value="BLM">Saint Barthélemy</option>
                <option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
                <option value="KNA">Saint Kitts and Nevis</option>
                <option value="LCA">Saint Lucia</option>
                <option value="MAF">Saint Martin (French part)</option>
                <option value="SPM">Saint Pierre and Miquelon</option>
                <option value="VCT">Saint Vincent and the Grenadines</option>
                <option value="WSM">Samoa</option>
                <option value="SMR">San Marino</option>
                <option value="STP">Sao Tome and Principe</option>
                <option value="SAU">Saudi Arabia</option>
                <option value="SEN">Senegal</option>
                <option value="SRB">Serbia</option>
                <option value="SYC">Seychelles</option>
                <option value="SLE">Sierra Leone</option>
                <option value="SGP">Singapore</option>
                <option value="SXM">Sint Maarten (Dutch part)</option>
                <option value="SVK">Slovakia</option>
                <option value="SVN">Slovenia</option>
                <option value="SLB">Solomon Islands</option>
                <option value="SOM">Somalia</option>
                <option value="ZAF">South Africa</option>
                <option value="SGS">South Georgia and the South Sandwich Islands</option>
                <option value="SSD">South Sudan</option>
                <option value="ESP">Spain</option>
                <option value="LKA">Sri Lanka</option>
                <option value="SDN">Sudan</option>
                <option value="SUR">Suriname</option>
                <option value="SJM">Svalbard and Jan Mayen</option>
                <option value="SWZ">Swaziland</option>
                <option value="SWE">Sweden</option>
                <option value="CHE">Switzerland</option>
                <option value="SYR">Syrian Arab Republic</option>
                <option value="TWN">Taiwan, Province of China</option>
                <option value="TJK">Tajikistan</option>
                <option value="TZA">Tanzania, United Republic of</option>
                <option value="THA">Thailand</option>
                <option value="TLS">Timor-Leste</option>
                <option value="TGO">Togo</option>
                <option value="TKL">Tokelau</option>
                <option value="TON">Tonga</option>
                <option value="TTO">Trinidad and Tobago</option>
                <option value="TUN">Tunisia</option>
                <option value="TUR">Turkey</option>
                <option value="TKM">Turkmenistan</option>
                <option value="TCA">Turks and Caicos Islands</option>
                <option value="TUV">Tuvalu</option>
                <option value="UGA">Uganda</option>
                <option value="UKR">Ukraine</option>
                <option value="ARE">United Arab Emirates</option>
                <option value="USA">United States</option>
                <option value="UMI">United States Minor Outlying Islands</option>
                <option value="URY">Uruguay</option>
                <option value="UZB">Uzbekistan</option>
                <option value="VUT">Vanuatu</option>
                <option value="VEN">Venezuela, Bolivarian Republic of</option>
                <option value="VNM">Viet Nam</option>
                <option value="VGB">Virgin Islands, British</option>
                <option value="VIR">Virgin Islands, U.S.</option>
                <option value="WLF">Wallis and Futuna</option>
                <option value="ESH">Western Sahara</option>
                <option value="YEM">Yemen</option>
                <option value="ZMB">Zambia</option>
                <option value="ZWE">Zimbabwe</option>
            </select>

            <select name="adultCount" id="adult_count">
                <option value="" selected disabled hidden>No of Adults</option>
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
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
            </select>

            <!-- <select name="childrenCount" id="">
                <option value="" selected disabled hidden>No of Children</option>
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
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
            </select>-->

            <input name="arrivalDate" type="text" id="" class="date_field datepicker" placeholder="Arrival">
            <select name="arrivalTime" id="">
                <option value="" selected disabled hidden>Time</option>
                <option value="09:00">09:00 am</option>
                <option value="09:30">09:30 am</option>
                <option value="10:00">10:00 am</option>
                <option value="10:30">10:30 am</option>
                <option value="11:00">11:00 am</option>
                <option value="11:30">11:30 am</option>
                <option value="12:00">12:00 pm</option>
                <option value="12:30">12:30 pm</option>
                <option value="01:00">01:00 pm</option>
                <option value="01:30">01:30 pm</option>
                <option value="02:00">02:00 pm</option>
                <option value="02:30">02:30 pm</option>
                <option value="03:00">03:00 pm</option>
                <option value="03:30">03:30 pm</option>
                <option value="04:00">04:00 pm</option>
                <option value="04:30">04:30 pm</option>
                <option value="05:00">05:00 pm</option>
                <option value="05:30">05:30 pm</option>
                <option value="06:00">06:00 pm</option>
                <option value="06:30">06:30 pm</option>
                <option value="07:00">07:00 pm</option>
                <option value="07:30">07:30 pm</option>
                <option value="08:00">08:00 pm</option>
            </select>
            <!--<input name="departureDate" type="text" id="" class="date_field datepicker" placeholder="Departure"> -->
	
	    <input name="treatmentType" type="text" placeholder="Treatment Type:">

            <input id="website" type="text" name="website" value="" />

            <!-- <input type="submit"> -->
            <a href="#" data-url="<?php echo $submit_url; ?>" class="submit_btn action_link button_outline gold">Send</a>
        </form>
    </div>

</div>


<!-- Ajax Enquiry Form -->

<script>
$(document).ready(function() {

    $('.enquiryspa_form_container .close_btn').on('click', function(e){
        e.preventDefault();
        $('.enquiryspa_form_container').fadeOut();
    });

    var success_message = "<?php echo (!empty($success_message) ? $success_message : 'Thanks for your enquiry.') ?>";

    $('.enquiryspa_form_container #contact_form .action_link').on('click',function(e){
      // e.preventDefault(); 

      // Hide submit button
      $(this).hide();

      // Serialize form data
      var data = $('.enquiryspa_form_container #contact_form form').serialize();

      var url = $('.enquiryspa_form_container .action_link').attr('data-url');
    
      $.ajax({
        type: "POST",
        url: url,
        data: data,
        success: function(returned_data)
        {
          console.log(returned_data);
          validate(returned_data);

        },
        error: function(jqXHR, textStatus, errorThrown) 
        {
            console.log(textStatus, errorThrown);
        },
        dataType: "json"
        
      });

    });


    function validate(returned_data) 
    {
        // Refresh form from errors
        $('.enquiryspa_form_container #contact_form .error').removeClass('error');
        $('.enquiryspa_form_container #contact_form .error-form-field').removeClass('error-form-field');
        $(".enquiryspa_form_container .error_message").empty();
        $(".error_message").show();


        // FORM DATA
        if(returned_data['error']['firstName'] == false)
        {
            // $('.enquiryspa_form_container #first_name').addClass('error').add().addClass('error-form-field');
            $(".enquiryspa_form_container .error_message").append("<li>Please provide your first name.</li>");
        }

        if(returned_data['error']['surname'] == false)
        {
            // $('.enquiryspa_form_container #surname').addClass('error').add().addClass('error-form-field');
            $(".enquiryspa_form_container .error_message").append("<li>Please provide your surname.</li>");
        }

        if(returned_data['error']['email'] == false)
        {
            // $('.enquiryspa_form_container #email').addClass('error').add().addClass('error-form-field');
            $(".enquiryspa_form_container .error_message").append("<li>Please provide your email address.</li>");
        }

        if(returned_data['error']['userCountry'] == false)
        {
            // $('.enquiryspa_form_container #first_name').addClass('error').add().addClass('error-form-field');
            $(".enquiryspa_form_container .error_message").append("<li>Please provide your Country.</li>");
        }

        if(returned_data['error']['adultCount'] == false)
        {
            // $('.enquiryspa_form_container #first_name').addClass('error').add().addClass('error-form-field');
            $(".enquiryspa_form_container .error_message").append("<li>Please provide the amount of adults.</li>");
        }

        if(returned_data['error']['childrenCount'] == false)
        {
            // $('.enquiryspa_form_container #first_name').addClass('error').add().addClass('error-form-field');
            $(".enquiryspa_form_container .error_message").append("<li>Please provide the amount of children.</li>");
        }

        if(returned_data['error']['arrivalDate'] == false)
        {
            // $('.enquiryspa_form_container #first_name').addClass('error').add().addClass('error-form-field');
            $(".enquiryspa_form_container .error_message").append("<li>Please provide your arrival date.</li>");
        }

        if(returned_data['error']['departureDate'] == false)
        {
            // $('.enquiryspa_form_container #first_name').addClass('error').add().addClass('error-form-field');
            $(".enquiryspa_form_container .error_message").append("<li>Please provide your departure date.</li>");
        }

        
        

        if(returned_data['error']['website'] == false)
        {
            $(".enquiryspa_form_container .error_message").append("<li>You seem to have entered text into a hidden field, you could be a spammer, your enquiry has not been sent.</li>");
        }



        // FORM FAILED
        if(returned_data['success'] == false)
        {
            $(".enquiryspa_form_container .error_message").append("<li>Please fill in all required fields and make sure they are correct.</li>");
            $('.enquiryspa_form_container .action_link').show();
        }

        // FORM SUCCESS
        else if(returned_data['success'] == true)
        {
            $(".enquiryspa_form_container .error_message").hide();
            $(".enquiryspa_form_container #contact_form").append("<div class=\"success_message\" style=\"text-align:center;\"><p>" + success_message + "</p></div>");
            $(".enquiryspa_form_container #contact_form form").remove();
            $('.enquiryspa_form_container').delay(2500).fadeOut();
        }
        
    }
});
</script>