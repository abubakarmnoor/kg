<?php
include("inc/lang.php");

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

 echo karma_render_footer_contact_form();

 ?>
<style type="text/css">
.bvg_popup_container{display:none;position:fixed;width:100%;height:100%;z-index:998;top:0;left:0;color:#fff;background-color:rgba(51,51,51,.85);overflow-y: scroll;}.bvg_popup{width:90%;max-width:600px;height:auto;position:relative;z-index:999;top:unset;left:unset;color:#fff;background:#1b1b1b;padding:25px;display:none}.bvg_popup .cf .close_btn{height:25px;width:25px;background-size:contain;background-image:url(https://karmagroup.com/themes/karma_group_theme/imgs/icons/close-icon-rounded.png);float:right;cursor:pointer;display:inline-block;vertical-align:middle}

/* css footer app */
#karma footer .col.one, #karma footer .col.two {
    float: left!important;
    width: 18%;
}
#karma footer .col.four {
    width: 21%;
}
#karma footer .col.five {
    width: 20%;
    margin-top: -44px;
    margin-left: 20px;
}

#newsletter_signup iframe {
    width: 75%;
    margin-bottom:10px;
    border: 1px solid #eee;
}

#kgnewsletter{
    padding-bottom:6px;
}
#errornewsletter{
    position: absolute;
    z-index: 1;
    background-color: #8d7249;
    color: #fff;
    right: 0;
    font-size: 12px;
    padding: 3px 5px;
    margin-top: -83px;
    margin-right: 4px;
    display:none;
}

</style>

<div class="bvg_popup_container">
    <div class="bvg_popup">
        <div class="cf">
            <div class="close_btn"></div>
                <div class="bavaria_information item" style="display: none;">

                <?php if(get_the_ID()=='731') { ?>

                <!-- <p><img src="<?php echo get_template_directory_uri(); ?>/imgs/icons/car-icon.png" width="64" /></p>-->
                <!-- <p>Dear Guests,</p>

                <p>Due to a technical defect our wellness area including swimming pool, sauna and steam room is temporarily closed.</p>
                <p>We hope to resolve this situation as soon as possible and apologise for any inconvenience caused.</p>
                <p>For further information please contact us on +443 333 232 353 or email us on <a href="mailto:reservation@karmabavaria.com">reservation@karmabavaria.com</a></p>
                <p>Kind Regards,</p>
                <p>The Karma Bavaria Team</p>-->

                <?php }elseif(get_the_ID()=='3143') { ?>

                <!--<p><img src="<?php echo get_template_directory_uri(); ?>/imgs/icons/car-icon.png" width="64" /></p>-->
                <p>Sehr geehrte Gäste,</p>
                <p>Aufgrund eines technischen Schadens, ist unser Schwimmbad mit Sauna- und Dampfbadbereich leider vorübergehend geschlossen. <br><br>Für weitere Information, bitte kontaktieren Sie uns.</p>
                <p>&nbsp;</p>
                <p>Mit freundlichen Grüßen,<br>
                Ihr Karma Bavaria Team</p>-->

                <?php } ?>
                </div>


                		<div class="bvg_content item">
		<p class="content1">Lowest Price Guaranteed</p>
		<div class="block2">
		<p class="content2">NO HIDDEN FEES</p>
		<p class="content3"><img src="<?php echo get_option( 'home' ).'/wp-content/uploads/images-bvg/hidden.jpg'; ?>" width="58" height="43" alt="icon-karma" >If you find our hotel for a lower, publicly available rate within 24 hours of booking, we'll match it and give you 10% off.</p>
		</div>
		<div class="block2">
		<p class="content2">EXCLUSIVE OFFERS</p>
		<p class="content3"><img src="<?php echo get_option( 'home' ).'/wp-content/uploads/images-bvg/exclusive-offer.jpg'; ?>" width="58" height="43" alt="Karma icon" >If you keep an eye on our website, you will find some amazing offers not available anywhere else</p>
		</div>
		<div class="block2">
		<p class="content2">BEST SERVICE</p>
		<p class="content3"><img src="<?php echo get_option( 'home' ).'/wp-content/uploads/images-bvg/best-hotel-information.jpg'; ?>" width="58" height="43" alt="Karma Icon" >Booking direct will offer you the best service during your stay</p>
		</div>
		<div class="block2">
		<p class="content2">EXPERT RESERVATIONS TEAM</p>
		<p class="content3"><img src="<?php echo get_option( 'home' ).'/wp-content/uploads/images-bvg/call-center.jpg'; ?>" width="58" height="43" alt="Karma Icon" > Access to our on site dedicated reservations specialists, ready to assist you with any questions you may have </p>
		</div>
                <br>
                <br>
                </div>
        </div>
    </div>
</div>

<?php if(get_the_ID()=='731' || get_the_ID()=='3143') {?>

<script>
$(document).ready(function() {

$(".bvg_popup .item").hide();
$(".bvg_popup .bavaria_information").show();

$(".bvg_popup_container").css({
"display": "none"
});
$(".bvg_popup").css({
"display": "none"
});
$('.cf .close_btn').on('click', function(e) {
e.preventDefault();
$('.bvg_popup').fadeOut();
$('.bvg_popup_container').fadeOut();
});
$('.bvg_popup_container').on('click', function(e) {
e.preventDefault();
$('.bvg_popup').fadeOut();
$('.bvg_popup_container').fadeOut();
});
});
</script>
<?php } ?>

