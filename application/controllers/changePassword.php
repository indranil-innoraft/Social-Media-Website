<?php

require "./vendor/autoload.php";
session_start();
if ($_SESSION['userEmail'] == NULL) {
  session_destroy();
  header('Location: /forgetpassword');
}
$validate = new Validation();
$database = new Database();
if (isset($_POST['continue'])) {
  if ($validate->isValidPassword($_POST['newPassword'])) {
    $database->changeUserPassword($_SESSION['userEmail'], md5($_POST['newPassword']));
    session_destroy();
    $GLOBALS['successMessage'] = "Password Updated successfully.";
  }
  else {
    $GLOBALS['newPasswordError'] = $validate->passwordError;
  }
}
require "./application/views/changePassword.php";

?>
