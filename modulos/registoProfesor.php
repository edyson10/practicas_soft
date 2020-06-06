<?php

require_once '../funciones/conexion.php';

$nombreProfesor = $_POST['nombreProfesor'];
$cedulaProfesor = $_POST['cedulaProfesor'];
$telefonoProfesor = $_POST['telefonoProfesor'];
$direccionProfesor = $_POST['direccionProfesor'];
$emailProfesor = $_POST['emailProfesor'];
$codigoProfesor = $_POST['codigoProfesor'];
$fechaProfesor = $_POST['fechaProfesor'];
$contraseñaProfesor = $_POST['contraseñaProfesor'];
$repContraseñaProfesor = $_POST['repContraseñaProfesor'];

if ($contraseñaProfesor != $repContraseñaProfesor) {
  echo 'mal';
} else {
  $sqlPer = "INSERT INTO persona (nombre, cedulanit, rol, telefono, direccion, correo) 
          VALUES ('$nombreProfesor', '$cedulaProfesor', '2', '$telefonoProfesor', '$direccionProfesor', '$emailProfesor')";
  $sqlAdm = "INSERT INTO administrador (`codigo`, `cedula`, `fechaNacimiento`, `contraseña`) 
          VALUES ('$codigoProfesor', '$cedulaProfesor', '$fechaProfesor', '$contraseñaProfesor')";
  $ejecutarPer = mysqli_query($conexion, $sqlPer);
  $ejecutarAdm = mysqli_query($conexion, $sqlAdm);

  if ($ejecutarPer) {
    if($ejecutarAdm){
      echo 'exito';
    }
  } else {
    echo 'error';
  }
}
