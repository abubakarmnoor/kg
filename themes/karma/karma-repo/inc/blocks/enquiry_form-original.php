<?php 
$submit_url = get_option('home').'/ajax_booking_form_submit.php'; // @TODO
?>
<div class="enquiry_form_container">
    <div id="contact_form">
        <div class="cf">
            <h2 class="form_title">Booking Request</h2>
            <div class="close_btn"></div>
        </div>
        <div class="error_message"></div>
        <form action="<?php echo $submit_url; ?>" method="post">
        	<input type="hidden" name="page_id" value="<?php echo get_the_ID()?>">
            <input name="membershipNumber" id="membershipNumber" type="text" placeholder="Membership No">
            
            <?php
            $karmaResorts = karma_get_destination_pages_resort();
            $karmaRetreats = karma_get_destination_pages_retreat();
            $karmaRoyal = karma_get_destination_pages_royal();
            $karmaEstates = karma_get_destination_pages_estate();
            $page_id = get_the_ID();
            ?>

                        <?php 
                            //echo "<pre>"; echo $page_id .'--'. get_post_meta($page_id, 'booking_url', 1); print_r($page); echo "</pre>"; exit;
                        ?>

            <select name="resortChoice" class="karma_group">
                <option value="" selected disabled>Resort</option>

                <?php
                    $i=0;
                    foreach ($karmaResorts as $page): ?>
                        <?php if(trim(get_post_meta($page->ID, 'booking_url', 1)) == ''){ $resort_opt .= '<option ' . ($page->ID == $page_id ? 'selected="selected"' : '') . ' value="' . $page->post_title . '">'. $page->post_title .' - '. get_post_meta($page->ID, 'resort_location', 1) . '</option>'; $i++;}
                    endforeach; 
                    if($i>0){
                        echo'<optgroup label="Karma Resort">'. $resort_opt .'</optgroup>';
                    }
                ?>
                
                <?php 
                    $i=0;
                    foreach ($karmaRetreats as $page): ?>
                        <?php if(trim(get_post_meta($page->ID, 'booking_url', 1)) == ''){ $retreat_opt .= '<option ' . ($page->ID == $page_id ? 'selected="selected"' : '') . ' value="' . $page->post_title . '">' . $page->post_title .' - '. get_post_meta($page->ID, 'resort_location', 1) . '</option>'; $i++; }
                    endforeach; 

                    if($i>0){
                        echo'<optgroup label="Karma Retreat">'. $retreat_opt .'</optgroup>';
                    }
                ?>

                <?php 
                    $i=0;
                    foreach ($karmaRoyal as $page): ?>
                        <?php if(trim(get_post_meta($page->ID, 'booking_url', 1)) == ''){ $royal_opt .= '<option ' . ($page->ID == $page_id ? 'selected="selected"' : '') . ' value="' . $page->post_title . '">' . $page->post_title .' - '. get_post_meta($page->ID, 'resort_location', 1) . '</option>'; $i++; }
                    endforeach; 

                    if($i>0){
                        echo'<optgroup label="Karma Royal">'. $royal_opt .'</optgroup>';
                    }
                ?>

                <?php 
                    $i=0;
                    foreach ($karmaEstates as $page): ?>
                        <?php if(trim(get_post_meta($page->ID, 'booking_url', 1)) == ''){ $estate_opt .= '<option ' . ($page->ID == $page_id ? 'selected="selected"' : '') . ' value="' . $page->post_title . '">' . $page->post_title .' - '. get_post_meta($page->ID, 'resort_location', 1) . '</option>'; $i++; }
                    endforeach; 

                    if($i>0){
                        echo'<optgroup label="Karma Estate">'. $estate_opt .'</optgroup>';
                    }
                ?>
            </select>

            <select name="travelling" id="travelling">
                <option value="" selected disabled>Are you a:</option>
                <option value="Guest">Guest</option>
                <option value="Member">Member</option>
            </select>

            <input name="firstName" type="text" placeholder="First Name:">
            <input name="surname" type="text" placeholder="Surname:">
            <input name="email" type="text" placeholder="Email:">
            <input name="tel" type="text" placeholder="Tel No">
            
            <select name="userCountry" id="">
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
                <option value="" selected disabled>No of Adults</option>
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

            <select name="childrenCount" id="">
                <option value="" selected disabled>No of Children</option>
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

            <input type="hidden" name="is_india_member" id="is_india_member" value="">
            
            <input name="arrivalDate" type="text" id="" class="date_field datepicker" placeholder="Arrival">
            <input name="departureDate" type="text" id="" class="date_field datepicker" placeholder="Departure">

            <input id="website" type="text" name="website" value="" />

            <!-- <input type="submit"> -->
            <a href="#" data-url="<?php echo $submit_url; ?>" onclick="ga('send', 'event', 'Form Submit', 'Submit', 'Resort', 1);" class="submit_btn action_link button_outline gold">Send</a>
        </form>
    </div>

</div>


<!-- Ajax Enquiry Form -->

