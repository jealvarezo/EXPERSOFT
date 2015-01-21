<?php
	include "php/conec.php";
	
	$cedula = $_POST['cedula'];                
	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$usuario = $_POST['alias'];
	$contrasena = $_POST['contrasena'];
	$telefono = $_POST['telefono'];
	$direccion = $_POST['direccion'];
	$email = $_POST['email'];
	$fechaIngreso= $_POST['date'];
	
	$consulta = "INSERT INTO persona (cedula, nombre, apellido, alias, contrasena, telefono, direccion, email, fechaIngreso)
		 VALUES(".$cedula.", '".$nombre."', '".$apellidos."', '".$usuario."', '".$contrasena."', '".$telefono."', '".$direccion."', '".$email."', '".$fechaIngreso."')";
  
	$result = mysql_query($consulta);
	header('Location: UsuariosAdmin.html');
?>