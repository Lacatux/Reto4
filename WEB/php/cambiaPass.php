<?php
  include "datos.php";
  
  $resultado = cambiarPassAlumno($_POST['idUser'], $_POST['passOld'], $_POST['passNew']);
  header("location: ../alumno.php");
?>