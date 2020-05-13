<?php

//incluir archivos externos
require_once 'controller/controlador.php';
require_once 'modelo/negocio.php';
require_once 'modelo/conexion.php';
require_once 'modelo/dao/PersonaDAO.php';

//activar almacenamiento en el bufer de la página
ob_start();
$controlador = new controlador();
$controlador->generarPlantilla();
?>