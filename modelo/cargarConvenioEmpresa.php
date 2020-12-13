<?php

require_once '../controlador/sesiones.php';
require_once '../controlador/conexion.php';

//die(json_encode($_FILES));

$archivo = $_FILES["archivo"];
$directorio = "Archivos/empresa/convenio/";

if (isset($_POST['nit'])){
    $empresa = $_POST['nit'];
    if ($empresa == 'Seleccione') {
        echo "mal";
        return;
    }
} else {
    $empresa = $_SESSION['nit'];
}

if(!is_dir($directorio)){
    mkdir($directorio, 0755, true);
} 

if(move_uploaded_file($archivo["tmp_name"], $directorio . $archivo["name"])){
    $archivo_url = $directorio . $archivo["name"];
    $archivo_resultado = "Se subio correctamente el archivo";
    $respuesta = array('respuesta' => $archivo_url);
} else {
    echo '->'. error_get_last();
}

$sql = "UPDATE cargar_convenio SET ruta_convenio = '$archivo_url' WHERE empresa = '$empresa'";

$ejecutar = mysqli_query($conexion, $sql);

if ($ejecutar) {
    echo "exito";
} else {
    echo "error";
}

mysqli_close($conexion);
