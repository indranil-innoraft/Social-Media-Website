<?php 

require "./vendor/autoload.php";
$database = new Database();

if (isset($_POST['login'])) {
    if ( $database->isExists($_POST['email'], $_POST['password']) ) {
        echo "login successfull.";
    }
    else {
        echo "login unsuccessfull.";
    }
}
    
require "./application/views/login.php";