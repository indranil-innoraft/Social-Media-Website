<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Validate OTP</title>
  <link rel="stylesheet" href="./public/assets/css/validateOtp.css">
</head>

<body>
  <div class="container">
    <div class="box">
      <div class="container height-100 d-flex justify-content-center align-items-center">
        <div class="position-relative">
          <div class="card p-2 text-center">
            <h6>Please enter the one time password <br> to verify your account</h6>
            <div> <span>A code has been sent to</span><small>
              <?php
              session_start();
              echo "******" . substr($_SESSION['userEmail'], 5); 
              ?>
            </small> 
          </div>
            <form action="/validateotp" method = "POST">
              <div id="otp" class="inputs d-flex flex-row justify-content-center mt-2">
                <input class="m-2 text-center form-control rounded" name="first" type="text" id="first" maxlength="1" />
                <input class="m-2 text-center form-control rounded" name="second" type="text" id="second" maxlength="1" />
                <input class="m-2 text-center form-control rounded" name="third" type="text" id="third" maxlength="1" />
                <input class="m-2 text-center form-control rounded" name="fourth" type="text" id="fourth" maxlength="1" />
              </div>
              <div class="error">
                <?php
                if(isset($GLOBALS['error'])) {
                  echo $GLOBALS['error'];
                }
                ?>
              </div>
              <div class="mt-4"> 
                <button class="btn btn-danger px-4 validate" name = "validateOtp" type = "submit">Validate</button> 
                <button class="btn btn-danger px-4 validate goBack" name = "goBack" type = "submit">Go Back</button> 
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="./public/assets/js/validateOtp.js"></script>
</body>
</html>
