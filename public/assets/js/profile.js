$(window).on('load', function () {
  $('#loading').hide();
}) 

setInterval(() => {
  let getTheme = JSON.parse(localStorage.getItem("PageTheme"));
  if(getTheme === "dark"){
    document.body.classList.remove("dark-theme");
  }else{
    document.body.classList.add("dark-theme");
  }
}, 1);
