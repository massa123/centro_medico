<?php

require 'views/index.view.php';

require conexion($bd_config);
if (!$conexion) {
    header('location: error.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['busqueda'])) {
    $busqueda = limpiarDatos($_GET['busqueda']);

    $statement = $conexion->prepare(
        'SELECT * FROM medicos WHERE nomrbre LIKE :busqueda or especialidad LIke :busqueda'
    );
    $statement->excecute(array(':busqueda' => "%$busqueda%"));
    $resultados = statement->fetchAll();

    if (empty($resultados)) {
        $titulos = 'No se encontraron articulos con el resultado: ' . $busqueda;
    } else {
        $titulo = 'Resultados de la busqueda: ' . $busqueda;
    }
} else {
    header('location: ' . RUTA . '/index.php');
}

    require 'views/buscar.view.php';
    
?>