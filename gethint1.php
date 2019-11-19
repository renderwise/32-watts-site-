<?php
$name = $_REQUEST['name'];
$address = $_REQUEST['address'];
$phone = $_REQUEST['mobile'];


$to = 'deepak@32watts.com,nikgupta2701@gmail.com,deepakclearaligner@gmail.com';
$subject = 'You Have new Lead from 32watts.com';

$body = "";
$body .= "Name: ";
$body .= $name;
$body .= "\n\n";

$body .= "";
$body .= "Address: ";
$body .= $address;
$body .= "\n\n";

$body .= "";
$body .= "Phone no.: ";
$body .= $phone;
$body .= "\n";


$headers = 'From: ' .PricingpageLeads . "\r\n";


 $count =3;
     
if(empty($name)){
    global $count;
    $count =$count-1;
}
if(empty($address)){
    global $count;
    $count =$count-1;
}
if(empty($phone)){
    global $count;
    $count =$count-1;
}


if ($count===3) {
    mail($to, $subject, $body, $headers);
    echo '<span id="valid">Thank you, We will Get Back to you as soon as possible</span>';
}

