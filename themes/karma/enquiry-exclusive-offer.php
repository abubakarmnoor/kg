<?php
define('WP_USE_THEMES', false);
require_once(rtrim($_SERVER['DOCUMENT_ROOT'], '/') . '/wp-load.php');  
	
	if($_POST['email']!='') {

	$choiceval = $_POST['exclusive'];
	$resortsval = $_POST['resorts'];
	$message .= 'Dear Team,<br><br>';
	$message .= 'Please find guest\'s submission regarding Karma Spa Exclusive Offer as below :<br><br>';
	$message .= 'Email : '. $_POST['email'] ."\n <br>";
        $message .= 'Phone : '. $_POST['telephone'] ."\n <br>";
	$message .= 'Name : '. $_POST['firstname'].' '.$_POST['lastname']  ."\n <br>";
	$message .= 'Country : '. $_POST['country'] ."\n <br>";
	$message .= 'Exclusive Offer : '. $_POST['exclusive'] ."\n <br>";
        $message .= 'Resorts : '. $_POST['resorts'] ."\n <br><br>";
	$message .= 'Please call the guest for more information about his/her request.<br><br>';
	$message .= 'Regards,';
	//$headers = 'From: '. $_POST['field-1427865032'] . "\r\n" .
	//Bcc: abubakar@karmagroup.com\r\n
	$headers = "From: noreply@karmagroup.com \r\n" .
							    'Reply-To: '. $_POST['email'] . "\r\n" .
							    'X-Mailer: PHP/' . phpversion();

	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
	$headers .= "Bcc: abubakar@karmagroup.com\r\n";
	
				     
	if ($choiceval == 'Happy Boosters - Yoga at Karma'){
		if($resortsval == 'Karma-Minoan') {
			$to = 'spa@karmaminoan.com';
			//$to = 'ferry.yudhitama@karmagroup.com';
		}else{
			$to = 'spasupervisor@karmajimbaran.com';
			//$to = 'juliusman.sine@karmagroup.com';
		}

		//$to = 'spasupervisor@karmajimbaran.com';
		$subject = 'Exclusive Offer Request - '. $_POST['exclusive'];
		$sendmail = wp_mail($to, $subject, $message, $headers);
		if ($sendmail) {
			//echo "mailsent";
		}
		else {
			//echo "mailnotset";
		}
	}
	else if ($choiceval == 'Complimentary Massage with Every Oxygen Facial'){
		$to = 'spasupervisor@karmajimbaran.com';
		$subject = 'Exclusive Offer  - '. $_POST['exclusive'];
		$sendmail = wp_mail($to, $subject, $message, $headers);
		if ($sendmail) {
			//echo "mailsent";
		}
		else{
			//echo "mailnotset";
		}
	}

} 
?>
