<?php

require_once '../controlador/conexion.php';

$estudiante = $_POST['estudianteConvenio'];
$empresa = $_POST['empresaConvenio'];
$fecha_actual = date("Y-m-d");

$sql = "INSERT INTO crear_convenio (id_convenio, estudiante, empresa, fechaConvenio) VALUES (NULL, '$estudiante', '$empresa', '$fecha_actual')";

$ejecutar = mysqli_query($conexion, $sql);

if ($ejecutar) {
    $respuesta = array(
        'respuesta' => 'exito'
    );
    echo json_encode($respuesta);
} else {
    echo 'error';
}

mysqli_close($conexion);