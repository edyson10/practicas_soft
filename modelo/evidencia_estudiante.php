<?php

require_once '../controlador/sesiones.php';
require_once '../controlador/conexion.php';

//die(json_encode($_FILES));

$estudiante = $_SESSION['codigo'];
$fecha_actual = date("Y-m-d");
$directorio = "Archivos/estudiante";

if(!is_dir($directorio)){
    mkdir($directorio, 0755, true);
} 

if(move_uploaded_file($_FILES['evidencia-estudiante']['tmp_name'], $directorio . $_FILES['evidencia-estudiante']['name'])){
    $archivo_url = $_FILES['evidencia-estudiante']['name'];
    $archivo_resultado = "Se subio correctamente el archivo";
    $respuesta = array(
        'respuesta' => $archivo_url
    );
} else {
    echo '->'. error_get_last();
}

$sql = "INSERT INTO evidencia_estudiante (id_evidencia, estudiante, ruta_archivo, fecha) VALUES (NULL, '$estudiante', '$archivo_url', '$fecha_actual')";

$ejecutar = mysqli_query($conexion, $sql);

if ($ejecutar) {
    $respuesta = 'exito';
} else {
    $respuesta = 'error';
}

mysqli_close($conexion);

die(json_encode($respuesta));