<script type="text/javascript">
$('.cf .close_btn').on('click', function(e) {
e.preventDefault();
$('.bvg_popup').fadeOut();
$('.bvg_popup_container').fadeOut();
});
$('.bvg_popup_container').on('click', function(e) {
e.preventDefault();
$('.bvg_popup').fadeOut();
$('.bvg_popup_container').fadeOut();
});
</script>

        <footer>



        <?php if (get_the_id()=='214') { ?>
            <!-- ==================================== Karma Group - Homepage ==================================== -->
            <!-- Sojern Tag v6_js, Pixel Version: 1 -->
            <script>
              (function () {

                var params = {};

                /* Please do not modify the below code. */
                var cid = [];
                var paramsArr = [];
                var cidParams = [];
                var pl = document.createElement('script');
                var defaultParams = {"vid":"hot"};
                for(key in defaultParams) { params[key] = defaultParams[key]; };
                for(key in cidParams) { cid.push(params[cidParams[key]]); };
                params.cid = cid.join('|');
                for(key in params) { paramsArr.push(key + '=' + encodeURIComponent(params[key])) };
                pl.type = 'text/javascript';
                pl.async = true;
                pl.src = 'https://beacon.sojern.com/pixel/p/128107?f_v=v6_js&p_v=1&' + paramsArr.join('&');
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(pl);
              })();

              (function () {

                var params = {};

                /* Please do not modify the below code. */
                var cid = [];
                var paramsArr = [];
                var cidParams = [];
                var pl = document.createElement('script');
                var defaultParams = {"vid":"hot"};
                for(key in defaultParams) { params[key] = defaultParams[key]; };
                for(key in cidParams) { cid.push(params[cidParams[key]]); };
                params.cid = cid.join('|');
                for(key in params) { paramsArr.push(key + '=' + encodeURIComponent(params[key])) };
                pl.type = 'text/javascript';
                pl.async = true;
                pl.src = 'https://beacon.sojern.com/pixel/p/128263?f_v=v6_js&p_v=1&' + paramsArr.join('&');
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(pl);
              })();

              (function () {

                var params = {};

                /* Please do not modify the below code. */
                var cid = [];
                var paramsArr = [];
                var cidParams = [];
                var pl = document.createElement('script');
                var defaultParams = {"vid":"hot"};
                for(key in defaultParams) { params[key] = defaultParams[key]; };
                for(key in cidParams) { cid.push(params[cidParams[key]]); };
                params.cid = cid.join('|');
                for(key in params) { paramsArr.push(key + '=' + encodeURIComponent(params[key])) };
                pl.type = 'text/javascript';
                pl.async = true;
                pl.src = 'https://beacon.sojern.com/pixel/p/128400?f_v=v6_js&p_v=1&' + paramsArr.join('&');
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(pl);
              })();
            </script>
            <script>
              (function () {

                var params = {};

                /* Please do not modify the below code. */
                var cid = [];
                var paramsArr = [];
                var cidParams = [];
                var pl = document.createElement('script');
                var defaultParams = {"vid":"hot"};
                for(key in defaultParams) { params[key] = defaultParams[key]; };
                for(key in cidParams) { cid.push(params[cidParams[key]]); };
                params.cid = cid.join('|');
                for(key in params) { paramsArr.push(key + '=' + encodeURIComponent(params[key])) };
                pl.type = 'text/javascript';
                pl.async = true;
                pl.src = 'https://beacon.sojern.com/pixel/p/135964?f_v=v6_js&p_v=1&' + paramsArr.join('&');
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(pl);
              })();
            </script>
            <!-- End Sojern Tag -->

        <?php } else if (get_the_id()=='193') { ?>

            <!-- ====================================
            Karma Kandara - Homepage
            ====================================
            Pixel ID : 128400
            ==================================== -->
                        <!-- Sojern Tag v6_js, Pixel Version: 1 -->
                        <script>
                          (function () {

                                var params = {};

                                /* Please do not modify the below code. */
                                var cid = [];
                                var paramsArr = [];
                                var cidParams = [];
                                var pl = document.createElement('script');
                                var defaultParams = {"vid":"hot"};
                                for(key in defaultParams) { params[key] = defaultParams[key]; };
                                for(key in cidParams) { cid.push(params[cidParams[key]]); };
                                params.cid = cid.join('|');
                                for(key in params) { paramsArr.push(key + '=' + encodeURIComponent(params[key])) };
                                pl.type = 'text/javascript';
                                pl.async = true;
                                pl.src = 'https://beacon.sojern.com/pixel/p/128400?f_v=v6_js&p_v=1&' + paramsArr.join('&');
                                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(pl);
                          })();
                        </script>
                        <!-- End Sojern Tag -->


        <?php } else if (get_the_id()=='837') { ?>

            <!-- ====================================
            Karma Jimbaran - Homepage
            ====================================
            Pixel ID : 128263
            ==================================== -->
            <!-- Sojern Tag v6_js, Pixel Version: 1 -->
            <script>
              (function () {

                var params = {};

                /* Please do not modify the below code. */
                var cid = [];
                var paramsArr = [];
                var cidParams = [];
                var pl = document.createElement('script');
                var defaultParams = {"vid":"hot"};
                for(key in defaultParams) { params[key] = defaultParams[key]; };
                for(key in cidParams) { cid.push(params[cidParams[key]]); };
                params.cid = cid.join('|');
                for(key in params) { paramsArr.push(key + '=' + encodeURIComponent(params[key])) };
                pl.type = 'text/javascript';
                pl.async = true;
                pl.src = 'https://beacon.sojern.com/pixel/p/128263?f_v=v6_js&p_v=1&' + paramsArr.join('&');
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(pl);
              })();
            </script>
            <!-- End Sojern Tag -->

        <?php } else if (get_the_id()=='866') {?>

            <!-- ====================================
            Karma Reef - Homepage
            ====================================
            Pixel ID : 128107
            ==================================== -->
            <!-- Sojern Tag v6_js, Pixel Version: 1 -->
            <script>
              (function () {

                var params = {};

                /* Please do not modify the below code. */
                var cid = [];
                var paramsArr = [];
                var cidParams = [];
                var pl = document.createElement('script');
                var defaultParams = {"vid":"hot"};
                for(key in defaultParams) { params[key] = defaultParams[key]; };
                for(key in cidParams) { cid.push(params[cidParams[key]]); };
                params.cid = cid.join('|');
                for(key in params) { paramsArr.push(key + '=' + encodeURIComponent(params[key])) };
                pl.type = 'text/javascript';
                pl.async = true;
                pl.src = 'https://beacon.sojern.com/pixel/p/128107?f_v=v6_js&p_v=1&' + paramsArr.join('&');
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(pl);
              })();
            </script>
            <!-- End Sojern Tag -->
        <?php } else if (get_the_id()=='802') {?>

        <!-- Sojern Tag v6_js, Pixel Version: 1 -->
        <script>
          (function () {

            var params = {};

            /* Please do not modify the below code. */
            var cid = [];
            var paramsArr = [];
            var cidParams = [];
            var pl = document.createElement('script');
            var defaultParams = {"vid":"hot"};
            for(key in defaultParams) { params[key] = defaultParams[key]; };
            for(key in cidParams) { cid.push(params[cidParams[key]]); };
            params.cid = cid.join('|');
            for(key in params) { paramsArr.push(key + '=' + encodeURIComponent(params[key])) };
            pl.type = 'text/javascript';
            pl.async = true;
            pl.src = 'https://beacon.sojern.com/pixel/p/135964?f_v=v6_js&p_v=1&' + paramsArr.join('&');
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(pl);
          })();
        </script>
        <!-- End Sojern Tag -->
        <?php } ?>



            <div class="upper_footer">
                <div class="container cf">
                    <div class="col left footer_header">
                        <h2 class="gold_footer_header" title="Karma Group – Luxury Hotels and Resorts">Karma Group</h2>
                    </div>
                    <div class="col one left half">
                        <h1 id="changeSizeBotom"><a href="<?php echo get_option( 'home' ); ?>/find-destination/" title="<?php echo $language[$lang]['menu_find_destination']; ?>"><?php echo $language[$lang]['menu_find_destination']; ?></a></h1>

                        <h1 id="changeSizeBotom"><a href="<?php echo get_option( 'home' ); ?>/karma-experiences/" title="<?php echo $language[$lang]['menu_karma_experiences']; ?>"><?php echo $language[$lang]['menu_karma_experiences']; ?></a></h1>
                        <li><a href="<?php echo get_option( 'home' ); ?>/inspiration/" title="<?php echo $language[$lang]['menu_inspiration']; ?>"><?php echo $language[$lang]['menu_inspiration']; ?></a></li>
                        <li><a href="<?php echo get_option( 'home' ); ?>/karma-beach/" title="<?php echo $language[$lang]['menu_karma_beach']; ?>"><?php echo $language[$lang]['menu_karma_beach']; ?></a></li>
                        <li><a href="<?php echo get_option( 'home' ); ?>/karma-spa/" title="<?php echo $language[$lang]['menu_karma_spa']; ?>"><?php echo $language[$lang]['menu_karma_spa']; ?></a></li>
                        <li><a href="<?php echo get_option( 'home' ); ?>/karma-boutique/" title="<?php echo $language[$lang]['menu_karma_boutique']; ?>"><?php echo $language[$lang]['menu_karma_boutique']; ?></a></li>
                        <li><a href="<?php echo get_option( 'home' ); ?>/gallery/" title="<?php echo $language[$lang]['menu_karma_image_gallery']; ?>">Image Gallery</a></li>
