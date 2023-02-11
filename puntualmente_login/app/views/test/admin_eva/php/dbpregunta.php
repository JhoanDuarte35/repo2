<?php

    require_once __dir__."/../../../../model/getData.php";
    $pregunta=new GetDatos();

    if(isset($_POST["preg"])&&isset($_POST["puntos"])){
        $result=$pregunta->insert_query("INSERT INTO preguntas(pregunta) VALUES ('".$_POST["preg"]."')");

        echo $result;
    }
?>