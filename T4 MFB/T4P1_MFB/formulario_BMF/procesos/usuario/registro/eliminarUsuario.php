<?php 

	session_start();
	require_once "../../../clases/Usuarios.php";
	$usuario = new Usuarios();

	echo $usuario->eliminarUsuario($_POST['idUsuario']);

 ?>