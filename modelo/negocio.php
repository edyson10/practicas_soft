<?php

class negocio{

    //GENERA LA PLANTILLA
	public function generarPlantilla(){
		include 'vista/index.php';
    }
    
    //busca el usuario
    public function buscarUsuarioNegocio($usuario, $contraseña){
        return PersonaDAO::buscarUsuario($usuario, $contraseña);
    }

    //GENERA ENLACE DE LA BARRA DE NAVEGACION
	public function generarEnlace($enlace){
        if($this->validarPestañas($enlace)){
            return "view/modulos/pestañas/".$enlace.".php";
        }else{
            return "view/modulos/pestañas/errorpage.php";
        }
    }
    
    //OBTIENE A PESTAÑA DEL MENU
	private function validarPestañas($pestaña){
		$exito=false;
		$pestañas=array("Inicio","ErrorPage","Perfil","Salir");
		if(in_array($pestaña, $pestañas)){
			$exito=true;
		}
		return $exito;
    }
    
    //busca el nombre del usuario
    public function buscarDatosNegocio($usuario){
        return PersonaDAO::buscarDatosUsuario($usuario);
    }

}

?>