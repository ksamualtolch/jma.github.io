<?php 
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$business = $_POST['business'];
$dropdown = $_POST['industry'];
$message = $_POST['message'];
$formcontent="From: $name \n Phone: $phone \n Email: $email \n Business: $business \n Industry: $industry \n Message: $message; 
$recipient = "ksamualtolch@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>