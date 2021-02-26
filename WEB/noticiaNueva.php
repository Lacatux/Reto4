<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Centro de Estudios Almi</title>
    <link rel="stylesheet" href="css/comun.css">
    <link rel="stylesheet" href="css/noticiaNueva.css">

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
          echo "<a href='alumno.php' id='login'>".$_SESSION['user']."</a>";
        }elseif ($_SESSION["tipoUser"] == 2) {
          echo "<a href='php/cerrarSesion.php' id='login'>Cerrar Sesion</a>";
          echo "<div id='desplegable'>";
          echo "<button id='dropbtn' onclick='myFunction()'>".$_SESSION["nombre"]."";
          echo "</button>";
          echo "<div class='dropdown-content' id='myDropdown'>";
          echo "<a href='noticiaNueva.php' id='enlace'>Noticia Nueva</a>";
          echo "</div></div>";
        }else {
          echo "<div id='desplegable'>";
          echo "<button id='dropbtn' onclick='myFunction()'>Intranet";
          echo "</button>";
          echo "<div class='dropdown-content' id='myDropdown'>";
          ?>
          <form id="formLogin" action="php/login.php" method="post">
            <label for="dni">DNI</label><br>
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

  <div id="cuerpo">


    <div id="noticias">
      <h1>Crear Noticia Nueva</h1>

      <form id="formNoticia" action="php/noticiaNueva.php" method="post">
          <label for="titulo">Titulo</label><br>
          <input type="text" name="titulo"><br><br>
          <label for="cuerpo">Cuerpo</label><br>
          <textarea class='textazo' name="cuerpo" rows="8" cols="50"></textarea><br><br>
        <?php
            echo "<input type='hidden' name='idProfesor' value='".$_SESSION['idUser']."'>";
        ?>
          <label for="resumen">Resumen</label><br>
          <input type="text" name="resumen"><br><br>
        <?php
            $fecha = date('d-m-Y');
            echo "<input id='txt' type='hidden' name='fecha' value='".$fecha."'><br>";
        ?>
          <input id="enviar" type="submit" value="Enviar"/>

        </form>
    </div>
          
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
