//booking bar

$('#karmaResort').change(function(e){ 
$( "#submitButton" ).prop( "disabled", false );
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

var karmaResortVal = parseInt(karmaResort);

switch(karmaResortVal){
        case 1:
            var arrTheBookingButtonCheckIn = bg_dteCheckIn.split('/');
            var arrTheBookingButtonCheckOut = bg_dteCheckOut.split('/');
            bg_dteCheckIn = arrTheBookingButtonCheckIn[0]+'-'+arrTheBookingButtonCheckIn[1]+'-'+arrTheBookingButtonCheckIn[2];
            bg_dteCheckOut = arrTheBookingButtonCheckOut[0]+'-'+arrTheBookingButtonCheckOut[1]+'-'+arrTheBookingButtonCheckOut[2];
            var urlgo = 'https://www.thebookingbutton.co.uk/properties/karmabavaria?check_in_date='+bg_dteCheckIn+'&check_out_date='+bg_dteCheckOut+'&number_adults='+bg_Adults+'&number_children='+bg_Children+'&number_infants='+bg_Infant;
             //ga('send','event','Link','Submit','Book Online',1);
            window.location.href = urlgo;
            //hide promotion code 
            break;
        case 2:
            var urlgo = 'https://secure.staah.com/common-cgi/properties/b2c/Booknow.pl?action=showpage&amp;MotelId=2190&amp;Ln=en&amp;cur=&amp;source=&amp;checkIn=&amp;checkOut=&amp;unk=2&amp;msg=';
             //ga('send','event','Link','Submit','Book Online',1);
            window.location.href = urlgo;
            break;
        case 3: 
            var arrTheBookingButtonCheckIn = bg_dteCheckIn.split('/');
            var arrTheBookingButtonCheckOut = bg_dteCheckOut.split('/');
            bg_dteCheckIn = arrTheBookingButtonCheckIn[0]+'-'+arrTheBookingButtonCheckIn[1]+'-'+arrTheBookingButtonCheckIn[2];
            bg_dteCheckOut = arrTheBookingButtonCheckOut[0]+'-'+arrTheBookingButtonCheckOut[1]+'-'+arrTheBookingButtonCheckOut[2];
            //var urlgo = 'https://www.thebookingbutton.com.au/karmagroup/properties/kjimbarandirect?locale=en&check_in_date='+bg_dteCheckIn+'&check_out_date='+bg_dteCheckOut+'&rooms=%5B%5D&number_adults='+bg_Adults+'&number_children='+bg_Children+'&number_infants='+bg_Infant+'&currency=USD';
            var urlgo = 'https://www.thebookingbutton.com.au/karmagroup/properties/kjimbarandirect?check_in_date='+bg_dteCheckIn+'&check_out_date='+bg_dteCheckOut+'&number_adults='+bg_Adults+'&number_children='+bg_Children;
             //ga('send','event','Link','Submit','Book Online',1);
            window.location.href = urlgo;
            break;
        case 4:
            var arrTheBookingButtonCheckIn = bg_dteCheckIn.split('/');
            var arrTheBookingButtonCheckOut = bg_dteCheckOut.split('/');
            bg_dteCheckIn = arrTheBookingButtonCheckIn[0]+'-'+arrTheBookingButtonCheckIn[1]+'-'+arrTheBookingButtonCheckIn[2];
            bg_dteCheckOut = arrTheBookingButtonCheckOut[0]+'-'+arrTheBookingButtonCheckOut[1]+'-'+arrTheBookingButtonCheckOut[2];
            //var urlgo = 'https://www.thebookingbutton.com.au/karmagroup/properties/karmakandaradirect?locale=en&check_in_date='+bg_dteCheckIn+'&check_out_date='+bg_dteCheckOut+'&rooms=%5B%5D&number_adults='+bg_Adults+'&number_children='+bg_Children+'&number_infants='+bg_Infant+'&currency=USD';
            var urlgo = 'https://www.thebookingbutton.com.au/karmagroup/properties/karmakandaradirect?check_in_date='+bg_dteCheckIn+'&check_out_date='+bg_dteCheckOut+'&number_adults='+bg_Adults+'&number_children='+bg_Children;
             //ga('send','event','Link','Submit','Book Online',1);
            window.location.href = urlgo;
            break; 
        case 5:
            var arrTheBookingButtonCheckIn = bg_dteCheckIn.split('/');
            var arrTheBookingButtonCheckOut = bg_dteCheckOut.split('/');
            bg_dteCheckIn = arrTheBookingButtonCheckIn[2]+'-'+arrTheBookingButtonCheckIn[1]+'-'+arrTheBookingButtonCheckIn[0];
            bg_dteCheckOut = arrTheBookingButtonCheckOut[2]+'-'+arrTheBookingButtonCheckOut[1]+'-'+arrTheBookingButtonCheckOut[0];
            //var urlgo = 'https://www.thebookingbutton.com.au/karmagroup/properties/karmarottnestdirect?locale=en&check_in_date='+bg_dteCheckIn+'&check_out_date='+bg_dteCheckOut+'&rooms=%5B%5D&number_adults='+bg_Adults+'&number_children='+bg_Children+'&number_infants='+bg_Infant+'&currency=AUD';
            var urlgo = 'https://www.thebookingbutton.com.au/karmagroup/properties/karmarottnestdirect?check_in_date='+bg_dteCheckIn+'&check_out_date='+bg_dteCheckOut+'&number_adults='+bg_Adults+'&number_children='+bg_Children;
             //ga('send','event','Link','Submit','Book Online',1);
            window.location.href = urlgo;
            break;
        case 6:
            $( "#submitButton" ).prop( "disabled", true );
            alert('I\'m so sorry. Karma Carcassonne is not available for booking yet.');
            break;
        case 7:
            var urlgo = 'https://secure.staah.com/common-cgi/properties/b2c/Booknow.pl?action=showpage&MotelId=1781&Ln=en&cur=&source=&checkIn=&checkOut=&unk=2&msg=';
             //ga('send','event','Link','Submit','Book Online',1);
            window.location.href = urlgo;
            break;
        //case 8:
            // Karma Mayura
        //    break;
        case 9:
            //Karma Reef
            //    break;
            var urlgo = 'https://apac.littlehotelier.com/properties/karma-reef?utf8=%E2%9C%93&locale=en&button=&promotion_code=&currency=USD&start_date_display='+littlehotelierDate+'&start_date='+littlehotelierDateReverse+'';
            //ga('send','event','Link','Submit','Book Online',1);
            window.location.href = urlgo;
            break;
        case 10:
            var arrTheBookingButtonCheckIn = bg_dteCheckIn.split('/');
            var arrTheBookingButtonCheckOut = bg_dteCheckOut.split('/');
            bg_dteCheckIn = arrTheBookingButtonCheckIn[0]+'-'+arrTheBookingButtonCheckIn[1]+'-'+arrTheBookingButtonCheckIn[2];
            bg_dteCheckOut = arrTheBookingButtonCheckOut[0]+'-'+arrTheBookingButtonCheckOut[1]+'-'+arrTheBookingButtonCheckOut[2];
            //var urlgo = 'https://www.thebookingbutton.co.uk/properties/karmastmartindirect?locale=en&check_in_date='+bg_dteCheckIn+'&check_out_date='+bg_dteCheckOut+'&rooms=%5B%5D&number_adults='+bg_Adults+'&number_children='+bg_Children+'&number_infants='+bg_Infant+'&currency=GBP';
            var urlgo = 'https://www.thebookingbutton.co.uk/properties/karmastmartindirect?check_in_date='+bg_dteCheckIn+'&check_out_date='+bg_dteCheckOut+'&number_adults='+bg_Adults+'&number_children='+bg_Children;
             //ga('send','event','Link','Submit','Book Online',1);
            window.location.href = urlgo;
            break;

        case 11:
           
            $( "#submitButton" ).prop( "disabled", true );
            alert('I\'m so sorry. Karma Royal Benaulim is not available for booking yet.');
            break;

        case 12:

            var urlgo = 'https://www.odysseypremier.com/content/last-minute?kg_back=http%3A%2F%2Fkarmagroup.com%2Ffind-destination%2Fkarma-royal%2Froyal-candidasa%23enquiry';
             //ga('send','event','Link','Submit','Book Online',1);
            window.location.href = urlgo;
            break;

        case 13:
            
            var urlgo = 'https://www.odysseypremier.com/content/last-minute?kg_back=http%3A%2F%2Fkarmagroup.com%2Ffind-destination%2Fkarma-royal%2Froyal-chiang-mai%23enquiry';
             //ga('send','event','Link','Submit','Book Online',1);
            window.location.href = urlgo;
            break;
            
        case 14:
            
            var urlgo = 'https://secure.staah.com/common-cgi/properties/b2c/Booknow.pl?action=showpage&PropertyId=968&Ln=&cur=&source=&checkIn=&checkOut=&unk=2&msg=';
             //ga('send','event','Link','Submit','Book Online',1);
            window.location.href = urlgo;
            break;

        case 15:
            
            var urlgo = 'https://www.odysseypremier.com/content/last-minute?kg_back=http%3A%2F%2Fkarmagroup.com%2Ffind-destination%2Fkarma-royal%2Froyal-jimbaran%23enquiry';
             //ga('send','event','Link','Submit','Book Online',1);
            window.location.href = urlgo;
            break;

        case 16:
            
            var urlgo = 'http://karmagroup.com/find-destination/karma-royal/royal-monterio';
             //ga('send','event','Link','Submit','Book Online',1);
            window.location.href = urlgo;
            break;
        
        case 17:
            
            var urlgo = 'http://karmagroup.com/find-destination/karma-royal/royal-palms';
             //ga('send','event','Link','Submit','Book Online',1);
            window.location.href = urlgo;
            break;

        case 18:
            
            var urlgo = 'https://www.odysseypremier.com/content/last-minute?kg_back=http%3A%2F%2Fkarmagroup.com%2Ffind-destination%2Fkarma-royal%2Froyal-phuket%23enquiry';
             //ga('send','event','Link','Submit','Book Online',1);
            window.location.href = urlgo;
            break;

        case 19:
            
            var urlgo = 'https://www.odysseypremier.com/content/last-minute?kg_back=http%3A%2F%2Fkarmagroup.com%2Ffind-destination%2Fkarma-royal%2Froyal-sanur%23enquiry';
             //ga('send','event','Link','Submit','Book Online',1);
            window.location.href = urlgo;
            break;

        case 20:
            
            var urlgo = 'https://secure.staah.com/common-cgi/properties/b2c/Booknow.pl?action=showpage&MotelId=1998&Ln=en&cur=&source=&checkIn=&checkOut=&unk=2&msg=';
             //ga('send','event','Link','Submit','Book Online',1);
            window.location.href = urlgo;
            break;

        case 21:
            
            var urlgo = 'http://karmagroup.com/find-destination/karma-royal/royal-villea';
             //ga('send','event','Link','Submit','Book Online',1);
            window.location.href = urlgo;
            break;

        case 22:
            
            var urlgo = 'http://karmagroup.com/find-destination/karma-estates/le-preverger';
             //ga('send','event','Link','Submit','Book Online',1);
            window.location.href = urlgo;
            break;

        case 23:
            
            var urlgo = 'http://karmagroup.com/find-destination/karma-estates/pelikanos';
             //ga('send','event','Link','Submit','Book Online',1);
            window.location.href = urlgo;
            break;

        default:
            break;
    }

});
