<?php

require_once __dir__.'/../model/getData.php';

class controlador{
    public static $rutaAPP="/puntualmente_login/";

    public function iniciar_sesion(){

        if(!isset($_SESSION)){
            session_start();
        }

        if(isset($_SESSION["id_usuario"])){
            return true;
        }
        return false;
    }

    public function newEvaluacion(){
        include_once(__dir__."/../views/evaluacion/nuevaEvaluacion.php");
    }

    public function pagCrearPreg(){
        include_once(__dir__."/../views/test/admin_eva/crearPreg.php");
    }

    public function paginaAdmin(){
        include_once(__dir__."/../views/admins/admin.php");
    }

    public function pagOperarios(){
        include_once(__dir__."/../views/operarios/operarios.php");
    }

    public function login(){
        include_once(__dir__."/../views/login/login.php");
    }

    public function validar(){
        include_once(__dir__."/../views/login/php/validarlogin.php");
    }

    public function listarPreg(){
        include_once(__dir__."/../views/test/preguntas/preguntas.php");
    }

    public function ahomeuser(){
        include_once(__dir__."/../views/homeuser/homeuser.php");
    }

    function cerrar_sesion(){
        if(!isset($_SESSION)){
            session_start();
        }
        session_destroy();
        header('Location: '.controlador::$rutaAPP.'index.php/login');
    }

    public function index(){
        session_destroy();
        include_once(__dir__."/../views/login/login.php");
    }

}
?>