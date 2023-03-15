<?php

require "./vendor/autoload.php";

$database = new Database();
$validate = new Validation();
$uploadedFileError = "";

// if (isset($_POST['update'])) {
//   if (!$validate->isValidName($_POST['firstName'], $_POST['lastName'])) {
//     $_SESSION["nameErrorMessage"] = $validate->nameError;
//     header ("Location: /profile");
//   }

//   if ($validate->isValidProfilePhoto($_FILES['profileImage']['name'], $_FILES['profileImage']['type'], $_FILES['profileImage']['size'])) {
//     $pathOfProfilePhoto = "public/assets/image/profilePhoto/" . $_FILES['profileImage']['name'];
//     //If uploaded image is valid then send the image upload_image folder.
//     move_uploaded_file($_FILES['profileImage']['tmp_name'], $pathOfProfilePhoto);
//   } 
//   else {
//     $_SESSION['profilePhotoErrorMessage'] = $validate->uploadedFileError;
//   }

  
//   else {
//     $database->registerUser($_POST['firstName'], $_POST['lastName'], $_POST['radio'], $_POST['email'], $pathOfProfilePhoto, $_POST['bio'], md5($_POST['password']));
//   }
  
// }

// if (isset($_POST['goBack'])) {
//   header ("Location: /home");
// }
  
require "./application/views/profile.php";

?>