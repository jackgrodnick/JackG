<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $mainForm = $_POST['mail'];
  $mailFrom = $_POST['mail'];

  $mailTo = "jack.grodnick@gmail.com";
  $headers = "From: ".$mailFrom;
  $txt = "YOU HAVE AN EMAIL FROM ".$name.".\n\n".$message;

  mail($mailTo, $subject, $txt, $headers);
  header("Location: contact.html?mailsent");
}
