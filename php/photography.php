<?php
// Variables
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$event_packages = trim($_POST['event-packages']);
$event_type = trim($_POST['event-type']);
$event_date = trim($_POST['event-date']);
$message = trim($_POST['message']);


if( isset($email) ) {

	// Avoid Email Injection and Mail Form Script Hijacking
	$pattern = "/(content-type|bcc:|cc:|to:)/i";
	if( preg_match($pattern, $name) || preg_match($pattern, $email) || preg_match($pattern, $message) ) {
		exit;
	}

	// Email will be send
	$to = "phpmastan@gmail.com"; // Change with your email address
	$sub = "$name - $event_type"; // You can define email subject
	// HTML Elements for Email Body
	$body = <<<EOD
	<strong>Name:</strong> $name <br>
	<strong>Email:</strong> <a href="mailto:$email?subject=feedback" "email me">$email</a> <br> <br>
	<strong>Event Package:</strong> $event_packages <br>
	<strong>Event Type:</strong> $event_type <br>
	<strong>Event Date:</strong> $event_date <br> <br>
	<strong>Message:</strong> $message <br>
EOD;
//Must end on first column
	
	$headers = "From: $name <$email>\r\n";
	$headers .= 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	// PHP email sender
	mail($to, $sub, $body, $headers);
}


?>
