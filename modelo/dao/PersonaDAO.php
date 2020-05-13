<?php

class PersonaDAO{

    //busca el usuario en la bd
    function buscarUsuario($usuario, $contraseña){
        $conexion = Conexion::crearConexion();
        $persona = false;
        try {
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stm = $conexion->prepare("select persona.nombre, administrador.codigo from persona inner join administrador 
            on persona.cedulanit = administrador.cedula where persona.correo = ? and administrador.contraseña = ?");
            $stm->bindParam(1, $usuario, PDO::PARAM_STR);
            $stm->bindParam(2, $contraseña, PDO::PARAM_STR);
            $stm->execute();
            $row = $stm->rowCount();
            if ($row>0) {
                $persona=true;
            }
        } catch (Exception $ex) {
            throw new Exception("Error al buscar el usuario en bd");
        }
        return $persona;
    }

    //busca el nombre del usuario en la bd
    function buscarDatosUsuario($usuario){
        $conexion = Conexion::crearConexion();
        try {
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stm = $conexion->prepare("select persona.nombre, persona.cedulanit, persona.direccion, persona.telefono, administrador.fechaNacimiento from persona inner join administrador 
            on persona.cedulanit = administrador.cedula where persona.cedulanit = ? ");
            $stm->bindParam(1, $usuario, PDO::PARAM_STR);
            $stm->execute();
            $persona = $stm->fetch();
        } catch (Exception $ex) {
            throw new Exception("Error al buscar el usuario en bd");
        }
        return $persona;
    }
}

?>