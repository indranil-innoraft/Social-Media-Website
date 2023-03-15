<?php

$resquestedUrl = $_SERVER['REQUEST_URI'];
$resquestedUrl = rtrim($resquestedUrl);

//Based on the user requested url it will redirect the page.
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
  case "/profile":
    require "./application/controllers/profile.php";
    break;
  case "/logout":
    require "./application/controllers/logout.php";
    break;
  default:
    require "./application/controllers/errorPage.php";
}

?> 