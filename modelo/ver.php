<?php

require_once '../controlador/conexion.php';

if (isset($_POST['ver']) == 'verProfesor') {

    $cedulaProfesor = $_POST['cedula'];

    $sql = "SELECT persona.nombre, profesor.codigo, persona.cedulanit, persona.telefono, persona.direccion, persona.correo, profesor.fechaNacimiento 
            from persona inner join profesor on persona.cedulanit = profesor.cedula where persona.cedulanit = '$cedulaProfesor'";

    $ejecutar = mysqli_query($conexion, $sql);

    if ($ejecutar) {
        $row = $ejecutar->fetch_array(MYSQLI_ASSOC);
        $respuesta = array(
            'respuesta' => 'exito',
            'usuario' => $row['nombre'],
            'codigo' => $row['codigo'],
            'cedulanit' => $row['cedulanit'],
            'telefono' => $row['telefono'],
            'direccion' => $row['direccion'],
            'correo' => $row['correo'],
            'fecha' => $row['fechaNacimiento']
        );
        echo json_encode($respuesta);
    } else {
        echo 'error';
    }
}
