<?php 
$submit_url = get_option('home').'/api/enquiry-spa-wellbeing.php'; // @TODO
$page_id = get_the_ID();
?>
<div class="enquiryspa_form_container" id="spa_and_wellbeing_enquiry">
    <div id="contact_form">
        <div class="cf">
            <h2 class="form_title">Spa and Retreat Booking Request</h2>
            <div class="close_btn" style="margin: 0;"></div>
        </div>
        <div style="text-align: center;display: none;" id="loading-spa">
            <?php 
            include $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/karma/imgs/fb-svg.php';
            ?>
            <p style="text-align: center; color: #ffffff;">Please wait for a moments...</p>
        </div>
        <div class="error_message"></div>
        <div class="success_message" style="text-align:center;display:none;"><p>Thanks for your enquiry.</p></div>
        <form id="spawellbeingformkg" action="<?php echo "https://karmagroup.com/api/enquiry-spa-wellbeing.php"; ?>" method="post">
            <input type="hidden" name="page_id" value="<?php echo get_the_ID()?>">           
            <select id="spachoice" name="spachoice" class="karma_group" >
                <option value="" selected disabled>Spa at</option>
                <optgroup label="Indonesia">
                    <option value="Karma Spa at Karma Kandara" data-tag="karma-kandara">Karma Spa at Karma Kandara</option>
                    <option value="Karma Spa at Karma Jimbaran" data-tag="karma-jimbaran">Karma Spa at Karma Jimbaran</option>
                    <option value="Karma Spa at Karma Mayura" data-tag="karma-mayura">Karma Spa at Karma Mayura</option>
                    <option value="Karma Spa at Karma Reef" data-tag="karma-reef">Karma Spa at Karma Reef</option>
                </optgroup>
                <optgroup label="Australia">
                    <option value="Karma Spa at Karma Rottnest" data-tag="karma-rottnest">Karma Spa at Karma Rottnest</option>                    
                </optgroup>
                <optgroup label="Germany">
                    <option value="Karma Spa at Karma Bavaria" data-tag="karma-bavaria">Karma Spa at Karma Bavaria</option>                      
                <optgroup label="Greece">
                    <option value="Karma Spa at Karma Minoan" data-tag="karma-minoan">Karma Spa at Karma Minoan</option>                    
                </optgroup>
                <optgroup label="Isles of Scilly">
                    <option value="Karma Spa at Karma St. Martins" data-tag="karma-st-martins">Karma Spa at Karma St. Martins</option>                    
                </optgroup>
                <optgroup label="India">
                    <option value="Karma Spa at Karma Royal Haathi Mahal" data-tag="karma-royal-haathi-mahal">Karma Spa at Karma Royal Haathi Mahal</option>
                    <option value="Karma Spa at Karma Royal Monterio" data-tag="karma-royal-monterio">Karma Spa at Karma Royal Monterio</option>
                    <option value="Karma Spa at Karma Royal Palms" data-tag="karma-royal-palms">Karma Spa at Karma Royal Palms</option>
                    <option value="Karma Spa at Karma Royal Benaulim" data-tag="karma-royal-benaulim">Karma Spa at Karma Royal Benaulim</option>
                    <option value="Karma Spa at Karma Chakra" data-tag="karma-chakra">Karma Spa at Karma Chakra</option>
                </optgroup>
            </select>
            <input name="firstName" type="text" placeholder="First Name:">
            <input name="surname" type="text" placeholder="Surname:">
            <input name="email" type="text" placeholder="Email:">
            
            <select name="userCountry" id="countryspa">
                <option selected disabled hidden value="">Country</option>
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

            <input name="arrivalDate" type="text" id="arrival-spa-wellbeing" class="datepicker" data-date-format="dd-mm-yyyy" placeholder="Arrival">
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
            <input name="treatmentType" type="text" placeholder="Treatment Type:">
            <select name="retreat-selector" id="retreat-selector">
                <option value="" selected disabled hidden>Choose your retreats</option>
                <!-- <option value="karma-chakra">Karma Chakra - Kerala</option> -->
            </select>                    
        <input id="website" type="text" name="website" value="" />
        <input type="submit" class="submit_btn action_link button_outline gold" value="Send" style="width: inherit;"/>        
        </form>
    </div>

</div>


<!-- Ajax Enquiry Form -->

