<?php
/**
 * Template Name: Landing page - 1
 */

get_header();
?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/lp1/css/slick.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/lp1/css/slick-theme.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/lp1/css/custom.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/lp1/css/custom-m.css"/>

		<section id="header">
			<div id="logo"><img src="<?php echo get_template_directory_uri(); ?>/lp1/images/logo.png"></div>

			<?php
				$rendered = karma_render_blocks(get_the_ID(), array());
				echo $rendered['MainSlider'];
			?>
			<div class="banner_text">
				<h2>GLAMPING COMPETITION</h2>
				<h3>SUBMIT & WIN!</h3>
				<p>Menangkan hadiah menginap di Karma Reef Gili Meno<br>dengan total hadiah senilai</p>
				<p><b>IDR 600.000.000</b></p>				
			</div>			
		</section>

		<section id="content">
			<div class="row darkbg">
				<div class="inner">

					<p>Ikuti Glamping Competition, Karma Reef Gili Meno dan menangkan hadiah utama: </p>
					<p>- Menginap 3 malam di tenda mewah untuk 2 orang<br>
					- Makan pagi di tepi pantai setiap harinya<br>
					- Menikmati pijatan mewah ala Karma Spa untuk 2 orang<br>
					- Transportasi pulang-pergi ke Gili Meno dari bandara Ngurah Rai atau Lombok</p>

					<p>Menangkan juga Instant Bonus Prize berupa voucher menginap senilai IDR 3.000.000 untuk 200 orang yang beruntung!</p>

					<p>Caranya mudah, lengkapi formulir di bawah ini dan kirimkan.</p>

					<?php
						//echo $rendered['Text'];
					?>					
				</div>
			</div>

			<div class="row form_n_map">
				<div class="inner map">

						<div class="col2">

							<div class="form_wrapper">
								
								<div class="form_header">
									<h5>LENGKAPI DATA <strong>ANDA!</strong></h5>
									<p class="mobileBAK" align="center">Pemenang akan dihubungi melalui telepon dan atau email!</p>
								</div>

								<form id="form-563" action="https://mx9.inboxgateway.com/form-process.php" method="post">
										<input type="hidden" name="key" value="563" />
										<input type="hidden" name="uid" value="0" />
										<input type="hidden" name="sid" value="0" />
										<input type="hidden" name="hosted" value="0" />
										<input id="field-1491546089-text" type="hidden" name="field-1491546089" value="<?php echo date("F jS Y, H:i:s a"); ?>">


										<div class="row" style="text-align: left;">
											<select id="field-1490326227-choices" name="field-1490326227">
												<option value="Tuan">Tuan</option>
												<option value="Nona">Nona</option>
												<option value="Nyonya">Nyonya</option>
											</select>
										</div>

										<div class="row i"><input id="field-1490326273-text" type="text" name="field-1490326273" placeholder="Nama lengkap"></div>
										<div class="row i"><input id="field-1490326300-text" type="text" name="field-1490326300" placeholder="Alamat"></div>
										<div class="row i"><input id="field-1490326313-text" type="text" name="field-1490326313" placeholder="Provinsi"></div>
										<div class="row i"><input id="field-1458629139-text" type="email" name="field-1458629139" placeholder="Alamat email"></div>
										<div class="row i"><input id="field-1458629176-text" type="text" name="field-1458629176" placeholder="Nomer telepon"></div>

										<!--<p align="center"><b>Credit Card Type</b></p>
										<div class="row form_radio">						
											<div><input type="radio" name="cc_type" id="Gold" value="Gold" checked><label for="Gold">Gold</label></div>
											<div><input type="radio" name="cc_type" id="Titanium" value="Titanium"><label for="Titanium">Titanium</label></div>
											<div><input type="radio" name="cc_type" id="Platinum" value="Platinum"><label for="Platinum">Platinum</label></div>
											<div><input type="radio" name="cc_type" id="Lainnya" value="Lainnya"><label for="Lainnya">Lainnya</label></div>
											<div><input type="radio" name="cc_type" id="Tidak" value="Tidak Punya"><label for="Tidak">Tidak Punya</label></div>
										</div>
										<p align="center" style="font-size: 12px;">Last vacation you enjoy outside Indonesia ?</p>
										<div><input type="text" name="lastVacation" placeholder="IE. SINGAPORE" class="dark"></div> -->

										<p align="center" class="label">Apakah anda pernah berlibur keluar Indonesia ?</p>

										<div class="row"><input type="radio" name="yes_never" id="yes" value="Ya" checked>&nbsp;<label for="yes">Ya</label></div>

										<p align="center" class="label">Jika iya, sebutkan nama negaranya</p>
										<div class="row">
											<div class="col2">

														<select name="field-1490326526" id="field-1490326526-country">

															<option value="">Negara</option><option value="United States">United States</option><option value="Afghanistan">Afghanistan</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="American Samoa">American Samoa</option><option value="Andorra">Andorra</option><option value="Angola">Angola</option><option value="Anguilla">Anguilla</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Aruba">Aruba</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Botswana">Botswana</option><option value="Brazil">Brazil</option><option value="British Indian Ocean Territory">British Indian Ocean Territory</option><option value="Brunei Darussalam">Brunei Darussalam</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Cape Verde">Cape Verde</option><option value="Cayman Islands">Cayman Islands</option><option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Christmas Island">Christmas Island</option><option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Congo">Congo</option><option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option><option value="Cook Islands">Cook Islands</option><option value="Costa Rica">Costa Rica</option><option value="Cote D'Ivoire">Cote D'Ivoire</option><option value="Croatia">Croatia</option><option value="Cuba">Cuba</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option><option value="Faroe Islands">Faroe Islands</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="French Guiana">French Guiana</option><option value="French Polynesia">French Polynesia</option><option value="French Southern Territories">French Southern Territories</option><option value="Gabon">Gabon</option><option value="Gambia">Gambia</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Greece">Greece</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guadeloupe">Guadeloupe</option><option value="Guam">Guam</option><option value="Guatemala">Guatemala</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option><option value="Honduras">Honduras</option><option value="Hong Kong">Hong Kong</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Jamaica">Jamaica</option><option value="Japan">Japan</option><option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macao">Macao</option><option value="Macedonia">Macedonia</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Marshall Islands">Marshall Islands</option><option value="Martinique">Martinique</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mayotte">Mayotte</option><option value="Mexico">Mexico</option><option value="Micronesia, Federated States of">Micronesia, Federated States of</option><option value="Moldova, Republic of">Moldova, Republic of</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montenegro">Montenegro</option><option value="Montserrat">Montserrat</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Myanmar">Myanmar</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="Netherlands Antilles">Netherlands Antilles</option><option value="New Caledonia">New Caledonia</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Niue">Niue</option><option value="Norfolk Island">Norfolk Island</option><option value="North Korea">North Korea</option><option value="Northern Mariana Islands">Northern Mariana Islands</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Pitcairn">Pitcairn</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Puerto Rico">Puerto Rico</option><option value="Qatar">Qatar</option><option value="Reunion">Reunion</option><option value="Romania">Romania</option><option value="Russian Federation">Russian Federation</option><option value="Rwanda">Rwanda</option><option value="Saint Helena">Saint Helena</option><option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option value="Saint Lucia">Saint Lucia</option><option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option><option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome and Principe">Sao Tome and Principe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option><option value="Serbia">Serbia</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="South Africa">South Africa</option><option value="South Korea">South Korea</option><option value="Spain">Spain</option><option value="Sri Lanka">Sri Lanka</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syrian Arab Republic">Syrian Arab Republic</option><option value="Taiwan, Province of China">Taiwan, Province of China</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania, United Republic of">Tanzania, United Republic of</option><option value="Thailand">Thailand</option><option value="Togo">Togo</option><option value="Tokelau">Tokelau</option><option value="Tonga">Tonga</option><option value="Trinidad and Tobago">Trinidad and Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="Turks and Caicos Islands">Turks and Caicos Islands</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="Uruguay">Uruguay</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Venezuela">Venezuela</option><option value="Viet Nam">Viet Nam</option><option value="Virgin Islands, British">Virgin Islands, British</option><option value="Virgin Islands, U.s.">Virgin Islands, U.s.</option><option value="Wallis and Futuna">Wallis and Futuna</option><option value="Western Sahara">Western Sahara</option><option value="Yemen">Yemen</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option>
														</select>

											</div>
											<div class="col2">

														<select name="field-1490326558" id="field-1490326558-country">

															<option value="">Negara (opsi 2)</option><option value="United States">United States</option><option value="Afghanistan">Afghanistan</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="American Samoa">American Samoa</option><option value="Andorra">Andorra</option><option value="Angola">Angola</option><option value="Anguilla">Anguilla</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Aruba">Aruba</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Botswana">Botswana</option><option value="Brazil">Brazil</option><option value="British Indian Ocean Territory">British Indian Ocean Territory</option><option value="Brunei Darussalam">Brunei Darussalam</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Cape Verde">Cape Verde</option><option value="Cayman Islands">Cayman Islands</option><option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Christmas Island">Christmas Island</option><option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Congo">Congo</option><option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option><option value="Cook Islands">Cook Islands</option><option value="Costa Rica">Costa Rica</option><option value="Cote D'Ivoire">Cote D'Ivoire</option><option value="Croatia">Croatia</option><option value="Cuba">Cuba</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option><option value="Faroe Islands">Faroe Islands</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="French Guiana">French Guiana</option><option value="French Polynesia">French Polynesia</option><option value="French Southern Territories">French Southern Territories</option><option value="Gabon">Gabon</option><option value="Gambia">Gambia</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Greece">Greece</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guadeloupe">Guadeloupe</option><option value="Guam">Guam</option><option value="Guatemala">Guatemala</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option><option value="Honduras">Honduras</option><option value="Hong Kong">Hong Kong</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Jamaica">Jamaica</option><option value="Japan">Japan</option><option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macao">Macao</option><option value="Macedonia">Macedonia</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Marshall Islands">Marshall Islands</option><option value="Martinique">Martinique</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mayotte">Mayotte</option><option value="Mexico">Mexico</option><option value="Micronesia, Federated States of">Micronesia, Federated States of</option><option value="Moldova, Republic of">Moldova, Republic of</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montenegro">Montenegro</option><option value="Montserrat">Montserrat</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Myanmar">Myanmar</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="Netherlands Antilles">Netherlands Antilles</option><option value="New Caledonia">New Caledonia</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Niue">Niue</option><option value="Norfolk Island">Norfolk Island</option><option value="North Korea">North Korea</option><option value="Northern Mariana Islands">Northern Mariana Islands</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Pitcairn">Pitcairn</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Puerto Rico">Puerto Rico</option><option value="Qatar">Qatar</option><option value="Reunion">Reunion</option><option value="Romania">Romania</option><option value="Russian Federation">Russian Federation</option><option value="Rwanda">Rwanda</option><option value="Saint Helena">Saint Helena</option><option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option value="Saint Lucia">Saint Lucia</option><option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option><option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome and Principe">Sao Tome and Principe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option><option value="Serbia">Serbia</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="South Africa">South Africa</option><option value="South Korea">South Korea</option><option value="Spain">Spain</option><option value="Sri Lanka">Sri Lanka</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syrian Arab Republic">Syrian Arab Republic</option><option value="Taiwan, Province of China">Taiwan, Province of China</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania, United Republic of">Tanzania, United Republic of</option><option value="Thailand">Thailand</option><option value="Togo">Togo</option><option value="Tokelau">Tokelau</option><option value="Tonga">Tonga</option><option value="Trinidad and Tobago">Trinidad and Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="Turks and Caicos Islands">Turks and Caicos Islands</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="Uruguay">Uruguay</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Venezuela">Venezuela</option><option value="Viet Nam">Viet Nam</option><option value="Virgin Islands, British">Virgin Islands, British</option><option value="Virgin Islands, U.s.">Virgin Islands, U.s.</option><option value="Wallis and Futuna">Wallis and Futuna</option><option value="Western Sahara">Western Sahara</option><option value="Yemen">Yemen</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option>
														</select>
											</div>
										</div>
										<div class="row">
											<div class="col2">

														<select name="field-1490326584" id="field-1490326584-country">

															<option value="">Negara (opsi 3)</option><option value="United States">United States</option><option value="Afghanistan">Afghanistan</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="American Samoa">American Samoa</option><option value="Andorra">Andorra</option><option value="Angola">Angola</option><option value="Anguilla">Anguilla</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Aruba">Aruba</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Botswana">Botswana</option><option value="Brazil">Brazil</option><option value="British Indian Ocean Territory">British Indian Ocean Territory</option><option value="Brunei Darussalam">Brunei Darussalam</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Cape Verde">Cape Verde</option><option value="Cayman Islands">Cayman Islands</option><option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Christmas Island">Christmas Island</option><option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Congo">Congo</option><option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option><option value="Cook Islands">Cook Islands</option><option value="Costa Rica">Costa Rica</option><option value="Cote D'Ivoire">Cote D'Ivoire</option><option value="Croatia">Croatia</option><option value="Cuba">Cuba</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option><option value="Faroe Islands">Faroe Islands</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="French Guiana">French Guiana</option><option value="French Polynesia">French Polynesia</option><option value="French Southern Territories">French Southern Territories</option><option value="Gabon">Gabon</option><option value="Gambia">Gambia</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Greece">Greece</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guadeloupe">Guadeloupe</option><option value="Guam">Guam</option><option value="Guatemala">Guatemala</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option><option value="Honduras">Honduras</option><option value="Hong Kong">Hong Kong</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Jamaica">Jamaica</option><option value="Japan">Japan</option><option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macao">Macao</option><option value="Macedonia">Macedonia</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Marshall Islands">Marshall Islands</option><option value="Martinique">Martinique</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mayotte">Mayotte</option><option value="Mexico">Mexico</option><option value="Micronesia, Federated States of">Micronesia, Federated States of</option><option value="Moldova, Republic of">Moldova, Republic of</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montenegro">Montenegro</option><option value="Montserrat">Montserrat</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Myanmar">Myanmar</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="Netherlands Antilles">Netherlands Antilles</option><option value="New Caledonia">New Caledonia</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Niue">Niue</option><option value="Norfolk Island">Norfolk Island</option><option value="North Korea">North Korea</option><option value="Northern Mariana Islands">Northern Mariana Islands</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Pitcairn">Pitcairn</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Puerto Rico">Puerto Rico</option><option value="Qatar">Qatar</option><option value="Reunion">Reunion</option><option value="Romania">Romania</option><option value="Russian Federation">Russian Federation</option><option value="Rwanda">Rwanda</option><option value="Saint Helena">Saint Helena</option><option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option value="Saint Lucia">Saint Lucia</option><option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option><option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome and Principe">Sao Tome and Principe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option><option value="Serbia">Serbia</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="South Africa">South Africa</option><option value="South Korea">South Korea</option><option value="Spain">Spain</option><option value="Sri Lanka">Sri Lanka</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syrian Arab Republic">Syrian Arab Republic</option><option value="Taiwan, Province of China">Taiwan, Province of China</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania, United Republic of">Tanzania, United Republic of</option><option value="Thailand">Thailand</option><option value="Togo">Togo</option><option value="Tokelau">Tokelau</option><option value="Tonga">Tonga</option><option value="Trinidad and Tobago">Trinidad and Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="Turks and Caicos Islands">Turks and Caicos Islands</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="Uruguay">Uruguay</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Venezuela">Venezuela</option><option value="Viet Nam">Viet Nam</option><option value="Virgin Islands, British">Virgin Islands, British</option><option value="Virgin Islands, U.s.">Virgin Islands, U.s.</option><option value="Wallis and Futuna">Wallis and Futuna</option><option value="Western Sahara">Western Sahara</option><option value="Yemen">Yemen</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option>
														</select>
											</div>
											<div class="col2">

														<select name="field-1490326611" id="field-1490326611-country">

															<option value="">Negara (opsi 4)</option><option value="United States">United States</option><option value="Afghanistan">Afghanistan</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="American Samoa">American Samoa</option><option value="Andorra">Andorra</option><option value="Angola">Angola</option><option value="Anguilla">Anguilla</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Aruba">Aruba</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Botswana">Botswana</option><option value="Brazil">Brazil</option><option value="British Indian Ocean Territory">British Indian Ocean Territory</option><option value="Brunei Darussalam">Brunei Darussalam</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Cape Verde">Cape Verde</option><option value="Cayman Islands">Cayman Islands</option><option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Christmas Island">Christmas Island</option><option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Congo">Congo</option><option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option><option value="Cook Islands">Cook Islands</option><option value="Costa Rica">Costa Rica</option><option value="Cote D'Ivoire">Cote D'Ivoire</option><option value="Croatia">Croatia</option><option value="Cuba">Cuba</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option><option value="Faroe Islands">Faroe Islands</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="French Guiana">French Guiana</option><option value="French Polynesia">French Polynesia</option><option value="French Southern Territories">French Southern Territories</option><option value="Gabon">Gabon</option><option value="Gambia">Gambia</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Greece">Greece</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guadeloupe">Guadeloupe</option><option value="Guam">Guam</option><option value="Guatemala">Guatemala</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option><option value="Honduras">Honduras</option><option value="Hong Kong">Hong Kong</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Jamaica">Jamaica</option><option value="Japan">Japan</option><option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macao">Macao</option><option value="Macedonia">Macedonia</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Marshall Islands">Marshall Islands</option><option value="Martinique">Martinique</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mayotte">Mayotte</option><option value="Mexico">Mexico</option><option value="Micronesia, Federated States of">Micronesia, Federated States of</option><option value="Moldova, Republic of">Moldova, Republic of</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montenegro">Montenegro</option><option value="Montserrat">Montserrat</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Myanmar">Myanmar</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="Netherlands Antilles">Netherlands Antilles</option><option value="New Caledonia">New Caledonia</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Niue">Niue</option><option value="Norfolk Island">Norfolk Island</option><option value="North Korea">North Korea</option><option value="Northern Mariana Islands">Northern Mariana Islands</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Pitcairn">Pitcairn</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Puerto Rico">Puerto Rico</option><option value="Qatar">Qatar</option><option value="Reunion">Reunion</option><option value="Romania">Romania</option><option value="Russian Federation">Russian Federation</option><option value="Rwanda">Rwanda</option><option value="Saint Helena">Saint Helena</option><option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option value="Saint Lucia">Saint Lucia</option><option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option><option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome and Principe">Sao Tome and Principe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option><option value="Serbia">Serbia</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="South Africa">South Africa</option><option value="South Korea">South Korea</option><option value="Spain">Spain</option><option value="Sri Lanka">Sri Lanka</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syrian Arab Republic">Syrian Arab Republic</option><option value="Taiwan, Province of China">Taiwan, Province of China</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania, United Republic of">Tanzania, United Republic of</option><option value="Thailand">Thailand</option><option value="Togo">Togo</option><option value="Tokelau">Tokelau</option><option value="Tonga">Tonga</option><option value="Trinidad and Tobago">Trinidad and Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="Turks and Caicos Islands">Turks and Caicos Islands</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="Uruguay">Uruguay</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Venezuela">Venezuela</option><option value="Viet Nam">Viet Nam</option><option value="Virgin Islands, British">Virgin Islands, British</option><option value="Virgin Islands, U.s.">Virgin Islands, U.s.</option><option value="Wallis and Futuna">Wallis and Futuna</option><option value="Western Sahara">Western Sahara</option><option value="Yemen">Yemen</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option>
														</select>

											</div>
										</div>

										<div class="row"><input type="radio" name="yes_never" id="never" value="Tidak pernah" checked>&nbsp;<label for="never">Tidak pernah</label></div>

										<div><input type="submit" name="submit" value="DAFTAR SEKARANG"></div>
										<span style="font-size: 12px;color: #fff;"><a id="open_popup_terms" style="color: #fff;"><u>klik disini</u></a> untuk syarat dan ketentuan.</span>

										<div id="popup_terms_overlay"><div id="popup_terms"><div class="popup_close"></div>

												<h3>Syarat dan Ketentuan</h3>
												<div class="scroll">
													<ul>
														<li>- Tergantung pada ketersediaan kamar</li>
														<li>- Tidak berlaku pada tanggal 1 July 2017 - 31 August 2017, 28 December 2017 - 4 January 2018</li>
														<li>- Kompetisi berakhir pada tanggal 30 April 2017</li>
													</uL>
												</div>
										</div></div>


										<div id="field-1458629192"><input id="field-1458629192-text" type="hidden" name="field-1458629192" value="Karma Reef"></div>
										<div id="field-1458629211"><input id="field-1458629211-text" type="hidden" name="field-1458629211" value="Digital"></div>
										<div id="field-1458629226"><input id="field-1458629226-text" type="hidden" name="field-1458629226" value="EDM"></div>
										<div id="field-1458629306"><input id="field-1458629306-text" type="hidden" name="field-1458629306" value="All"></div>
										<div id="field-1458629245"><input id="field-1458629245-text" type="hidden" name="field-1458629245" value="KR | Digital | EDM | w4mar17 | GLAMPING COMPETITION"></div>	
								</form>
							</div>						
						</div>

						<div class="col2">

							<a id="map" target="_blank" href="https://www.google.com/maps/place/Karma+Reef/@-8.3515616,116.0628238,17z/data=!4m12!1m6!3m5!1s0x0:0x9fda40a10916574a!2sGili+Meno+Turtle+Sanctuary!8m2!3d-8.3549379!4d116.0618425!3m4!1s0x0:0xf87054899bfb0c9d!8m2!3d-8.3506562!4d116.061873?hl=en-US"><img src="<?php echo get_template_directory_uri(); ?>/lp1/images/map.jpg" width="100%" height="auto"></a>

							<div class="weather_n_time">
                          		<?php
                              //if ($fields['latitude'] ||  $fields['longitude']) {
                              	$latitude = -8.3515616; //$fields['latitude'];
                              	$longitude = 116.0628238; //$fields['longitude'];
                              	$apiKey = 'b5ffcc4a289283fd6d6798a952412542';
                              	$url = "http://api.openweathermap.org/data/2.5/weather?lat=" . $latitude . "&lon=" . $longitude . "&units=metric&type=like&APPID=" . $apiKey;
                              	$json = file_get_contents($url);
                              	$data = json_decode($json,true);
                              	if (!empty($data['coord'])) {
                              		echo '<div class="weather">';
                              			echo '<div class="left">';
                              				switch ($data['weather'][0]['icon']) 
                              				{
                              					case '01d':
                              						echo '<div class="weather_condition clear_sky" style="background-position: -8px 0;"></div>';
                              						break;
                              					case '02d':
                              						echo '<div class="weather_condition few_clouds" style="background-position: -3px -50px;"></div>';
                              						break;
                              					case '03d':
                              						echo '<div class="weather_condition scattered_clouds" style="background-position: 0px -100px;"></div>';
                              						break;
                              					case '04d':
                              						echo '<div class="weather_condition broken_clouds" style="background-position: 0px -150px;"></div>';
                              						break;
                              					case '09d':
                              						echo '<div class="weather_condition shower_rain" style="background-position: 0 -204px;"></div>';
                              						break;
                              					case '10d':
                              						echo '<div class="weather_condition rain" style="background-position: 0 -252px;"></div>';
                              						break;
                              					case '11d':
                              						echo '<div class="weather_condition thunderstorm" style="background-position: 0 -303px;"></div>';
                              						break;
                              					case '13d':
                              						echo '<div class="weather_condition snow" style="background-position: 0 -354px;"></div>';
                              						break;
                              					case '50d':
                              						echo '<div class="weather_condition mist" style="background-position: 0 -399px;"></div>';
                              						break;
                              					case '01n':
                              						echo '<div class="weather_condition clear_sky" style="background-position: -73px 0px;"></div>';
                              						break;
                              					case '02n':
                              						echo '<div class="weather_condition few_clouds" style="background-position: -73px -50px;"></div>';
                              						break;
                              					case '03n':
                              						echo '<div class="weather_condition scattered_clouds" style="background-position: -73px -103px;"></div>';
                              						break;
                              					case '04n':
                              						echo '<div class="weather_condition broken_clouds" style="background-position: -80px 297px;"></div>';
                              						break;
                              					case '09n':
                              						echo '<div class="weather_condition shower_rain" style="background-position: -80px 246px;"></div>';
                              						break;
                              					case '10n':
                              						echo '<div class="weather_condition rain" style="background-position: -80px 198px;"></div>';
                              						break;
                              					case '11n':
                              						echo '<div class="weather_condition thunderstorm" style="background-position: -80px 147px;"></div>';
                              						break;
                              					case '13n':
                              						echo '<div class="weather_condition snow" style="background-position: -80px 96px;"></div>';
                              						break;
                              					case '50n':
                              						echo '<div class="weather_condition mist" style="background-position: 0 47px;"></div>';
                              						break;
                              				}
                              			echo '</div>';
                              			echo '<div class="right">';
                              			echo '<div class="temp">' . number_format($data['main']['temp']) . '&deg;C' . '</div>';
                              			echo '<p class="condition">' . $data['weather'][0]['main'] . '</p>';
                              			echo '</div>';
                              			echo '</div>';
                              	}
                              	?>

	                           <div class="resort_local_time">
	                              <?php
	                              	$lat = -8.3515616;
	                              	$lon = 116.0628238;
	                                 $resortTimeZone = karma_get_nearest_timezone($lat, $lon);
	                                 $dateTime = new DateTime();
	                                 $timeZone  = new DateTimeZone($resortTimeZone);
	                                 $dateTime->setTimezone($timeZone);
	                                 echo '<div class="time_container">';
	                                 	echo '<div class="left2">';
	                                 		echo '<img src="' . get_template_directory_uri() . '/imgs/icons/clock-gold.png" />';
	                                 	echo '</div>';
	                                 	echo '<div class="right2">';
	                                 		echo '<div id="live_clock" class="time">' . $dateTime->format('H:i') . '</div>';
	                                 		echo '<p class="meridies">' . $dateTime->format('A') . '</p>';
	                                 	echo '</div>';
	                                 echo '</div>';									
	                                 ?>
	                           </div>
							</div>
						</div>

				</div>
			</div>

			<div class="row column3 gallery">

				<h2>GALERI</h2>


				<div class="inner">
					<ul>
						<li class="tent">
							<div>
								<div class="title"><h3>SEA VIEW TENTS</h3></div>
							</div>
						</li>
						<li class="food">
							<div>
								<div class="title"><h3>MAKANAN</h3></div>
							</div>
						</li>
						<li class="spa">
							<div>
								<div class="title"><h3>SPA</h3></div>
							</div>
						</li>										
					</ul>
				</div>

				<div id="gallery_popup">

								<div class="slider_wrapper tent">

									<div class="popup_close"></div>
									<div class="slider slider-for">
										<div><img src="<?php echo get_template_directory_uri(); ?>/lp1/images/gallery/tent_1.jpg"></div>
										<div><img src="<?php echo get_template_directory_uri(); ?>/lp1/images/gallery/tent_2.jpg"></div>
										<div><img src="<?php echo get_template_directory_uri(); ?>/lp1/images/gallery/tent_3.jpg"></div>																												
										<div><img src="<?php echo get_template_directory_uri(); ?>/lp1/images/gallery/tent_4.jpg"></div>
										<div><img src="<?php echo get_template_directory_uri(); ?>/lp1/images/gallery/tent_5.jpg"></div>
									</div>
									
									<div class="slider slider-nav">
										<div><img src="<?php echo get_template_directory_uri(); ?>/lp1/images/gallery/tent_1.jpg"></div>
										<div><img src="<?php echo get_template_directory_uri(); ?>/lp1/images/gallery/tent_2.jpg"></div>
										<div><img src="<?php echo get_template_directory_uri(); ?>/lp1/images/gallery/tent_3.jpg"></div>																												
										<div><img src="<?php echo get_template_directory_uri(); ?>/lp1/images/gallery/tent_4.jpg"></div>
										<div><img src="<?php echo get_template_directory_uri(); ?>/lp1/images/gallery/tent_5.jpg"></div>										
									</div>
								</div>

								<div class="slider_wrapper food">

									<div class="popup_close"></div>

									<div class="slider slider-for">
										<div><img src="<?php echo get_template_directory_uri(); ?>/lp1/images/gallery/food_1.jpg"></div>
										<div><img src="<?php echo get_template_directory_uri(); ?>/lp1/images/gallery/food_2.jpg"></div>
										<div><img src="<?php echo get_template_directory_uri(); ?>/lp1/images/gallery/food_3.jpg"></div>
										<div><img src="<?php echo get_template_directory_uri(); ?>/lp1/images/gallery/food_4.jpg"></div>
										<div><img src="<?php echo get_template_directory_uri(); ?>/lp1/images/gallery/food_5.jpg"></div>
									</div>
									
									<div class="slider slider-nav">
										<div><img src="<?php echo get_template_directory_uri(); ?>/lp1/images/gallery/food_1.jpg"></div>
										<div><img src="<?php echo get_template_directory_uri(); ?>/lp1/images/gallery/food_2.jpg"></div>
										<div><img src="<?php echo get_template_directory_uri(); ?>/lp1/images/gallery/food_3.jpg"></div>
										<div><img src="<?php echo get_template_directory_uri(); ?>/lp1/images/gallery/food_4.jpg"></div>
										<div><img src="<?php echo get_template_directory_uri(); ?>/lp1/images/gallery/food_5.jpg"></div>
									</div>
								</div>

								<div class="slider_wrapper spa">								
									<div class="popup_close"></div>
									<div class="slider slider-for">
										<div><img src="<?php echo get_template_directory_uri(); ?>/lp1/images/gallery/spa_3.jpg"></div>
										<div><img src="<?php echo get_template_directory_uri(); ?>/lp1/images/gallery/spa_1.jpg"></div>
										<div><img src="<?php echo get_template_directory_uri(); ?>/lp1/images/gallery/spa_2.jpg"></div>										
										<div><img src="<?php echo get_template_directory_uri(); ?>/lp1/images/gallery/spa_4.jpg"></div>
										<div><img src="<?php echo get_template_directory_uri(); ?>/lp1/images/gallery/spa_5.jpg"></div>
									</div>
									
									<div class="slider slider-nav">
										<div><img src="<?php echo get_template_directory_uri(); ?>/lp1/images/gallery/spa_3.jpg"></div>
										<div><img src="<?php echo get_template_directory_uri(); ?>/lp1/images/gallery/spa_1.jpg"></div>
										<div><img src="<?php echo get_template_directory_uri(); ?>/lp1/images/gallery/spa_2.jpg"></div>										
										<div><img src="<?php echo get_template_directory_uri(); ?>/lp1/images/gallery/spa_4.jpg"></div>
										<div><img src="<?php echo get_template_directory_uri(); ?>/lp1/images/gallery/spa_5.jpg"></div>
									</div>
								</div>								
				</div>

				<!-- <div class="button"><a href="#">VIEW MORE</a></div> -->
			</div>

