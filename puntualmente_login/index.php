<?php

require_once __dir__.'/app/controller/controlador.php';

$userPuntualmente = new controlador();
date_default_timezone_set("America/Bogota");

if($userPuntualmente->iniciar_sesion()){

    //ADMIN

    if(isset($_GET["action"]) && $_SESSION["rol"]==1){
        
        switch($_GET["action"]){

            case 'evaguar':
                $userPuntualmente->paginaEvaguar();
                break;
            case 'admin':
                $userPuntualmente->paginaAdmin();
                break;
            case 'operarios':
                $userPuntualmente->pagOperarios();
                break;
            case 'crepre':
                $userPuntualmente->pagcrearPreg();
                break;
            case 'lispre':
                $userPuntualmente->listarPreg();
                break;
            case 'ahomeuser':
                $userPuntualmente->ahomeuser();
                break;
            case 'neweva':
                $userPuntualmente->newEvaluacion();
                break;
            case 'cerrar':
                $userPuntualmente->cerrar_sesion();
                break;
            default:
                $userPuntualmente->paginaAdmin();
                break;
        }
    }
    // Operarios

    else if (isset($_GET["action"])&&$_SESSION["rol"]==2){

        switch ($_GET["action"]){

            case 'operarios':
                $userPuntualmente->pagOperarios();
                break;
            case 'cerrar':
                $userPuntualmente->cerrar_sesion();
               break;
            default:
                $userPuntualmente->pagOperarios();
                break;
        }
    }

    else{
        
    }

}else{

    if(isset($_GET["action"])){
        switch ($_GET["action"]){
            case 'login':
                $userPuntualmente->login();
                break;
            case 'validar':
                $userPuntualmente->validar();
                break;
            default:
                $userPuntualmente->index();
                break;
        }
    }else{
        $userPuntualmente->index();
    }
}


?>