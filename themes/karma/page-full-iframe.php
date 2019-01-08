<?php
/**
* Template Name: Full Iframe
*/

$page_id = get_the_ID();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title><?php the_title(); ?></title>

<style type="text/css">
body{
padding: 0;
margin: 0;
}
iframe{
height: 98vh;
}
</style>	
</head>
<body>

<?php
if(isset($_GET['check_in_date'])){
$check_in_date = 'check_in_date='. $_GET['check_in_date'] .'&';
}
if(isset($_GET['check_out_date'])){
$check_out_date = 'check_out_date='. $_GET['check_out_date'] .'&';
}	
if(isset($_GET['number_adults'])){
$number_adults = 'number_adults='. $_GET['number_adults'];
}else{
$number_adults = 'number_adults=2';
}

if($page_id=='7473'){ //BAVARIA 
//echo'<iframe src="https://app-apac.secure-reservations.com/properties/karmabavaria?'. $check_in_date . $check_out_date . $number_adults .'" width="100%" frameborder="0"></iframe>';
echo'<iframe src="https://www.thebookingbutton.co.uk/properties/karmabavaria?'. $check_in_date . $check_out_date . $number_adults .'" width="100%" frameborder="0"></iframe>';
}elseif($page_id=='7475'){ //JIMBARAN
echo'<iframe src="https://app-apac.secure-reservations.com/karmagroup/properties/kjimbarandirect?'. $check_in_date . $check_out_date . $number_adults .'" width="100%" frameborder="0"></iframe>';
}elseif($page_id=='7421'){ //KANDARA
echo'<iframe src="https://app-apac.secure-reservations.com/karmagroup/properties/karmakandaradirect?'. $check_in_date . $check_out_date . $number_adults .'" width="100%" frameborder="0"></iframe>';
}elseif($page_id=='7477'){ //ROTTNEST
//echo'<iframe src="https://app-apac.secure-reservations.com/karmagroup/properties/karmarottnestdirect?'. $check_in_date . $check_out_date . $number_adults .'" width="100%" frameborder="0"></iframe>';
$guestlineUrl = "";
    if($_GET['arrival'] == ""){
        $guestlineUrl = "https://uk4.roomlynx.net/rezrooms2/loadOBMApplication.action?siteId=KARMAROT&chainAction=newAvailabilitySearch&request_locale=en";
    }
    else{
        $arrival = $_GET['arrival'];
        $nights = $_GET['nights'];
        $adults = $_GET['adults'];
        $children = $_GET['children'];
        $offerCode = $_GET['offerCode'];
        $guestlineUrl = "https://uk4.roomlynx.net/rezrooms2/loadOBMApplication.action?siteId=KARMAROT&chainAction=newAvailabilitySearch&request_locale=en&arrival=".$arrival."&numberOfNights=".$nights."&numberOfPersons=".$adults."&numberOfChildren=".$children."&offerCode=".$offerCode;
    }
    // echo $guestlineUrl;
    echo'<iframe src="'.$guestlineUrl.'" width="100%" frameborder="0"></iframe>';
}elseif($page_id=='7479'){ //ST MARTIN'S
//echo'<iframe src="https://app-apac.secure-reservations.com/properties/karmastmartindirect?'. $check_in_date . $check_out_date . $number_adults .'" width="100%" frameborder="0"></iframe>';
echo'<iframe src="https://www.thebookingbutton.co.uk/properties/karmastmartindirect?'. $check_in_date . $check_out_date . $number_adults .'" width="100%" frameborder="0"></iframe>';
}
?>
</body>
</html>
