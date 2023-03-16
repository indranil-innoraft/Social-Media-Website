<?php

require "./vendor/autoload.php";

$validate = new Validation();
$database = new Database();

if (isset($_POST['continue'])) {
  if ($validate->isValidPassword($_POST['newPassword'])) {
    session_start();
    $database->changeUserPassword($_SESSION['userEmail'], md5($_POST['newPassword']));
    header ("Location: /login");
  }
  else {
    session_destroy();
  }
}
require "./application/views/changePassword.php";
