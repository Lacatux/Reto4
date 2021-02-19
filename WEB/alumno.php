<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Centro de Estudios Almi</title>
    <link rel="stylesheet" href="css/comun.css">
    <link rel="stylesheet" href="css/alumno.css">

    <script src="js/funcionesJs.js"></script>

    <?php
      session_start();
      include("php/datos.php");
    ?>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
  </head>
  <body>
  <div id='menu'>
    <img src="source/images/AlmiLogo.png" alt="Logo Centro de Estudios Almi" id="logo">
      <div id="menu-derecha">
        <?php
        if ($_SESSION["tipoUser"] == 1) {
          echo "<a href='php/cerrarSesion.php' id='login'>Cerrar Sesion</a>";
          echo "<a href='alumno.php' id='login' class='active'>".$_SESSION['nombre']."</a>";
        }elseif ($_SESSION["tipoUser"] == 2) {
          echo "<a href='php/cerrarSesion.php' id='login'>Cerrar Sesion</a>";
          echo "<div id='desplegable'>";
          echo "<button id='dropbtn' onclick='myFunction()'>".$_SESSION["nombre"]."";
          echo "</button>";
          echo "<div class='dropdown-content' id='myDropdown'>";
          echo "<a href='#' id='enlace'>Buscador</a>";
          echo "<a href='#' id='enlace'>Registro</a>";
          echo "</div></div>";
        }else {
          echo "<div id='desplegable'>";
          echo "<button id='dropbtn' onclick='myFunction()'>Intranet";
          echo "</button>";
          echo "<div class='dropdown-content' id='myDropdown'>";
          ?>
          <form id="formLogin" action="php/login.php" method="post">
            <label for="dni">DNI</label>
            <input type="text" name="dni"><br>
            <label for="pass">Contraseña</label>
            <input type="password" name="pass"><br><br>
            <input id="enviar" type="submit" value="Enviar"/>
          </form>
          <?php
          echo "</div></div>";
        }
        ?>
        <a href="contacto.php" id="nav">Contacto</a>
        <a href="infoAcademica.php" id="nav">Informacion Academica</a>
        <a href="index.php" id="nav">Inicio</a>
      </div>
  </div>
    <?php
    if ($_SESSION["tipoUser"] != 1) {
        header("location: index.php");
    }else {
    ?>
    <div id="cuerpo">
        <div id="infoAlumno">
        <?php
        $notas = getNotasByUser($_SESSION['idUser']);
        echo "<img src='source/images/usuario.svg' alt='Imagen Usuario' id='imgUser'>";
        echo "<a href='' id='cambiarPass'>Cambiar Contraseña</a>";
        echo "<div class= 'floatclear'></div>";
        echo "<h1>".$_SESSION['nombre']."</h1>";
        echo "<h1>".$_SESSION['apellidos']."</h1>";
        echo "<h1>".$_SESSION['dni']."</h1>";
        echo "<h1>".$_SESSION['fechaNac']."</h1>";
        //var_dump($notas);
        ?>
        </div>
 
        

    </div>
    <?php
    }//FINAL DEL ELSE EN CASO DE NO HABER SESION INICIADA
    ?>



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
