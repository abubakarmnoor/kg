<style>
                                .content1{
                                text-align: center;
                                font-size: 30px;
                                font-weight: 400!important;
                                }
                                .content2{
                                text-align: center;
                                font-size: 18px;
                                color: #8d7249 !important;
                                font-weight: 500!important;
                                }
                                .content3{
                                text-align: center;
                                font-size: 14px;
                                font-weight: 400!important;
                                }
                                .block2{
                                width:50%;
                                float:left;
                                }
                                .right img.responsive_banner{
                                        width: 100%!important;
                                        max-width: 600px!important;
                                        margin-left: 0!important;
                                }
                                #btn-exclusive-ski.button_outline.gold{
                                        margin-left: 25px;
                                }
                                @media screen and (max-width: 1024px) {
                                #karma .white_button{
                                text-align: center;
                                width: 100%;
                                }
                                .best_value_btn{
                                margin-top:10px;
                                margin-left: 0;
                                width: 100%;
                                }
                                }
                </style>

<?php

//include("/karmawp/wp-content/themes/karma/inc/lang.php");
$timeshare_resort = get_field('timeshare_resort', get_the_ID());
if(trim(get_post_meta(get_the_ID(), 'booking_url', 1)) != ''){
    $language['en']['location_btn_booknow'] = 'Book Now';
    $language['de']['location_btn_booknow'] = 'Online Buchen';
}else{
    $language['en']['location_btn_booknow'] = 'Submit Request';
    $language['de']['location_btn_booknow'] = 'Online Buchen';
    if ($timeshare_resort){
        $language['en']['location_btn_booknow'] = 'More Information';
        //$language['de']['location_btn_booknow'] = 'Mehr Informationen';
    }
}

//if(get_the_ID() == '1331'){
    //$language['en']['location_btn_booknow'] = 'Enquire Now';
//}

//CEK LANGUAGE
$lang = 'en';
if(!isset($_GET['lang'])){

    $lang = 'en';
}else{

    $lang = $_GET['lang'];
}
//////////////////////////////////////////////

$fields = array(
        'left_content' => get_sub_field('left_content'),
        'right_content' => get_sub_field('right_content'),
        'right_content_2' => get_sub_field('right_content_2'),
        'background_image' => get_sub_field('background_image'),
        'booking_url' => get_sub_field('booking_url')
);
$html = '<div id="welcome_booking" class="cf" style="';
$html .= (!empty($fields['background_image'])) ? 'background: url(\''.$fields['background_image']['sizes']['large'].'\'); background-size: cover;' : '';
$html .= '">';


if(get_the_ID()=='731') {

        $lang_flag = '<div style="position: absolute; right: 30px; top: 0;">Language <span style="position:relative; top: 5px;"><a href="de?lang=de"><img src="'. get_option( 'siteurl' ).'/wp-content/themes/karma/imgs/icons/lang/de.jpg" width="32" height: auto;></span></a></div>';

}else if(get_the_ID()=='3143') {

        $lang_flag = '<div style="position: absolute; right: 30px; top: 0;">Language <span style="position:relative; top: 5px;"><a href="../?lang=en"><img src="'. get_option( 'siteurl' ).'/wp-content/themes/karma/imgs/icons/lang/en.jpg" width="32" height: auto;></span></a></div>';

}else{
        $lang_flag = '';
}

