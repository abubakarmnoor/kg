<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
jQuery(document).ready(function( $ ){
    if( $('body').hasClass('page-id-10723') ){
    	$("#banner").bind('vegaswalk', function (e, index, slideSettings) { 
          $('.vegas-wrapper .container .content').css('font-size','25px');
          $('.vegas-wrapper .container .content').css('max-width','700px');
          if(index === 0){ //slide1
           	 $('.vegas-wrapper .container').html('<div id="cSliderContent1" class="content" style="font-size: 25px; max-width: 500px;"><p style="color:#ffffff;font-weight: 400;font-style: italic;;margin: 40px 0;font-family: Georgia,Times, Times New Roman ,serif;font-size: 40px;">Our award-winning cliff spa at Karma Kandara</p>');
          }
          else if(index === 1){ //slide2
         	 $('.vegas-wrapper .container').html('<div id="cSliderContent2" class="content" style="font-size: 25px; max-width: 800px;"><p style="color:#ffffff;font-weight: 400;font-style: italic;;margin: 40px 0;font-family: Georgia,Times, Times New Roman ,serif;font-size: 40px;">Wellness everywhere at <br />Karma Bavaria</p>');
          }
          else if(index === 2){//slide3
         	 $('.vegas-wrapper .container').html('<div id="cSliderContent3" class="content" style="font-size: 25px; max-width: 500px;"><p style="color:#ffffff;font-weight: 400;font-style: italic;;margin: 40px 0;font-family: Georgia,Times, Times New Roman ,serif;font-size: 40px;">Spa with a view at <br />Karma Kandara</p>');
          }
          else if(index === 3){ //slide4
         	 $('.vegas-wrapper .container').html('<div id="cSliderContent4" class="content" style="font-size: 25px; max-width: 500px;"><p style="color:#ffffff;font-weight: 400;font-style: italic;;margin: 40px 0;font-family: Georgia,Times, Times New Roman ,serif;font-size: 40px;">Recharge at <br />Karma Jimbaran </p>');
          }
          else if(index === 4){//slide5
         	 $('.vegas-wrapper .container').html('<div id="cSliderContent5" class="content" style="font-size: 25px; max-width: 500px;"><p style="color:#ffffff;font-weight: 400;font-style: italic;;margin: 40px 0;font-family: Georgia,Times, Times New Roman ,serif;font-size: 40px;">Intuitive Healers on <br />Rotttnest Island</p>');
          }
        });
    }
});</script>
<!-- end Simple Custom CSS and JS -->