<script>
$(document).ready(function() {

    $('option[value="Karma Minoan"]').remove();
    $('option[value="Chateau de Samary"]').remove();

    $('#membershipNumber').change(function(){
    
    // $.getJSON( 'https://odysseypremier.com/find_me.php?t=egKDGrNSKfiViPG4KMcJ2Xdrk9QIkJQ8&m=0000000hml', function( data ) {
    $.getJSON( 'https://karmagroup.com/odyssey_check_status.php?m='+ $.trim($(this).val()), function( data ) {
    console.log(data.status);
    if($.trim(data.status) == 'indian'){
    $('#is_india_member').val('indian');
    }else{
    $('#is_india_member').val('');
    }
    });                   
    });

    $('.enquiry_form_container .close_btn').on('click', function(e){
        e.preventDefault();
        $('.enquiry_form_container').fadeOut();
    });

    var success_message = "<?php echo (!empty($success_message) ? $success_message : 'Thanks for your enquiry.') ?>";

	$('.enquiry_form_container #contact_form .action_link').on('click',function(e){
	
	    
	    //TRACKING CODE PER RESORT YANG DIPILIH
	    var key = $('[name="resortChoice"]').val();
	    $.getJSON('https://karmagroup.com/resortBookingTrackingCode_json.php') 
	    .done (function(data)
	    {
	    
	    var arr = [];
	    for (elem in data) {
	    
	    if(elem == key){
	    
	    $.ajax({
	    url: 'https://karmagroup.com/resortBookingTrackingCode.php?bookingValue='+ $('#adult_count').val() + '&label=' + data[elem],  
	    success: function(data) {
	    console.log(data); 
	    }
	    });                      
	    }
	    }      
	    });
	    //END TRACKING CODE PER RESORT YANG DIPILIH
	    
	if($.trim($('#is_india_member').val()) == ''){
	$.getJSON('https://freegeoip.net/json/') 
	.done (function(location)
	{                    
	if(location.country_name == 'India'){
	$('#is_india_member').val('indian');
	}
	
	// e.preventDefault(); 
	
	// Hide submit button
	$(this).hide();
	
	// Serialize form data
	var data = $('.enquiry_form_container #contact_form form').serialize();
	var url = $('.enquiry_form_container .action_link').attr('data-url');
	
	$.ajax({
	type: "POST",
	url: url,
	data: data,
	success: function(returned_data)
	{
	console.log(returned_data);
	//validate(returned_data);
	},
	error: function(jqXHR, textStatus, errorThrown) 
	{
	console.log(textStatus, errorThrown);
	},
	dataType: "json"
	
	});
	
	});
	}            
	});


    function validate(returned_data) 
    {
        // Refresh form from errors
        $('.enquiry_form_container #contact_form .error').removeClass('error');
        $('.enquiry_form_container #contact_form .error-form-field').removeClass('error-form-field');
        $(".enquiry_form_container .error_message").empty();
        $(".error_message").show();


        // FORM DATA
        if(returned_data['error']['firstName'] == false)
        {
            // $('.enquiry_form_container #first_name').addClass('error').add().addClass('error-form-field');
            $(".enquiry_form_container .error_message").append("<li>Please provide your first name.</li>");
        }

        if(returned_data['error']['surname'] == false)
        {
            // $('.enquiry_form_container #surname').addClass('error').add().addClass('error-form-field');
            $(".enquiry_form_container .error_message").append("<li>Please provide your surname.</li>");
        }

        if(returned_data['error']['email'] == false)
        {
            // $('.enquiry_form_container #email').addClass('error').add().addClass('error-form-field');
            $(".enquiry_form_container .error_message").append("<li>Please provide your email address.</li>");
        }

        if(returned_data['error']['userCountry'] == false)
        {
            // $('.enquiry_form_container #first_name').addClass('error').add().addClass('error-form-field');
            $(".enquiry_form_container .error_message").append("<li>Please provide your Country.</li>");
        }

        if(returned_data['error']['adultCount'] == false)
        {
            // $('.enquiry_form_container #first_name').addClass('error').add().addClass('error-form-field');
            $(".enquiry_form_container .error_message").append("<li>Please provide the amount of adults.</li>");
        }

        if(returned_data['error']['childrenCount'] == false)
        {
            // $('.enquiry_form_container #first_name').addClass('error').add().addClass('error-form-field');
            $(".enquiry_form_container .error_message").append("<li>Please provide the amount of children.</li>");
        }

        if(returned_data['error']['arrivalDate'] == false)
        {
            // $('.enquiry_form_container #first_name').addClass('error').add().addClass('error-form-field');
            $(".enquiry_form_container .error_message").append("<li>Please provide your arrival date.</li>");
        }

        if(returned_data['error']['departureDate'] == false)
        {
            // $('.enquiry_form_container #first_name').addClass('error').add().addClass('error-form-field');
            $(".enquiry_form_container .error_message").append("<li>Please provide your departure date.</li>");
        }

        
        

        if(returned_data['error']['website'] == false)
        {
            $(".enquiry_form_container .error_message").append("<li>You seem to have entered text into a hidden field, you could be a spammer, your enquiry has not been sent.</li>");
        }



        // FORM FAILED
        if(returned_data['success'] == false)
        {
            $(".enquiry_form_container .error_message").append("<li>Please fill in all required fields and make sure they are correct.</li>");
            $('.enquiry_form_container .action_link').show();
        }

        // FORM SUCCESS
        else if(returned_data['success'] == true)
        {
            $(".enquiry_form_container .error_message").hide();
            $(".enquiry_form_container #contact_form").append("<div class=\"success_message\" style=\"text-align:center;\"><p>" + success_message + "</p></div>");
            $(".enquiry_form_container #contact_form form").remove();
            $('.enquiry_form_container').delay(2500).fadeOut();
        }
        
    }
});
</script>