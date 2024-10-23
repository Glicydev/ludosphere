<?php

require 'vendor/autoload.php';

define("PATH_TO_PHPMAILER", "../vendor/phpmailer");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

/**
 * Send an e-main from the contact form
 * 
 * @param string $userMail of the user that sent the form
 * @param string $message Message of the user
 * @param string $userName As the name says, the name of the user
 * 
 * @return bool False if it failed, true if it succeded
 */
function ContactSendMail(string $userMail, string $message, string $username) : bool
{
    global $mail;
    try {
        // Config
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "ludospheremailservice@gmail.com";
        $mail->Password = 'jvdj vynj xrbz ctup';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // From-to
        $mail->isHTML(false);
        $mail->setFrom($userMail, $username);
        $mail->addAddress("ludospheremailservice@gmail.com", 'Ludosphere');

        // Content
        $mail->Subject = "Email envoye via le formulaire de contact de ludosphere";
        $mail->Body = "(From " . $userMail . ") " . $message;
        return $mail->send();
    } catch (Exception $e) {
        echo $e;
        return false;
    }
}