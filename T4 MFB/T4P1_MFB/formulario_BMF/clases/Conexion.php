<?php 
class conectar{
    public function conexion(){
        $servidor = "localhost";
        $usuario = "root";
        $password = "";
        $baseDatos = "escuela";
        $conexion = mysqli_connect($servidor, 
            $usuario, 
            $password, 
            $baseDatos);
        return $conexion;
    }
}
?>