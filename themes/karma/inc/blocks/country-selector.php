<?php
function getCountry($countryVal){
    $countryArr = array(
        "afghanistan" => "Afghanistan",
        "aland islands" => "Aland Islands",
        "albania" => "Albania",
        "algeria" => "Algeria",
        "american samoa" => "American Samoa",
        "andorra" => "Andorra",
        "angola" => "Angola",
        "anguilla" => "Anguilla",
        "antarctica" => "Antarctica",
        "antigua and barbuda" => "Antigua and Barbuda",
        "argentina" => "Argentina",
        "armenia" => "Armenia",
        "aruba" => "Aruba",
        "australia" => "Australia",
        "austria" => "Austria",
        "azerbaijan" => "Azerbaijan",
        "bahamas" => "Bahamas",
        "bahrain" => "Bahrain",
        "bangladesh" => "Bangladesh",
        "barbados" => "Barbados",
        "belarus" => "Belarus",
        "belgium" => "Belgium",
        "belize" => "Belize",
        "benin" => "Benin",
        "bermuda" => "Bermuda",
        "bhutan" => "Bhutan",
        "bolivia" => "Bolivia",
        "bonaire, saint eustatius and saba " => "Bonaire, Saint Eustatius and Saba ",
        "bosnia and herzegovina" => "Bosnia and Herzegovina",
        "botswana" => "Botswana",
        "bouvet island" => "Bouvet Island",
        "brazil" => "Brazil",
        "british indian ocean territory" => "British Indian Ocean Territory",
        "british virgin islands" => "British Virgin Islands",
        "brunei" => "Brunei",
        "bulgaria" => "Bulgaria",
        "burkina faso" => "Burkina Faso",
        "burundi" => "Burundi",
        "cambodia" => "Cambodia",
        "cameroon" => "Cameroon",
        "canada" => "Canada",
        "cape verde" => "Cape Verde",
        "cayman islands" => "Cayman Islands",
        "central african republic" => "Central African Republic",
        "chad" => "Chad",
        "chile" => "Chile",
        "china" => "China",
        "christmas island" => "Christmas Island",
        "cocos islands" => "Cocos Islands",
        "colombia" => "Colombia",
        "comoros" => "Comoros",
        "cook islands" => "Cook Islands",
        "costa rica" => "Costa Rica",
        "croatia" => "Croatia",
        "cuba" => "Cuba",
        "curaçao" => "Curaçao",
        "cyprus" => "Cyprus",
        "czech republic" => "Czech Republic",
        "democratic republic of the congo" => "Democratic Republic of the Congo",
        "denmark" => "Denmark",
        "djibouti" => "Djibouti",
        "dominica" => "Dominica",
        "dominican republic" => "Dominican Republic",
        "east timor" => "East Timor",
        "ecuador" => "Ecuador",
        "egypt" => "Egypt",
        "el salvador" => "El Salvador",
        "equatorial guinea" => "Equatorial Guinea",
        "eritrea" => "Eritrea",
        "estonia" => "Estonia",
        "ethiopia" => "Ethiopia",
        "falkland islands" => "Falkland Islands",
        "faroe islands" => "Faroe Islands",
        "fiji" => "Fiji",
        "finland" => "Finland",
        "france" => "France",
        "french guiana" => "French Guiana",
        "french polynesia" => "French Polynesia",
        "french southern territories" => "French Southern Territories",
        "gabon" => "Gabon",
        "gambia" => "Gambia",
        "georgia" => "Georgia",
        "germany" => "Germany",
        "ghana" => "Ghana",
        "gibraltar" => "Gibraltar",
        "greece" => "Greece",
        "greenland" => "Greenland",
        "grenada" => "Grenada",
        "guadeloupe" => "Guadeloupe",
        "guam" => "Guam",
        "guatemala" => "Guatemala",
        "guernsey" => "Guernsey",
        "guinea" => "Guinea",
        "guinea-bissau" => "Guinea-Bissau",
        "guyana" => "Guyana",
        "haiti" => "Haiti",
        "heard island and mcdonald islands" => "Heard Island and McDonald Islands",
        "honduras" => "Honduras",
        "hong kong" => "Hong Kong",
        "hungary" => "Hungary",
        "iceland" => "Iceland",
        "india" => "India",
        "indonesia" => "Indonesia",
        "iran" => "Iran",
        "iraq" => "Iraq",
        "ireland" => "Ireland",
        "isle of man" => "Isle of Man",
        "israel" => "Israel",
        "italy" => "Italy",
        "ivory coast" => "Ivory Coast",
        "jamaica" => "Jamaica",
        "japan" => "Japan",
        "jersey" => "Jersey",
        "jordan" => "Jordan",
        "kazakhstan" => "Kazakhstan",
        "kenya" => "Kenya",
        "kiribati" => "Kiribati",
        "kosovo" => "Kosovo",
        "kuwait" => "Kuwait",
        "kyrgyzstan" => "Kyrgyzstan",
        "laos" => "Laos",
        "latvia" => "Latvia",
        "lebanon" => "Lebanon",
        "lesotho" => "Lesotho",
        "liberia" => "Liberia",
        "libya" => "Libya",
        "liechtenstein" => "Liechtenstein",
        "lithuania" => "Lithuania",
        "luxembourg" => "Luxembourg",
        "macao" => "Macao",
        "macedonia" => "Macedonia",
        "madagascar" => "Madagascar",
        "malawi" => "Malawi",
        "malaysia" => "Malaysia",
        "maldives" => "Maldives",
        "mali" => "Mali",
        "malta" => "Malta",
        "marshall islands" => "Marshall Islands",
        "martinique" => "Martinique",
        "mauritania" => "Mauritania",
        "mauritius" => "Mauritius",
        "mayotte" => "Mayotte",
        "mexico" => "Mexico",
        "micronesia" => "Micronesia",
        "moldova" => "Moldova",
        "monaco" => "Monaco",
        "mongolia" => "Mongolia",
        "montenegro" => "Montenegro",
        "montserrat" => "Montserrat",
        "morocco" => "Morocco",
        "mozambique" => "Mozambique",
        "myanmar" => "Myanmar",
        "namibia" => "Namibia",
        "nauru" => "Nauru",
        "nepal" => "Nepal",
        "netherlands" => "Netherlands",
        "netherlands antilles" => "Netherlands Antilles",
        "new caledonia" => "New Caledonia",
        "new zealand" => "New Zealand",
        "nicaragua" => "Nicaragua",
        "niger" => "Niger",
        "nigeria" => "Nigeria",
        "niue" => "Niue",
        "norfolk island" => "Norfolk Island",
        "north korea" => "North Korea",
        "northern mariana islands" => "Northern Mariana Islands",
        "norway" => "Norway",
        "oman" => "Oman",
        "pakistan" => "Pakistan",
        "palau" => "Palau",
        "palestinian territory" => "Palestinian Territory",
        "panama" => "Panama",
        "papua new guinea" => "Papua New Guinea",
        "paraguay" => "Paraguay",
        "peru" => "Peru",
        "philippines" => "Philippines",
        "pitcairn" => "Pitcairn",
        "poland" => "Poland",
        "portugal" => "Portugal",
        "puerto rico" => "Puerto Rico",
        "qatar" => "Qatar",
        "republic of the congo" => "Republic of the Congo",
        "reunion" => "Reunion",
        "romania" => "Romania",
        "russia" => "Russia",
        "rwanda" => "Rwanda",
        "saint barthélemy" => "Saint Barthélemy",
        "saint helena" => "Saint Helena",
        "saint kitts and nevis" => "Saint Kitts and Nevis",
        "saint lucia" => "Saint Lucia",
        "saint martin" => "Saint Martin",
        "saint pierre and miquelon" => "Saint Pierre and Miquelon",
        "saint vincent and the grenadines" => "Saint Vincent and the Grenadines",
        "samoa" => "Samoa",
        "san marino" => "San Marino",
        "sao tome and principe" => "Sao Tome and Principe",
        "saudi arabia" => "Saudi Arabia",
        "senegal" => "Senegal",
        "serbia" => "Serbia",
        "serbia and montenegro" => "Serbia and Montenegro",
        "seychelles" => "Seychelles",
        "sierra leone" => "Sierra Leone",
        "singapore" => "Singapore",
        "sint maarten" => "Sint Maarten",
        "slovakia" => "Slovakia",
        "slovenia" => "Slovenia",
        "solomon islands" => "Solomon Islands",
        "somalia" => "Somalia",
        "south africa" => "South Africa",
        "south georgia and the south sandwich islands" => "South Georgia and the South Sandwich Islands",
        "south korea" => "South Korea",
        "south sudan" => "South Sudan",
        "spain" => "Spain",
        "sri lanka" => "Sri Lanka",
        "sudan" => "Sudan",
        "suriname" => "Suriname",
        "svalbard and jan mayen" => "Svalbard and Jan Mayen",
        "swaziland" => "Swaziland",
        "sweden" => "Sweden",
        "switzerland" => "Switzerland",
        "syria" => "Syria",
        "taiwan" => "Taiwan",
        "tajikistan" => "Tajikistan",
        "tanzania" => "Tanzania",
        "thailand" => "Thailand",
        "togo" => "Togo",
        "tokelau" => "Tokelau",
        "tonga" => "Tonga",
        "trinidad and tobago" => "Trinidad and Tobago",
        "tunisia" => "Tunisia",
        "turkey" => "Turkey",
        "turkmenistan" => "Turkmenistan",
        "turks and caicos islands" => "Turks and Caicos Islands",
        "tuvalu" => "Tuvalu",
        "u.s. virgin islands" => "U.S. Virgin Islands",
        "uganda" => "Uganda",
        "ukraine" => "Ukraine",
        "united arab emirates" => "United Arab Emirates",
        "united kingdom" => "United Kingdom",
        "united states" => "United States",
        "united states minor outlying islands" => "United States Minor Outlying Islands",
        "uruguay" => "Uruguay",
        "uzbekistan" => "Uzbekistan",
        "vanuatu" => "Vanuatu",
        "vatican" => "Vatican",
        "venezuela" => "Venezuela",
        "vietnam" => "Vietnam",
        "wallis and futuna" => "Wallis and Futuna",
        "western sahara" => "Western Sahara",
        "yemen" => "Yemen",
        "zambia" => "Zambia",
        "zimbabwe" => "Zimbabwe"
    );
    return $countryArr[$countryVal];
}
?>