<h1 id="changeSizeBotom"><a href="https://karmagroup.com/blog/" title="Blog" target="_blank">Blog</a></h1>			
			<h1 id="changeSizeBotom"><a href="http://www.alldayjazz.fm/" title="Karma Radio" target="_blank">Karma Radio</a></h1>
                        <h1 id="changeSizeBotom"><a href="<?php echo get_option( 'home' ); ?>/exclusive-offers/" title="<?php echo $language[$lang]['menu_exclusive_offers']; ?>"><?php echo $language[$lang]['menu_exclusive_offers']; ?></a></h1>
                        <h1 id="changeSizeBotom"><a href="<?php echo get_option( 'home' ); ?>/terms-and-conditions/" title="Terms and Conditions">Terms and Conditions</a></h1>
                        <h1 id="changeSizeBotom"><a href="<?php echo get_option( 'home' ); ?>/privacy-policy/" title="Privacy Policy">Privacy Policy</a></h1>
                        
                        <?php if (get_the_id()=='914') { echo '<h3><a href="https://karmagroup.com/ksm-accessibility-statement/" title="Karma St. Martin\'s Accessibility Statement">Accessibility Statement</a></h3>'; } ?>
                        <?php if (get_the_id()=='8291' || get_the_id()=='914') { echo '<h3><a href="https://karmagroup.com/find-destination/karma-retreats/karma-st-martins/terms-and-conditions/" title="Karma St. Martin\'s Terms and Conditions">Resort Terms and Conditions</a></h3>'; } ?>
                                    <?php if (get_the_id()=='8304' || get_the_id()=='731') { echo '<h3><a href="https://karmagroup.com/find-destination/karma-resorts/karma-bavaria/terms-and-conditions/" title="Karma Bavaria Terms and Conditions">Resort Terms and Conditions</a></h3>'; } ?>
                        <?php if (get_the_id()=='19253' || get_the_id()=='11522') { echo '<h3><a href="https://karmagroup.com/find-destination/karma-retreats/karma-residence-normande/terms-and-conditions/" title="Karma Residence Normande Terms and Conditions">Resort Terms and Conditions</a></h3>'; } ?>
                        <?php if (get_the_id()=='11873' || get_the_id()=='19255') { echo '<h3><a href="https://karmagroup.com/find-destination/karma-retreats/karma-manoir-des-deux-amants/terms-and-conditions/" title="Karma Manoir des Deux Amants Terms and Conditions">Resort Terms and Conditions</a></h3>'; } ?>
                        </div><!-- .col -->

                    <div class="col two left half">
			<h1 id="changeSizeBotom"><a href="https://karmagroup.com/app-location-info/" title="App Location Info">App Location Info</a></h1>
			<h1 id="changeSizeBotom"><a href="<?php echo get_option( 'home' ); ?>/sitemap/" title="Sitemap">Sitemap</a></h1>
                        <h1 id="changeSizeBotom"><a href="<?php echo get_option( 'home' ); ?>/news-events/" title="<?php echo $language[$lang]['menu_news_events']; ?>"><?php echo $language[$lang]['menu_news_events']; ?></a></h1>
                        <li><a href="<?php echo get_option( 'home' ); ?>/awards-accolades/" title="<?php echo $language[$lang]['menu_awards_accolades']; ?>"><?php echo $language[$lang]['menu_awards_accolades']; ?></a></li>
                        <!--<li><a href="<?php echo get_option( 'home' ); ?>/karma-curators/" title="<?php echo $language[$lang]['menu_karma_curators']; ?>"><?php echo $language[$lang]['menu_karma_curators']; ?></a></li>-->
                        <li><a href="<?php echo get_option( 'home' ); ?>/karma-cares/" title="<?php echo $language[$lang]['menu_karma_cares']; ?>"><?php echo $language[$lang]['menu_karma_cares']; ?></a></li>

                 <li><a href="<?php echo get_option( 'home' ); ?>/eventcalendar" title="<?php echo $language[$lang]['menu_eventcalendar']; ?>"><?php echo $language[$lang]['menu_eventcalendar']; ?></a></li>

			<h1 id="changeSizeBotom"><a href="<?php echo get_option( 'home' ); ?>/karma-curators/" title="<?php echo $language[$lang]['menu_karma_curators']; ?>"><?php echo $language[$lang]['menu_karma_curators']; ?></a></h1>
                        <h1 id="changeSizeBotom"><a href="<?php echo get_option( 'home' ); ?>/contact-us/" title="<?php echo $language[$lang]['menu_contact_us']; ?>"><?php echo $language[$lang]['menu_contact_us']; ?></a></h1>
                        <li><a href="<?php echo get_option( 'home' ); ?>/karma-careers/" title="<?php echo $language[$lang]['menu_careers']; ?>"><?php echo $language[$lang]['menu_careers']; ?></a></li>
                        <li><a href="<?php echo get_option( 'home' ); ?>/media/" title="<?php echo $language[$lang]['menu_media']; ?>"><?php echo $language[$lang]['menu_media']; ?></a></li>
                        <li><a href="<?php echo get_option( 'home' ); ?>/socialmedia/" title="<?php echo $language[$lang]['menu_karma_social']; ?>"><?php echo $language[$lang]['menu_karma_social']; ?></a></li>
                        <!--<li><a href="<?php echo get_option( 'home' ); ?>/gds/" title="<?php echo $language[$lang]['menu_gds_code']; ?>"><?php echo $language[$lang]['menu_gds_code']; ?></a></li>-->
                    </div><!-- .col -->



                    <div class="col four left">
                        <div class="gold_footer_header"><?php echo $language[$lang]['menu_newsletter']; ?></div>
                        <div class="form_container">
                              <form action="https://mx9.inboxgateway.com/form-process.php" method="post" id="newsletter_signup">

                                                <div class="confirmprocess">
							<p style="text-align: center;">
                                                        	<?php include 'imgs/fb-svg.php';?>
                                                        </p>
                                                      <p class="text-center text-inworking">Please wait while your submission is being processed... </p>
                                                </div>

                                                <input type="hidden" name="key" value="297" />
                                                <input type="hidden" name="uid" value="0" />
                                                <input type="hidden" name="sid" value="0" />
                                                <input type="hidden" name="hosted" value="0" />

                                                <input id="emailnewsletter"  type="email" name="field-1456130004" class="form-control" placeholder="Email" required>

                                                <div id="field-1427866079"><input id="field-1427866079-text" type="hidden" name="field-1427866079" value="Resorts"></div>
                                                <div id="field-1427866111"><input id="field-1427866111-text" type="hidden" name="field-1427866111" value="Karma Group"></div>
                                                <div id="field-1427866217"><input id="field-1427866217-text" type="hidden" name="field-1427866217" value="Web"></div>
                                                <div id="field-1427866260"><input id="field-1427866260-text" type="hidden" name="field-1427866260" value="All"></div>
                                                <div id="field-1428569141"><input id="field-1428569141-text" type="hidden" name="field-1428569141" value="KG Digital Web Newsletter"></div>
                                                <div id="field-1450837999"><input id="field-1450837999-text" type="hidden" name="field-1450837999" value="cfb005bf-ac11-698b-7475-55f90545dadf"></div>

                                                <div id="kgnewsletter">

                                                </div>
                                                <div id="errornewsletter">Please check the Captcha</div>



                                                <button id="newsletter_signup_submit" value="getResponse" type="submit" class="white_button"><?php echo $language[$lang]['menu_signup']; ?></button>
                            </form>
                        </div>


                    </div><!-- .col -->
                    <div class="col five left half">
                        <div class="gold_footer_header">Mobile Apps</div>
                        <img class="phone-image" src="<?php echo get_template_directory_uri().'/imgs/karma-app-new-screen.png' ?>" alt="phone"/>
                    </div><!-- .col -->
                    <div class="col six left half">
                        <p class="download-desc">
                          <strong>DOWNLOAD FREE-FLOWING KARMA</strong>
                        </p>
                        <p class="desc_app">
