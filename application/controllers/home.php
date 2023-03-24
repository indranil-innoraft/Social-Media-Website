<?php

require "./vendor/autoload.php";
session_start();

if (!isset($_SESSION['user']['email'])) {
  session_destroy();
  header ('Location: /login');
}

$database = new Database();
$validate = new Validation();

if (isset($_POST['doPost'])) {
  $pathOfProfilePhoto = "";
  $pathOfUplodedAudio = "";
  $pathOfUploadedVideo = "";
  
  if (isset($_FILES['postImage']['name'])) {
    $pathOfProfilePhoto = "public/assets/image/postsPhoto/" . $_FILES['postImage']['name'];
    //If uploaded image is valid then send the image upload_image folder.
    move_uploaded_file($_FILES['postImage']['tmp_name'], $pathOfProfilePhoto);
  }
  if (isset($_FILES['postAudio']['name'])) {
    $pathOfUplodedAudio = "public/assets/uploadedAudio/" . $_FILES['postAudio']['name'];
    //If uploaded image is valid then send the image upload_image folder.
    move_uploaded_file($_FILES['postAudio']['tmp_name'], $pathOfUplodedAudio);
  }
  if (isset($_FILES['postVideo']['name'])) {
    $pathOfUploadedVideo = "public/assets/uploadedVideo/" . $_FILES['postVideo']['name'];
    //If uploaded image is valid then send the image upload_image folder.
    move_uploaded_file($_FILES['postVideo']['tmp_name'], $pathOfUploadedVideo);
  }
  if (!(($_FILES['postImage']['name'] == "" && $_FILES['postAudio']['name'] == "" 
  && $_FILES['postVideo']['name'] == "") 
  && $_POST['postContent'] == "")) {
    $database->doPost($_SESSION['user']['email'], htmlspecialchars($_POST['postContent'], ENT_QUOTES), 
    $pathOfProfilePhoto, $pathOfUploadedVideo, $pathOfUplodedAudio);
    header ('location: /home');
  }
  
}
$posts = $database->getPosts();

require "./application/views/home.php";

?>
