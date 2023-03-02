<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];
?>

<?php
$email_from = "portfolio@email.com";
$email_subject = "New Form submission";
$email_body = "You have received a new message from the user $name.\n\nHere is the message:\n$message\n";
?>

<?php
$to = $_POST['email'];
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
mail($to, $email_subject, $email_body, $headers);
header("Location: http://eve.kean.edu/~gordonza/cps3500/project1/contact.html");
?>