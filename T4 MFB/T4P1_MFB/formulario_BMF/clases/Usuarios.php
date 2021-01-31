<?php

require_once "Conexion.php";

class Usuarios extends conectar {

    public function agregarUsuario($datos){
        $conexion = conectar::conexion();
        
        $sql = "INSERT INTO usuarios (nombre,
            apellidos,
            control,
            semestre,
            carrera,
            especialidad,
            password)
            VALUES (?,?,?,?,?,?,?)";
            $query = $conexion->prepare($sql);
            $query->bind_param('sssssss', $datos['nombre'],
                                          $datos['apellidos'],
                                          $datos['control'],
                                          $datos['semestre'],
                                          $datos['carrera'],
                                          $datos['especialidad'],
                                          $datos['password']);
            $exito = $query->execute();
            $query->close();
            return $exito;
    }

    public function obtenerUsuario($idUsuario){
        $conexion=conectar::conexion();

        $sql = "SELECT id_usuario,
                        nombre,
                        apellidos,
                        control,
                        semestre,
                        carrera,
                        especialidad,
                        password
                FROM usuarios 
                WHERE id_usuario = '$idUsuario'";
        $result = mysqli_query($conexion,$sql);

        $usuarios = mysqli_fetch_array($result);

        $datos = array(
            "idUsuario" => $usuarios['id_usuario'],
            "nombre"=>$usuarios['nombre'],
            "apellidos"=>$usuarios['apellidos'],
            "control"=>$usuarios['control'],
            "semestre"=>$usuarios['semestre'],
            "carrera"=>$usuarios['carrera'],
            "especialidad"=>$usuarios['especialidad'],
            "password"=>$usuarios['password']
        );
        return $datos;
    }

    public function actualizarUsuario($datos){
        $conexion=conectar::conexion();

        $sql = "UPDATE usuarios
                SET nombre = ?, apellidos = ?, control = ?, semestre = ?, carrera = ?, especialidad = ?, password = ?
                WHERE id_tusuario = ?";
        $query = $conexion->prepare($sql);
        $query->bind_param('sssssssi', $datos['nombre'],
                                       $datos['ubicacion'],
                                       $datos['email'],
                                       $datos['telefono'],
                                       $datos['idTaller']);
        $respuesta = $query->execute();
        $query->close();
        return $respuesta;
    }


    public function eliminarUsuario($idUsuario){
        $conexion = conectar::conexion();

        $sql = "DELETE FROM usuarios
        WHERE id_usuario = ?";
        $query = $conexion->prepare($sql);
        $query->bind_param('i', $idUsuario);
        $respuesta = $query->execute();
        $query->close();
        return $respuesta;
    }

    public function login($usuario, $password) {
        $conexion = Conectar::conexion();

        $sql= "SELECT count(*) as existeUsuario 
        FROM usuarios 
        WHERE nombre = '$usuario' 
        AND  password ='$password'";

        $result = mysqli_query($conexion, $sql);

        $respuesta =mysqli_fetch_array($result)['existeUsuario'];


        if($respuesta > 0 ){
            $_SESSION['nombre']=$usuario;

            $sql="SELECT id_usuario
            FROM usuarios
            WHERE nombre = '$usuario'
            AND  password ='$password' ";
            $result=mysqli_query($conexion,$sql);
            $idUsuario=mysqli_fetch_row($result)[0];
            $_SESSION['idUsuario']=$idUsuario;
            return 1;
        } else{
            return 0;
        }

    }
}

?>