<!--                          <strong>BOOK TODAY TO GET 15 % OFF YOUR NEXT KARMA STAY</strong> -->

                         </p>

                        <p class="download-icon">
                          <a target="_blank" href="https://play.google.com/store/apps/details?id=com.karmagroups" title="Download at Play Store">
                            <img class="store-icon" src="<?php echo get_template_directory_uri().'/imgs/Google-Play.png' ?>" alt="Download at Play Store"/>
                          </a>
                          <a target="_blank" href="https://itunes.apple.com/in/app/karma-resorts/id1296156992?mt=8" alt="app store link download" title="Download at App Store">
                            <img class="store-icon" src="<?php echo get_template_directory_uri().'/imgs/Apple-app-store.png' ?>" alt="Download at App Store"/>
                          </a>
                        </p>
                        <p class="desc_app">
                        Put more service & savings in your pocket
                        </p>
                    </div> <!-- .col -->

                </div><!-- .container -->
            </div>


            <div class="lower_footer">
                <div class="container cf">

                    <div class="left">
                        <p class="copy_date">&copy;<?php echo date('Y'); ?> Karma Group</p>
                    </div>

                    <div class="right">
                        <div class="social_icons_group">
                            <a href="https://www.facebook.com/karmagroupglobal/" target="_blank" rel="noopener" class="icon facebook" title="Follow Karma Group on Facebook"></a>
                            <a href="https://twitter.com/karmaresorts/" target="_blank" rel="noopener" class="icon twitter" title="Follow Karma Group on Twitter"></a>
                             <!-- <a href="https://plus.google.com/101436425686850036188/about/" target="_blank" rel="noopener" class="icon gplus" title="Follow Karma Group on Google Plus"></a>-->
                            <a href="https://instagram.com/karma.group/" target="_blank" rel="noopener" class="icon instagram" title="Follow Karma Group on Instagram"></a>
                             <!-- <a href="https://www.snapchat.com/add/karmabeachclubs/" target="_blank" rel="noopener" class="icon flickr" title="Follow Karma Group on Flickr"></a>-->
                            <a href="https://www.youtube.com/user/karmaresorts/" target="_blank" rel="noopener" class="icon youtube" title="Follow Karma Group on YouTube"></a>
                             <!-- <a href="https://soundcloud.com/karmamusiccollection/" target="_blank" rel="noopener" class="icon soundcloud" title="Follow Karma Group on Soundcloud"></a>-->
                            <a href="http://www.tripadvisor.co.uk/Hotel_Review-g1219108-d1147233-Reviews-Karma_Kandara-Ungasan_Nusa_Dua_Peninsula_Bali.html" target="_blank" rel="noopener" class="icon tripadvisor" title="Follow Karma Group on Tripadvisor"></a>
                            <a href="http://staff.karmagroup.com/" target="_blank" ><div class="staff_login" title="Staff Login">Staff Login<span class="icon"></span></div></a>
                        </div>

                    </div><!-- .right -->

                </div><!-- .container -->
            </div>

        </footer>

      <?php
      if(get_the_ID()=='713') {
        include 'inc/blocks/enquiryspa_form.php'; // spa pop up reservation
        include 'inc/blocks/enquiry_form.php';
        include 'inc/blocks/enquiry_form_timeshare.php';
	include 'inc/blocks/enquiryspa_and_wellbeing_form.php';
      }
      else {
        include 'inc/blocks/enquiry_form.php'; // pop up hotel reservation
        include 'inc/blocks/enquiry_form_timeshare.php';
        include 'inc/blocks/enquiryspa_form.php';
	include 'inc/blocks/enquiryspa_and_wellbeing_form.php';
      }

      // Create an array of pages where we want Google Analytics to feature
      $gAnalyticsPages = array('karma-kandara', 'karma-jimbaran', 'rottnest-island');
      $analyticsClientPrefix = '';

      // Select analytics code based on certain page
      //switch ($page->getCollectionHandle()) {
      switch ($post->post_name) {
            case 'karma-kandara':
                 $analyticsAccID = 'UA-70462293-1';
                 $analyticsClientPrefix = 'karma-kandara';
                 $tbb_domain = 'www.thebookingbutton.com.au';
            break;

            case 'karma-jimbaran':
                  $analyticsAccID = 'UA-70462293-1';
                  $analyticsClientPrefix = 'karma-jimbaran';
                  $tbb_domain = 'www.thebookingbutton.com.au';
            break;

            case 'karma-rottnest':
                  $analyticsAccID = 'UA-70462293-1';
                  $analyticsClientPrefix = 'rottnest-island';
                  $tbb_domain = 'www.thebookingbutton.com.au';
            break;
      } ?>

      <?php if (in_array($analyticsClientPrefix, $gAnalyticsPages)): ?>
      <?php /* //disable tracking code: based on wdmarketing request
            <script type="text/javascript">

            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

               var tbb_ga = '<?php echo $analyticsAccID; ?>';
               var tbb_cid = 'karmagroup'; //'<?php echo $analyticsClientPrefix; ?>';
               var tbb_domain = '<?php echo $tbb_domain; ?>';

               ga('create', tbb_ga, {'allowLinker': true});
               ga('require', 'linker');
               ga('linker:autoLink', [tbb_domain], false, true);
               ga('send', 'pageview');

               ga(function(tracker) {
                  window.linker = window.linker || new window.gaplugins.Linker(tracker);
                 if(document.referrer.indexOf(document.domain)!=7) {
                   var e = document.createElement('iframe');
                   e.src = window.linker.decorate('//'+tbb_domain+'/'+tbb_cid+'/ga_proxy');
                   e.setAttribute('style', 'display:none');
                   var b = document.getElementsByTagName('body')[0];
                   b.appendChild(e);
                  }
               });

               // Automatically apply TBB prefix to thebookingbutton links
               $(document).ready(function(){
                 $('a[href*="'+tbb_domain+'"]').each(function(){
                     this.href = this.href.replace(new RegExp(tbb_domain+'/properties', 'i'), tbb_domain+'/'+tbb_cid+'/properties');
                 });
               });

            </script>
            */ ?>
      <?php endif; ?>

