<?php

session_start();
if ($_SESSION['user']['email'] == NULL) {
  session_destroy();
  header('Location: /login');
}
session_unset();
session_destroy();
header ('Location: /login');

?>
