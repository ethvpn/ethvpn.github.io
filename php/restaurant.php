<?php

    $email_address = "mizan078@gmail.com"; // Your email address

    $order_subject = "Food Order";
    $order_list_items = $_POST["order_list_items"];
    $order_list_status = $_POST["order_list_status"];
    $order_name = $_POST["order_name"];
    $order_email = $_POST["order_email"];
    $order_tel = $_POST["order_tel"];
    $order_select_payment = $_POST["order_select_payment"];
    $order_msg = $_POST["order_msg"];
    $order_list_total_price = $_POST["order_list_total_price"];


    /* ==========================================================================
    Send Message
    ========================================================================== */
    $send_subject = $order_subject;
    $send_message = 
"You have been contacted by $order_name with regards to food order and the Message as follows:

...............................................

Contact details:

Name: $order_name
Email Address: $order_email
Phone: $order_tel
Message: $order_msg
Order List Items: $order_list_items
Status: $order_list_status
Payment: $order_select_payment
Total Price: $order_list_total_price

";
    $headers = "From:" . $order_email . "\r\n";

    if (mail($email_address, $send_subject, $send_message, $headers)) {
        echo '<div class="success-message"><i class="fa fa-check"></i>Thank you ' . $order_name . ', your order has been submitted to us</div>';
        return false;
    } else {
        echo '<i class="fa fa-times"></i>Please make sure PHP mail() is enabled.';
        return false;
    }
?>