<script src="//trk.securenetgate9.com/analytics/log.js" type="text/javascript" defer='defer'></script>
<script type="text/javascript">
var clientId = "808-154";
var trackingServerPath = "//trk.securenetgate9.com/analytics";
var trackingPermissionBox = false;
var trackingPermissionText = "";
$(window).load(function(){
    forwardData(document.title, document.URL, document.referrer);
})
</script>

      <ul class="quick_enquire" style="display:none;">
            <li class="live_chat_btn">
                <!-- This code must be installed within the body tags -->
                <script type="text/javascript">
                    var lhnAccountN = "27235-1";
                    var lhnButtonN = 8104;
                    var lhnChatPosition = 'default';
                    var lhnInviteEnabled = 1;
                    var lhnWindowN = 0;
                    var lhnDepartmentN = 0;
                </script>
                <a href="http://www.livehelpnow.net/products/live-chat-system" target="_blank" rel="noopener" id="lhnHelp" title="Live Chat">best live chat</a>
                <script src="//www.livehelpnow.net/lhn/widgets/chatbutton/lhnchatbutton-current.min.js" type="text/javascript" id="lhnscript" defer='defer'></script>
            </li>
            <a href="#" onclick="showContactForm();" title="Email Enquiry"><li class="email_enquiry_btn">Email Enquiry</li></a>
      </ul>
      </div><!-- /#site_wrapper -->

<div id="leftstickymenu">
    <a class="booking" title="Booking"></a>
    <!-- <a class="chat" title="Chat" onclick="OpenLHNChat();return false;"></a>
    <a class="email" title="Email" onclick="showContactForm();"></a> -->
</div>


<div id="rightcontact">

    <a class="chat" title="Chat" onclick="OpenLHNChat();return false;"></a>
    <a class="email" title="Email" onclick="showContactForm();"></a>

</div>

<div class="tops"></div>
    <div class="bottoms"></div>


<!----POPUP KARMA SPA BAVARIA MENU-->
<style type="text/css">
#simple_popup_1_wrapper{
background-color: rgba(0,0,0,.5);
position: fixed;
width: 100%;
top: 0;
height: 100vh;
z-index: 9999999;
display: none;
}
#simple_popup_1 {
margin: calc(50vh - 85px) auto 20px;
width: 280px;
padding: 15px;
height: 60px;
display: table;
background-color: #8A6F47;
border: 5px solid #C6B8A4;
color: #fff;
line-height: 175%;
}
#simple_popup_1 a{
color: #fff;
}
</style>
<div id="simple_popup_1_wrapper"><div id="simple_popup_1">
<!-- <span>close</span>       -->
<p><a href="https://karmagroup.com/wp-content/uploads/2018/02/karma-bavaria-spa-compendium-menu-180117.pdf" target="_blank" rel="noopener">Download English Version</a></p>
<p><a href="https://karmagroup.com/wp-content/uploads/2018/02/Karma-Bavaria-Spa-Compendium-Menu-Germany.pdf" target="_blank" rel="noopener">Download Germany Version</a></p>
</div></div>
<!----END POPUP KARMA SPA BAVARIA MENU-->

<style type="text/css">
#floating_image_link {
position: fixed;
top: 45%;
right: -30px;
z-index: 9;
}
#floating_image_link a img{
opacity: .5;
transition:all 0.3s ease;
height: 140px;
}
#floating_image_link a:hover img{
opacity: 1;
}

@media screen and (max-width: 1023px) {
#floating_image_link {
top: auto;
bottom: 10px;
right: -20px;
}
#floating_image_link a img{
height: 90px;
}
}
</style>

<script src="<?php echo get_template_directory_uri(). '/booking/bootstrap-datepicker.js'?>" defer='defer'></script>
<!-- Inbox Gateway -->
<script src="//trk.mx9.inboxgateway.com/analytics/log.js" type="text/javascript" defer='defer'></script>
<script type="text/javascript">
    var clientId = "350-14";
    var trackingServerPath = "//trk.mx9.inboxgateway.com/analytics";
    var trackingPermissionBox = false;
    var trackingPermissionText = "";
    $(window).load(function(){
        forwardData(document.title, document.URL, document.referrer);
    })
</script>

    <!---BEGIN CUSTOM FORM SELECT-->
    <?php
        $resort_selected_id = get_the_ID();
        switch (get_the_ID()) {
            case 731:
                $resort_selected_id = 1;
                break;
	    case 3143: //bavaria de live
                $resort_selected_id = 1;
                break;
            case 837:
                $resort_selected_id = 3;
                break;
            case 193:
                $resort_selected_id = 4;
                break;
            case 802:
                $resort_selected_id = 5;
                break;
            case 866:
                $resort_selected_id = 9;
                break;
            case 914:
                $resort_selected_id = 10;
                break;
            case 1087:
                $resort_selected_id = 14;
                break;
            case 11873:
                $resort_selected_id = 11322;
                break;
            case 11522:
                $resort_selected_id = 11357;
                break;
        }
    ?>

