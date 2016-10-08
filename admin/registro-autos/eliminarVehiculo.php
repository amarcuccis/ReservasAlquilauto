<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

include ('../../conexion.php');

$codigo_v = $_POST['check_v'];

if (isset($_POST['eliminarB'])){
	$link->query("DELETE FROM vehiculo WHERE codigo_v='$codigo_v'");
}

echo "<script type='text/javascript'>";
	echo "alert('Vehículo eliminado con éxito.');";
	echo "location.href='index.php';";
	echo "</script>";

?>