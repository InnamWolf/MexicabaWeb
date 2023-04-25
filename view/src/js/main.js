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

//* ===============================================
//* Animate General
//* ===============================================

//Animate button page Conocenos  que es mexicana Mas
$(document).ready(function () {
  $('.btnMas').click(function () {
    $('.txtOculto').slideToggle(700);
  });
});

//* ===============================================
//* Animar elementos con Top
//* ===============================================

$(window).scroll(() => {
  const titleBenef = document.querySelector('.titleBenef');
  const titleFunciona = document.querySelector('.titleFunciona');
  const titlePlanes = document.querySelector('.titlePlanes');
  const titleCarrusel = document.querySelector('.titleCarrusel');
  const titleFaq = document.querySelector('.titleFaq');

  let scrollTop = $(window).scrollTop();
  //Titulo prinicpales beneficios
  if (scrollTop > 50) {
    titleBenef.classList.add('animate__animated', 'animate__fadeInDown');
    titleBenef.style.setProperty('--animate-duration', '1s');
  }
  //Titulo como funciona
  if (scrollTop > 700) {
    titleFunciona.classList.add('animate__animated', 'animate__fadeInDown');
    titleFunciona.style.setProperty('--animate-duration', '1s');
  }
  //Titulo como funciona
  if (scrollTop > 1200) {
    titlePlanes.classList.add('animate__animated', 'animate__fadeInDown');
    titlePlanes.style.setProperty('--animate-duration', '1s');
  }

  //Titulo carrusel
  if (scrollTop > 2300) {
    titleCarrusel.classList.add('animate__animated', 'animate__fadeInDown');
    titleCarrusel.style.setProperty('--animate-duration', '1s');
  }

  //Titulo frecuentes
  if (scrollTop > 2900) {
    titleFaq.classList.add('animate__animated', 'animate__fadeInDown');
    titleFaq.style.setProperty('--animate-duration', '1s');
  }
});

//* ===============================================
//* Carousel
//* ===============================================

$('.owl-carousel').owlCarousel({
  loop: true,
  autoplay: true,
  autoplayTimeout: 5000,
  autoplayHoverPause: true,
  center: true,
  items: 1,
  margin: 12,
  responsiveClass: true,
  responsive: {
    0: {
      items: 1,
    },
  },
});

//* ===============================================
//* Cerrar videos de la modal
//* ===============================================

$('.videoPlanes').click(() => {
  $('.videoYou').attr(
    'src',
    'https://www.youtube-nocookie.com/embed/_ng6wuoxpd0'
  );
});
$('.btnVideo').click(() => {
  $('.videoYou').attr(
    'src',
    'https://www.youtube-nocookie.com/embed/m4N5IbnGNOY'
  );
});
$('.btnTestimoniales').click(() => {
  $('.videoYou').attr(
    'src',
    'https://www.youtube.com/embed/videoseries?list=PL4Y7Fm_LIJ7-88_SW_t9KLNZEPO6mdjaO'
  );
});
$('.btnVidConocenos').click(() => {
  $('.videoYou').attr('src', 'https://www.youtube.com/embed/UQKSCIMFpLI');
});
$('.close-modal').click(() => {
  $('.videoYou').removeAttr('src');
});

$('.gifTitulo01').click(function () {
  const element01 = document.querySelector('.animaTitulo01');
  const element02 = document.querySelector('.animaTitulo02');
  const element03 = document.querySelector('.animaTitulo03');

  element01.classList.add('animate__animated', 'animate__tada');
  element02.classList.remove('animate__animated', 'animate__tada');
  element03.classList.remove('animate__animated', 'animate__tada');
});

$('.gifTitulo02').click(function () {
  const element01 = document.querySelector('.animaTitulo01');
  const element02 = document.querySelector('.animaTitulo02');
  const element03 = document.querySelector('.animaTitulo03');

  element01.classList.remove('animate__animated', 'animate__tada');
  element02.classList.add('animate__animated', 'animate__tada');
  element03.classList.remove('animate__animated', 'animate__tada');
});

$('.gifTitulo03').click(function () {
  const element01 = document.querySelector('.animaTitulo01');
  const element02 = document.querySelector('.animaTitulo02');
  const element03 = document.querySelector('.animaTitulo03');

  element01.classList.remove('animate__animated', 'animate__tada');
  element03.classList.add('animate__animated', 'animate__tada');
  element02.classList.remove('animate__animated', 'animate__tada');
});

//* ===============================================
//* POPPER
//* ===============================================
const popoverTriggerList = document.querySelectorAll(
  '[data-bs-toggle="popover"]'
);
const popoverList = [...popoverTriggerList].map(
  (popoverTriggerEl) => new bootstrap.Popover(popoverTriggerEl)
);


//* ===============================================
//* Activar animacion Opacity
//* ===============================================
$('#option1').click(function () {

  $('#option1').css('opacity', '1');
  $('#option2').css('opacity', '0.2');
  $('#option3').css('opacity', '0.2');

});

$('#option2').click(function () {

  $('#option2').css('opacity', '1');
  $('#option1').css('opacity', '0.2');
  $('#option3').css('opacity', '0.2');

});

$('#option3').click(function () {

  $('#option3').css('opacity', '1');
  $('#option1').css('opacity', '0.2');
  $('#option2').css('opacity', '0.2');

});

//* ===============================================
//* SLICK ANIMATION
//* ===============================================
$(document).ready(function () {

  $('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav'
  });

  $('.slider-nav').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    centerMode: true,
    focusOnSelect: true
  });


});

//* ===============================================
//* Animar AOS
//* ===============================================
AOS.init({
  duration: 1200
});


//* ===============================================
//* Animate element
//* ===============================================

// Animate button page Conocenos
const imgTops = document.querySelector('.btnCalAnimate');
imgTops.classList.add('animate__animated', 'animate__heartBeat', 'animate__infinite');
imgTops.style.setProperty('--animate-duration', '3s');

// Animate Title page Conocenos que es mexicana 
const titleWhat = document.querySelector('.tituloQueEs');
titleWhat.classList.add('animate__animated', 'animate__fadeInDown');
titleWhat.style.setProperty('--animate-duration', '2s');
