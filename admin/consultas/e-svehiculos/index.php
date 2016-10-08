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
    <li><a href="../datoscliente">Datos del Cliente</a></li>
    <li><a href="../reservas">Reservas</a></li>
    <li><a href="../e-svehiculos" id="activo">Estado de Reservas</a></li>
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

  <h2>Estado de Reservas</h2>
  <br />

  <?php 
  include ('../../../conexion.php');

		$consulta="SELECT c.cedula_c,c.nombre_c,c.pais_c,r.codigo_r,r.fecha_e_r,r.fecha_s_r,r.hora_e_r,r.hora_s_r,r.portabebe_r,r.gps_r,r.coment_r,r.estado_r,r.horaReserva_r FROM cliente AS c, reserva AS r WHERE c.cedula_c=r.cedula_c ORDER BY r.horaReserva_r DESC";
		$resultado= mysqli_query($link,$consulta);
		$i=0;
		
		echo"<script type='text/javascript'>

function validar(){
    if (!document.form1.check_r.checked){
		alert('Escoja una reserva para cambiar de estado.');
        return false;
		return 0;
		history.back(-1);
	}
}
  </script>";
		
		echo" <form onsubmit='return validar();' method='post' name='form1' action='cambiarEstado.php' >";
		
			echo "<table border='0' cellpadding='2'><tr align='center'><th   align='center' ></th><th   align='center' bgcolor='#FF3338'><font color='#FFF'>C.I.</font></th><th  align='center' bgcolor='#FF3338'>Nombre</th><th   align='center' bgcolor='#FF3338'>País</th><th   align='center' bgcolor='#FF3338'><font color='#FFF'>COD R.</font></th><th   align='center' bgcolor='#FF3338'>Fecha Ent.</th><th   align='center' bgcolor='#FF3338'>Fecha Sal.</th><th   align='center' bgcolor='#FF3338'>Hora Ent.</th><th   align='center' bgcolor='#FF3338'>Hora Sal.</th><th   align='center' bgcolor='#FF3338'>Portabebé</th><th   align='center' bgcolor='#FF3338'>GPS</th><th   align='center' bgcolor='#FF3338'>Comentarios</th><th   align='center' bgcolor='#FF3338'><font color='#FFF'>Estado</font></th><th   align='center' bgcolor='#FF3338'>Hora de Reserva";

while ($fila= mysqli_fetch_row($resultado)){
	
	if($i%13==0){
					echo "<tr style='background: #fff; font-weight: normal;'>";
				}else {
						echo "<tr style='background: #fff; font-weight: normal;'>";

					}	
				echo "<th style='background: #fff; font-weight: normal;'><input type='radio' name='check_r' id='check_r' value='".$fila[0]."'></th>";	
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
				echo "<th style='font-weight: normal;'>";
				echo $fila[4];		
				echo "</th>";
				echo "<th style='font-weight: normal;'>";
				echo $fila[5];		
				echo "</th>";
				echo "<th style='font-weight: normal;'>";
				echo $fila[6];		
				echo "</th>";
				echo "<th style='font-weight: normal;'>";
				echo $fila[7];		
				echo "</th>";
				echo "<th style='font-weight: normal;'>";
				echo $fila[8];		
				echo "</th>";
				echo "<th style='font-weight: normal;'>";
				echo $fila[9];		
				echo "</th>";
				echo "<th style='font-weight: normal;'>";
				echo $fila[10];		
				echo "</th>";
				
				if($fila[11]=='A'){
					$bg='#00ff00';
				}
				elseif ($fila[11]=='D'){
					$bg='#ff0000';
				}
				elseif ($fila[11]=='SR'){
					$bg='#ccc';
				}
				
				echo "<th style='font-weight: normal;background-color:$bg;'><strong>";
				echo $fila[11];		
				echo "</strong></th>";
				echo "<th style='font-weight: normal;'>";
				echo $fila[12];		
				echo "</th>";					
				echo "</tr>";
				$i++;
			}	
			echo "</table>";
			
echo "<br/>";
echo"<input type='submit' style='background: #00ff00;color:#fff' name='aprobarB' value='Aprobar' class='boton'></td>"; 
echo"<input type='submit' name='desaprobarB' value='Desaprobar' class='boton' style='background:#ff0000;color:#fff'></td>";
echo"</form>";


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
