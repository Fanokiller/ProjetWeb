<?php
require_once 'phpmailer/src/PHPMailer.php';
require_once 'phpmailer/src/Exception.php';
require_once 'phpmailer/src/SMTP.php';
require_once 'phpmailer/src/OAuth.php';

use PHPMailer\PHPMailer\PHPMailer;

$mail = new PHPMailer;
//$mail->SMTPDebug = SMTP::DEBUG_SERVER;
$mail->IsSMTP();                           // telling the class to use SMTP
//Set the hostname of the mail server
$mail->Host = 'smtp.mailtrap.io';
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 465;

//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = '19a88e38e2428f';
//Password to use for SMTP authentication
$mail->Password = '1c10df412c2d8e';
//Set who the message is to be sent from
$mail->setFrom('willou.daoud@gmail.com');
//Set the subject line
$mail->addAddress('fanokiller54@gmail.com');
$mail->Subject = 'PHPMailer Test';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->Body = 'C\'est un mail test';

if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message envoyé!';
}