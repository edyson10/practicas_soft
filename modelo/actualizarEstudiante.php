<?php

require_once '../controlador/conexion.php';

//die(json_encode($_POST));

session_start();
$cedula = $_SESSION['cedulanit'];
$direccionEstudiante = $_POST['direccionEstudiante'];
$telefonoEstudiante = $_POST['telefonoEstudiante'];
$contraseñaEstudiante = $_POST['contraseñaEstudiante'];
$repContraseñaEstudiante = $_POST['repContraseñaEstudiante'];

if ($contraseñaEstudiante != $repContraseñaEstudiante) {
    $respuesta = array(
        'respuesta' => 'mal'
    );
    echo json_encode($respuesta);
    return;
} else {
    $sql = "UPDATE persona inner join estudiante on persona.cedulanit = estudiante.cedula set persona.direccion = '$direccionEstudiante', 
    persona.telefono = '$telefonoEstudiante', estudiante.contrasena = '$contraseñaEstudiante' where persona.cedulanit = '$cedula'";
    $ejecutar = mysqli_query($conexion, $sql);

    if ($ejecutar) {
        $respuesta = array(
            'respuesta' => 'exito'
        );
    } else {
        $respuesta = array(
            'respuesta' => 'error'
        );
    }
}

echo json_encode($respuesta);

mysqli_close($conexion);