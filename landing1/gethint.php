<?php
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['location'];


$to = 'vinayakgupta1107@gmail.com';
$subject = 'You Have new Lead from ScrapGaadi.com';

$body = "";
$body .= "Name: ";
$body .= $name;
$body .= "\n\n";

$body .= "";
$body .= "Email: ";
$body .= $email;
$body .= "\n\n";

$body .= "";
$body .= "Phone no.: ";
$body .= $phone;
$body .= "\n";


$headers = 'From: ' .ScrapGaadi . "\r\n";

if (filter_var($to, FILTER_VALIDATE_EMAIL)) {
mail($to, $subject, $body, $headers);
echo '<span id="valid">Thank you, We will Get Back to you as soon as possible</span>';
}else{
echo '<span id="invalid">Something gets wrong. Please try again.</span>';
}