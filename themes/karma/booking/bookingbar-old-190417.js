$('#karmaResort').change(function(e){ 
    $( "#submitButton" ).prop( "disabled", false );
    $('.bookingMask .formselect').removeClass('red');
}); 

$('#submitButton').click( function() {

var jDateNow = new Date(); 
var jDate = jDateNow.toString().replace(/\S+\s(\S+)\s(\d+)\s(\d+)\s.*/,'$2-$1-$3');
var arrJDate = jDate.split('-');
var curr_month = jDateNow.getMonth();
curr_month++;
var littlehotelierDate = arrJDate[0]+'+'+arrJDate[1]+'+'+arrJDate[2];
var littlehotelierDateReverse = arrJDate[2]+'-'+curr_month+'-'+arrJDate[0];     

var bg_dteCheckIn    = $('#bookCheckInValue').val();
var bg_dteCheckOut   = $('#bookCheckOutValue').val();

var bg_source        = $('#source').val();
var bg_bc            = $('#bc').val();
var bg_bookCheckIn   = $('#bookCheckIn').val();
var bg_bookCheckOut  = $('#bookCheckOut').val();
var bg_Rooms         = $('#Rooms').val();
var bg_Adults        = $('#Adults').val();
var bg_Children      = $('#Children').val();
var bg_Infant        = $('#Infant').val();
var bg_promotionCode = $('#promotionCode').val();
var karmaResort      = $('#karmaResort').val();
var is_mobile        = $('#is_mobile').val();

//////////////////////
var date_in_split = bg_dteCheckIn.split('/');
var date_out_split = bg_dteCheckOut.split('/');
ymd_in = date_in_split[2]+'-'+date_in_split[1]+'-'+date_in_split[0];
ymd_out = date_out_split[2]+'-'+date_out_split[1]+'-'+date_out_split[0];

var start = new Date(ymd_in),
end   = new Date(ymd_out),
diff  = new Date(end - start),
days  = diff/1000/60/60/24;
//////////////////////    

var karmaResortVal = parseInt(karmaResort);

switch(karmaResortVal){

        case 1:

            var arrTheBookingButtonCheckIn = bg_dteCheckIn.split('/');
            var arrTheBookingButtonCheckOut = bg_dteCheckOut.split('/');
            bg_dteCheckIn = arrTheBookingButtonCheckIn[0]+'-'+arrTheBookingButtonCheckIn[1]+'-'+arrTheBookingButtonCheckIn[2];
            bg_dteCheckOut = arrTheBookingButtonCheckOut[0]+'-'+arrTheBookingButtonCheckOut[1]+'-'+arrTheBookingButtonCheckOut[2];
            var urlgo = 'https://www.thebookingbutton.co.uk/properties/karmabavaria?check_in_date='+bg_dteCheckIn+'&check_out_date='+bg_dteCheckOut+'&number_adults='+bg_Adults+'&number_children='+bg_Children+'&number_infants='+bg_Infant;

             var redirectWindow = window.open(urlgo, '_blank');
                $.ajax({
                    type: 'POST',
                    url: '/echo/json/',
                    success: function (data) {
                        redirectWindow.location;
                    }
                });
            break;
        case 2:
            var urlgo = 'https://secure.staah.com/common-cgi/properties/b2c/Booknow.pl?action=showpage&amp;MotelId=2190&amp;Ln=en&amp;cur=&amp;source=&amp;checkIn=&amp;checkOut=&amp;unk=2&amp;msg=';

             var redirectWindow = window.open(urlgo, '_blank');
                $.ajax({
                    type: 'POST',
                    url: '/echo/json/',
                    success: function (data) {
                        redirectWindow.location;
                    }
                });
            break;
        case 3: 
            var arrTheBookingButtonCheckIn = bg_dteCheckIn.split('/');
            var arrTheBookingButtonCheckOut = bg_dteCheckOut.split('/');
            bg_dteCheckIn = arrTheBookingButtonCheckIn[0]+'-'+arrTheBookingButtonCheckIn[1]+'-'+arrTheBookingButtonCheckIn[2];
            bg_dteCheckOut = arrTheBookingButtonCheckOut[0]+'-'+arrTheBookingButtonCheckOut[1]+'-'+arrTheBookingButtonCheckOut[2];
            var urlgo = 'https://www.thebookingbutton.com.au/karmagroup/properties/kjimbarandirect?check_in_date='+bg_dteCheckIn+'&check_out_date='+bg_dteCheckOut+'&number_adults='+bg_Adults+'&number_children='+bg_Children;


             var redirectWindow = window.open(urlgo, '_blank');
                $.ajax({
                    type: 'POST',
                    url: '/echo/json/',
                    success: function (data) {
                        redirectWindow.location;
                    }
                });
            break;
        case 4:
            var arrTheBookingButtonCheckIn = bg_dteCheckIn.split('/');
            var arrTheBookingButtonCheckOut = bg_dteCheckOut.split('/');
            bg_dteCheckIn = arrTheBookingButtonCheckIn[0]+'-'+arrTheBookingButtonCheckIn[1]+'-'+arrTheBookingButtonCheckIn[2];
            bg_dteCheckOut = arrTheBookingButtonCheckOut[0]+'-'+arrTheBookingButtonCheckOut[1]+'-'+arrTheBookingButtonCheckOut[2];
            var urlgo = 'https://www.thebookingbutton.com.au/karmagroup/properties/karmakandaradirect?check_in_date='+bg_dteCheckIn+'&check_out_date='+bg_dteCheckOut+'&number_adults='+bg_Adults+'&number_children='+bg_Children;

             var redirectWindow = window.open(urlgo, '_blank');
                $.ajax({
                    type: 'POST',
                    url: '/echo/json/',
                    success: function (data) {
                        redirectWindow.location;
                    }
                });
            break; 
        case 5:
            var arrTheBookingButtonCheckIn = bg_dteCheckIn.split('/');
            var arrTheBookingButtonCheckOut = bg_dteCheckOut.split('/');
            bg_dteCheckIn = arrTheBookingButtonCheckIn[2]+'-'+arrTheBookingButtonCheckIn[1]+'-'+arrTheBookingButtonCheckIn[0];
            bg_dteCheckOut = arrTheBookingButtonCheckOut[2]+'-'+arrTheBookingButtonCheckOut[1]+'-'+arrTheBookingButtonCheckOut[0];
            var urlgo = 'https://www.thebookingbutton.com.au/karmagroup/properties/karmarottnestdirect?check_in_date='+bg_dteCheckIn+'&check_out_date='+bg_dteCheckOut+'&number_adults='+bg_Adults+'&number_children='+bg_Children;

             var redirectWindow = window.open(urlgo, '_blank');
                $.ajax({
                    type: 'POST',
                    url: '/echo/json/',
                    success: function (data) {
                        redirectWindow.location;
                    }
                });
            break;
        case 6:
            $( "#submitButton" ).prop( "disabled", true );
            alert('I\'m so sorry. Karma Carcassonne is not available for booking yet.');
            break;
        case 7:
            var urlgo = 'https://secure.staah.com/common-cgi/properties/b2c/Booknow.pl?action=showpage&MotelId=1781&Ln=en&cur=&source=&checkIn=&checkOut=&unk=2&msg=';

             var redirectWindow = window.open(urlgo, '_blank');
                $.ajax({
                    type: 'POST',
                    url: '/echo/json/',
                    success: function (data) {
                        redirectWindow.location;
                    }
                });
            break;
        case 9:

            var arrTheBookingButtonCheckIn = bg_dteCheckIn.split('/');
            var arrTheBookingButtonCheckOut = bg_dteCheckOut.split('/');
            bg_dteCheckIn = arrTheBookingButtonCheckIn[2]+'-'+arrTheBookingButtonCheckIn[1]+'-'+arrTheBookingButtonCheckIn[0];
            bg_dteCheckOut = arrTheBookingButtonCheckOut[2]+'-'+arrTheBookingButtonCheckOut[1]+'-'+arrTheBookingButtonCheckOut[0];

            if(is_mobile == 1){
                //https://apac.littlehotelier.com/properties/karma-reef/available_rooms?utf8=%E2%9C%93&locale=en&check_in_date=2017-03-24&number_of_nights=1&number_occupants=1&promotion_code=&button=
                var urlgo = 'https://apac.littlehotelier.com/properties/karma-reef/available_rooms?utf8=%E2%9C%93&locale=en&currency=USD&check_in_date='+ ymd_in +'&number_of_nights='+ days +'&number_occupants=&promotion_code=&button=';
            }else{
                var urlgo = 'https://apac.littlehotelier.com/properties/karma-reef?utf8=%E2%9C%93&locale=en&button=&promotion_code=&currency=USD&start_date_display='+bg_dteCheckIn+'&start_date='+bg_dteCheckIn+'';
            }            

             var redirectWindow = window.open(urlgo, '_blank');
                $.ajax({
                    type: 'POST',
                    url: '/echo/json/',
                    success: function (data) {
                        redirectWindow.location;
                    }
                });
            break;
        case 10:
            var arrTheBookingButtonCheckIn = bg_dteCheckIn.split('/');
            var arrTheBookingButtonCheckOut = bg_dteCheckOut.split('/');
            bg_dteCheckIn = arrTheBookingButtonCheckIn[0]+'-'+arrTheBookingButtonCheckIn[1]+'-'+arrTheBookingButtonCheckIn[2];
            bg_dteCheckOut = arrTheBookingButtonCheckOut[0]+'-'+arrTheBookingButtonCheckOut[1]+'-'+arrTheBookingButtonCheckOut[2];
            var urlgo = 'https://www.thebookingbutton.co.uk/properties/karmastmartindirect?check_in_date='+bg_dteCheckIn+'&check_out_date='+bg_dteCheckOut+'&number_adults='+bg_Adults+'&number_children='+bg_Children;

             var redirectWindow = window.open(urlgo, '_blank');
                $.ajax({
                    type: 'POST',
                    url: '/echo/json/',
                    success: function (data) {
                        redirectWindow.location;
                    }
                });
            break;

        case 11:
           
            $( "#submitButton" ).prop( "disabled", true );
            alert('I\'m so sorry. Karma Royal Benaulim is not available for booking yet.');
            break;

        case 12:

            var urlgo = 'https://www.odysseypremier.com/content/last-minute?kg_back=http%3A%2F%2Fkarmagroup.com%2Ffind-destination%2Fkarma-royal%2Froyal-candidasa%23enquiry';

             var redirectWindow = window.open(urlgo, '_blank');
                $.ajax({
                    type: 'POST',
                    url: '/echo/json/',
                    success: function (data) {
                        redirectWindow.location;
                    }
                });
            break;

        case 13:
            
            var urlgo = 'https://www.odysseypremier.com/content/last-minute?kg_back=http%3A%2F%2Fkarmagroup.com%2Ffind-destination%2Fkarma-royal%2Froyal-chiang-mai%23enquiry';

             var redirectWindow = window.open(urlgo, '_blank');
                $.ajax({
                    type: 'POST',
                    url: '/echo/json/',
                    success: function (data) {
                        redirectWindow.location;
                    }
                });
            break;
            
        case 14:
            
            var arrTheBookingButtonCheckIn = bg_dteCheckIn.split('/');
            var arrTheBookingButtonCheckOut = bg_dteCheckOut.split('/');
            bg_dteCheckIn = arrTheBookingButtonCheckIn[2]+'-'+arrTheBookingButtonCheckIn[1]+'-'+arrTheBookingButtonCheckIn[0];
            bg_dteCheckOut = arrTheBookingButtonCheckOut[2]+'-'+arrTheBookingButtonCheckOut[1]+'-'+arrTheBookingButtonCheckOut[0];

            var urlgo = 'https://secure.staah.com/common-cgi/properties/b2c/Booknow.pl?action=showpage&PropertyId=968&Ln=&cur=&source=&checkIn='+ bg_dteCheckIn +'&checkOut'+ bg_dteCheckOut +'=&unk=2&msg=';

             var redirectWindow = window.open(urlgo, '_blank');
                $.ajax({
                    type: 'POST',
                    url: '/echo/json/',
                    success: function (data) {
                        redirectWindow.location;
                    }
                });
            break;

        case 15:
            
            var urlgo = 'https://www.odysseypremier.com/content/last-minute?kg_back=http%3A%2F%2Fkarmagroup.com%2Ffind-destination%2Fkarma-royal%2Froyal-jimbaran%23enquiry';

             var redirectWindow = window.open(urlgo, '_blank');
                $.ajax({
                    type: 'POST',
                    url: '/echo/json/',
                    success: function (data) {
                        redirectWindow.location;
                    }
                });
            break;

        case 16:
            
            var urlgo = 'http://karmagroup.com/find-destination/karma-royal/royal-monterio';

             var redirectWindow = window.open(urlgo, '_blank');
                $.ajax({
                    type: 'POST',
                    url: '/echo/json/',
                    success: function (data) {
                        redirectWindow.location;
                    }
                });
            break;
        
        case 17:
            
            var urlgo = 'http://karmagroup.com/find-destination/karma-royal/royal-palms';

             var redirectWindow = window.open(urlgo, '_blank');
                $.ajax({
                    type: 'POST',
                    url: '/echo/json/',
                    success: function (data) {
                        redirectWindow.location;
                    }
                });
            break;

        case 18:
            
            var urlgo = 'https://www.odysseypremier.com/content/last-minute?kg_back=http%3A%2F%2Fkarmagroup.com%2Ffind-destination%2Fkarma-royal%2Froyal-phuket%23enquiry';

             var redirectWindow = window.open(urlgo, '_blank');
                $.ajax({
                    type: 'POST',
                    url: '/echo/json/',
                    success: function (data) {
                        redirectWindow.location;
                    }
                });
            break;

        case 19:
            
            var urlgo = 'https://www.odysseypremier.com/content/last-minute?kg_back=http%3A%2F%2Fkarmagroup.com%2Ffind-destination%2Fkarma-royal%2Froyal-sanur%23enquiry';

             var redirectWindow = window.open(urlgo, '_blank');
                $.ajax({
                    type: 'POST',
                    url: '/echo/json/',
                    success: function (data) {
                        redirectWindow.location;
                    }
                });
            break;

        case 20:
            
            var urlgo = 'https://secure.staah.com/common-cgi/properties/b2c/Booknow.pl?action=showpage&MotelId=1998&Ln=en&cur=&source=&checkIn=&checkOut=&unk=2&msg=';

             var redirectWindow = window.open(urlgo, '_blank');
                $.ajax({
                    type: 'POST',
                    url: '/echo/json/',
                    success: function (data) {
                        redirectWindow.location;
                    }
                });
            break;

        case 21:
            
            var urlgo = 'http://karmagroup.com/find-destination/karma-royal/royal-villea';

             var redirectWindow = window.open(urlgo, '_blank');
                $.ajax({
                    type: 'POST',
                    url: '/echo/json/',
                    success: function (data) {
                        redirectWindow.location;
                    }
                });
            break;

        case 22:
            
            var urlgo = 'http://karmagroup.com/find-destination/karma-estates/le-preverger';

             var redirectWindow = window.open(urlgo, '_blank');
                $.ajax({
                    type: 'POST',
                    url: '/echo/json/',
                    success: function (data) {
                        redirectWindow.location;
                    }
                });
            break;

        case 23:
            
            var urlgo = 'http://karmagroup.com/find-destination/karma-estates/pelikanos';

             var redirectWindow = window.open(urlgo, '_blank');
                $.ajax({
                    type: 'POST',
                    url: '/echo/json/',
                    success: function (data) {
                        redirectWindow.location;
                    }
                });
            break;

        default:
            
            $('.bookingMask .formselect').addClass('red');

            break;
    }

});