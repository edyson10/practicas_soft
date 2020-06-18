<?php

require_once '../controlador/conexion.php';

//die(json_encode($_POST));

$cedulaProfesor = $_POST['cedula'];

$sqlProf = "DELETE from profesor where cedula = '$cedulaProfesor'";
$sqlPer = "DELETE from persona where cedulanit = '$cedulaProfesor'";

$ejecutarProf = mysqli_query($conexion, $sqlProf);
$ejecutarPer = mysqli_query($conexion, $sqlPer);

if ($ejecutarProf && $ejecutarPer) {
    echo 'exito';
    /* $respuesta = array(
        'respuesta' => 'exito',
        'cedulanit' => $cedulaProfesor
    ); 
    echo json_encode($respuesta); */
} else {
    echo 'error';
}

mysqli_close($conexion);
