<?php

require_once '../controlador/conexion.php';

//die(json_encode($_POST));

$nombreEmpresa = $_POST['nombreEmpresa'];
$nit = $_POST['nit'];
$representante = $_POST['representante'];
$direccionEmpresa = $_POST['direccionEmpresa'];
$telefonoEmpresa = $_POST['telefonoEmpresa'];
$emailEmpresa = $_POST['emailEmpresa'];

$contraseñaEmpresa = $_POST['contrasenaEmpresa'];
$repContraseñaEmpresa = $_POST['repContrasenaEmpresa'];

/*
$directorio = "Archivos/empresa/";

if (!is_dir($directorio)) {
  mkdir($directorio, 0755, true);
}
*/

if ($contraseñaEmpresa != $repContraseñaEmpresa) {
  $respuesta = array(
    'respuesta' => 'mal'
  );
  echo json_encode($respuesta);
  return;
} else {
  /*if (move_uploaded_file($_FILES['carga-convenio']['tmp_name'], $directorio . $_FILES['carga-convenio']['name'])) {
    $archivo_url = $_FILES['carga-convenio']['name'];
    $archivo_resultado = "Se subio correctamente el archivo";*/
    $sqlPer = "INSERT INTO persona (nombre, cedulanit, rol, telefono, direccion, correo, contrasena, status_pass) 
            VALUES ('$nombreEmpresa', '$nit', '4', '$telefonoEmpresa', '$direccionEmpresa', '$emailEmpresa', '$contraseñaEmpresa', '0')";
    $sqlAdm = "INSERT INTO empresa (nit, representante_legal, ruta_radicado, cantidad_practicantes) 
            VALUES ('$nit', '$representante', 'Prueba.pdf', '0')";
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
  /* else {
    echo '->' . error_get_last();
  }
}*/

mysqli_close($conexion);
