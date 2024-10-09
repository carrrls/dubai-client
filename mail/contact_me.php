<?php
// Check for empty fields
if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    echo "No arguments Provided!";
    return false;
}

$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];

// Create the email and send the message
$to = 'jhaashwin485@gmail.com'; // Apne email address ko yahaan daalo.
$email_subject = "Website Contact Form: $name";
$email_body = "You have received a new message from your website contact form.\n\nHere are the details:\n\nName: $name\n\nEmail: $email_address\n\nMessage:\n$message";
$headers = "From: $email_address\n"; // From address ko form se aane wale email address se set karo.
$headers .= "Reply-To: $email_address"; // Reply-To address ko form se aane wale email address se set karo.
mail($to, $email_subject, $email_body, $headers);
return true;
?>
