<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

include ('../../../conexion.php');

$codigo_r = $_GET['codigo_r'];
	
$link->query("DELETE FROM reserva WHERE codigo_r='$codigo_r'");


echo "<script type='text/javascript'>";
	echo "alert('Registro de solicitud reserva eliminado con éxito.');";
	echo "location.href='/sistematesis/admin/consultas/';";
	echo "</script>";

?>