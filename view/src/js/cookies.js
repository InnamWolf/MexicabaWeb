//* ===============================================
//* Aviso cookies
//* ===============================================

const btnAceptar = document.querySelector('#aceptar');
const avisoCookies = document.querySelector('#cookie');
const fondo = document.querySelector('#fondo-cookie');


if(!localStorage.getItem('cookies-aceptadas')){
  avisoCookies.classList.add('activo');
  fondo.classList.add('activo');
}

btnAceptar.addEventListener('click',()=>{

  avisoCookies.classList.remove('activo');
  fondo.classList.remove('activo');

  localStorage.setItem('cookies-aceptadas', true);

});