<!-- 			<div class="row column3">
				<img src="<?php echo get_template_directory_uri(); ?>/lp1/images/map.jpg" width="100%" height="auto">
			</div> -->
		</section>

<style type="text/css">
	#Zsmenu{display: none!important;}
	#map{
		margin-top: 79px;
		display: table;
	}
	.slider_wrapper{
		border: 5px solid #fff;
		max-width: 960px;
		width: 90%;
		padding: 20px;
		margin: auto;
		margin-top: calc(50vh - 280px);
		background-color: #fff;
		position: relative;
	}
	.slider-for{
		min-height: 100px;
		background: url('<?php echo get_template_directory_uri(); ?>/lp1/images/animated_loading_icon.gif') no-repeat center center;
	}
	.slider-for img{
		height: 300px;
	}

	.slider-nav{
		width: 300px;
		margin: 10px auto 0;
	}
	.slider-nav div{
		margin: 2px;
		padding: 2px;
	}
	.slider-nav img{
		height: 40px;
		width: 80px;
		border: 1px solid #87714d;
		cursor: pointer;
	}

footer{
display: none;
}

#share{
display: table;
margin: 60px auto 0;
}

#lp_footer {
background-color: #212121;
color: #e6e6e6;
display: table;
padding: 10px 15px;
width: 100%;
font-size: 12px;
text-align: center;
margin-top: 50px;
}
#lp_footer a, #lp_footer a:visited{
color: #fff;
}

