<?php
$name=$_POST['name'];
$email=$_POST['email'];
$content=$_POST['content'];
$recipient="prodyutdatta@gmail.com";
$subject = "Contact Form";
$fromcontent="From: ".$name."\n Message: ".$content;
$mailheader = "From: ".$email."\r\n";
mail($recipient, $subject, $fromcontent, $mailheader) or die("Error!");
echo "Thank You!";
  ?>