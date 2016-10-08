<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Alquilauto Mérida - Rueda contigo</title>
<link type="text/css" rel="stylesheet" href="../../css/estilos.css" media="screen"/>
<link type="text/css" rel="stylesheet" href="../../css/calendar.css" media="screen"/>

<link href="../../favicon.ico" rel='shortcut icon' type='image/x-icon'/>
<link href="../../favicon.ico" rel='icon' type='image/x-icon'/>


<script type="text/javascript" src="../../js/mootools.js"></script>
  <script type="text/javascript" src="../../js/calendar.js"></script>
  
<script type="text/javascript">
function link_popup(enlace) {

      features='width=750, height=700,status=0, menubar=0,toolbar=0, scrollbars=1';
      window.open(enlace.getAttribute('href'), '', features);
}
</script>
  
<script type="text/javascript"> 
    window.addEvent ('domready', function () {myCal = new Calendar ({fecha_s_r: 'd/m/Y'}, { classes: ['dashboard'], direction: 1 });}); 
	window.addEvent ('domready', function () {myCal = new Calendar ({fecha_e_r: 'd/m/Y'}, { classes: ['dashboard'], direction: 1 });}); 
  </script> 

</head>

<body>
<div id="menu">
  <ul>
  <li><img src="../../img/home.png" width="40" height="40" style="padding-right:15px;cursor:pointer;" title="Inicio" onclick="location.href='/cliente'" /></li>
    <li><a href="../">Cliente</a></li>
    <li><a href="#" id="activo">Registrar Reserva</a></li>
    <li><a href="../consultar">Consultar Reserva</a></li>
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

  <div id="reserva-ahora" class="cont">
    
		<script type="text/javascript">

