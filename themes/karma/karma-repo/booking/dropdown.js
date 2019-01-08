
var jDateNow = new Date(); 
var jDate = jDateNow.toString().replace(/\S+\s(\S+)\s(\d+)\s(\d+)\s.*/,'$2-$1-$3');
var arrJDate = jDate.split('-');
var curr_month = jDateNow.getMonth();
curr_month++;
var littlehotelierDate = arrJDate[0]+'+'+arrJDate[1]+'+'+arrJDate[2];
var littlehotelierDateReverse = arrJDate[2]+'-'+curr_month+'-'+arrJDate[0];

$(function(){

$('#titlePromotionalLabel').css({'display':'none'}); //hide
$('#titleCode').css({'display':'none', 'margin-top':'8px'});
$('#textFieldCode').css({'display':'none'});

var startDate = new Date(2016,5,24);
var endDate = new Date(2016,5,25);
var nowTemp = new Date();
var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);


var checkin = $('#dp4').BookingDatepicker({
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
  //$('#bookCheckInImage').attr('src','http://localhost/karmawp/wp-content/themes/karma/booking/'+$('#dp4').data('date').substring(0,2)+'.png');
  //$('#bookCheckInImage').attr('src','https://dev.karmagroup.com/karmawp/wp-content/themes/karma/booking/'+$('#dp4').data('date').substring(0,2)+'.png');
  $('#bookCheckInImage').attr('src','https://karmagroup.com/wp-content/themes/karma/booking/'+$('#dp4').data('date').substring(0,2)+'.png');
  checkin.hide();
  checkout.show();

}).data('BookingDatepicker');

var checkout = $('#dp5').BookingDatepicker({
  onRender: function(date) {
    return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
  }
}).on('changeDate', function(ev) {

  $('#bookCheckOut').val($('#dp5').data('date'));
  $('#bookCheckOutValue').val($('#dp5').data('date'));
  //$('#bookCheckOutImage').attr('src','http://localhost/karmawp/wp-content/themes/karma/booking/'+$('#dp5').data('date').substring(0,2)+'.png');
  //$('#bookCheckOutImage').attr('src','https://dev.karmagroup.com/karmawp/wp-content/themes/karma/booking/'+$('#dp5').data('date').substring(0,2)+'.png');
$('#bookCheckOutImage').attr('src','https://karmagroup.com/wp-content/themes/karma/booking/'+$('#dp5').data('date').substring(0,2)+'.png');
  checkout.hide();
  $('#Rooms')[0].focus();
}).data('BookingDatepicker');

}); //eof function

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

