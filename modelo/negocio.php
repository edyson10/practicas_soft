<?php

class controlador
{
    private $negocio;

    public function __construct()
    {
        $this->negocio = new negocio();
    }

    public function generarPlantilla()
    {
        return negocio::generarPlantilla();
    }

    //CARGA ARCHIVO DEL ENLACE
    public function generarVista()
    {
        $enlace = filter_input(INPUT_GET, "ubicacion");
        if ($enlace) {
            $enlace = $this->negocio->generarEnlace($enlace);
        } else {
            $enlace = $this->negocio->generarEnlace("Inicio"); //Donde va a iniciar la aplicacion
        }
        require_once $enlace;
    }
}
