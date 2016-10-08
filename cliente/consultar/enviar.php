<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Alquilauto Mérida - Rueda contigo</title>
<link type="text/css" rel="stylesheet" href="../../css/estilos.css" media="screen"/>
<link type="text/css" rel="stylesheet" href="../../css/calendar.css" media="screen"/>
<link href="../../favicon.ico" rel='shortcut icon' type='image/x-icon'/>
<link href="../../favicon.ico" rel='icon' type='image/x-icon'/>

<script type="text/javascript">
function ActivarCampo(){ 
$(".cajas-de-texto").removeAttr("disabled");
}
 </script>
 
 <script type="text/javascript" src="../../js/mootools.js"></script>
  <script type="text/javascript" src="../../js/calendar.js"></script>
  
<script type="text/javascript"> 
    window.addEvent ('domready', function () {myCal = new Calendar ({fecha_s_r: 'd/m/Y'}, { classes: ['dashboard'], direction: 1 });}); 
	window.addEvent ('domready', function () {myCal = new Calendar ({fecha_e_r: 'd/m/Y'}, { classes: ['dashboard'], direction: 1 });}); 
  </script>
 
<script type="text/javascript">
function link_popup(enlace) {

      features='width=750, height=700,status=0, menubar=0,toolbar=0, scrollbars=1';
      window.open(enlace.getAttribute('href'), '', features);
}
</script>

</head>

<body>
<div id="menu">
  <ul>
  <li><img src="../../img/home.png" width="40" height="40" style="padding-right:15px;cursor:pointer;" title="Inicio" onclick="location.href='/cliente'" /></li>
    <li><a href="../">Cliente</a></li>
    <li><a href="../registrar/">Registrar Reserva</a></li>
    <li><a href="../consultar/" id="activo">Consultar Reserva</a></li>
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

		<script type="text/javascript">

function validar(){
    if(document.form1.nombre_c.value==""){
        alert("Ingrese Apelidos y Nombres.");
		document.form1.nombre_c.focus();
        return false;
		return 0;
    }
    else if(document.form1.email_c.value=="" || document.form1.email_c.value.indexOf('@') == -1 || document.form1.email_c.value.indexOf('.') == -1){
        alert("Ingrese un Email válido del tipo: ejemplo@ejemplo.com.");
        document.form1.email_c.focus();
        return false;
		return 0;
    }
	else if (document.form1.telefono_c.value.length<9 || document.form1.telefono_c.value.length>21 || !/^([0-9])*$/.test(document.form1.telefono_c.value)){
		 alert("Introduzca un número de teléfono válido incluyendo el código de área sin dejar espacios, del tipo: 02741234567."); 
		 document.form1.telefono_c.focus(); 
		 return false;
		 return 0;
	}
	else  if(document.form1.fecha_s_r.value==""){
        alert("Seleccione una fecha de Salida del Vehículo válida.");
        document.form1.fecha_s_r.focus();
        return false;
		return 0;
    }
	else  if(document.form1.hora_s_r.value=="Hora"){
        alert("Seleccione una hora de la lista.");
        document.form1.hora_s_r.focus();
        return false;
		return 0;
    }
	else  if(document.form1.fecha_e_r.value==""){
        alert("Seleccione una fecha de Entrada del Vehículo válida.");
        document.form1.fecha_e_r.focus();
        return false;
		return 0;
    }
	else  if(document.form1.hora_e_r.value=="Hora"){
        alert("Seleccione una hora de la lista.");
        document.form1.hora_e_r.focus();
        return false;
		return 0;
    }
	else  if(document.form1.codigo_v.value==""){
        alert("Seleccione un vehículo de la lista.");
        document.form1.codigo_v.focus();
        return false;
		return 0;
    }	
	return true;
}
</script>

<?php


include ('../../conexion.php');

$cedula_c = $_GET['cedula_c'];
$codigo_r = $_GET['codigo_r'];

global $cedula_c,$codigo_r;

$clave=$link->query("SELECT * FROM reserva WHERE (codigo_r='$codigo_r') ");

