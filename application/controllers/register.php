<?php


require "./vendor/autoload.php";

$validate = new Validation();
$database = new Database();
$pathOfProfilePhoto = "";

if (isset($_POST['register'])) {
  if (!$validate->isValidName($_POST['firstName'], $_POST['lastName'])) {
    $_SESSION["nameErrorMessage"] = $validate->nameError;
    header ("Location: /register");
  }

  if (!$validate->isValidEmailAddress($_POST['email'])) {
    $_SESSION["emailIdErrorMessage"] = $validate->emailError;
  } 

  if ($validate->isValidProfilePhoto($_FILES['profileImage']['name'], $_FILES['profileImage']['type'], $_FILES['profileImage']['size'])) {
    $pathOfProfilePhoto = "public/assets/image/profilePhoto/" . $_FILES['profileImage']['name'];
    //If uploaded image is valid then send the image upload_image folder.
    move_uploaded_file($_FILES['profileImage']['tmp_name'], $pathOfProfilePhoto);
  } 
  else {
    $_SESSION['profilePhotoErrorMessage'] = $validate->uploadedFileError;
  }

  if (!$validate->isValidPassword($_POST['password'])) {
    $_SESSION["passwordErrorMessage"] = $validate->passwordError;
  }
  else {
    $database->registerUser($_POST['firstName'], $_POST['lastName'], $_POST['radio'], $_POST['email'], $pathOfProfilePhoto, $_POST['bio'], md5($_POST['password']));
  }

}

require "./application/views/register.php";

?>