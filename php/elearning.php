<?php

	$email_address = "phpmastan@gmail.com"; // Your email address

	// Variables
	$subject = trim($_POST['to-learn']);
	$email = trim($_POST['email']);


    /* ==========================================================================
    Send Message
    ========================================================================== */
    $send_subject = "For: " . $subject;
    $send_message = 
"I want to learn $subject
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