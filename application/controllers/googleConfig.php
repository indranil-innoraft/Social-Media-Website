<?php 

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('1064476256339-58t8onva2r4dfphmj8mcmm7fuidv9era.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://social.com/');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>
