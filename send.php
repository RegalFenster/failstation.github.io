<?php

$email = "clara.fruehwirth@outlook.com";
$subject = $_POST["betreff"];
$message = $_POST["nachricht"];
$name = $_POST["von"];
$useremail = $_POST["mail"];

$header = 'From: '.$name .'<'.$useremail.'>'. "\r\n" .
  'Reply-To: ' . $useremail . "\r\n" .
  'X-Mailer: PHP/' . phpversion();

$mail_return = mail($email , $subject, $message, $header);

if ($mail_return) {
  header("Location: /success.html",TRUE,301);
} else {
  header("Location: /failure.html",TRUE,301);
}

?>