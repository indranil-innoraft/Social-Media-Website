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
              <div class="vertical-field">
                <span class="firstName">
                  <label for="firstName">First Name</label>
                  <input name="firstName" type="text" id="name" placeholder="First Name"  />
                </span>
                <span class="lastName">
                <label for="lastName">Surname</label>
                <input name="lastName" type="text" id="name" placeholder="Surname"  />
                </span>
              </div>
              <div class="error">
              <?php
                if (isset($GLOBALS["nameErrorMessage"])) {
                  echo $GLOBALS["nameErrorMessage"];
                }
                ?>
              </div>
              <div class="container">
                <label>Gender</label>
                <input type='radio' id='male' name='radio' value = "male">
                <label  class="mg-4" for='male'>Male</label>
                <input  class="mg-4" type='radio' id='female' name='radio' value = "female">
                <label for='female'>Female</label>
              </div>
              <span class="emailClass">
              <label for="email">Email address</label>
              <input name="email" class="email-input" id="email" placeholder="name@example.com"  title="Enter a valid email address" />
              </span>
              <div class="error">
                <?php 
                if (isset($GLOBALS["emailIdErrorMessage"])) {
                  echo $GLOBALS["emailIdErrorMessage"];
                }
                if (isset($GLOBALS["emailExitsErrorMessage"])) {
                  echo $GLOBALS["emailExitsErrorMessage"];
                }
                ?>
              </div>
              <!-- <label for="otp">OTP</label>
              <input name="otp" type="number" class="otpCheck disabledField"  required/>
              </span>
              <div class="error">
                ?>
              </div> -->
              <label for="profileImage">Profile Image</label>
              <input name="profileImage" id="file" type="file" accept="image/*" placeholder="Profile Image"  title="Upload your profile image." />
              <span class="fileInfo"></span>
              <div class="error">
                <?php 
                if (isset($GLOBALS["profilePhotoErrorMessage"])) {
                  echo $GLOBALS["profilePhotoErrorMessage"];
                }
                ?>
              </div>
              <span class="bioClass">
              <label for="bio">Add your bio</label><br>
              <textarea id="txtid" name="bio" rows="2" cols="33" maxlength="200"></textarea>
              </span>
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
                }
                ?>
              </div>
              <span class="backToLogin">If you have an Account please <a href="/login">Login</a><br></span>
              <span class="success">
              <?php
              if (isset($GLOBALS['successMessage'])) {
                echo $GLOBALS['successMessage'];
              }
              ?>
              </span>
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
