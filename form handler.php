<?php
$name = $_POST['name'];
$visitors_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_post['Message'];

$email_from = 'sagarmrije4@gmail.com';

$email_subject = 'New form Submission';

$email_body = "User Name: $name.\n".
              "User Email: $visitors_email.\n".
              "Subject: $vistor_email.\n".
              "User Message: $Message.\n";

    
    $to = 'sagarmirje4@gmail.com';

    $headers = "From: $email from \r\n";

    $headers = "Replay-To: $visitors_email\r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: contact.html");
?>