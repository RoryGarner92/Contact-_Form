<?php

if (isset($_POST['submit'])){

  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $mailFrom = $_POST['mail'];
  $message = $_POST['message'];


  echo $name;

  $mailTo = "dan@sledro.com";
  $headers = "From: " .$mailFrom;
  $txt = "You recieved a message from".$name."\n\n".$message;

  mail($mailTo, $subject, $txt, $headers);

  //Redirect now that the mail is sent. 
  header("Location: index.html?mailsent");

}
?>
