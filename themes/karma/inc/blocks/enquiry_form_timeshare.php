<?php
$submit_url = get_option('home').'/ajax_booking_form_timeshare_submit.php'; // @TODO
?>
<div class="enquiry_form_container timeshare-resort">
    <div id="contact_form">
        <div class="cf">
            <p class="form_title" style="color: #fff;margin-top: 0;display: inline-block;vertical-align: middle;font-size:1.5em;">Request Form</p>
            <div class="close_btn"></div>
        </div>
        <div class="enquiry_form_success" style="display:none"><h3>Thank you, your submission has been sent.</h3></div>
        <div class="enquiry_form_error" style="display:none"><h3>Sorry, an error has occurred when processing your submission.</h3></div>
        <form id="enquiry_form_timeshare" action="" method="post">

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

            <select name="resortChoice" id="resort_choice" class="apply_resort_choice karma_group" style="display:none;" required>



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

            <input name="firstName" type="text" placeholder="First Name:" required>
            <input name="surname" type="text" placeholder="Surname:" required>
            <input name="email" type="email" placeholder="Email:" required>
            <input name="tel" type="text" placeholder="Phone:" required>

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
            <select name="userCountry" id="" required>
              <option value="">Country of Residence</option>
              <?php foreach( $countries as $country_code => $country ){ ?>
                <option value="<?php echo $country_code; ?>"><?php echo $country; ?></option>
              <?php } ?>
            </select>
            <div class="radio-buttons">
              <p>Preferred Holiday Destination</p>
              <label><input type="radio" name="destination" value="South East Asia Pacific" class="required error-validator"> South East Asia Pacific</label><br>
              <label><input type="radio" name="destination" value="India"> India</label><br>
              <label><input type="radio" name="destination" value="Europe"> Europe</label>
            </div>

            <!-- <input type="submit"> -->
            <a href="#" data-url="<?php echo $submit_url; ?>" onclick="ga('send', 'event', 'Form Submit', 'Submit', 'Resort', 1);" class="submit_btn the_action_link button_outline gold">Send</a>
        </form>
    </div>

</div>


<!-- Ajax Enquiry Form -->

<script>
$(document).ready(function() {
  //console.log( karma_theme.timeshare_resort_IDs );
  var resortID = "<?php echo get_the_id(); ?>";

  $('option[value="Chateau de Samary"]').remove();

  $('#enquiry_form_timeshare').validate({
    // Specify the validation rules
    rules: {
        email: {
            required: true,
            email: true
        }
    },
    onsubmit: true,
                errorClass: "error-validator",
    errorElement: "div",
    wrapper: "div",
    errorPlacement: function(error, element) {
        offset = element.offset();
        error.insertBefore(element)
        error.addClass('message-validator');
        error.css('position', 'absolute');
        error.css('left', $(element).position().left + $(element).width() - 145);
    }
        });

  $('#enquiry_form_timeshare').submit(function( event ){
    var isvalid = $(this).valid();

    if( isvalid ){

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

      // Hide submit button
      $('.enquiry_form_container.timeshare-resort #contact_form .the_action_link').hide();

      //var data to send to client
      var dataToSend = JSON.parse(`{
        "submission_date" : "${formatDate(new Date($.now()))}",
        "name" : "${$("input[name=firstName]", this).val()+" "+$("input[name=surname]", this).val()}",
        "email" : "${$("input[name=email]", this).val()}",
        "phone" : "${$("input[name=tel]", this).val()}",
        "country" : "${$( "select[name='userCountry'] option:selected", this).text()}",
        "destination" : "${$("input[name=destination]:checked", this).val()}",
	"resort" : "${$("select[name='resortChoice'] option:selected", this).text()}",
        "source" : "Web"
      }`);
      // console.log(dataToSend);
      // Submit to end point
      
	$.ajax({
                type: "POST",
                url: "https://karmamobileapps.appspot.com/tsauto",
                data: JSON.stringify(dataToSend),
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function(response){
                  if( response ){
                    $('.enquiry_form_success').show();
                    $('#enquiry_form_timeshare').hide();
                  }else{
                    $('.enquiry_form_success').hide();
                    $('.enquiry_form_error').show();
                    $('.enquiry_form_container.timeshare-resort #contact_form .the_action_link').show();
                  }
                },
                error: function(jx, textStatus, errorThrown ) {
                  $('.enquiry_form_success').hide();
                  $('.enquiry_form_error').show();
                  $('.enquiry_form_container.timeshare-resort #contact_form .the_action_link').show();
                }
            });

    }
    //console.log( isvalid );
    event.preventDefault();
  });

  $('.enquiry_form_container.timeshare-resort .close_btn').on('click', function(e){
      e.preventDefault();
      $('.enquiry_form_container').removeClass('show-timeshare');
      $('.enquiry_form_container').removeClass('show-non-timeshare');
      $('.enquiry_form_container').fadeOut(function(){
      $('.enquiry_form_container').hide();
      });
  });

  var success_message = "<?php echo (!empty($success_message) ? $success_message : 'Thanks for your enquiry.') ?>";

  // BOOKING FORM SUBMIT
  $('.enquiry_form_container.timeshare-resort #contact_form .the_action_link').on('click',function(e){
    e.preventDefault();
    $('#enquiry_form_timeshare').submit();
  });

});

function formatDate(date1){
  return date1.getFullYear()+"-"+((date1.getMonth()+1<10) ? "0"+(date1.getMonth()+1) : date1.getMonth()+1) +"-"+((date1.getDate()<10) ? "0"+date1.getDate() : date1.getDate())+" "+
    ((date1.getHours()<10) ? "0"+date1.getHours() : date1.getHours())+":"+((date1.getMinutes()<10) ? "0"+date1.getMinutes() : date1.getMinutes()) +":"+((date1.getSeconds()+1<10) ? "0"+(date1.getSeconds()+1) : (date1.getSeconds()+1));
}
</script>
<style>
  #karma .enquiry_form_container.timeshare-resort.show-non-timeshare{
      display: none !important;
  }

  #karma .enquiry_form_container.show-timeshare{
      display: none !important;
  }

  #karma .enquiry_form_container.timeshare-resort.show-timeshare{
      display: block !important;
  }
  
  #karma #contact_form form .radio-buttons p{
      color: #fff;
      font-size: 1em;
      margin-bottom: .5em;
  }

  #karma #contact_form form .radio-buttons label{
      vertical-align: top;
      font-size: 1em;
      margin-top: 0;
      margin-bottom: .25em;
      display: inline;
  }

  #karma #contact_form form .radio-buttons input{
      display: inline;
      width: auto;
      margin-right: 3px;
  }
  
  #karma #contact_form .enquiry_form_success{
      color: #fff;
      margin-bottom: 20px;
  }

  #karma #contact_form .enquiry_form_error{
      color: #f77;
      margin-bottom: 20px;
  }
  
  #karma #enquiry_form_timeshare .message-validator{
      left: auto !important;
      right: 56px;
      width: auto;
      color: #fff;
      font-size: 14px;
      margin-top: 10px;
      color: #f66;
  }
  
  @media only screen and ( max-width:767px ){
      #karma #enquiry_form_timeshare .message-validator{
          position: initial !important;
          margin-top: 0 !important;
          margin-bottom: 6px;
      }
  }
  
</style>



