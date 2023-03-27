<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Change Password</title>
  <meta name="theme-color" content="#9F2B00">
  <link rel="stylesheet" href="/public/assets/css/changePassword.css">
</head>
<body>
<div class="mainDiv">
  <div class="cardStyle">
    <form action="" method="post" name="signupForm" id="signupForm">
      
      <img src="" id="signupLogo"/>
      
      <h2 class="formTitle">
        Rest your password
      </h2>
      
    <div class="inputDiv">
      <label class="inputLabel" for="password">New Password</label>
      <input type="password" id="password" name="newPassword">
    </div>
    <div class="error content-error">
      <?php
      if (isset($GLOBALS['newPasswordError'])) {
        echo $GLOBALS['newPasswordError'];
      }
      ?>
    </div>
    <span class="success">
    <?php
    if (isset($GLOBALS['successMessage'])) {
      echo $GLOBALS['successMessage'] . 'you can <a href="/login">Login</a>';
    }
    ?>
    </span>
    <div class="buttonWrapper">
      <button type="submit" name = "continue" id="submitButton" 
      class="submitButton pure-button pure-button-primary">
        <span>Continue</span>
      </button>
    </div>
      
  </form>
  </div>
</div>
</body>
</html>
