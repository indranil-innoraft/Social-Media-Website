<?php

$resquestedUrl = $_SERVER['REQUEST_URI'];
$resquestedUrl = rtrim($resquestedUrl);

switch ($resquestedUrl) {
  case "/":
    require "./application/controllers/landingPage.php";
    break;
  case "/login":
    require "./application/controllers/landingPage.php";
    break;
  case "/signUp":
    require "./application/controllers/signUp.php";
    break;
  default:
    header("Location: ./application/controllers/errorPage.php");
}

?>