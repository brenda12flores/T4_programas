<?php 

	require_once "../../../clases/Usuarios.php";
	$usuario = new Usuarios();

	$datos = array(
		"idUsuario" => $_POST['idUsuario'],
		"nombre" => $_POST['nombreU'],
		"apellidosU" => $_POST['apellidosU'],
		"control" => $_POST['controlU'],
		"semestre" => $_POST['semestreU'],
		"carrera" => $_POST['carreraU'],
		"especialidad" => $_POST['especialidadU'],
		"password" => $_POST['passwordU']
	);

	echo $usuario->actualizarUsuario($datos);

 ?>