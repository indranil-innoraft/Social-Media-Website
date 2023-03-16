<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Change Password</title>
  <link rel="stylesheet" href="/public/assets/css/changePassword.css">
</head>
<body>
<div class="mainDiv">
  <div class="cardStyle">
    <form action="" method="post" name="signupForm" id="signupForm">
      
      <img src="" id="signupLogo"/>
      
      <h2 class="formTitle">
        Login to your account
      </h2>
      
    <div class="inputDiv">
      <label class="inputLabel" for="password">New Password</label>
      <input type="password" id="password" name="newPassword" required>
    </div>
    <div class="error">
      <?php
      if (isset($validate->passwordError)) {
        echo $validate->passwordError;
        //On reload same error message should not displayed on the screen.
        unset($validate->passwordError);
      }
      ?>
    </div>
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