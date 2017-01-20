<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$business = $_POST['business'];
$industry = $_POST['industry'];
$message = $_POST['message'];

$formcontent=$formcontent = "You have received a new message via JMA Marketing.\n\n"."Here are the details:\n\nName: $name\n\nPhone Number: $phone\n\nEmail: $email_address\n\nBusiness Name: $business\n\nIndustry Type: $industry\n\nMessage:\n$message";
$recipient = "ksamualtolch@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header("Location: ../../thankyou.html");
?>

<!-- echo "Thank You!"; -->
<!-- " From: $name \n Message: $message"; -->