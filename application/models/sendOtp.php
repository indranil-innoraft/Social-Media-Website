<?php

require "./vendor/autoload.php";
require "./config/googleSecrect.php";

//Provieds the email creation and transfer class.
use PHPMailer\PHPMailer\PHPMailer;

try {
  $mail = new PHPMailer(true);

  //Server settings
  //Send using SMTP
  $mail->isSMTP();

  //Set the SMTP server to send through.
  $mail->Host = 'smtp.gmail.com';

  //Enable SMTP authentication.
  $mail->SMTPAuth = true;

  //SMTP username.
  $mail->Username = $userName;

  //SMTP password.
  $mail->Password = $password;

  $mail->Port = 465;
  $mail->SMTPSecure = "ssl";

  //Recipients.
  $mail->setFrom($userName);
  $mail->addAddress($_POST['email']);

  //Set email format to HTML.
  $mail->isHTML(true);
  $mail->Subject = 'Reset Your Password.';
  $text = "One time password(OTP) is : ";
  $mail->Body = $text . $_SESSION['otp'];

  //Send email.
  $mail->send();
}
catch (Exception $exception) {
  $GLOBALS['otpGeneratingProblem'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
