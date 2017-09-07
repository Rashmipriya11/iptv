<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$call = $_POST['call'];
$states = $_POST['states'];
$city = $_POST['city'];
$pincode = $_POST['pincode'];
$message = $_POST['message'];
$formcontent=" From: Name: $name \n Phone: $phone \n Multiple System Operator: $call \n States: $states \n City: $city \n Pincode: $pincode \n Message: $message";
$recipient = "Subash3040@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>