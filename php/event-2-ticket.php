<?php

	$email_address = "phpmastan@gmail.com"; // Your email address

	// Variables
	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$ticket_1 = trim($_POST['ticket_1']);
	$ticket_2 = trim($_POST['ticket_2']);
	$ticket_3 = trim($_POST['ticket_3']);


    /* ==========================================================================
    Send Message
    ========================================================================== */
    $send_subject = "Ticket for: " . $name;
    $send_message = 
"$name wants to purchase following tickets:
1. Day 1 Full Day Ticket $49 - $ticket_1 pieces.
2. Day 2 Full Day Ticket $99 - $ticket_2 pieces.
3. Day 3 Full Day Ticket $129 - $ticket_3 pieces.
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