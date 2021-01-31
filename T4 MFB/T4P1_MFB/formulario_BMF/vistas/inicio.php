<?php 
session_start();

if (isset($_SESSION['nombre'])) {
	include "header.php";
	?>

<h1>Hola</h1>
<a type="submit" href="../procesos/usuario/salir.php">Salir</a>

	<?php
	include "footer.php";
} else {
	header("location:../index.php");
}
?>