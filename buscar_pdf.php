<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Consulta Docuemento</title>
<script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
<script src="js/jquery-ui-1.8.13.custom.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<style type="text/css">
body {
	background-image:url(imagen/fondo_web.jpg);
	background-repeat:repeat-x;
	}
	h1 {background-color: #00ff00}
	h2 {background-color: #39F}
	p {
	color: #FFF;
	font-size: 16px;
	font-family: Arial, Helvetica, sans-serif;
}
	
.cuadro1{
	position: absolute;
	width: 400px;
	height: 200px;
	top: 200px;
	left: 252px;
	background-color: #69C;
	color: #fff;
	padding: 15px;
	z-index: 2;
	-webkit-border-radius: 15px;
	-moz-border-radius: 15px;
}
.botonimagen{
  background-image:url(imagen/boton_descargar.png);
  width: 150px; height: 55px;
}
.cuadro_texto {
	font-size: 14px;
}
</style>
</head>
<body>
<div class="cuadro1">
<p>En esta página Ud. puede verificar el documento firmado electrónicamente y comprobar su validez.</p>
<h3>Ingrese el Código</h3>
<form action="envio.php" method="post">
  <p>
  <input name="codigo" type="text" style="width:200px;height:30px;font-size:12pt;font-family:Helvetica;font-weight:bold;color:green;border-width:thin;border-style:solid;border-color:green;"/>
  <input class="botonimagen" name="boton1" type="image" src="imagen/descarga-boton.png"/>
  </p>
  <p>&nbsp;</p>
</form>
</div>
<img
src="imagen/descarga_pdf.gif" width="201" height="200" align="baseline" style="position: absolute; top: 84px; left: 656px; z-index: 2; width: 121px; height: 142px;"><img src="imagen/logo1.gif"  width="200" height="61" align="absmiddle" />
</body>
</html>