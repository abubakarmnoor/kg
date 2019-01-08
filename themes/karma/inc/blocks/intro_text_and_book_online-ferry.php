
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



/*if($page->getCollectionID()=='153' || $page->getCollectionID()=='142') { // 153 = karma jimbaran, 142 = karma kandara 
	include('booking/bookingcode.php');// not sure if this is required, the old site has it but I can't see what it adds to the page
}*/



$html .= '<div class="left">'.$fields['left_content'].'</div>
	      <div class="right">
			<div class="content_upper">'.$fields['right_content'];
	if (strstr(get_page_template(), 'page-resort.php') == false){
		$html .= karma_getFindAResortMenu();
	}else{
		$html .= '<a ';
		$html .= ($fields['booking_url']) ? 'href="'.$fields['booking_url'].'"' : 'onclick="showEnquiryForm();"';

		
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
	<!-- MAP -->
	<div id="find_destination_map">
		<div id="destination_map_'.get_the_ID().'" class="destination_map"></div>
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
	
	
	
	<script>
	function initialize_intro_book_online_map(){
			var mapDiv = document.getElementById("destination_map_'.get_the_ID().'");
			var styles = [{featureType: "administrative",elementType: "labels",stylers: [{ visibility: "off" }]},
						  {featureType: "poi",elementType: "labels",stylers: [{ visibility: "off"}]},
						  {featureType: "water",elementType: "labels",stylers: [{ visibility: "off"}]},
						  {featureType: "road",elementType: "labels",stylers: [{visibility: "off"}]},
						  {featureType: "administrative.country",elementType: "geometry.stroke",stylers: [{visibility: "off"}]},
						  {featureType: "administrative",elementType: "geometry.fill",stylers: [{visibility: "off"}]},
						  {featureType: "landscape",elementType: "geometry",stylers: [{color: "#e7dbc3"}]},
						  {featureType: "road",stylers: [{visibility: "off"}]},
						  {featureType: "landscape.natural.terrain",stylers: [{visibility: "off"}]},
						  {featureType: "landscape.natural.landcover",stylers: [{visibility: "off"}]},
						  {featureType: "poi.park",stylers: [{"visibility": "off"}]},
						  {featureType: "administrative",stylers: [{visibility: "off"}]},
						  {featureType: "water",elementType: "geometry",stylers: [{color: "#1e1e1e"}]}];
			var image = "'.get_template_directory_uri().'/imgs/icons/map-icon-gold.png";
			var mapOptions = {
				center: new google.maps.LatLng(33.343909, 24.407265),
				zoom: 1,
				scrollwheel: false,
			    mapTypeControl: false,
				styles: styles,
				backgroundColor: \'#111110\',
				minZoom: 2,
				maxZoom: 15,
			};
			var map = new google.maps.Map(mapDiv, mapOptions);';
			$html .= 'var locations = [];';
			foreach (karma_get_destination_pages_all() as $destinationCategory) {					
				if ($destinationCategory->children && !empty($destinationCategory->children)) {
					foreach ($destinationCategory->children as $destinationPage) {
						$resort_latitude = get_field('latitude', $destinationPage->ID);
						$resort_longitude = get_field('longitude', $destinationPage->ID);
						if ($resort_latitude != '' && $resort_longitude != '') {
							if ($resort_image = get_field('resort_image', $destinationPage->ID)){
								$html .= 'var destinationImage = "'.$resort_image['sizes']['large'].'";';
							}else{
								$html .= 'var destinationImage = "";';
							}
							$html .= 'locations.push( 
							{
								name:"'.$destinationPage->post_name.'", 
								pageLink:"'.get_permalink($destinationPage->ID).'", 
								destinationImage:destinationImage,
								destinationDesc:"'.sanitize_text_field(get_field('meta_description', $destinationPage->ID)).'",
								latlng: new google.maps.LatLng("'.$resort_latitude.'", "'.$resort_longitude.'")
							});';
	
						}
					}
				}
			}
			$html .= 'for (var i = 0; i < locations.length; i++) 
			{
				var marker = new google.maps.Marker({
					position: locations[i].latlng, map:map, title:locations[i].name,
					icon: image,
				});
				var infoBubble = new InfoBubble({
				shadowStyle: 1,
				backgroundColor: \'rgb(255,255,255)\',
				borderRadius: 0,
				arrowSize: 10,
				borderWidth: 2,
				borderColor: \'#dba849\',
				arrowSize: 20,
				maxHeight: 120,
				minWidth: 300
				});
				var infoBubbleContent = \'<div id="map_infoBubble">\
											\
											<div class="image_container" style="width: 29%; display: inline-block; vertical-align: top; height: 80px;">\
												<div class="image" style="background:url(\' + locations[i].destinationImage + \'); height: 80px; background-size: cover;"></div>\
											</div>\
											\
											<div class="details" style="display: inline-block; width: 70%; padding-left: 15px; vertical-align: top; max-width: 300px;">\
												<a class="title" href="\' + locations[i].pageLink + \'"><h3 class="gold_text georgia_font italic">\' + locations[i].name + \'</h3></a>\
												<p class="desc">\' + locations[i].destinationDesc + \'</p>\
												<a class="link" href="\' + locations[i].pageLink + \'">Visit \' + locations[i].name + \'</a>\
											</div>\
											\
										</div>\';
				bindInfoBubble(marker, map, infoBubbleContent);
			};
			var InfoBubbleClass = (function(){
	        var instance = null;
	        return {
	           getInstance:function(){
	               if(instance===null){
	                   instance = new InfoBubble
	                    ({
						shadowStyle: 1,
						backgroundColor: \'rgb(255,255,255)\',
						borderRadius: 0,
						arrowSize: 10,
						borderWidth: 2,
						borderColor: \'#dba849\',
						arrowSize: 20,
						maxHeight: 120,
	                    });                 
	               }
	               return instance;
	           }
	        };
	    	})();
		    function bindInfoBubble(marker, map, infoBubbleContent) {
		        google.maps.event.addListener(marker, \'click\', function() {
		            InfoBubbleClass.getInstance().setContent(infoBubbleContent);
		            InfoBubbleClass.getInstance().open(map, marker);
		        });
		    }
		}
		google.maps.event.addDomListener(window, \'load\', initialize_intro_book_online_map);
		</script>
	</div>
</div>';
?>