$("#karmaResort").change(function () {
        
       var ddk = parseInt(this.value);
        
        switch(ddk){
        case 1:
            //karma bavaria
            $('#titlePromotionalLabel').css({'display':'none'});
            $('#titleCode').css({'display':'none', 'margin-top':'8px'});
            $('#textFieldCode').css({'display':'none'}); 
            $("#Infant").val('0').prop('disabled', false);
            $('.infant').css({'visibility':'visible'});
            $('#dp4')[0].click();
            
            break;
        case 2:
            //karma haveli
            $('#titlePromotionalLabel').css({'display':'none'});
            $('#titleCode').css({'display':'none', 'margin-top':'8px'});
            $('#textFieldCode').css({'display':'none'});
            
            $("#Rooms").val('0').prop('disabled', true); //make it zero and disabled
            $("#Adults").val('0').prop('disabled', true);
            $("#Children").val('0').prop('disabled', true);
            $("#Infant").val('0').prop('disabled', true);
            //ga('send','event','Link','Submit','Book Online',1);
            urlgo = 'https://secure.staah.com/common-cgi/properties/b2c/Booknow.pl?action=showpage&amp;MotelId=2190&amp;Ln=en&amp;cur=&amp;source=&amp;checkIn=&amp;checkOut=&amp;unk=2&amp;msg=';

            window.location.href = urlgo;

            break;
        case 3:
            //jimbaran
            $('#titlePromotionalLabel').css({'display':'none'});
            $('#titleCode').css({'display':'none', 'margin-top':'8px'});
            $('#textFieldCode').css({'display':'none'});
            $("#Infant").val('0').prop('disabled', true);
            $('.infant').css({'visibility':'hidden'});
            $('#dp4')[0].click();
            break;
        case 4:
            // kandara
            $('#titlePromotionalLabel').css({'display':'none'});
            $('#titleCode').css({'display':'none', 'margin-top':'8px'});
            $('#textFieldCode').css({'display':'none'});
            $("#Infant").val('0').prop('disabled', true);
            $('.infant').css({'visibility':'hidden'});
            $('#dp4')[0].click();
            break; 
        case 5:
            // rottnest
            $('#titlePromotionalLabel').css({'display':'none'});
            $('#titleCode').css({'display':'none', 'margin-top':'8px'});
            $('#textFieldCode').css({'display':'none'});
            $("#Infant").val('0').prop('disabled', true);
            $('.infant').css({'visibility':'hidden'});
            $('#dp4')[0].click();
            break;
        case 6:
            // Karma Carcassonne
            $( "#submitButton" ).prop( "disabled", true );
            alert('I\'m so sorry. Karma Carcassonne not available for booking yet.');
            break;
        case 7:
            // Karma Grove - India
            $('#titlePromotionalLabel').css({'display':'none'});
            $('#titleCode').css({'display':'none', 'margin-top':'8px'});
            $('#textFieldCode').css({'display':'none'});
            
            $("#Rooms").val('0').prop('disabled', true); //make it zero and disabled
            $("#Adults").val('0').prop('disabled', true);
            $("#Children").val('0').prop('disabled', true);
            $("#Infant").val('0').prop('disabled', true);
            //ga('send','event','Link','Submit','Book Online',1);
            var urlgo = 'https://secure.staah.com/common-cgi/properties/b2c/Booknow.pl?action=showpage&MotelId=1781&Ln=en&cur=&source=&checkIn=&checkOut=&unk=2&msg=';
            window.location.href = urlgo;

            break;
        case 8:
            
            $('#titlePromotionalLabel').css({'display':'none'});
            $('#titleCode').css({'display':'none', 'margin-top':'8px'});
            $('#textFieldCode').css({'display':'none'});
            // ga('send','event','Link','Submit','Book Online',1);
            var urlgo = 'https://apac.littlehotelier.com/properties/mayurakarmadirect?utf8=%E2%9C%93&locale=en&button=&promotion_code=&currency=USD&start_date_display='+littlehotelierDate+'&start_date='+littlehotelierDateReverse+'';
            window.location.href = urlgo;
            break;
        case 9:
            $('#titlePromotionalLabel').css({'display':'none'});
            $('#titleCode').css({'display':'none', 'margin-top':'8px'});
            $('#textFieldCode').css({'display':'none'});
            // ga('send','event','Link','Submit','Book Online',1);
            var urlgo = 'https://apac.littlehotelier.com/properties/karma-reef?utf8=%E2%9C%93&locale=en&button=&promotion_code=&currency=USD&start_date_display='+littlehotelierDate+'&start_date='+littlehotelierDateReverse+'';

            window.location.href = urlgo;

            break;

        case 10:
            $('#titlePromotionalLabel').css({'display':'none'});
            $('#titleCode').css({'display':'none', 'margin-top':'8px'});
            $('#textFieldCode').css({'display':'none'});
            $('#dp4')[0].click();

            break;

        case 11:
            $( "#submitButton" ).prop( "disabled", true );
            alert('I\'m so sorry. Karma Royal Benaulim not available for booking yet.');
            break;

        case 12:
            $("#Rooms").val('0').prop('disabled', true); 
            $("#Adults").val('0').prop('disabled', true);
            $("#Children").val('0').prop('disabled', true);
            $("#Infant").val('0').prop('disabled', true);
            // ga('send','event','Link','Submit','Book Online',1);
            var urlgo = 'https://www.odysseypremier.com/content/last-minute?kg_back=http%3A%2F%2Fkarmagroup.com%2Ffind-destination%2Fkarma-royal%2Froyal-candidasa%23enquiry';
            window.location.href = urlgo;
            break;

        case 13:
            $("#Rooms").val('0').prop('disabled', true);
            $("#Adults").val('0').prop('disabled', true);
            $("#Children").val('0').prop('disabled', true);
            $("#Infant").val('0').prop('disabled', true);
            // ga('send','event','Link','Submit','Book Online',1);
            var urlgo = 'https://www.odysseypremier.com/content/last-minute?kg_back=http%3A%2F%2Fkarmagroup.com%2Ffind-destination%2Fkarma-royal%2Froyal-chiang-mai%23enquiry';
            window.location.href = urlgo;
            break;
            
        case 14:
            $("#Rooms").val('0').prop('disabled', true);
            $("#Adults").val('0').prop('disabled', true);
            $("#Children").val('0').prop('disabled', true);
            $("#Infant").val('0').prop('disabled', true);
            // ga('send','event','Link','Submit','Book Online',1);
            var urlgo = 'https://secure.staah.com/common-cgi/properties/b2c/Booknow.pl?action=showpage&PropertyId=968&Ln=&cur=&source=&checkIn=&checkOut=&unk=2&msg=';
            window.location.href = urlgo;
            break;

        case 15:
            
            $("#Rooms").val('0').prop('disabled', true);
            $("#Adults").val('0').prop('disabled', true);
            $("#Children").val('0').prop('disabled', true);
            $("#Infant").val('0').prop('disabled', true);
            // ga('send','event','Link','Submit','Book Online',1);
            var urlgo = 'https://www.odysseypremier.com/content/last-minute?kg_back=http%3A%2F%2Fkarmagroup.com%2Ffind-destination%2Fkarma-royal%2Froyal-jimbaran%23enquiry';
            window.location.href = urlgo;
            break;

        case 16:
            
            $("#Rooms").val('0').prop('disabled', true);
            $("#Adults").val('0').prop('disabled', true);
            $("#Children").val('0').prop('disabled', true);
            $("#Infant").val('0').prop('disabled', true);
            // ga('send','event','Link','Submit','Book Online',1);
            var urlgo = 'http://karmagroup.com/find-destination/karma-royal/royal-monterio';
            window.location.href = urlgo;
            break;
        
        case 17:
            $("#Rooms").val('0').prop('disabled', true);
            $("#Adults").val('0').prop('disabled', true);
            $("#Children").val('0').prop('disabled', true);
            $("#Infant").val('0').prop('disabled', true);
            // ga('send','event','Link','Submit','Book Online',1);
            var urlgo = 'http://karmagroup.com/find-destination/karma-royal/royal-palms';
            window.location.href = urlgo;
            break;

        case 18:
            $("#Rooms").val('0').prop('disabled', true);
            $("#Adults").val('0').prop('disabled', true);
            $("#Children").val('0').prop('disabled', true);
            $("#Infant").val('0').prop('disabled', true);
            // ga('send','event','Link','Submit','Book Online',1);
            var urlgo = 'https://www.odysseypremier.com/content/last-minute?kg_back=http%3A%2F%2Fkarmagroup.com%2Ffind-destination%2Fkarma-royal%2Froyal-phuket%23enquiry';
            window.location.href = urlgo;
            break;

        case 19:
            $("#Rooms").val('0').prop('disabled', true); 
            $("#Adults").val('0').prop('disabled', true);
            $("#Children").val('0').prop('disabled', true);
            $("#Infant").val('0').prop('disabled', true);
            // ga('send','event','Link','Submit','Book Online',1);
            var urlgo = 'https://www.odysseypremier.com/content/last-minute?kg_back=http%3A%2F%2Fkarmagroup.com%2Ffind-destination%2Fkarma-royal%2Froyal-sanur%23enquiry';
            window.location.href = urlgo;
            break;

        case 20:
            $("#Rooms").val('0').prop('disabled', true); 
            $("#Adults").val('0').prop('disabled', true);
            $("#Children").val('0').prop('disabled', true);
            $("#Infant").val('0').prop('disabled', true);
            // ga('send','event','Link','Submit','Book Online',1);
            var urlgo = 'https://secure.staah.com/common-cgi/properties/b2c/Booknow.pl?action=showpage&MotelId=1998&Ln=en&cur=&source=&checkIn=&checkOut=&unk=2&msg=';
            window.location.href = urlgo;
            break;

        case 21:
            $("#Rooms").val('0').prop('disabled', true);
            $("#Adults").val('0').prop('disabled', true);
            $("#Children").val('0').prop('disabled', true);
            $("#Infant").val('0').prop('disabled', true);
            // ga('send','event','Link','Submit','Book Online',1);
            var urlgo = 'http://karmagroup.com/find-destination/karma-royal/royal-villea'; 
            window.location.href = urlgo;
            break;

        case 22:
            $("#Rooms").val('0').prop('disabled', true); 
            $("#Adults").val('0').prop('disabled', true);
            $("#Children").val('0').prop('disabled', true);
            $("#Infant").val('0').prop('disabled', true);
            // ga('send','event','Link','Submit','Book Online',1);
            var urlgo = 'http://karmagroup.com/find-destination/karma-estates/le-preverger';
            window.location.href = urlgo;
        break;

        case 23:
            $("#Rooms").val('0').prop('disabled', true);
            $("#Adults").val('0').prop('disabled', true);
            $("#Children").val('0').prop('disabled', true);
            $("#Infant").val('0').prop('disabled', true);
             //ga('send','event','Link','Submit','Book Online',1);
            var urlgo = 'http://karmagroup.com/find-destination/karma-estates/pelikanos';
            window.location.href = urlgo;
        break;

        default:
            alert('Please open: karmagroup.com');      
            break;
        }
            
});


$('#promoCode').click(function() {
    $('#titlePromotionalLabel').css({'display':'none'});
    $('#titleCode').css({'display':'none', 'margin-top':'8px'});
    $('#textFieldCode').css({'display':'none'});
  
});