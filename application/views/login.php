<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>social.com</title>
  <meta name="theme-color" content="#9F2B00">
  <link rel="stylesheet" href="../../public/assets/css/landingPage.css">
  <link rel="icon" href="/public/assets/image/titleIcon.png" type="image/x-icon">
</head>

<body>
<div class="menu-wrap">
    <input type="checkbox" class="toggler">
    <div class="hamburger"><div></div></div>
    <div class="menu">
      <div>
        <div>
          <ul>
            <li><a href="/login">Login</a></li>
            <li><a href="/register">Register Now</a></li>
            <li><a href="/forgetpassword">Reset Your password</a></li>
            <li><a href="/about-us">About Us</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="wrapper">
      <div class="contentWrapper">
        <div class="content active" id="login">
          <form action="/login" method="POST">
            <div class="formGroup">
              <label for="email">Email address</label>
              <input type="email" id="email" name="email" placeholder="name@example.com" required />
              <small class="messageHelp">
                We'Il never share your email with anyone else
              </small>
              <label for="password">Password</label>
              <input type="password" id="password" name="password" placeholder="Password" required />
              <div>
                <span class="boldFont">Don't have an accout
                <a class="boldFont" href="/register">Register Now</a></span>
              </div>
              <a href="/forgetpassword" id="passwordReset">Forgot password?</a>
              <div class="error">
                <?php
                  if (isset($GLOBALS['loginError'])) {
                    echo $GLOBALS['loginError'];
                  }
                ?>
              </div>
              <button class="btn" name="login" type="submit">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
 <div class="cookie-container">
	<p class="cookie-text">
  This website may store or retrieve information on your browser, mostly in the form of cookies. This information might be about you, your preferences or your device and is mostly used to make the website work as you expect it to and give you a more personalized web experience. We respect your right to privacy, so you can choose not to allow some types of cookies. Click on the different category headings to find out more. You can accept or refuse our use of cookies, by moving the selector switch in each category to change our default settings. However, blocking some types of cookies may impact your experience of the site and the services we are able to offer you.
	</p>
	<div class="agree">
	<button id="agree">Sounds good!</button>
  <button id="disAgree">Bad idea!</button>
	</div>
</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" 
integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" 
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="../../public/assets/js/landingPage.js"></script>
</html>
