<?php

$to = 'sunitfed@yahoo.com';
$subject = $_POST['subject'];
$name = $_POST['fname'] + $_POST['lname'];
$message = $_POST['message'];

$body = <<<EMAIL
 
Hi, my name is $name.

$message

My email address is $email.

EMAIL;

$header = "From: $email";

if($_POST){
    mail($to, $subject, $body, $header);
    $feedback = 'Thank you for contacting.';
}

?>