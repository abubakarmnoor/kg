<?php 
$submit_url = get_option('home').'/ajax_booking_form_submit.php'; // @TODO
?>
<div class="enquiry_form_container" id="contactkglive" >
    <div id="contact_form">
        <div class="cf">
            <p class="form_title" style="color: #fff;margin-top: 0;display: inline-block;vertical-align: middle;font-size:2.00em;">Booking Request</p>
            <div class="close_btn"></div>
        </div>
        <div class="error_message"></div>
        <form action="<?php echo $submit_url; ?>" method="post">
            <input type="hidden" name="page_id" value="<?php echo get_the_ID()?>">
            <input type="hidden" name="test_flag" value="<?php echo (isset($_GET['test']) && $_GET['test'] == 'asdfq3434reqwt234sdxcsdhfgm45ty4sdfgw45tdfg' ? '1' : ''); ?>">
            <!-- <input name="membershipNumber" id="membershipNumber" type="text" placeholder="Membership No"> -->
            
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

            <select name="resortChoice" id="resort_choice" class="karma_group">
                
                <option value="" selected disabled></option>
            

                <?php
                    $i=0;
                    foreach ($karmaResorts as $page): 
                      if(trim(get_post_meta($page->ID, 'booking_url', 1)) == ''){ 
                        $resort_opt .= '<option ' . ($page->ID == $page_id ? 'selected="selected"' : '') . ' value="' . $page->ID . '">'. $page->post_title .' - '. get_post_meta($page->ID, 'resort_location', 1) . '</option>'; 
                        $i++;
                      }
                    endforeach; 
                    if($i>0){
                        echo'<optgroup label="Karma Resort">'. $resort_opt .'</optgroup>';
                    }
                ?>
                
                <?php 
                    $i=0;
                    foreach ($karmaRetreats as $page): 
                      if(trim(get_post_meta($page->ID, 'booking_url', 1)) == ''){
                        $retreat_opt .= '<option ' . ($page->ID == $page_id ? 'selected="selected"' : '') . ' value="' . $page->ID . '">' . $page->post_title .' - '. get_post_meta($page->ID, 'resort_location', 1) . '</option>'; 
                        $i++; 
                      }
                    endforeach; 

                    if($i>0){
                        echo'<optgroup label="Karma Retreat">'. $retreat_opt .'</optgroup>';
                    }
                ?>

                <?php 
                    $i=0;
                    foreach ($karmaRoyal as $page):
                      if(trim(get_post_meta($page->ID, 'booking_url', 1)) == ''){
                        $royal_opt .= '<option ' . ($page->ID == $page_id ? 'selected="selected"' : '') . ' value="' . $page->ID . '">' . $page->post_title .' - '. get_post_meta($page->ID, 'resort_location', 1) . '</option>'; 
                        $i++; 
                      }
                    endforeach; 

                    if($i>0){
                        echo'<optgroup label="Karma Royal">'. $royal_opt .'</optgroup>';
                    }
                ?>

                <?php 
                    $i=0;
                    foreach ($karmaEstates as $page):
                      // 2017-11-08 Hide Chateau de Samary as requested by David H
                      if( $page->ID == 1356 ) 
                        continue;
                      
                      if(trim(get_post_meta($page->ID, 'booking_url', 1)) == ''){
                        $estate_opt .= '<option ' . ($page->ID == $page_id ? 'selected="selected"' : '') . ' value="' . $page->ID . '">' . $page->post_title .' - '. get_post_meta($page->ID, 'resort_location', 1) . '</option>'; 
                        $i++;
                      }
                    endforeach; 

                    if($i>0){
                        echo'<optgroup label="Karma Estate">'. $estate_opt .'</optgroup>';
                    }
                ?>
            </select>

            <select name="travelling" id="travelling">
