<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Alquilauto Mérida - Rueda contigo</title>
<link type="text/css" rel="stylesheet" href="../../../css/estilos.css" media="screen"/>
<link rel="stylesheet" type="text/css" href="../../../css/jquery-ui-1.7.2.custom.css" />
<link rel="image_src" href="http://alquilauto.com.ve/lgo.jpg" />
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

  <div id="reserva-ahora" class="cont">
    <script type="text/javascript">

function validar(){
		
    if(document.form1.nombre_c.value==""){
        alert("Ingrese Apelidos y Nombres");
		form1.nombre_c.focus();
        return false;
		return 0;
    }
	if(document.form1.cedula_c.value==""){
        alert("Ingrese una cédula o pasaporte válido");
		form1.cedula_c.focus();
        return false;
		return 0;
    }
    else if(document.form1.email_c.value==""){
        alert("Ingrese un Email válido");
        form1.email_c.focus();
        return false;
		return 0;
    }
	else if (document.form1.telefono_c.value.length<9 || document.form1.telefono_c.value.length>15){
		 alert("Introduzca un número de teléfono válido en el formato: 0274 1234567"); 
		 document.form1.telefono_c.focus(); 
		 return false;
		 return 0;
	}	
	return true;
}
  </script>
    <?php

$cedula_c = $_GET['cedula_c'];

echo "<h2>Modificando el registro del cliente con C.I. <strong>".$cedula_c."</strong>:</h2>";

?>
    <form id="form1" name="form1" onsubmit="return validar();" method="post" action="actualizar.php">
      <table width="643" height="204" border="0">
        <tr>
          <th width="260" align="left" valign="top" scope="col"><label for="nombre">Nombre y Apellido: </label>
            <strong>*</strong></th>
          <th width="373" align="left" valign="top" scope="col"><input name="nombre_c" type="text" id="nombre_c" class="cajas-de-texto" /></th>
          </tr>
        <tr>
          <th height="26" align="left" valign="top" scope="col">Cédula de Identidad o Pasaporte:*</th>
          <th align="left" valign="top" scope="col"><label for="cedula"></label>
            <input type="text" name="cedula_c" id="cedula_c" class="cajas-de-texto" value="<?php echo $cedula_c ?>" readonly="readonly" style="color:#787878" /></th>
          </tr>
        <tr>
          <th align="left" valign="top" scope="col">E-mail: <strong>*</strong></th>
          <th align="left" valign="top" scope="col"><input name="email_c" type="text" id="email_c" value="" class="cajas-de-texto" /></th>
        </tr>
        <tr>
          <th align="left" valign="top" scope="col"><label for="tlf2">Teléfono: </label>
            <label for="ciudad2"><strong>*</strong></label></th>
          <th align="left" valign="top" scope="col"><input name="telefono_c" type="tel" id="telefono_c" maxlength="25" class="cajas-de-texto" /></th>
        </tr>
        <tr>
          <th align="left" valign="top" scope="col"><label for="pais">País de Proveniencia: <strong>*</strong></label></th>
          <th align="left" valign="top" scope="col"><label for="horaS">
            <select name="pais_c" id="pais_c" class="input cajas-de-texto">
              <option value="Venezuela" selected="selected">Venezuela</option>
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
          <th align="left" valign="top" scope="col">&nbsp;</th>
          <th align="left" valign="top" scope="col">&nbsp;</th>
        </tr>
        <tr>
          <th height="26" align="left" valign="top" scope="col"><input type="submit" value="Modificar" class="boton" />
            <input type="reset" name="reest" id="reest" value="Reiniciar" class="boton" /></th>
          <th align="left" valign="top" scope="col">&nbsp;</th>
        </tr>
      </table>
    </form>
  </div>
  <p>&nbsp;</p>
</div>

</div>

<div> <img src="../../../img/sepa.png" id="sepa" /> </div>

<div id="pie">
<div id="logo-pie">
</div>
<a name="legal" id="legal">Todos los derechos reservados. - Asociación Cooperativa Alquilauto Mérida R.L. J-31737447-9, Mérida-Venezuela</a></div>
</body>
</html>
