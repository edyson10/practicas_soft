<?php

require_once '../controlador/conexion.php';

//die(json_encode($_POST));

session_start();
$nit = $_SESSION['nit'];
$direccionEmpresa = $_POST['direccionEmpresa'];
$telefonoEmpresa = $_POST['telefonoEmpresa'];
$contraseñaEmpresa = $_POST['contraseñaEmpresa'];
$repContraseñaEmpresa = $_POST['repContraseñaEmpresa'];

if ($contraseñaEmpresa != $repContraseñaEmpresa) {
    $respuesta = array(
        'respuesta' => 'mal'
    );
    echo json_encode($respuesta);
    return;
} else {
    $sql = "UPDATE persona INNER JOIN empresa ON persona.cedulanit = empresa.nit SET persona.direccion = '$direccionEmpresa', 
        persona.telefono = '$telefonoEmpresa', empresa.contrasena = '$contraseñaEmpresa' where persona.cedulanit = '$nit'";
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
