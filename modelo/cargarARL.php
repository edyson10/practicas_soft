<?php

require_once '../controlador/sesiones.php';
require_once '../controlador/conexion.php';

//die(json_encode($_FILES));

$estudiante = $_SESSION['codigo'];
$directorio = "Archivos/estudiante";

if(!is_dir($directorio)){
    mkdir($directorio, 0755, true);
} 

if(move_uploaded_file($_FILES['arl-estudiante']['tmp_name'], $directorio . $_FILES['arl-estudiante']['name'])){
    $archivo_url = $_FILES['arl-estudiante']['name'];
    $archivo_resultado = "Se subio correctamente el archivo";
    $respuesta = array(
        'respuesta' => $archivo_url
    );
} else {
    echo '->'. error_get_last();
}

$sql = "INSERT INTO cargar_arl (estudiante, ruta_archivo) VALUES ('$estudiante', '$directorio')";

$ejecutar = mysqli_query($conexion, $sql);

if ($ejecutar) {
    $respuesta = 'exito';
} else {
    $respuesta = 'error';
}

mysqli_close($conexion);

die(json_encode($respuesta));