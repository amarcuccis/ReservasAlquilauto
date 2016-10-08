<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Alquilauto Mérida - Rueda contigo</title>
<link type="text/css" rel="stylesheet" href="../../../css/estilos.css" media="screen"/>
<link href="../../../favicon.ico" rel='shortcut icon' type='image/x-icon'/>
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
  	<a href="http://www.alquilauto.com.ve" title="Alquilauto Mérida">
    	<img src="../../../img/logo-alquilauto.png" style="border:none"/>
    </a> 
  </div>
 
</div>
<div id="pagina">

<div class="cont" style="margin-top:20px;">

<h2>Consulta de Datos del Cliente</h2>
  <p>&nbsp;</p>
<?php


include ('../../../conexion.php');

$cedula_c = $_GET['cedula_c'];

global $cedula_c;

$clave= mysqli_query($link,"SELECT * FROM cliente WHERE cedula_c='$cedula_c' ");

if(mysqli_num_rows($clave)==0){
	echo "<script type='text/javascript'>";
	echo "alert('No existe registro del cliente consultado. por favor verifique los datos ingresados e intente nuevamente.');";
	echo "history.back(-1);";
	echo "</script>";
}
else {
	
		$consulta="SELECT nombre_c,cedula_c,email_c,telefono_c,pais_c FROM cliente WHERE cedula_c='$cedula_c'";
		$resultado= mysqli_query($link,$consulta);
		
			echo "<table border='0' cellpadding='2'><tr align='center'><th   align='center' bgcolor='#FF3338'><font color='#FFF'>Nombre</font></th><th  align='center' bgcolor='#E6E6E6'>Cédula</th><th   align='center' bgcolor='#E6E6E6'>Email</th><th   align='center' bgcolor='#E6E6E6'>Teléfono</th><th   align='center' bgcolor='#E6E6E6'>País";

while ($fila= mysqli_fetch_row($resultado)){
	echo "<tr align='center'>";
	for($i=0;$i < mysqli_num_fields($resultado);$i++){
		echo "<td  align='center' bgcolor='#FFF'>".$fila[$i]."</td>";
	}
	echo "</tr>";
}
echo "</table>";
echo "</br>";
echo "<p><table border='0' cellpadding='2'><tr><th><a class='boton' href='modificar.php?cedula_c=$cedula_c'>Modificar Registro</a></th><th><a class='boton' href='javascript:preguntar()' style='color:#ff0000'>Eliminar Registro</a></th></tr></table></p>";


echo "<script language='Javascript'>";
echo "function preguntar(){";
echo "eliminar=confirm('¿Deseas eliminar este cliente? No se podrá recuperar después de esta operación.');";
echo "if (eliminar)";
echo "window.location.href = href='eliminar.php?cedula_c=$cedula_c';";
echo "else";
echo "alert('No se ha podido eliminar el registro del cliente.')";
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
