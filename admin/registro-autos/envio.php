<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Alquilauto Mérida - Rueda contigo</title>
<link type="text/css" rel="stylesheet" href="../../css/estilos.css" media="screen"/>
<link href="../../favicon.ico" rel='shortcut icon' type='image/x-icon'/>
<link href="../../favicon.ico" rel='icon' type='image/x-icon'/>

</head>

<body>
<div id="menu">
  <ul>
  <li><img src="../../img/home.png" width="40" height="40" style="padding-right:15px;cursor:pointer;" title="Inicio" onclick="location.href='/admin'" /></li>
    <li><a href="../index.php">Admin</a></li>
    <li><a href="../consultas/">Consultas</a></li>
    <li><a href="#" id="activo">Vehículos en Alquiler</a></li>
  </ul>
</div>
<div id="fondo"/>
<div id="cabecera">
  <div id="logo">
  	<a href="../../index.php" title="Alquilauto Mérida">
    	<img src="../../img/logo-alquilauto.png" style="border:none"/>
    </a> 
  </div>
 
</div>
<div id="pagina">
<div class="cont" style="margin-top:20px;">

<?php


include ('../../conexion.php');

$codigo_v = $_POST['codigo_v'];
$modelo_v = $_POST['modelo_v'];
$tipo_v = $_POST['tipo_v'];
$marca_v = $_POST['marca_v'];



$clave= mysqli_query($link,"SELECT * FROM vehiculo WHERE codigo_v='$codigo_v'");


if(mysqli_num_rows($clave) !=0){
	echo "<script type='text/javascript'>";
	echo "alert('Ya existe un vehículo con este código en nuestro sistema, por favor verifique o consulte la base de datos.');";
	echo "history.back(-1);";
	echo "</script>";
}
else {

mysqli_query($link,"INSERT INTO vehiculo (codigo_v,modelo_v,tipo_v,marca_v) VALUES ('$codigo_v','$modelo_v','$tipo_v','$marca_v')") or die (mysql_error());

echo "El vehículo con código <strong>".$codigo_v."</strong> ha sido ingresado con éxito.";
echo "</br>";


}
?>
</div>

</div>

<div> <img src="../../img/sepa.png" id="sepa" /> </div>

<div id="pie">
<div id="logo-pie">
</div>
<a name="legal" id="legal">Todos los derechos reservados. - Asociación Cooperativa Alquilauto Mérida R.L. J-31737447-9, Mérida-Venezuela</a></div>
</body>
</html>
