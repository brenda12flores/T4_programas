<?php 

	require_once "../../../clases/Usuarios.php";
    $usuario = new Usuarios();

    echo json_encode($usuario->obtenerUsuario($_POST['idUsuario']));

 ?>