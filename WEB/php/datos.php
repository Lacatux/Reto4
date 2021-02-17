<?php
function conectarBD(){
  $db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL =TCP)
  (HOST = 192.168.6.172)(PORT = 1539)))(CONNECT_DATA=(SID=XE)))";

  $conn = oci_connect('basegenerica', 'Nombre_Generico2020', $db);
  if (!$conn) {
      $e = oci_error();
      trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
  }
  return $conn;

  oci_close($conn);
}
//====================================================================
function pruebaSel(){
  $conn = conectarBD();
  $stid = oci_parse($conn, "SELECT * FROM profesor");
  oci_execute($stid);

  echo "<table border='1'>\n";
  while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    echo "<tr>\n";
    foreach ($row as $item) {
        echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "") . "</td>\n";
    }
    echo "</tr>\n";
}
echo "</table>\n";

}
?>
