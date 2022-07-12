<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$number = $_POST['number'];
$photography = $_POST['photography'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "shashank2411@gmail.com";

$message = "Client Name: " . $name . "\n"
. "Email address: " . $email."\n". "Mobile Number: " . $number . "\n". "Subject: " . $subject . "\n". "Photography Session: " . $photography . "\n"
. "Client Message: " .  $_POST['message'];

mail($recipient, $subject, $message, $mailheader) or die("Error!");

echo'

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="formStyle.css">
</head>
<body>
    <div class="container">
        <h1>Thank you for contacting me. I will get back to you as soon as possible!</h1>
        <p class="back">Go back to the <a href="index.html">homepage</a>.</p>
        
    </div>
</body>
</html>



';


?>
