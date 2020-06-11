<?php

require_once '../controlador/conexion.php';

if (isset($_POST['eliminar']) == 'eliminarProfesor') {

    //die(json_encode($_POST));

    $cedulaProfesor = $_POST['cedula'];

    $sqlProf = "DELETE from profesor where cedula = '$cedulaProfesor'";
    $sqlPer = "DELETE from persona where cedulanit = '$cedulaProfesor'";

    $ejecutarProf = mysqli_query($conexion, $sqlProf);
    $ejecutarPer = mysqli_query($conexion, $sqlPer);

    if ($ejecutarProf) {
        if ($ejecutarPer) {
            $respuesta = array(
                'respuesta' => 'exito',
                'cedulanit' => $cedulaProfesor
            );
            echo json_encode($respuesta);
        }
    } else {
        echo 'error';
    }
} else if (isset($_POST['eliminar']) == 'eliminarEstudiante') {

    $cedulaEstudiante = $_POST['cedula'];

    $sqlEst = "DELETE from estudiante where cedula = '$cedulaEstudiante'";
    $sqlPer = "DELETE from persona where cedulanit = '$cedulaEstudiante'";

    $ejecutarEst = mysqli_query($conexion, $sqlEst);
    $ejecutarPer = mysqli_query($conexion, $sqlPer);

    if ($ejecutarEst) {
        if ($ejecutarPer) {
            $respuesta = array(
                'respuesta' => 'exito',
                'cedulanit' => $cedulaEstudiante
            );
            echo json_encode($respuesta);
        }
    } else {
        echo 'error';
    }
}

mysqli_close($conexion);
