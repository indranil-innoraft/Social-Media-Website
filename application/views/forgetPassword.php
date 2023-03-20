<html lang="en">

<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forget Password</title>
  <link rel="stylesheet" href="/public/assets/css/forgetPassword.css">
  <link rel="icon" href="/public/assets/image/titleIcon.png" type="image/x-icon">
</head>

<body>
  <div class="container-center">
    <h2>Don't Worry!</h2>
    <form action = "/forgetpassword" method = "POST">
      <h4>
        Just provide your email<br>
        and we can do the rest
      </h4>
      <formgroup>
        <input type="text" name="email" />
        <label for="email"><br>Email</label>
        <span>enter your email</span>
      </formgroup>
      <div class="error">
        <?php 
          if (isset($error)) {
            echo $error;
            //On reload error message should not display on the screen.
            unset($error);
          }
          if (isset($otpGeneratingProblem)) {
            echo $otpGeneratingProblem;
            //On reload error message should not display on the screen.
            unset($otpGeneratingProblem);
          }
        ?>
      </div>
      <button id="login-btn" type = "submit">Next</button>
    </form>
    <p>Did you remember? <a href="/login">Sign In</a></p>
  </div>
</body>
</html>
