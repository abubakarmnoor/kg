<?php
/**
 * Template Name: Thankyou
 */


get_header();
?>

<style type="text/css">
#section6 {
    background-color: #eee;
    font-style: italic;
    padding: 40px 0;
    display: table;
    width: 100%;
}
#section6 p {
    color: #8d7249;
    font-size: 200%;
}

#section6 h3 {
    color: #555;
    font-weight: 900 !important;
}

.sosmed{
	max-width: 900px;
	width: auto;
	display: table;
	margin: auto;
}
.sosmed>a{
	width: auto;
	float: left;
	padding: 0 30px;
}
#floating_image_link{ display: none!important; }
</style>
<div id="type-content" class="type-content">
			
	<div class="main_content">
		<?php
			$area = 'Slider';
			$rendered = karma_render_blocks($page_id, array());
			if (isset($rendered[$area])) {
				echo $rendered[$area];
			}
		?>
	</div>

			<div id="contained_content" style="background:#ffffff;padding-top: 15px;padding-bottom:10px;">
				<h2 class="georgia_font italic" style="text-align:center;padding-bottom: 10px;padding-top: 10px;">Thank you! <br>We have received your data and will contact you shortly</h2>
			</div>

			<div id="section6">     
			    <h3 align="center" style="font-family: Georgia, Open Sans, Times, serif!important;font-style: italic;">Stay social and follow all the action on social media</h3>
			    <p align="center" style="font-family: Georgia, Open Sans, Times, serif!important;font-style: italic;">#ExperienceKarma</p>
			    <div class="sosmed" style="font-family: Georgia, Open Sans, Times, serif!important;font-style: italic;">
			      
			        <a target="_blank" href="https://www.facebook.com/karmagroupglobal"><div class="col-md-4" style="font-family: Georgia, Open Sans, Times, serif!important;font-style: italic;"><span class="fa-facebook-square fa fa-2x"></span>&nbsp;KarmaGroupGlobal</div></a>
			          <a target="_blank" href="https://twitter.com/karmaresorts"><div class="col-md-4" style="font-family: Georgia, Open Sans, Times, serif!important;font-style: italic;"><span class="fa-twitter-square fa fa-2x"></span>&nbsp;KarmaResorts</div></a>
			        <a target="_blank" href="https://www.instagram.com/karma.group/"><div class="col-md-4" style="font-family: Georgia, Open Sans, Times, serif!important;font-style: italic;"><span class="fa-instagram fa fa-2x"></span>&nbsp;KarmaGroup</div></a>
			    </div>
			</div>

		
</div><!-- #type -->


<?php get_footer(); ?>