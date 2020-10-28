<?php

class negocio
{

    //GENERA LA PLANTILLA
    public function generarPlantilla()
    {
        include 'view/plantilla.php';
    }

    //GENERA ENLACE DE LA BARRA DE NAVEGACION
    public function generarEnlace($enlace)
    {
        if ($this->validarPestañas($enlace)) {
            return "view/modulos/pestañas/" . $enlace . ".php";
        } else if ($this->validarPestañasAdmin($enlace)) {
            return "view/modulos/pestañas/pestanasAdmin/" . $enlace . ".php";
        } else if ($this->validarPestañasProf($enlace)) {
            return "view/modulos/pestañas/pestanasProf/" . $enlace . ".php";
        } else if ($this->validarPestañasEst($enlace)) {
            return "view/modulos/pestañas/pestanasEst/" . $enlace . ".php";
        } else if ($this->validarPestañasEmp($enlace)) {
            return "view/modulos/pestañas/pestanasEmp/" . $enlace . ".php";
        } else {
            return "view/modulos/pestañas/errorpage.php";
        }
    }

    //OBTIENE A PESTAÑA DEL MENU
    private function validarPestañas($pestaña)
    {
        $exito = false;
        $pestañas = array("Inicio", "ErrorPage", "Perfil", "Salir", "Perfil_administrador", "Perfil_profesor", "Perfil_estudiante", "Perfil_empresa");
        if (in_array($pestaña, $pestañas)) {
            $exito = true;
        }
        return $exito;
    }

    private function validarPestañasAdmin($pestaña)
    {
        $exito = false;
        $pestañas = array("RegistrarProfesor", "VisualizarProfesor", "RegistrarEstudiante", "VisualizarEstudiante", "RegistrarEmpresa", "VisualizarEmpresa", "Historial");
        if (in_array($pestaña, $pestañas)) {
            $exito = true;
        }
        return $exito;
    }

    private function validarPestañasEmp($pestaña)
    {
        $exito = false;
        $pestañas = array("Evaluacion_practicas", "Evidencia");
        if (in_array($pestaña, $pestañas)) {
            $exito = true;
        }
        return $exito;
    }

    private function validarPestañasEst($pestaña)
    {
        $exito = false;
        $pestañas = array("Practicas_evaluacion", "Evidencias");
        if (in_array($pestaña, $pestañas)) {
            $exito = true;
        }
        return $exito;
    }

    private function validarPestañasProf($pestaña)
    {
        $exito = false;
        $pestañas = array("Asociacion", "Convenio_evaluacion", "Historiales", "Registrar_estudiante", "Visualizar_estudiante", "Registrar_empresa", "Visualizar_empresa");
        if (in_array($pestaña, $pestañas)) {
            $exito = true;
        }
        return $exito;
    }
}