<?php if(get_the_ID()=='7776') { ?>
<option value="" selected disabled>Are you a:</option>
<option value="Guest">Guest</option>
<option value="Owner" id="owner">Owner</option>
<?php } else {?>
<option value="" selected disabled>Are you a:</option>
<option value="Guest">Guest</option>
<option value="Member" id="member">Member</option>
<option value="Travel Agent" id="travel-agent">Travel Agent</option>
<?php } ?>  
            </select>
            
             <input name="membershipNumber" id="membershipNumber" style="display:none;" type="text" placeholder="Membership No">
             
             <input name="ownershipNumber" id="ownershipNumber" style="display:none;" type="text" placeholder="Ownership No">

            <input name="firstName" type="text" placeholder="First Name:">
            <input name="surname" type="text" placeholder="Surname:">
            <input name="email" type="text" placeholder="Email:">
            <input name="tel" type="text" placeholder="Tel No">
            
            <?php
            {
              $countries = array(
                "GBR" => "United Kingdom",
                "AFG" => "Afghanistan",
                "ALA" => "Åland Islands",
                "ALB" => "Albania",
                "DZA" => "Algeria",
                "ASM" => "American Samoa",
                "AND" => "Andorra",
                "AGO" => "Angola",
                "AIA" => "Anguilla",
                "ATA" => "Antarctica",
                "ATG" => "Antigua and Barbuda",
                "ARG" => "Argentina",
                "ARM" => "Armenia",
                "ABW" => "Aruba",
                "AUS" => "Australia",
                "AUT" => "Austria",
                "AZE" => "Azerbaijan",
                "BHS" => "Bahamas",
                "BHR" => "Bahrain",
                "BGD" => "Bangladesh",
                "BRB" => "Barbados",
                "BLR" => "Belarus",
                "BEL" => "Belgium",
                "BLZ" => "Belize",
                "BEN" => "Benin",
                "BMU" => "Bermuda",
                "BTN" => "Bhutan",
                "BOL" => "Bolivia, Plurinational State of",
                "BES" => "Bonaire, Sint Eustatius and Saba",
                "BIH" => "Bosnia and Herzegovina",
                "BWA" => "Botswana",
                "BVT" => "Bouvet Island",
                "BRA" => "Brazil",
                "IOT" => "British Indian Ocean Territory",
                "BRN" => "Brunei Darussalam",
                "BGR" => "Bulgaria",
                "BFA" => "Burkina Faso",
                "BDI" => "Burundi",
                "KHM" => "Cambodia",
                "CMR" => "Cameroon",
                "CAN" => "Canada",
                "CPV" => "Cape Verde",
                "CYM" => "Cayman Islands",
                "CAF" => "Central African Republic",
                "TCD" => "Chad",
                "CHL" => "Chile",
                "CHN" => "China",
                "CXR" => "Christmas Island",
                "CCK" => "Cocos (Keeling) Islands",
                "COL" => "Colombia",
                "COM" => "Comoros",
                "COG" => "Congo",
                "COD" => "Congo, the Democratic Republic of the",
                "COK" => "Cook Islands",
                "CRI" => "Costa Rica",
                "CIV" => "Côte d'Ivoire",
                "HRV" => "Croatia",
                "CUB" => "Cuba",
                "CUW" => "Curaçao",
                "CYP" => "Cyprus",
                "CZE" => "Czech Republic",
                "DNK" => "Denmark",
                "DJI" => "Djibouti",
                "DMA" => "Dominica",
                "DOM" => "Dominican Republic",
                "ECU" => "Ecuador",
                "EGY" => "Egypt",
                "SLV" => "El Salvador",
                "GNQ" => "Equatorial Guinea",
                "ERI" => "Eritrea",
                "EST" => "Estonia",
                "ETH" => "Ethiopia",
                "FLK" => "Falkland Islands (Malvinas)",
                "FRO" => "Faroe Islands",
                "FJI" => "Fiji",
                "FIN" => "Finland",
                "FRA" => "France",
                "GUF" => "French Guiana",
                "PYF" => "French Polynesia",
                "ATF" => "French Southern Territories",
                "GAB" => "Gabon",
                "GMB" => "Gambia",
                "GEO" => "Georgia",
                "DEU" => "Germany",
                "GHA" => "Ghana",
                "GIB" => "Gibraltar",
                "GRC" => "Greece",
                "GRL" => "Greenland",
                "GRD" => "Grenada",
                "GLP" => "Guadeloupe",
                "GUM" => "Guam",
                "GTM" => "Guatemala",
                "GGY" => "Guernsey",
                "GIN" => "Guinea",
                "GNB" => "Guinea-Bissau",
                "GUY" => "Guyana",
                "HTI" => "Haiti",
                "HMD" => "Heard Island and McDonald Islands",
                "VAT" => "Holy See (Vatican City State)",
                "HND" => "Honduras",
                "HKG" => "Hong Kong",
                "HUN" => "Hungary",
                "ISL" => "Iceland",
                "IND" => "India",
                "IDN" => "Indonesia",
                "IRN" => "Iran, Islamic Republic of",
                "IRQ" => "Iraq",
                "IRL" => "Ireland",
                "IMN" => "Isle of Man",
                "ISR" => "Israel",
                "ITA" => "Italy",
                "JAM" => "Jamaica",
                "JPN" => "Japan",
                "JEY" => "Jersey",
                "JOR" => "Jordan",
                "KAZ" => "Kazakhstan",
                "KEN" => "Kenya",
                "KIR" => "Kiribati",
                "PRK" => "Korea, Democratic People's Republic of",
                "KOR" => "Korea, Republic of",
                "KWT" => "Kuwait",
                "KGZ" => "Kyrgyzstan",
                "LAO" => "Lao People's Democratic Republic",
                "LVA" => "Latvia",
                "LBN" => "Lebanon",
                "LSO" => "Lesotho",
                "LBR" => "Liberia",
                "LBY" => "Libya",
                "LIE" => "Liechtenstein",
                "LTU" => "Lithuania",
                "LUX" => "Luxembourg",
                "MAC" => "Macao",
                "MKD" => "Macedonia, the former Yugoslav Republic of",
                "MDG" => "Madagascar",
                "MWI" => "Malawi",
                "MYS" => "Malaysia",
                "MDV" => "Maldives",
                "MLI" => "Mali",
                "MLT" => "Malta",
                "MHL" => "Marshall Islands",
                "MTQ" => "Martinique",
                "MRT" => "Mauritania",
                "MUS" => "Mauritius",
                "MYT" => "Mayotte",
                "MEX" => "Mexico",
                "FSM" => "Micronesia, Federated States of",
                "MDA" => "Moldova, Republic of",
                "MCO" => "Monaco",
                "MNG" => "Mongolia",
                "MNE" => "Montenegro",
                "MSR" => "Montserrat",
                "MAR" => "Morocco",
                "MOZ" => "Mozambique",
                "MMR" => "Myanmar",
                "NAM" => "Namibia",
                "NRU" => "Nauru",
                "NPL" => "Nepal",
                "NLD" => "Netherlands",
                "NCL" => "New Caledonia",
                "NZL" => "New Zealand",
                "NIC" => "Nicaragua",
                "NER" => "Niger",
                "NGA" => "Nigeria",
                "NIU" => "Niue",
                "NFK" => "Norfolk Island",
                "MNP" => "Northern Mariana Islands",
                "NOR" => "Norway",
                "OMN" => "Oman",
                "PAK" => "Pakistan",
                "PLW" => "Palau",
                "PSE" => "Palestinian Territory, Occupied",
                "PAN" => "Panama",
                "PNG" => "Papua New Guinea",
                "PRY" => "Paraguay",
                "PER" => "Peru",
                "PHL" => "Philippines",
                "PCN" => "Pitcairn",
                "POL" => "Poland",
                "PRT" => "Portugal",
                "PRI" => "Puerto Rico",
                "QAT" => "Qatar",
                "REU" => "Réunion",
                "ROU" => "Romania",
                "RUS" => "Russian Federation",
                "RWA" => "Rwanda",
                "BLM" => "Saint Barthélemy",
                "SHN" => "Saint Helena, Ascension and Tristan da Cunha",
                "KNA" => "Saint Kitts and Nevis",
                "LCA" => "Saint Lucia",
                "MAF" => "Saint Martin (French part)",
                "SPM" => "Saint Pierre and Miquelon",
                "VCT" => "Saint Vincent and the Grenadines",
                "WSM" => "Samoa",
                "SMR" => "San Marino",
                "STP" => "Sao Tome and Principe",
                "SAU" => "Saudi Arabia",
                "SEN" => "Senegal",
                "SRB" => "Serbia",
                "SYC" => "Seychelles",
                "SLE" => "Sierra Leone",
                "SGP" => "Singapore",
                "SXM" => "Sint Maarten (Dutch part)",
                "SVK" => "Slovakia",
                "SVN" => "Slovenia",
                "SLB" => "Solomon Islands",
                "SOM" => "Somalia",
                "ZAF" => "South Africa",
                "SGS" => "South Georgia and the South Sandwich Islands",
                "SSD" => "South Sudan",
                "ESP" => "Spain",
                "LKA" => "Sri Lanka",
                "SDN" => "Sudan",
                "SUR" => "Suriname",
                "SJM" => "Svalbard and Jan Mayen",
                "SWZ" => "Swaziland",
                "SWE" => "Sweden",
                "CHE" => "Switzerland",
                "SYR" => "Syrian Arab Republic",
                "TWN" => "Taiwan, Province of China",
                "TJK" => "Tajikistan",
                "TZA" => "Tanzania, United Republic of",
                "THA" => "Thailand",
                "TLS" => "Timor-Leste",
                "TGO" => "Togo",
                "TKL" => "Tokelau",
                "TON" => "Tonga",
                "TTO" => "Trinidad and Tobago",
                "TUN" => "Tunisia",
                "TUR" => "Turkey",
                "TKM" => "Turkmenistan",
                "TCA" => "Turks and Caicos Islands",
                "TUV" => "Tuvalu",
                "UGA" => "Uganda",
                "UKR" => "Ukraine",
                "ARE" => "United Arab Emirates",
                "USA" => "United States",
                "UMI" => "United States Minor Outlying Islands",
                "URY" => "Uruguay",
                "UZB" => "Uzbekistan",
                "VUT" => "Vanuatu",
                "VEN" => "Venezuela, Bolivarian Republic of",
                "VNM" => "Viet Nam",
                "VGB" => "Virgin Islands, British",
                "VIR" => "Virgin Islands, U.S.",
                "WLF" => "Wallis and Futuna",
                "ESH" => "Western Sahara",
                "YEM" => "Yemen",
                "ZMB" => "Zambia",
                "ZWE" => "Zimbabwe",
              );
            }
            ?>
            <select name="userCountry" id="">
              <option value="">Select Country </option>
              <?php foreach( $countries as $country_code => $country ){ ?>              
                <option value="<?php echo $country_code; ?>"><?php echo $country; ?></option>
              <?php } ?>
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
            <textarea id="holidayRequirements" name="holidayRequirements" placeholder="Your holiday requirements" style="resize: none;height: 145px;"></textarea>

            <input id="website" type="text" name="website" value="" />

            <!-- <input type="submit"> -->
            <a href="#" data-url="<?php echo $submit_url; ?>" onclick="ga('send', 'event', 'Form Submit', 'Submit', 'Resort', 1);" class="submit_btn action_link button_outline gold">Send</a>
        </form>
    </div>

