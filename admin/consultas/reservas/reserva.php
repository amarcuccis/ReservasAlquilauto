<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Alquilauto Mérida - Rueda contigo</title>
<link type="text/css" rel="stylesheet" href="../../../css/estilos.css" media="screen"/>
<link rel="stylesheet" type="text/css" href="../../../css/jquery-ui-1.7.2.custom.css" />
<link rel="image_src" href="http://alquilauto.com.ve/lgo.jpg" />
<link href="../../../favicon.ico" rel='shortcut icon' type='image/x-icon'/>
<link href="../../../favicon.ico" rel='icon' type='image/x-icon'/>

</head>

<body>
<div id="menu">
  <ul>
  <li><img src="../../../img/home.png" width="40" height="40" style="padding-right:15px;cursor:pointer;" title="Inicio" onclick="location.href='/admin'" /></li>
    <li><a href="../index.php">Consultas</a></li>
    <li><a href="../datoscliente" >Datos del Cliente</a></li>
    <li><a href="../reservas" id="activo">Reservas</a></li>
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

<h2>Consulta de Solicitud de Reserva</h2>
  <p>&nbsp;</p>
<?php


include ('../../../conexion.php');

$codigo_r = $_GET['codigo_r'];

global $codigo_r;

$clave= mysqli_query($link,"SELECT * FROM reserva WHERE codigo_r='$codigo_r' ");

if(mysqli_num_rows($clave)==0){
	echo "<script type='text/javascript'>";
	echo "alert('No existe registro de la reserva consultada. por favor verifique los datos ingresados e intente nuevamente.');";
	echo "history.back(-1);";
	echo "</script>";
}
else {	
		$consulta="SELECT * FROM reserva WHERE codigo_r='$codigo_r'";		
		$resultado= mysqli_query($link,$consulta);
		$rowR=mysqli_fetch_array($resultado);
		
		if ($rowR[11]=='SR'){
			$estado_r='Sin Revisar';
			$colorBG='#ccc';
		}
		if ($rowR[11]=='A'){
		$estado_r='Aprobado';
		$colorBG='#00ff00';		
		}
		if ($rowR[11]=='D'){
		$estado_r='Desaprobada';
		$colorBG='#ff0000';		
		}

			echo "<table width='285' border='0'>
  <tr>
    <td width='160'><font color='#000' style='font-weight: bold;'>Código:</font></td>
    <td width='145' bgcolor='#fff'><font color='#000' style='font-weight: bold;' >".$rowR[0]."</font></td>
  </tr>
  <tr>
    <td style='font-weight: bold;'>Fecha Entrada V.:</td>
    <td bgcolor='#fff'>".$rowR[3]."</td>
  </tr>
  <tr>
    <td style='font-weight: bold;'>Hora Entrada V.:</td>
    <td bgcolor='#fff'>".$rowR[5]."</td>
  </tr>
  <tr>
    <td style='font-weight: bold;'>Fecha Salida V.:</td>
    <td bgcolor='#fff'>".$rowR[4]."</td>
  </tr>
  <tr>
    <td style='font-weight: bold;'>Hora Salida V.:</td>
    <td bgcolor='#fff'>".$rowR[6]."</td>
  </tr>
  <tr>
    <td style='font-weight: bold;'>Portabebé:</td>
    <td bgcolor='#fff'>".$rowR[7]."</td>
  </tr>
  <tr>
    <td style='font-weight: bold;'>GPS:</td>
    <td bgcolor='#fff'>".$rowR[8]."</td>
  </tr>
  <tr>
    <td style='font-weight: bold;'>Comentarios:</td>
    <td bgcolor='#fff'>".$rowR[9]."</td>
  </tr>
  <tr>
      <td style='font-weight: bold;'>Estado:</td>
    <td bgcolor='".$colorBG."'>".$estado_r."</td>
  </tr>
  <tr>
    <td style='font-weight: bold;'>Hora de Registro:</td>
    <td bgcolor='#fff'>".$rowR[12]."</td>
  </tr>
</table>";
echo "</br>";
echo "<p><table border='0' cellpadding='2'><tr><th><a class='boton' style='color:#ff0000' href='javascript:preguntar()'>Eliminar Registro</a></th></tr></table></p>";


echo "<script language='Javascript'>";
echo "function preguntar(){";
echo "eliminar=confirm('¿Deseas eliminar este cliente? No se podrá recuperar después de esta operación.');";
echo "if (eliminar)";
echo "window.location.href = href='eliminar.php?codigo_r=$codigo_r';";
echo "else";
echo "alert('No se ha podido eliminar la reserva.')";
echo "}";
echo "</script>";

}


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