<style type="text/css">

            #rightcontact {
                background: url(https://storage.googleapis.com/karmagroup-d66ca.appspot.com/karmagroupcdn/2018/05/acfa85dd-contact.png) no-repeat;
                background-size: 100% 100%;
                width: 180px;
                height: 130px;
                position: fixed;
                bottom: 87px;
                right: 87px;
                display: none;
                z-index: 9999;

                /* border-radius: 50%; */
                overflow: hidden;
                opacity: .85;
                transition: all 0.3s ease;
                /* box-shadow: 0 0 30px rgba(0, 0, 0, .3) */
            }

            .tops {
                background-size: 100% 100%;
                width: 153px;
                height: 48px;
                display: none;
                position: fixed;
                bottom: 154px;
                right: 100px;
                z-index: 1;
                cursor: pointer;
                border-radius: 25px;
                overflow: hidden;
                box-shadow: 0 0 30px rgba(0, 0, 0, .3);

            }

           .bottoms {
                background-size: 100% 100%;
                width: 153px;
                height: 54px;
                display: none;
                position: fixed;
                bottom: 95px;
                right: 100px;
                z-index: 1;
                cursor: pointer;
                border-radius: 25px;
                overflow: hidden;
                box-shadow: 0 0 30px rgba(0, 0, 0, .3);
            }

            #rightcontact .chat {
                width: 50%;
                height: 45px;
                display: table;
                float: left;
                margin-top: 65px;
                cursor: pointer;
                z-index: 9999;
            }

            #rightcontact .email {
                width: 50%;
                height: 45px;
                display: table;
                float: left;
                margin-top: 65px;
                cursor: pointer;
                z-index: 9999;
            }

            #right_floating_btn {
                width: 130px;
                height: 130px;
                display: table;
                position: fixed;
                top: 40%;
                right: -25px;
                z-index: 9999;
                cursor: pointer;
                border-radius: 50%;
                overflow: hidden;
                background-size: 130px 130px!important;
                background: url(https://storage.googleapis.com/karmagroup-d66ca.appspot.com/karmagroupcdn/2018/05/acfa85dd-contact.png) no-repeat;
                opacity: .8;
                transition: all 0.3s ease;
                box-shadow: 0 0 30px rgba(0, 0, 0, .3)
            }

            #right_floating_btn.active,
            #right_floating_btn:hover {
                opacity: 1;
                right: -25px;
                top: calc(40% - 5px);
                width: 140px;
                height: 140px;
                background-size: 140px 140px!important
            }

            #right_floating_btn.mobile {
                width: 90px;
                height: 90px;
                right: -15px;
                background-size: 95px 95px!important;
                background-position: -2.4px -2.4px;
                bottom: 10px!important;
                top: auto
            }

            #right_floating_content {
                display: table;
                position: fixed;
                top: calc(40% - 15px);
                right: 5px;
                z-index: 9998;
                cursor: pointer;
                overflow: hidden;
                display: none
            }

            #right_floating_content.mobile {
                top: auto;
                bottom: 20px
            }

            #right_floating_content.mobile img {
                height: 67px
            }

            #leftstickymenu {
                background: url(https://storage.googleapis.com/karmagroup-d66ca.appspot.com/karmagroupcdn/2018/05/26cbc622-book-now.png) no-repeat;
                background-size: 100% 100%;
                width: 130px;
                height: 130px;
                display: table;
                position: fixed;
                bottom: 87px;
                left: 87px;
                display: none;
                z-index: 9999;
                cursor: pointer;
                border-radius: 50%;
                overflow: hidden;
                opacity: .85;
                transition: all 0.3s ease;
                box-shadow: 0 0 30px rgba(0, 0, 0, .3)
            }



            #leftstickymenu:hover,
            #leftstickymenu.active {
                opacity: 1
            }

            #leftstickymenu .booking {
                width: 100%;
                height: 100%;
                display: table;
                float: left;
                margin-top: 8px
            }



            .leftstickymenu_booking .lpg {
                left: 40px;
                bottom: 10px;
                display: none
            }

            .leftstickymenu_booking {
                position: fixed!important;
                bottom: 105px!important;
                left: 194px!important;
                z-index: 999;
                border: 5px solid #fff;
                height: 95px;
                display: none;
                width: 0
            }

            .leftstickymenu_booking .deviceCover {
                margin-left: 20px
            }

            .leftstickymenu_booking #submitButton {
                margin: 0!important
            }

            .leftstickymenu_booking.bookingMask .form label {
                margin-bottom: 3px
            }

            .leftstickymenu_booking.stickybottom .form fieldset {
                margin-top: -4px!important
            }

            .leftstickymenu_booking.stickybottom .subyeartitle {
                display: table;
                margin-top: 5px
            }

            .leftstickymenu_booking.active {
                display: block
            }

            .leftstickymenu_booking.inactive {
                display: hide
            }

            .leftstickymenu_booking.done {
                width: 795px!important
            }

            .stickybottom {
                position: fixed!important;
                bottom: -40px!important;
                left: calc(50% - 215px)!important;
                z-index: 999
            }

            .stickybottom.bookingMask .form label {
                margin-bottom: 3px
            }

            .bookingMask.stickybottom .form fieldset {
                margin-top: -4px!important
            }

            .bookingMask.stickybottom .subyeartitle {
                display: table;
                margin-top: 5px
            }

            #mobile_booking_intro_wrapper {
                background-color: #101820;
                font-size: 14px;
                padding: 2px 20px 5px;
                color: #fff!important
            }

            .home #mobile_booking_intro_wrapper {
                display: none
            }

            #mobile_booking_intro_wrapper h2 {
                margin-top: 15px
            }

            #mobile_booking_intro_wrapper .georgia_font {
                color: #fff!important;
                padding: 0!important
            }

            #mobile_booking_intro_wrapper .white_button {
                display: none
            }

            #mobile_booking_intro_wrapper .row {
                display: table
            }

            #mobile_booking_intro_wrapper img {
                margin: 15px 15px 0 0!important
            }

            #mobile_booking_intro_wrapper .best_value_btn {
                margin: 0 0 10px!important;
                width: 100%!important
            }

            .bookingMask.active_in_mobile {
                display: table!important
            }

            .bookingMask.inactive_in_mobile {
                display: none!important
            }

            @media (max-width:768px) {
                .home #open_destination_mobile_wrapper,
                .open_booknow_mobile {
                    display: block!important
                }
                .home .open_booknow_mobile {
                    display: none!important
                }
            }

            @media (max-width:414px) {
                .bvg_popup .block2 {
                    width: 100%;
                    float: none
                }
            }
</style>
<style>

#g-recaptcha-response{
        display: none !important;
}
#g-recaptcha-response-1{
    display: none !important;
}
</style>
<script>

    var userCheck1;
        var userCheck;

        var verifyCallback = function(response) {
                // userCheck = response;
        userCheck = grecaptcha.getResponse(widgetId1);
        };

    var verifyCallback2 = function(response) {
        userCheck1 = grecaptcha.getResponse(widgetId2);
    };



    var widgetId1;
    var widgetId2;

        var onloadCallback = function() {

    widgetId1 = grecaptcha.render(document.getElementById('kgnewsletter'), {
         "sitekey" : "6LfydUkUAAAAAMRq9cgPDWxow-Azd3-MiOawC9OK",
         "callback" : verifyCallback,
         'theme' : 'dark'
    });

    widgetId2 = grecaptcha.render(document.getElementById('contactuskg'), {
         "sitekey" : "6LfydUkUAAAAAMRq9cgPDWxow-Azd3-MiOawC9OK",
         "callback" : verifyCallback2,
         'theme' : 'dark'
    });




 };

