<?php

function conexion ($bd_config)  {
    try {
        $conexion = new PDO('mysql:host=localhost;dbname=' . $bd_config['basedatos'] , $bd_config['usuario'], $bd_config['pass']);
        return $conexion;
    } catch (PDOexeption $e) {
        return false;
    }
}

function LimpiarDatos($datos){
    $datos = trim($datos);
    $datos = stripslashes($datos);
    $datos = htmlspecialchars($datos);
    return $datos;
}
?>
