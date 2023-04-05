$(".profile .icon_wrap").click(function(){
    $(this).parent().toggleClass("active");
    $(".notifications").removeClass("active");
  });

  $(".notifications .icon_wrap").click(function(){
    $(this).parent().toggleClass("active");
     $(".profile").removeClass("active");
  });

  $(".show_all .link").click(function(){
    $(".notifications").removeClass("active");
    $(".popup").show();
  });

  $(".close, .shadow").click(function(){
    $(".popup").hide();
  });

  $('#show-more-btn').click(function() {
    $("#show-more-content").toggle("show", function() {

    });
  })

  $(window).on('load', function () {
    $('#loading').hide();
  })

  var x = 10;

  $(document).ready(() => {
    $("#imagePreview").css("display", "none");
    $("#create-post-media").change(function () {
      const file = this.files[0];
      if (file) {
        let reader = new FileReader();
        reader.onload = function (event) {
          $("#imagePreview").attr("src", event.target.result);
          $("#imagePreview").css("display", "block");
        };
        reader.readAsDataURL(file);
      }
      else {
        $("#imagePreview").css("display","none");
      }
    });
  });
  $( window ).on( "load", function() {
    $(".container-post-frame > section:nth-child(-n + "+x+" ").css("display", "block");
    x += 10;
  })

  $('.show-more-btn > button').click(function() {
    $(".container-post-frame > section:nth-child(-n + "+x+" ").css("display", "block");
    x += 10;
  })

  $('#scroll').click(function (e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: 0 }, '1000');
  });
$(window).scroll(function () {
  var scroll = $(window).scrollTop();
  if (scroll >= 300) {
    $("#scroll").addClass("show");
  }
  else {
    $("#scroll").removeClass("show");
  }
});
var themeBtn = document.getElementById("theme");
var themeIcon = document.getElementById("themeIcon");
var themeText = document.getElementById("themeText");

themeBtn.onclick = function () {
  var theme;
  document.body.classList.toggle("dark-theme");
  if(document.body.classList.contains("dark-theme")) {
    themeText.innerHTML = "Light theme";
    theme = "light";
  }
  else {
    themeText.innerHTML = "Dark theme";
    theme = "dark";
  }
  localStorage.setItem("PageTheme", JSON.stringify(theme));
}

setInterval(() => {
  let getTheme = JSON.parse(localStorage.getItem("PageTheme"));
  if (getTheme === "dark") {
    document.body.classList.remove("dark-theme");
    themeText.innerHTML = "Dark theme";
  }else{
    document.body.classList.add("dark-theme");
    themeText.innerHTML = "Light theme";
  }
}, 1);

$('.fa-regular').on("click", function() {
  $(this).toggleClass("fa-solid").css("color","red");
});
