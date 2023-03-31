<?php

require "./vendor/autoload.php";

$database = new Database();
if (isset($_POST['email'])) {
  if ($database->isUserEmailIdExits($_POST['email'])) {
    session_start();
    $_SESSION['otp'] = rand(1000, 9999);
    $_SESSION['userEmail'] = $_POST['email'];
    require "./application/models/sendOtp.php";
    header ("Location: /validateotp");
  }
  else {
    $GLOBALS['error'] = "User email Address not exits.";
  }
}
require "./application/views/forgetPassword.php";

?>
