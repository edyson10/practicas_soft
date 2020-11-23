<?php

require_once '../controlador/conexion.php';

//die(json_encode($_POST));

$nombreEstudiante = $_POST['nombreEstudiante'];
$cedulaEstudiante = $_POST['cedulaEstudiante'];
$telefonoEstudiante = $_POST['telefonoEstudiante'];
$direccionEstudiante = $_POST['direccionEstudiante'];
$emailEstudiante = $_POST['emailEstudiante'];
$codigoEstudiante = $_POST['codigoEstudiante'];
$fechaEstudiante = $_POST['fechaEstudiante'];
$contrasenaEstudiante = $_POST['contrasenaEstudiante'];
$repContrasenaEstudiante = $_POST['repContrasenaEstudiante'];

if ($contrasenaEstudiante != $repContrasenaEstudiante) {
  $respuesta = array(
    'respuesta' => 'mal'
  );
  echo json_encode($respuesta);
  return;
} else {
  $sqlPer = "INSERT INTO persona (nombre, cedulanit, rol, telefono, direccion, correo) 
          VALUES ('$nombreEstudiante', '$cedulaEstudiante', '3', '$telefonoEstudiante', '$direccionEstudiante', '$emailEstudiante')";
  $sqlAdm = "INSERT INTO estudiante (`codigo`, `cedula`, `fechaNacimiento`, `contrasena`) 
          VALUES ('$codigoEstudiante', '$cedulaEstudiante', '$fechaEstudiante', '$contrasenaEstudiante')";
  $ejecutarPer = mysqli_query($conexion, $sqlPer);
  $ejecutarEst = mysqli_query($conexion, $sqlAdm);

  if ($ejecutarPer && $ejecutarEst) {
    $respuesta = array(
      'respuesta' => 'exito'
    );
  } else {
    $respuesta = array(
      'respuesta' => 'error'
    );
  }
  echo json_encode($respuesta);
}

mysqli_close($conexion);
