<?php
// error_reporting(~0);
// ini_set('display_errors', 1);
ob_start();
include 'country-selector.php';
$fields = array(
	'content' => get_sub_field('content'),
	'margin' => get_sub_field('margin')
);
$shortTnc = get_sub_field("short_tnc");
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
$user = array();
$kcID = "";
if(isset($_GET['email']) && $_GET['email'] != ""){    
    $pc = str_replace(" ", "%20","Protein world 2018");
    $mailaddress = urlencode($_GET["email"]);
    $mailaddress = str_replace("+", "%2B", $mailaddress);    
    $user = file_get_contents('https://karmawarehouse.izenoondemand.com/production/api/sugarapi/getUserByEmailAndPC.php?email='.$mailaddress.'&pc='.$pc);    
    $user = json_decode($user);    
    if($user->records[0]->downloaded_c){            
        $membershipData = file_get_contents('https://karmawarehouse.izenoondemand.com/production/api/sugarapi/membershipDate.php?uid='.$user->records[0]->id);
        $membershipData = json_decode($membershipData);
        $kcID = $membershipData->memberID;         
    }
}
$dob = explode("-", $user->records[0]->birthdate_c);
// echo "<pre>";
// print_r($user);
// echo "</pre>";
// print_r($dob);

// echo 'https://karmawarehouse.izenoondemand.com/production/api/sugarapi/getUserByEmailAndPC.php?email='.$_GET['email'].'&pc='.$_GET['pc'];
?>
<link rel="stylesheet" href="https://intl-tel-input.com/node_modules/intl-tel-input/build/css/intlTelInput.css?1501227254404">
<link type="text/css" rel="stylesheet" href="<?php echo get_option( 'home' ); ?>/wp-content/themes/karma/css/moments.css">
<link type="text/css" rel="stylesheet" href="<?php echo get_option( 'home' ); ?>/wp-content/themes/karma/css/bootstrap.min.css">
<link type="text/css" rel="stylesheet" href="<?php echo get_option( 'home' ); ?>/wp-content/themes/karma/css/remodal.css">
<link type="text/css" rel="stylesheet" href="<?php echo get_option( 'home' ); ?>/wp-content/themes/karma/css/remodal-default-theme.css">

<style>
	#karma .type-content .main_content ul{
		list-style: none;
		margin: 0 0 0 -1px;
		padding: 0;
		font-size: 14px;
	}
	.banner{
		height: 600px;
	}

	#landing-page__form-header {
	    text-align: center;
	    text-transform: uppercase;
	    margin: 50px auto;
	}

	#landing-page__form-header__title {
	    font-family: 'Cinzel', serif;
	    font-weight: 400;
	    font-size: 30px;
	    margin: 0 0 10px;
	    color: #9c7949;
	    text-transform: uppercase;
	    line-height: 40px;
	}

	.thxsub {
	    padding-top: 60px;
	}

	.message-validator{
		z-index: 0;
	}
	section.singleabout .homeaboutbox {
	    min-height: 430px;
	    display :block;
	}

	section.singleabout .homeaboutbox .wrapcontent {
	    padding: 50px 50px;
	}
	#subscriber{
		display:none;
	}
	#prize1{
		text-align: center;
		color:#ffffff;
		padding-bottom: 10px;
	}
	#prize2{
		text-align: center;
		font-size:14px;
	}
	.button-wrap{
		text-align:center;
		padding-bottom: 30px;
	}
	#projud{
		font-family: 'Cinzel', serif;
	    font-weight: 400;
	    font-size: 30px;
	    margin: 0 0 10px;
	    color: #9c7949;
	    text-transform: uppercase;
	}
	#proses{
		text-align: center;
	    font-size: 18px;
	    padding: 30px;
	}
	#landing-page__form-header__title {
	    font-family: 'Cinzel', serif;
	    font-weight: 400;
	    font-size: 30px;
	    margin: 0 0 10px;
	    color: #9c7949;
	    text-transform: uppercase;
	}
	#landing-page__form-header p:nth-of-type(2){
		font-size: 18px;
		font-weight: 400;
	}
	section.singleabout .homeaboutbox.right .wrapcontent p {
	    color: #333;
	    font-size: 18px;
	    font-weight: 400;
	    line-height: 28px;
	}
	.thxwraptext {
	    position: relative;
	    width: 100%;
	/*	    height: 508px;*/
	}
	.thxsub .thxwraptextinner h1 {
	    font-size: 34px;
	    font-family: 'Montserrat', sans-serif;
	    font-weight: 700;
	    margin: 0 0 30px;
	    color: #fff;
	    text-align: center;
	}
	.thxsub .thxwraptextinner p {
	    font-size: 20px;
	    font-family: 'Montserrat', sans-serif;
	    font-weight: 400;
	    margin: 0 0 30px;
	    color: #fff;
	    text-align: center;
	}
	section.singleabout .homeaboutbox.right .wrapcontent h3 {
	    font-family: 'Cinzel', serif;
	    font-weight: 400;
	    font-size: 30px;
	    margin: 0 0 10px;
	    color: #9c7949;
	    text-transform: uppercase;
	}

	section.singleabout .homeaboutbox.right .wrapcontent h4 {
		font-family: 'Cinzel', serif;
	    font-weight: 400;
	    font-size: 21px;
	    color: #867d71;
	    text-transform: uppercase;
	    margin: 0 0 28px;
	}

	form input[type=text].form-control,
	form input[type=email].form-control,
	form select.form-control{
		background: transparent;
	    box-shadow: none;
	    border: none;
	    border-bottom: 1px solid #896f47;
	    border-radius: 0;
	}
	form button.bg-gold{
	display: inline-block;
    margin: 0 auto;
    box-shadow: none;
    padding: 10px 30px;
    font-size: 18px;
    font-weight: 700;
    background: #896f47;
    color: #fff;
    outline: 0;
	}
	form button.bg-gold:hover{
		background: #614f33;
		color:#fff;
	}
    .remodal-bg.with-red-theme.remodal-is-opening,
    .remodal-bg.with-red-theme.remodal-is-opened {
        filter: none;
    }

    .remodal-overlay.with-red-theme {
        background-color: #f44336;
    }

    .remodal.with-red-theme {
        background: #fff;
    }

    #modal1Desc {
        color: #8d7249;
        text-align: center;
    }

    @media screen and (max-width: 1450px) {
	    section.singleabout .homeaboutbox {
	   	 	min-height: 250px;
	   	 	height: 420px;
		}
	}


    @media screen and (max-width: 1200px) {
        section.singleabout .homeaboutbox{
    		display:block;
    		height: 400px;
    	}
      .karma header .right, .karma header .topbook_mobile {
          position: inherit !important;
      }
    }
    @media screen and (max-width: 768px) {
        .dob-text{
          font-size: 12px !important;
        }
        section.singleabout .homeaboutbox{
    		display:block;
    		height: 400px;
    	}
    	section.singleabout .homeaboutbox.right .wrapcontent p{
    		font-size:12px;
    	}
    }

    @media only screen and (max-width: 480px){
    	section.singleabout .homeaboutbox{
    		display:block;
    		height: 275px;
    	}
    	section.singleabout .homeaboutbox.right .wrapcontent p{
    		font-size:12px;
    	}
    	section.singleabout .homeaboutbox.right{
    		height: 450px !important;
    	}
      section.singleabout .homeaboutbox .wrapcontent {
          padding: 10px;
      }
    }

    @media screen and (max-width: 320px) {
        #landing-page__offer-campaign__title{
          font-size: 35px !important;
        }
    }
    .join-block .btn.bg-gold:hover{
      color: #FFF;
    }