if(mysqli_num_rows($clave)==0){
	echo "<script type='text/javascript'>";
	echo "alert('No existe la reserva consultada. por favor verifique los datos ingresados e intente nuevamente.');";
	echo "history.back(-1);";
	echo "</script>";
}
else {
	
		$consultaC="SELECT * FROM cliente WHERE (cedula_c='$cedula_c')";
		$resultadoC= mysqli_query($link,$consultaC);
		
		$consultaR="SELECT * FROM reserva WHERE (codigo_r='$codigo_r')";
		$resultadoR= mysqli_query($link,$consultaR);
		
		
		if ($rowC= mysqli_fetch_row($resultadoC) AND $rowR= mysqli_fetch_row($resultadoR)){
			
			$codigo_v=$rowR[2];
			
			if ($rowR[2]=!''){
				$carroActual=$link->query("SELECT marca_v,modelo_v,tipo_v FROM vehiculo WHERE codigo_v='$codigo_v'");
				$rowCarro=mysqli_fetch_row($carroActual);				
				}

			echo "<h2>Consulta de Reserva Código: <strong>".$rowR[0]."</strong></h2>";
			echo "<form id='form1' name='form1' onsubmit='return validar();' method='post' action='modificar.php?codigo_r=$codigo_r'>";
     echo "<table width='920' height='204' border='0'>";
        echo "<tr>";
          echo "<th width='260' align='left' valign='top' scope='col'><label for='nombre'>Nombre y Apellido: </label>";
            echo "<strong>*</strong></th>";
          echo "<th width='373' align='left' valign='top' scope='col'><input  name='nombre_c' value='".$rowC[1]."' type='text' id='nombre' class='cajas-de-texto' disabled/></th>";
       echo "<th width='273' align='left' valign='top' scope='col'><label for='portabebe'>Servicio de GPS: </label>";
             echo "<input type='checkbox' disabled class='cajas-de-texto' name='gps_r' id='gps_r' value='gps_r' />";
            echo "Portabebé:";
             echo "<input name='portabebe_r' type='checkbox' id='portabebe_r' disabled='disabled' value='portabebe_r' />";
             echo "<label for='portab'></label></th>";
         echo "</tr>";
         echo "<tr>";
           echo "<th height='26' align='left' valign='top' scope='col'>Cédula de Identidad o Pasaporte:*</th>";
           echo "<th align='left' valign='top' scope='col'><label for='cedula_c'></label>";
             echo "<input type='text' name='cedula_c' id='cedula_c' value='".$rowC[0]."' class='cajas-de-texto' /></th>";
           echo "<th rowspan='8' align='left' valign='top' scope='col'><p>";
             echo "<label for='comentarios2'>Comentarios adicionales:<br />";
             echo "</label>";
             echo "<textarea name='coment_r' id='coment' value='".$rowR[9]."' cols='25' disabled='disabled' rows='6' class='cajas-de-texto'>$rowR[9]</textarea>";
           echo "</p>";
             echo "<p>";
               echo "<input type='submit' disabled='disabled' name='enviarB' value='Enviar' class='boton' />";
               echo "<input type='reset' name='resetB' name='reest' id='reest' disabled='disabled' value='Reiniciar' class='boton' />";
             echo "</p></th>";
         echo "</tr>";
         echo "<tr>";
           echo "<th align='left' valign='top' scope='col'>E-mail: <strong>*</strong></th>";
           echo "<th align='left' valign='top' scope='col'><input name='email_c' disabled='disabled' type='text' id='email' value='".$rowC[2]."' class='cajas-de-texto' /></th>";
         echo "</tr>";
         echo "<tr>";
           echo "<th align='left' valign='top' scope='col'><label for='tlf2'>Teléfono: </label>";
             echo "<label for='ciudad2'><strong>*</strong></label></th>";
           echo "<th align='left' valign='top' scope='col'><input disabled='disabled' name='telefono_c' type='tel' value='".$rowC[4]."' id='tlf' maxlength='25' class='cajas-de-texto' />"; 
		   echo "</th>";
         echo "</tr>";
         echo "<tr>";
           echo "<th align='left' valign='top' scope='col'><label for='pais'>País de Proveniencia: <strong>*</strong></label></th>";
           echo "<th align='left' valign='top' scope='col'><label for='horaS'>";
             echo "<select name='pais_c' id='pais_c' disabled='disabled' class='input cajas-de-texto'>";
             echo"<option value='".$rowC[3]."' selected='selected'>".$rowC[3]."</option>";
               echo "<option value='Albania'>Albania</option>";
               echo "<option value='Alemania'>Alemania</option>";
               echo "<option value='Andorra'>Andorra</option>";
               echo "<option value='Angola'>Angola</option>";
               echo "<option value='Argelia'>Argelia</option>";
               echo "<option value='Argentina'>Argentina</option>";
               echo "<option value='Australia'>Australia</option>";
               echo "<option value='Austria'>Austria</option>";
               echo "<option value='Bélgica'>Bélgica</option>";
               echo "<option value='Bolivia'>Bolivia</option>";
               echo "<option value='Bosnia-Herzegovina'>Bosnia-Herzegovina</option>";
               echo "<option value='Brasil'>Brasil</option>";
               echo "<option value='Bulgaria'>Bulgaria</option>";
               echo "<option value='Camboya'>Camboya</option>";
               echo "<option value='Camerún'>Camerún</option>";
               echo "<option value='Canadá'>Canadá</option>";
               echo "<option value='Chile'>Chile</option>";
               echo "<option value='China'>China</option>";
               echo "<option value='Chipre'>Chipre</option>";
               echo "<option value='Colombia'>Colombia</option>";
               echo "<option value='Corea'>Corea</option>";
               echo "<option value='Costa de Marfil'>Costa de Marfil</option>";
               echo "<option value='Costa Rica'>Costa Rica</option>";
               echo "<option value='Cuba'>Cuba</option>";
               echo "<option value='Dinamarca'>Dinamarca</option>";
               echo "<option value='Ecuador'>Ecuador</option>";
               echo "<option value='Egipto'>Egipto</option>";
               echo "<option value='El Salvador'>El Salvador</option>";
               echo "<option value='Emiratos Árabes Unidos'>Emiratos Árabes Unidos</option>";
               echo "<option value='Eslovaquia'>Eslovaquia</option>";
               echo "<option value='Estados Unidos'>Estados Unidos</option>";
               echo "<option value='España'>España</option>";
               echo "<option value='Estonia'>Estonia</option>";
               echo "<option value='Etiopía'>Etiopía</option>";
               echo "<option value='Federación de Rusia'>Federación de Rusia</option>";
               echo "<option value='Filipinas'>Filipinas</option>";
               echo "<option value='Finlandia'>Finlandia</option>";
               echo "<option value='Francia'>Francia</option>";
               echo "<option value='Gran Bretaña'>Gran Bretaña</option>";
               echo "<option value='Grecia'>Grecia</option>";
               echo "<option value='Guatemala'>Guatemala</option>";
               echo "<option value='Guinea Bissau'>Guinea Bissau</option>";
               echo "<option value='Guinea Ecuatorial'>Guinea Ecuatorial</option>";
               echo "<option value='Haití'>Haití</option>";
               echo "<option value='Holanda'>Holanda</option>";
               echo "<option value='Honduras'>Honduras</option>";
               echo "<option value='Hong Kong'>Hong Kong</option>";
               echo "<option value='Hungría'>Hungría</option>";
               echo "<option value='India'>India</option>";
               echo "<option value='Indonesia'>Indonesia</option>";
               echo "<option value='Irán'>Irán</option>";
               echo "<option value='Irlanda'>Irlanda</option>";
               echo "<option value='Islandia'>Islandia</option>";
               echo "<option value='Israel'>Israel</option>";
               echo "<option value='Italia'>Italia</option>";
               echo "<option value='Jamaica'>Jamaica</option>";
               echo "<option value='Japón'>Japón</option>";
               echo "<option value='Jordania'>Jordania</option>";
               echo "<option value='Kenia'>Kenia</option>";
               echo "<option value='Líbano'>Líbano</option>";
               echo "<option value='Libia'>Libia</option>";
               echo "<option value='Lituania'>Lituania</option>";
               echo "<option value='Luxemburgo'>Luxemburgo</option>";
               echo "<option value='Malasia'>Malasia</option>";
               echo "<option value='Mali'>Mali</option>";
               echo "<option value='Malta'>Malta</option>";
               echo "<option value='Marruecos'>Marruecos</option>";
               echo "<option value='Mauritania'>Mauritania</option>";
               echo "<option value='México'>México</option>";
               echo "<option value='Mónaco'>Mónaco</option>";
               echo "<option value='Nepal'>Nepal</option>";
               echo "<option value='Nicaragua'>Nicaragua</option>";
               echo "<option value='Noruega'>Noruega</option>";
               echo "<option value='Nueva Zelanda'>Nueva Zelanda</option>";
               echo "<option value='Pakistán'>Pakistán</option>";
               echo "<option value='Palestina'>Palestina</option>";
               echo "<option value='Panamá'>Panamá</option>";
               echo "<option value='Paraguay'>Paraguay</option>";
               echo "<option value='Perú'>Perú</option>";
               echo "<option value='Polonia'>Polonia</option>";
               echo "<option value='Portugal'>Portugal</option>";
               echo "<option value='Puerto Rico'>Puerto Rico</option>";
               echo "<option value='República Checa'>República Checa</option>";
               echo "<option value='República Democrática del Congo'>República Dem. del Congo</option>";
               echo "<option value='República Dominicana'>República Dominicana</option>";
               echo "<option value='República Eslovaca'>República Eslovaca</option>";
               echo "<option value='República Federal Yugoslava'>República Fed. Yugoslava</option>";
               echo "<option value='Rumanía'>Rumanía</option>";
               echo "<option value='Rwanda'>Rwanda</option>";
               echo "<option value='Senegal'>Senegal</option>";
               echo "<option value='Siria'>Siria</option>";
               echo "<option value='Sudáfrica'>Sudáfrica</option>";
               echo "<option value='Suecia'>Suecia</option>";
               echo "<option value='Suiza'>Suiza</option>";
               echo "<option value='Taiwán'>Taiwán</option>";
               echo "<option value='Tanzania'>Tanzania</option>";
               echo "<option value='Tailandia'>Tailandia</option>";
               echo "<option value='Túnez'>Túnez</option>";
               echo "<option value='Turquía'>Turquía</option>";
               echo "<option value='Ucrania'>Ucrania</option>";
               echo "<option value='Uruguay'>Uruguay</option>";
			   echo "<option value='Venezuela'>Venezuela</option>";
               echo "<option value='Yemen'>Yemen</option>";
             echo "</select>";
           echo "</label></th>";
         echo "</tr>";
         echo "<tr>";
           echo "<th align='left' valign='top' scope='col'>Fecha y Hora de Salida del Vehículo: <strong>*</strong></th>";
           echo "<th align='left' valign='top' scope='col'><input disabled='disabled' type='text' name='fecha_s_r' value='".$rowR[4]."' id='fecha_s_r' readonly='readonly' size='12' class='cajas-de-texto' />";
             echo "<select name='hora_s_r' size='1' disabled='disabled' id='hora_s_r'  class='cajas-de-texto'>";
               echo "<option value='".$rowR[6]."' selected='selected'>".$rowR[6]."</option>";
			   echo "<option>Hora</option>";
               echo "<option value='08:00'>08:00</option>";
               echo "<option value='09:00'>09:00</option>";
               echo "<option value='10:00'>10:00</option>";
               echo "<option value='11:00'>11:00</option>";
               echo "<option value='12:00'>12:00</option>";
               echo "<option value='14:00'>14:00</option>";
               echo "<option value='15:00'>15:00</option>";
               echo "<option value='16:00'>16:00</option>";
               echo "<option value='17:00'>17:00</option>";
               echo "<option value='18:00'>18:00</option>";
             echo "</select></th>";
         echo "</tr>";
         echo "<tr>";
           echo "<th height='26' align='left' valign='top' scope='col'>Fecha y Hora de Llegada del Vehículo:<strong> *</strong></th>";
           echo "<th align='left' valign='top' scope='col'><input  type='text' name='fecha_e_r' value='".$rowR[3]."' readonly='readonly' disabled='disabled' id='fecha_e_r' size='12' class='cajas-de-texto' />";
             echo "<select name='hora_e_r' disabled='disabled' size='1' id='horaE'  class='cajas-de-texto'>";
               echo "<option value='".$rowR[5]."' selected='selected'>".$rowR[5]."</option>";
			   echo "<option>Hora</option>";
               echo "<option value='08:00'>08:00</option>";
               echo "<option value='09:00'>09:00</option>";
               echo "<option value='10:00'>10:00</option>";
               echo "<option value='11:00'>11:00</option>";
               echo "<option value='12:00'>12:00</option>";
               echo "<option value='14:00'>14:00</option>";
               echo "<option value='15:00'>15:00</option>";
               echo "<option value='16:00'>16:00</option>";
               echo "<option value='17:00'>17:00</option>";
               echo "<option value='18:00'>18:00</option>";
             echo "</select></th>";
         echo "</tr>";
         echo "<tr>";
           echo "<th height='26' align='left' valign='top' scope='col'>Vehículo a Alquilar: <strong>*</strong></th>";
           echo "<th align='left' valign='top' scope='col'><select disabled='disabled' name='codigo_v' class='ui-corner-all cajas-de-texto' id='carros'>";
             echo "<option value='".$rowR[2]."' selected='selected'>$rowCarro[0] $rowCarro[1] $rowCarro[2]</option>";
			 
             $carro=$link->query("SELECT * FROM vehiculo") or die(mysql_error());
				
			while($opciones = mysqli_fetch_array($carro)){ 
			/* EN PRUEBA
			if ($opciones['codigo_v']=$rowR[2]){
				unset ($opciones['codigo_v']);				
			}*/			
echo "<option value='".$opciones['codigo_v']."'>".$opciones['marca_v']." ".$opciones['modelo_v']." ".$opciones['tipo_v']."</option>"; 
}	
           echo "</select>";
             echo "<a href='carros-popup.php' onclick='link_popup(this); return false' target='_blank'>Ver lista de Vehículos</a></th>";
         echo "</tr>";
       echo "</table>";
	   
	  if ($rowR[7]=='Si'){
				echo "<script language='javascript'>							document.form1.portabebe_r.checked=true;
				</script>";
				}
			elseif ($rowR[7]=='No') {
				echo "<script language='javascript'>
				document.form1.portabebe_r.checked=false;
				</script>";
				}
				
			if ($rowR[8]=='Si'){
				echo "<script language='javascript'>		document.form1.gps_r.checked=true;
				</script>";
				}
			elseif ($rowR[8]=='No'){
				echo "<script language='javascript'>		document.form1.gps_r.checked=false;
				</script>";
				} 
	  
     echo "</form>";
	}

if ($rowR[11]=='SR'){
	$rowR[11]='<span style="background:#ccc;padding:5px;border-radius:4px;box-shadow: 0px 0px 6px #333;">Sin Revisar</span>';
}
else if ($rowR[11]=='A'){
	$rowR[11]='<span style="background:#00ff00;padding:5px;border-radius:4px;box-shadow: 0px 0px 6px #333;">Aprobada</span> Revise su correo electrónico para más detalles.';
}
else if ($rowR[11]=='D'){
	$rowR[11]='<span style="background:#ff0000;padding:5px;border-radius:4px;box-shadow: 0px 0px 6px #333;">Desaprobada</span> Revise su correo electrónico para más detalles.';
}

echo "<h4>Estado de la Reserva: </h4>".$rowR[11]."</br>";

if ($rowR[11]=='<span style="background:#ccc;padding:5px;border-radius:4px;box-shadow: 0px 0px 6px #333;">Sin Revisar</span>'){
echo "<p><table border='0' cellpadding='2'><tr><th><input type='checkbox' onclick='document.form1.nombre_c.disabled=!document.form1.nombre_c.disabled;document.form1.email_c.disabled=!document.form1.email_c.disabled;document.form1.telefono_c.disabled=!document.form1.telefono_c.disabled;document.form1.pais_c.disabled=!document.form1.pais_c.disabled;document.form1.fecha_s_r.disabled=!document.form1.fecha_s_r.disabled;document.form1.hora_s_r.disabled=!document.form1.hora_s_r.disabled;document.form1.fecha_e_r.disabled=!document.form1.fecha_e_r.disabled;document.form1.hora_e_r.disabled=!document.form1.hora_e_r.disabled;document.form1.codigo_v.disabled=!document.form1.codigo_v.disabled;document.form1.gps_r.disabled=!document.form1.gps_r.disabled;document.form1.portabebe_r.disabled=!document.form1.portabebe_r.disabled;document.form1.coment_r.disabled=!document.form1.coment_r.disabled;document.form1.enviarB.disabled=!document.form1.enviarB.disabled;document.form1.resetB.disabled=!document.form1.resetB.disabled;'><font color='#F7AC00'>Modificar Registro</font></th><th><a class='boton' href='javascript:confirmar();'>Eliminar Registro</a></th></tr></table></p>";
}
}

echo "<script language='Javascript'>
function confirmar(){
eliminar=confirm('¿Deseas eliminar este registro? No se podrá recuperar después de esta operación.');
if (eliminar) {
window.location.href='eliminar.php?cedula_c=$cedula_c&codigo_r=$codigo_r';
}
else {
alert('No se ha podido eliminar el registro.');
}
}
</script>";

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
