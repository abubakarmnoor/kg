<?php
$fields = array(
	'content' => get_sub_field('content'),
	'margin' => get_sub_field('margin')
);
ob_start();
switch ($fields['margin']) {
	case 'Top':
		$margin = 'margin-top: 50px;';
		break;
	case 'Bottom':
		$margin = 'margin-bottom: 50px;';
		break;
	case 'Top & Bottom':
		$margin = 'margin: 50px auto;';
		break;
	default:
		$margin = '';
		break;
}
?>
<link type="text/css" rel="stylesheet" href="<?php echo get_option( 'home' ); ?>/wp-content/themes/karma/css/moments.css">
<link type="text/css" rel="stylesheet" href="<?php echo get_option( 'home' ); ?>/wp-content/themes/karma/css/bootstrap-grid.min.css">
<link type="text/css" rel="stylesheet" href="<?php echo get_option( 'home' ); ?>/wp-content/themes/karma/css/remodal.css">
<link type="text/css" rel="stylesheet" href="<?php echo get_option( 'home' ); ?>/wp-content/themes/karma/css/remodal-default-theme.css">
<style type="text/css">
	#ksa{
		max-width:800px;
		margin:0 auto;
	}
	#karma .text_image_block .left {
    padding: 70px 90px;
    width: 50%;
    display: inline-block;
     margin-left: 0; 
    float: left;
     vertical-align: middle; 
	}
	#karma .text_image_block .right {
    padding: 50px 90px;
    width: 50%;
    display: inline-block;
    margin-left: 0;

	}

	@media screen and (max-width: 1300px) {
		.content1{
			padding: 0 90px;
		}
	}

	@media screen and (max-width: 1025px) {
		.section2{
			padding:0 !important;
		}
		#karma .text_image_block .left {
		    padding: 50px 50px;
		}
		.content1 {
		    padding: 0 50px;
		}
	}
	@media screen and (max-width: 768px) {

		.section2 {
		     padding-top: 10px; 
		}
		#nav_booking {
		    right: 78px;
		}
	}
	@media only screen and (max-width: 480px){
			#nav_booking {
			    right: 67px;
			}
			#karma .text_image_block .left {
			    padding: 50px 90px;
			    width: 50%;
			    display: inline-block;
			     margin-left: 0; 
			    float: left;
			     vertical-align: middle; 
			}
			.section2 {
				padding-top: 0px;
			}
			.section2 h2, .section2 h3 {
			    margin-top: 0; 
			}
			.content1{
				padding-bottom: 30px!important;
			}

	}

</style>
<div id="contained_content" style="<?php echo $margin; ?>">

			<div class="back section2">
			   <div class="col-md-6 col-lg-6 content1">
			      <p>&nbsp;</p>			      
			      <h3>Win a holiday with the Sevens!</h3>
			      <p style="font-style:italic;font-family:georgia!important;">Enter now to <strong>win a 7 night holiday in a 2 bedroom villa at the 5 star <a href="https://karmagroup.com/find-destination/karma-resorts/karma-kandara/" target="_blank">Karma Kandara</a> luxury resort in Bali</strong> from 16 April to 23 April 2018 when the England squad are in camp. valued at £5000 GBP
			       </p>
			   </div>
			   <div class="col-md-6 col-lg-6 content2">
			      <div class="text-4">
			         <div class="form-style-5" style="margin: 0 auto;font-style: normal;">
			            <form id="ksa" class="miniSurveyView" method="post" novalidate="novalidate">
			               <input name="qsID" type="hidden" value="1448540431">
			               <h3 style="color:#424242;margin-top:20px;text-align:center;font-weight: 500;font-style:italic;">Entry Form</h3>
			               <table class="formBlockSurveyTable" style="margin-top:0px;width:100%;">
			                  <tbody>
			                     <tr>
			                        <td style="vertical-align:top" class="question"><label for="name"><span class="required" aria-required="true"></span></label></td>
			                        <td style="vertical-align:top">
			                           <div class="message-validator" style="position: absolute; left: 501px;"></div>
			                           <input name="field-1479870566-1" placeholder="First name*" id="firstname1" type="text" required value="" aria-required="true" class="error-validator" aria-describedby="name-error" aria-invalid="true">
			                        </td>
			                     </tr>
			                     <tr>
			                        <td style="vertical-align:top" class="question"><label for="name"><span class="required" aria-required="true"></span></label></td>
			                        <td style="vertical-align:top">
			                           <div class="message-validator" style="position: absolute; left: 501px;"></div>
			                           <input name="field-1479870566-2" placeholder="Last name*" id="lastname1" type="text" required value="" aria-required="true" class="error-validator" aria-describedby="name-error">
			                        </td>
			                     </tr>
			                     <tr>
			                        <td style="vertical-align:top" class="question"><label for="email"><span class="required" aria-required="true"></span></label></td>
			                        <td style="vertical-align:top">
			                           <input name="website" type="text" value="" style="display:none;">
			                           <div class="message-validator" style="position: absolute; left: 501px;"></div>
			                           <input name="field-1479870587" placeholder="Email address*" id="email1" type="email" required value="" aria-required="true" class="error-validator" aria-describedby="email-error">
			                        </td>
			                     </tr>
			                     <tr>
			                        <td>&nbsp;</td>
			                        <td>
			                           <input class="formBlockSubmitButton ccm-input-button" name="Submit" type="submit" id="submitbtn" value="ENTER NOW">
			                           <br>
			                           <center><a href="#" target="_blank">*Terms &amp; Conditions Apply</a></center>
			                        </td>
			                     </tr>
			                  </tbody>
			               </table>
			            </form>
			         </div>
			      </div>
			   </div>
			</div>



