<?php

require "./vendor/autoload.php";

$validate = new Validation();
$database = new Database();
$pathOfProfilePhoto = "";

if (isset($_POST['register'])) {
  if (!$validate->isValidName($_POST['firstName'], $_POST['lastName'])) {
    $GLOBALS["nameErrorMessage"] = $validate->nameError;
  }

  if (!$validate->isValidEmailAddress($_POST['email'])) {
    $GLOBALS["emailIdErrorMessage"] = $validate->emailError;
  } 

  // mail box layer API is not working so i comment it out. 
  // if (!$validate->isEmailAddressExits($_POST['email'])) {
  //   $GLOBALS["emailExitsErrorMessage"] = $validate->emailExitsError;
  // }

  if ($validate->isValidProfilePhoto($_FILES['profileImage']['name'], $_FILES['profileImage']['type'], $_FILES['profileImage']['size'])) {
    $pathOfProfilePhoto = "public/assets/image/profilePhoto/" . $_FILES['profileImage']['name'];
    //If uploaded image is valid then send the image upload_image folder.
    move_uploaded_file($_FILES['profileImage']['tmp_name'], $pathOfProfilePhoto);
  } 
  else {
    $GLOBALS['profilePhotoErrorMessage'] = $validate->uploadedFileError;
  }
  
  if (!$validate->isValidPassword($_POST['password'])) {
    $GLOBALS["passwordErrorMessage"] = $validate->passwordError;
  }
  if ($database->isUserEmailIdExits($_POST['email'])) {
    $GLOBALS["emailIdErrorMessage"] = "Account already exits.You can login.";
  }
  else {
    $database->registerUser($_POST['firstName'], $_POST['lastName'], $_POST['radio'], $_POST['email'], $pathOfProfilePhoto, $_POST['bio'], md5($_POST['password']));
    require "./application/models/sendMailOnRegistration.php";
    $GLOBALS['successMessage'] = "Account created successfully.";
  }
}

require "./application/views/register.php";

?>
