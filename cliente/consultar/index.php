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
  <li><img src="../../img/home.png" width="40" height="40" style="padding-right:15px;cursor:pointer;" title="Inicio" onclick="location.href='/cliente'" /></li>
    <li><a href="../../cliente">Cliente</a></li>
    <li><a href="../registrar/">Registrar Reserva</a></li>
    <li><a href="#" id="activo">Consultar Reserva</a></li>
  </ul>
</div>
<div id="fondo"/>
<div id="cabecera">
  <div id="logo">
  	<a href="http://www.alquilauto.com.ve" title="Alquilauto Mérida">
    	<img src="../../img/logo-alquilauto.png" style="border:none"/>
    </a> 
  </div>
 
</div>
<div id="pagina">

<div class="cont" style="margin-top:20px;">
  <h2>Consultar Reserva</h2>
  <form id="form2" name="form2" onsubmit="return validar();" method="get" action="enviar.php">
  <p>Número de Cédula:
     <input name="cedula_c" type="text" class="cajas-de-texto" id="cedula_c" />
  </p>
  <p>Código de Reservación:
    <label for="codigo_r"></label>
    <input name="codigo_r" type="text" class="cajas-de-texto" id="codigo_r" />
  </p>
  <p>
    <input name="enviar" type="submit" class="boton" id="enviar" value="Enviar" />
    <input name="borrar" type="reset" class="boton" id="borrar" value="Borrar" />
  </p>
  </form>

</div>

</div>

<div> <img src="../../img/sepa.png" id="sepa" /> </div>

<div id="pie">
<div id="logo-pie">
</div>
<a name="legal" id="legal">Todos los derechos reservados. - Asociación Cooperativa Alquilauto Mérida R.L. J-31737447-9, Mérida-Venezuela</a> </div>
</body>
</html>
