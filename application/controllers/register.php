<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require "./vendor/autoload.php";
session_start();


$database = new Database();

$pathOfProfilePhoto = "";


$validate = new Validation();
if (isset($_POST['register'])) {
  if (!$validate->isValidName($_POST['firstName'], $_POST['lastName'])) {
    $_SESSION["nameErrorMessage"] = $validate->nameError;
  }


  if (!$validate->isValidEmailAddress($_POST['email'])) {
    $_SESSION["emailIdErrorMessage"] = $validate->emailError;
  } 

  // if ($validate->isValidProfilePhoto($_FILES['profileImage']['name'], $_FILES['profileImage']['type'], $_FILES['profileImage']['size'])) {
  //   $pathOfProfilePhoto = "./public/profilePhoto" . $_FILES['profileImage']['name'];
  //   //If uploaded image is valid then send the image upload_image folder.
  //   move_uploaded_file($_FILES['profileImage']['tmp_name'], $pathOfProfilePhoto);
  // } 
  // else {
  //   $_SESSION['profilePhotoErrorMessage'] = $validate->uploadedFileError;
  // }

  if (!$validate->isValidPassword($_POST['password'])) {
    $_SESSION["passwordErrorMessage"] = $validate->passwordError;
  }
  else {
    $encryptPassword = $_POST['password'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $gender = $_POST['radio'];
    $email = $_POST['email'];
    $profilePhoto = "in";
    $bio = $_POST['bio'];
    $password = $encryptPassword;
    $sql = "INSERT INTO user_information (first_name, last_name, gender, email, profile_photo, bio, password) VALUES ('$firstName', '$lastName', '$gender', '$email', '$profilePhoto', '$bio', '$password')";
    $database->sqlQuery($sql);
  }

}

require "./application/views/register.php";


