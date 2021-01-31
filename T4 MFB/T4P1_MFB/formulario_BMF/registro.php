<!DOCTYPE html>
<html lang="en" style="">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario Estudiantes</title>
	<link rel="stylesheet" type="text/css" href="estilos/estilo.css">
	 <link rel="stylesheet" type="text/css" href="librerias/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="librerias/fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="librerias/datatable/dataTables.bootstrap4.min.css">
</head>
<body>
<h1>Formulario de Estudiantes</h1>
<form action="registrar.php" method="POST" class="form-register" id="frmUsuario">
	<h2 class="form_titulo">Crear cuenta</h2>
	<div class="contenedor-inputs">
	<input type="text" name="nombre" id="nombre"  placeholder="Nombre" class="input-48" required="">

	<input type="text" name="apellidos"  id="apellidos"placeholder="Apellidos" class="input-48" required="">

	<input type="text" id="control" name="control" placeholder="Numero de Control" class="input-48" required="">

	<input type="text" name="semestre" id="semestre" placeholder="Semestre" class="input-48" required="">
	
	<select name="esp" class="input-100">
			<option selected value="0"> Carrera </option> 
       		<option value="Ing. Sistemas Computacionales">Ing. Sistemas Computacionales</option> 
       		<option value="Ing. Mecatrónica">Ing. Mecatrónica</option> 
       		<option  value="Ing. Electrónica">Ing. Electrónica</option>
	</select> 

	<select name="especialidad"  id="especialidad" class="input-100"  >
            <option selected value="0"> Especialidad </option> 
   		    <option value="1">Tecnologias moviles</option> 
       		<option value="2">Administración de servicios web</option> 
	</select> 

	<input type="password" name="password" id="password" placeholder="Contraseña" class="input-100" required="">

	<input type="submit" value="Registrar" class="btn_enviar" required>
	<p class="form_link">--Regresar--<a href="index.php">LOGIN</a></p>
	</div>
</form>

</body>
</html>

<div class="modal fade" id="modalActualizarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Actualizar Categoria</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         <form id="frmActualizaUsuario">
          <input type="text" name="idUsuario" id="idUsuario" hidden="">
          Nombre
            <input type="text" id="nombreU" name="nombreU" class="form-control" required="">
            <br>
            Apellidos
            <input type="text" id="apellidosU" name="apellidosU" class="form-control" required="">
            <br>
            Num. Control
            <input type="text" id="controlU" name="controlU" class="form-control" required="">
            <br>
            Semestre
            <input type="text" id="semestreU" name="semestreU" class="form-control" required="">
            <br>
            Carrera:
            <select id="carreraU" name="carreraU" class="form-control">
              <option selected value="0"> Carrera </option> 
              <option value="Ing. Sistemas Computacionales">Ing. Sistemas Computacionales</option> 
              <option value="Ing. Mecatrónica">Ing. Mecatrónica</option> 
              <option value="Ing. Electrónica">Ing. Electrónica</option>
            </select> 
            <br>
            Especialidad:
            <select id="especialidadU" name="especialidadU" class="form-control">
              <option selected value="0"> Especialidad </option> 
              <option value="Tecnologias moviles">Tecnologias moviles</option> 
              <option value="Administración de servicios web">Administración de servicios web</option> 
            </select> 
            <br>
            Password:
            <input type="password" id="passwordU" name="passwordU" class="form-control" required="">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="btnCerrarUpdateCategoria">Cerrar</button>
        <button type="button" class="btn btn-warning" id="btnActualizaUsuario">Actualizar</button>
      </div>
    </div>
  </div>
</div>
</body>
<script src="librerias/js/jquery-3.5.1.min.js"></script>
<script src="librerias/bootstrap/popper.min.js"></script>
<script src="librerias/bootstrap/bootstrap.min.js"></script>
<script src="librerias/datatable/jquery.dataTables.min.js"></script>
<script src="librerias/datatable/dataTables.bootstrap4.min.js"></script>
<script src="librerias/sweetalert.min.js"></script>
</html>
<script src="js/Usuarios.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#tablaUsuariosRegistro').load("vistas/tablaUsuarios.php");

    $('#btnGuardarUsuario').click(function() {
      agregarUsuario();
    });

    $('#btnActualizaUsuario').click(function() {
      actualizaUsuario();
    });
  });
</script>