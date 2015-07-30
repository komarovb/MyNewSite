   <?php
require_once('../lib/class.phpmailer.php');
	
	$email = $_POST['email'];
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail             = new PHPMailer();


$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = "mail.komarovb.ru"; // SMTP server
$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "tls";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 587;                   // set the SMTP port for the GMAIL server
$mail->Username   = "fisika80";  // GMAIL username
$mail->Password   = "lopokoho2015";            // GMAIL password

$mail->SetFrom('Bob@komarovb.ru', 'First Last');

$mail->AddReplyTo("Bob@komarovb.ru","First Last");

$mail->Subject    = "Новое предложение";

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->Body="Господин, вам пишет ".$_POST['name']."\n".$_POST['text']."\n"."С ним можно связаться по адресу:".$_POST['email'];

$address = "fisika80@yandex.ru";
$mail->AddAddress($address, $_POST['name']);

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "OK";
}
?>