<?php

require_once '../controlador/sesiones.php';
require_once '../controlador/conexion.php';

$empresa = $_SESSION['cedulanit'];
$fecha_actual = date("Y-m-d");
$directorio = "Archivos/empresa/evidencia";

if(!is_dir($directorio)){
    mkdir($directorio, 0755, true);
} 

if(move_uploaded_file($_FILES['archivo-empresa']['tmp_name'], $directorio . $_FILES['archivo-empresa']['name'])){
    $archivo_url = $_FILES['archivo-empresa']['name'];
    $archivo_resultado = "Se subio correctamente el archivo";
    $respuesta = array(
        'respuesta' => $archivo_url
    );
} else {
    echo '->'. error_get_last();
}

$sql = "INSERT INTO evidencia_empresa (id_evidencia, empresa, ruta_archivo, fecha) VALUES (NULL, '$empresa', '$archivo_url', '$fecha_actual')";

$ejecutar = mysqli_query($conexion, $sql);

if ($ejecutar) {
    $respuesta = 'exito';
} else {
    $respuesta = 'error';
}

mysqli_close($conexion);

die(json_encode($respuesta));
