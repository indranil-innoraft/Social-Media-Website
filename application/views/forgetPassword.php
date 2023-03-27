<html lang="en">

<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forget Password</title>
  <meta name="theme-color" content="#9F2B00">
  <link rel="stylesheet" href="/public/assets/css/forgetPassword.css">
  <link rel="icon" href="/public/assets/image/titleIcon.png" type="image/x-icon">
</head>

<body>
<div id="loading">
  <img id="loading-image" src = "/public/assets/image/1475.gif" alt="Loading..." />
</div>
  <div class="container-center">
    <h2>Don't Worry!</h2>
    <form action = "/forgetpassword" method = "POST">
      <h4>
        Just provide your email<br>
        and we can do the rest
      </h4>
      <formgroup>
        <input type="email" name="email" required/>
        <label for="email"><br>Email</label>
        <span>enter your email</span>
      </formgroup>
      <div class="error">
        <?php 
          if (isset($GLOBALS['error'])) {
            echo $GLOBALS['error'];
          }
          if (isset($GLOBALS['otpGeneratingProblem'])) {
            echo $GLOBALS['otpGeneratingProblem'];
          }
        ?>
      </div>
      <button id="login-btn" type = "submit">Next</button>
    </form>
    <p>Did you remember? <a href="/login">Sign In</a></p>
  </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
<script src="public/assets/js/forgetPassword.js"></script>
</html>
