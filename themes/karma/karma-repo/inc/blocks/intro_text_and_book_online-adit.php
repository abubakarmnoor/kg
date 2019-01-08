		<style>	
				.bvg_popup_container {
					display: none;
					position: absolute;
					width: 100%;
					height: 100%;
					z-index: 999;
					top: 0;
					left: 0;
					background-color: rgba(51, 51, 51, 0.85);
				}
				.bvg_popup {
					width: 90%;
					max-width: 600px;
					position: relative;
					top: 50px;
					margin: auto;
					background: #1b1b1b;
					padding: 25px;
				}	
				#karma .bvg_popup_container .bvg_popup .close_btn {
					height: 25px;
					width: 25px;
					background-size: contain;
					background-image: url('https://karmagroup.com/themes/karma_group_theme/imgs/icons/close-icon-rounded.png');
					float: right;
					cursor: pointer;
					display: inline-block;
					vertical-align: middle;
				}	
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
		</style>




<?php
$fields = array(
	'left_content' => get_sub_field('left_content'),
	'right_content' => get_sub_field('right_content'),
	'background_image' => get_sub_field('background_image'),
	'booking_url' => get_sub_field('booking_url')		
);
$html = '<div id="welcome_booking" class="cf" style="';
$html .= (!empty($fields['background_image'])) ? 'background: url(\''.$fields['background_image']['sizes']['large'].'\'); background-size: cover;' : '';
$html .= '">';

