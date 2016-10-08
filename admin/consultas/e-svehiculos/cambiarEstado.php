<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

include ('../../../conexion.php');

$cedula_c = $_POST['check_r'];
if (isset($_POST['aprobarB'])){
	$cambio='A';
}
elseif (isset($_POST['desaprobarB'])){
	$cambio='D';
}
	
$link->query("UPDATE reserva SET estado_r='$cambio' WHERE cedula_c='$cedula_c'");

echo "<script type='text/javascript'>";
	echo "alert('Estado de reserva actualizado con éxito.');";
	echo "location.href='index.php';";
	echo "</script>";

?>