<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

include ('../../conexion.php');

$cedula_c = $_GET['cedula_c'];
$codigo_r = $_GET['codigo_r'];

$link->query("DELETE FROM cliente WHERE cedula_c='$cedula_c'");
$link->query("DELETE FROM reserva WHERE codigo_r='$codigo_r'");

echo "<script type='text/javascript'>";
	echo "alert('Registro de reserva eliminada con éxito.');";
	echo "location.href='/sistematesis/cliente/';";
	echo "</script>";

?>