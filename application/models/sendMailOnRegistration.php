<?php 

require "./vendor/autoload.php";

//Provieds the email creation and transfer class.
use PHPMailer\PHPMailer\PHPMailer;

$userName = "magnuscarlesn097@gmail.com";
$password = "iyxbajujsnmapgaj";

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
  $mail->addEmbeddedImage('public/assets/image/welcome.png', 'welcome');
  $mail->Subject = 'Account Opening Mail.';
  $text = '<h1>Thanks ' .$_POST['firstName'] . ' for registering.<br>
  <br> <img src="cid:welcome">';
  $mail->Body = $text;

  //Send email.
  $mail->send();
}
catch (Exception $exception) {
  $GLOBALS['otpGeneratingProblem'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
