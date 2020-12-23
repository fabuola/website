<?php
session_cache_limiter('nocache');
header('Expires: ' . gmdate('r', 0));

header('Content-type: application/json');

require 'php-mailer/PHPMailerAutoload.php';

// Your email address
$to = 'youremail@yourserver.com';
$subject = $_POST['subject'];


if($_POST["message"]) {


mail("fjp15@my.fsu.edu", "Here is the subject line",


$_POST["insert your message here"]. "From: an@email.address");


}

	$mail->IsHTML(true);                                  // Set email format to HTML
	
	$mail->CharSet = 'UTF-8';

	$mail->Subject = $subject;
	$mail->Body    = $message;

	$arrResult = array ('response'=>'success');

	if(!$mail->Send()) {
	   $arrResult = array ('response'=>'error');
	}	

	echo json_encode($arrResult);
	
} else {

	$arrResult = array ('response'=>'error');
	echo json_encode($arrResult);

}
?>

