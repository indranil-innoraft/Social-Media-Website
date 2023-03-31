<?php

require "./vendor/autoload.php";
session_start();
if ($_SESSION['userEmail'] == NULL) {
  session_destroy();
  header('Location: /forgetpassword');
}
if (isset($_POST['validateOtp'])) {
  $otp = $_POST['first'] . $_POST['second'] . $_POST['third'] .$_POST['fourth'];
  if($_SESSION['otp'] == $otp) {
    header ("Location: /changepassword");
  }
  else {
    $GLOBALS['error'] = "Otp is not valid.";
  }
}
if (isset($_POST['goBack'])) {
  session_start();
  session_destroy();
  header('Location: /forgetpassword');
}

require "./application/views/validateOtp.php";

?>
