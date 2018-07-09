<?php
$Email=$_POST['Email'];
$Message=$_POST['Message'];
$Message = wordwrap($Message,70);
mail("rohitrana.r07@gmail.com","My subject",$Message);
echo $Message;
echo $Email;
?>