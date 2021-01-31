function agregarUsuario(){
	$.ajax({
		method: "POST",
		data: $('#frmUsuario').serialize(),
		url: "procesos/usuario/registro/agregarUsuario.php",
		success:function(respuesta){
			respuesta = respuesta.trim();
			if (respuesta == 1) {
				$('#tablaUsuariosRegistro').load("vistas/tablaUsuarios.php");
				$('#nombre').val("");
				$('#apellidos').val("");
				$('#semestre').val("");
				$('#control').val("");
				alert("Agregado con exito");
			} else {
				alert("Fallo al algregar");
			}
		}
	});
}

function eliminarUsuario(idUsuario){
	idUsuario = parseInt(idUsuario);
	if (idUsuario < 1) {
		swal("No tienes id de categoria");
		return false;
	} else{
		//*******************************************************
		swal({
			title: "¿Estas seguro de eliminar esta categoria?",
			text: "Una vez eliminada, no se podra recuperarse!",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		})
		.then((willDelete) => {
			if (willDelete) {
				$.ajax({
					type:"POST",
					data:"idUsuario=" + idUsuario,
					url:"procesos/usuario/registro/eliminarUsuario.php",
					success:function(respuesta){
						respuesta = respuesta.trim();
						if (respuesta ==1) {
							$('#tablaUsuariosRegistro').load("vistas/tablaUsuarios.php");
							swal("Eliminado con exito!", {
								icon: "success",
							});
						} else{
							swal(":(","Error al eliminar","error");
						}
					}
				});
			} 
		});
		//*******************************************************
	}
}

function obtenerDatosUsuario(idUsuario){
	$.ajax({
		type:"POST",
		data:"idUsuario=" + idUsuario,
		url:"procesos/usuario/registro/obtenerUsuario.php",
		success:function(respuesta) {
			respuesta = jQuery.parseJSON(respuesta);

			$('#idUsuario').val(respuesta['idUsuario']);
			$('#nombreU').val(respuesta['nombre']);
			$('#apellidosU').val(respuesta['apellidos']);
			$('#controlU').val(respuesta['control']);
			$('#semestreU').val(respuesta['semestre']);
			$('#carreraU').val(respuesta['carrera']);
			$('#especialidadU').val(respuesta['especialidad']);
			$('#passwordU').val(respuesta['password']);
		}
	});
}

function actualizaUsuario(){
	$.ajax({
		type: "POST",
		data: $('#frmActualizaUsuario').serialize(),
		url: "procesos/usuario/registro/actualizaUsuario.php",
		success:function(respuesta){
			respuesta = respuesta.trim();

			if (respuesta == 1) {
				$('#tablaCategorias').load("categorias/tablaCategoria.php");
				$('#btnCerrarUpdateCategoria').click();
				alert("Actualizado con exito");
			}else {
				alert("Error al Actualizar");
			}
		}
	});
}