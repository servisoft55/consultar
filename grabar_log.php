<?php 
session_start(); 
$conexion = mysql_connect("localhost", "dwrsp_root", "91829182");
mysql_select_db("dwrsp_repositorio", $conexion);


//OBTENER LA IP DEL VISITANTE
if( isset($_SERVER['HTTP_X_FORWARDED_FOR']) &&
   $_SERVER['HTTP_X_FORWARDED_FOR'] != '' )
{
$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
}
else
$ip=$_SERVER['REMOTE_ADDR'];
//////////////////////////////////

$navegador=$_SERVER["HTTP_USER_AGENT"]; //DETECTA EL NAVEGADOR
$fecha=date("Y-m-d H:i:s");

$codigo=$_GET['codigo'];
$path1="pdf/";
$id =$codigo."_firmado.pdf";
$enlace = "pdf/".$id;
$estado=$_GET['estado'];
if(strtoupper($estado) == 'ERROR'){
		$que = "INSERT INTO log_consulta (estado, nombre_pdf, ip, navegador, fecha) ";
		$que.= "VALUES ('ERROR', '$id', '$ip', '$navegador', '$fecha') ";
		$res = mysql_query($que, $conexion) or die(mysql_error());
	}else{
	//	header ("Content-Disposition: attachment; filename=".$id." ");
	//	header ("Content-Type: application/octet-stream");
	//	header ("Content-Length: ".filesize($enlace));
	//	readfile($enlace);
		$que = "INSERT INTO log_consulta (estado, nombre_pdf, ip, navegador, fecha) ";
		$que.= "VALUES ('CORRECTO', '$id', '$ip', '$navegador', '$fecha') ";
		$res = mysql_query($que, $conexion) or die(mysql_error());
}
//unset($_SESSION['captcha']);
//session_destroy();
?> 
