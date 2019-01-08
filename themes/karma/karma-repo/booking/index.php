<?
$rightNowDate = date("m-d-Y");
$date1 = str_replace('-', '/', $date);
$tomorrow = date('d-m-Y',strtotime($date1 . "+1 days"));
$today = date("d-m-Y");
$dateonly = date("d");
$dateonlytomorrow = substr($tomorrow, 0,2);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<link type="text/css" rel="stylesheet" href="style.css" media="" />
<link type="text/css" rel="stylesheet" href="bootstrap-bar.css" media="" />
<link type="text/css" rel="stylesheet" href="datepicker.css" media="" />
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<script src="jquery-1.9.1.js"></script>
<script src="bootstrap-datepicker.js"></script>
</head>
<body class="en">

<div id="ctrlSiteHeader_ctrlBooking_ctrlBookingDevice" class="bookingMask" style="margin-top: -30px;">
<div style="height:40px;">
</div>

<div id="deviceCover" class="cover device" style="height: 75px;">
    <h4><span>Check Rates &amp; Availability</span></h4>
    
    <div id="bookingDevice" class="form">
	<!-- <form id="frmReserv" name="frmReserv" action="#" method="get"> -->
	    <input type="hidden" id="dteCheckIn" name="dteCheckIn" value="">
	    <input type="hidden" id="dteCheckOut" name="dteCheckOut" value="">
	    <input type="hidden" id="source" name="source" value="desktop">
	    <input type="hidden" id="bc" name="bc" value="AN">
	    <fieldset class="space" style="margin-top:1px;">
    <select id="karmaResort" class="required" name="karmaResort" aria-required="true" style="height:22px;">
    <option value="none" selected="selected" disabled>FIND A RESORT</option>

        <optgroup label="Karma Resort">
            <option value="1">Karma Bavaria - Germany</option>
            <option value="2">Karma Haveli - India</option>
            <option value="3">Karma Jimbaran - Bali</option>
            <option value="4">Karma Kandara - Bali</option>
            <option value="5">Karma Rottnest - Australia</option>
        </optgroup>

        <optgroup label="Karma Retreat">
            <option value="6">Karma Carcassonne - France</option>
            <option value="7">Karma Grove - India</option>                            
            <option value="8">Karma Mayura - Bali</option>                            
            <option value="9">Karma Reef - Indonesia</option>                            
            <option value="10">Karma St Martin's - Isles of Scilly</option>              
        </optgroup>

        <optgroup label="Karma Royal">
            <option value="11">Karma Royal Benaulim - India</option>
            <option value="12">Karma Royal Candidasa - Bali</option>                          
            <option value="13">Karma Royal Chiang Mai - Thailand</option>                            
            <option value="14">Karma Royal Haathi Mahal - Goa</option>                            
            <option value="15">Karma Royal Jimbaran - Bali</option>                            
            <option value="16">Karma Royal MonteRio - Goa</option>                            
            <option value="17">Karma Royal Palms - Goa</option>                            
            <option value="18">Karma Royal Phuket - Thailand</option>                            
            <option value="19">Karma Royal Sanur - Bali</option>                            
            <option value="20">Karma Royal Shimla - India</option>                            
            <option value="21">Karma Royal Villea - Crete</option>                    
        </optgroup>

        <optgroup label="Karma Estate">
            <option value="22">Le Preverger - France</option>                            
            <option value="23">Pelikanos - Mykonos</option>                    
        </optgroup>
        </select>
            
	    </fieldset>
        <fieldset class="line">
	        <fieldset class="date">
	            <label for="bookCheckIn">Check-In</label>
	            <div class="inputBG1"><input type="text" class="required hasDatepicker" maxlength="10" name="bookCheckIn" id="bookCheckIn" value="<? echo $today; ?>" readonly="readonly" aria-required="true"><a href="#" class="btn small" id="dp4" data-date-format="dd/mm/yyyy" placeholder="<? echo $today; ?>" data-date=""><img id="bookCheckInImage" src="<? echo $dateonly; ?>.png" alt="..." title="..." style="margin-top:2px; margin-left:3px;"></a>
	            <input type="hidden" name="bookCheckInValue" id="bookCheckInValue" value="">
	            </div>
	        </fieldset>
	        
	        <fieldset class="date">
	            <label for="bookCheckOut">Check-Out</label>
	            <div class="inputBG1"><input type="text" class="required enddate hasDatepicker" maxlength="10" name="bookCheckOut" id="bookCheckOut" value="<? echo $tomorrow; ?>" readonly="readonly" aria-required="true"><a href="#" class="btn small" id="dp5" data-date-format="dd/mm/yyyy" placeholder="<? echo $tomorrow; ?>" data-date=""><img id="bookCheckOutImage" src="<? echo $dateonlytomorrow; ?>.png" alt="..." title="..." style="margin-top:2px; margin-left:3px;"></a>
	            <input type="hidden" name="bookCheckOutValue" id="bookCheckOutValue" value="">
	            </div>
	        </fieldset>
			
        </fieldset>
        <fieldset class="line">
	        <fieldset>
	            <label for="Rooms" style="font-size:10px;">Room(s)</label>
			    <div class="inputBG2">
	        	    <input type="text" class="required fixwidth" maxlength="2" name="Rooms" id="Rooms" value="1" aria-required="true" style="width:38px;">
			    </div>
	        </fieldset>
	        <fieldset>
	            <label for="Adults" style="font-size:10px;">Adult(s)</label>
			    <div class="inputBG2">
	        	    <input type="text" class="required fixwidth" maxlength="2" name="Adults" id="Adults" value="2" aria-required="true" style="width:38px;">
			    </div>
	        </fieldset>
	        <fieldset class="children">
	            <label for="Children" style="font-size:10px;">Children</label>
			    <div class="inputBG2">
	        	    <input type="text" class="required fixwidth" maxlength="2" name="Children" id="Children" value="0" aria-required="true" style="width:38px;">
			    </div>
			    <span style="font-size:9px;color:#58595B;">(5-13 yrs)</span>
	        </fieldset>
	        <fieldset class="infant">
	            <label for="infant" style="font-size:10px;">Infant(s)</label>
			    <div class="inputBG2">
	        	    <input type="text" class="required fixwidth" maxlength="2" name="Infant" id="Infant" value="0" aria-required="true" style="width:38px;">
			    </div>
			    <span style="font-size:9px;color:#58595B;">(< 5 yrs)</span>
	        </fieldset>
		</fieldset>
		
	    <fieldset class="btn">
	        
	        <button class="button" id="submitButton" style="margin-top:18px;"><span>Check availability</span></button>
	    </fieldset>
	    <div id="enterCode" style="padding-top:60px;">
	    	<fieldset>
				<label style="margin-top:3px;" id="titlePromotionalLabel">Have a <a href="#" id="promoCode">promotional code</a>?</label>
			</fieldset>
			<fieldset>
				<label style="margin-top:3px;" id="titleCode">Enter the code</label>
			</fieldset>
		
			<fieldset>
				<div class="inputBG1" style="float:left; width:111px;" id="textFieldCode">
					<input class="promocode" type="text" maxlength="16" name="promotionCode" id="promotionCode" value="">
				</div>
			</fieldset>
			<div class="clear"></div>
		</div>
		
	<!-- </form> http://www.karmagroup.com/files/2514/6433/3962/Print_Logo_COE2016_en.jpg -->
	</div>

	<div class="clear"></div>

