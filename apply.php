<?php
$Email=$_POST['Email'];
$Message=$_POST['Message'];
$Message = wordwrap($Message,70);
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";
$subject = "My subject";
mail($Email,$subject,$txt,$Message);
header('index.php');

?>
