<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Alquilauto Mérida - Rueda contigo</title>
<link type="text/css" rel="stylesheet" href="../../../css/estilos.css" media="screen"/>
<link href="../../../../favicon.ico" rel='shortcut icon' type='image/x-icon'/>
<link href="../../../favicon.ico" rel='icon' type='image/x-icon'/>

</head>

<body>
<div id="menu">
   <ul>
   <li><img src="../../../img/home.png" width="40" height="40" style="padding-right:15px;cursor:pointer;" title="Inicio" onclick="location.href='/admin'" /></li>
    <li><a href="../index.php">Consultas</a></li>
    <li><a href="../datoscliente" id="activo">Datos del Cliente</a></li>
    <li><a href="../reservas">Reservas</a></li>
    <li><a href="../e-svehiculos">Estado de Reservas</a></li>
  </ul>
</div>
<div id="fondo"/>
<div id="cabecera">
  <div id="logo">
  	<a href="../index.php" title="Alquilauto Mérida">
    	<img src="../../../img/logo-alquilauto.png" style="border:none"/>
    </a> 
  </div>
 
</div>
<div id="pagina">
<div class="cont" style="margin-top:20px;">

<?php


include ('../../../conexion.php');

$nombre_c = $_POST['nombre_c'];
$cedula_c = $_POST['cedula_c'];
$email_c = $_POST['email_c'];
$telefono_c = $_POST['telefono_c'];
$pais_c = $_POST['pais_c'];

$link->query("UPDATE cliente SET cedula_c='$cedula_c', nombre_c='$nombre_c', email_c='$email_c', pais_c='$pais_c', telefono_c='$telefono_c' WHERE cedula_c='$cedula_c'") or die (mysqli_error($link)); 

echo "La actualización del registro del cliente C.I. <strong>".$cedula_c."</strong> ha sido modificado satisfactoriamente.";
echo "</br>";
?>

</div>

</div>

<div> <img src="../../../img/sepa.png" id="sepa" /> </div>

<div id="pie">
<div id="logo-pie">
</div>
<a name="legal" id="legal">Todos los derechos reservados. - Asociación Cooperativa Alquilauto Mérida R.L. J-31737447-9, Mérida-Venezuela</div>
</body>
</html>
