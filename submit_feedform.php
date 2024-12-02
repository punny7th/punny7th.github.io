<?php

$MSG = "";
$MSG .= "<strong>Contact Form | BRMB</strong><br>----------------------------------<br>";
$MSG .= "<strong>Full Name</strong>: " . htmlspecialchars($_REQUEST["pname"]) . "<br>";
$MSG .= "<strong>Email Address</strong>: " . htmlspecialchars($_REQUEST["pemail"]) . "<br>";
$MSG .= "<strong>City</strong>: " . htmlspecialchars($_REQUEST["pcity"]) . "<br>";
$MSG .= "<strong>Country</strong>: " . htmlspecialchars($_REQUEST["pcountry"]) . "<br>";
$MSG .= "<strong>Message</strong>: " . htmlspecialchars($_REQUEST["message"]) . "<br>";

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= 'From: <#>' . "\r\n";

// Sanitize email to prevent header injection
$to = filter_var($_REQUEST["pemail"], FILTER_SANITIZE_EMAIL);

// Send emails
mail("#", "Contact Form", $MSG, $headers);
mail($to, "Contact Form", $MSG, $headers);

header("Location: index.html");
exit; // Using exit instead of die is more common

?>