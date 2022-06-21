<?php
if (isset($_POST['your-name']) && isset($_POST['your-mail'])){
    $yourName =  "Your Name: " . $_POST['your-name'] . "\r\n";
    $yourEmail =  "E-mail: " . $_POST['your-mail'] . "\r\n";
    $yourReason =  "Request: " . $_POST['your-request'] . "\r\n";
    $yourMessage =  "Message: " . $_POST['your-message'] . "\r\n";


    $to = 'matan@moreover4u2.com';
    
    $subject = 'Contact Form - DOKwallet';


    $headers = 'From: '. $_POST['your-mail'] . "\r\n";


    $message = $yourName . $yourEmail . $yourReason;


    $subject = preg_replace("/(\r\n)|(\r)|(\n)/", "", $subject);
    $subject = preg_replace("/(\t)/", " ", $subject);
    $subject = '=?UTF-8?B?' . base64_encode($subject) . '?=';


    mail($to, $subject, $message, $headers);
}
?>