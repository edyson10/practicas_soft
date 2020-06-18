<?php

require_once '../controlador/conexion.php';

/* die(json_encode($_POST)); */

$nit = $_POST['nit_empresa'];

$sqlEmp = "DELETE FROM empresa WHERE nit = '$nit'";
$sqlPer = "DELETE from persona where cedulanit = '$nit'";

$ejecutarEmp = mysqli_query($conexion, $sqlEmp);
$ejecutarPer = mysqli_query($conexion, $sqlPer);

if ($ejecutarEmp && $ejecutarPer) {
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
