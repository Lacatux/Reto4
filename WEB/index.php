<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Centro de Estudios Almi</title>
    <link rel="stylesheet" href="css/comun.css">

    <script src="js/scrollDown.js">
    </script>
    <?php
    include("php/datos.php")
    ?>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
  </head>
  <body>
  <div id='menu'>
    <a href="#" id='logo'>Centro de Estudios Almi</a>
      <div id="menu-derecha">
        <a href="#" id='login'>Area Profesores</a>
        <!-- IF PROFESORES -->
        <!-- <a href="#" id='login'>Alta Profesor</a> -->
        <!-- <a href="#" id='login'>Alta Estudiante</a> -->
        <!-- <a href="#" id='login'>Area Profesores</a> -->

        <a href="#" id='login'>Area Estudiantes</a>
        <a href="#" id="nav">Informacion Academica</a>
        <a href="#" id="nav">Donde Estamos</a>
        <a href="#" class="active" id='nav'>Inicio</a>
      </div>
  </div>

  <div id="cuerpo">
<?php
$conexion = conectarBD();
var_dump($conexion);
 ?>
  </div>
  <div id="pie">
    <div class="redes">
      <p>Nuestras Redes Sociales</p>
      <a href="#"><img src="source/images/FacebookLogo.png" alt="Facebook Logo" id="fb" class="social"></a>
      <a href="#"><img src="source/images/InstagramLogo.png" alt="Instagram Logo" id="in" class="social"></a>
      <a href="#"><img src="source/images/TwitterLogo.png" alt="Twitter Logo" id="tw" class="social"></a>
    </div>

  </div>
  </body>
</html>