function validar(){
    if(document.form1.nombre_c.value==""){
        alert("Ingrese Apelidos y Nombres.");
		document.form1.nombre_c.focus();
        return false;
		return 0;
    }
	if(document.form1.cedula_c.value=="" || document.form1.cedula_c.value.length<5 || !/^([0-9])*$/.test(document.form1.cedula_c.value)){
        alert("Ingrese un número de cédula o pasaporte válido.");
		document.form1.cedula_c.focus();
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
$rowC[]='';
 if(isset($_POST['boton_existente'])){
$existente = $_POST['existente'];
   $consultaE="SELECT * FROM cliente WHERE (cedula_c='$existente')";
   $resultadoC= mysqli_query($link,$consultaE);
   $rowC= mysqli_fetch_row($resultadoC);
 }
?>
 
    <h2>Reserve ahora</h2>
    <form id="form1" name="form1" onsubmit="return validar();" method="post" action="envio.php">
      <table width="920" height="204" border="0">
        <tr>
          <th width="260" align="left" valign="top" scope="col"><label for="nombre">Nombre y Apellido: </label>
            <strong>*</strong></th>
          <th width="373" align="left" valign="top" scope="col"><input name="nombre_c" value="<?php if(isset($_POST['boton_existente'])){ echo $rowC[1];}?>" type="text" class="cajas-de-texto" id="nombre_c" /></th>
          <th width="273" align="left" valign="top" scope="col"><label for="portabebe">Servicio de GPS: </label>
            <input type="checkbox" name="gps_r" id="gps_r" value="gps_r"/>
            Portabebé:
            <input name="portabebe_r" type="checkbox" id="portabebe_r" value="portabebe_r" />
            <label for="portabebe_r"></label></th>
        </tr>
        <tr>
          <th height="26" align="left" valign="top" scope="col">Cédula de Identidad o Pasaporte:*</th>
          <th align="left" valign="top" scope="col"><label for="cedula"></label>
            <input type="text" name="cedula_c" id="cedula_c" class="cajas-de-texto" value="<?php if(isset($_POST['boton_existente'])){ echo $rowC[0];}?>" /></th>
          <th rowspan="8" align="left" valign="top" scope="col"><p>
            <label for="comentarios2">Comentarios adicionales:<br />
            </label>
            <textarea name="coment_r" id="coment" cols="25" rows="6" class="cajas-de-texto"></textarea>
          </p>
            <p>
              <input type="submit" value="Enviar" class="boton" />
              <input type="reset" name="reest" id="reest" value="Reiniciar" class="boton" />
            </p></th>
        </tr>
        <tr>
          <th align="left" valign="top" scope="col">E-mail: <strong>*</strong></th>
          <th align="left" valign="top" scope="col"><input name="email_c" type="text" id="email_c" value="<?php if(isset($_POST['boton_existente'])){ echo $rowC[2];}?>" class="cajas-de-texto" /></th>
        </tr>
        <tr>
          <th align="left" valign="top" scope="col"><label for="tlf2">Teléfono: </label>
            <label for="ciudad2"><strong>*</strong></label></th>
          <th align="left" valign="top" scope="col"><input name="telefono_c" type="tel" id="telefono_c" maxlength="25" class="cajas-de-texto" value="<?php if(isset($_POST['boton_existente'])){ echo $rowC[4];}?>" /></th>
        </tr>
        <tr>
          <th align="left" valign="top" scope="col"><label for="pais">País de Proveniencia: <strong>*</strong></label></th>
          <th align="left" valign="top" scope="col"><label for="horaS">
            <select name="pais_c" id="pais_c" class="input cajas-de-texto">
              <option value="<?php if(isset($_POST['boton_existente'])){ echo $rowC[3];} else { echo 'Venezuela';}?>" selected="selected">Venezuela</option>
              <option value="Albania">Albania</option>
              <option value="Alemania">Alemania</option>
              <option value="Andorra">Andorra</option>
              <option value="Angola">Angola</option>
              <option value="Argelia">Argelia</option>
              <option value="Argentina">Argentina</option>
              <option value="Australia">Australia</option>
              <option value="Austria">Austria</option>
              <option value="Bélgica">Bélgica</option>
              <option value="Bolivia">Bolivia</option>
              <option value="Bosnia-Herzegovina">Bosnia-Herzegovina</option>
              <option value="Brasil">Brasil</option>
              <option value="Bulgaria">Bulgaria</option>
              <option value="Camboya">Camboya</option>
              <option value="Camerún">Camerún</option>
              <option value="Canadá">Canadá</option>
              <option value="Chile">Chile</option>
              <option value="China">China</option>
              <option value="Chipre">Chipre</option>
              <option value="Colombia">Colombia</option>
              <option value="Corea">Corea</option>
              <option value="Costa de Marfil">Costa de Marfil</option>
              <option value="Costa Rica">Costa Rica</option>
              <option value="Cuba">Cuba</option>
              <option value="Dinamarca">Dinamarca</option>
              <option value="Ecuador">Ecuador</option>
              <option value="Egipto">Egipto</option>
              <option value="El Salvador">El Salvador</option>
              <option value="Emiratos Árabes Unidos">Emiratos Árabes Unidos</option>
              <option value="Eslovaquia">Eslovaquia</option>
              <option value="Estados Unidos">Estados Unidos</option>
              <option value="España">España</option>
              <option value="Estonia">Estonia</option>
              <option value="Etiopía">Etiopía</option>
              <option value="Federación de Rusia">Federación de Rusia</option>
              <option value="Filipinas">Filipinas</option>
              <option value="Finlandia">Finlandia</option>
              <option value="Francia">Francia</option>
              <option value="Gran Bretaña">Gran Bretaña</option>
              <option value="Grecia">Grecia</option>
              <option value="Guatemala">Guatemala</option>
              <option value="Guinea Bissau">Guinea Bissau</option>
              <option value="Guinea Ecuatorial">Guinea Ecuatorial</option>
              <option value="Haití">Haití</option>
              <option value="Holanda">Holanda</option>
              <option value="Honduras">Honduras</option>
              <option value="Hong Kong">Hong Kong</option>
              <option value="Hungría">Hungría</option>
              <option value="India">India</option>
              <option value="Indonesia">Indonesia</option>
              <option value="Irán">Irán</option>
              <option value="Irlanda">Irlanda</option>
              <option value="Islandia">Islandia</option>
              <option value="Israel">Israel</option>
              <option value="Italia">Italia</option>
              <option value="Jamaica">Jamaica</option>
              <option value="Japón">Japón</option>
              <option value="Jordania">Jordania</option>
              <option value="Kenia">Kenia</option>
              <option value="Líbano">Líbano</option>
              <option value="Libia">Libia</option>
              <option value="Lituania">Lituania</option>
              <option value="Luxemburgo">Luxemburgo</option>
              <option value="Malasia">Malasia</option>
              <option value="Mali">Mali</option>
              <option value="Malta">Malta</option>
              <option value="Marruecos">Marruecos</option>
              <option value="Mauritania">Mauritania</option>
              <option value="México">México</option>
              <option value="Mónaco">Mónaco</option>
              <option value="Nepal">Nepal</option>
              <option value="Nicaragua">Nicaragua</option>
              <option value="Noruega">Noruega</option>
              <option value="Nueva Zelanda">Nueva Zelanda</option>
              <option value="Pakistán">Pakistán</option>
              <option value="Palestina">Palestina</option>
              <option value="Panamá">Panamá</option>
              <option value="Paraguay">Paraguay</option>
              <option value="Perú">Perú</option>
              <option value="Polonia">Polonia</option>
              <option value="Portugal">Portugal</option>
              <option value="Puerto Rico">Puerto Rico</option>
              <option value="República Checa">República Checa</option>
              <option value="República Democrática del Congo">República Dem. del Congo</option>
              <option value="República Dominicana">República Dominicana</option>
              <option value="República Eslovaca">República Eslovaca</option>
              <option value="República Federal Yugoslava">República Fed. Yugoslava</option>
              <option value="Rumanía">Rumanía</option>
              <option value="Rwanda">Rwanda</option>
              <option value="Senegal">Senegal</option>
              <option value="Siria">Siria</option>
              <option value="Sudáfrica">Sudáfrica</option>
              <option value="Suecia">Suecia</option>
              <option value="Suiza">Suiza</option>
              <option value="Taiwán">Taiwán</option>
              <option value="Tanzania">Tanzania</option>
              <option value="Tailandia">Tailandia</option>
              <option value="Túnez">Túnez</option>
              <option value="Turquía">Turquía</option>
              <option value="Ucrania">Ucrania</option>
              <option value="Uruguay">Uruguay</option>
              <option value="Yemen">Yemen</option>
            </select>
          </label></th>
        </tr>
        <tr>
          <th align="left" valign="top" scope="col">Fecha y Hora de Salida del Vehículo: <strong>*</strong></th>
          <th align="left" valign="top" scope="col"><input type="text" name="fecha_s_r" id="fecha_s_r" size="8" class="cajas-de-texto" />
            <select name="hora_s_r" size="1"  class="cajas-de-texto" id="hora_s_r">
              <option selected="selected">Hora</option>
              <option value="08:00">08:00</option>
              <option value="09:00">09:00</option>
              <option value="10:00">10:00</option>
              <option value="11:00">11:00</option>
              <option value="12:00">12:00</option>
              <option value="14:00">14:00</option>
              <option value="15:00">15:00</option>
              <option value="16:00">16:00</option>
              <option value="17:00">17:00</option>
              <option value="18:00">18:00</option>
            </select></th>
        </tr>
        <tr>
          <th height="26" align="left" valign="top" scope="col">Fecha y Hora de Llegada del Vehículo:<strong> *</strong></th>
          <th align="left" valign="top" scope="col"><input type="text" name="fecha_e_r" readonly="readonly" id="fecha_e_r" size="8" class="cajas-de-texto" />
            <select name="hora_e_r" size="1" id="hora_e_r"  class="cajas-de-texto">
              <option selected="selected">Hora</option>
              <option value="08:00">08:00</option>
              <option value="09:00">09:00</option>
              <option value="10:00">10:00</option>
              <option value="11:00">11:00</option>
              <option value="12:00">12:00</option>
              <option value="14:00">14:00</option>
              <option value="15:00">15:00</option>
              <option value="16:00">16:00</option>
              <option value="17:00">17:00</option>
              <option value="18:00">18:00</option>
            </select></th>
        </tr>
        <tr>
          <th height="26" align="left" valign="top" scope="col">Vehículo a Alquilar: <strong>*</strong></th>
          <th align="left" valign="top" scope="col"><select name="codigo_v" class="ui-corner-all cajas-de-texto" id="codigo_v">
            <option value="" selected="selected">Seleccione..</option>
            <?php
			 
				$carro=$link->query("SELECT * FROM vehiculo") or die(mysql_error());
				
			while($opciones = mysqli_fetch_array($carro)){ 
echo "<option value='".$opciones['codigo_v']."'>".$opciones['marca_v']." ".$opciones['modelo_v']." ".$opciones['tipo_v']."</option>"; 
}	
			
			 ?>
          </select>
            <a href="carros-popup.php" onclick="link_popup(this); return false" target="_blank">Ver lista de Vehículos</a></th>
        </tr>
      </table>    </form>
      &nbsp;
      <h2>¿Cliente Existente?      </h2>
      <form id="form2" onsubmit="return validar2();" name="form2" method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
        <p>Si ya ha reservado con nosotros, introduzca su Cédula o Pasaporte aquí para autocompletar sus datos personales:</p>
  <label for="existente"></label>
          <input name="existente" type="text" class="cajas-de-texto" id="existente" />
          <input name="boton_existente" type="submit" class="boton" id="button" value="Enviar" />
      </form>
<script type='text/javascript'>

function validar2(){
   if(document.form2.existente.value==''){
        alert('Ingrese una cédula o pasaporte válido');
		form2.existente.focus();
        return false;
		return 0;
    }
		
	return true;
}
  </script>

  </div>
  <p>&nbsp;</p>
</div>

</div>

<div> <img src="../../img/sepa.png" id="sepa" /> </div>

<div id="pie">
<div id="logo-pie">
</div>
<a name="legal" id="legal">Todos los derechos reservados. - Asociación Cooperativa Alquilauto Mérida R.L. J-31737447-9, Mérida-Venezuela</a></div>
</body>
</html>
