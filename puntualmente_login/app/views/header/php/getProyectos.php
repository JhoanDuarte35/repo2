<?php

    require_once __dir__."/../../../model/getData.php";
    $proyectos=new GetDatos();

    class Getproyectos{

        public function allprojects(){
            $result=$proyectos->selectQuery("SELECT * FROM proyectos");
            
            if(count($result)>0){
                return $result;
            }else{
                $nodata="no hay datos";
                return $nodata;
            }
           
        }

    }

?>