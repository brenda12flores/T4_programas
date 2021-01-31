<?php

require_once "../../../clases/Usuarios.php";

$datos    = array(
	"nombre"          => $_POST['nombre'],
	"apellidos"		  => $_POST['apellidos'],
	"control"         => $_POST['control'],
	"semestre"        => $_POST['semestre'],
	"carrera"         => $_POST['carrera'],
	"especialidad"    => $_POST['especialidad'],
	"password"        => $_POST['password']
);

$usuario = new Usuarios();
echo $usuario->agregarUsuario($datos);
?>