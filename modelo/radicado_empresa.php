<?php

require_once '../controlador/sesiones.php';
require_once '../controlador/conexion.php';

//die(json_encode($_FILES));

$empresa = $_SESSION['cedulanit'];
$directorio = "Archivos/empresa/radicado";

if(!is_dir($directorio)){
    mkdir($directorio, 0755, true);
} 

if(move_uploaded_file($_FILES['radicado-empresa']['tmp_name'], $directorio . $_FILES['radicado-empresa']['name'])){
    $archivo_url = $_FILES['radicado-empresa']['name'];
    $archivo_resultado = "Se subio correctamente el archivo";
    $respuesta = array(
        'respuesta' => $archivo_url
    );
} else {
    echo '->'. error_get_last();
}

$sql = "UPDATE empresa SET ruta_radicado = '$archivo_url' WHERE nit = '$empresa'";

$ejecutar = mysqli_query($conexion, $sql);

if ($ejecutar) {
    $respuesta = 'exito';
} else {
    $respuesta = 'error';
}

mysqli_close($conexion);

die(json_encode($respuesta));