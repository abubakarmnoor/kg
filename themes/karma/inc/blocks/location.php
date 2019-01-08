<?php
   global $post;
   $post_slug=$post->post_name;
   $fields = array(
        'left_title' => get_sub_field('left_title'),
        'left_content' => get_sub_field('left_content'),
        'right_title' => get_sub_field('right_title'),
        'right_content' => get_sub_field('right_content'),
      'gallery' => get_sub_field('gallery'),
      'gallery_page' => get_sub_field('gallery_page'),
        'video_destination' => get_sub_field('video_destination'),
        'virtual_tours_url' => get_sub_field('virtual_tours_url'),
        'latitude' => get_field('latitude'),
        'longitude' => get_field('longitude'),
        'resort_image' => get_field('resort_image'),
        'meta_description' => get_field('meta_description'),
        'telephone_number' => get_field('telephone_number'),
        'fax_number' => get_field('fax_number'),
        'reservations_indo' => get_field('reservations_indo'),
        'reservations_oz' => get_field('reservations_oz'),
        'reservations_uk' => get_field('reservations_uk'),
        'reservations_france' => get_field('reservations_france'),
        'reservations_german' => get_field('reservations_german'),
        'resort_email' => get_field('resort_email'),
        'reservations_singapore' => get_field('reservations_singapore'),
        'gds_code' => get_field('gds_code'),
        'chain_code' => get_field('chain_code'),
        'amadeus' => get_field('amadeus'),
        'sabre' => get_field('sabre'),
        'galileo' => get_field('galileo'),
        'worldspan' => get_field('worldspan')
   );

//    print_r( $fields );
//    exit;

   $gallery_images = array();
   if( isset($fields['gallery_page']) && $fields['gallery_page'] ){
      $gallery_images = karma_getGalleryImages( $fields['gallery_page']->ID );
   }elseif (isset($fields['gallery'][0]['ngg_id'])) {
         $gallery_images = karma_getGalleryImages($fields['gallery'][0]['ngg_id']);
         //print_r($gallery_images);
   }
   ob_start();
   $html = '';
   ?>
