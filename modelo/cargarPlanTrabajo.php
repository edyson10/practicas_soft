<?php

require_once '../controlador/sesiones.php';
require_once '../controlador/conexion.php';

//die(json_encode($_FILES));

$estudiante = $_SESSION['codigo'];
$directorio = "Archivos/estudiante";

if(!is_dir($directorio)){
    mkdir($directorio, 0755, true);
} 

if(move_uploaded_file($_FILES['plan-estudiante']['tmp_name'], $directorio . $_FILES['plan-estudiante']['name'])){
    $archivo_url = $_FILES['plan-estudiante']['name'];
    $archivo_resultado = "Se subio correctamente el archivo";
    $respuesta = array(
        'respuesta' => $archivo_url
    );
} else {
    echo '->'. error_get_last();
}

$sql = "INSERT INTO plan_trabajo (id_plantrabajo, estudiante, ruta_archivo) VALUES (NULL, '$estudiante', '$archivo_url');";

$ejecutar = mysqli_query($conexion, $sql);

if ($ejecutar) {
    $respuesta = 'exito';
} else {
    $respuesta = 'error';
}

mysqli_close($conexion);

die(json_encode($respuesta));