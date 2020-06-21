<?php

require_once '../controlador/sesiones.php';
require_once '../controlador/conexion.php';

//die(json_encode($_FILES));
die(json_encode($_POST));
if(isset($_POST['empresaConvenio'])){
    $empresa = $_POST['empresaConvenio'];
} else {
    $empresa = $_SESSION['cedulanit'];
}

$directorio = "Archivos/empresa/convenio";

if(!is_dir($directorio)){
    mkdir($directorio, 0755, true);
} 

if(move_uploaded_file($_FILES['convenio-empresa']['tmp_name'], $directorio . $_FILES['convenio-empresa']['name'])){
    $archivo_url = $_FILES['convenio-empresa']['name'];
    $archivo_resultado = "Se subio correctamente el archivo";
    $respuesta = array(
        'respuesta' => $archivo_url
    );
} else {
    echo '->'. error_get_last();
}

$sql = "INSERT INTO cargar_convenio (empresa, ruta_archivo) VALUES ('$empresa', '$archivo_url')";

$ejecutar = mysqli_query($conexion, $sql);

if ($ejecutar) {
    $respuesta = 'exito';
} else {
    $respuesta = 'error';
}

mysqli_close($conexion);

die(json_encode($respuesta));