<div id="accordion-location" class="accordion">
   <div class="accordion-heading accordion-heading-location">
      <div class="icon"><i class="fa fa-street-view" aria-hidden="true"></i></div>
      Location
      <div class="indicator"></div>
   </div>
   <div id="location" class="accordion-content accordion-content-location">
      <div class="container wide">
         <div class="upper_section">
            <div class="left">
               <h3 class="title gold_text georgia_font italic"><?php echo $fields['left_title'];?></h3>
               <?php echo $fields['left_content'];?>
            </div>
            <!-- .left -->
            <div class="right">
               <h3 class="title gold_text georgia_font italic"><?php echo (!empty($fields['right_title']) ? $fields['right_title'] : 'How to get here'); ?></h3>
               <?php echo $fields['right_content'];?>
            </div>
            <!-- .right -->
         </div>
         <!-- .upper_section -->
         <div class="lower_section">
            <div class="right" style="display: table; width: 100%;">
               <div style="float: left; display: table; width: 52%;">
                  <!-- MAP -->
                  <div id="location_map">
                     <div id="location_map_1" class="location_map"></div>
                  </div>
                  <!-- #location_map -->
                  <script>
                     function initialize_location_map(){
                        var mapDiv = document.getElementById("location_map_1");
                        var image = "<?php echo get_template_directory_uri(); ?>/imgs/icons/map-icon-gold.png"
                        var mapOptions = {
                                center: new google.maps.LatLng("<?php echo $fields['latitude'];?>", "<?php echo $fields['longitude'];?>"),
                                zoom: 12,
                                mapTypeID: google.maps.MapTypeId.ROADMAP,
                                scrollwheel: false,
                                        mapTypeControl: false,
                                backgroundColor: '#111110',
                                minZoom: 2,
                                maxZoom: 15,
                                draggable: !("ontouchend" in document)
                        };
                        var map = new google.maps.Map(mapDiv, mapOptions);
                        var locations = [];
                        <?php
                        $resort_latitude = get_field('latitude');
                        $resort_longitude = get_field('longitude');
                        if ($resort_latitude && $resort_longitude) {
                                if ($resort_image = get_field('resort_image')){
                                        $html .= 'var destinationImage = "'.$resort_image['sizes']['large'].'";';
                                }else{
                                        $html .= 'var destinationImage = "";';
                                }
                                $html .= 'locations.push(
                                {
                                        name:"'.$destinationPage->post_title.'",
                                        pageLink:"'.get_permalink($post->ID).'",
                                        destinationImage:destinationImage,
                                        destinationDesc:"'.sanitize_text_field(get_field('meta_description')).'",
                                        destinationAddress:'.json_encode(sanitize_text_field(get_field('resort_address'))).',
                                        latlng: new google.maps.LatLng("'.$resort_latitude.'", "'.$resort_longitude.'")
                                });';
                        }

                        echo $html;
                        ?>
                        for (var i = 0; i < locations.length; i++)
                        {
                                var marker = new google.maps.Marker({
                                        position: locations[i].latlng,
                                        map:map,
                                        title:locations[i].name,
                                        icon: image,
                                });
                                var infoBubble = new InfoBubble({
                                shadowStyle: 1,
                                backgroundColor: '#1e1e1e',
                                borderRadius: 0,
                                arrowSize: 10,
                                borderWidth: 0,
                                hideCloseButton: true,
                                maxWidth: 300,
                                arrowSize: 20,
                                maxHeight: 120
                                });
                                var infoBubbleContent = '<div id="map_infoBubble" class="infoBubble_location_block">\
                                                                                        \
                                                                                        <div class="image_container" style="width: 29%; display: inline-block; vertical-align: top; height: 80px;">\
                                                                                                <div class="image" style="background:url(' + locations[i].destinationImage + '); height: 80px; margin-bottom:20px; background-size: cover;"></div>\
                                                                                        </div>\
                                                                                        \
                                                                                        <div class="details" style="display: inline-block; width: 70%; padding-left: 15px; vertical-align: top; margin-left: -4px;">\
                                                                                                <a class="title" href="' + locations[i].pageLink + '"><h3 class="gold_text georgia_font italic">' + locations[i].name + '</h3></a>\
                                                                                                <p class="desc white_text">' + locations[i].destinationAddress + '</p>\
                                                                                        </div>\
                                                                                        \
                                                                                </div>';
                                infoBubble.setContent(infoBubbleContent);
                            infoBubble.open(map,marker);
                        };
                     }
                  </script>
                  <div class="resort_details_section">
                     <div class="upper">
                        <div class="left">
                           <h2 class="resort_title"><?php echo $post->post_title;?></h2>
                           <p class="resort_address"><?php echo get_field('resort_address'); ?></p>
                           <br>
                        </div>
                        <!-- .left -->
                        <div class="right">
                           <?php
                              if ($fields['latitude'] ||  $fields['longitude']) {
                                $latitude = $fields['latitude'];
                                $longitude = $fields['longitude'];
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
                                }else if ($data['cod'] == 404) {
                                        echo '<div class="weather">';
                                                echo '<div class="left">';
                                                echo 'Weather cannot be found for ' . $post->post_title;
                                                echo '</div>';
                                        echo '</div>';
                                } else{
                                        echo '<div class="weather">';
                                                echo '<div class="left">';
                                                        echo 'N/A';
                                                echo '</div>';
                                        echo '</div>';
                                }

                              }
                              ?>
                           <div class="resort_local_time">
                              <?php
                                 $lat = floatval($fields['latitude']);
                                 $lon = floatval($fields['longitude']);
                                 $resortTimeZone = karma_get_nearest_timezone($lat, $lon);
                                 $dateTime = new DateTime();
                                 $timeZone  = new DateTimeZone($resortTimeZone);
                                 $dateTime->setTimezone($timeZone);
                                 echo '<div class="time_container">';
                                        echo '<div class="left">';
                                                echo '<img src="' . get_template_directory_uri() . '/imgs/icons/clock-gold.png" alt="clock gold" />';
                                        echo '</div>';
                                        echo '<div class="right">';
                                                echo '<div id="live_clock" class="time">' . $dateTime->format('H:i') . '</div>';
                                                echo '<p class="meridies">' . $dateTime->format('A') . '</p>';
                                        echo '</div>';
                                 echo '</div>';
                                 ?>
                           </div>
                           <!-- .resort_local_time -->
                        </div>
                        <!-- -->
                        <style>
                           #location .lower_section .resort_details_section .resort_phone {
                              font-size: 16px;
                              margin-bottom: 10px;
                           }

                           .gds{
                              float: right;
                              position: relative;
                              top: -50px;
                              right: 35px;
                           }
                           .gds > a{
                              margin-bottom: 10px;
                              display: table;
                           }
                        </style>

                                 <div class="gds">
                                        <?php if($post->ID !== 731 && $post->ID !==193 && $post->ID !==837 && $post->ID !==802 && $post->ID !==866){ 
                                          switch (karma_getResortType($post)) {
                                             case 'Karma Resort':
                                                echo '<a href="/" alt="Karma Group" title="Karma Group"><img alt="Karma Group" title="Karma Group" class="brand_logo karma_resort_logo" src="' . get_template_directory_uri() . '/imgs/karma-brand-logos/karma-resort-logo-gold.png" alt=""></a> <br />';
                                                break;
                                             case 'Karma Retreat':
                                                echo '<a href="/" alt="Karma Group" title="Karma Group"><img alt="Karma Group" title="Karma Group" class="brand_logo karma_retreat_logo" src="' . get_template_directory_uri() . '/imgs/karma-brand-logos/karma-retreat-logo-gold.png" alt=""></a>';
                                                break;
                                             case 'Karma Royal':
                                                echo '<a href="/" alt="Karma Group" title="Karma Group"><img alt="Karma Group" title="Karma Group" class="brand_logo karma_royal_logo" src="' . get_template_directory_uri() . '/imgs/karma-brand-logos/karma-royal-logo-gold.png" alt=""></a>';
                                                break;
                                             case 'Karma Estate':
                                                echo '<a href="/" alt="Karma Group" title="Karma Group"><img alt="Karma Group" title="Karma Group" class="brand_logo karma_estate_logo" src="' . get_template_directory_uri() . '/imgs/karma-brand-logos/karma-estate-logo-gold.png" alt=""></a>';
                                                break;
                                             default:
                                                echo '<a href="/" alt="Karma Group" title="Karma Group"><img alt="Karma Group" title="Karma Group" class="brand_logo karma_resorts_logo" src="' . get_template_directory_uri() . '/imgs/karma-brand-logos/karma-resort-logo-gold.png" alt=""></a>';
                                                break;
                                             }
                                         }
                                        ?>


                                                   <?php if($fields['gds_code']!='' ) { ?>
                                             <h4 class="resort_phone">GDS Code <?php //echo nl2br($fields['gds_code']); ?></h4>
                                                   <?php }  ?>
                                            <?php if($fields['chain_code']!='' ) { ?>
                                             <h4 class="resort_phone">Chain Code: <?php echo nl2br($fields['chain_code']); ?></h4>
                                                   <?php }  ?>
                                            <?php if($fields['amadeus']!='' ) { ?>
                                             <h4 class="resort_phone">Amadeus: <?php echo nl2br($fields['amadeus']); ?></h4>
                                                   <?php }  ?>
                                            <?php if($fields['sabre']!='' ) { ?>
                                             <h4 class="resort_phone">Sabre: <?php echo nl2br($fields['sabre']); ?></h4>
                                                   <?php }  ?>
                                            <?php if($fields['galileo']!='' ) { ?>
                                             <h4 class="resort_phone">Galileo: <?php echo nl2br($fields['galileo']); ?></h4>
                                                   <?php }  ?>
                                            <?php if($fields['worldspan']!='' ) { ?>
                                             <h4 class="resort_phone">Worldspan: <?php echo nl2br($fields['worldspan']); ?></h4>
                                                   <?php }  ?>
                                 </div>


                        <div class="lower">
                           <div class="left">
                              <?php if($fields['reservations_indo']!='' ) { ?>
                              <h4 class="resort_phone"><strong>Reservations Indonesia</strong>: <br /> <?php echo nl2br($fields['reservations_indo']); ?></h4>
                              <?php }  ?>
                              <?php if($fields['reservations_oz']!='' ) { ?>
                              <h4 class="resort_phone"><strong>Reservations Australia</strong>: <br /> <?php echo nl2br($fields['reservations_oz']); ?></h4>
                              <?php } ?>
                              <?php if($fields['reservations_france']!='' ) { ?>
                              <h4 class="resort_phone"><strong>Reservations France</strong>: <br /><?php echo nl2br($fields['reservations_france']); ?></h4>
                              <?php } ?>
                              <?php if($fields['reservations_german']!='' ) { ?>
                              <h4 class="resort_phone"><?php if($post_slug == 'de' ) { ?><strong>Reservierung Deutschland</strong>:<?php } else {?><strong>Reservations Germany</strong>: <?php } ?><br /> <?php echo nl2br($fields['reservations_german']); ?></h4>
                              <?php } ?>
                              <?php if($fields['reservations_uk']!='' ) { ?>
                              <h4 class="resort_phone"><strong>Reservations UK</strong>: <br /><?php echo nl2br($fields['reservations_uk']); ?></h4>
                              <?php } ?>
			      <?php if($fields['reservations_singapore']!='' ) { ?>
                              <h4 class="resort_phone"><strong>Reservations Singapore</strong>: <br /><?php echo nl2br($fields['reservations_singapore']); ?></h4>
                              <?php } ?>
                              <?php if($fields['telephone_number']!='' ) { ?>
                              <h4 class="resort_phone"><?php if($post_slug == 'de' ) { ?><strong>Resort Direktwahl</strong>: <?php } else {?> <strong>Resort Direct Dial</strong>:<?php } ?><br /><?php echo nl2br($fields['telephone_number']); ?></h4>
                              <?php } ?>
                              <?php if($fields['fax_number']!='' ) { ?>
                              <h4 class="resort_phone"><strong>Resort Fax Number</strong>: <br /><?php echo nl2br($fields['fax_number']); ?></h4>
                              <?php } ?>
                              <?php if($fields['resort_email']!='' ) { ?>
                              <h4 class="resort_phone"><strong>Email</strong>: <?php echo nl2br($fields['resort_email']); ?></h4>
                              <?php } ?>
                           </div>