$html .= '<div class="left" style="position: relative;">'. $lang_flag . $fields['left_content'].'</div>
              <div class="right">
                        <div class="content_upper">'. $fields['right_content'];
                                        if (strstr(get_page_template(), 'page-resort.php') == false){
                                                $html .= karma_getFindAResortMenu();
                                        }else{
                                                $html .= '<a ';
                                                //original code:
                                                /*
                                                if(get_the_ID()=='731') { // karma+bavaria
                                                        $html .= ($fields['booking_url']) ? 'onclick="onClick="ga(\'Send\', \'event\', \'Karma Resort - Bavaria\', \'Submit\', \'Book Online\', 1);" href="'.$fields['booking_url'].'"' : 'onclick="showEnquiryForm();"';
                                                }
                                                else if(get_the_ID()=='837') { // karma+jimbaran
                                                        $html .= ($fields['booking_url']) ? 'onclick="onClick="ga(\'Send\', \'event\', \'Karma Resort - Jimbaran\', \'Submit\', \'Book Online\', 1);" href="'.$fields['booking_url'].'"' : 'onclick="showEnquiryForm();"';
                                                }
                                                else if(get_the_ID()=='837') { // karma+kandara
                                                        $html .= ($fields['booking_url']) ? 'onclick="onClick="ga(\'Send\', \'event\', \'Karma Resort - Kandara\', \'Submit\', \'Book Online\', 1);" href="'.$fields['booking_url'].'"' : 'onclick="showEnquiryForm();"';
                                                }
                                                else if(get_the_ID()=='837') { // Karma+Rottnest
                                                        $html .= ($fields['booking_url']) ? 'onclick="onClick="ga(\'Send\', \'event\', \'Karma Resort - Rottnest\', \'Submit\', \'Book Online\', 1);" href="'.$fields['booking_url'].'"' : 'onclick="showEnquiryForm();"';
                                                }
                                                else if(get_the_ID()=='866') { // Karma+Reef
                                                        $html .= ($fields['booking_url']) ? 'onclick="onClick="ga(\'Send\', \'event\', \'Karma Resort - Reef\', \'Submit\', \'Book Online\', 1);" href="'.$fields['booking_url'].'"' : 'onclick="showEnquiryForm();"';
                                                }
                                                else {
                                                        $html .= ($fields['booking_url']) ? 'onclick="onClick="ga(\'send\', \'event\', \'Link\', \'Submit\', \'Book Online\', 1);" href="'.$fields['booking_url'].'"' : 'onclick="showEnquiryForm();"';
                                                }
                                                */

                                                if(get_the_ID()=='731') { // karma+bavaria
                                                        $html .= ($fields['booking_url']) ? 'onclick="" href="'.$fields['booking_url'].'"' : 'onclick="showEnquiryForm();"';
                                                }
                                                else if(get_the_ID()=='837') { // karma+jimbaran
                                                        $html .= ($fields['booking_url']) ? 'onclick="" href="'.$fields['booking_url'].'"' : 'onclick="showEnquiryForm();"';
                                                }
                                                else if(get_the_ID()=='193') { // karma+kandara
                                                        $html .= ($fields['booking_url']) ? 'onclick="" href="'.$fields['booking_url'].'"' : 'onclick="showEnquiryForm();"';
                                                }
                                                else if(get_the_ID()=='802') { // Karma+Rottnest
                                                        $html .= ($fields['booking_url']) ? 'onclick="" href="'.$fields['booking_url'].'"' : 'onclick="showEnquiryForm();"';
                                                }
                                                else if(get_the_ID()=='866') { // Karma+Reef
                                                        $html .= ($fields['booking_url']) ? 'onclick="" href="'.$fields['booking_url'].'"' : 'onclick="showEnquiryForm();"';
                                                }
                                                else if(get_the_ID()=='914') { //St.Martin
                                                        $html .= ($fields['booking_url']) ? 'onclick="" href="'.$fields['booking_url'].'"' : 'onclick="showEnquiryForm();"';
                                                }
                                                else {
                                                        $html .= ($fields['booking_url']) ? 'onclick="ga(\'send\', \'event\', \'Link\', \'Submit\', \'Book Online\', 1);" href="'.$fields['booking_url'].'"' : 'onclick="showEnquiryForm();"';
                                                }


                                                //script Best Value Guarantee
                                                // custom bavaria, jimbaran, reef, st.martin, rottnest
                                                if(get_the_ID()=='193' || get_the_ID()=='731' || get_the_ID()=='837' || get_the_ID()=='866' || get_the_ID()=='914' || get_the_ID()=='802' || get_the_ID()=='3143' || get_the_ID()=='11522' || get_the_ID()=='11873' ) { //Karma Kandara	
                                                    $html .= ' class="white_button" title="Book Now">'. $language[$lang]['location_btn_booknow'] .'</a>
                                                    <a href="#" alt="Best Value Guarantee" title="Best Value Guarantee"><div class="best_value_btn bvg"></div></a>';											
                                                }						
                                                else{
                                                    $html .= ' class="white_button submitbkkg" title="Book Now">'. $language[$lang]['location_btn_booknow'] .'</a>
                                                    <div title="Lowest Value Guarantee" class="best_value_btn" title="Lowest Value Guarantee"></div>';
                                                }	
                                        }
if(get_the_ID() == '731'){
// $html .= '<a id="btn-exclusive-ski" class="button_outline gold"  href="https://karmagroup.com/exclusive_offers/just-add-snow/" title="Exclusive Ski Offer">Exclusive Ski Offer</a>';
}