</div>

</div>
</div>
<script src="bookingbar.js"></script>
<script>
// function

var jDateNow = new Date(); 
var jDate = jDateNow.toString().replace(/\S+\s(\S+)\s(\d+)\s(\d+)\s.*/,'$2-$1-$3');
var arrJDate = jDate.split('-');
var curr_month = jDateNow.getMonth();
curr_month++; //js start month from 0-11.
var littlehotelierDate = arrJDate[0]+'+'+arrJDate[1]+'+'+arrJDate[2];
var littlehotelierDateReverse = arrJDate[2]+'-'+curr_month+'-'+arrJDate[0];

$("#karmaResort").change(function () {
        
       var ddk = parseInt(this.value);
        
        switch(ddk){
        case 1:
            //karma bavaria
            $('#titlePromotionalLabel').css({'display':'none'});
	 		$('#titleCode').css({'display':'none', 'margin-top':'3px'});
	 		$('#textFieldCode').css({'display':'none'}); 
     		$("#Infant").val('0').prop('disabled', false);
	 		$('.infant').css({'visibility':'visible'});

            break;
        case 2:
            //karma haveli
            $('#titlePromotionalLabel').css({'display':'none'});
			$('#titleCode').css({'display':'none', 'margin-top':'3px'});
			$('#textFieldCode').css({'display':'none'});
			
			$("#Rooms").val('0').prop('disabled', true); //make it zero and disabled
			$("#Adults").val('0').prop('disabled', true);
			$("#Children").val('0').prop('disabled', true);
			$("#Infant").val('0').prop('disabled', true);

			urlgo = 'https://secure.staah.com/common-cgi/properties/b2c/Booknow.pl?action=showpage&amp;MotelId=2190&amp;Ln=en&amp;cur=&amp;source=&amp;checkIn=&amp;checkOut=&amp;unk=2&amp;msg=';

			window.location.href = urlgo;

            break;
        case 3:
            //jimbaran
            $('#titlePromotionalLabel').css({'display':'none'});
			$('#titleCode').css({'display':'none', 'margin-top':'3px'});
			$('#textFieldCode').css({'display':'none'});
			$("#Infant").val('0').prop('disabled', true);
			$('.infant').css({'visibility':'hidden'});
            break;
        case 4:
            // kandara
            $('#titlePromotionalLabel').css({'display':'none'});
			$('#titleCode').css({'display':'none', 'margin-top':'3px'});
			$('#textFieldCode').css({'display':'none'});
			$("#Infant").val('0').prop('disabled', true);
			$('.infant').css({'visibility':'hidden'});

            break; 
        case 5:
            // rottnest
            $('#titlePromotionalLabel').css({'display':'none'});
			$('#titleCode').css({'display':'none', 'margin-top':'3px'});
			$('#textFieldCode').css({'display':'none'});
			$("#Infant").val('0').prop('disabled', true);
			$('.infant').css({'visibility':'hidden'});
            break;
        case 6:
            // Karma Carcassonne
            $( "#submitButton" ).prop( "disabled", true );
            alert('I\'m so sorry. Karma Carcassonne not available for booking yet.');
            break;
        case 7:
            // Karma Grove - India
            $('#titlePromotionalLabel').css({'display':'none'});
			$('#titleCode').css({'display':'none', 'margin-top':'3px'});
			$('#textFieldCode').css({'display':'none'});
			
			$("#Rooms").val('0').prop('disabled', true); //make it zero and disabled
			$("#Adults").val('0').prop('disabled', true);
			$("#Children").val('0').prop('disabled', true);
			$("#Infant").val('0').prop('disabled', true);

            var urlgo = 'https://secure.staah.com/common-cgi/properties/b2c/Booknow.pl?action=showpage&MotelId=1781&Ln=en&cur=&source=&checkIn=&checkOut=&unk=2&msg=';
            window.location.href = urlgo;

            break;
        case 8:
            // Karma Mayura
            // need date conversion
            //var startDateDisplay = bg_dteCheckIn;
            // format: 16+May+2016
            // format: 2016-05-16 (reverse)
            // need to change text Check-in to Date Form
            // check-out, room, adult, children, infant di disable
            
            $('#titlePromotionalLabel').css({'display':'none'});
			$('#titleCode').css({'display':'none', 'margin-top':'3px'});
			$('#textFieldCode').css({'display':'none'});

			//littlehotelierDate
			//littlehotelierDateReverse

			var urlgo = 'https://apac.littlehotelier.com/properties/mayurakarmadirect?utf8=%E2%9C%93&locale=en&button=&promotion_code=&currency=USD&start_date_display='+littlehotelierDate+'&start_date='+littlehotelierDateReverse+'';
            
            window.location.href = urlgo;

            //var urlgo = 'https://apac.littlehotelier.com/properties/mayurakarmadirect?utf8=%E2%9C%93&locale=en&button=&promotion_code='+bg_promotionCode+'&currency=USD&start_date_display=16+May+2016&start_date=2016-05-16';
            break;
        case 9:
            // Karma Reef
            // format: 16+May+2016
            // format: 2016-05-16 (reverse)
            // need to change text Check-in to Date Form
            // check-out, room, adult, children, infant di disable
            //var urlgo = 'https://apac.littlehotelier.com/properties/karma-reef?utf8=%E2%9C%93&locale=en&button=&promotion_code='+bg_promotionCode+'&currency=USD&start_date_display=17+May+2016&start_date=2016-05-17';

            $('#titlePromotionalLabel').css({'display':'none'});
			$('#titleCode').css({'display':'none', 'margin-top':'3px'});
			$('#textFieldCode').css({'display':'none'});

			var urlgo = 'https://apac.littlehotelier.com/properties/karma-reef?utf8=%E2%9C%93&locale=en&button=&promotion_code=&currency=USD&start_date_display='+littlehotelierDate+'&start_date='+littlehotelierDateReverse+'';

			window.location.href = urlgo;

            break;

        case 10:
            //Karma St Martin's - Isles of Scilly
            $('#titlePromotionalLabel').css({'display':'none'});
			$('#titleCode').css({'display':'none', 'margin-top':'3px'});
			$('#textFieldCode').css({'display':'none'});

            break;

        case 11:
            //Karma Royal Benaulim
            $( "#submitButton" ).prop( "disabled", true );
            alert('I\'m so sorry. Karma Royal Benaulim not available for booking yet.');
            break;

        case 12:
            //Karma Royal Candidasa
            $("#Rooms").val('0').prop('disabled', true); //make it zero and disabled
			$("#Adults").val('0').prop('disabled', true);
			$("#Children").val('0').prop('disabled', true);
			$("#Infant").val('0').prop('disabled', true);

            var urlgo = 'https://www.odysseypremier.com/content/last-minute?kg_back=http%3A%2F%2Fkarmagroup.com%2Ffind-destination%2Fkarma-royal%2Froyal-candidasa%23enquiry';
            window.location.href = urlgo;
            break;

        case 13:
            //Karma Royal Chiang Mai
            $("#Rooms").val('0').prop('disabled', true); //make it zero and disabled
			$("#Adults").val('0').prop('disabled', true);
			$("#Children").val('0').prop('disabled', true);
			$("#Infant").val('0').prop('disabled', true);

            var urlgo = 'https://www.odysseypremier.com/content/last-minute?kg_back=http%3A%2F%2Fkarmagroup.com%2Ffind-destination%2Fkarma-royal%2Froyal-chiang-mai%23enquiry';
            window.location.href = urlgo;
            break;
            
        case 14:
            //Karma Royal Haathi Mahal - Goa
            $("#Rooms").val('0').prop('disabled', true); //make it zero and disabled
			$("#Adults").val('0').prop('disabled', true);
			$("#Children").val('0').prop('disabled', true);
			$("#Infant").val('0').prop('disabled', true);

            var urlgo = 'https://secure.staah.com/common-cgi/properties/b2c/Booknow.pl?action=showpage&PropertyId=968&Ln=&cur=&source=&checkIn=&checkOut=&unk=2&msg=';
            window.location.href = urlgo;
            break;

        case 15:
            //Karma Royal Jimbaran - Bali
            $("#Rooms").val('0').prop('disabled', true); //make it zero and disabled
			$("#Adults").val('0').prop('disabled', true);
			$("#Children").val('0').prop('disabled', true);
			$("#Infant").val('0').prop('disabled', true);

            var urlgo = 'https://www.odysseypremier.com/content/last-minute?kg_back=http%3A%2F%2Fkarmagroup.com%2Ffind-destination%2Fkarma-royal%2Froyal-jimbaran%23enquiry';
            window.location.href = urlgo;
            break;

        case 16:
            //Karma Royal MonteRio
            $("#Rooms").val('0').prop('disabled', true); //make it zero and disabled
			$("#Adults").val('0').prop('disabled', true);
			$("#Children").val('0').prop('disabled', true);
			$("#Infant").val('0').prop('disabled', true);

            var urlgo = 'http://karmagroup.com/find-destination/karma-royal/royal-monterio';
            window.location.href = urlgo;
            break;
        
        case 17:
            //Karma Royal Palms
            $("#Rooms").val('0').prop('disabled', true); //make it zero and disabled
			$("#Adults").val('0').prop('disabled', true);
			$("#Children").val('0').prop('disabled', true);
			$("#Infant").val('0').prop('disabled', true);

            var urlgo = 'http://karmagroup.com/find-destination/karma-royal/royal-palms';
            window.location.href = urlgo;
            break;

        case 18:
            //Karma Royal Phuket
            $("#Rooms").val('0').prop('disabled', true); //make it zero and disabled
			$("#Adults").val('0').prop('disabled', true);
			$("#Children").val('0').prop('disabled', true);
			$("#Infant").val('0').prop('disabled', true);

            var urlgo = 'https://www.odysseypremier.com/content/last-minute?kg_back=http%3A%2F%2Fkarmagroup.com%2Ffind-destination%2Fkarma-royal%2Froyal-phuket%23enquiry';
            window.location.href = urlgo;
            break;

        case 19:
            //Karma Royal Sanur
            $("#Rooms").val('0').prop('disabled', true); //make it zero and disabled
			$("#Adults").val('0').prop('disabled', true);
			$("#Children").val('0').prop('disabled', true);
			$("#Infant").val('0').prop('disabled', true);

            var urlgo = 'https://www.odysseypremier.com/content/last-minute?kg_back=http%3A%2F%2Fkarmagroup.com%2Ffind-destination%2Fkarma-royal%2Froyal-sanur%23enquiry';
            window.location.href = urlgo;
            break;

        case 20:
            //Karma Royal Shimla
            $("#Rooms").val('0').prop('disabled', true); //make it zero and disabled
			$("#Adults").val('0').prop('disabled', true);
			$("#Children").val('0').prop('disabled', true);
			$("#Infant").val('0').prop('disabled', true);

            var urlgo = 'https://secure.staah.com/common-cgi/properties/b2c/Booknow.pl?action=showpage&MotelId=1998&Ln=en&cur=&source=&checkIn=&checkOut=&unk=2&msg=';
            window.location.href = urlgo;
            break;

        case 21:
            //Karma Royal Villea
            $("#Rooms").val('0').prop('disabled', true); //make it zero and disabled
			$("#Adults").val('0').prop('disabled', true);
			$("#Children").val('0').prop('disabled', true);
			$("#Infant").val('0').prop('disabled', true);

            var urlgo = 'http://karmagroup.com/find-destination/karma-royal/royal-villea';
            window.location.href = urlgo;
            break;

        case 22:
        	$("#Rooms").val('0').prop('disabled', true); //make it zero and disabled
			$("#Adults").val('0').prop('disabled', true);
			$("#Children").val('0').prop('disabled', true);
			$("#Infant").val('0').prop('disabled', true);

        	var urlgo = 'http://karmagroup.com/find-destination/karma-estates/le-preverger';
            window.location.href = urlgo;
        break;

        case 23:
        	$("#Rooms").val('0').prop('disabled', true); //make it zero and disabled
			$("#Adults").val('0').prop('disabled', true);
			$("#Children").val('0').prop('disabled', true);
			$("#Infant").val('0').prop('disabled', true);

        	var urlgo = 'http://karmagroup.com/find-destination/karma-estates/pelikanos';
            window.location.href = urlgo;
        break;

        default:
        	alert('Please open: karmagroup.com');      
            break;
        }
            
});


