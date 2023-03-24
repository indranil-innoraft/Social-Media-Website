<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="/public/assets/css/profile.css">
</head>
<body>
<div id="loading">
  <img id="loading-image" src = "/public/assets/image/1475.gif" alt="Loading..." />
</div>
<div class="wrapper">
  <div class="profile">
    <div class="content">
      <h1>Edit Profile</h1>
      <form action="/profile" method = "POST" enctype="multipart/form-data">
        <!-- Photo -->
        <fieldset>
          <div class="grid-35">
            <label for="avatar">Your Photo</label>
          </div>
          <div class="grid-65">
            <span class="photo" title="Upload your Avatar!"><img class="circleBtn" src="<?php
            echo $_SESSION['user']['profilePhoto'];
            ?>" alt="" srcset="" width="60px" height="60px" style ="position:absolute;top:9px; left:7px;"></span>
            <input type="file" accept="image/*" name="profileImage" class="btn"/>
          </div>
        </fieldset>
        <fieldset>
          <div class="grid-35"> 
            <label for="fname">First Name</label>
          </div>
          <div class="grid-65">
            <input type="text" id="fname" name = "firstName" value="<?php
            if (isset($_SESSION['user']['firstName'])) {
                echo $_SESSION['user']['firstName'];
            } 
            ?>"tabindex="1" />
          </div>
        </fieldset>
        <fieldset>
          <div class="grid-35">
            <label for="lname">Last Name</label>
          </div>
          <div class="grid-65">
            <input type="text" id="lname" name = "lastName" value="<?php
            if (isset($_SESSION['user']['lastName'])) {
                echo $_SESSION['user']['lastName'];
            } 
            ?>" tabindex="2" />
          </div>
          <div class="error">
              <?php
              if (isset($validate->nameError)) {
                echo $validate->nameError;
              }
              ?>
            </div>
        </fieldset>
        <!-- Description about User -->
        <fieldset>
          <div class="grid-35">
            <label for="description">Bio</label>
          </div>
          <div class="grid-65">
          <textarea id="" name = "bio" cols="30" rows="auto" tabindex="3" ><?php
        
        if (isset($_SESSION['user']['bio'])) {
            echo($_SESSION['user']['bio']);
        }
        ?></textarea>
          </div>
        </fieldset>
        <!-- Location -->
        <fieldset>
          <div class="grid-35">
            <label for="location">Email</label>
          </div>
          <div class="grid-65">
            <input type="text" id="location" class="emailDisable" tabindex="4" value="<?php
            if (isset($_SESSION['user']['email'])) {
                echo $_SESSION['user']['email'];
            }
            ?>" readonly/>
          </div>
        </fieldset>
        <!-- Country -->
        <fieldset>
          <div class="grid-35">
            <label for="country">Gender</label>
          </div>
          <div class="grid-65">
            <input type="text" id="country" name = "gender" tabindex="5" value="<?php
            if (isset($_SESSION['user']['gender'])) {
                echo $_SESSION['user']['gender'];
            }
            ?>"/>
            <div class="error">
              <?php
              if (isset($validate->genderError)) {
                echo $validate->genderError;
              }
              ?>
            </div>
          </div>
        </fieldset>
        <fieldset>
        <div class="error success">
              <?php
              if (isset($GLOBALS['successMessage'])) {
                echo $GLOBALS['successMessage'];
              }
              ?>
            </div>
          <a href="/home" class="anchor">Go back</a>
          <!-- <input type="button" class="Btn cancel" name="goBack" value="Go back" /> -->
          <input type="submit" class="Btn" name="updateUserProfile" value="Save Changes" />
        </fieldset>

      </form>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.js" 
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
  <script src="./public/assets/js/profile.js"></script>
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
  integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" 
  crossorigin="anonymous" referrerpolicy="no-referrer" />
</body>
</html>
