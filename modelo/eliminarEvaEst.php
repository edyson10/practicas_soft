<?php

require_once '../controlador/conexion.php';

//die(json_encode($_POST));

$id = $_POST['id'];

$sql = "DELETE FROM evidencia_estudiante WHERE evidencia_estudiante.id_evidencia = '$id'";

$ejecutar = mysqli_query($conexion, $sql);

if ($ejecutar) {
    echo 'exito';
} else {
    echo 'error';
}

mysqli_close($conexion);