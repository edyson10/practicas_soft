<?php

include_once '../../modelo/dto/PersonaDTO.php';
require_once '../../modelo/dao/PersonaDAO.php';
require_once '../../controller/controlador.php';
require_once '../../modelo/negocio.php';
require_once '../../modelo/conexion.php';

class Ajax {
    
    //Metodo que identifica el usuario que se quiere loguear
    public function LoguearUsuarioAjax($usuario, $contraseña) {
        $exito = false;
        try {
            $exito = $this->buscarUsuarioAjax($usuario, $contraseña);
            if($exito){
             $controlador = new controlador();
             $nombreLogueado = $controlador->buscarDatosControlador($usuario);
             session_start();
             $user = new PersonaDTO($usuario, $nombreLogueado['nombre'], $nombreLogueado['telefono'], 
                                    $nombreLogueado['correo'], $nombreLogueado['direccion']);
             $_SESSION["Usuario"] = serialize($user); 
            }else{

            }
        } catch (Exception $exc) {
            echo json_encode(array("exito" => false, "error" => $exc->getMessage()));
        }
        if ($exito) {
            echo json_encode(array("exito" => true));
        } else {
            echo json_encode(array("exito" => false, "error" => "Revise su Usuario y contraseña"));
        }
    }

    //busca el usuario
    public function buscarUsuarioAjax($usuario, $contraseña) {
        $controlador = new controlador();
        return $controlador->buscarUsuarioControlador($usuario, $contraseña);
    }

    //Metodo que recuerda al usuario su contraseña
    /*
    public function RecordarUsuarioAjax($usuario) {
        $exito=false;
        try{
            $controlador = new controlador();
            $mensaje = $controlador->buscarUsuarioClave($usuario);
            $mail = new Mail();
            $mail->enviarCorreoRecordarContraseña($mensaje['nombre'],$mensaje['apellidos'],$mensaje['correo'],$mensaje['clave'],$mensaje['tipo']);
        }catch(Exception $ex){
            echo 'Algo salió mal';
        }
        if($mail){
            echo 'exito';
        }else{
            echo 'error';
        }
    }
    */
    
    //    Metodo que registra el usuario 
    /*
    public function RegistrarFuncionarioAjax($documento, $nombre, $apellido, $telefono, $correo, $direccion, $contraseña) {
        $exito = false;
        try {
            $controlador = new controlador();
            $buscar = $controlador->verificarUsuarioControlador($documento);

            if($buscar == 0){
                
                $user = new PersonaDTO($documento,$nombre,$apellido,$telefono,$correo,$direccion,$contraseña,"Funcionario");
                $registro = $controlador->registrarFuncionarioControlador($user);
                
                if($registro){
                    $exito = true;
                }
            }
        } catch (Exception $exc) {
            echo json_encode(array("exito" => false, "error" => $exc->getMessage()));
        }
        if ($exito) {
            echo json_encode(array("exito" => true));
        } else {
            echo json_encode(array("exito" => false, "error" => "Funcionario con esa cédula ya está registrado"));
        }
    }
    */
    
    //muestra la informacion de cada funcionario en modal
    /*
    public function mostrarInfoFuncionarioAjax($usuario) {
        $exito = false;
        $respuesta = "";
        try {
            $controlador = new controlador();
            $consulta = $controlador->buscarDatosControlador($usuario);
            if (isset($consulta)) {
                $exito = true;
                $respuesta = $consulta['cedula'].'ª'.$consulta['nombre'].'ª'.$consulta['apellidos'].'ª'.
                             $consulta['telefono'].'ª'.$consulta['direccion'].'ª'.$consulta['correo'].'ª';
            }
        } catch (Exception $exc) {
            echo json_encode(array("exito" => false, "error" => $exc->getMessage()));
        }
        if ($exito) {
            echo json_encode(array("respuesta" => $respuesta));
        } else {
            echo json_encode(array("exito" => false, "error" => "No se pudo mostrar la informacion"));
        }
    }
    */
    
    //CAMBIAR CONTRASEÑA
    /*
    public function cambiarContraseñaAjax($usuario, $anterior, $nueva) {
        $exito = false;
        try {
            $controlador = new controlador();
            $verificar = $controlador->verificarClaveControlador($usuario, $anterior);
            if ($verificar) {
                $controlador->cambiarContraseñaControlador($usuario, $nueva);
                $exito = true;
            }
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
        if ($exito) {
            echo 'exito';
        } else {
            echo 'no';
        }
    }
    */
    
    ////////////////////////METODOS DROGUERIA////////////////////////////////////
    //busca la drogueria
    /*
    public function buscarDrogueriaAjax($drogueria) {
        $exito = false;
        try {
            $controlador = new controlador();
            $consulta = $controlador->buscarDrogueriaControlador($drogueria);
            if ($consulta) {
                $exito = true;
            }
        } catch (Exception $exc) {
            echo json_encode(array("exito" => false, "error" => $exc->getMessage()));
        }
        if ($exito) {
            echo json_encode(array("exito" => true));
        } else {
            echo json_encode(array("exito" => false, "error" => "No se encuentra la drogueria"));
        }
    }
    */
    
    
    //    Metodo que registra la drogueria 
    /*
    public function RegistrarDrogueriaAjax($nit, $nombre, $telefono, $direccion, $encargado) {
        $exito = false;
        try {
            $controlador = new controlador();
            $buscar = $controlador->buscarDrogueriaControlador($nit);
            
            if(!$buscar){
                
                $drogueria = new DrogueriaDTO($nit, $nombre, $telefono, $direccion, $encargado);
                $registro = $controlador->registrarDrogueriaControlador($drogueria);
                
                if($registro){
                    $exito = true;
                }
            }
        } catch (Exception $exc) {
            echo json_encode(array("exito" => false, "error" => $exc->getMessage()));
        }
        if ($exito) {
            echo json_encode(array("exito" => true));
        } else {
            echo json_encode(array("exito" => false, "error" => "Drogueria con ese nit ya esta registrado"));
        }
    }
    */

}

    //   Se crea una instancia de la clase Ajax, para poder acceder a los metodos que contiene
    $ajax = new Ajax();

    //   Si esta variable es diferente de Null se debe ingresar el usuario
    $loguear = isset($_POST["ingresarUsuario"],$_POST["ingresarContraseña"],$_POST["ingresarTipo"]);
    $recordar = isset($_POST["recordarUsuario"]);
    $registrar = isset($_POST["registrarDocumento"],$_POST["registrarNombre"],$_POST["registrarApellido"],$_POST["registrarTelefono"],
            $_POST["registrarCorreo"],$_POST["registrarDireccion"],$_POST["registrarContraseña"]);
    
    if($loguear){
        $ajax->LoguearUsuarioAjax($_POST["ingresarUsuario"],$_POST["ingresarContraseña"],$_POST["ingresarTipo"]);
    }else if($recordar){
        $ajax->RecordarUsuarioAjax($_POST["recordarUsuario"]);
    }

?>