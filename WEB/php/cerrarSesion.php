<?php
  session_start();
  unset($_SESSION['user']);
  unset($_SESSION['idUser']);
  unset($_SESSION['nombre']);
  unset($_SESSION['tipoUser']);
  header("location: ../index.php");
 ?>