if(get_the_ID()=='3143') { // karma+bavaria DE
// $html .='<a id="btn-exclusive-ski" class="button_outline gold" href="https://karmagroup.com/exclusive_offers/just-add-snow-germany/" title="Exclusive Ski Offer">Exclusive Ski Offer</a>';
}



        $html .= '</div><div>'. $fields['right_content_2'] .'</div>';
        $html .= '<!-- .content_upper -->
        <!-- MAP resort '.get_the_ID().' -->
                                <!--<div id="find_destination_map">
                                                <div class="google-maps">';

                                                        //
                                                        // display google map
                                                        //

                                                        if(get_the_ID()=='731') { // karma+bavaria
                                                                //$html .= '<iframe src="https://www.google.com/maps/embed/v1/search?q=karma+bavaria&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU" width="951" height="300"></iframe>'; // 731
                                                        }
                                                        else if(get_the_ID()=='3143') { // karma+bavaria DE
                                                                $html .= '<iframe src="https://www.google.com/maps/embed/v1/search?q=karma+bavaria&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU" width="951" height="300"></iframe>'; // 3143
                                                        }
                                                        else if(get_the_ID()=='782') { // Karma+Haveli
                                                                $html .= '<iframe src="https://www.google.com/maps/embed/v1/search?q=Karma+Haveli&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU" width="951" height="300"></iframe>'; //782
                                                        }
                                                        else if(get_the_ID()=='837') { // karma+jimbaran
                                                                $html .= '<iframe src="https://www.google.com/maps/embed/v1/place?q=karma+jimbaran&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU" width="951" height="300"></iframe>'; // 837
                                                        }
                                                        else if(get_the_ID()=='193') { // Karma+Kandara
                                                                $html .= '<iframe src="https://www.google.com/maps/embed/v1/search?q=Karma+Kandara+Resorts+Bali,+Ungasan,+Badung+Regency,+Bali,+Indonesia&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU" width="951" height="300"></iframe>'; // 193
                                                        }
                                                        else if(get_the_ID()=='802') { // Karma+Rottnest
                                                                $html .= '<iframe src="https://www.google.com/maps/embed/v1/search?q=Karma+Rottnest,+Rottnest+Island,+Western+Australia,+Australia&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU" width="951" height="300"></iframe>'; // 802
                                                        }
                                                        else if(get_the_ID()=='940') { // Karma+Chakra
                                                                $html .= '<iframe src="https://www.google.com/maps/embed/v1/place?q=Karma+Chakra,+Kumarakom,+Kerala,+India&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU" width="951" height="300"></iframe>'; //940
                                                        }
                                                        else if(get_the_ID()=='889') { // karma+mayura
                                                                $html .= '<iframe src="https://www.google.com/maps/embed/v1/place?q=karma+mayura&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU" width="951" height="300"></iframe>'; // 889
                                                        }
                                                        else if(get_the_ID()=='866') { // Karma+Reef
                                                                $html .= '<iframe src="https://www.google.com/maps/embed/v1/place?q=Karma+Reef&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU" width="951" height="300"></iframe>'; // 866
                                                        }
                                                        else if(get_the_ID()=='914') { // Karma+St.+Martin
                                                                $html .= '<iframe src="https://www.google.com/maps/embed/v1/place?q=Karma+St.+Martin\'s,+Saint+Martin\'s,+United+Kingdom&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU" width="951" height="300"></iframe>'; // 914
                                                        }
                                                        else if(get_the_ID()=='963') { // Hoi+An
                                                                $html .= '<iframe src="https://maps.google.com/maps?q=Karma Caytre, Hội An, Quang Nam Province, Vietnam, &t=&z=15&ie=UTF8&iwloc=&output=embed" width="951" height="300"></iframe>'; // 963
                                                        }
                                                        else if(get_the_ID()=='988') { // karma+monterio
                                                                $html .= '<iframe src="https://www.google.com/maps/embed/v1/place?q=karma+monterio&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU" width="951" height="300"></iframe>'; // 988
                                                        }
                                                        else if(get_the_ID()=='1012') { // Royal+Bella+Vista
                                                                $html .= '<iframe src="https://www.google.com/maps/embed/v1/place?q=Royal+Bella+Vista+Country+Club&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU" width="951" height="300"></iframe>'; // 1012
                                                        }
                                                        else if(get_the_ID()=='1037') { // Karma Royal Boat Lagoon
                                                                $html .= '<iframe src="https://www.google.com/maps/embed/v1/place?q=22/1+Moo+2+Thepkasattri+Rd.+T.+Kohkaew+A.+Muang,+Phuket+83200+Thailand&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU" width="951" height="300"></iframe>'; // 1037
                                                        }
                                                        else if(get_the_ID()=='1058') { // Karma+Royal+Resort+Candidasa
                                                                $html .= '<iframe src="https://www.google.com/maps/embed/v1/search?q=Karma+Royal+Resort+Candidasa,+Bali,+Indonesia&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU" width="951" height="300"></iframe>'; // 1058
                                                        }
                                                        else if(get_the_ID()=='1213') { // karma+royal+palms
                                                                $html .= '<iframe src="https://www.google.com/maps/embed/v1/place?q=karma+royal+palms&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU" width="951" height="300"></iframe>'; // 1213
                                                        }
                                                        else if(get_the_ID()=='1169') { // karma+royal+sanur
                                                                $html .= '<iframe src="https://www.google.com/maps/embed/v1/place?q=karma+royal+sanur&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU" width="951" height="300"></iframe>'; // 1169
                                                        }
                                                        else if(get_the_ID()=='1087') { // Karma+Royal+Haathi+Mahal
                                                                $html .= '<iframe src="https://www.google.com/maps/embed/v1/place?q=Karma+Royal+Haathi+Mahal,+Cavelossim,+Goa,+India&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU" width="951" height="300"></iframe>'; // 1087
                                                        }
                                                        else if(get_the_ID()=='1141') { // Karma Royal Villea
                                                                $html .= '<iframe src="https://www.google.com/maps/embed/v1/place?q=Royal+Villea+Village,+Analipsi,+Lasithi,+Greece&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU" width="951" height="300"></iframe>'; // 1141
                                                        }
                                                        else if(get_the_ID()=='1114') { // karma+royal+jimbaran
                                                                $html .= '<iframe src="https://www.google.com/maps/embed/v1/place?q=karma+royal+jimbaran&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU" width="951" height="300"></iframe>'; // 1114
                                                        }
                                                        else if(get_the_ID()=='1285') { // Quartier+Préverger
                                                                $html .= '<iframe src="https://www.google.com/maps/embed/v1/place?q=Quartier+Préverger,+83680+La+Garde-Freinet,+France&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU" width="951" height="300"></iframe>'; // 1285
                                                        }
                                                        else if(get_the_ID()=='1331') { // Mykonos+Estates
                                                                $html .= '<iframe src="https://www.google.com/maps/embed/v1/place?q=Mykonos+Estates&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU" width="951" height="300"></iframe>'; // 1331
                                                        }
                                                        else if(get_the_ID()=='4781') { // Karma Royal Benaulim
                                                                $html .= '<iframe src="https://maps.google.com/maps?q=karma royal benaulim, &t=&z=15&ie=UTF8&iwloc=&output=embed" width="951" height="300"></iframe>'; // 4781
                                                        }
                                                        else if(get_the_ID()=='214') { // Index Site

                                                                $html .= '<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1cpNFEnTMs44bnWnqzjyAkwertvw&z=2" width="951" height="300"></iframe>'; // 214

                                                                // $html .= '<div class="google-maps">
                                                                //      <a href="https://www.google.com/maps/d/viewer?mid=1cpNFEnTMs44bnWnqzjyAkwertvw" target="_blank">
                                                                //      <div style="background:url(\''.get_template_directory_uri().'/imgs/map-fix.jpg\') center; background-size: cover; height:300px; width:949px;">
                                                                //      </div>
                                                                //      </a>
                                                  // </div>'; // 214
                                                        }
                                                        else { // Rest of the site

                                                                $html .= '<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1cpNFEnTMs44bnWnqzjyAkwertvw" width="951" height="300"></iframe>';

                                                        }

                                                        $html .= '</div>
                                </div>--><!-- #find_destination_map -->
        </div>


        <script>
        $(document).ready(
    function() {
        $(".bvg").click(function() {

                $(".bvg_popup .item").hide();
                $(".bvg_popup .bvg_content").show();

              $(".bvg_popup_container").css({
                    "display": "block"
                });
                $(".bvg_popup").css({
                    "display": "block"
                });
                                $(\'.bvg_popup_container .close_btn\').on(\'click\', function(e) {
                                e.preventDefault();
                                $(\'.bvg_popup_container\').fadeOut();
                });
        });
    });
        </script>';

$html .= '</div>';
?>

