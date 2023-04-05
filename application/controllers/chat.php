<?php

session_start();
if ($_SESSION['user']['email'] == NULL) {
  session_destroy();
  header('Location: /');
}
require "./application/views/chatInterface.php";
