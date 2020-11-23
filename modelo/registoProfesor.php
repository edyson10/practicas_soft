<?php

require_once '../controlador/conexion.php';

//die(json_encode($_POST));

$nombreProfesor = $_POST['nombreProfesor'];
$cedulaProfesor = $_POST['cedulaProfesor'];
$telefonoProfesor = $_POST['telefonoProfesor'];
$direccionProfesor = $_POST['direccionProfesor'];
$emailProfesor = $_POST['emailProfesor'];
$codigoProfesor = $_POST['codigoProfesor'];
$fechaProfesor = $_POST['fechaProfesor'];
$contrasenaProfesor = $_POST['contrasenaProfesor'];
$repContrasenaProfesor = $_POST['repContrasenaProfesor'];

if ($contrasenaProfesor != $repContrasenaProfesor) {
  $respuesta = array(
    'respuesta' => 'mal'
  );
  echo json_encode($respuesta);
  return;
} else {
  $sqlPer = "INSERT INTO persona (nombre, cedulanit, rol, telefono, direccion, correo) 
          VALUES ('$nombreProfesor', '$cedulaProfesor', '2', '$telefonoProfesor', '$direccionProfesor', '$emailProfesor')";
  $sqlAdm = "INSERT INTO profesor (`codigo`, `cedula`, `fechaNacimiento`, `contrasena`) 
          VALUES ('$codigoProfesor', '$cedulaProfesor', '$fechaProfesor', '$contrasenaProfesor')";
  $ejecutarPer = mysqli_query($conexion, $sqlPer);
  $ejecutarProf = mysqli_query($conexion, $sqlAdm);

  if ($ejecutarPer && $ejecutarProf) {
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
