<?php 

$host = "localhost";
$user = "root";
$pw = "";
$db = "expertsoft";

$con = @mysql_connect ($host, $user,$pw);
if($con==FALSE){
	echo ("No hay conexión al servidor mysql");
	exit();
}
$conex_bd=@mysql_select_db($db,$con);
		
if($conex_bd==FALSE){
	echo "No se pudo conectar correctamente con la base de datos";
	exit();
} 

mysql_query ("SET NAMES 'utf8'");
?>