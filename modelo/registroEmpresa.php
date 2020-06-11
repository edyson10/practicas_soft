<?php

require_once '../controlador/conexion.php';

$nombreEmpresa = $_POST['nombreEmpresa'];
$nit = $_POST['nit'];
$representante = $_POST['representante'];
$direccionEmpresa = $_POST['direccionEmpresa'];
$telefonoEmpresa = $_POST['telefonoEmpresa'];
$emailEmpresa = $_POST['emailEmpresa'];
$contraseñaEmpresa = $_POST['contraseñaEmpresa'];
$repContraseñaEmpresa = $_POST['repContraseñaEmpresa'];

if ($contraseñaEmpresa != $repContraseñaEmpresa) {
  $respuesta = array(
    'respuesta' => 'mal'
  );
  echo json_encode($respuesta);
  return;
} else {
  $sqlPer = "INSERT INTO persona (nombre, cedulanit, rol, telefono, direccion, correo) 
          VALUES ('$nombreEmpresa', '$nit', '4', '$telefonoEmpresa', '$direccionEmpresa', '$emailEmpresa')";
  $sqlAdm = "INSERT INTO empresa (nit, representante_legal, cantidad_practicantes, contraseña) 
          VALUES ('$nit', '$representante', '0', '$contraseñaEmpresa')";
  $ejecutarPer = mysqli_query($conexion, $sqlPer);
  $ejecutarEmp = mysqli_query($conexion, $sqlAdm);

  if ($ejecutarPer && $ejecutarEmp) {
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
