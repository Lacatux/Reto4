<?php
function conectarBD(){
  //$MYDB = "(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = 192.168.6.172)(PORT = 1539))(CONNECT_DATA = (SERVER = DEDICATED)(SERVICE_NAME = XE)))";
  $connect = oci_connect("logingenerico", "Nombre_Generico2020", "192.168.6.172:1539/xe");
  if ($connect) {
    echo "Conectado";
  }else {
    echo "Error de conexion";
  }
oci_close($connect);

  /*$mysqli = new mysqli ("127.0.0.1", "phpRoot", "123", "mastodon");
  if ($mysqli->connect_errno) {
    echo "Fallo en la conexion: ".$mysqli->connect_errno;
  }*/
  return $connect;
}
//====================================================================
?>
