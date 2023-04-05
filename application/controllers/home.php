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
  $path_of_profile_photo = "";
  $path_of_uploaded_audio = "";
  $path_of_uploaded_video = "";
  if (isset($_FILES['postImage']['name'])) {
    $path_of_profile_photo = "public/assets/image/postsPhoto/" . $_FILES['postImage']['name'];
    //If uploaded image is valid then send the image upload_image folder.
    move_uploaded_file($_FILES['postImage']['tmp_name'], $path_of_profile_photo);
  }
  if (isset($_FILES['postAudio']['name'])) {
    $path_of_uploaded_audio = "public/assets/uploadedAudio/" . $_FILES['postAudio']['name'];
    //If uploaded image is valid then send the image upload_image folder.
    move_uploaded_file($_FILES['postAudio']['tmp_name'], $path_of_uploaded_audio);
  }
  if (isset($_FILES['postVideo']['name'])) {
    $path_of_uploaded_video = "public/assets/uploadedVideo/" . $_FILES['postVideo']['name'];
    //If uploaded image is valid then send the image upload_image folder.
    move_uploaded_file($_FILES['postVideo']['tmp_name'], $path_of_uploaded_video);
  }
  if (!(($_FILES['postImage']['name'] == ""
  && $_FILES['postAudio']['name'] == ""
  && $_FILES['postVideo']['name'] == "")
  && $_POST['postContent'] == "")) {
    $database->doPost($_SESSION['user']['email'], htmlspecialchars($_POST['postContent'], ENT_QUOTES),
    $path_of_profile_photo, $path_of_uploaded_video, $path_of_uploaded_audio);
    header ('location: /home');
  }

}
$posts = $database->getPosts();
require "./application/views/home.php";

?>
