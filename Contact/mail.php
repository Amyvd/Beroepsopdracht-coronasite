<?php
$name = $_POST['Naam'];
$email = $_POST['email'];
$phone = $_POST['Telefoon'];
$message = $_POST['message'];
$formcontent="Naam: $name \nTelefoon Nummer: $phone \nE-mail: $email \nBericht: $message";
$recipient = "milodijkman@hotmail.com";
$subject = "Contact Form";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='index.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