<section class="container-fluid">
  <!-- pop up -->
  <div class="remodal" data-remodal-id="modal" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
      <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
      <div>

          <p id="modal1Desc">
              
          </p>
      </div>
      <br>
      <button data-remodal-action="confirm" class="remodal-confirm">OK</button>
  </div>
  <!-- eof pop up -->

  <!-- pop up -->
  <div class="remodal" role="dialog" aria-labelledby="modal1Title" aria-describedby="alert-desc" id="modal-alert">
      <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
      <div>

          <p id="alert-desc">
          </p>
          <br />
          <br />
      </div>
      <br>
      <button data-remodal-action="confirm" class="remodal-confirm">CLOSE</button>
  </div>
  <!-- eof pop up -->
</section>

<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo get_option( 'home' ); ?>/wp-content/themes/karma/js/remodal.js"></script>
<script type="text/javascript"> 
    $('#ksa').validate({
     	onsubmit: true,
		errorClass: "error-validator",
        errorElement: "div",
        wrapper: "div",
        errorPlacement: function(error, element) {
            offset = element.offset();
            error.insertBefore(element)
            error.addClass('message-validator');
            error.css('position', 'absolute');
            error.css('left', $(element).position().left + $(element).width() - 145);
        },
        rules: {
        	contactFirstName: "required",
        	contactSurname: "required"
        }	
	});
   $('#ksa').on('submit', function(e) {
   	e.preventDefault();
   	var isvalidate = $('#ksa').valid();
   	if (isvalidate) {
   		 $.ajax({
            type: "GET",
            url: "https://karmawarehouse.izenoondemand.com/production/api/sugarapi/emailpromocodelookup-wh.php?email="+$('#email1').val()+"&pc=rfucompetitionkarmagroup",

   			data: "email=" + $('#email1').val(),
            success: function(data) {

            if (data == '0'){
	           	$.ajax({
		            type: "POST",
		            url: 'https://karmawarehouse.izenoondemand.com/production/api/karmaclub/group/karmacluboffer.php?first_name=' + $('#firstname1').val() + '&last_name=' + $('#lastname1').val() + '&email=' + $('#email1').val() + '&collection_entry_point=rfucompetitionkarmagroup&website=https://karmagroup.com/rfu&promocode=rfucompetitionkarmagroup',

		            success: function(data, textStatus, jqXHR) {

		                console.log("Submit success to db karmawarehouse...");
		                $('#ksa').css('display','none');
		                //window.location.href = "<?php echo get_site_url(); ?>/thank-you-rosslyn-park/";
		                //alert('success');
		                //btn.prop('disabled', false);
    					$('.form-style-5').css('font-size','15px');
    					$('.form-style-5').css('text-align','center');
		               $('.form-style-5').append('Thank you for your entry winners will be contacted via email. #ExperienceKarma');

	            	}
	       		});   
	       	} else {
	       		$('#alert-desc').text("Looks like you've already entered our competition. Thanks for your entry and good luck! #ExperienceKarma");
                $('#modal-alert').remodal().open();
	       	}
	       }
        });
    }       

   });

</script>


<?php 
$html = ob_get_contents();
ob_end_clean();
?>
