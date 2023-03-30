<?php

$resquestedUrl = $_SERVER['REQUEST_URI'];
$resquestedUrl = rtrim($resquestedUrl);
$resquestedUrlArray = explode("/", $resquestedUrl);
$queryPage = explode("?", $resquestedUrlArray[1]);

switch ($queryPage[0]) {
  case "":
    require "./application/controllers/login.php";
    break;
  case "login":
    require "./application/controllers/login.php";
    break;
  case "signin":
    require "./application/controllers/login.php";
    break;
  case "signup":
    require "./application/controllers/register.php";
    break;
  case "register":
    require "./application/controllers/register.php";
    break;
  case "home":
    require "./application/controllers/home.php";
    break;
  case "profile":
    require "./application/controllers/profile.php";
    break;
  case "logout":
    require "./application/controllers/logout.php";
    break;
  case "forgetpassword":
    require "./application/controllers/forgetPassword.php";
    break;
  case "validateotp":
    require "./application/controllers/validateOtp.php";
    break;
  case "changepassword":
    require "./application/controllers/changePassword.php";
    break;
  case "chatroom":
    require "./application/controllers/chat.php";
    break;
  case "cookiepolicy":
    require "./application/views/cookiePolicy.html";
    break;
  case "googlevalidation":
    require "./application/controllers/authenticateByGoogle.php";
    break;
  default:
    require "./application/controllers/errorPage.php";
}

?>
