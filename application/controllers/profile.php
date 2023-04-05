<?php

require "./vendor/autoload.php";

$database = new Database();
$validate = new Validation();
session_start();

if (!isset($_SESSION['user']['email'])) {
  session_destroy();
  header ('Location: /login');
}

if (isset($_POST['updateUserProfile'])) {
  if (isset($_FILES['profileImage']['name'])) {
    if ( $validate->isValidName($_POST['firstName'],
      $_POST['lastName'])
      && $validate->isValidProfilePhoto($_FILES['profileImage']['name'], $_FILES['profileImage']['type'], $_FILES['profileImage']['size'])
      && $validate->isValidGender($_POST['gender'])) {
    $path_of_profile_photo = "public/assets/image/profilePhoto/" . $_FILES['profileImage']['name'];
    //If uploaded image is valid then send the image upload_image folder.
    move_uploaded_file($_FILES['profileImage']['tmp_name'], $path_of_profile_photo);

    $database->updateUserInformation($_POST['firstName'], $_POST['lastName'],
    $_POST['gender'], $_SESSION['user']['email'], $path_of_profile_photo, $_POST['bio']);

    $data = $database->retriveUserInformation($_SESSION['user']['email']);
    $_SESSION['user']['firstName'] = $data['first_name'];
    $_SESSION['user']['lastName'] = $data['last_name'];
    $_SESSION['user']['gender'] = $data['gender'];
    $_SESSION['user']['profilePhoto'] = $data['profile_photo'];
    $_SESSION['user']['bio'] = $data['bio'];
  }
  else {
    if ($validate->isValidName($_POST['firstName'], $_POST['lastName']) && $validate->isValidGender($_POST['gender'])) {
    $database->updateUserInformation($_POST['firstName'], $_POST['lastName'],
    $_POST['gender'], $_SESSION['user']['email'], $_SESSION['user']['profilePhoto'], htmlspecialchars($_POST['bio'], ENT_QUOTES));

    $data = $database->retriveUserInformation($_SESSION['user']['email']);
    // $_SESSION['user'] = [
    //   'firstName' => $data['first_name'],
    //   'lastName' => $data['last_name'],
    //   'gender' => $data['gender'],
    //   'profilePhoto' => $data['profile_photo'],
    //   'bio' => $data['bio'],
    // ];
    $_SESSION['user']['firstName'] = $data['first_name'];
    $_SESSION['user']['lastName'] = $data['last_name'];
    $_SESSION['user']['gender'] = $data['gender'];
    $_SESSION['user']['profilePhoto'] = $data['profile_photo'];
    $_SESSION['user']['bio'] = $data['bio'];
    $GLOBALS['successMessage'] = "Profile updated successfully.";
   }
  }
}
}
require "./application/views/profile.php";

?>
