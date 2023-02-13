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

    <div class="formeva">
    <form class="form-horizontal" autocomplete="off" id="formEvaluacion" name="formEvaluacion" onsubmit="return false">

    <h1>EVALUACIÓN</h1>
    <div class="col-mb-10">
        <label class="form-label">Nombre</label>
        <input type="text" class="form-control" id="evanombre" placeholder="Nombre de la evaluacion">
    </div>
    <br>
    <div class="form-floating">
        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
        <label for="floatingTextarea2">Descripción</label>
    </div>
    <br>
    <h2>Tiempo</h2>
    <br>
    <div class="flex-row d-flex justify-content-center">
      <div class="col-lg-6 col-11 px-1">
        <div class="input-group input-daterange">
          <input type="text" id="start" class="form-control text-left mr-2">
          <label class="ml-3 form-control-placeholder" id="start-p" for="start">Fecha de inicio</label>
          <span class="fa fa-calendar" id="fa-1"></span>
          <input type="text" id="end" class="form-control text-left ml-2">
          <label class="ml-3 form-control-placeholder" id="end-p" for="end">Fecha de finalización</label>
          <span class="fa fa-calendar" id="fa-2"></span>
        </div>
      </div>
    </div>
    <script>
        $(document).ready(function(){
        $('.input-daterange').datepicker({
        format: 'dd-mm-yyyy',
        autoclose: true,
        calendarWeeks : true,
        clearBtn: true,
        disableTouchKeyboard: true
    });
});
    </script>
    <br>
    <h2>Calificación y Esquema</h2>
    <br>
    <div>
    <label for="actializacion">Permitir la actualización</label>
    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
        <option selected disabled="selected">Selecciona</option>
        <option value="true">Si</option>
        <option value="false">No</option>
    </select>
    <label for="actializacion">Intentos permitidos</label>
    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
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
    <br>
    <h2>Retroalimentación Global</h2>
    <br>
    <label for="comentariofinal">Comentario al Finalizar</label>
    <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="comentariofinal">
        <option selected disabled="selected">Selecciona</option>
        <option value="true">Si</option>
        <option value="false">No</option>
    </select>
    <br>
    <label for="limite">Limite de Calificación</label>
    <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="limite">
        <option selected disabled="selected">Selecciona</option>
        <option value="=">Igual a</option>
        <option value="<">Menor a</option>
        <option value=">">Mayor a</option>
        <option value="<=">Menor o Igual a</option>
        <option value=">=">Mayor o Igual a</option>
    </select>
    <h2>Ajustes Comunes</h2>
    <label class="form-label">Proyecto</label>
    <?php
        require_once __dir__."/../../model/getData.php";
        $proyectos=new GetDatos();
        
        $result=$proyectos->selectQuery("SELECT * FROM proyectos");
                    
    ?>

        <select class="form-select" name="selectBox" id="selectBox" onchange="cambiarch()">
            <option selected disabled="selected">Proyectos</option>
            <?php
                foreach($result as $value){  ?>
            <option value="<?php echo controlador::$rutaAPP?>index.php?action=lispre"><?php echo $value['Nombre']?></option>
            <?php 
            }
            ?>
        </select>
        <br>
        <label class="form-label">ROL de Usuario</label>
        
        <?php
        require_once __dir__."/../../model/getData.php";
        $roles=new GetDatos();
        
        $resultado=$roles->selectQuery("SELECT * FROM roles");
                    
    ?>

        <select class="form-select" name="selectBox" id="selectBox" onchange="cambiarch()">
            <option selected disabled="selected">Roles</option>
            <?php
                foreach($resultado as $value){  ?>
            <option value="<?php echo controlador::$rutaAPP?>index.php?action=lispre"><?php echo $value['nombre']?></option>
            <?php 
            }
            ?>
        </select>
        <br>

        <button type="button" class="btn btn-outline-success">Siguiente</button>
    </form>
    </div>
    
    

</body>
</html>