</style>

<style type="text/css">
		#leftstickymenu{
			display: none !important;
		}
	    /**
	    * Popups
	    * --------------------------------------------------
	    */
	    label{
	    	margin-left: 15px;
	    }
	    .checkbox, .radio {
		    margin-left: 15px;
		}
	    .popup-container {
	    position: fixed;
	    top: 0;
	    left: 0;
	    bottom: 0;
	    right: 0;
	    background: rgba(0,0,0,.5);
	    display: -webkit-box;
	    display: -webkit-flex;
	    display: -moz-box;
	    display: -moz-flex;
	    display: -ms-flexbox;
	    display: flex;
	    -webkit-box-pack: center;
	    -ms-flex-pack: center;
	    -webkit-justify-content: center;
	    -moz-justify-content: center;
	    justify-content: center;
	    -webkit-box-align: center;
	    -ms-flex-align: center;
	    -webkit-align-items: center;
	    -moz-align-items: center;
	    align-items: center;
	    z-index: 12;
	    visibility: hidden; }
	    .popup-container.popup-showing {
	    visibility: visible; }
	    .popup-container.popup-hidden .popup {
	    -webkit-animation-name: scaleOut;
	    animation-name: scaleOut;
	    -webkit-animation-duration: 0.1s;
	    animation-duration: 0.1s;
	    -webkit-animation-timing-function: ease-in-out;
	    animation-timing-function: ease-in-out;
	    -webkit-animation-fill-mode: both;
	    animation-fill-mode: both; }
	    .popup-container.active .popup {
	    -webkit-animation-name: superScaleIn;
	    animation-name: superScaleIn;
	    -webkit-animation-duration: 0.2s;
	    animation-duration: 0.2s;
	    -webkit-animation-timing-function: ease-in-out;
	    animation-timing-function: ease-in-out;
	    -webkit-animation-fill-mode: both;
	    animation-fill-mode: both; }
	    .popup-container .popup {
	    width: 250px;
	    max-width: 100%;
	    max-height: 90%;
	    border-radius: 0px;
	    background-color: rgba(255, 255, 255, 0.9);
	    display: -webkit-box;
	    display: -webkit-flex;
	    display: -moz-box;
	    display: -moz-flex;
	    display: -ms-flexbox;
	    display: flex;
	    -webkit-box-direction: normal;
	    -webkit-box-orient: vertical;
	    -webkit-flex-direction: column;
	    -moz-flex-direction: column;
	    -ms-flex-direction: column;
	    flex-direction: column; }
	    .popup-container input,
	    .popup-container textarea {
	    width: 100%; }

	    .popup-head {
	    display: none;
	    padding: 15px 10px;
	    border-bottom: 1px solid #eee;
	    text-align: center; }

	    /*.popup-title {
	    margin: 0;
	    padding: 0;
	    font-size: 12px; }*/

	    .popup-sub-title {
	    margin: 5px 0 0 0;
	    padding: 0;
	    font-weight: normal;
	    font-size: 11px; }

	    .popup-body {
	    padding: 10px;
	    padding-top: 30px;
	    text-align: center;
	    overflow: auto;
	    text-align: center;
	    }

	    .popup-buttons {
	    display: -webkit-box;
	    display: -webkit-flex;
	    display: -moz-box;
	    display: -moz-flex;
	    display: -ms-flexbox;
	    display: flex;
	    -webkit-box-direction: normal;
	    -webkit-box-orient: horizontal;
	    -webkit-flex-direction: row;
	    -moz-flex-direction: row;
	    -ms-flex-direction: row;
	    flex-direction: row;
	    padding: 10px;
	    min-height: 65px; }
	    .popup-buttons .button {
	    -webkit-box-flex: 1;
	    -webkit-flex: 1;
	    -moz-box-flex: 1;
	    -moz-flex: 1;
	    -ms-flex: 1;
	    flex: 1;
	    display: block;
	    min-height: 45px;
	    border-radius: 2px;
	    line-height: 20px;
	    margin-right: 5px; }
	    .popup-buttons .button:last-child {
	    margin-right: 0px; }

	    .popup-open {
	    pointer-events: none; }
	    .popup-open.modal-open .modal {
	    pointer-events: none; }
	    .popup-open .popup-backdrop, .popup-open .popup {
	    pointer-events: auto; }

	    .button:after {
	    position: absolute;
	    top: -6px;
	    right: -6px;
	    bottom: -6px;
	    left: -6px;
	    content: ' ';
	    }

	    .button.button-positive {
	    border-color: transparent;
	    background-color: #b3985b;
	    color: #fff;
	    height: 38px;
	    max-width: 150px;
	    border-radius: 20px;
	    margin: auto!important;
	    }
	    </style>

      <style type="text/css">
        .intl-tel-input{
          float: right;
          width: 100%;
        }
        .intl-tel-input li{
          margin: 0!important;
        }
        .intl-tel-input .country-list .divider{
          min-height: 1px;
        }
        *:focus{
          outline: none;
        }
        .phonewrapper,
        .promoCodeWrapper {
          position: relative;
          display: table;
          width: 100%;
        }
        .phoneMsg,
        .promoCodeMsg {
          color: red;
          right: 0;
          position: absolute;
          font-size: 11px;
          border: 0px;
          bottom: 8px;
        }
        div.error-validator {
            padding-top: 9px;
            color: #ba160c;
            font-size: 10px;
            width: 100px;
            text-align: right;
             float: right;
        }

        div.error-validator2 {
            padding-top: 9px;
            color: #8d7249;
            font-size: 11px;
            width: 120px;
            text-align: right;
            position: absolute;
            right: 5px;
            top: 3px;
        }
        .intl-tel-input .message-validator {
            left: unset!important;
           /* left: 308px !important;*/
            z-index: 10;
            right: 0;
        }
        #loading-animation{
          display: none;
          margin: auto;
        }

        .circle-list li a {
          color: #FFF;
        }
        .circle-list li a:hover{
          text-decoration: underline;
        }
        .clickjoin {
          color: #FFF;
          font-family: inherit;
          font-style: italic;
          font-size: 19px;
        }
        .clickjoin:hover{
          text-decoration: underline;
          color: #FFF;
        }
        section p#landing-page__offer-campaign__title {
          font-weight: 400 !important;
        }
        header#landing-page-header a img {
            width: 10em;
            padding: 10px;
        }
        .country-wrapper .message-validator{
          top: 50px !important;
        }
        .join-block a{
          color: #8d7249;
        }
        .bg-gold{
          background-color: #8d7249 !important;
        }
