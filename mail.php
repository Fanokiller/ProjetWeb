<?php

require_once 'phpmailer/src/PHPMailer.php';
require_once 'phpmailer/src/Exception.php';
require_once 'phpmailer/src/SMTP.php';
require_once 'phpmailer/src/OAuth.php';

use  PHPMailer \ PHPMailer \ PHPMailer ;

$mail = new  PHPMailer();
// $ mail-> SMTPDebug = SMTP :: DEBUG_SERVER;
$mail->IsSMTP ();                           // dire à la classe d'utiliser SMTP
// Définit le nom d'hôte du serveur de messagerie
$mail->Host = 'smtp.mailtrap.io' ;
// Définissez le numéro de port SMTP - susceptible d'être 25, 465 ou 587
$mail->Port = 465 ;

// Utiliser ou non l'authentification SMTP
$mail->SMTPAuth = true ;
// Nom d'utilisateur à utiliser pour l'authentification SMTP
$mail->Username = '49cedd2967dc39' ;
// Mot de passe à utiliser pour l'authentification SMTP
$mail->Password = '578969342ac67c' ;
// Définit de qui le message doit être envoyé
$mail->setFrom ($_POST['email']);
// Définissez la ligne d'objet
$mail->addAddress ( 'carrere.ludovic54@gmail.com' );
$mail->Subject = $_POST['subject'] ;
// Lire un corps de message HTML à partir d'un fichier externe, convertir des images référencées en images incorporées,
// convertit HTML en un corps alternatif de base en texte brut
$mail->Body = $_POST['msg'] ;

if (! $mail -> send ()) {
    echo  'Mailer Error:' .$mail -> ErrorInfo ;
} else {
    echo  'Message envoyé!' ;
}