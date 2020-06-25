<?php

require_once '../controlador/conexion.php';

//die(json_encode($_POST));

session_start();
$cedula = $_SESSION['cedulanit'];
$direccionProfesor = $_POST['direccionProfesor'];
$telefonoProfesor = $_POST['telefonoProfesor'];
$contraseñaProfesor = $_POST['contrasenaProfesor'];
$repContraseñaProfesor = $_POST['repContrasenaProfesor'];

if ($contraseñaProfesor != $repContraseñaProfesor) {
    $respuesta = array(
        'respuesta' => 'mal'
    );
    echo json_encode($respuesta);
    return;
} else {
    $sql = "UPDATE persona inner join profesor on persona.cedulanit = profesor.cedula set persona.direccion = '$direccionProfesor', persona.telefono = '$telefonoProfesor', 
            profesor.contrasena = '$contraseñaProfesor' where persona.cedulanit = '$cedula'";
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
