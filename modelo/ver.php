<?php

require_once '../controlador/conexion.php';

//die(json_encode($_POST));

if ($_POST['ver'] == 'verEstudiante') {

    $cedulaProfesor = $_POST['cedula'];
    $sql = "SELECT persona.nombre, persona.cedulanit, persona.telefono, persona.direccion, persona.correo, estudiante.codigo, estudiante.fechaNacimiento
    from persona inner join estudiante on persona.cedulanit = estudiante.cedula where persona.cedulanit = '$cedulaProfesor'";
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
    } else {
        echo 'error';
    }
} else if ($_POST['ver'] == 'verEmpresa') {

    $nit = $_POST['cedula'];
    $sql = "SELECT persona.nombre, persona.cedulanit, persona.telefono, persona.direccion, persona.correo, empresa.representante_legal
    from persona inner join empresa on persona.cedulanit = empresa.nit where persona.cedulanit = '$nit'";
    $ejecutar = mysqli_query($conexion, $sql);

    if ($ejecutar) {
        $row = $ejecutar->fetch_array(MYSQLI_ASSOC);
        $respuesta = array(
            'respuesta' => 'exito',
            'usuario' => $row['nombre'],
            'cedulanit' => $row['cedulanit'],
            'telefono' => $row['telefono'],
            'direccion' => $row['direccion'],
            'correo' => $row['correo'],
            'representante' => $row['representante_legal']
        );
    } else {
        echo 'error';
    }
} else if ($_POST['ver'] == 'verDocente') {

    $cedulaProfesor = $_POST['cedula'];
    $sql = "SELECT persona.nombre, persona.cedulanit, persona.telefono, persona.direccion, persona.correo, profesor.codigo, profesor.fechaNacimiento
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
    } else {
        echo 'error';
    }
}

die(json_encode($respuesta));

mysqli_close($conexion);