</div>


<!-- Ajax Enquiry Form -->

<script>
$(document).ready(function() {   
  var resortID = "<?php echo get_the_id(); ?>";
  if(resortID === "1331" || resortID === "1285" ){ //check if preverger or pelikanos
    $('#travel-agent').css('display','block');
    $('#holidayRequirements').css("display", "block");
  }
  else{
    $('#travel-agent').css('display','none');
    $('#holidayRequirements').css("display", "none");    
  } 
    //$('option[value="Karma Minoan"]').remove();
    $('option[value="Chateau de Samary"]').remove();
    
    $('#travelling').on('change', function() {      
    var category = $(this).val();    
    if (category === 'Member') {
    $('#membershipNumber').css("display", "block");
    }
    
    if (category === 'Owner') {
    $('#ownershipNumber').css("display", "block");
    }
    
    if (category === 'Guest' || category === "Travel Agent") {
      $("#membershipNumber").val("");
      $('#is_india_member').val("");
      $('#membershipNumber').css("display", "none");
    }
    
    if (category === 'Guest' || category === "Travel Agent") {
    $('#ownershipNumber').css("display", "none");
    }
    
    });

    $('#membershipNumber,#ownershipNumber').change(function(){
      // $.getJSON( 'https://odysseypremier.com/find_me.php?t=egKDGrNSKfiViPG4KMcJ2Xdrk9QIkJQ8&m=0000000hml', function( data ) {
      $.getJSON( 'https://karmagroup.com/odyssey_check_status.php?m='+ $.trim($(this).val()), function( data ) {
        //console.log(data.status);
        if($.trim(data.status) == 'indian'){
          $('#is_india_member').val('indian');
        }else if($.trim(data.status) == 'non indian'){
          $('#is_india_member').val('nonindian');
        }else{
          $('#is_india_member').val('');
  	}
      });                   
    });
    
    // If Chateau de Samary - France then begin opening date is 27-04-2017 -> 26-10-2017
    window.selectedResort = '';
    $('#resort_choice').change(function(){
      if( $(this).val() == '1356' ){
        var dMin = new Date( '04/27/2019' );
        var dMax = new Date( '10/25/2019' );
        var dMin2 = new Date( '04/28/2019' );
        var dMax2 = new Date( '10/26/2019' );
        $('input[name="arrivalDate"]').datepicker( "option", 'minDate', dMin );
        $('input[name="arrivalDate"]').datepicker( "option", 'maxDate', dMax );
        $('input[name="departureDate"]').datepicker( "option", 'minDate', dMin2 );
        $('input[name="departureDate"]').datepicker( "option", 'maxDate', dMax2 );
        window.selectedResort = '1356';
      }
      else if($(this).val() === "1331" || $(this).val() === "1285" ){
        if($('#travel-agent').css('display') != "block" && $('#holidayRequirements').css("display") != "block"){          
          $('#travel-agent').css('display','block');
          $('#holidayRequirements').css("display", "block");
        }                
      }
      else{
        if($('#travel-agent').css('display') == "block" && $('#holidayRequirements').css("display") == "block"){          
          if($('#travelling').val() == "Travel Agent"){ //if travelling has change to travel agent
            $('#travelling').val("Guest");
          }
          $('#travel-agent').css('display','none');
          $('#holidayRequirements').css("display", "none");
          $('#holidayRequirements').val("");
        }        
        if( window.selectedResort == '1356' ){
          var dMin = new Date( '<?php echo date('m/d/Y'); ?>' );
          var dMin2 = new Date( '<?php echo date('m/d/Y', strtotime('tomorrow')); ?>' );
          $('input[name="arrivalDate"]').datepicker( "option", 'minDate', dMin );
          $('input[name="arrivalDate"]').datepicker( "option", 'maxDate', null );
          $('input[name="departureDate"]').datepicker( "option", 'minDate', dMin2 );
          $('input[name="departureDate"]').datepicker( "option", 'maxDate', null );
          window.selectedResort = '';
        }
      }
    });
    
    // Set minimum date after the arrival date
    $('input[name="arrivalDate"]').datepicker(
      "option", 
      "onSelect", 
      function(dateText, inst){
        var minCO = $(this).datepicker("getDate");
        minCO.setDate(minCO.getDate() + 1);
        $('input[name="departureDate"]').datepicker( "option", "minDate", minCO );
      }
    );
    

    $('.enquiry_form_container .close_btn').on('click', function(e){      
        e.preventDefault();
        $('.timeshare-resort').removeClass('show-timeshare');
        $('.timeshare-resort').removeClass('show-non-timeshare');
        $('.enquiry_form_container').fadeOut();
    });

    var success_message = "<?php echo (!empty($success_message) ? $success_message : 'Thanks for your enquiry.') ?>";

    // BOOKING FORM SUBMIT
    $('.enquiry_form_container #contact_form .action_link').on('click',function(e){
	
	    //TRACKING CODE PER RESORT YANG DIPILIH
	    var key = $('[name="resortChoice"]').val();
	    $.getJSON('https://karmagroup.com/resortBookingTrackingCode_json.php') 
	    .done (function(data){
        var arr = [];
        for (elem in data) {
          if(elem == key){
            $.ajax({
              url: 'https://karmagroup.com/resortBookingTrackingCode.php?bookingValue='+ $('#adult_count').val() + '&label=' + data[elem],  
              success: function(data) {
                // console.log(data); 
              }
            });
          }
        }
	    });
	    //END TRACKING CODE PER RESORT YANG DIPILIH
	    
      // CHECK USER COUNTRY JIKA BUKAN INDIA MEMBER
      if($.trim($('#is_india_member').val()) == ''){
        $.getJSON('https://freegeoip.net/json/') 
        .done (function(location){
          if(location.country_name == 'India'){
            $('#is_india_member').val('indian');
          }
        });
      }
      
      // e.preventDefault(); 
      
      // Hide submit button
      $(this).hide();
      
      // Serialize form data
      var data = $('#contactkglive #contact_form form').serialize();
      var url = $('.enquiry_form_container .action_link').attr('data-url');
      
      // AJAX POST FORM
      $.ajax({
        type: "POST",
        url: url,
        data: data,
        success: function(returned_data){
          // console.log(returned_data);
          validate(returned_data);
	   $.ajax({
              type: "POST",
              url: "https://karmawarehouse.izenoondemand.com/apicollections/whsubmitrequest.php",
              contentType: "application/json",
              data: JSON.stringify({
                memberNumber: $("select[name='travelling']").val() == "Member" ? $("input[name='membershipNumber']").val() : "",
                firstName: $("input[name='firstName']").val(),
                surname: $("input[name='surname']").val(),
                email: $("input[name='email']").val(),
                tel: $("input[name='tel']").val(),
                destination: $("select[name='resortChoice'] option:selected").text(),
                userCountry: $("select[name='userCountry'] option:selected").text(),
                arrival: $("input[name='arrivalDate']").val(),
                departure: $("input[name='departureDate']").val(),                
                description: $("textarea[name='holidayRequirements']").val(),
                lead_source: "Web Site"                
              }),
              success: function(response){
                $(".enquiry_form_container .error_message").hide();
                $(".enquiry_form_container #contact_form").append("<div class=\"success_message\" style=\"text-align:center;\"><p>" + success_message + "</p></div>");
                $(".enquiry_form_container #contact_form form").css("display", "none");
                // $('.enquiry_form_container').delay(2500).fadeOut();   
                window.location.href = "https://dev.karmagroup.com/WP/reservation/index.php?propertyid="+ $('#resort_choice').val();                
              },
              error: function(jx, textStatus, errorThrown ) {
                console.log("err")
              }
            }) 
        },
        error: function(jqXHR, textStatus, errorThrown){
          // console.log(textStatus, errorThrown);
        },
        dataType: "json"
      });
      
    });


    function validate(returned_data) 
    {
        // Refresh form from errors
        $('.enquiry_form_container #contact_form .error').removeClass('error');
        $('.enquiry_form_container #contact_form .error-form-field').removeClass('error-form-field');
        $(".enquiry_form_container .error_message").empty();
        $(".error_message").show();


        // FORM DATA
        if(returned_data['error']['resortChoice'] == false)
        {
            $(".enquiry_form_container .error_message").append("<li>Please choose a resort.</li>");
        }
        
        // FORM DATA
        if(returned_data['error']['travelling'] == false)
        {
            $(".enquiry_form_container .error_message").append("<li>Please choose either member or guest traveling.</li>");
        }
        
        // FORM DATA
        if(returned_data['error']['firstName'] == false)
        {
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
            console.log("success");
        }
        
    }
});
</script>