</script>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>

    <script>
        (function() {

           //BEGIN DESKTOP RIGHT FLOATING BUTTON
           if($(window).width() > 767){

                $('#right_floating_btn').click(function(){

                    if($(this).hasClass('active')){

                        $(this).removeClass('active');
                        $(this).addClass('inactive');
                        $('#right_floating_content').hide();
                    }else{

                        $(this).addClass('active');
                        $(this).removeClass('inactive');

                        $('#right_floating_content').css({'opacity': 0, 'width': 0});
                        $('#right_floating_content').show();

                          $( "#right_floating_content" ).animate({
                            opacity: "+=1",
                            width: "+=500"
                          }, 500, function() {
                            //$('#right_floating_content').show();
                          });
                    }
                });
            }else{

                //$('#right_floating_btn').hide();
                $('#right_floating_btn').addClass('mobile');
                $('#right_floating_content').addClass('mobile');

                $('#right_floating_btn').click(function(){

                    if($(this).hasClass('active')){

                        $(this).removeClass('active');
                        $(this).addClass('inactive');
                        $('#right_floating_content').hide();
                    }else{

                        $(this).addClass('active');
                        $(this).removeClass('inactive');

                        $('#right_floating_content').css({'opacity': 0, 'width': 0});
                        $('#right_floating_content').show();

                        $( "#right_floating_content" ).animate({
                        opacity: "+=1",
                        width: "+=310"
                        }, 500, function() {
                            //$('#right_floating_content').show();
                        });
                    }
                });

                if ($('.right .content_upper').length){

                    $('#banner').after('<div id="mobile_booking_intro_wrapper">'+ $('.right .content_upper').html() +'</div>');
                }
            }
            //END DESKTOP RIGHT FLOATING BUTTON

           //BEGIN DESKTOP leftstickymenu
           if($(window).width() > 768){

                var bookingbar = $('#ctrlSiteHeader_ctrlBooking_ctrlBookingDevice');

                $(window).scroll(function() {

                    if($(window)['scrollTop']() > 436){

                        bookingbar.addClass('leftstickymenu_booking');
                        $('#leftstickymenu').show();
                        $('#rightcontact').show();
                        $('.tops').show();
                        $('.bottoms').show();
                    }else{

                        bookingbar.removeClass('leftstickymenu_booking');
                        $('#leftstickymenu').hide();
                        $('#rightcontact').hide();
                        $('.tops').hide();
                        $('.bottoms').hide();

                        bookingbar.removeClass('active');
                        bookingbar.addClass('inactive');
                    }
                });

                $('#leftstickymenu .booking').click(function(){

                    if(bookingbar.hasClass('active')){

                        $('#leftstickymenu').removeClass('active');
                        $('#leftstickymenu').addClass('inactive');

                        bookingbar.removeClass('active');
                        bookingbar.addClass('inactive');

                    }else{

                        $('#leftstickymenu').removeClass('inactive');
                        $('#leftstickymenu').addClass('active');

                        bookingbar.addClass('active');
                        bookingbar.removeClass('inactive');
                        $('.leftstickymenu_booking').removeClass('done');

                        $('.leftstickymenu_booking').css({'opacity': 0, 'width': 0});
                        $('.leftstickymenu_booking .deviceCover').hide();

                          $( ".leftstickymenu_booking" ).animate({
                            opacity: "+=1",
                            width: "+=704"
                          }, 500, function() {
                            $('.leftstickymenu_booking').addClass('done');
                            $('.leftstickymenu_booking .deviceCover').show();
                          });
                    }
                });


//---services_slider2 amenities
if( $('#services_slider2').length){

$('#services_slider2 .slide_controls_services_amenities').click(function(){

$('html, body').animate({
scrollTop: ($("#services_slider2").offset().top - 160)
}, 500);
});
}

            }
            //END DESKTOP leftstickymenu
            else{

                $('.bookingMask').addClass('inactive_in_mobile');
                $('.open_booknow_mobile').click(function(){

                        if($(this).hasClass('active')){

                            $(this).removeClass('active');
                            $(this).addClass('inactive');

                            $( ".bookingMask " ).removeClass('active_in_mobile');
                            $( ".bookingMask " ).addClass('inactive_in_mobile');

                        }else{

                            $('html,body').animate({
                                scrollTop: 480
                            }, 500);

                            $(this).addClass('active');
                            $(this).removeClass('inactive');

                            $( ".bookingMask " ).addClass('active_in_mobile');
                            $( ".bookingMask " ).removeClass('inactive_in_mobile');

                        }
                });

                $('#make_reservation a.white_button').removeAttr('target');

            }

            var resort_selected_id = <?php echo $resort_selected_id; ?>;
            var target = $('#bookingDevice .formselect').find('.content');
            target.closest('.formselect').find('div').html(target.find('li#' + resort_selected_id).html());
            target.find('li#' + resort_selected_id).addClass('selected');
            $('#karmaResort').val(resort_selected_id);

            $('.formselect div').click(function(){

                var formselect_offset = $('.formselect').offset();

                if((formselect_offset.top-$(window)['scrollTop']()) < 300){
                    target.removeClass('dropup');
                    target.addClass('dropdown');
                }else{
                    target.removeClass('dropdown');
                    target.addClass('dropup');
                }

                if(target.hasClass('active')){
                    target.removeClass('active');
                    target.addClass('inactive');
                    target.fadeOut(100);
                }else{
                    target.removeClass('inactive');
                    target.addClass('active');
                    target.fadeIn(100);
                }
            });

            $('.formselect .content li.sub').click(function(){

                    $('#karmaResort').val($(this).attr('id')).trigger('change');
                    target.find('li').removeClass('selected');
                    target.find('li#' + $(this).attr('id')).addClass('selected');

                    //var target = $(this).closest('.formselect').find('.content');
                    $(this).closest('.formselect').find('div').html($(this).html());

                    target.removeClass('active');
                    target.addClass('inactive');
                    target.fadeOut(100);
            });


            $('.mobile_dropdown a.title').click(function(){

                $('.mobile_dropdown').show();

                var target = $(this).closest('li').find('.content');

                if(target.hasClass('active')){
                    target.removeClass('active');
                    target.addClass('inactive');
                    target.fadeOut(100);
                }else{
                    target.removeClass('inactive');
                    target.addClass('active');
                    target.fadeIn(800);
                }
            });

///POPUP Karma Spa Bavaria Menu
$('a[title="Karma Spa Bavaria Menu"]').click(function(){
$('#simple_popup_1_wrapper').show();
return false;
});
$('#simple_popup_1_wrapper').click(function(){
$(this).hide();
});

        })();
    </script>
<!-- end of booking code -->

    <script type="text/javascript" src="<?php echo get_option( 'home' ); ?>/wp-content/themes/karma/js/booNavigation.js"></script>
    <script>
        (function() {
            $('.header_nav').booNavigation({
                slideSpeed: 400
            });
        })();
    </script>

