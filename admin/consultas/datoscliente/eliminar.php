<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

include ('../../../conexion.php');

$cedula_c = $_GET['cedula_c'];
	
$link->query("DELETE FROM cliente WHERE cedula_c='$cedula_c'");


echo "<script type='text/javascript'>";
	echo "alert('Registro de cliente eliminado con éxito.');";
	echo "location.href='/sistematesis/admin/consultas/datoscliente/';";
	echo "</script>";

?>