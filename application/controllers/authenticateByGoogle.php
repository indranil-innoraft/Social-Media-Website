<?php

require "./vendor/autoload.php";
require "./application/models/googleCredential.php";

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId($clientId);

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret($clientSecrect);

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://social.com/googlevalidation');

// to get the email and profile
$google_client->addScope('email');

$google_client->addScope('profile');

$database = new Database();
// header ('Location: /register');
if (isset ($_GET['code'])) {
  $token = $google_client->fetchAccessTokenWithAuthCode($_GET['code']);
  var_dump($token);
  if ($token['error'] != "invalid_grant") {
    $gAuth = new Google_Service_Oauth2($google_client);
    $userData = $gAuth->userinfo_v2_me->get();
    if ($database->isUserEmailIdExits($userData['email'])) {
      $data = $database->retriveUserInformation($userData['email']);
    }
    else {
      if ($userData['family_name'] == "") {
        $userData['family_name'] = "";
      }
      $database->registerUserByGoogle($userData['given_name'], $userData['family_name'], $userData['email'], $userData['picture']);
      require "./application/models/sendMailOnGoogleRegistration.php";
      $data = $database->retriveUserInformation($userData['email']);
    }
    session_start();
    $_SESSION['user']['firstName'] = $data['first_name'];
    $_SESSION['user']['lastName'] = $data['last_name'];
    $_SESSION['user']['gender'] = $data['gender'];
    $_SESSION['user']['email'] = $data['email'];
    $_SESSION['user']['profilePhoto'] = $data['profile_photo'];
    $_SESSION['user']['bio'] = $data['bio'];
    header("Location: /home");
  }
  else {
    header ('Location: /');
  }
}

?>
