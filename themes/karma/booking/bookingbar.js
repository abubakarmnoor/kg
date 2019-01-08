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
$('#bookCheckOutImage').attr('src','https://karmagroup.com/wp-content/themes/karma/booking/'+$('#dp5').data('date').substring(0,2)+'.png');
  checkout.hide();
  $('#Rooms')[0].focus();
}).data('BookingDatepicker');

$('#bookCheckOut').click(function() {
    $('#dp5')[0].click();
});

$('#bookCheckIn').click(function() {
    $('#dp4')[0].click();
});

$('#karmaResort').change(function (e) {
    $("#submitButton").prop("disabled", !1);
    $('.bookingMask .formselect').removeClass('red')
});
$('#submitButton').click(function () {
    var jDateNow = new Date();
    var jDate = jDateNow.toString().replace(/\S+\s(\S+)\s(\d+)\s(\d+)\s.*/, '$2-$1-$3');
    var arrJDate = jDate.split('-');
    var curr_month = jDateNow.getMonth();
    curr_month++;
    var littlehotelierDate = arrJDate[0] + '+' + arrJDate[1] + '+' + arrJDate[2];
    var littlehotelierDateReverse = arrJDate[2] + '-' + curr_month + '-' + arrJDate[0];
    var bg_dteCheckIn = $('#bookCheckInValue').val();
    var bg_dteCheckOut = $('#bookCheckOutValue').val();
    var bg_source = $('#source').val();
    var bg_bc = $('#bc').val();
    var bg_bookCheckIn = $('#bookCheckIn').val();
    var bg_bookCheckOut = $('#bookCheckOut').val();
    var bg_Rooms = $('#Rooms').val();
    var bg_Adults = $('#Adults').val();
    var bg_Children = $('#Children').val();
    var bg_Infant = $('#Infant').val();
    var bg_promotionCode = $('#promotionCode').val();
    var karmaResort = $('#karmaResort').val();
    var is_mobile = $('#is_mobile').val();
    var date_in_split = bg_dteCheckIn.split('/');
    var date_out_split = bg_dteCheckOut.split('/');
    ymd_in = date_in_split[2] + '-' + date_in_split[1] + '-' + date_in_split[0];
    ymd_out = date_out_split[2] + '-' + date_out_split[1] + '-' + date_out_split[0];
    var start = new Date(ymd_in),
        end = new Date(ymd_out),
        diff = new Date(end - start),
        days = diff / 1000 / 60 / 60 / 24;
    var karmaResortVal = parseInt(karmaResort);
    switch (karmaResortVal) {
        case 1:
            var arrTheBookingButtonCheckIn = bg_dteCheckIn.split('/');
            var arrTheBookingButtonCheckOut = bg_dteCheckOut.split('/');
            bg_dteCheckIn = arrTheBookingButtonCheckIn[2] + '-' + arrTheBookingButtonCheckIn[1] + '-' + arrTheBookingButtonCheckIn[0];
            bg_dteCheckOut = arrTheBookingButtonCheckOut[2] + '-' + arrTheBookingButtonCheckOut[1] + '-' + arrTheBookingButtonCheckOut[0];
            var totalChildren = parseInt(bg_Children) + parseInt(bg_Infant);
            var urlgo = "https://karma.dbm.guestline.net/availability?hotel=KARMABAV&arrival=" + bg_dteCheckIn + "&departure=" + bg_dteCheckOut + "&adults=" + bg_Adults + "&children=" + totalChildren;            
            window.location.href = urlgo;
            break;
        case 3:
            var arrTheBookingButtonCheckIn = bg_dteCheckIn.split('/');
            var arrTheBookingButtonCheckOut = bg_dteCheckOut.split('/');
            bg_dteCheckIn = arrTheBookingButtonCheckIn[2] + '-' + arrTheBookingButtonCheckIn[1] + '-' + arrTheBookingButtonCheckIn[0];
            bg_dteCheckOut = arrTheBookingButtonCheckOut[2] + '-' + arrTheBookingButtonCheckOut[1] + '-' + arrTheBookingButtonCheckOut[0];
            var totalChildren = parseInt(bg_Children) + parseInt(bg_Infant);
            var urlgo = "https://karma.dbm.guestline.net/availability?hotel=KARMAJIMB&arrival=" + bg_dteCheckIn + "&departure=" + bg_dteCheckOut + "&adults=" + bg_Adults + "&children=" + totalChildren;
            window.location.href = urlgo;
            break;
        case 4:
            var arrTheBookingButtonCheckIn = bg_dteCheckIn.split('/');
            var arrTheBookingButtonCheckOut = bg_dteCheckOut.split('/');
            bg_dteCheckIn = arrTheBookingButtonCheckIn[2] + '-' + arrTheBookingButtonCheckIn[1] + '-' + arrTheBookingButtonCheckIn[0];
            bg_dteCheckOut = arrTheBookingButtonCheckOut[2] + '-' + arrTheBookingButtonCheckOut[1] + '-' + arrTheBookingButtonCheckOut[0];
            var totalChildren = parseInt(bg_Children) + parseInt(bg_Infant);
            var urlgo = "https://karma.dbm.guestline.net/availability?hotel=KARMAKAND&arrival=" + bg_dteCheckIn + "&departure=" + bg_dteCheckOut + "&adults=" + bg_Adults + "&children=" + totalChildren;
            window.location.href = urlgo;
            break;
        case 5:
            var arrTheBookingButtonCheckIn = bg_dteCheckIn.split('/');
            var arrTheBookingButtonCheckOut = bg_dteCheckOut.split('/');
            bg_dteCheckIn = arrTheBookingButtonCheckIn[2] + '-' + arrTheBookingButtonCheckIn[1] + '-' + arrTheBookingButtonCheckIn[0];
            bg_dteCheckOut = arrTheBookingButtonCheckOut[2] + '-' + arrTheBookingButtonCheckOut[1] + '-' + arrTheBookingButtonCheckOut[0];
            var totalChildren = parseInt(bg_Children) + parseInt(bg_Infant);
            var urlgo = "https://karma.dbm.guestline.net/availability?hotel=KARMAROT&arrival=" + bg_dteCheckIn + "&departure=" + bg_dteCheckOut + "&adults=" + bg_Adults + "&children=" + totalChildren;            
            window.location.href = urlgo;
            break;
        case 6:
            $("#submitButton").prop("disabled", !0);
            alert('I\'m so sorry. Karma Carcassonne is not available for booking yet.');
            break;
        case 7:
            var urlgo = 'https://secure.staah.com/common-cgi/properties/b2c/Booknow.pl?action=showpage&MotelId=1781&Ln=en&cur=&source=&checkIn=&checkOut=&unk=2&msg=';
            if ($(window).width() > 768) {
                window.location.href = urlgo;
            } else { window.location.href = urlgo }
            break;  
        case 9:
            var arrTheBookingButtonCheckIn = bg_dteCheckIn.split('/');
            var arrTheBookingButtonCheckOut = bg_dteCheckOut.split('/');
            bg_dteCheckIn = arrTheBookingButtonCheckIn[2] + '-' + arrTheBookingButtonCheckIn[1] + '-' + arrTheBookingButtonCheckIn[0];
            bg_dteCheckOut = arrTheBookingButtonCheckOut[2] + '-' + arrTheBookingButtonCheckOut[1] + '-' + arrTheBookingButtonCheckOut[0];
            if (is_mobile == 1) { var urlgo = 'https://apac.littlehotelier.com/properties/karma-reef/available_rooms?utf8=%E2%9C%93&locale=en&currency=USD&check_in_date=' + ymd_in + '&number_of_nights=' + days + '&number_occupants=&promotion_code=&button=' } else { var urlgo = 'https://apac.littlehotelier.com/properties/karma-reef?utf8=%E2%9C%93&locale=en&button=&promotion_code=&currency=USD&start_date_display=' + bg_dteCheckIn + '&start_date=' + bg_dteCheckIn + '' }
            var trackers, linker, url;
            var destinationUrl = urlgo;
            if (typeof ga !== 'undefined' && typeof ga.getAll === 'function') {
                trackers = ga.getAll(); if (trackers.length) {
                    linker = new window.gaplugins.Linker(trackers[0]);
                    destinationUrl = linker.decorate(destinationUrl)
                }
            }
            if ($(window).width() > 768) {
                window.location.href = destinationUrl;
            } else { window.location.href = destinationUrl; }
            break;
        case 10:
            var arrTheBookingButtonCheckIn = bg_dteCheckIn.split('/');
            var arrTheBookingButtonCheckOut = bg_dteCheckOut.split('/');
            bg_dteCheckIn = arrTheBookingButtonCheckIn[2] + '-' + arrTheBookingButtonCheckIn[1] + '-' + arrTheBookingButtonCheckIn[0];
            bg_dteCheckOut = arrTheBookingButtonCheckOut[2] + '-' + arrTheBookingButtonCheckOut[1] + '-' + arrTheBookingButtonCheckOut[0];
            var totalChildren = parseInt(bg_Children) + parseInt(bg_Infant);
            var urlgo = "https://karma.dbm.guestline.net/availability?hotel=KARMASTM&arrival=" + bg_dteCheckIn + "&departure=" + bg_dteCheckOut + "&adults=" + bg_Adults + "&children=" + totalChildren;  
            window.location.href = urlgo;
            break;
        case 11:
            $("#submitButton").prop("disabled", !0);
            alert('I\'m so sorry. Karma Royal Benaulim is not available for booking yet.');
            break;
        case 12:
            var urlgo = 'https://www.odysseypremier.com/content/last-minute?kg_back=http%3A%2F%2Fkarmagroup.com%2Ffind-destination%2Fkarma-royal%2Froyal-candidasa%23enquiry';
            if ($(window).width() > 768) {
                window.location.href = urlgo;
            } else { window.location.href = urlgo; }
            break;
        case 13:
            var urlgo = 'https://www.odysseypremier.com/content/last-minute?kg_back=http%3A%2F%2Fkarmagroup.com%2Ffind-destination%2Fkarma-royal%2Froyal-chiang-mai%23enquiry';
            if ($(window).width() > 768) {
                window.location.href = urlgo;
            } else { window.location.href = urlgo; }
            break;
        case 14:
            var arrTheBookingButtonCheckIn = bg_dteCheckIn.split('/');
            var arrTheBookingButtonCheckOut = bg_dteCheckOut.split('/');
            bg_dteCheckIn = arrTheBookingButtonCheckIn[2] + '-' + arrTheBookingButtonCheckIn[1] + '-' + arrTheBookingButtonCheckIn[0];
            bg_dteCheckOut = arrTheBookingButtonCheckOut[2] + '-' + arrTheBookingButtonCheckOut[1] + '-' + arrTheBookingButtonCheckOut[0];
            var urlgo = 'https://secure.staah.com/common-cgi/properties/b2c/Booknow.pl?action=showpage&PropertyId=968&Ln=&cur=&source=&checkIn=' + bg_dteCheckIn + '&checkOut' + bg_dteCheckOut + '=&unk=2&msg=';
            if ($(window).width() > 768) {
                window.location.href = urlgo;
            } else { window.location.href = urlgo; }
            break;
        case 15:
            var urlgo = 'https://www.odysseypremier.com/content/last-minute?kg_back=http%3A%2F%2Fkarmagroup.com%2Ffind-destination%2Fkarma-royal%2Froyal-jimbaran%23enquiry';
            if ($(window).width() > 768) {
                window.location.href = urlgo;
            } else { window.location.href = urlgo; }
            break;
        case 16:
            var urlgo = 'http://karmagroup.com/find-destination/karma-royal/royal-monterio';
            if ($(window).width() > 768) {
                window.location.href = urlgo;
            } else { window.location.href = urlgo; }
            break;
        case 17:
            var urlgo = 'http://karmagroup.com/find-destination/karma-royal/royal-palms';
            if ($(window).width() > 768) {
                window.location.href = urlgo;
            } else { window.location.href = urlgo; }
            break;
        case 18:
            var urlgo = 'https://www.odysseypremier.com/content/last-minute?kg_back=http%3A%2F%2Fkarmagroup.com%2Ffind-destination%2Fkarma-royal%2Froyal-phuket%23enquiry';
            if ($(window).width() > 768) {
                var redirectWindow = window.open(urlgo, '_blank');
                $.ajax({ type: 'POST', url: '/echo/json/', success: function (data) { redirectWindow.location } })
            } else { window.location.href = urlgo }
            break;
        case 19:
            var urlgo = 'https://www.odysseypremier.com/content/last-minute?kg_back=http%3A%2F%2Fkarmagroup.com%2Ffind-destination%2Fkarma-royal%2Froyal-sanur%23enquiry';
            if ($(window).width() > 768) {
                var redirectWindow = window.open(urlgo, '_blank');
                $.ajax({ type: 'POST', url: '/echo/json/', success: function (data) { redirectWindow.location } })
            } else { window.location.href = urlgo }
            break;
        case 20:
            var urlgo = 'https://secure.staah.com/common-cgi/properties/b2c/Booknow.pl?action=showpage&MotelId=1998&Ln=en&cur=&source=&checkIn=&checkOut=&unk=2&msg=';
            if ($(window).width() > 768) {
                window.location.href = urlgo;
            } else { window.location.href = urlgo; }
            break;
        case 21:
            var urlgo = 'http://karmagroup.com/find-destination/karma-royal/royal-villea';
            if ($(window).width() > 768) {
                window.location.href = urlgo;
            } else { window.location.href = urlgo; }
            break;
        case 22:
            var urlgo = 'http://karmagroup.com/find-destination/karma-estates/le-preverger';
            if ($(window).width() > 768) {
                window.location.href = urlgo;
            } else { window.location.href = urlgo; }
            break;
        case 23:
            var urlgo = 'http://karmagroup.com/find-destination/karma-estates/pelikanos';
            if ($(window).width() > 768) {
                window.location.href = urlgo;
            } else { window.location.href = urlgo; }
            break;
        case 5825:
            if ($(window).width() > 768) {
                var urlgo = 'https://karmagroup.com/booking-sanctum/?arrival=' + bg_bookCheckIn + '&departure=' + bg_bookCheckOut + '&numberOfPersons=' + bg_Adults; window.location.href = urlgo;
            } else {
                var roomlynx_html = '<p>&nbsp;</p><p align="center">please waiting...</p><form id="roomlynx" method="post" action="https://uk2.roomlynx.net/rezrooms2/loadOBMApplication.action?siteId=SANCSOHO&chainAction=newAvailabilitySearch&request_locale=en"><input name="arrival" value="' + bg_bookCheckIn + '" type="hidden"><input name="departure" value="' + bg_bookCheckOut + '" type="hidden"><input name="numberOfPersons" value="' + bg_Adults + '" type="hidden"></form>';
                $('body').html(roomlynx_html);
                $('form#roomlynx').submit(); return !1
            }
            break;
        case 8109:
            var oneDay = 24 * 60 * 60 * 1000;
            var arrival = bg_bookCheckIn.split('/');
            var departure = bg_bookCheckOut.split('/');
            var firstDate = new Date(arrival[2], arrival[1], arrival[0]);
            var secondDate = new Date(departure[2], departure[1], departure[0]);
            var nights = Math.round(Math.abs((firstDate.getTime() - secondDate.getTime()) / (oneDay)));
            var totalChildren = parseInt($('#Children').val()) + parseInt($('#Infant').val());
            url = "https://uk2.roomlynx.net/rezrooms2/loadOBMApplication.action?siteId=SANCGREE&chainAction=newAvailabilitySearch&request_locale=en&arrival=" + bg_bookCheckIn + "&numberOfNights=" + nights + "&numberOfPersons=" + bg_Adults + "&numberOfChildren=" + totalChildren + "&offerCode=";
            window.open(url, '_blank');
            break;
                case 11357:
            var oneDay = 24 * 60 * 60 * 1000;
            var arrival = bg_bookCheckIn.split('/');
            var departure = bg_bookCheckOut.split('/');
            var arrivalx = arrival[2]+'-'+arrival[1]+'-'+arrival[0];
            var departurex = departure[2]+'-'+departure[1]+'-'+departure[0];

            var firstDate = new Date(arrival[2], arrival[1], arrival[0]);
            var secondDate = new Date(departure[2], departure[1], departure[0]);
            var nights = Math.round(Math.abs((firstDate.getTime() - secondDate.getTime()) / (oneDay)));
            var totalChildren = parseInt($('#Children').val()) + parseInt($('#Infant').val());
            var url = '';
            if ($(window).width() > 768) { url = "https://karma.dbm.guestline.net/availability?hotel=KARMANORM&arrival=" + arrivalx + "&departure=" + departurex + "&adults=" + bg_Adults + "&children=" + totalChildren + "&promoCode=" } else { url = "https://karma.dbm.guestline.net/availability?hotel=KARMANORM&arrival=" + arrivalx + "&departure=" + departurex + "&adults=" + bg_Adults + "&children=" + totalChildren + "&promoCode=" }
            window.location.href = url;
            break;
        case 11322:
            var oneDay = 24 * 60 * 60 * 1000;
            var arrival = bg_bookCheckIn.split('/');
            var departure = bg_bookCheckOut.split('/');
            var arrivalx = arrival[2]+'-'+arrival[1]+'-'+arrival[0];
            var departurex = departure[2]+'-'+departure[1]+'-'+departure[0];

            var firstDate = new Date(arrival[2], arrival[1], arrival[0]);
            var secondDate = new Date(departure[2], departure[1], departure[0]);
            var nights = Math.round(Math.abs((firstDate.getTime() - secondDate.getTime()) / (oneDay)));
            var totalChildren = parseInt($('#Children').val()) + parseInt($('#Infant').val());
            var url = '';
            if ($(window).width() > 768) { url = "https://karma.dbm.guestline.net/availability?hotel=KARMANORM&arrival=" + arrivalx + "&departure=" + departurex + "&adults=" + bg_Adults + "&children=" + totalChildren + "&promoCode=" } else { url = "https://karma.dbm.guestline.net/availability?hotel=KARMANORM&arrival=" + arrivalx + "&departure=" + departurex + "&adults=" + bg_Adults + "&children=" + totalChildren + "&promoCode=" }
            window.location.href = url;
            break;
        default:
            $('.bookingMask .formselect').addClass('red');
            break
    }
})

