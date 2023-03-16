<?php 
require "./vendor/autoload.php";

if (isset($_POST['validateOtp'])) {
  session_start();
  $otp = $_POST['first'] . $_POST['second'] . $_POST['third'] .$_POST['fourth'];
  if($_SESSION['otp'] == $otp) {
    header ("Location: /changepassword");
  }
  else {
    $error = "Otp is not valid.";
    session_destroy();
  }
}

require "./application/views/validateOtp.php";