<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$content="From: $name \n Message: $message";
$recipient = "drin9915@gmail.com";
$subject = "New message from Imaginative";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
echo "Thank You!";
?>