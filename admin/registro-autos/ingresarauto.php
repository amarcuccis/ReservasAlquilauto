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
  	<a href="../../index.php" title="Alquilauto Mérida">
    	<img src="../../img/logo-alquilauto.png" style="border:none"/>
    </a> 
  </div>
 
</div>
<div id="pagina">
<div class="cont" style="margin-top:20px;">

    <h2>Agregar Vehículo</h2>
    <form id="form1" name="form1" method="post" action="envio.php">
      <table width="265" border="0" style="border:none">
        <tr>
          <td width="79"><strong>Código:
              <label for="codigo_v2"></label>
          </strong></td>
          <td width="176"><input name="codigo_v" type="text" class="cajas-de-texto" id="codigo_v" /></td>
        </tr>
        <tr>
          <td><strong>Modelo:</strong></td>
          <td><input name="modelo_v" type="text" class="cajas-de-texto" id="modelo_v" /></td>
        </tr>
        <tr>
          <td><strong>Tipo: </strong></td>
          <td><input name="tipo_v" type="text" class="cajas-de-texto" id="tipo_v" /></td>
        </tr>
        <tr>
          <td><strong>Marca:</strong></td>
          <td><input name="marca_v" type="text" class="cajas-de-texto" id="marca_v" /></td>
        </tr>
      </table>
      <p>
        <input name="Enviar" type="submit" class="boton" id="Enviar" value="Enviar" />
        <input name="Borrar" type="reset" class="boton" id="Borrar" value="Borrar" />
      </p>
    </form>
    <br />
    

</div>

</div>

<div> <img src="../../img/sepa.png" id="sepa" /> </div>

<div id="pie">
<div id="logo-pie">
</div>
<a name="legal" id="legal">Todos los derechos reservados. - Asociación Cooperativa Alquilauto Mérida R.L. J-31737447-9, Mérida-Venezuela</a></div>
</body>
</html>
