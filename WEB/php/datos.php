<?php
function conectarBD(){
  //DESCRIPCION DE LA BASE DE DATOS (IP, PUERTO...)
  $db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL =TCP)
  (HOST = 192.168.6.172)(PORT = 1539)))(CONNECT_DATA=(SID=XE)))";
  //INTENTO DE CONEXION DE LA BASE DE DATOS
  $conn = oci_connect('basegenerica', 'Nombre_Generico2020', $db);
  if (!$conn) {
      $e = oci_error();
      trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
  }
  return $conn;
  oci_close($conn);
}//FIN FUNCION conectarBD
//====================================================================
function loginProfesor($dni, $pass){
  $conex = conectarBD();
  $stid = oci_parse($conex, "SELECT * FROM PROFESOR WHERE DNI= :dni AND CONTRASENA= :pass ");
  oci_bind_by_name($stid, ":dni", $dni);
  oci_bind_by_name($stid, ":pass", $pass);
  oci_execute($stid);
  $usuario = array();
  if ($row = oci_fetch_array($stid)) {
    $usuario = array(
      "id" => $row[0],
      "nombre" => $row[1],
      "apellidos" => $row[2],
      "dni" => $row[3],
      "fechaNac" => $row[4],
      "pass" => $row[5]
    );
  }
  oci_free_statement($stid);
  return $usuario;
}//FIN FUNCION loginProfesor
//====================================================================
function loginAlumno($dni, $pass){
  $conex = conectarBD();
  $stid = oci_parse($conex, "SELECT * FROM ALUMNO WHERE DNI= :dni AND CONTRASENA= :pass ");
  oci_bind_by_name($stid, ":dni", $dni);
  oci_bind_by_name($stid, ":pass", $pass);
  oci_execute($stid);
  $usuario = array();
  if ($row = oci_fetch_array($stid)) {
    $usuario = array(
      "id" => $row[0],
      "nombre" => $row[1],
      "apellidos" => $row[2],
      "dni" => $row[3],
      "fechaNac" => $row[4],
      "pass" => $row[5]
    );
  }
  oci_free_statement($stid);
  return $usuario;
}//FIN FUNCION loginAlumno
//====================================================================
function getNoticias(){
  $conex = conectarBD();
  $stid = oci_parse($conex, "SELECT * FROM NOTICIA ORDER BY FECHA DESC");
  oci_execute($stid);
  $noticiasArray = array();
  while ($row = oci_fetch_array($stid)) {
    $noticia = array(
      "id" => $row[0],
      "titulo" => $row[1],
      "cuerpo" => $row[2],
      "profesor" => $row[3],
      "fecha" => $row[4],
      "imagen" => $row[5]
    );
    $noticiasArray[] = $noticia;
  }
  oci_free_statement($stid);
  return $noticiasArray;

}//FIN FUNCION getNoticias
//====================================================================
function getNotasByUser($user)
{
  $conex = conectarBD();
  $stid = oci_parse($conex, "SELECT ASIGNATURA.NOMBRE, MATRICULA.NOTA FROM MATRICULA INNER JOIN ASIGNATURA ON ASIGNATURA.ID_ASIGNATURA = MATRICULA.ASIGNATURA WHERE MATRICULA.ALUMNO =:usuario");
  
  oci_bind_by_name($stid, ":usuario", $user);
  oci_execute($stid);

  $notas = array();
  if ($row = oci_fetch_array($stid)) {
    $notas = array(
      "nombre" => $row[0],
      "nota" => $row[1]
    );
  }
  var_dump($notas);
  oci_free_statement($stid);
  return $notas;

}//FIN FUNCION getNotasByUser
//====================================================================
?>
