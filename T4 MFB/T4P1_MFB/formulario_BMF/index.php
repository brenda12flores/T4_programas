<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="estilos/estilo.css">
	<link rel="stylesheet" type="text/css" href="librerias/fontawesome/css/all.css">
	
</head>
<body>
<h1>Formulario de Estudiantes</h1>
<form action="frmLogin.php" method="POST" class="form-register" onsubmit="return logear()">
	<h2 class="form_titulo">Bienvenid@</h2>
	<div class="contenedor-inputs">
	<input type="text" name="login" placeholder="Nombre" class="input-100" id="login" required="" >
	
	<input type="password" name="password" placeholder="Contraseña" id="password" class="input-100" required="">
	
	<input type="submit" value="Ingresar" class="btn_ingresar" required>

<p class="form_link">¿Ya tienes una cuenta?<a href="registro.php">REGISTRAR</a></p>
	</div>
</form>

	<div id="formFooter">
				<a class="underlineHover" href="registro.php">REGISTRAR</a>
			</div>
		</div>
	</div>

	<script src="librerias/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript">
		function logear(){
			$.ajax({
				type:"POST",
				data:$('#frmLogin').serialize(),
				url:"procesos/usuario/login/login.php",
				success:function(respuesta){
					respuesta = respuesta.trim();
					console.log(respuesta);
					if(respuesta == 1){
						alert('Acceso aceptado');
						window.location = "vistas/inicio.php";
					}else{
						alert('Acceso denegado');
					}
				}
			});

			return false;
		}
	</script>

</body>
</html>