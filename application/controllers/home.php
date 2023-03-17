<?php

require "./vendor/autoload.php";
session_start();

// if (!isset($_SESSION['user']['email'])) {
//   header ('Location: /login');
// }


$database = new Database();
$validate = new Validation();

if (isset($_POST['doPost'])) {
  $pathOfProfilePhoto = "public/assets/image/postsPhoto/" . $_FILES['postImage']['name'];
  //If uploaded image is valid then send the image upload_image folder.
  move_uploaded_file($_FILES['postImage']['tmp_name'], $pathOfProfilePhoto);
  $database->doPost($_SESSION['user']['email'], $_POST['postContent'], $pathOfProfilePhoto);
  // $posts = $database->getPosts();
  header ('location: /home');

}
$posts = $database->getPosts();

require "./application/views/home.php";

?>