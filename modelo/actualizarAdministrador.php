<?php

require_once '../controlador/conexion.php';

//die(json_encode($_POST));

session_start();
$cedula = $_SESSION['cedulanit'];
$direccionAdministrador = $_POST['direccionAdministrador'];
$telefonoAdministrador = $_POST['telefonoAdministrador'];
$contraseñaAdministrador = $_POST['contraseñaAdministrador'];
$repContraseñaAdministrador = $_POST['repContraseñaAdministrador'];

if ($contraseñaAdministrador != $repContraseñaAdministrador) {
    $respuesta = array(
        'respuesta' => 'mal'
    );
    echo json_encode($respuesta);
    return;
} else {
    /* if (isset($_POST['contraseñaEmpresa']) && isset($_POST['repContraseñaEmpresa'])) { */
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