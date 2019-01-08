<?php 
$submit_url = get_option('home').'/ajax_spabooking_form_submit.php'; // @TODO
$page_id = get_the_ID();
?>
<div class="enquiryspa_form_container">
    <div id="contact_form">
        <div class="cf">
            <?php if($page_id == '13995' || $page_id == '14002' || $page_id == '14001' || $page_id == '18669'  ){ ?>
                <h2 class="form_title">Resorts Booking Request</h2>
            <?php } else { ?>
                <h2 class="form_title">Spa Booking Request</h2>
            <?php } ?>
            <div class="close_btn"></div>
        </div>
        <div class="error_message"></div>
        <form id="spaformkg" action="<?php echo $submit_url; ?>" method="post">
            <input type="hidden" name="page_id" value="<?php echo get_the_ID()?>">
            <!-- <input name="membershipNumber" type="text" placeholder="Membership No"> -->
            
            <?php
            $karmaResorts = karma_get_destination_pages_resort();
            $karmaRetreats = karma_get_destination_pages_retreat();
            $karmaRoyal = karma_get_destination_pages_royal();
            $karmaEstates = karma_get_destination_pages_estate();
            $karmaSanctum = karma_get_destination_pages_sanctum();
           

            // echo "<pre>";
            // print_r($karmaRetreats);
            // echo "</pre>";
  
            
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

            <select id="resortChoice6" name="resortChoice" class="karma_group" >
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
                         <?php if(($page->ID=='940') || ($page->ID=='889') || ($page->ID=='866') || ($page->ID=='914') || ($page->ID=='6504')) { // 940 Karma Chakra - India; 889 Karma Mayura - Bali; 866 Karma Reef - Indonesia; ?>
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
            </div>
-->

            <input name="firstName" type="text" placeholder="First Name:">
            <input name="surname" type="text" placeholder="Surname:">
            <input name="email" type="text" placeholder="Email:">
            <!-- <input name="tel" type="text" placeholder="Tel No">
 -->
             <select name="userCountry" id="countryspa">
                <option selected disabled hidden>Country</option>
                <option value="Afghanistan">Afghanistan</option>
                <option value="Aland Islands">Aland Islands</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antarctica">Antarctica</option>
                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Bonaire, Saint Eustatius and Saba ">Bonaire, Saint Eustatius and Saba </option>
                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Bouvet Island">Bouvet Island</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                <option value="British Virgin Islands">British Virgin Islands</option>
                <option value="Brunei">Brunei</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos Islands">Cocos Islands</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Curaçao">Curaçao</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="East Timor">East Timor</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands">Falkland Islands</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Territories">French Southern Territories</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guernsey">Guernsey</option>
                <option value="Guinea">Guinea</option>
                <option value="Guinea-Bissau">Guinea-Bissau</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran">Iran</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Isle of Man">Isle of Man</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Ivory Coast">Ivory Coast</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jersey">Jersey</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Kosovo">Kosovo</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Laos">Laos</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libya">Libya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macao">Macao</option>
                <option value="Macedonia">Macedonia</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malawi">Malawi</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Micronesia">Micronesia</option>
                <option value="Moldova">Moldova</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montenegro">Montenegro</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Namibia">Namibia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherlands">Netherlands</option>
                <option value="Netherlands Antilles">Netherlands Antilles</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="North Korea">North Korea</option>
                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau">Palau</option>
                <option value="Palestinian Territory">Palestinian Territory</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Philippines">Philippines</option>
                <option value="Pitcairn">Pitcairn</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Republic of the Congo">Republic of the Congo</option>
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russia">Russia</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Saint Barthélemy">Saint Barthélemy</option>
                <option value="Saint Helena">Saint Helena</option>
                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                <option value="Saint Lucia">Saint Lucia</option>
                <option value="Saint Martin">Saint Martin</option>
                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                <option value="Samoa">Samoa</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Serbia">Serbia</option>
                <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Sint Maarten">Sint Maarten</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                <option value="South Korea">South Korea</option>
                <option value="South Sudan">South Sudan</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syria">Syria</option>
                <option value="Taiwan">Taiwan</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania">Tanzania</option>
                <option value="Thailand">Thailand</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="U.S. Virgin Islands">U.S. Virgin Islands</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Vatican">Vatican</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Vietnam">Vietnam</option>
                <option value="Wallis and Futuna">Wallis and Futuna</option>
                <option value="Western Sahara">Western Sahara</option>
                <option value="Yemen">Yemen</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
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
            </select>
-->

            <input name="arrivalDate" type="text" id="arrivalDate25" class="date_field datepicker" placeholder="Arrival">
            <select name="arrivalTime" id="arrivalTime23">
                <option value="" selected disabled hidden>Time</option>
                <option value="09:00 am">09:00 am</option>
                <option value="09:30 am">09:30 am</option>
                <option value="10:00 am">10:00 am</option>
                <option value="10:30 am">10:30 am</option>
                <option value="11:00 am">11:00 am</option>
                <option value="11:30 am">11:30 am</option>
                <option value="12:00 am">12:00 pm</option>
                <option value="12:30 am">12:30 pm</option>
                <option value="01:00 pm">01:00 pm</option>
                <option value="01:30 pm">01:30 pm</option>
                <option value="02:00 pm">02:00 pm</option>
                <option value="02:30 pm">02:30 pm</option>
                <option value="03:00 pm">03:00 pm</option>
                <option value="03:30 pm">03:30 pm</option>
                <option value="04:00 pm">04:00 pm</option>
                <option value="04:30 pm">04:30 pm</option>
                <option value="05:00 pm">05:00 pm</option>
                <option value="05:30 pm">05:30 pm</option>
                <option value="06:00 pm">06:00 pm</option>
                <option value="06:30 pm">06:30 pm</option>
                <option value="07:00 pm">07:00 pm</option>
                <option value="07:30 pm">07:30 pm</option>
                <option value="08:00 pm">08:00 pm</option>
            </select>
            <!--<input name="departureDate" type="text" id="" class="date_field datepicker" placeholder="Departure"> -->

        <?php if($page_id == '13995' || $page_id == '14002' || $page_id == '14001' || $page_id == '18669'  ){ ?>
             <!-- <input name="treatmentType" type="text" placeholder="Treatment Type:" style="display:none;"> -->
             <input type="hidden" name="spatitle" value="Enquiry Resorts">
        <?php } else {?>
            <input name="treatmentType" type="text" placeholder="Treatment Type:">
            <input type="hidden" name="spatitle" value="Enquiry Spa">
       <?php } ?>

        <?php if($page_id=='14000' || $page_id == '18669' || $page_id=='13999' || $page_id=='13998' || $page_id=='13997' || $page_id=='13996' || $page_id=='13994' || $page_id=='13995' || $page_id=='14002' || $page_id=='14001') { ?>
            <input id="promoCodeskg" name="promoCodeskg" type="text" placeholder="Promo Code">
        <?php } ?>

        <input id="website" type="text" name="website" value="" />

        <input id="offersname" type="hidden" name="offersname" value="" />

            <!-- <input type="submit"> -->
            <a href="#" title="Send" data-url="<?php echo $submit_url; ?>" id="smbspa" class="submit_btn action_link button_outline gold">Send</a>
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

    var datemoments = moment().format('LL');

    $('.enquiryspa_form_container #contact_form #smbspa').on('click',function(e){
      // e.preventDefault(); 

      // Hide submit button
      $(this).hide();

      // Serialize form data
      var data = $('.enquiryspa_form_container #contact_form form').serialize();
      var urlspa = $('#spaformkg').attr('action');

            $.ajax({
                type: "POST",
                url: urlspa,
                data: data,
                dataType: "json",
                success: function(returned_data)
                {    
                    // console.log(returned_data);
		    data = {
                        'date_submit' : datemoments,
                        'resort' : $('#spaformkg #resortChoice6').val(),
                        'name' : $("#spaformkg input[name='firstName']").val() +' '+ $("#spaformkg input[name='surname']").val(),
                        'email' : $("#spaformkg input[name='email']").val(),
                        'country' : $('#spaformkg #countryspa').val(),
                        'no_of_adults' : $('#spaformkg #adult_count').val(),
                        'arrival' : $('#spaformkg #arrivalDate25').val(),
                        'time' : $('#spaformkg #arrivalTime23').val(),
                        'treatment_type' : $("#spaformkg input[name='treatmentType']").val()
                    };
                    
                    var data_warehouse = {
                        FirstName: $("#spaformkg input[name='firstName']").val(),
                        Surname: $("#spaformkg input[name='surname']").val(),
                        resortChoice: $("#spaformkg #resortChoice6").val(),
                        arrivalDate: $("#spaformkg #arrivalDate25").val(),
                        Country: $("#spaformkg #countryspa").val(),
                        Email : $("#spaformkg input[name='email']").val(),
                        lead_source: "Web Site"
                    };
                    validate(returned_data);
                    if(returned_data.success){

                        console.log(data);

                        $.ajax({
                            type: "POST",
                            url: "<?php echo get_karma_api_base_url(); ?>/thank-you-spa",
                            data: data,
                            dataType: "json",
                        }).done(function(data){
                            console.log('send thank you email');
                        }).fail(function() {
                            console.log('Cannot connect to the API.');
                        });
	
			// submit to warehouse
                        $.ajax({
                            type: "POST",
                            url: "https://karmawarehouse.izenoondemand.com/apicollections/whspabooking.php",
                            data: JSON.stringify(data_warehouse),
                            success: function(data) {
                                console.log("submited");
                            },
                            error: function(jqXHR, textStatus, errorThrown){
                                console.log('Cannot connect to the API.');
                                console.log(jqXHR);
                                console.log(textStatus);
                                console.log(errorThrown);
                            }
                        })
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) 
                {
                     console.log(textStatus, errorThrown);
                     console.log('Cant sent email');
                }
                
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
