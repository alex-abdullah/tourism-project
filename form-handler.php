<?php
$name = $_POST['name']
$visitor_email = $_POST['email']
$subject = $_POST['subject']
$message = $_POST['message']

$email_from = 'http://127.0.0.1:5500/projects/tourism-project/contact.html'

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "Subject: $subject.\n".
                "User Message: $message.\n";

$to = 'aabdullah1@woolworths.com.au';

$headers = "From: $email_from \r\n";

$headers . = "Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers)

header("Location: contact.html");

?>