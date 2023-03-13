<?php

$resquestedUrl = $_SERVER['REQUEST_URI'];
$resquestedUrl = rtrim($resquestedUrl);

switch ($resquestedUrl) {
  case "/":
    require "./application/controllers/login.php";
    break;
  case "/login":
    require "./application/controllers/login.php";
    break;
  case "/signIn":
    require "./application/controllers/login.php";
    break;
  case "/signUp":
    require "./application/controllers/register.php";
    break;
  case "/register":
    require "./application/controllers/register.php";
    break;
  case "/home":
    require "./application/controllers/home.php";
    break;
  default:
    require "./application/controllers/errorPage.php";
}

?> 