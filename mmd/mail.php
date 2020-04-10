 <?php
$to      = 'developer@makemedigital.com.au';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: timknapman@gmail.com' . "\r\n" .
           'Reply-To: timknapman@gmail.com' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

if(mail($to, $subject, $message, $headers)){
    echo "Mail Sent";
}else{
    echo "***ERROR***";
}
?> 