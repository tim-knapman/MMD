<?php
    $to = "developer@makemedigital.com.au";
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $headers = "From: $email \r\n";
    $headers .= "Reply-To: $email \r\n";
    $headers .= "CC: timknapman@gmail.com \r\n";

    $subject = "New Submission from Make Me Digital";

    $name = $_POST['name'];

    $body = "You have received an email from " . $name . "\r\n\n";
    $body .= "Message: " . $_POST['message'] . "\r\n\n";

    $body .= "Contact Details\r\n";
    $body .= "Name: $name \r\n";
    $body .= "Email: $email \r\n";
    $body .= "Phone: $phone \r\n";

    mail($to, $subject, $body, $headers);

    header('Location: http://makemedigital.com.au/test/#contact');
?>