<!--                            <div class="right">

                           </div> -->

                           <!-- .right -->
                        </div>
                        <!-- .lower -->
                     </div>
                  </div>
               </div>
               <div style="float: left; display: table; width: 45%;">
                  <div class="container wide accordion-gallery">
                     <div id="accordion-location-gallery" class="accordion">
                        <div class="accordion-heading">
                           <div class="icon"><i class="fa fa-picture-o" aria-hidden="true"></i></div>
                           Gallery
                           <div class="indicator"></div>
                        </div>
                        <div class="accordion-content">
                           <span class="lower_section">
                              <div class="left">
                                 <div class="gallery">
                                    <div id="gallery_slider2" class="gallery_slider gallery_slider1">
                                       <ul class="slides">
                                          <?php
                                             $counter = 0;
                                             foreach($gallery_images as $image):
                                               $counter++;
                                               if ($counter == 21) break;
                                               $maxWidth = 700;
                                               $maxHeight = 700;
                                               ?>
                                          <li>
                                             <a class="image_link" href="<?php echo $image->url; ?>" title="<?php echo $image->alttext; ?>" alt="<?php echo $image->alttext; ?>">
                                                <div class="gallery_image" title="<?php echo $image->alttext; ?>" style="background:url(<?php echo $image->url; ?>) center; background-size: cover;"></div>
                                             </a>
                                             <div class="gallery_info">
                                                <div class="gallery_counter"><?php echo $counter . "/" . ( count($gallery_images) > 20 ? 20 : count($gallery_images) ); ?></div>
                                                <?php echo ($image->description? '<p>' . $image->description . '</p>' : '') ?>
                                             </div>
                                          </li>
                                          <?php
                                             endforeach;
                                             ?>
                                       </ul>
                                    </div>
                                    <!-- #gallery_slider -->
                                    <div id="gallery_thumb_controls2">
                                       <ul class="slides">
                                          <?php
                                            $counter = 0;
                                             foreach($gallery_images as $image)
                                             {
                                              $counter++;
                                              if ($counter == 21) break;
                                             echo '<li><div class="gallery_thumb_icon" style="background:url(' . $image->url . ') center; background-size: cover;"></div></li>';
                                             } ?>
                                       </ul>
                                    </div>
                                    <!-- #gallery_thumb_controls -->
                                    <?php
                                       $gid = $fields['gallery'][0]['ngg_id'];
                                       $gid_property_name['2'] = 'karma-bavaria'; //BAVARIA
                                       $gid_property_name['5'] = 'karma-jimbaran'; //JIMBARAN
                                       $gid_property_name['1'] = 'karma-kandara'; //KANDARA
                                       $gid_property_name['12'] = 'karma-rottnest'; //ROTTNEST
                                       $gid_property_name['14'] = 'cay-tre'; //CAY TRE
                                       $gid_property_name['3'] = 'karma-chakra'; //CHAKRA
                                       $gid_property_name['4'] = 'karma-haveli'; //HAVELI
                                       $gid_property_name['9'] = 'karma-mayura'; //MAYURA
                                       $gid_property_name['11'] = 'karma-reef'; //REEF
                                       $gid_property_name['24'] = 'karma-st-martins'; //MARTINS
                                       $gid_property_name['19'] = 'royal-monterio'; //MONTERIO
                                       $gid_property_name['15'] = 'royal-bella-vista'; //BELLA VISTA / CHIANG MAI
                                       $gid_property_name['29'] = 'royal-benaulim'; //BENAULIM
                                       $gid_property_name['21'] = 'royal-phuket'; //ROYAL PHUKET
                                       $gid_property_name['13'] = 'karma-royal-candidasa'; //ROYAL CANDIDASA
                                       $gid_property_name['16'] = 'royal-haathi-mahal'; //HAATHI MAHAL / royal-bella-vista
                                       $gid_property_name['18'] = 'karma-royal-jimbaran'; //ROYAL JIMBARAN
                                       $gid_property_name['20'] = 'royal-palms'; //ROYAL PALMS
                                       $gid_property_name['22'] = 'karma-royal-sanur'; //ROYAL SANUR
                                       $gid_property_name['10'] = 'estate-pelikanos'; //Pelikanos, Mykonos
                                       $gid_property_name['8'] = 'le-preverger'; //Karma Le Preverger
                                       $gid_property_name['30'] = 'sanctum-soho'; //Karma Sanctum Soho
                                       $gid_property_name['31'] = 'sanctum-on-the-green';
                                       $gid_property_name['32'] = 'royal-residence';
                                       $gid_property_name['36'] = 'karma-minoan';
                                       $gid_property_name['38'] = 'karma-borgo-di-colleoli';
                                        $gid_property_name['39'] = "karma-manoir";
                                        $gid_property_name['40'] = 'karma-residence-normande';
                                        $gid_property_name['41'] = 'karma-exotica';
                                        $gid_property_name['42'] = "karma-chang-chiangmai";
                                       //$link_url = '/gallery/?id='.$fields['gallery'][0]['ngg_id']; // @TODO link to gallery page eg /gallery/karma-kandara/
                                       $link_url = get_home_url().'/gallery/'.$gid_property_name[$gid];
                                       ?>
                                    <a href="<?php  echo $link_url; ?>" title="View All Images"><button class="button_outline gold">View All Images</button></a>
                                    <?php echo (!empty($fields['video_destination']) ? '<a class="button_outline gold" target="_blank" href="' . $fields['video_destination'] . '" title="View Video Destination" onclick="trackOutboundLink('."'".$fields['video_destination']."'".'); return false;">View Destination Video</a>' : ''); ?>
                                    <?php echo (!empty($fields['virtual_tours_url']) ? '<a target="_blank"  href="' . $fields['virtual_tours_url'] . '" title="View Virtual Tutorials"><button class="button_outline gold">View Virtual Tour</button></a>' : ''); ?>
                                 </div>

                                 <!-- .gallery -->
                              </div>
                              <!-- .left -->
                           </span>
                           <!--- .lower_section -->
                        </div>
                        <!-- .accordion-content -->
                     </div>
                     <!-- .accordion -->
                  </div>
                  <!-- .container.wide -->
               </div>
         <!-- #location -->
      </div>
   </div>
</div>
</div>
</div><!--  end .accordion-location -->
<!-- analytics for view video destination click -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-70462293-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-70462293-1');
</script>

<script>
var trackOutboundLink = function(url) {
      window.open(url,'_blank');
      gtag('event', '<?php echo 'click_'.getDestinationName($post->ID) ?>', {
            'event_category': 'video_destination',
            'event_label': url,
            'transport_type': 'beacon',
            'event_callback': function(){
                  console.log("analytics");
            }
      });
}
</script>
<!-- analytics for view video destination click -->
<script>
   $(window).load(function() {
        google.maps.event.addDomListener(window, 'load', initialize_location_map);
        if (is_desktop) {
                $('.gallery_slider1 .image_link').magnificPopup({
                        type: 'image',
                        gallery:{
                            enabled:true
                        }
                });
        } else {
                $('.image_link').click(function() {
                        return false;
                });
        }
   });
</script>
<?php
   $html = ob_get_contents();
   ob_end_clean();
   ?>


