<?php
// error_reporting(~0);
// ini_set('display_errors', 1);
ob_start();
?>
<link type="text/css" rel="stylesheet" href="<?php echo get_option( 'home' ); ?>/wp-content/themes/karma/css/bootstrap.min.css">
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
	.bg-gold{
	display: block;
    margin: 0 auto;
    box-shadow: none;
    padding: 10px 30px;
    font-size: 18px;
    font-weight: 700;
    background: #896f47;
    color: #fff;
    outline: 0;
	}
	.bg-gold:hover{
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
<div id="contained_content" style="padding: 25px 0;">
    <section id="landing-page__form-header" class="section-wrapper">
        <p id="landing-page__form-header__title">UNSUBSCRIBE</p>        
    </section>
    <section class="section join-block zero-padding">
        <div class="container container-inner">
            <div class="row">
                <div class="col-xs-12 col-lg-12">
                    <form action="http://mx9.inboxgateway.com/unsubscribe.php" method="post">
                        <div class="form-group">
                            <label for="email">Email Address:</label><br />
                            <input type="text" class="form-control" id="email" name="email" value="<?php echo $_GET['email'] ?>" /><br /><br />                            
                        </div>                                                
                        <input class="btn bg-gold" type="submit" value="Unsubscribe Me" />
                        <input type="hidden" name="clientid" value="350" />
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<?php 
$html = ob_get_contents();
ob_end_clean();
?>

