<?php
require './libphp-phpmailer/class.phpmailer.php';
require './libphp-phpmailer/class.smtp.php';
$mail = new PHPMailer();
$mail->setFrom('rakhiresumecreator@gmail.com');
$mail->addAddress('jharakhi1211@gmail.com');
$mail->Subject = 'Message sent by PHPMailer';
$mail->Body = '<h2>Hello!</h2><p style="color:Blue;">
I am using PHPMailer to send email</p>';

$mail->isHTML(true);
$mail->AltBody = "This message is generated by plain text !";
$mail->IsSMTP();
$mail->SMTPSecure = 'ssl';
$mail->Host = 'ssl://smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Port = 465;
$mail->Username = 'rakhiresumecreator';
$mail->Password = 'Aditi@123';
if(!$mail->send()) {
  echo 'Email is not sent.';
  echo 'Email error: ' . $mail->ErrorInfo;
} else {
  echo 'Email has been sent.';
 }

?>