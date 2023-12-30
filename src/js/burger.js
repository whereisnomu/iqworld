$(document).ready(function () {
  $(".burger").click(function () {
    $(".burger, .navigation").toggleClass("active");
    $("body").toggleClass("lock"); /*тоже самое с тегом Body*/
  });

  $("nav.navigation").click(function () {
    $(".navigation").toggleClass("active");
  });
});
