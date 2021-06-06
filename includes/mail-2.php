<?php
$email = $_POST["email"];

$EmailTo = "2003kshah@gmail.com";
$Subject = "New Message Received";

// prepare email body text
$Fields.= "Email: ";
$Fields .= $email;
$Fields .= "\n";

// send email
$success = mail($EmailTo,  $Subject,  $Fields, "From:".$email);

