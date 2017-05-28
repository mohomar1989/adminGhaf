<?php
require 'sendgrid-php/vendor/autoload.php';
$emailBody = $_POST['body'];
$emailSubject = "Customer Query";
$customerName = $_POST['customerName'];
$customerNumber = $_POST['customerNumber'];
$customerEmail = $_POST['customerEmail'];


$emailBody1 = "Contact request from:$customerName \nMobile number:$customerNumber\nEmail:$customerEmail \nMessage:\n$emailBody";
$from = new \SendGrid\Email("Ghaf Admin", "admin@ghafoman.net");
$subject = "test";
$to = new \SendGrid\Email("", "shamote.ali@me.com");
$content = new \SendGrid\Content("text/plain", $emailBody1);
$mail = new \SendGrid\Mail($from, $emailSubject, $to, $content);


$sg = new \SendGrid("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");


$response = $sg->client->mail()->send()->post($mail);
echo $response->statusCode();
print_r($response->headers());
echo $response->body(); 
