<?php

require_once __dir__."/../../../model/getData.php";
$pregunta=new GetDatos();

$result=$pregunta->insert_query("INSERT INTO evaluacion (nombre, descripcion, f_ini, f_fin, lim_tiempo, tipo_tiempo, actualizar, intentos, final_coment, tipo_calific, calificacion, comentario, id_proyecto, id_cargo, observa_user, campos_obli) VALUES ('".$_POST["nombre"]."','".$_POST["descrip"]."','".$_POST["f_ini"]."','".$_POST["f_fin"]."','".$_POST["limtime"]."','".$_POST["tipotime"]."','".$_POST["perActuali"]."','".$_POST["intentos"]."','".$_POST["comentariofinal"]."','".$_POST["tipocalifica"]."','".$_POST["valorcalif"]."','".$_POST["comentario"]."','".$_POST["proyectos"]."','".$_POST["cargo"]."','".$_POST["userob"]."','".$_POST["obligatorio"]."')");

if(!$result){
    $info=array('success'=>false,'msg'=>"Error en la solicitud");
}else{
    $info=array('success'=>false,'msg'=>"Datos Guardados con exito");
}
echo json_encode($info);

?>