<?php

class controlador{
    private $negocio;

    public function __construct(){
        $this->negocio = new negocio();
    }

    public function generarPlantilla(){
        return negocio::generarPlantilla();
    }

    //CARGA ARCHIVO DEL ENLACE
    public function generarVista(){
        $enlace = filter_input(INPUT_GET, "ubicacion");
        if($enlace){
                $enlace = $this->negocio->generarEnlace($enlace);
        }else {
            $enlace = $this->negocio->generarEnlace("Index");
        }
              include_once $enlace;
        }

    //Busca el usuario
    public function buscarUsuarioControlador($usuario, $contraseña){
        return $this->negocio->buscarUsuarioNegocio($usuario, $contraseña);
    }

    //Busca el nombre del usuario
    public function buscarDatosControlador($usuario){
        return $this->negocio->buscarDatosNegocio($usuario);
    }
}

?>