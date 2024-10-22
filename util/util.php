<?php

/**
 * Send an e-main from the contact form
 * 
 * @param string $from Email of the user that sent the form
 * @param string $message Message of the user
 * @param string $userName As the name says, the name of the user
 * 
 * @return bool False if it failed, true if it succeded
 */
function ContactSendMail(string $from, string $message, string $username) : bool
{
    $headers = 'From: "' . $username . '" <' . $from . '>' . "\r\n" .
           'Reply-To: ' . $from . "\r\n" .
           'X-Mailer: PHP/' . phpversion();
    $message = "Sent from : " . $username . " (" . $from . "), " . $message;
    
    try {
        mail("ludovic2008@outlook.com", "Envoyé via le formulaire de contact de ludosphere", $message, $headers);
        return true;
    } catch(Exception $e) {
        return false;
    }
}