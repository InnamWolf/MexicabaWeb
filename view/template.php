<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <!--===============================================
  Lib CSS
  =================================================-->
  <link rel="stylesheet" href="view/src/css/main.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
  <!-- Boostrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- AnimateCss -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <!-- Carrusel -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
  <!-- Add the slick-theme.css if you want default styling -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <!-- Add the slick-theme.css if you want default styling -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
  <!--Animacion-->
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.0/dist/aos.css">


  <!--===============================================
lib js
=================================================-->
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Jquery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- Carousel -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- hola -->
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <!-- Animacion -->
  <script src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>



  <link rel="icon" href="view/img/icono_MB.png" sizes="64x64">


  <title>Mexicana de Becas - Fideicomiso educativo</title>

</head>

<body class="">

  <div class="wrapper">
    <?php
    //* ===============================================
    //* MOBILE AND PC MENU
    //* ===============================================
    include_once 'view/components/nav.php';

    //* ===============================================
    //* WHITE LIST URL
    //* ===============================================
    if (isset($_GET["url"])) {

      if (
        $_GET["url"] == "conocenos" ||
        $_GET["url"] == "porque" ||
        $_GET["url"] == "faq" ||
        $_GET["url"] == "masBeneficios" ||
        $_GET["url"] == "recursos" ||
        $_GET["url"] == "alianzas" ||
        $_GET["url"] == "conNacionales" ||
        $_GET["url"] == "conInternacionales" ||
        $_GET["url"] == "videos" ||
        $_GET["url"] == "soycliente" ||
        $_GET["url"] == "enviar" ||
        $_GET["url"] == "meInteresa"

      ) {

        include "pages/" . $_GET["url"] . ".php";

      } else {

        include "pages/404.php";
      }

    } else {
      include "pages/conocenos.php";
    }
    //* ===============================================
    //* WHATSAPP
    //* ===============================================
    include_once 'view/components/whatsApp.php';

    //* ===============================================
    //* FOOTER
    //* ===============================================    
    include_once 'view/components/footer.php';
    ?>

  </div>

  <script src="view/js/typed.js"></script>
  <script src="view/js/typed_list.js"></script>
  <script src="view/src/js/main.js"></script>

</body>

</html>