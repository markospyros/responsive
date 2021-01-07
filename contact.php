<?php

if (isset($_POST['submit'])){
  $fullName = $_POST['fullName'];
  $mailFrom = $_POST['eMail'];
  $message = $_POST['message'];

  $mailTo = "markospyros1@gmail.com";
  $headers = "From: ".$mailFrom;
  $txt = "You have received an e-mail from ".$fullName.".\n\n".$message;

  mail($mailTo, $txt, $headers);

  header("Location: index.php?mailsend");
}

?>
