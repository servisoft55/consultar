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
$captcha1=$_GET['captcha'];
$path1="pdf/";
$id =$codigo."_firmado.pdf";
$enlace = "pdf/".$id;
if(strtoupper($captcha1) == $_SESSION['captcha']){
		 // REMPLAZO EL CAPTCHA USADO POR UN TEXTO LARGO PARA EVITAR QUE SE VUELVA A INTENTAR
//		 $_SESSION['captcha'] = md5(rand()*time());
	 	 // INSERTA EL CÓDIGO EXITOSO AQUI
//		 echo "Es Igual .... ".strtoupper($captcha1)."  -   ".$_SESSION['captcha'];
//		echo 1;
	if (!file_exists($enlace)){
		echo 0;
	}else{
	//	header ("Content-Disposition: attachment; filename=".$id." ");
	//	header ("Content-Type: application/octet-stream");
	//	header ("Content-Length: ".filesize($enlace));
	//	readfile($enlace);
		echo $enlace;
	}
}else{
		 // REMPLAZO EL CAPTCHA USADO POR UN TEXTO LARGO PARA EVITAR QUE SE VUELVA A INTENTAR
//		 $_SESSION['captcha'] = md5(rand()*time());
	 	 // INSERTA EL CÓDIGO DE ERROR AQUÍ
//		 echo "No es Igual .... ".strtoupper($captcha1)."  -   ".$_SESSION['captcha'];
		 echo 0;
}




// 

/* if ($_SESSION["captcha"]==$captcha) {
	if (!file_exists($enlace)){
		echo 0;
	}else{
	//	header ("Content-Disposition: attachment; filename=".$id." ");
	//	header ("Content-Type: application/octet-stream");
	//	header ("Content-Length: ".filesize($enlace));
	//	readfile($enlace);
		echo $enlace;
	}
	}else{
	echo 0;
}
 */
unset($_SESSION['captcha']);
session_destroy();
?> 