<script>
$(document).ready(function() {
    $('#spachoice').on('change', function(e){
        var tag = $(this).find(':selected').data('tag');
        $("#retreat-selector").html('<option value="" selected disabled hidden>Loading available retreats</option>');
        $.ajax({
            type: "GET",
            url: "https://karmagroup.com/api/query-retreats.php?tag=" + tag,
            success: function(result){
                var retreats = result.retreats;
                if(retreats.length === 0){
                    $("#retreat-selector").html('<option value="" selected disabled hidden>No available retreats right now</option>');
                    return false;
                }                
                var html = '<option value="" selected disabled hidden>Choose your retreats</option>';
                for(var i = 0; i < retreats.length; i++){
                    html += '<option value="' + retreats[i] + '">' + retreats[i] + '</option>';
                }                
                $("#retreat-selector").html(html);
            }
        })
    })
    $('.enquiryspa_form_container .close_btn').on('click', function(e){
        e.preventDefault();
        $('.enquiryspa_form_container').fadeOut();
    });    

    var datemoments = moment().format('LL');

    $('#spawellbeingformkg').on('submit',function(e){
      e.preventDefault();       
      $("#spawellbeingformkg").hide();
      $("#spa_and_wellbeing_enquiry #loading-spa").show();

      // Serialize form data
      var data = $('.enquiryspa_form_container#spa_and_wellbeing_enquiry #contact_form form').serialize();

    //   console.log(data);
      var urlspa = $('#spawellbeingformkg').attr('action');                   
            $.ajax({
                type: "POST",
                url: urlspa,
                data: data,
                dataType: "json",
                success: function(returned_data)
                {                                  
                    $("#loading-spa").hide(); 
                    validate(returned_data);
                    data = {
                        'date_submit' : datemoments,
                        'resortChoice' : $('#spachoice').val(),
                        'name' : $("#spawellbeingformkg input[name='firstName']").val() +' '+ $("#spawellbeingformkg input[name='surname']").val(),
                        'email' : $("#spawellbeingformkg input[name='email']").val(),
                        'country' : $('#spawellbeingformkg #countryspa').val(),
                        'adultCount' : $('#spawellbeingformkg #adult_count').val(),
                        'arrivalDate' : $('#spawellbeingformkg #arrival-spa-wellbeing').val(),
                        'arrivalTime' : $('#spawellbeingformkg #arrivalTime23').val(),
                        'treatmentType' : $("#spawellbeingformkg input[name='treatmentType']").val()
                    };
                    
                    var data_warehouse = {
                        FirstName: $("#spawellbeingformkg input[name='firstName']").val(),
                        Surname: $("#spawellbeingformkg input[name='surname']").val(),
                        resortChoice: $("#spawellbeingformkg #spachoice").val(),
                        arrivalDate: $("#spawellbeingformkg #arrival-spa-wellbeing").val(),
                        Country: $("#spawellbeingformkg #countryspa").val(),
                        Email : $("#spawellbeingformkg input[name='email']").val(),
                        lead_source: "Web Site"
                    };
                    console.log({data})
                    console.log({data_warehouse})         
                    if(returned_data.success){
                        $.ajax({
                            type: "POST",
                            url: "<?php echo get_oddysey_api() ?>/email/spaconfirmation",
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
        console.log({returned_data})
        // Refresh form from errors
        $('.enquiryspa_form_container #contact_form .error').removeClass('error');
        $('.enquiryspa_form_container #contact_form .error-form-field').removeClass('error-form-field');
        $(".enquiryspa_form_container#spa_and_wellbeing_enquiry .error_message").empty();
        $("#spa_and_wellbeing_enquiry .error_message").show();
        
        if(returned_data['error'] !== undefined){
            $("#spawellbeingformkg").show();
            if(returned_data['error']['spachoice'] == false)
            {            
                $(".enquiryspa_form_container#spa_and_wellbeing_enquiry .error_message").append("<li>Please select your spa destination.</li>");
            }
            // FORM DATA
            if(returned_data['error']['firstName'] == false)
            {
                // $('.enquiryspa_form_container #first_name').addClass('error').add().addClass('error-form-field');
                $(".enquiryspa_form_container#spa_and_wellbeing_enquiry .error_message").append("<li>Please provide your first name.</li>");
            }

            if(returned_data['error']['surname'] == false)
            {
                // $('.enquiryspa_form_container #surname').addClass('error').add().addClass('error-form-field');
                $(".enquiryspa_form_container#spa_and_wellbeing_enquiry .error_message").append("<li>Please provide your surname.</li>");
            }

            if(returned_data['error']['email'] == false)
            {
                // $('.enquiryspa_form_container #email').addClass('error').add().addClass('error-form-field');
                $(".enquiryspa_form_container#spa_and_wellbeing_enquiry .error_message").append("<li>Please provide your email address.</li>");
            }

            if(returned_data['error']['userCountry'] == false)
            {
                // $('.enquiryspa_form_container #first_name').addClass('error').add().addClass('error-form-field');
                $(".enquiryspa_form_container#spa_and_wellbeing_enquiry .error_message").append("<li>Please provide your Country.</li>");
            }

            if(returned_data['error']['adultCount'] == false)
            {
                // $('.enquiryspa_form_container #first_name').addClass('error').add().addClass('error-form-field');
                $(".enquiryspa_form_container#spa_and_wellbeing_enquiry .error_message").append("<li>Please provide the amount of adults.</li>");
            }

            if(returned_data['error']['childrenCount'] == false)
            {
                // $('.enquiryspa_form_container #first_name').addClass('error').add().addClass('error-form-field');
                $(".enquiryspa_form_container#spa_and_wellbeing_enquiry .error_message").append("<li>Please provide the amount of children.</li>");
            }        
            if(returned_data['error']['arrivalDate'] == false)
            {
                // $('.enquiryspa_form_container #first_name').addClass('error').add().addClass('error-form-field');
                $(".enquiryspa_form_container#spa_and_wellbeing_enquiry .error_message").append("<li>Please provide your arrival date.</li>");
            }   
            if(returned_data['error']['arrivalTime'] == false)
            {            
                $(".enquiryspa_form_container#spa_and_wellbeing_enquiry .error_message").append("<li>Please provide your arrival time.</li>");
            }        

            if(returned_data['error']['website'] == false)
            {
                $(".enquiryspa_form_container#spa_and_wellbeing_enquiry .error_message").append("<li>You seem to have entered text into a hidden field, you could be a spammer, your enquiry has not been sent.</li>");
            }
        }                

        // FORM SUCCESS
        else if(returned_data['success'] == true)
        {
            $(".enquiryspa_form_container .error_message").hide();
            $("#spa_and_wellbeing_enquiry .success_message").show();
            // $("#spawellbeingformkg").show(); 
            $('.enquiryspa_form_container').delay(2500).fadeOut();
        }
        
    }
});
</script>
