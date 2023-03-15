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

<div class="wrapper">
  <div class="profile">
    <div class="content">
      <h1>Edit Profile</h1>
      <form action="">
        <!-- Photo -->
        <fieldset>
          <div class="grid-35">
            <label for="avatar">Your Photo</label>
          </div>
          <div class="grid-65">
            <span class="photo" title="Upload your Avatar!"><img src="<?php
            if (isset($_SESSION['user']['profilePhoto'])) {
                echo $_SESSION['user']['profilePhoto'];
            }
            ?>" alt="" srcset="" width="60px" height="60px" style ="position:absolute;top:9px; left:7px;"></span>
            <input type="file" class="btn"  />
          </div>
        </fieldset>
        <fieldset>
          <div class="grid-35">
            <label for="fname">First Name</label>
          </div>
          <div class="grid-65">
            <input type="text" id="fname" value="<?php
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
            <input type="text" id="lname" value="<?php
            if (isset($_SESSION['user']['lastName'])) {
                echo $_SESSION['user']['lastName'];
            } 
            ?>" tabindex="2" />
          </div>
        </fieldset>
        <!-- Description about User -->
        <fieldset>
          <div class="grid-35">
            <label for="description">Bio</label>
          </div>
          <div class="grid-65">
            <textarea name="" id="" cols="30" rows="auto" tabindex="3"> "<?php
        
        if (isset($_SESSION['user']['bio'])) {
            echo($_SESSION['user']['bio']);
        }
        ?>"</textarea>
          </div>
        </fieldset>
        <!-- Location -->
        <fieldset>
          <div class="grid-35">
            <label for="location">Email</label>
          </div>
          <div class="grid-65">
            <input type="text" id="location" tabindex="4" value="<?php
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
            <input type="text" id="country" tabindex="5" value="<?php
            if (isset($_SESSION['user']['gender'])) {
                echo $_SESSION['user']['gender'];
            }
            ?>"/>
          </div>
        </fieldset>
        <fieldset>
          <input type="button" class="Btn cancel" value="Go back" />
          <input type="submit" class="Btn" value="Save Changes" />
        </fieldset>

      </form>
    </div>
  </div>
</div>
</body>

</html>