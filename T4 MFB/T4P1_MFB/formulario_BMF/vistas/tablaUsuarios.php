<?php

require_once "../clases/Conexion.php";
$conexion= new conectar();
$conexion = $conexion->conexion();
?>

<div class="table-responsive">
	<table class="table table-hover" id="tablaUsuariosDataTable">
		<thead>
			<tr>
				<th style="text-align: center;">Nombre</th>
				<th style="text-align: center;">Apellidos</th>
				<th style="text-align: center;">Num. Control</th>
				<th style="text-align: center;">Semestre</th>
				<th style="text-align: center;">Carrera</th>
				<th style="text-align: center;">Especialidad</th>
				<th style="text-align: center;">Editar</th>
				<th style="text-align: center;">Eliminar</th>	
			</tr>
		</thead>
		<tbody>

			<?php
			$sql = "SELECT id_usuario,
			nombre,
			apellidos,
			control,
			semestre,
			carrera,
			especialidad,
			password
			FROM usuarios";
			$result = mysqli_query($conexion,$sql);

			while($mostrar = mysqli_fetch_array($result)){
				$idUsuario=$mostrar['id_usuario'];
				?>
				<tr>
					<td align="center"><?php echo $mostrar['nombre']; ?></td>
					<td align="center"><?php echo $mostrar['apellidos']; ?></td>
					<td align="center"><?php echo $mostrar['control']; ?></td>
					<td align="center"><?php echo $mostrar['semestre']; ?></td>
					<td align="center"><?php echo $mostrar['carrera']; ?></td>
					<td align="center"><?php echo $mostrar['especialidad']; ?></td>
					<td style="text-align: center;">
						<span class="btn btn-warning btn-sm" 
						onclick="obtenerDatosUsuario('<?php echo $idUsuario ?>')" 
						data-toggle="modal" data-target="#modalActualizarUsuario">
						<span class="fas fa-edit"></span>
					</span>
				</td>
				<td style="text-align: center;">
					<span class="btn btn-danger btn-sm" 
					onclick="eliminarUsuario('<?php echo $idUsuario ?>')">
					<span class="fas fa-trash-alt"></span>
				</span>
			</td>
		</tr>
		<?php 
	}
	?>
</tbody>
</table>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$('#tablaUsuariosDataTable').DataTable();
	});
</script>