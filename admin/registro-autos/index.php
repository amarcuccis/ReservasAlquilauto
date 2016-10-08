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
  	<a href="../index.php" title="Alquilauto Mérida">
    	<img src="../../img/logo-alquilauto.png" style="border:none"/>
    </a> 
  </div>
 
</div>
<div id="pagina">
<div class="cont" style="margin-top:20px;">

    <h2>Vehículos en Alquiler</h2>
    <br />
<?php

include ('../../conexion.php');

		$consulta="SELECT * FROM vehiculo ORDER BY codigo_v";
		$resultado= mysqli_query($link,$consulta);
		$i=0;
		
		echo"<script type='text/javascript'>

function validar(){
    if (!document.form1.check_v.checked){
		alert('Escoja el vehículo a eliminar.');
        return false;
		return 0;
		history.back(-1);
	}
}
  </script>";
		
		echo" <form method='post' onsubmit='return validar();' name='form1' action='eliminarVehiculo.php'>";
		
			echo "<table border='0' cellpadding='2'><tr align='center'><th   align='center'></th><th   align='center' bgcolor='#FF3338'><font color='#FFF'>Código</font></th><th  align='center' bgcolor='#FF3338'>Modelo</th><th   align='center' bgcolor='#FF3338'>Tipo</th><th   align='center' bgcolor='#FF3338'>Marca";

while ($fila= mysqli_fetch_row($resultado)){
	
	if($i%4==0){
					echo "<tr style='background: #fff; font-weight: normal;'>";
				}else {
						echo "<tr style='background: #fff; font-weight: normal;'>";

					}	
				echo "<th style='background: #fff; font-weight: normal;'><input type='radio' name='check_v' value='".$fila[0]."'></th>";	
				echo "<th style='font-weight: normal;'>";		
				echo $fila[0];
				echo "</th>";
				echo "<th style='font-weight: normal;'>";
				echo $fila[1];		
				echo "</th>";
				echo "<th style='font-weight: normal;'>";
				echo $fila[2];		
				echo "</th>";
				echo "<th style='font-weight: normal;'>";
				echo $fila[3];		
				echo "</th>";				
				echo "</tr>";
				$i++;
			}	
			echo "</table>";
			
echo "<br/>";
echo "<p><table border='0' cellpadding='2'><tr><th><a class='boton' href='ingresarauto.php'>Agregar Vehículo</a></th><th><input type='submit' style='color:#ff0000;font-size:18px;' name='eliminarB' value='Eliminar Vehículo' class='boton'></th></tr></table></p>";
echo"</form>";

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
