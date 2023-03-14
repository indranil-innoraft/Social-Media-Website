<?php 
require "./vendor/autoload.php";
require "./application/views/login.php";

$database = new Database();

if (isset($_POST['login'])) {
    if ( $database->isExists($_POST['email'], md5($_POST['password'])) ) {
        $data = $database->retriveUserInformation($_POST['email']);
        $_SESSION['user']['firstName'] = $data['first_name'];
        $_SESSION['user']['lastName'] = $data['last_name'];
        $_SESSION['user']['gender'] = $data['gender'];
        $_SESSION['user']['email'] = $data['email'];
        $_SESSION['user']['profilePhoto'] = $data['profile_photo'];
        $_SESSION['user']['bio'] = $data['bio'];
        header("Location: /home");
    }
    else {
        $_SESSION['loginError'] = "login unsuccessfull.";
        header("Location: /login");
    }
}
    