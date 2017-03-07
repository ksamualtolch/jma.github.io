<?php
// $name = $_POST['name'];
// $phone = $_POST['phone'];
// $email = $_POST['email'];
// $business = $_POST['business'];
// $industry = $_POST['industry'];
// $message = $_POST['message'];

//define variables and set to empty values for validation
$name_error = $name_error = $phone_error = $email_error = $business_error = "";
$name = $phone = $email = $business = $industry = $message = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["name"])) {
		$name_error = "please enter your name";
	} else {
		$name = test_input($_POST["name"]);
		//check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      		$name_error = "Only letters and white space allowed"; 
    	}
 	}

//$formcontent = "You have received a new message via JMA Marketing.\n\n"."Here are the details:\n\nName: $name\n\nPhone Number: $phone\n\nEmail: $email\n\nBusiness Name: $business\n\nIndustry Type: $industry\n\nMessage:\n$message";
//$recipient = "ksamualtolch@gmail.com";
//$subject = "A New Message From JMA.COM";
//$mailheader = "From: $email \r\n";
//mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
//header("Location: ../../../thankyou.html");
//?>
