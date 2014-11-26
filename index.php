<?php 
echo ".... Temporalmente fuera de servicio .....";
exit;
session_start();
$_SESSION['captcha']="vacio";
unset($_SESSION['captcha']);
session_destroy();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Consulta Documento</title>
<script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.13.custom.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/callback.js"></script>
<script type="text/javascript" src="js/modernizr-2.0.6.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-48411600-1', 'verificarfirma.cl');
  ga('send', 'pageview');

</script>

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
.logo1{
	width: 200;
	height: 61;
	align: absmiddle;
	position: absolute; 
	top: 35px; 
	left: 250px;	
	box-shadow: 5px 5px 10px #000;
}
	
.cuadro1{
	position: absolute;
	width: 400px;
	height: 320px;
	top: 200px;
	left: 252px;
	background-color: #69C;
	color: #fff;
	padding: 15px;
	z-index: 2;
	-webkit-border-radius: 15px;
	-moz-border-radius: 15px;
	-moz-box-shadow: 5px 5px 10px #000;
	-webkit-box-shadow: 5px 5px 10px #000;
	box-shadow: 5px 5px 10px #000; 
}
#botonimagen{
	background-image:url(imagen/boton_descargar.png);
	width: 150px; height: 55px;
}
#descarga_pdf{
	align: baseline;
	position: absolute; 
	top: 84px; 
	left: 656px; 
	z-index: 2; 
	width: 121px; 
	height: 142px;
}
.cuadro_texto {
	font-size: 14px;
}
</style>

</head>
<body>
<div class="cuadro1">
<p>En esta página Ud. puede verificar el documento firmado electrónicamente y comprobar su validez.</p>
<h4>Ingrese el Código :</h4>

	<input id="codigo" name="codigo" type="text" style="width:200px;height:30px;font-size:12pt;font-family:Helvetica;font-weight:bold;color:green;border-width:thin;border-style:solid;border-color:green;"/>
    <h4>Ingrese el Código de seguridad :</h4>
	<input id="botonimagen" name="boton1" type="image" src="imagen/descarga-boton.png" style="position: absolute; top: 240px; left: 250px;" /> 

	    <span class="captcha"><img src="captcha.php" alt="captcha" /></span><br/>
	<input id="captcha" type="text" size="12" name="captcha" style="width:200px;height:30px;font-size:12pt;font-family:Helvetica;font-weight:bold;color:green;border-width:thin;border-style:solid;border-color:green;"/>
  
  <p>&nbsp;</p> 
<div id="mensaje" style="position: absolute; top: 310px; left: 20px;"></div>
<iframe id="secretIFrame" src="" style="display:none; visibility:hidden;"></iframe>

</div>
<img id="descarga_pdf" src="imagen/descarga_pdf.gif" />
<img class="logo1" src="imagen/logo1.gif"  />
<!-- http://www.LiveZilla.net Chat Button Link Code --> 
<!--
	<div style="text-align:center; top: 300px; height:300px; width:1800px;"><noscript><div><a href="http://www.rsp.cl/live/chat.php" target="_blank">Comenzar Chat de Ayuda en vivo</a></div></noscript><div style="margin-top:2px;">
--> 
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          
</body>
</html>