$html .= '<div class="left">'.$fields['left_content'].'</div>
	      <div class="right">
			<div class="content_upper">'.$fields['right_content'];
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
			$html .= ($fields['booking_url']) ? 'onclick="goog_report_conversion(\'https://www.thebookingbutton.co.uk/properties/karmabavaria\')" href="'.$fields['booking_url'].'"' : 'onclick="showEnquiryForm();"';
		}
		else if(get_the_ID()=='837') { // karma+jimbaran
			$html .= ($fields['booking_url']) ? 'onclick="goog_report_conversion(\'https://www.thebookingbutton.com.au/karmagroup/properties/kjimbarandirect\')" href="'.$fields['booking_url'].'"' : 'onclick="showEnquiryForm();"';
		}
		else if(get_the_ID()=='837') { // karma+kandara
			$html .= ($fields['booking_url']) ? 'onclick="goog_report_conversion(\'https://www.thebookingbutton.com.au/properties/karmakandaradirect\')" href="'.$fields['booking_url'].'"' : 'onclick="showEnquiryForm();"';
		}
		else if(get_the_ID()=='802') { // Karma+Rottnest
			$html .= ($fields['booking_url']) ? 'onclick="" href="'.$fields['booking_url'].'"' : 'onclick="showEnquiryForm();goog_report_conversion(\'https://karmagroup.com/find-destination/karma-resorts/karma-rottnest#booking\');"';
		}
		else if(get_the_ID()=='866') { // Karma+Reef
			$html .= ($fields['booking_url']) ? 'onclick="goog_report_conversion(\'https://apac.littlehotelier.com/properties/karma-reef\')" href="'.$fields['booking_url'].'"' : 'onclick="showEnquiryForm();"';
		}
		else if(get_the_ID()=='914') { //St.Martin
			$html .= ($fields['booking_url']) ? 'onclick="goog_report_conversion(\'https://www.thebookingbutton.co.uk/properties/karmastmartindirect\')" href="'.$fields['booking_url'].'"' : 'onclick="showEnquiryForm();"';
		}
		else {
			$html .= ($fields['booking_url']) ? 'onclick="ga(\'send\', \'event\', \'Link\', \'Submit\', \'Book Online\', 1);" href="'.$fields['booking_url'].'"' : 'onclick="showEnquiryForm();"';
		}
		
		//script Best Value Guarantee
		if(get_the_ID()=='193') { //Karma Kandara	

				$html .= ' class="white_button" target="_blank">Book Now</a>
				<a href="#"><div class="best_value_btn bvg"></div></a>';		
				$html .= '<div class="bvg_popup_container">
							<div class="bvg_popup">
								<div class="cf">
									<div class="close_btn"></div>
									
										<p class="content1">Best Value Guarantees</p>
									<div class="block2">	
										<p class="content2">NO HIDDEN FEES</p>
										<p class="content3"><img src="http://karmaresorts.com/wecreate/images-bvg/hidden.jpg" width="58" height="43">Many online travel sites charge extra fees for online bookings. We guarantee 5% lower than others.</p>
									</div>
									<div class="block2">
										<p class="content2">EXCLUSIVE OFFERS</p>
										<p class="content3"><img src="http://karmaresorts.com/wecreate/images-bvg/exclusive-offer.jpg" width="58" height="43">Only our sites offer elite level hotel
										benefits and special offers for Karma
										Resorts Preferred Guest® members.</p>
									</div>
									<div class="block2">	
									<p class="content2">BEST HOTEL INFORMATION</p>
									<p class="content3"><img src="http://karmaresorts.com/wecreate/images-bvg/best-hotel-information.jpg" width="58" height="43">Get the most robust information about
									our hotels right on our sites.</p>
									</div>
									<div class="block2">	
									<p class="content2">CALL CENTER</p>
									<p class="content3"><img src="http://karmaresorts.com/wecreate/images-bvg/call-center.jpg" width="58" height="43">To speak with a Karma Resorts expert,
									please call: +62 361 8482202</p>
									</div>
									<br>
									<br>
								</div>
							</div>
						</div>';
					
			}else if(get_the_ID()=='731') { //Karma Bavaria	

				$html .= ' class="white_button" target="_blank">Book Now</a>
				<a href="#"><div class="best_value_btn bvg"></div></a>';		
				$html .= '<div class="bvg_popup_container">
							<div class="bvg_popup">
								<div class="cf">
									<div class="close_btn"></div>
									
										<p class="content1">Best Value Guarantees</p>
									<div class="block2">	
										<p class="content2">NO HIDDEN FEES</p>
										<p class="content3"><img src="http://karmaresorts.com/wecreate/images-bvg/hidden.jpg" width="58" height="43">Many online travel sites charge extra fees for online bookings. We guarantee 5% lower than others.</p>
									</div>
									<div class="block2">
										<p class="content2">EXCLUSIVE OFFERS</p>
										<p class="content3"><img src="http://karmaresorts.com/wecreate/images-bvg/exclusive-offer.jpg" width="58" height="43">Free Upgrade Room, <br>Free Late Check Out, 10% Spa Discount
										<br>
										<br></p>
									</div>
									<div class="block2">	
									<p class="content2">BEST HOTEL INFORMATION</p>
									<p class="content3"><img src="http://karmaresorts.com/wecreate/images-bvg/best-hotel-information.jpg" width="58" height="43">Get the most robust information about
									our hotels right on our sites.</p>
									</div>
									<div class="block2">	
									<p class="content2">CALL CENTER</p>
									<p class="content3"><img src="http://karmaresorts.com/wecreate/images-bvg/call-center.jpg" width="58" height="43">To speak with a Karma Resorts expert,
									please call: +49 (0) 800 589 4766</p>
									</div>
									<br>
									<br>
								</div>
							</div>
						</div>';
						
			}else if(get_the_ID()=='837') { //Karma Jimbaran	

				$html .= ' class="white_button" target="_blank">Book Now</a>
				<a href="#"><div class="best_value_btn bvg"></div></a>';		
				$html .= '<div class="bvg_popup_container">
							<div class="bvg_popup">
								<div class="cf">
									<div class="close_btn"></div>
									
										<p class="content1">Best Value Guarantees</p>
									<div class="block2">	
										<p class="content2">NO HIDDEN FEES</p>
										<p class="content3"><img src="http://karmaresorts.com/wecreate/images-bvg/hidden.jpg" width="58" height="43">Many online travel sites charge extra fees for online bookings. We guarantee 5% lower than others.</p>
									</div>
									<div class="block2">
										<p class="content2">EXCLUSIVE OFFERS</p>
										<p class="content3"><img src="http://karmaresorts.com/wecreate/images-bvg/exclusive-offer.jpg" width="58" height="43">Only our sites offer elite level hotel
										benefits and special offers for Karma
										Resorts Preferred Guest® members.</p>
									</div>
									<div class="block2">	
									<p class="content2">BEST HOTEL INFORMATION</p>
									<p class="content3"><img src="http://karmaresorts.com/wecreate/images-bvg/best-hotel-information.jpg" width="58" height="43">Get the most robust information about
									our hotels right on our sites.</p>
									</div>
									<div class="block2">	
									<p class="content2">CALL CENTER</p>
									<p class="content3"><img src="http://karmaresorts.com/wecreate/images-bvg/call-center.jpg" width="58" height="43">To speak with a Karma Resorts expert,
									please call: +62 361 8482202</p>
									</div>
									<br>
									<br>
								</div>
							</div>
						</div>';

			}else if(get_the_ID()=='866') { //Karma Reef	

				$html .= ' class="white_button" target="_blank">Book Now</a>
				<a href="#"><div class="best_value_btn bvg"></div></a>';		
				$html .= '<div class="bvg_popup_container">
							<div class="bvg_popup">
								<div class="cf">
									<div class="close_btn"></div>
									
										<p class="content1">Best Value Guarantees</p>
									<div class="block2">	
										<p class="content2">NO HIDDEN FEES</p>
										<p class="content3"><img src="http://karmaresorts.com/wecreate/images-bvg/hidden.jpg" width="58" height="43">Many online travel sites charge extra fees for online bookings. We guarantee 5% lower than others.</p>
									</div>
									<div class="block2">
										<p class="content2">EXCLUSIVE OFFERS</p>
										<p class="content3"><img src="http://karmaresorts.com/wecreate/images-bvg/exclusive-offer.jpg" width="58" height="43">Only our sites offer elite level hotel
										benefits and special offers for Karma
										Resorts Preferred Guest® members.</p>
									</div>
									<div class="block2">	
									<p class="content2">BEST HOTEL INFORMATION</p>
									<p class="content3"><img src="http://karmaresorts.com/wecreate/images-bvg/best-hotel-information.jpg" width="58" height="43">Get the most robust information about
									our hotels right on our sites.</p>
									</div>
									<div class="block2">	
									<p class="content2">CALL CENTER</p>
									<p class="content3"><img src="http://karmaresorts.com/wecreate/images-bvg/call-center.jpg" width="58" height="43">To speak with a Karma Resorts expert,
									please call: +62 361 8482202</p>
									</div>
									<br>
									<br>
								</div>
							</div>
						</div>';
						
			}else if(get_the_ID()=='914') { //Karma St.Martin	

				$html .= ' class="white_button" target="_blank">Book Now</a>
				<a href="#"><div class="best_value_btn bvg"></div></a>';		
				$html .= '<div class="bvg_popup_container">
							<div class="bvg_popup">
								<div class="cf">
									<div class="close_btn"></div>
									
										<p class="content1">Best Value Guarantees</p>
									<div class="block2">	
										<p class="content2">NO HIDDEN FEES</p>
										<p class="content3"><img src="http://karmaresorts.com/wecreate/images-bvg/hidden.jpg" width="58" height="43">Many online travel sites charge extra fees for online bookings. We guarantee 5% lower than others.</p>
									</div>
									<div class="block2">
										<p class="content2">EXCLUSIVE OFFERS</p>
										<p class="content3"><img src="http://karmaresorts.com/wecreate/images-bvg/exclusive-offer.jpg" width="58" height="43">Free Upgrade Room, Free <br>Late Check Out, 10% Spa Discount
										<br>
										<br></p>
									</div>
									<div class="block2">	
									<p class="content2">BEST HOTEL INFORMATION</p>
									<p class="content3"><img src="http://karmaresorts.com/wecreate/images-bvg/best-hotel-information.jpg" width="58" height="43">Get the most robust information about
									our hotels right on our sites.</p>
									</div>
									<div class="block2">	
									<p class="content2">CALL CENTER</p>
									<p class="content3"><img src="http://karmaresorts.com/wecreate/images-bvg/call-center.jpg" width="58" height="43">To speak with a Karma Resorts expert,<br>
									please call: <br>+44 (0)3 333 232 353 (Toll Free)
									</div>
									<br>
									<br>
								</div>
							</div>
						</div>';
			}else{
						$html .= ' class="white_button" target="_blank">Book Now</a>
						<div class="best_value_btn"></div>
						';					
					}
		
		
	}

	$html .= '</div><!-- .content_upper -->
	<!-- MAP resort '.get_the_ID().' -->
	<div id="find_destination_map">
		<div class="google-maps">';
	
	//
	// display google map 
	//

	if(get_the_ID()=='731') { // karma+bavaria
		$html .= '<iframe src="https://www.google.com/maps/embed/v1/search?q=karma+bavaria&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU" width="951" height="300"></iframe>'; // 731
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
		$html .= '<iframe src="https://www.google.com/maps/embed/v1/place?q=Hoi+An+Riverside+Bamboo+Resort&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU" width="951" height="300"></iframe>'; // 963
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
	else if(get_the_ID()=='214') { // Index Site
		
		$html .= '<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1cpNFEnTMs44bnWnqzjyAkwertvw" width="951" height="300"></iframe>'; // 214

		// $html .= '<div class="google-maps">
		// 	<a href="https://www.google.com/maps/d/viewer?mid=1cpNFEnTMs44bnWnqzjyAkwertvw" target="_blank">
		// 	<div style="background:url(\''.get_template_directory_uri().'/imgs/map-fix.jpg\') center; background-size: cover; height:300px; width:949px;">	
		// 	</div>
		// 	</a>
  // </div>'; // 214	
	}
	else { // Rest of the site

		$html .= '<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1cpNFEnTMs44bnWnqzjyAkwertvw" width="951" height="300"></iframe>'; 
		
	}
	
	$html .= '</div>
	</div><!-- #find_destination_map -->
	
	<script>
	$(document).ready(
    function() {
        $(".bvg").click(function() {
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
	</script>
	
	
	</div>
</div>';
?>