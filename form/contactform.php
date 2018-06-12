<?php

if (isset($_POST['submit'])){

  $name = $POST['name'];
  $subject = $POST['subject'];
  $mailFrom = $POST['mail'];
  $message = $POST['message'];


  $mailTo = "dan@sledro.com";
  $headers = "From: " .$mailFrom;
  $txt = "You recieved a message from".$name."\n\n".$message;

  mail($mailTo, $subject, $txt, $headers);
  header("Location: index.html?mailsend");
}

?>
