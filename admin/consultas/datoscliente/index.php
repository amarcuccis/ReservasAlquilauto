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

 <script type="text/javascript">

function validar(){
		
    if(document.form1.cedula_c.value==""){
        alert("Ingrese una cédula o pasaporte válido");
		return false;
		form1.cedula.focus();
        
    }
		return true;
}
  </script>

  <h2>Consulta de Datos del Cliente</h2>
  <p>&nbsp;</p>
  <form id="form1" name="form1" onsubmit="return validar();" method="get" action="datoscliente.php">
    <strong>Cédula del Cliente:</strong>
<input name="cedula_c" type="text" class="cajas-de-texto" id="cedula_c" />
  <input name="Buscar" type="submit" class="boton" id="Buscar" value="Buscar" />
  </form>
  <p><a href="allclientes.php" class="boton">Mostrar todos los clientes</a></p>
</div>


</div>

<div> <img src="../../../img/sepa.png" id="sepa" /> </div>

<div id="pie">
<div id="logo-pie">
</div>
<a name="legal" id="legal">Todos los derechos reservados. - Asociación Cooperativa Alquilauto Mérida R.L. J-31737447-9, Mérida-Venezuela</a></div>
</body>
</html>
