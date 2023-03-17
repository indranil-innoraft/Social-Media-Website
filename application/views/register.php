<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>social.com</title>
  <link rel="stylesheet" href="../../public/assets/css/landingPage.css">
  <link rel="icon" href="/public/assets/image/titleIcon.png" type="image/x-icon">
</head>

<body>
  <div class="container">
    <div class="wrapper">
      <div class="contentWrapper">
        <div class="content" id="register">
          <form action="/register" method="POST" enctype="multipart/form-data">
            <div class="formGroup">
              <span class="firstName">
                <label for="firstName">First Name</label>
                <input name="firstName" type="text" id="name" placeholder="First Name"  />
              </span>
              <span class="lastName">
              <label for="lastName">Surname</label>
              <input name="lastName" type="text" id="name" placeholder="Surname"  />
              </span>
              <div class="error">
              <?php
                if (isset($GLOBALS["nameErrorMessage"])) {
                  echo $GLOBALS["nameErrorMessage"];
                  //On reload errors should't display on the screen.
                  unset($GLOBALS["nameErrorMessage"]);
                }
                ?>
              </div>
              <div class="container">
                <label>Gender</label>
                <input type='radio' id='male' name='radio' value = "male">
                <label for='male'>Male</label>
                <input type='radio' id='female' name='radio' value = "female">
                <label for='female'>Female</label>
              </div>
              <span class="emailClass">
              <label for="email">Email address</label>
              <input name="email"  id="email" placeholder="name@example.com"  title="Enter a valid email address" />
              </span>
              <small class="messageHelp">
                Enter a valid email address
              </small>
              <div class="error">
                <?php 
                if (isset($GLOBALS["emailIdErrorMessage"])) {
                  echo $GLOBALS["emailIdErrorMessage"];
                  //On reload error should't display on the screen.
                  unset($GLOBALS["emailIdErrorMessage"]);
                }
                ?>
              </div>
              <label for="profileImage">Profile Image</label>
              <input name="profileImage" id="file" type="file" accept="image/*" placeholder="Profile Image"  title="Upload your profile image." />
              <span class="fileInfo"></span>
              <small class="messageHelp">
                Uplodad your profile photo.
              </small>
              <div class="error">
                <?php 
                if (isset($GLOBALS["profilePhotoErrorMessage"])) {
                  echo $GLOBALS["profilePhotoErrorMessage"];
                  //On reload errors should't display on the screen.
                  unset($GLOBALS["profilePhotoErrorMessage"]);
                }
                ?>
              </div>
              <span class="bioClass">
              <label for="bio">Bio</label><br>
              <textarea id="txtid" name="bio" rows="3" cols="27" maxlength="200"></textarea>
              </span>
              <small class="messageHelp">
                Add your bio.
              </small>
              <span class="passwordClass">
              <label for="password">Password</label>
              <input type="password" id="password" placeholder="Password" name = "password"  title="Must be at least 6 characters" />
              <span class="helpPassword"></span>
              </span>
              <small class="messageHelp">Must be at least 6 characters</small>
              <div class="error">
                <?php 
                if (isset($GLOBALS["passwordErrorMessage"])) {
                  echo $GLOBALS["passwordErrorMessage"];
                  //On reload errors should't display on the screen.
                  unset($GLOBALS["passwordErrorMessage"]);
                }
                ?>
              </div>
              <span class="backToLogin">If you have an Account please <a href="/login">Login</a></span>
              <button class="btn" name="register" type="submit">Register</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="/public/assets/js/landingPage.js"></script>

</html>