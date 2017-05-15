<?php

	$email_address = "phpmastan@gmail.com"; // Your email address

	// Variables
	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$phone = trim($_POST['tel']);
	$people = trim($_POST['people']);
	$date = trim($_POST['date']);
	$time = trim($_POST['time']);


    /* ==========================================================================
    Send Message
    ========================================================================== */
    $send_subject = "Table Reservation by " . $name;
    $send_message = 
"You have been contacted by $name with regards to table reservation and the Message as follows:

...............................................

Contact details:

Name: $name
Email Address: $email
Phone: $phone
People: $people
Date: $date
Time: $time

";
	$headers = "From:" . $email . "\r\n";

	if (mail($email_address, $send_subject, $send_message, $headers)) {
	  echo '<div class="success-message"><i class="fa fa-check"></i>Thank you ' . $name . ', your order has been submitted to us</div>';
	  return false;
	} else {
	  echo '<i class="fa fa-times"></i>Please make sure PHP mail() is enabled.';
	  return false;
	}
?>