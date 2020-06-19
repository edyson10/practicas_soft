<?php

require_once '../controlador/conexion.php';

//die($_POST);

$nit = $_POST['nit'];
$direccionEmpresa = $_POST['direccionEmpresa'];
$telefonoEmpresa = $_POST['telefonoEmpresa'];
$contraseñaEmpresa = $_POST['contraseñaEmpresa'];
$repContraseñaEmpresa = $_POST['repContraseñaEmpresa'];

if ($contraseñaEmpresa != $repContraseñaEmpresa) {
    echo 'mal';
    return;
} else {
    /* if (isset($_POST['contraseñaEmpresa']) && isset($_POST['repContraseñaEmpresa'])) { */
        $sql = "UPDATE persona INNER JOIN empresa ON persona.cedulanit = empresa.nit SET persona.direccion = '$direccionEmpresa', 
        persona.telefono = '$telefonoEmpresa', empresa.contraseña = '$contraseñaEmpresa' where persona.cedulanit = '$nit'";
        $ejecutar = mysqli_query($conexion, $sql);

        if ($ejecutar) {
            echo 'exito';
        } else {
            echo 'error';
        }
    /* } else {
        $sql = "UPDATE persona INNER JOIN empresa ON persona.cedulanit = empresa.nit SET persona.direccion = '$direccionEmpresa',
        persona.telefono = '$telefonoEmpresa' where persona.cedulanit = '$nit'";
        $ejecutar = mysqli_query($conexion, $sql);

        if ($ejecutar) {
            echo 'exito';
        } else {
            echo 'error';
            
        }
    } */

    /* echo json_encode($respuesta); */
}

mysqli_close($conexion);
