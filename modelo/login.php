<?php

require_once '../controlador/conexion.php';

//die(json_encode($_POST));

$ingresarUsuario = $_POST['ingresarUsuario'];
$ingresarContrasena = $_POST['ingresarContrasena'];
$ingresarTipo = $_POST['ingresarTipo'];

if ($ingresarTipo == 'Seleccione') {
    $respuesta = array('respuesta' => 'seleccion');
    echo json_encode($respuesta);
    return;
} else {
    if ($ingresarTipo == 'Administrador') {
        $sql = "SELECT persona.nombre, administrador.codigo, persona.cedulanit, persona.telefono, persona.direccion, persona.correo, administrador.fechaNacimiento 
        from persona inner join administrador on persona.cedulanit = administrador.cedula where persona.correo = '$ingresarUsuario' 
        and persona.contrasena = '$ingresarContrasena' or administrador.codigo = '$ingresarUsuario'";

        $ejecutar = mysqli_query($conexion, $sql);
        $rowcount = mysqli_num_rows($ejecutar);

        if ($rowcount > 0) {
            $row = $ejecutar->fetch_array(MYSQLI_ASSOC);
            session_start();
            $_SESSION['rol'] = 1;
            $name = explode(" ", $row['nombre']);
            $nombre = $name[0];
            $_SESSION['usuario'] = $nombre;
            $_SESSION['cedulanit'] = $row['cedulanit'];
            $_SESSION['codigo'] = $row['codigo'];
            $_SESSION['correo'] = $row['correo'];
            $respuesta = array(
                'respuesta' => 'exitoso',
                'rol' => 'admin'
            );
        } else {
            $respuesta = array('respuesta' => 'error');
        }
        echo json_encode($respuesta);
    } else if ($ingresarTipo == 'Empresa') {
        $sql = "SELECT persona.nombre, empresa.nit, persona.cedulanit, empresa.representante_legal, persona.telefono, persona.direccion, persona.correo 
        from persona inner join empresa on persona.cedulanit = empresa.nit where persona.correo = '$ingresarUsuario' 
        and persona.contrasena = '$ingresarContrasena'";

        $ejecutar = mysqli_query($conexion, $sql);
        $rowcount = mysqli_num_rows($ejecutar);

        if ($rowcount > 0) {
            $row = $ejecutar->fetch_array(MYSQLI_ASSOC);
            session_start();
            $_SESSION['rol'] = 4;
            $name = explode(" ", $row['nombre']);
            $nombre = $name[0];
            $_SESSION['usuario'] = $nombre;
            $_SESSION['nit'] = $row['cedulanit'];
            $_SESSION['correo'] = $row['correo'];
            $respuesta = array(
                'respuesta' => 'exitoso',
                'rol' => 'empresa'
            );
        } else {
            $respuesta = array('respuesta' => 'error');
        }
        echo json_encode($respuesta);
    } else if ($ingresarTipo == 'Estudiante') {
        $sql = "SELECT persona.nombre, estudiante.codigo, persona.cedulanit, persona.telefono, persona.direccion, persona.correo, estudiante.fechaNacimiento 
        from persona inner join estudiante on persona.cedulanit = estudiante.cedula where persona.correo = '$ingresarUsuario' 
        and persona.contrasena = '$ingresarContrasena' or estudiante.codigo = '$ingresarUsuario'";

        $ejecutar = mysqli_query($conexion, $sql);
        $rowcount = mysqli_num_rows($ejecutar);

        if ($rowcount > 0) {
            $row = $ejecutar->fetch_array(MYSQLI_ASSOC);
            session_start();
            $_SESSION['rol'] = 3;
            $name = explode(" ", $row['nombre']);
            $nombre = $name[0];
            $_SESSION['usuario'] = $nombre;
            $_SESSION['cedulanit'] = $row['cedulanit'];
            $_SESSION['codigo'] = $row['codigo'];
            $_SESSION['correo'] = $row['correo'];
            $respuesta = array(
                'respuesta' => 'exitoso',
                'rol' => 'estudiante'
            );
        } else {
            $respuesta = array('respuesta' => 'error');
        }
        echo json_encode($respuesta);
    } else if ($ingresarTipo == 'Profesor') {
        $sql = "SELECT persona.nombre, profesor.codigo, persona.cedulanit, persona.telefono, persona.direccion, persona.correo, profesor.fechaNacimiento 
        from persona inner join profesor on persona.cedulanit = profesor.cedula where persona.correo = '$ingresarUsuario' 
        and persona.contrasena = '$ingresarContrasena' or profesor.codigo = '$ingresarUsuario'";

        $ejecutar = mysqli_query($conexion, $sql);
        $rowcount = mysqli_num_rows($ejecutar);

        if ($rowcount > 0) {
            $row = $ejecutar->fetch_array(MYSQLI_ASSOC);
            session_start();
            $_SESSION['rol'] = 2;
            $name = explode(" ", $row['nombre']);
            $nombre = $name[0];
            $_SESSION['usuario'] = $nombre;
            $_SESSION['cedulanit'] = $row['cedulanit'];
            $_SESSION['codigo'] = $row['codigo'];
            $_SESSION['correo'] = $row['correo'];
            $respuesta = array(
                'respuesta' => 'exitoso',
                'rol' => 'profesor'
            );
        } else {
            $respuesta = array('respuesta' => 'error');
        }
        echo json_encode($respuesta);
    }
}

mysqli_close($conexion);
