<?php

require_once '../controlador/conexion.php';

//die(json_encode($_POST));

$cedulaEstudiante = $_POST['cedula'];

$sqlEst = "DELETE from estudiante where cedula = '$cedulaEstudiante'";
$sqlPer = "DELETE from persona where cedulanit = '$cedulaEstudiante'";

$ejecutarEst = mysqli_query($conexion, $sqlEst);
$ejecutarPer = mysqli_query($conexion, $sqlPer);

if ($ejecutarEst && $ejecutarPer) {
    echo 'exito';
    /* $respuesta = array(
        'respuesta' => 'exito',
        'cedulanit' => $cedulaEstudiante
    );
    echo json_encode($respuesta); */
} else {
    echo 'error';
}

mysqli_close($conexion);