#floating_image_link{display: none!important;}
</style>


<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-58e740328051771b"></script>
<div id="share">
<div class="addthis_inline_share_toolbox"></div>
</div>

<div id="lp_footer">
<p>&copy; Copyright Karma Group. All Right Reserved. <a href="<?php echo get_option( 'home' ); ?>">www.KarmaGroup.com</a></p>
</div>
<?php get_footer(); ?>
<!-- </div> -->

    <script>
    	// var form_t = $('#form-563').offset().top;
    	// var form_h = $('#form-563').height();
    	// var header_total_h = form_t + form_h + 100;
    	// $('#header').css('height', header_total_h + 'px!important');

        $(document).ready(function() {

        	//__PLACEHOLDER 
        	// $('#form_glamping [placeholder]').each(function(){

        	// 		ph = $(this).attr('placeholder');
        	// 		$(this).val(ph);

        	// 		$(this).click(function(){
		       //  		if($(this).val() == $(this).attr('placeholder')){
		       //  			$(this).val('');
		       //  		}			
        	// 		});

        	// 		$(this).focusout(function(){
		       //  		if($(this).val() == ''){
		       //  			$(this).val($(this).attr('placeholder'));
		       //  		}
        	// 		});
        	// });

        	//////////////////////////


        	$('.gallery li').click(function(){

        		var q = $(this).attr('class');

        		$('.slider_wrapper').hide();
        		$('.slider_wrapper.'+ q).show();
        		$('#gallery_popup').addClass('active');      		
        		$('.slider_wrapper.'+ q +' .slider-nav .slick-slide:nth-child(1)').click();
        	});
        	$('#gallery_popup .popup_close').click(function(){ 
        		$('#gallery_popup').removeClass('active');
        	});

        	$('#open_popup_terms').click(function(){
        		$('#popup_terms_overlay').show();
        	});
        	$('#popup_terms_overlay').click(function(){
        		$(this).hide();
        	});
		});
    </script>



