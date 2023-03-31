
$(document).ready(function(){
  //Check User entered a correct first name or not.
  $(".firstName>input").on("blur", function checkFirstName() {
    var letters = /^[A-Za-z]+$/;
    if(letters.test($(this).val())){
      $(this).css("border","green 2px solid");
    }
    else{
      $(this).css("border","red 2px solid");
    }
  });

  $(".lastName>input").on("blur",  function checkLastName() {
    var letters = /^[A-Za-z]+$/;
    if(letters.test($(this).val())){
      $(this).css("border","green 2px solid");
    }
    else{
      $(this).css("border","red 2px solid");
    }
  });

  $(".emailClass>input").on("blur", function isValidEmail() {
    var emailReg = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if(emailReg.test($(this).val())){
      $(this).css("border","green 2px solid");
    }
    else{
      $(this).css("border","red 2px solid");
    }
  });


  $("#file").on('change', function() {
    if (this.files[0].size > 6291456) {
      $('.fileInfo').text("Uploaded file should be less than 6MB.").css("color","red");
    }
});

//Pop up cookie window.
$('#cross-btn').on('click', function closeWindow() {
  $('#pop-window').hide();
})

  $('#cp').on('click', function closeWindow() {
    $('#pop-window').show();
  })

  $(".passwordClass>input").on("blur", function isValidPassword(){
    var passRegx =  /(?=.*[!#$%&?^*@~() "])(?=.{6,})/;
    if(passRegx.test($(this).val())){
      $(this).css("border","green 2px solid");
    }
    else{
      $(this).css("border","red 2px solid");
    }
  });

});

$("#loginGoogleBtn").on("click", function redirectUer() {
  $(window.location)[0].replace("https://accounts.google.com/o/oauth2/v2/auth?response_type=code&access_type=online&client_id=1064476256339-58t8onva2r4dfphmj8mcmm7fuidv9era.apps.googleusercontent.com&redirect_uri=http%3A%2F%2Fsocial.com%2Fgooglevalidation&state&scope=email%20profile&approval_prompt=auto");
});


$('#agree').on("click", function setCookie() {
  var option = true;
  localStorage.setItem("cookiePolicy", JSON.stringify(option));
  $('.cookie-container').fadeOut();
});

$('#disAgree').on("click", function removeCookie() {
  var option = false;
  localStorage.setItem("cookiePolicy", JSON.stringify(option));
  $('.cookie-container').fadeOut();
});

setTimeout(() => {
  $('.cookie-container').fadeOut();
}, 0.1);

