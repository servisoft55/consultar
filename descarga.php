<?php 
$codigo=$_GET['codigo'];
$path1="pdf/";
$id =$codigo."_firmado.pdf";
$enlace = "pdf/".$id;
//if (file_exists($enlace)){
	header ("Content-Disposition: attachment; filename=".$id." ");
	header ("Content-Type: application/octet-stream");
	header ("Content-Length: ".filesize($enlace));
	readfile($enlace);
//}
?> 
