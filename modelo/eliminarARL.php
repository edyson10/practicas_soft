<?php

require_once '../controlador/conexion.php';

//die(json_encode($_POST));

$codigo = $_POST['codigo'];

$sql = "DELETE FROM cargar_arl where estudiante = '$codigo'";

$ejecutar = mysqli_query($conexion, $sql);

if ($ejecutar) {
    echo 'exito';
} else {
    echo 'error';
}

mysqli_close($conexion);