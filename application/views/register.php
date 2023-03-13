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
              <label for="firstName">First Name</label>
              <input name="firstName" type="text" id="name" placeholder="First Name" required />
              <label for="lastName">Surname</label>
              <input name="lastName" type="text" id="name" placeholder="Surname" required />
              <div class="error">
              <?php
                if (isset($_SESSION["nameErrorMessage"])) {
                  echo $_SESSION["nameErrorMessage"];
                  //On reload errors, should't display on the screen.
                  unset($_SESSION["nameErrorMessage"]);
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
              <label for="email">Email address</label>
              <input name="email"  id="email" placeholder="name@example.com"  title="Enter a valid email address" />
              <small class="messageHelp">
                Enter a valid email address
              </small>
              <div class="error">
                <?php 
                if (isset($_SESSION["emailIdErrorMessage"])) {
                  echo $_SESSION["emailIdErrorMessage"];
                  //On reload errors, should't display on the screen.
                  unset($_SESSION["emailIdErrorMessage"]);
                }
                ?>
              </div>
              <label for="profileImage">Profile Image</label>
              <input name="profileImage" type="file" accept="image/*" placeholder="Profile Image"  title="Upload your profile image." />
              <small class="messageHelp">
                Uplodad your profile photo.
              </small>
              <div class="error">
                <?php 
                if (isset($_SESSION["profilePhotoErrorMessage"])) {
                  echo $_SESSION["profilePhotoErrorMessage"];
                  //On reload errors, should't display on the screen.
                  unset($_SESSION["profilePhotoErrorMessage"]);
                }
                ?>
              </div>
              <label for="bio">Bio</label><br>
              <textarea id="txtid" name="bio" rows="3" cols="27" maxlength="200"></textarea>
              <small class="messageHelp">
                Add your bio.
              </small>
              <label for="password">Password</label>
              <input type="password" id="password" placeholder="Password" name = "password"  title="Must be at least 6 characters" />
              <small class="messageHelp">Must be at least 6 characters</small>
              <div class="error">
                <?php 
                if (isset($_SESSION["passwordErrorMessage"])) {
                  echo $_SESSION["passwordErrorMessage"];
                  //On reload errors, should't display on the screen.
                  unset($_SESSION["passwordErrorMessage"]);
                }
                ?>
              </div>
              <button class="btn" name="register" type="submit">Register</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>