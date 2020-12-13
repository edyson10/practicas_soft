<?php

require_once '../controlador/sesiones.php';
require_once '../controlador/conexion.php';

//die(json_encode($_POST));

$archivo = $_FILES["archivo"];
$empresa = $_POST['nit'];
$directorio = "Archivos/empresa/radicado/";

if ($empresa == 'Seleccione') {
    echo "mal";
    return;
}
/*
$sql = "SELECT ruta_radicado FROM empresa WHERE nit = '$empresa'";
$ejecutar = mysqli_query($conexion, $sql);
$rowcount = mysqli_num_rows($ejecutar);

if ($rowcount > 0) {
    echo "existe";
    return;
} else {
    */
    if (!is_dir($directorio)) {
        mkdir($directorio, 0755, true);
    }

    if (move_uploaded_file($archivo["tmp_name"], $directorio . $archivo["name"])) {
        $archivo_url = $directorio . $archivo["name"];
        $archivo_resultado = "Se subio correctamente el archivo";
    } else {
        echo '->' . error_get_last();
    }

    $sql = "UPDATE empresa SET ruta_radicado = '$archivo_url' WHERE nit = '$empresa'";

    $ejecutar = mysqli_query($conexion, $sql);

    if ($ejecutar) {
        echo "exito";
    } else {
        echo "error";
    }
//}

mysqli_close($conexion);
