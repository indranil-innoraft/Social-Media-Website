//When page refresh a loader will apper.
$(window).on('load', function () {
  setTimeout(function(){
    $('#loading').fadeOut('slow', function () {
    });
},1500);
});

//
$('input[type=email]').on('invalid', function showErrors(element) {
  element.preventDefault();
  $('#invalidEmail').slideDown();
});

//W
$('input[type=email]').on('keyup', function hideErrors() {
  $('.error').hide();
  $('#invalidEmail').hide();
})
