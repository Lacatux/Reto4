<?php
function conectarBD()
{
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
function loginUser($dni, $pass)
{
  //CONEXION DE LA BBDD
  $conex = conectarBD();
  //SELECCIONAR DATOS EN UNA SELECT
  $sentencia = "SELECT * FROM profesor WHERE dni = 'admin' AND contraseña = 'admin'" ;
  $sql = oci_parse($conex, $sentencia);
  //EJECUTAR SENTENCIA
  $ejecutar = oci_execute($sql);

  //ASOCIAR PARAMETROS
  $nombre="";
  $vincular =oci_bind_by_name($sql, "nombre", $nombre);
  var_dump($vincular);






  return $datos;
}//FIN FUNCION loginUser
//====================================================================
?>
