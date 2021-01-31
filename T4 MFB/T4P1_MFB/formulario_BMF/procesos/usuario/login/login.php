<?php 
	session_start();
	require_once "../../../clases/Usuarios.php";

	$usuario = $_POST['login'];
	$password = $_POST['password'];

	$usuarioObj = new Usuarios();

	echo $usuarioObj->login($usuario, $password);

?>