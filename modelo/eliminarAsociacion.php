<?php

require_once '../controlador/conexion.php';

//die(json_encode($_POST));

$id_convenio = $_POST['id_convenio'];

$sql = "DELETE FROM `crear_convenio` WHERE id_convenio = '$id_convenio'";

$ejecutar = mysqli_query($conexion, $sql);

if ($ejecutar) {
    echo 'exito';
    /* $respuesta = array(
            'respuesta' => 'exitoso',
            'id_convenio' => $id_convenio
        );
        echo json_encode($respuesta); */
} else {
    echo 'error';
}

mysqli_close($conexion);