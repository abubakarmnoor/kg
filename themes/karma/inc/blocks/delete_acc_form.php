<?php
error_reporting(0);
ob_start();
if(!isset($_COOKIES['token'])){
    $curl = curl_init( get_karma_api_base_url()."/generate-token");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.17 (KHTML, like Gecko) Chrome/24.0.1312.52 Safari/537.17');
    curl_setopt($curl, CURLOPT_AUTOREFERER, true); 
    curl_setopt($curl, CURLOPT_VERBOSE, 1);  
    curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_0);
    // curl_setopt($curl, CURLOPT_HEADER, 1);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    "content-type: application/json;charset=UTF-8"
    ));
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 0);
    $tokenData = json_decode(curl_exec($curl));
    setcookie("token", $tokenData->token, time() + 3600);
    setcookie("token-username", $tokenData->username, time() + 3600);
    setcookie("token-pass", $tokenData->password, time() + 3600);
}
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
	    line-height: 20% !important;
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
        .emailMsg,
        .promoCodeMsg {
          color: #ba160c;
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
    #email-wrapper .message-validator{
        display: none !important;
    }

</style>
<div id="contained_content" style="">

<section id="landing-page__form-header" class="section-wrapper">
    <p id="landing-page__form-header__title">DELETE ACCOUNT REQUEST</p>    
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
        <form id="frm" action="#" method="POST">
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <div class="col-xs-12 col-sm-4">
                        <div class="form-group">
                            <input type="text" class="form-control" id="firstName1" placeholder="First Name*" name="firstname1" required />
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="form-group">
                            <input type="text" class="form-control" id="lastname1" placeholder="Last Name*" name="lastname2" required />
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
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
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-4">                                
                    <div class="form-group flex">
                        <div class="checkbox">
                            <p style="font-size:14px;">How did we contact you:</p>  
                            <p style="font-size:10px;color: #ba160c;display: none;" id="checkbox-alert">Please select the option.</p>                                       
                            <label style="margin-left: 0;">
                                <input style="vertical-align: text-bottom;" class="" name="select-contact" id="phone-contact" type="checkbox" value="By phone" >Phone</a>.
                            </label>
                            <label>
                                <input style="vertical-align: text-bottom;" class="" name="select-contact" id="email-contact" type="checkbox" value="By email">Email</a>.
                            </label>										
                        </div>									
                    </div>
                </div>    			
                <div class="col-xs-12 col-sm-4" style="padding-top:30px; display: none;" id="phone-wrapper">
                    <div class="form-group">
                            <div class="phonewrapper">
                            <div class="phoneMsg"></div>
                            <input type="text" class="form-control phonenumber2" name="mobilenumber" id="mobilenumber" placeholder="Mobile Number*" style="padding-right: 95px;" />
                            <input type="hidden" class="code" id="mobileCode" name="mobileCode">
                            <input type="hidden" class="complete" name="field-1450771290" id="field-1450771290-text" value="">
                        </div>
                    </div>
                </div>				                    
                <div class="col-xs-12 col-sm-4" style="padding-top:30px; display: none;" id="email-wrapper">
                    <div class="form-group" style="position: relative;">
                        <div class="emailMsg" style="width: 80px;"></div>
                        <input type="email" class="form-control" id="email1" placeholder="Email*" name="field-1456130004" />
                    </div>
                </div>                                
            </div>        
            <div class="row">
                <div class="form-group button-wrap">
                    <button id="submitbookingbutton" type="submit" class="btn bg-gold">Submit Request</button>	&nbsp; 
                    <span id="loading" style="display: none;"><img src="https://karmaclub.com/wp-content/themes/karmaclub/assets/images/ajax-loader.gif" /></span>
                </div>							
            </div>
        </form>
        <div class="row" id="success-helper" style="display: none;">
			<div class="col-md-12">
				
			</div>
			<button data-remodal-action="confirm" class="remodal-confirm">CLOSE</button>
		</div>
		<div class="row" id="wait-helper" style="display: none;">
			<div class="col-md-12">
				<h3>Please Wait</h3>
				<span id="loading"><img src="https://karmaclub.com/wp-content/themes/karmaclub/assets/images/ajax-loader.gif" /></span>
			</div>			
		</div>
    </div>
    <!-- pop up -->
    <div class="remodal" role="dialog" aria-labelledby="modal1Title" aria-describedby="alert-desc" id="modal-alert">
        <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
        <div>
            <h3>Thank You</h3>
            <p>Your request has been submitted. </p>
            <br />
            <br />
        </div>
        <br>
        <button data-remodal-action="confirm" class="remodal-confirm">CLOSE</button>
    </div>
    <!-- eof pop up -->

    <!-- pop up -->
    <div class="remodal" role="dialog" aria-labelledby="modal1Title" aria-describedby="alert-desc" id="modal-wait">
        <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
        <div>
            <h3>Please Wait</h3>
            <span id="loading"><img src="https://karmaclub.com/wp-content/themes/karmaclub/assets/images/ajax-loader.gif" /></span>
        </div>
        <br>
        <button data-remodal-action="confirm" class="remodal-confirm">CLOSE</button>
    </div>
    <!-- eof pop up -->

    <!-- pop up -->
    <div class="remodal" role="dialog" aria-labelledby="modal2Title" aria-describedby="alert-desc" id="modal-fail">
        <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
        <div>
            <h3>Sorry</h3>
            <p>Sorry, something when wrong, please refresh this page and try again.</p>
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
<script>
$(document).ready(function(){
    var cookies = document.cookie.split(";");
    var cookiesArr = {};
    for(var i = 0; i < cookies.length; i++){
        var temp = cookies[i].split("=");
        cookiesArr[temp[0].trim()] = temp[1];
    }    
    var isValidPhone = false;
    var isValidMail = false;
    var phoneShown = false;
    var emailShown = false;
    $(".phonenumber2").intlTelInput();
    $(".phonenumber2").intlTelInput("setCountry", "gb");
    function checkingPhone(callback, flag){
        var mobileNum = $("#mobilenumber").val();
        // console.log(mobileNum)
        var selectedFlag = $(".selected-flag").attr("title");
        // var mobileCode = "+" + selectedFlag.split("+")[1];
        var mobileCode = selectedFlag.split("+")[1];
        // console.log(mobileCode);
        $.ajax({
            type: "GET",
            // url: "https://phone.karmagroup.com:3000/?number="+mobileCode+mobileNum,
            url: "https://karmagroup-d66ca.appspot.com/kg-api/phone-validation/"+mobileCode+mobileNum,
            success: function(result){
                if(result.isValid){
                    isValidPhone = true;
                    $(".phoneMsg").html("valid");				
                    $(".phoneMsg").css("color", "green");
                }
                else if(!result.isValid){
                    isValidPhone = false;
                    $(".phoneMsg").html("Not Valid Format");
                    $(".phoneMsg").css("color", "#ba160c");
                }
                callback();
            },
            error: function(jqXhr,textStatus){
                isValidPhone = false;
                if(flag){
                    $('#alert-desc').html("<p style=\"margin-top: 15px;\">Oops! An error has occurred. Please ensure you are connected to the internet, refresh the page and try again.</p>");
                    $('#modal-alert').remodal().open();
                    console.log(textStatus);
                    $('#loading').css('display','none');
                    $("#submitbookingbutton").prop("disabled", false);
                }
                callback();
            }
        })
    }
    
    $('input[id=phone-contact]').change(function(){        
        if($(this).is(':checked')) {
            $("#checkbox-alert").css('display',"none");
            $("#phone-wrapper").css("display", "block");
            // isValidPhone = false;
            phoneShown = true;
        } else {
            $("#phone-wrapper").css("display", "none");
            // isValidPhone = true;
            phoneShown = false;
            $('#mobilenumber').val("");
            $('.phoneMsg').html("");
        }
    });

    $('input[id=email-contact]').change(function(){
        if($(this).is(':checked')) {
            $("#checkbox-alert").css('display',"none");
            $("#email-wrapper").css("display", "block");            
            emailShown = true;
            // isValidMail = false;
        } else {
            $("#email-wrapper").css("display", "none");
            emailShown = false;
            $("#email1").val("");
            // isValidMail = true;
        }
    });

    $('#mobilenumber').bind('keyup', function() {		
        validatephonenumber($(this));				
		$(".phoneMsg").html("");
		setTimeout(function(){
			checkingPhone(function(){
				console.log(isValidPhone);
			}, false)
		}, 500);
    });

    $('.intl-tel-input li').bind('click keydown keyup', function() {        
        validatephonenumber($("#mobilenumber"));		
        if($("#mobilenumber").val().length !== 0){
            $(".phoneMsg").html("");
            setTimeout(function(){
                checkingPhone(function(){
                    console.log(isValidPhone);
                }, false)
            }, 500);
        }
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
    }

    $("#email1").bind('keyup', function(e) {
        // if($('input[id=email-contact]').is(':checked')) {
        //     var value = e.target.value;
        //     var result = /(^\w.*@\w+\.\w)/.test(value);            
        // }                
        $(".emailMsg").html("");
        $('#email1').css('padding-right', '0');
        isValidMail = false;
    })

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

    $("#frm").on("submit", function(e){
        e.preventDefault();
        var url = "<?php echo get_karma_api_base_url(); ?>";
        var isvalidate = $('#frm').valid();
        if(phoneShown && isValidPhone == false && $("#mobilenumber").val() == ""){
            $(".phoneMsg").html("This field is required.");
            $(".phoneMsg").css("color", "#ba160c");
        }
        if(emailShown && isValidMail == false){
            var value = $('#email1').val();
            // console.log(value)
            var result = /(^\w.*@\w+\.\w)/.test(value);
            isValidMail = result;
            console.log(result);
            if(!result){
                $(".emailMsg").html("Please enter a valid email.");
                $(".emailMsg").css("color", "#ba160c");
                $('#email1').css('padding-right', '109px');
            }
            else{
                $(".emailMsg").html("Valid");          
                $(".emailMsg").css("color", "green");  
                $('#email1').css('padding-right', '0');
            }
        }        
        var data = {};
        if(emailShown || phoneShown){
            $('#modal-wait').remodal().open();
            if(phoneShown && emailShown && isValidMail && isValidPhone){
                data = {
                    "username": cookiesArr['token-username'],
                    "password": cookiesArr['token-pass'],
                    "firstname": $("#firstName1").val(),
                    "lastname": $("#lastname1").val(),
                    "country": $("#country").val(),
                    "email": $("#email1").val(),
                    "phone": "+"+$(".selected-flag").attr("title").split("+")[1] + $("#mobilenumber").val()
                }
            }
            else if(phoneShown && isValidPhone){
                data = {
                    "username": cookiesArr['token-username'],
                    "password": cookiesArr['token-pass'],
                    "firstname": $("#firstName1").val(),
                     "lastname": $("#lastname1").val(),
                    "country": $("#country").val(),             
                    "phone": "+"+$(".selected-flag").attr("title").split("+")[1] + $("#mobilenumber").val()
                }
            }
            else if(emailShown && isValidMail){
                data = {
                    "username": cookiesArr['token-username'],
                    "password": cookiesArr['token-pass'],
                    "firstname": $("#firstName1").val(),
                    "lastname": $("#lastname1").val(),
                    "country": $("#country").val(),
                    "email": $("#email1").val()                
                }
            }         
            $.ajax({
                type: "POST",
                data: data,
                url: url + "/request-delete",
                headers: {
                    "x-access-token": cookiesArr["token"]
                },
                success: function(result){
                    console.log(result);
                    if(result.success){
                        $("#firstName1").val("");
                        $("#lastname1").val("");
                        $("#country").val("");
                        $("#email1").val("");  
                        $("#mobilenumber").val("");
                        $(".emailMsg").html("");     
                        $(".phoneMsg").html("");     
                        $('input[id=email-contact]').prop('checked', false);
                        $('input[id=phone-contact]').prop('checked', false);
                        $("#phone-wrapper").css("display", "none");
                        $("#email-wrapper").css("display", "none");
                        $('#modal-alert').remodal().open();
                    }                    
                    else{
                        $('#modal-fail').remodal().open();    
                    }
                },
                error: function(err){
                    console.log(err);
                    $('#modal-fail').remodal().open();
                }
            })
        }
        else{
            $("#checkbox-alert").css('display',"block");
            return false;
        }
    })
})
</script>
<?php 
$html = ob_get_contents();
ob_end_clean();
?>

