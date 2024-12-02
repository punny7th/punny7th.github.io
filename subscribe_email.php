<?php

$MSG = "";
$MSG .= "<strong>Subscribe Form | BRMB</strong><br>----------------------------------<br>";
$MSG .= "<strong>Email Address</strong>: " . htmlspecialchars($_REQUEST["semail"]) . "<br>";

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= 'From: <#>' . "\r\n";

// Sanitize email to prevent header injection
$to = filter_var($_REQUEST["semail"], FILTER_SANITIZE_EMAIL);

// Send emails
mail("#", "Subscribe Form", $MSG, $headers);
mail($to, "Subscribe Form", $MSG, $headers);

header("Location: index.html");
exit; // Using exit instead of die is more common

?>