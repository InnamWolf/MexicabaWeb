//* ===============================================
//* Animate menu
//* ===============================================

$(document).ready(function () {
  $('.menu').click(function () {
    $('.navItem').slideToggle(900);
  });

  $('#contact').click(function () {
    $('.subMenu').slideToggle(700); //Abre uno
    $('.subMenuTwo').slideUp(700); //Cierra otro
    return false;
  });

  $('#resources').click(function () {
    $('.subMenuTwo').slideToggle(700); //Abre uno
    $('.subMenu').slideUp(700); //Cierra otro
    return false;
  });
});