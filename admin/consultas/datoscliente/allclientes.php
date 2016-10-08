<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Alquilauto Mérida - Rueda contigo</title>
<link type="text/css" rel="stylesheet" href="../../../css/estilos.css" media="screen"/>
<link href="../../../favicon.ico" rel='shortcut icon' type='image/x-icon'/>
<link href="../../../favicon.ico" rel='icon' type='image/x-icon'/>

<style type="text/css">
#pagina,#reserva-ahora,.cont{
	height:auto;
}
#reserva-ahora,.cont{
	margin-bottom:100px;
}
</style>

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
  	<a href="http://www.alquilauto.com.ve" title="Alquilauto Mérida">
    	<img src="../../../img/logo-alquilauto.png" style="border:none"/>
    </a> 
  </div>
 
</div>
<div id="pagina">

<div class="cont" style="margin-top:20px;">

<h2>Consulta de Datos del Cliente</h2>
<br />
<?php


include ('../../../conexion.php');
	
		$consulta="SELECT * FROM cliente ORDER BY cedula_c";
		$resultado= mysqli_query($link,$consulta);
		
			echo "<table border='0' cellpadding='2'><tr align='center'><th   align='center' bgcolor='#FF3338'><font color='#FFF'>Cédula</font></th><th  align='center' bgcolor='#FF3338'>Nombre</th><th   align='center' bgcolor='#FF3338'>Email</th><th   align='center' bgcolor='#FF3338'>País</th><th   align='center' bgcolor='#FF3338'>Teléfono";

while ($fila= mysqli_fetch_row($resultado)){
	echo "<tr align='center'>";
	for($i=0;$i < mysqli_num_fields($resultado);$i++){
		echo "<td  align='center' bgcolor='#FFF'>".$fila[$i]."</td>";
	}
	echo "</tr>";
}
echo "</table>";
?>

</div>

</div>

<div> <img src="../../../img/sepa.png" id="sepa" /> </div>

<div id="pie">
<div id="logo-pie">
</div>
<a name="legal" id="legal">Todos los derechos reservados. - Asociación Cooperativa Alquilauto Mérida R.L. J-31737447-9, Mérida-Venezuela</a></div>
</body>
</html>