<!-- Google Code for Remarketing Tag -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 849002042; //869877494;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js" defer='defer'>
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="karmagroup" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/849002042/?guid=ON&amp;script=0"/>
</div>
</noscript>
<!-- eof -->
<?php wp_footer(); ?>
<?php

    /* pop up for karma property

    //Karma Reef
    //Karma Kandara
    //Karma Jimbaran
    //Karma Bavaria
    //Karma St Martin

    */

    if(get_the_ID()=='731') { //Karma Bavaria
    ?>
    <script>
    // $( document ).ready(function() {
    // $(".form_title").empty();
    // $(".form_title").append('A complimentary bottle of Karma Rose Wine on arrival when you book direct');
    // //$(".form_title").append('BLACK FRIDAY SAVINGS! Stay at Karma Bavaria for just €0.01. <br /><span style=\'font-size:10px;\'>Terms & Conditions apply. Book 2 nights and receive the 3rd for €0.01</span>');
    // showContactFormPopUp();
    // setTimeout(function() { $('.close_btn')[0].click(); }, 10000);
    // });
    </script>
    <!-- Google Code for Karma Bavaria -->
<script type="text/javascript">
  /* <![CDATA[ */
  goog_snippet_vars = function() {
    var w = window;
    w.google_conversion_id = 963363517;
    w.google_conversion_label = "UX2OCIan_msQvYWvywM";
    w.google_remarketing_only = false;
  }
  // DO NOT CHANGE THE CODE BELOW.
  goog_report_conversion = function(url) {
    goog_snippet_vars();
    window.google_conversion_format = "3";
    var opt = new Object();
    opt.onload_callback = function() {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  }
  var conv_handler = window['google_trackConversion'];
  if (typeof(conv_handler) == 'function') {
    conv_handler(opt);
  }
}
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion_async.js" defer='defer'>
</script>
<!-- EOF Google Code for Karma Bavaria -->
    <?php
    }
    else if(get_the_ID()=='837') { //karma jimbaran
    ?>
    <script>
    // $( document ).ready(function() {
    // $(".form_title").empty();
    // $(".form_title").append('Book direct and receive airport transfer and kids under 12 eat free');
    // showContactFormPopUp();
    // setTimeout(function() { $('.close_btn')[0].click(); }, 10000);
    // });
    </script>
<!-- Google Code for Karma Jimbaran -->
<script type="text/javascript">
  /* <![CDATA[ */
  goog_snippet_vars = function() {
    var w = window;
    w.google_conversion_id = 849002042; //869877494;
    w.google_conversion_label = "28DxCJ7b3msQ9o3lngM";
    w.google_remarketing_only = false;
  }
  // DO NOT CHANGE THE CODE BELOW.
  goog_report_conversion = function(url) {
    goog_snippet_vars();
    window.google_conversion_format = "3";
    var opt = new Object();
    opt.onload_callback = function() {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  }
  var conv_handler = window['google_trackConversion'];
  if (typeof(conv_handler) == 'function') {
    conv_handler(opt);
  }
}
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion_async.js" defer='defer'>
</script>
<!-- EOF Google Code for Karma Jimbaran -->
    <?php
    }
    else if(get_the_ID()=='193') { //karma Kandara
    ?>

    <script src='https://www.thehotelsnetwork.com/js/hotel_price_widget.js?hotel_id=1077210&property_id=1012155&account_key=67F01A46D3B59440E0767743914B692E' defer='defer'></script>

    <script>
    // $( document ).ready(function() {
    // $(".form_title").empty();
    // $(".form_title").append('Book direct and receive airport transfer and kids under 12 eat free');
    // showContactFormPopUp();
    // setTimeout(function() { $('.close_btn')[0].click(); }, 10000);
    // });
    </script>
    <!-- Google Code for Karma Kandara -->
<script type="text/javascript">
  /* <![CDATA[ */
  goog_snippet_vars = function() {
    var w = window;
    w.google_conversion_id = 869877494;
    w.google_conversion_label = "qZ4QCMzfgWwQ9o3lngM";
    w.google_remarketing_only = false;
  }
  // DO NOT CHANGE THE CODE BELOW.
  goog_report_conversion = function(url) {
    goog_snippet_vars();
    window.google_conversion_format = "3";
    var opt = new Object();
    opt.onload_callback = function() {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  }
  var conv_handler = window['google_trackConversion'];
  if (typeof(conv_handler) == 'function') {
    conv_handler(opt);
  }
}
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion_async.js" defer='defer'>
</script>
<!-- EOF Google Code for Karma Kandara -->
    <?php
    }
    else if(get_the_ID()=='914') { //St Martin
    ?>
    <script>
    //$( document ).ready(function() {
    //$(".form_title").empty();
    //$(".form_title").append('');
    //$(".form_title").append('BLACK FRIDAY SAVINGS! Stay at Karma St. Martin\'s for just £0.01<br /><span style=\'font-size:10px;\'>Terms & Conditions apply. Book 2 nights and receive the 3rd for £0.01</span>');
    //showContactFormPopUp();
    //setTimeout(function() { $('.close_btn')[0].click(); }, 10000);
    //});
    </script>

    <!-- Google Code for Karma St. Martin -->
<script type="text/javascript">
  /* <![CDATA[ */
  goog_snippet_vars = function() {
    var w = window;
    w.google_conversion_id = 963363517;
    w.google_conversion_label = "86DfCJKn_msQvYWvywM";
    w.google_remarketing_only = false;
  }
  // DO NOT CHANGE THE CODE BELOW.
  goog_report_conversion = function(url) {
    goog_snippet_vars();
    window.google_conversion_format = "3";
    var opt = new Object();
    opt.onload_callback = function() {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  }
  var conv_handler = window['google_trackConversion'];
  if (typeof(conv_handler) == 'function') {
    conv_handler(opt);
  }
}
/* ]]> */
</script>
<script type="text/javascript"
  src="//www.googleadservices.com/pagead/conversion_async.js" defer='defer'>
</script>
<!-- EOF Google Code for Karma St. Martin -->
    <?php
    }
    else if(get_the_ID()=='866') { //Reef
    ?>
    <script>
    // $( document ).ready(function() {
    // $(".form_title").empty();
    // $(".form_title").append('Book direct and receive $50 credit for use in food & beverage, spa and water activities');
    // showContactFormPopUp();
    // setTimeout(function() { $('.close_btn')[0].click(); }, 10000);
    // });
    </script>
    <!-- Google Code for Karma Reef -->
    <script type="text/javascript">
      /* <![CDATA[ */
      goog_snippet_vars = function() {
        var w = window;
        w.google_conversion_id = 869877494;
        w.google_conversion_label = "TRTsCJCdimwQ9o3lngM";
        w.google_remarketing_only = false;
      }
      // DO NOT CHANGE THE CODE BELOW.
      goog_report_conversion = function(url) {
        goog_snippet_vars();
        window.google_conversion_format = "3";
        var opt = new Object();
        opt.onload_callback = function() {
        if (typeof(url) != 'undefined') {
          window.location = url;
        }
      }
      var conv_handler = window['google_trackConversion'];
      if (typeof(conv_handler) == 'function') {
        conv_handler(opt);
      }
    }
    /* ]]> */
    </script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion_async.js" defer='defer'>
</script>
<!-- EOF Google Code for Karma Reef -->
    <?php
    }
    else if(get_the_ID()=='802') { //Rottness
    ?>
    <!-- Google Code for Karma Rottnest -->
    <script type="text/javascript">
      /* <![CDATA[ */
      goog_snippet_vars = function() {
        var w = window;
        w.google_conversion_id = 867982877;
        w.google_conversion_label = "05akCIGKmmwQnbzxnQM";
        w.google_remarketing_only = false;
      }
      // DO NOT CHANGE THE CODE BELOW.
      goog_report_conversion = function(url) {
        goog_snippet_vars();
        window.google_conversion_format = "3";
        var opt = new Object();
        opt.onload_callback = function() {
        if (typeof(url) != 'undefined') {
          window.location = url;
        }
      }
      var conv_handler = window['google_trackConversion'];
      if (typeof(conv_handler) == 'function') {
        conv_handler(opt);
      }
    }
    /* ]]> */
    </script>
    <script type="text/javascript"
      src="//www.googleadservices.com/pagead/conversion_async.js" defer='defer'>
    </script>

    <!-- EOF Google Code for Karma Rottnest -->
    <?php
    }

    ///////////////////BEGIN CEK IP LOCATION
    if(get_the_ID()=='731' && !isset($_GET['lang'])) { //jika halaman bavaria - EN ?>

            <script>
            $.getJSON('https://freegeoip.net/json/')
                 .done (function(location)
                 {

                    if(location.country_name == 'Germany'){

                        window.location.href = "de";
                    }
                 });
            </script>

    <?php
    }
    ///////////////////END CEK IP LOCATION
    ?>

    <script type="text/javascript">

            $('.formselectbook').on('click', function() {
                $('.contentresorts').slideToggle();
            });


            var allOptions = $(".formselectbook ul").children('li:not(.init)');
            $(".formselectbook ul").on("click", "li:not(.init)", function() {
                allOptions.removeClass('selected');
                $(this).addClass('selected');
                allOptions.toggle();
                if ($.isNumeric($(this).data('value'))) {
                    var resortchoices = $(this).data('value');
                    showEnquiryForm(resortchoices);
                    $("#resort_choice").val(resortchoices);
                }
            });

            $(".mobilemn ul").on("click", "li:not(.init)", function() {
                if ($.isNumeric($(this).data('value'))) {
                    var resortchoices = $(this).data('value');
                    showEnquiryForm(resortchoices);
                    $('#destination_mobile_wrapper').slideUp();
                    $("#resort_choice").val(resortchoices);
                }
            });


            $(".submitbkkg").click(function(){
                $("#resort_choice").val(<?php echo get_the_ID()?>);
            });

        //(function() {
            $(".showSpaEnquiryForm").click(function(){
                showSpaEnquiryForm();
            });


            $("#sparevbutton").click(function(){
                showSpaEnquiryForm();
            });

                $(".open_spa_bookingr_request_form").click(function(){
                var key = $(this).attr('data-rel');
                var offersresort = $(this).attr('data-resorts');
                $('#offersname').val(offersresort);
                var pCode = $(this).data("pcode");
                showSpaEnquiryForm_from_kspa_page(key, pCode);
                });

        //})();

if($('body').hasClass('home') && $(window).width() > 768){
var wb_h = $('#welcome_booking').height();
$('#welcome_booking .left').css('height', wb_h + 'px');
$('#welcome_booking .right').css({'height': wb_h + 'px', 'background-color': '#101820'});
}
    </script>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WZDHLPS"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->




<script id="guestline-tag" src="https://tag.guestline.net/static/js/tag.js" data-group-id="KARMA" async></script>

</body>
</html>

