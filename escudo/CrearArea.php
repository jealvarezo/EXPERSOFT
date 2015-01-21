<?php
	include "php/conec.php";
	
	$consult = "SELECT * FROM area";
	$resultado = mysql_query($consult);
	$nombre = $_POST['nombre'];                
	$descripcion = $_POST['descripcion'];
	$d= mysql_num_rows($resultado);
	$d= $d +1;
	$consulta = "INSERT INTO area (idArea, nombre, descripcion)
		 VALUES(".$d.", '".$nombre."', '".$descripcion."')";
    
	$result = mysql_query($consulta);
	header('Location: AreasAdmin.html');
?>