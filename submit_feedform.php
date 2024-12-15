<?php
if ($_REQUEST['pname'] != "" && $_REQUEST["pemail"] != "")
{
  $MSG = "";
  $MSG = $MSG . "<strong>Contact Form | CashCrossBorders</strong><br>----------------------------------<br>";
  $MSG = $MSG . "<strong>Name</strong>: ".$_REQUEST["pname"]."<br>";
  $MSG = $MSG . "<strong>Email</strong>: ".$_REQUEST["pemail"]."<br>";
  $MSG = $MSG . "<strong>City</strong>: ".$_REQUEST["pcity"]."<br>";
  $MSG = $MSG . "<strong>Country</strong>: ".$_REQUEST["pcountry"]."<br>";
  $MSG = $MSG . "<strong>Message</strong>: ".$_REQUEST["message"]."<br>";
  
  $headers = "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
  $headers .= 'From: <info@email.com>' . "\r\n";
  mail("info@email.com","Contact Form",$MSG,$headers);
  mail($_REQUEST["pemail"],"Contact Form",$MSG,$headers);
  header("Location: index.html");
  die;
}else{
  ?>
    <script language="JavaScript">
    alert("Please Enter All Required Fields...");
    history.go(-1);
    </script>
    <?php
}
?>