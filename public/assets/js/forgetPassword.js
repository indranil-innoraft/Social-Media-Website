//When page refresh a loader will apper.
$(window).on('load', function () {
    $('#loading').fadeOut('slow', function () {
  });
});

//On invalid inputs a error message will show to the user.
$('input[type=email]').on('invalid', function showErrors(element) {
  element.preventDefault();
  $('#invalidEmail').slideDown();
});

//After every keydown previous error need to disapper.
$('input[type=email]').on('keyup', function hideErrors() {
  $('.error').hide();
  $('#invalidEmail').hide();
});
