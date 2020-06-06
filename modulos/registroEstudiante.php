<?php

require_once '../funciones/conexion.php';

$nombreEstudiante = $_POST['nombreProfesor'];
$cedulaEstudiante = $_POST['cedulaProfesor'];
$telefonoProfesor = $_POST['telefonoProfesor'];
$direccionProfesor = $_POST['direccionProfesor'];
$emailProfesor = $_POST['emailProfesor'];

 /* $stm = $conexion->prepare("INSERT INTO persona (nombre, cedulanit, rol, telefono, direccion, correo) 
    VALUES ('$nombreProfesor', '$cedulaProfesor', '2', '$telefonoProfesor', '$direccionProfesor', '$emailProfesor')"); */
//$stm = $conexion->prepare("INSERT INTO administrador (`codigo`, `cedula`, `fechaNacimiento`, `contraseña`) VALUES ('$cedula', '12312', '2020-06-07', '1234');");

//$sql = "INSERT INTO administrador (`codigo`, `cedula`, `fechaNacimiento`, `contraseña`) VALUES ('$cedulaProfesor', '12312', '2020-06-07', '1234')";
$sql = "INSERT INTO persona (nombre, cedulanit, rol, telefono, direccion, correo) 
        VALUES ('$nombreProfesor', '$cedulaProfesor', '3', '$telefonoProfesor', '$direccionProfesor', '$emailProfesor')";
$ejecutar = mysqli_query($conexion, $sql);

if($ejecutar){
  echo 'exito';       
} else {
  echo 'error';
}