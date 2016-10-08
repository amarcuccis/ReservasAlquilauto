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
  <li><img src="../../img/home.png" width="40" height="40" style="padding-right:15px;cursor:pointer;" title="Inicio" onclick="location.href='/cliente'" /></li>
    <li><a href="../">Cliente</a></li>
    <li><a href="../registrar" id="activo">Registrar Reserva</a></li>
    <li><a href="../consultar">Consultar Reserva</a></li>
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

$nombre_c = $_POST['nombre_c'];
$cedula_c = $_POST['cedula_c'];
$coment_r = $_POST['coment_r'];
$email_c = $_POST['email_c'];
$telefono_c = $_POST['telefono_c'];
$pais_c = $_POST['pais_c'];
$fecha_s_r = $_POST['fecha_s_r'];
$hora_s_r = $_POST['hora_s_r'];
$fecha_e_r = $_POST['fecha_e_r'];
$hora_e_r = $_POST['hora_e_r'];
$codigo_v = $_POST['codigo_v'];

$estado_r='SR';

if (!isset($_POST['portabebe_r'])){
	$portabebe_r='No';
}
else{
	$portabebe_r='Si';
}
if (!isset($_POST['gps_r'])){
	$gps_r='No';
}
else{
	$gps_r='Si';
}

if ($codigo_v=='1') {
	$precio_r='2490';
	$tipo_v='RUS';
}
if ($codigo_v=='2'){
	$tipo_v='CS';
	$precio_r='1098';
}
if ($codigo_v=='3' or $codigo_v=='5'){
	$precio_r='1036';
	$tipo_v='CA';
}
if ($codigo_v=='4' or $codigo_v=='6'){
	$precio_r='1098';
	$tipo_v='SA';
}

$link->query("INSERT INTO cliente (nombre_c,cedula_c,email_c,telefono_c,pais_c) VALUES ('$nombre_c','$cedula_c','$email_c','$telefono_c','$pais_c')");

$link->query("INSERT INTO reserva (cedula_c,codigo_v,fecha_e_r,fecha_s_r,hora_e_r,hora_s_r,portabebe_r,gps_r,coment_r,precio_r,estado_r) VALUES ('$cedula_c','$codigo_v','$fecha_e_r','$fecha_s_r','$hora_e_r','$hora_s_r','$portabebe_r','$gps_r','$coment_r','$precio_r','$estado_r')");

printf ("La reservación fue registrada con éxito bajo el código <strong> %d </strong>. Por favor guarde éste número para que realice sus consultas en el futuro.\n", mysqli_insert_id($link));

echo "</br>";


//}
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