<!-- <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/lp1/js/jquery.js'></script> -->
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/lp1/js/slick.min.js'></script>
<!-- <script type='text/javascript' src="js/jquery-ui.js"></script> -->

<script>

    //$(document).ready(function() {

			$('.slider-for').slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: false,
				fade: true,
				infinite: true,
				asNavFor: '.slider-nav'
			});
			$('.slider-nav').slick({
				slidesToShow: 3,
				slidesToScroll: 1,
				asNavFor: '.slider-for',
				dots: false,
				centerMode: true,
				infinite: true,
				focusOnSelect: true
			});		
    //});
</script>

<script type='text/javascript' src='js/jquery.validate.min.js'></script>

<script>
	// $.validator.setDefaults({
	// 	submitHandler: function() {
	// 		alert("submitted!");
	// 	}
	// });

	$().ready(function() {

		//var rule_c1 = ({country1: "required"});
		//var msg_c1 = ({country1: "required..."});

		$("#form-563").validate({
			rules: {
				"field-1490326273": "required",
				"field-1490326300": "required",
				"field-1490326313": "required",
				"field-1458629139": {
					required: true,
					email: true
				},
				"field-1458629176": "required"
			},
			messages: {
				"field-1490326273": 'required', //"Please enter your full name",
				"field-1490326300": 'required', //"Please enter your address",
				"field-1490326313": 'required', //"Please enter your province",
				"field-1458629139": "Please enter a valid email address",
				"field-1458629176": 'required', //"Please enter your phone"
			}
		});

		$('#form-563').on('submit', function(e) {
	        e.preventDefault();
	        
	        var btn = $(this).find('input[type="submit"]');
	        btn.prop('disabled', false);       
	        var isvalidate = $('#form-563').valid();
	        if (isvalidate) {
	        	btn.prop('disabled', true);
	        	btn.val('please wait...');
		        $.ajax({
		            type: "POST",
		            url: $(this).attr('action'),
		            data:  $(this).serialize(),
		            success: function(data, textStatus, jqXHR) {
		             	//data = returned message (error message or success message as set in your form builder settings)
						// //if confirmation message is set and no error

						if(textStatus == 'success'){
		                	window.location.href = '<?php echo get_option( 'home' ); ?>/thankyou-glamping-competition';
		                }else{
		                	btn.val('DAFTAR SEKARANG');
		                	btn.prop('disabled', false);
		                }
		            }
		        });
	        }
	        return false;
	    });

	});
	</script>