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
    $pc = str_replace(" ", "%20","Specsavers2 Tuscany 2018");
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

    #karma #flex_banner .content {
        padding: 180px 0 80px 0 !important;
    }

    #karma .type-content .main_content li.slide.flex-active-slide {
        min-height: 500px !important;
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
        max-width: 500px;
        margin: auto;
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
        /*          height: 508px;*/
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
      #landing-page__form-header p:nth-of-type(2){
          font-size: 12px;
      }
    }

    @media screen and (max-width: 320px) {
        #landing-page__offer-campaign__title{
          font-size: 35px !important;
        }
        #landing-page__form-header p:nth-of-type(2){
          margin: auto 10px;
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
    if(false){ ?>
        <div id="contained_content" style="<?php echo $margin; ?>">
            <section id="landing-page__form-header" class="section-wrapper">
                <p id="landing-page__form-header__title">IT LOOKS LIKE YOU ARE NOT ALLOWED TO SEE THIS PROMOTION.</p>
            </section>
        </div>
    <?php }
    elseif(false){ ?>
        <div id="contained_content" style="<?php echo $margin; ?>">
            <section id="landing-page__form-header" class="section-wrapper">
                <p id="landing-page__form-header__title">IT LOOKS LIKE WE CANNOT FIND YOUR DETAILS.</p>
                <p>Please contact <a href="mailto:specsavers@karmaexperience.co.uk" target="_blank">specsavers@karmaexperience.co.uk</a> for assistance.</p>
                <p>*If you have already confirmed your details, we have sent you an email with a link to redownload your voucher.</p>
            </section>
        </div>
    <?php }
    elseif(!empty($user) && ($user->records[0]->downloaded_c == 1 && $user->records[0]->promo_code_c == "Specsavers2 Tuscany 2018")){?>
        <div id="contained_content" style="<?php echo $margin; ?>">
            <section id="landing-page__form-header" class="section-wrapper">
                <p id="landing-page__form-header__title">IT LOOKS LIKE YOU HAVE ALREADY ENTERRED THIS PROMOTIONS.</p>
                <p>Please use the button below to redownload your voucher.</p>
            </section>
            <div class="row">
                <div class="form-group button-wrap">
                    <a href="https://card.karmaclub.com/voucher-specsavers-<?php echo $kcID; ?>.pdf" class="btn bg-gold" style="color: #FFF;padding: 20px;font-size: 16px;font-weight: bold;">DOWNLOAD MY VOUCHER</a>
                </div>
            </div>
        </div>
    <?php }
    else{ ?>
        <div id="contained_content" style="<?php echo $margin; ?>">
            <section id="landing-page__form-header" class="section-wrapper">
                <p id="landing-page__form-header__title">CONFIRM YOUR DETAILS</p>
                <p>PLEASE CONFIRM YOUR DETAILS BELOW TO DOWNLOAD YOUR £250 VOUCHER…* YES, YOU READ THAT RIGHT - GOOD JOB YOU WENT TO SPECSAVERS!</p>
            </section>

            <section class="section join-block zero-padding">
                <div class="container container-inner">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 form-join">

                    <form id="frm" method="post" class="form-response">

                    <style>
                    .title-wrapper .message-validator{
                        z-index: -1;
                    }
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
                                    <input type="text" class="form-control phonenumber2" name="mobilenumber" id="mobilenumber" placeholder="Mobile Number**" required />
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

                    <input type="hidden" name="dateOfBirth" id="dateOfBirth" value="<?php echo $dob[0]."-".$dob[1]."-".$dob[2]; ?>" />

                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label>Marital Status</label>
                                <div class="form-group">
                                <select id="marital" class="form-control" name="marital" required>
                                        <option value="" selected>- Select* -</option>
                                        <option value="Married">Married</option>                                        
                                        <option value="Civil_Partnership">Civil Partnership</option>
                                        <option value="long_term_partner">Long Term Partner</option>
                                        <option value="Single">Single</option>
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
                                            <p>*Required</p>
                                            <p>**Please omit the leading zero when entering your phone number</p>
                                            <label>
                                                <input style="vertical-align: text-bottom;" class="" name="field-1449560763[]" id="doNotCall" type="checkbox" value="By entering the promotion and claiming my voucher, I agree to be contacted by Karma Group."> By claiming my voucher, I agree to being contacted by Karma Group and Karma group related brands via telephone and email about this and other exclusive Karma offers and promotions. You can unsubscribe at any time, see Karma Group’s <a href="https://karmagroup.com/privacy-policy/" target="_blank">Privacy Policy</a> for more information.
                                            </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                    <?php echo $shortTnc ?>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group button-wrap">
                                        <button id="submitbookingbutton" type="submit" class="btn bg-gold">DOWNLOAD MY VOUCHER</button> &nbsp;
                                        <span id="loading" style="display: none;"><img src="https://karmaclub.com/wp-content/themes/karmaclub/assets/images/ajax-loader.gif" /></span>
                                        <p style="font-size:11px;padding-top:10px;">*Terms & Conditions: Each £250 voucher valid against bookings of minimum 7 consecutive nights at selected Karma resorts – see digital voucher for applicable destinations. Visit <a href="https://karmagroup.com/" target="_blank">www.karmagroup.com</a> for more information on destinations. One voucher per stay. Voucher valid for 1 year from receipt of email. See voucher expiry date at top right of voucher. Vouchers can only be downloaded and used by people aged 18 or over. Booking subject to availability, and blackout dates apply. Advanced reservation is required by contacting to <a href="mailto:specsavers@karmaexperience.co.uk">specsavers@karmaexperience.co.uk</a> please reference your voucher code when booking. Not to be combined with any other resort offer or promotion. The voucher cannot be exchanged for cash or other equivalent. Voucher is non-transferable and can only be used by the person named on the voucher. Each voucher can only be used once. One voucher per person. Copied or damaged vouchers are invalid. Please bring the voucher with you and present upon your arrival. Please see digital voucher for additional terms and conditions, including applicable destinations and use by date.
                                       </p>
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
                    if($("#marital").val() == null) {
                        $("#marital").val("");
                    }
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
					function getAge(dateString) {
					    var today = new Date();
					    var birthDate = new Date(dateString);
					    var age = today.getFullYear() - birthDate.getFullYear();
					    var m = today.getMonth() - birthDate.getMonth();
					    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
					      age--;
					    }
					    return age;
					  }
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
                        var country =  "United Kingdom";
                        var city = $("#city").val();
                        var state = $("#state").val();
                        var postcode =  $('#postCode').val();
                        var dataToCloud = {
                            "uid": "<?php echo $user->records[0]->id ?>",
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
                            "oldEmail": "<?php echo $user->records[0]->email1; ?>",
                            "dateOfBirth" : $('#dateOfBirth').val(),
                            "promoCode" : "Specsavers2 Tuscany 2018",
                            "userType" :"",
                            "referredMembershipNumber" : "",
                            "userID" :"<?php echo $user->records[0]->id ?>",
                            "comCall" :"",
                            "comSms" :"",
                            "comEmail" :"",
                            "receiveOffers" : "",
                            "KCId  " :"",
                            "maritalStatus":marital,
                            "collectionEntryPoint": "Specsavers",
                            "location": "Karma Group",
                            "downloaded_c": true
                        }
                        var isvalidate = $('#frm').valid();

                        $('#loading').css('display','inline-block');
                        $('#submitbookingbutton').prop('disabled', true);
                        
                        checkingPhone(function(){
                           if($("#doNotCall").is(":checked")){
                                if (isvalidate && isValidPhone) {
                                    var today = new Date();
                                    var userDate = $('#birthOfDate').val();
                                    var userMonth = $("#birthOfMonth").val();
                                    var userYear = $("#birthOfYear").val();
                                    var userAge = today.getFullYear() - userYear;
                                    if(today.getMonth() >= userMonth - 1){
                                        if(today.getDate() >= userDate){
                                            userAge += 1;
                                        }
                                    }

                                    var newAge = getAge(userYear +'/'+ userMonth +'/'+ userDate);
                                    userAge=newAge;
                                    // console.log(newAge);

                                    var sugarMarital = "";
                                    if(marital == "Civil_Partnership"){
                                        sugarMarital = "civilpartnership";
                                    }
                                    else if(marital == "long_term_partner"){
                                        sugarMarital = "longtermpartner";
                                    }
                                    else if(marital == "Married"){
                                        sugarMarital = "married"
                                    }
                                    else if(marital == "Single"){
                                        sugarMarital = "single";
                                    }

                                    if(userAge >= 18){
                                        var urlWarehouse  ='https://karmawarehouse.izenoondemand.com/production/api/karmaclub/group/karmacluboffer.php?first_name=' + firstname + '&last_name=' + lastname + '&phone=' + mobilecode+mobilenumber + '&email=' + email + '&dob=' + dob2 + '&country=' + country + '&postalcode=' + postcode + "&maritalStatus=" + sugarMarital +'&promocode=Specsavers2 Tuscany 2018&data_source=Karma Experience&collection_entry_point=Specsavers&card_downloaded_c=true&website='+ "<?php echo($_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']); ?>";
                                        $.ajax({
                                            type: "GET",
                                            url: "https://karmawarehouse.izenoondemand.com/production/api/sugarapi/getUserByEmailAndPC.php?email=" + email + "&pc=Specsavers2%20Tuscany%202018",
                                            success: function(data, textStatus, jqXHR){
                                                var userData = JSON.parse(data);
                                                var isEnterred = false;
                                                if(userData.records.length > 0){
                                                    if(userData.records[0].downloaded_c != false && userData.records[0].promo_code_c == "Specsavers2 Tuscany 2018"){
                                                        isEnterred = true;
                                                        $('#alert-desc').html("<p style=\"margin-top: 15px;\">It looks like you have already entered this promotion. If you want to redownload your voucher, you can use the email you get when registered. Or contact <a href='mailto:specsavers@karmaexperience.co.uk' target='_blank' style='text-decoration: none;color: #8d7249;'>specsavers@karmaexperience.co.uk</a> for assistance.</p>");
                                                        $('#modal-alert').remodal().open();
                                                        $('#loading').css('display','none');
                                                        $("#submitbookingbutton").prop("disabled", false);
                                                    }
                                                }   
                                                if(!isEnterred){
                                                    $.ajax({
                                                        type: "POST",
                                                        url: urlWarehouse,
                                                        success: function(data, textStatus, jqXHR){
                                                            if(textStatus === "success"){
                                                                $.ajax({
                                                                    type: "POST",
                                                                    url: "<?php echo get_karma_api_base_url(); ?>/specsavers-active/",
                                                                    // url: "http://localhost:8080/specsavers-active/",
                                                                    data: dataToCloud,
                                                                    success: function(data, textStatus, jqXHR) {
                                                                        setTimeout(function(){
                                                                            $('#loading').css('display','none');
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
                                            }
                                        })                                        
                                    }
                                    else{
                                        $('#alert-desc').html("<p style=\"margin-top: 15px;\">Please note, this voucher is available for people aged 18 and over only.</p>");
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
                           }
                           else{
                            $('#alert-desc').html("<p style=\"margin-top: 15px;\">To claim your voucher, please confirm you agree to be contacted by Karma Group about this and other future exclusive offers and promotions. See our Privacy Policy <a style=\"color: #8d7249; text-decoration: none;\" href=\"<?php echo get_site_url().'/privacy-policy' ?>\" target=\"_blank\">here</a>. </p>");
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

