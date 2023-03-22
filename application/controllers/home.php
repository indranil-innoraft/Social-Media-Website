<?php

require "./vendor/autoload.php";
session_start();

if (!isset($_SESSION['user']['email'])) {
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
  $database->doPost($_SESSION['user']['email'], $_POST['postContent'], $pathOfProfilePhoto, $pathOfUploadedVideo, $pathOfUplodedAudio);
  //If uploaded image is valid then send the image upload_image folder.
  // move_uploaded_file($_FILES['postAudio']['tmp_name'], $pathOfProfilePhoto);
  // $pathOfProfilePhoto = "public/assets/uploadedVideo/" . $_FILES['postVideo']['name'];
  // //If uploaded image is valid then send the image upload_image folder.
  // move_uploaded_file($_FILES['postVideo']['tmp_name'], $pathOfProfilePhoto);
  // $database->doPost($_SESSION['user']['email'], $_POST['postContent'], $pathOfProfilePhoto);
  // $posts = $database->getPosts();
  header ('location: /home');

}
$posts = $database->getPosts();

require "./application/views/home.php";

?>
