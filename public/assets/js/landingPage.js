
$(document).ready(function(){ 

  $(".firstName>input").keyup(function(){ 
    var letters = /^[A-Za-z]+$/;
    if(letters.test($(this).val())){ 
      $(this).css("border","green 2px solid"); 
    }
    else{ 
      $(this).css("border","red 2px solid"); 
    }
  }); 

  $(".lastName>input").keyup(function(){ 
    var letters = /^[A-Za-z]+$/;
    if(letters.test($(this).val())){ 
      $(this).css("border","green 2px solid"); 
    }
    else{ 
      $(this).css("border","red 2px solid"); 
    }
  });

  $(".emailClass>input").keyup(function(){ 
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

  $(".passwordClass>input").keyup(function(){ 
    var passRegx =  /(?=.*[!#$%&?^*@~() "])(?=.{6,})/;
    // if ($(this).val().length < 2 ) {
    //   $(".passwordClass>.helpPassword").text("Password is too short.").css("color","red");
    // }
    // else if ($(this).val().length < 6 ) {
    //   $(".passwordClass>.helpPassword").text("Media strength password").css("color","orange");
    // }
    // else if ($(this).val().length > 6) {
    //   $(".passwordClass>.helpPassword").text("Good strength password").css("color","green");
    // }
    if(passRegx.test($(this).val())){ 
      $(this).css("border","green 2px solid"); 
    }
    else{ 
      $(this).css("border","red 2px solid"); 
    }

  });

}); 

// $(".email-input").focusout(function () {
//   $.ajax({
//     url: "/register",
//     method: "POST",
//     data: { emailAddress: $(this).val() },
//     datatype: "text",
//     success: function () {
//       $(".otpCheck").removeClass('disabledField');
//     },
//   })
// });

// $(".otpCheck").focusout(function () {
//   $.ajax({
//     url: "/sendotponregistration",
//     method: "POST",
//     data: { otpCheck: $(this).val() },
//     datatype: "text",
//     success: function (data) {
//       if(data) {
//         $(".otpCheck").css("border", "2px solid green");
//       }
//     },
//   })
// });

