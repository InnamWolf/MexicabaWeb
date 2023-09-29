<!--===============================================
Movil Nav
=================================================-->
<nav class="movil">
  <div class="logo">
    <i class="fa fa-bars menu" id="menu" aria-hidden="true"></i>
    <a href="conocenos"><img src="view/src/img/logoMb.svg" alt="logo"></a>    
  </div>
  <div class="navItem">
    <div class="button">
      <a class="btnContratar" href="https://www.mb.com.mx/home/Calculadora-MB/" class="btn btn-sm">CONTRATAR UN PLAN</a>
    </div>    
    <a href="conocenos" class="link">CONÓCENOS</a>
    <a href="porque" class="link">¿POR QUÉ AHORRAR PARA LA EDUCACIÓN?</a>
    <a href="https://www.mb.com.mx/home/Calculadora-MB/" class="link">CALCULA CUÁNTO COSTARÁ SU EDUCACIÓN</a>
    <a href="masBeneficios" class="link">MÁS BENEFICIOS</a>
    <a href="https://www.becasmb.com/soy-cliente/" class="link">SOY CLIENTE</a>
    <a href="#" class="link" id="contact">CONTACTO  <i class="fa-solid fa-caret-down"></i></a>
    <div class="subMenu">
      <a href="meInteresa" class="link">Me interesa conocer más</a>
      <a href="soycliente" class="link">Soy cliente y tengo una consulta</a>
    </div>
    <a href="recursos" class="link">RECURSOS</a>       
  </div>        
</nav>

<!--===============================================
Desktop Nav
=================================================-->
<nav class="desktop">
  <div class="logo">    
    <a href="conocenos"><img src="view/src/img/logoMb.svg" alt="logo"></a>
    <div class="button">
      <a class="btnContratar" href="https://www.mb.com.mx/home/Calculadora-MB/" >CONTRATAR UN PLAN</a>
    </div>  
  </div>
  <div class="navItem">
    <ul class="nav nav-pills navIn">
      <li class="nav-item cleanBorder"><a class="nav-link" href="conocenos">CONÓCENOS</a></li>      
      <li class="nav-item"><a class="nav-link" href="porque">¿POR QUÉ AHORRAR <br> PARA LA EDUCACIÓN?</a></li>      
      <li class="nav-item"><a class="nav-link" href="https://www.mb.com.mx/home/Calculadora-MB/">CALCULA CUÁNTO <br> COSTARÁ SU EDUCACIÓN</a></li>      
      <li class="nav-item"><a class="nav-link" href="masBeneficios">MÁS BENEFICIOS</a></li>      
      <li class="nav-item"><a class="nav-link" href="https://www.becasmb.com/soy-cliente/">SOY CLIENTE</a></li>      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">CONTACTO</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="meInteresa">Me interesa conocer más</a></li>
          <li><a class="dropdown-item" href="soycliente">Soy cliente y tengo una consulta</a></li>        
        </ul>        
      </li>
       <li class="nav-item"><a class="nav-link" href="recursos">RECURSOS</a></li>   
    </ul>
  </div>  
</nav>

<script>
//* ===============================================
//* Animate element
//* ===============================================
const imgTop = document.querySelector('.btnContratar');
imgTop.classList.add('animate__animated', 'animate__heartBeat', 'animate__infinite');
imgTop.style.setProperty('--animate-duration', '3s');
</script>