</style>

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
<?php
    if(!isset($_GET['email']) || $_GET['email'] == ""){ ?>
        <div id="contained_content" style="<?php echo $margin; ?>">
            <section id="landing-page__form-header" class="section-wrapper">
                <p id="landing-page__form-header__title">IT LOOKS LIKE YOU ARE NOT ALLOWED TO SEE THIS PROMOTION.</p>                
            </section>
        </div>
    <?php }
    elseif(empty($user->records)){ ?>
        <div id="contained_content" style="<?php echo $margin; ?>">
            <section id="landing-page__form-header" class="section-wrapper">
                <p id="landing-page__form-header__title">IT LOOKS LIKE WE CANNOT FIND YOUR DETAILS.</p>    
                <p>Please contact <a href="mailto:prowres@karmagroup.com" target="_blank">prowres@karmagroup.com</a> for assitance.</p>                
            </section>
        </div>
    <?php }
    elseif($user->records[0]->downloaded_c == 1){?>
        <div id="contained_content" style="<?php echo $margin; ?>">
            <section id="landing-page__form-header" class="section-wrapper">
                <p id="landing-page__form-header__title">IT LOOKS LIKE YOU HAVE ALREADY CONFIRMED YOUR DETAILS.</p>
                <p>Please use the button below to redownload your vouchers.</p>     
            </section>
            <div class="row">
                <div class="form-group button-wrap">
                    <a href="https://card.karmaclub.com/voucher-pw-<?php echo $kcID; ?>.pdf" class="btn bg-gold" style="color: #FFF;padding: 20px;font-size: 16px;font-weight: bold;">DOWNLOAD MY VOUCHERS</a>                     
                </div>							
            </div>
        </div>
    <?php } 
    else{ ?>
        <div id="contained_content" style="<?php echo $margin; ?>">
            <section id="landing-page__form-header" class="section-wrapper">
                <p id="landing-page__form-header__title">CONFIRM YOUR DETAILS</p>
                <p>Please confirm your details and download your $300 worth of vouchers below!</p>
            </section>

            <section class="section join-block zero-padding">
                <div class="container container-inner">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 form-join">

                    <form id="frm" method="post" class="form-response">

                    <style>
                    .title-wrapper .message-validator .error-validator{
                        width: 97px;
                    }
                    </style>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <div class="col-xs-12 col-sm-2">
                                <div class="form-group title-wrapper">
                                    <select class="form-control" id="title" name="title" style="width: 100%;" required>
                                        <option value="">-Title*-</option>
                                        <option value="Dr">Dr</option>
                                        <option value="Mr">Mr</option>
                                        <option value="Mrs">Mrs</option>
                                        <option value="Ms">Ms</option>
                                        <option value="Prof">Prof</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="firstName1" placeholder="First Name*" name="firstname1" value="<?php echo $user->records[0]->first_name_kc_c; ?>" required />
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="lastname1" placeholder="Last Name*" name="lastname2" value="<?php echo $user->records[0]->last_name_kc_c; ?>" required />
                                </div>
                            </div>
                            
                        </div>
                    </div>


                    <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                            <input type="email" class="form-control" id="email1" placeholder="Email*" name="field-1456130004" value="<?php echo $user->records[0]->email1; ?>" required/>
                        </div>
                        </div>                
                            <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <div class="phonewrapper">
                                    <div class="phoneMsg"></div>
                                    <input type="text" class="form-control phonenumber2" name="mobilenumber" id="mobilenumber" placeholder="Mobile Number*" required />
                                    <input type="hidden" class="code" id="mobileCode" name="mobileCode">
                                    <input type="hidden" class="complete" name="field-1450771290" id="field-1450771290-text" value="">
                                </div>
                        </div>
                        </div>

                    </div>
                    </div>                       
                    
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    <select class="form-control valid" id="country" name="country" required="" aria-invalid="false">
                                        <option value="" selected="selected">- Select Country* -</option>
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Aland Islands">Aland Islands</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antarctica">Antarctica</option>
                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Aruba">Aruba</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bermuda">Bermuda</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Bonaire, Saint Eustatius and Saba ">Bonaire, Saint Eustatius and Saba </option>
                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Bouvet Island">Bouvet Island</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                        <option value="British Virgin Islands">British Virgin Islands</option>
                                        <option value="Brunei">Brunei</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Cape Verde">Cape Verde</option>
                                        <option value="Cayman Islands">Cayman Islands</option>
                                        <option value="Central African Republic">Central African Republic</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Christmas Island">Christmas Island</option>
                                        <option value="Cocos Islands">Cocos Islands</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Cook Islands">Cook Islands</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Croatia">Croatia</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Curaçao">Curaçao</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czech Republic">Czech Republic</option>
                                        <option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Dominican Republic">Dominican Republic</option>
                                        <option value="East Timor">East Timor</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Falkland Islands">Falkland Islands</option>
                                        <option value="Faroe Islands">Faroe Islands</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="French Guiana">French Guiana</option>
                                        <option value="French Polynesia">French Polynesia</option>
                                        <option value="French Southern Territories">French Southern Territories</option>
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Gibraltar">Gibraltar</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Greenland">Greenland</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="Guadeloupe">Guadeloupe</option>
                                        <option value="Guam">Guam</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guernsey">Guernsey</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hong Kong">Hong Kong</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Iran">Iran</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Isle of Man">Isle of Man</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Ivory Coast">Ivory Coast</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jersey">Jersey</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Kosovo">Kosovo</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Laos">Laos</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libya">Libya</option>
                                        <option value="Liechtenstein">Liechtenstein</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Luxembourg">Luxembourg</option>
                                        <option value="Macao">Macao</option>
                                        <option value="Macedonia">Macedonia</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Marshall Islands">Marshall Islands</option>
                                        <option value="Martinique">Martinique</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Mayotte">Mayotte</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Micronesia">Micronesia</option>
                                        <option value="Moldova">Moldova</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montenegro">Montenegro</option>
                                        <option value="Montserrat">Montserrat</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Namibia">Namibia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherlands">Netherlands</option>
                                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                                        <option value="New Caledonia">New Caledonia</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Niue">Niue</option>
                                        <option value="Norfolk Island">Norfolk Island</option>
                                        <option value="North Korea">North Korea</option>
                                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau">Palau</option>
                                        <option value="Palestinian Territory">Palestinian Territory</option>
                                        <option value="Panama">Panama</option>
                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Pitcairn">Pitcairn</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Puerto Rico">Puerto Rico</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Republic of the Congo">Republic of the Congo</option>
                                        <option value="Reunion">Reunion</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russia">Russia</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="Saint Barthélemy">Saint Barthélemy</option>
                                        <option value="Saint Helena">Saint Helena</option>
                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                        <option value="Saint Lucia">Saint Lucia</option>
                                        <option value="Saint Martin">Saint Martin</option>
                                        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                        <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                        <option value="Samoa">Samoa</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Serbia">Serbia</option>
                                        <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                                        <option value="Seychelles">Seychelles</option>
                                        <option value="Sierra Leone">Sierra Leone</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Sint Maarten">Sint Maarten</option>
                                        <option value="Slovakia">Slovakia</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="Solomon Islands">Solomon Islands</option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                        <option value="South Korea">South Korea</option>
                                        <option value="South Sudan">South Sudan</option>
                                        <option value="Spain">Spain</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                        <option value="Swaziland">Swaziland</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Syria">Syria</option>
                                        <option value="Taiwan">Taiwan</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania">Tanzania</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tokelau">Tokelau</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="U.S. Virgin Islands">U.S. Virgin Islands</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States">United States</option>
                                        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                        <option value="Uruguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Vatican">Vatican</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Vietnam">Vietnam</option>
                                        <option value="Wallis and Futuna">Wallis and Futuna</option>
                                        <option value="Western Sahara">Western Sahara</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                    </select>
                                </div>
                            </div>                                                     
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="postCode" name="postCode" placeholder="Post Code*" value="<?php echo $user->records[0]->billing_address_postalcode; ?>" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                        <label>Date of Birth</label>
                            <div class="form-group">
                                
                                <div class="col-xs-12 col-sm-4">
                                    <div class="form-group">
                                        <select class="form-control" id="birthOfDate" name="birthOfDate" required >
                                            <option value="">- Day* -</option>
                                            <?php getDayList(''); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <div class="form-group">
                                        <select class="form-control" id="birthOfMonth" name="birthOfMonth" required >
                                            <option value="">- Month* -</option>
                                            <option value="01">January</option>
                                            <option value="02">February</option>
                                            <option value="03">March</option>
                                            <option value="04">April</option>
                                            <option value="05">May</option>
                                            <option value="06">June</option>
                                            <option value="07">July</option>
                                            <option value="08">August</option>
                                            <option value="09">September</option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <div class="form-group">
                                        <select class="form-control" id="birthOfYear" name="birthOfYear" required >
                                            <option value="">- Year* -</option>
                                            <?php getYearList(''); ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" name="dateOfBirth" id="dateOfBirth" value="<?php echo $dob[2]."/".$dob[1]."/".$dob[0]; ?>" />
                    
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label>Marital Status</label>
                                <div class="form-group">
                                    <select id="marital" class="form-control" name="marital" required>
                                        <option value="" selected>- Marital Status* -</option>        
                                        <option value="Married">Married</option>
                                        <option value="Single">Single</option>                    
                                        <option value="Civil_Partnership">Civil Partnership</option>
                                        <option value="Common_Law">Common Law</option>                                                                                      
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>


                                <input type="hidden" name="field-1450771524" id="field-1450771524-text" value="<?php echo $dob[2]."/".$dob[1]."/".$dob[0]; ?>" />

                                <style type="text/css">
                                .form-response .form-group label.error{
                                background: none!important;
                                border-bottom: 1px solid #f00!important;
                                }
                                </style>

                                <div class="row">
                                    <div class="col-xs-12">                                
                                        <div class="form-group flex">
                                            <div class="checkbox">
                                                <!-- <span style="font-size:12px;">*All fields required.</span><br><br>   
                                                <span style="font-size:12px;">Please omit the 0 (zero) when entering phone number</span><br><br>                        
                                                <label>
                                                    <input style="vertical-align: text-bottom;" class="" name="field-1449560763[]" id="agreecode" type="checkbox" value="I agree to terms and conditions" >By entering the promotion I confirm I have read and agree to the <a href="<?php echo get_site_url().'/sevens-terms-and-conditions' ?>" target="_blank" title="terms and conditions">terms and conditions</a>.
                                                </label><br><br>
                                                <label>
                                                    <input style="vertical-align: text-bottom;" class="" name="field-1449560763[]" id="doNotCall" type="checkbox" value="By entering the promotion and claiming my voucher, I agree to be contacted by Karma Group.">By entering the promotion and claiming my voucher, I agree to be contacted by Karma Group via telephone and email about this and other Karma offers and promotions. See <a href="https://karmagroup.com/privacy-policy/" target="_blank">privacy policy</a>.
                                                </label>										 -->
                                                										
                                            </div>		
                                            <label style="font-weight: 400;">
                                                By registering to receive your voucher, you agree to being contacted by Karma Group regarding this, and other exclusive offers. Please see the Karma Group <a href="https://karmagroup.com/privacy-policy/" target="_blank">Privacy Policy</a> & <a href="https://karmagroup.com/terms-and-conditions/" target="_blank">Terms & Conditions</a>
                                            </label>							
                                        </div>
                                    </div>
                                    <div class="col-xs-12">   
                                    <?php echo $shortTnc ?>
                                    <!-- <p style="text-align: center;">Having problem entering this competition? <a href="mailto: rfu@karmagroup.com?subject=Problem Entering RFU Competition" target="_blank">Contact us here</a></p> -->							   
                                    </div>        							                    
                                </div>

                                <div class="row">
                                    <div class="form-group button-wrap">
                                        <button id="submitbookingbutton" type="submit" class="btn bg-gold">DOWNLOAD MY VOUCHERS</button>	&nbsp; 
                                        <span id="loading" style="display: none;"><img src="https://karmaclub.com/wp-content/themes/karmaclub/assets/images/ajax-loader.gif" /></span>                                        
                                        <p style="font-weight: 700;">Terms and Conditions.</p>
                                        <p>3 x US$100 vouchers against accommodation of 3 nights or more at any Karma Resort or Retreat. One voucher per stay. Vouchers valid for 1 year – see expiry date on vouchers. Booking subject to availability and black-out dates. See full voucher T&C’s <a href="https://www.proteinworld.com/terms#competition" target="_blank">here</a>,  and on digital vouchers. </p>
                                    </div>							
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </section>
            </div>


            <section class="container-fluid">
            <!-- pop up -->
            <div class="remodal" data-remodal-id="modal" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc" id="modal-success">
            <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
            <div>

                <p id="modal1Desc" style="color: #000000;">
                    <strong style="font-size: 18px;">THANK YOU</strong><br><br>
                    Thank you for confirm your details, once you close this pop-up, you will redirected to your voucher.
                </p>
            </div>
            <br>
            <button data-remodal-action="confirm" class="remodal-confirm">OK</button>
            </div>
            <!-- eof pop up   -->

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

		<script type="text/javascript" src="<?php echo get_option( 'home' ); ?>/wp-content/themes/karma/js/intlTelInput.min-v13-0-4.js"></script>
            <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
            <script type="text/javascript" src="<?php echo get_option( 'home' ); ?>/wp-content/themes/karma/js/remodal.js"></script>
            <script type="text/javascript">
                $(document).ready(function($){
                    $("#birthOfYear").val("<?php echo $dob["0"] ?>");
                    $("#birthOfMonth").val("<?php echo $dob["1"] ?>");
                    $("#birthOfDate").val("<?php echo $dob["2"] ?>");
                    $("#marital").val("<?php echo $user->records[0]->marital_status_c; ?>");
                    $("#title").val("<?php echo $user->records[0]->title_c; ?>");                    
                    if($("#title").val() == null){
                        $("#title").val("");
                    }
                    <?php
                        $addCountry = "United Kingdom";
                        if(isset($user->records[0]->billing_address_country)){
                            if($user->records[0]->billing_address_country != ""){
                                $addCountry = getCountry(strtolower($user->records[0]->billing_address_country));
                            }
                        }
                    ?>
                    $("#country").val("<?php echo $addCountry; ?>");
                    var telInput = $(".phonenumber2");
                    telInput.intlTelInput();
                    $(".phonenumber2").intlTelInput("setNumber", "+<?php echo $user->records[0]->mobile_country_c != "" ? $user->records[0]->mobile_country_c : "44"; ?>");
                    $("#mobilenumber").val("<?php echo $user->records[0]->mobile_c; ?>");
                    $('#mobilenumber').bind('keyup', function() {		
                        validatephonenumber($(this));				
                        $(".phoneMsg").html("");
                        setTimeout(function(){
                            checkingPhone(function(){
                                // console.log(isValidPhone);
                            }, false)
                        }, 500);
                    });

                    function validatephonenumber(e) {
                        var str = $.trim(e.val());

                        var newstring = '';
                        fz = false;
                        for (var i = 0; i < str.length; i++) {
                            if (str[i] == '0' && fz == false) {} else {
                                newstring = newstring + str[i];
                                fz = true;
                            }
                        }

                        e.val(newstring.replace(/[^\/\d]/g, ''));

                        // ////////CEK W/ GOOGLE LIB///////////
                        // var completePhoneNumber = $.trim(getPhoneCode(e) + e.val());
                        // validatephoneComplete(e, completePhoneNumber);
                    }

                    function msgPhoneValidation(e, tf) {

                        var phoneMsg = e.closest('.phonewrapper').find('.phoneMsg');

                        if (tf == true) {
                        phoneMsg.html("valid");
                        phoneMsg.css("color", "green");
                        //btn.prop('disabled', false);
                        } else if (tf == false) {
                        phoneMsg.html("Not Valid Format");
                        phoneMsg.css("color", "#ba160c");
                        //btn.prop('disabled', true);
                        } else {
                        phoneMsg.html("");
                        }

                        var validPhone = $('.phoneMsg')
                        var isValid = false;
                        var valid = 0
                        if (validPhone[0].innerHTML == 'valid') {
                        isValid = true;
                        }

                        if(isValid == false){
                        isValidPhone = false;
                        }
                        else if (isValid == true) {
                        isValidPhone = true;
                        }
                    }
                    function checkingPhone(callback, flag){
                        var mobileNum = $("#mobilenumber").val();
                        
                        var selectedFlag = $(".selected-flag").attr("title");

                        var mobileCode = selectedFlag.split("+")[1];                        
                        $.ajax({
                            type: "GET",                            
                            url: "https://karmagroup-d66ca.appspot.com/kg-api/phone-validation/"+mobileCode+mobileNum,
                            success: function(result){
                                $(".phoneMsg").html("");				
                                if(result.isValid){
                                    isValidPhone = true;
                                    $(".phoneMsg").html("valid");				
                                    $(".phoneMsg").css("color", "green");				
                                }
                                else if(!result.isValid){
                                    isValidPhone = false;				
                                    if($("#mobilenumber-error").length == 0 || $("#mobilenumber-error").html() != "This field is required."){
                                        $(".phoneMsg").html("Not Valid Format");
                                        $(".phoneMsg").css("color", "#ba160c");
                                    }								
                                }
                                callback();
                            },
                            error: function(jqXhr,textStatus){
                                isValidPhone = false;
                                if(flag){
                                    $('#alert-desc').html("<p style=\"margin-top: 15px;\">Oops! An error has occurred. Please ensure you are connected to the internet, refresh the page and try again.</p>");
                                    $('#modal-alert').remodal().open();
                                    // console.log(textStatus);
                                    $('#loading').css('display','none');
                                    $("#submitbookingbutton").prop("disabled", false);
                                }
                                callback();
                            }
                        })
                    }
                    function getPhoneCode(e) {        
                        return $.trim((($(e).closest('.intl-tel-input').find('.selected-flag').attr('title')).split(':'))[1]);
                    }
                    
                    $('#birthOfDate').change(function() {
                          updDob();
                    });
                    $('#birthOfMonth').change(function() {
                         updDob();
                    });
                    $('#birthOfYear').change(function() {
                        updDob();
                    });

                    function updDob() {
                        $('#dateOfBirth').val($('#birthOfYear').val() + '-' + $('#birthOfMonth').val() + '-' + $('#birthOfDate').val());
                    }

                    $('#frm').validate({
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
                            firstname1: {
                                required: true,
                                minlength: 2			
                            },
                            lastname2: {
                                required: true,
                                minlength: 2
                            }
                        }	
                    });

                     $('#frm').on('submit',function(e){
                        e.preventDefault();
                        $('#mobileCode').val(getPhoneCode($('#mobilenumber'))); //ok
                        
                        var title = $("#title").val();
                        var firstname = $('#firstName1').val();
                        var lastname = $('#lastname1').val();
                        var dob2 = $('#dateOfBirth').val();
                        var email = $('#email1').val();
                        var marital = $('#marital').val();
                        var mobilenumber = $('#mobilenumber').val();
                        var mobilecode = getPhoneCode($('#mobilenumber')).substring(1);
                        var phone = getPhoneCode($('#mobilenumber')).substring(1) + $('#mobilenumber').val();
                        var address1 = $("#address1").val();
                        var address2 = $("#address2").val();
                        var country =  $('#country').val();
                        var city = $("#city").val();
                        var state = $("#state").val();
                        var postcode =  $('#postCode').val();   
                        var dataToCloud = {                            
                            "title":title,
                            "firstName": firstname,
                            "surName" : lastname,
                            "streetLine1" : "",
                            "streetLine2" : "",
                            "city" : "",
                            "state" : "",
                            "country" : country,
                            "postCode" : postcode,
                            "mobileCode" : mobilecode,
                            "mobileNumber" :mobilenumber,
                            "homePhoneCode" :"",
                            "homePhoneNumber" :"",
                            "emailID" :email,
                            "dateOfBirth" : $('#dateOfBirth').val(),
                            "promoCode" : "Protein world 2018",
                            "userType" :"",
                            "referredMembershipNumber" : "",
                            "userID" :"<?php echo $user->records[0]->id ?>",
                            "comCall" :"",
                            "comSms" :"",
                            "comEmail" :"",
                            "receiveOffers" : "",
                            "KCId  " :"",
                            "maritalStatus":marital,
                            "collectionEntryPoint": "Protein World Download Page",
                            "location": "Karma Group",
                            "downloaded_c": true
                        }                                                  
                        var isvalidate = $('#frm').valid();        
                      
                        $('#loading').css('display','inline-block');        
                        $('#submitbookingbutton').prop('disabled', true);
                        checkingPhone(function(){
                            if (isvalidate && isValidPhone) {                                               
                                var today = new Date();
                                var userDate = $('#birthOfDate').val();
                                var userMonth = $("#birthOfMonth").val();
                                var userYear = $("#birthOfYear").val();
                                var userAge = today.getFullYear() - userYear - 1;
                                if(today.getMonth() >= userMonth - 1){
                                    if(today.getDate() >= userDate){					
                                        userAge += 1;					 
                                    }
                                }
                                var sugarMarital = "";
                                if(marital == "Civil_Partnership"){
                                    sugarMarital = "civilpartnership";
                                }
                                else if(marital == "Common_Law"){
                                    sugarMarital = "commonlaw";
                                }
                                else if(marital == "Married"){
                                    sugarMarital = "married"
                                }
                                else if(marital == "Single"){
                                    sugarMarital = "single";
                                }                                              
                                
                                if(userAge >= 18){	
                                    var urlWarehouse  ='https://karmawarehouse.izenoondemand.com/production/api/karmaclub/group/karmacluboffer.php?first_name=' + firstname + '&last_name=' + lastname + '&phone=' + mobilecode+mobilenumber + '&email=' + email + '&dob=' + dob2 + '&country=' + country + '&postalcode=' + postcode + "&maritalStatus=" + sugarMarital +'&promocode=Protein world 2018&data_source=Karma Club Activate&collection_entry_point=Protein World Download Page&card_downloaded_c=true&website='+ "<?php echo($_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']); ?>";
                                
                                    $.ajax({
                                        type: "POST",
                                        url: urlWarehouse,
                                        success: function(data, textStatus, jqXHR){
                                            if(textStatus === "success"){  
                                                $.ajax({
                                                    type: "POST",
                                                    url: "<?php echo get_karma_api_base_url(); ?>/protein-world-active/<?php echo $user->records[0]->id ?>",
                                                    // url: "http://localhost:8080/protein-world-active/<?php echo $user->records[0]->id ?>",
                                                    data: dataToCloud,
                                                    success: function(data, textStatus, jqXHR) {
                                                        // console.log("Submit success to db karmawarehouse...");										
                                                        // $("#modal-success").remodal().open();
                                                        $('#loading').css('display','none');
                                                        // $(document).on('closed', '#modal-success', function (e) {	
                                                        //     console.log('Modal is closed' + (e.reason ? ', reason: ' + e.reason : ''));											
                                                        //     // window.location.href = "<?php echo get_site_url(); ?>/rfu"
                                                        //     window.location.href = data.data.linkCard; 
                                                        //     $("#title").val("");
                                                        //     $('#firstName1').val("");
                                                        //     $('#lastname1').val("");	
                                                        //     $('#email1').val(""); 	
                                                        //     $('#mobilenumber').val(""); 
                                                        //     $("#country").val(""); 
                                                        //     $("#postCode").val("");																											
                                                        //     $('#birthOfMonth').val("");
                                                        //     $('#birthOfDate').val("");
                                                        //     $('#birthOfYear').val("");
                                                        //     $('#dateOfBirth').val(""); 											
                                                        //     $("#marital").val("");
                                                        //     $("#doNotCall").prop('checked', false);
                                                        //     $("#agreecode").prop('checked', false);																						
                                                        // });
                                                        setTimeout(function(){
                                                            window.location.href = data.data.linkCard; 
                                                        }, 5000);                                                    
                                                    }
                                                })
                                            }
                                            else{
                                                $('#alert-desc').html("<p style=\"margin-top: 15px;\">Sorry our servers are busy right now. Please click Activate button again.</p>");
                                                $('#modal-alert').remodal().open();
                                                $('#loading').css('display','none'); 
                                                $("#submitbookingbutton").prop("disabled", false);               
                                            }
                                        }
                                    })
                                }
                                else{
                                    $('#alert-desc').html("<p style=\"margin-top: 15px;\">Please note, this voucher is open to people aged 18 and over only</p>");
                                    $('#modal-alert').remodal().open();
                                    $('#loading').css('display','none'); 
                                    $("#submitbookingbutton").prop("disabled", false);         
                                }			 			                                
                            } 
                            else{
                                $('#alert-desc').html("<p style=\"margin-top: 15px;\">It looks like some of your information is missing, please check and complete the form in full.</p>");
                                $('#modal-alert').remodal().open();
                                $('#loading').css('display','none');
                                $("#submitbookingbutton").prop("disabled", false);
                            }  
                        });
                    });

                })
            </script>
    <?php } ?>

<?php 
$html = ob_get_contents();
ob_end_clean();
?>