$('#promoCode').click(function() {
	$('#titlePromotionalLabel').css({'display':'block'});
	$('#titleCode').css({'display':'block', 'margin-top':'3px'});
	$('#textFieldCode').css({'display':'block'});
  
});


$(function(){

$('#titlePromotionalLabel').css({'display':'none'});
$('#titleCode').css({'display':'none', 'margin-top':'3px'});
$('#textFieldCode').css({'display':'none'});


var startDate = new Date(2016,5,24);
var endDate = new Date(2016,5,25);
var nowTemp = new Date();
var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

//$('#dp4').hide;
//$('#dp5').hide;

var checkin = $('#dp4').datepicker({
  onRender: function(date) {
    return date.valueOf() < now.valueOf() ? 'disabled' : '';
  }
}).on('changeDate', function(ev) {
  if (ev.date.valueOf() > checkout.date.valueOf()) {
    var newDate = new Date(ev.date)
    newDate.setDate(newDate.getDate() + 1);
    checkout.setValue(newDate);
  }
  else if (ev.date.valueOf() == checkout.date.valueOf()) {
  	var newDate = new Date(ev.date)
    newDate.setDate(newDate.getDate() + 1);
    checkout.setValue(newDate);
  }
  else if (ev.date.valueOf() < checkout.date.valueOf()) {
  	var newDate = new Date(ev.date)
    newDate.setDate(newDate.getDate());
    checkout.setValue(newDate);
  }

  $('#bookCheckIn').val($('#dp4').data('date'));
  $('#bookCheckInValue').val($('#dp4').data('date'));
  $('#bookCheckInImage').attr('src',$('#dp4').data('date').substring(0,2)+'.png');
  //bookCheckInImage
  //bookCheckOutImage

  checkin.hide();
  checkout.show();
  //$('#dp5')[0].focus();
}).data('datepicker');

var checkout = $('#dp5').datepicker({
  onRender: function(date) {
    return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
  }
}).on('changeDate', function(ev) {

  $('#bookCheckOut').val($('#dp5').data('date'));
  $('#bookCheckOutValue').val($('#dp5').data('date'));
  $('#bookCheckOutImage').attr('src',$('#dp5').data('date').substring(0,2)+'.png');

  checkout.hide();
  $('#Rooms')[0].focus();
}).data('datepicker');

});	//eof function

$("#Rooms").keypress(function(event) {
  return /\d/.test(String.fromCharCode(event.keyCode));
});

$("#Adults").keypress(function(event) {
  return /\d/.test(String.fromCharCode(event.keyCode));
});

$("#Children").keypress(function(event) {
  return /\d/.test(String.fromCharCode(event.keyCode));
});

$("#Infant").keypress(function(event) {
  return /\d/.test(String.fromCharCode(event.keyCode));
});

// trigger click when people click the textfield
$('#bookCheckIn').click(function() {
  $('#dp4')[0].click();
});

// trigger click when people click the textfield
$('#bookCheckOut').click(function() {
  $('#dp5')[0].click();
});

$('#bookCheckIn').hover(function() {
        $(this).css('cursor','pointer');
        $(this).css('cursor','hand');
});

$('#bookCheckOut').hover(function() {
        $(this).css('cursor','pointer');
        $(this).css('cursor','hand');
});

$('#karmaResort').hover(function() {
        $(this).css('cursor','pointer');
        $(this).css('cursor','hand');
});


</script>

 </body>
</html>