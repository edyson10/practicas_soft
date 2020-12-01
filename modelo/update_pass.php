<?php

require_once '../controlador/conexion.php';

//die(json_encode($_POST));

session_start();
$cedula = $_SESSION['cedulanit'];
$contrasena = $_POST['contrasena'];
$repContrasena = $_POST['repcontrasena'];

if ($contrasena != $repContrasena) {
    $respuesta = array(
        'respuesta' => 'mal'
    );
    echo json_encode($respuesta);
    return;
} else {
    $sql = "UPDATE persona inner join administrador on persona.cedulanit = administrador.cedula set persona.direccion = '$direccionAdministrador', persona.telefono = '$telefonoAdministrador'
        , administrador.contrasena = '$contraseñaAdministrador' where persona.cedulanit = '$cedula'";
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