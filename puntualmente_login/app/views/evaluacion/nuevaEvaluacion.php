<?php include_once (__dir__.'/../header/header.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Evaluación</title>
    
    <!-- fecha -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap-responsive.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.js"></script>
    <link rel="stylesheet" href="<?php echo controlador::$rutaAPP?>app/views/evaluacion/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>

<div class="steps clearfix">
    <ul role="tablist">
        <li role="tab" class="first current" aria-selected="true">
            <a href="#" aria-controls="wizard-p-0">
                <span class="current-info audible">Paso actual: </span>
                <span class="numbre">1.</span>
                "GENERAL"
            </a>
        </li>
    </ul>
</div>

<div class="formeva">

    <form class="form-horizontal" autocomplete="off" id="formEvaluacion" name="formEvaluacion" onsubmit="return false">

    <h1>EVALUACIÓN</h1>
    <br>
    <div class="col-mb-10">
        <label class="form-label">Nombre</label>
        <input type="text" class="form-control" id="evanombre" placeholder="Nombre de la evaluacion" require>
    </div>
    <br>
    <div class="form-floating">
        <textarea class="form-control" placeholder="Leave a comment here" id="descrip" style="height: 100px" require></textarea>
        <label for="floatingTextarea2">Descripción</label>
    </div>
    <br>
    <h2>Tiempo</h2>
    <br>
    <div class="flex-row d-flex justify-content-center">
      <div class="col-lg-6 col-11 px-1">
        <div class="input-group input-daterange">
          <input type="text" id="f_ini" class="form-control text-left mr-2" require>
          <label class="ml-3 form-control-placeholder" id="start-p" for="f_ini">Fecha de inicio</label>
          <span class="fa fa-calendar" id="fa-1"></span>
          <input type="text" id="f_fin" class="form-control text-left ml-2" require>
          <label class="ml-3 form-control-placeholder" id="end-p" for="f_fin">Fecha de finalización</label>
          <span class="fa fa-calendar" id="fa-2"></span>
        </div>
      </div>
    </div>
    <script>
        $(document).ready(function(){
        $('.input-daterange').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        calendarWeeks : true,
        clearBtn: true,
        disableTouchKeyboard: true
    });
    });
    </script>
    
    <br>
    
    <div class="from-control d-flex">
        <label for="limtime" class="control-label col-md-2">Limite de tiempo</label>  
        <input type="text" class="form-control  col-md-2" id="limtime"> 
        <select class="form-select form-select-sm- col-md-3" aria-label=".form-select-sm example" id="tipotime" require>
                <option selected value="0">Sin tiempo</option>
                <option value="1">Segundos</option>
                <option value="2">Minutos</option>
                <option value="3">Horas</option>
                <option value="4">Dias</option>
        </select>
    </div>
     

    <br>
    <h2>Calificación y Esquema</h2>
    <br>
    <div class="d-flex form-group">
        <div class="col-md-5 d-flex">
            <label for="perActuali">Permitir la actualización</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="perActuali" require>
                <option selected disabled="selected">Selecciona</option>
                <option value="1">Si</option>
                <option value="0">No</option>
            </select>
        </div>
        
        <div class="col-md-5 d-flex">
        <label for="intentos">Intentos permitidos</label>
        <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="intentos" require>
            <option selected disabled="selected">Selecciona</option>
            <?php
            for ($i=0; $i < 10; $i++) { 
                ?><option value=<?php echo $i ?>><?php echo $i ?></option>
            <?php
            }
            ?>
            <option value="100">sin limite</option>
        </select>
        </div>
    </div>
    <br>


    <h2>Retroalimentación Global</h2>
    <br>
    <div class="form-group d-flex">
        <label for="comentariofinal" class="control-label col-md-2">Comentario al Finalizar</label>
        <select class="form-select form-select-sm col-md-2" aria-label=".form-select-sm example" id="comentariofinal" require>
            <option selected disabled="selected">Selecciona</option>
            <option value="1">Si</option>
            <option value="2">No</option>
        </select>
        
    </div>
    <br>
