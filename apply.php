<?php
$Email=$_POST['Email'];
$Message=$_POST['Message'];
$Message = wordwrap($Message,70);
$to="kharsh.hk89@gmail.com";
$subject = "NGO career";
@mail($to,$subject,$Message);
header('Location:index.php');
// echo $Email;
// echo $Message;
// echo $subject;
// echo $headers;
?>
