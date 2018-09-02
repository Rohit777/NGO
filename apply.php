<?php
$Email=$_POST['Email'];
$Message=$_POST['Message'];
$Message = wordwrap($Message,70);
<<<<<<< HEAD
$to="rohitrana.r07@gmail.com";
=======
$to="kharsh.hk89@gmail.com";
>>>>>>> 143be03e5519f9ab701c343128882e349c951de6
$subject = "NGO career";
@mail($to,$subject,$Message);
header('Location:index.php');
// echo $Email;
// echo $Message;
// echo $subject;
// echo $headers;
<<<<<<< HEAD
?>
=======
?>
>>>>>>> 143be03e5519f9ab701c343128882e349c951de6