<div class=" d-flex form-group">
    <label class="control-label col-md-2" for="limite">Limite de Calificación</label>
    <div class="col-md-3">
        <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="tipocalifica" require>
        <option selected disabled="selected">Selecciona</option>
        <option value="=">Igual a</option>
        <option value="<">Menor a</option>
        <option value=">">Mayor a</option>
        <option value="<=">Menor o Igual a</option>
        <option value=">=">Mayor o Igual a</option>
    </select>
    </div>
    <div class="col-md-2">
        <input type="text" id="valor" class="form-control">
    </div>
    <span class=" col-md-2 text-muted">minimo 10% 
        <br> maximo 100%</span>
</div>
    <br>

    <div class="form-floating">
        <textarea class="form-control" placeholder="Leave a comment here" id="comentario" style="height: 100px" require></textarea>
        <label for="comentario">Comentario</label>
    </div>
    
    <br>

    <h2>Ajustes Comunes</h2>
    <br>
    <div class="d-flex form-group">
    <label class="control-label col-md-2">Proyecto</label>
    <?php
        require_once __dir__."/../../model/getData.php";
        $proyectos=new GetDatos();
        
        $result=$proyectos->selectQuery("SELECT * FROM proyectos");
                    
    ?>

        <select class="form-select" name="proyectos" id="proyectos" require>
            <option selected disabled="selected">Proyectos</option>
            <?php
                foreach($result as $value){  ?>
            <option value="<?php echo $value['id_proyecto']?>"><?php echo $value['Nombre']?></option>
            <?php 
            }
            ?>
        </select>
        <br>
        <label class="control-label col-md-2">ROL de Usuario</label>
        
        <?php
        require_once __dir__."/../../model/getData.php";
        $roles=new GetDatos();
        
        $resultado=$roles->selectQuery("SELECT * FROM roles");
                    
    ?>

        <select class="form-select" name="cargo" id="cargo" require>
            <option selected disabled="selected">Roles</option>
            <?php
                foreach($resultado as $value){  ?>
            <option value="<?php echo $value['id_rol'] ?>"><?php echo $value['nombre']?></option>
            <?php 
            }
            ?>
        </select>
        </div>

        <br>

        <div class="d-flex form-group">
        <label for="comentariofinal" class="control-label col-md-2">Observación del Usuario</label>
        <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="userob" require>
            <option selected disabled="selected">Selecciona</option>
            <option value="1">Si</option>
            <option value="0">No</option>
        </select>
        
        <br>
        <label for="obligatorio" class="control-label col-md-2">Obligatorio</label>
    <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="obligatorio" require>
        <option selected disabled="selected">Selecciona</option>
        <option value="1">Si</option>
        <option value="0">No</option>
    </select>
        </div>
    <div align="center" class="alert" id="mensaje"></div>
        <div class=" d-flex nextbtn justify-content-center">
        <button type="submit" class="btn btn-outline-success">Siguiente</button>
        <button type="button" class="btn btn-outline-danger">Cancelar</button>

        </div>
        
       

    </form>
</div>


<script type="text/javascript">

$(document).ready(function(){
    $("#formEvaluacion").submit(function(event){
        event.preventDefault();
        $.ajax({
            dataType:"json",
            url:"<?php echo controlador::$rutaAPP?>index.php?action=evaguar",
            type:"POST",
            data:{nombre:$("#evanombre").val(),descrip:$("#descrip").val(),f_ini:$("#f_ini").val(),f_fin:$("#f_fin").val(),limtime:$("#limtime").val(),tipotime:$("#tipotime").val(),perActuali:$("#perActuali").val(),intentos:$("#intentos").val(),comentariofinal:$("#comentariofinal").val(),tipocalifica:$("#tipocalifica").val(),valorcalif:$("#valor").val(),comentario:$("#comentario").val(), proyectos:$("#proyectos").val(), cargo:$("#cargo").val(), userob:$("#userob").val(), obligatorio:$("#obligatorio").val()},
            success: function(data){
                if(data.success==false){
                    $("#mensaje").show();
                    $("#mensaje").html(data.msg);
                    $('.log-status').addClass('wrong-entry');
                    $('.alert').fadeIn(700);
                setTimeout( "$('.alert').fadeOut(1800);",1500 );
                }else{
                    document.getElementById('#formEvaluacion').reset();;
                }
            },
                error: function(response) {
                    $("#mensaje").show();
                    $("#mensaje").html(response.responseText);
                }
        });
    });
    $('.form-control').keypress(function(){
        $('.log-status').removeClass('wrong-entry');
    });
})

</script>

    

</body>
</html>