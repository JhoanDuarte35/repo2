<?php include_once (__dir__.'/../../header/header.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="<?php echo controlador::$rutaAPP?>app/views/admins/css/menu.css">
    <title>Crear pregunta</title>
</head>
<body>
    <h1>Gestion de preguntas</h1>
    <form id="form-preg">
        <div class="form-group">
            <label for="formGroupExampleInput">Nueva Pregunta</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Escribe tu pregunta">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Puntuacion pregunta</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Agrega puntuacion a la pregunta">
        </div>
        <input class="btn btn-primary" type="button" value="Agregar pregunta">
    </form>

    <script type="text/javascript">

        $(document).ready(function(){
            $("#form-preg").submit(function(event){
                event.preventDefault();
                $.ajax({
                    dataType:"json",
                    url:"<?php echo controlador::$rutaAPP?>index.php?action=validar",
                    type:"POST",
                    data:{usr:$("#username").val(),pass:$("#pass").val()},
                    success: function(data){
                        if(data.success==false){
                            $("#mensaje").show();
                            $("#mensaje").html(data.msg);
                            $('.log-status').addClass('wrong-entry');
                            $('.alert').fadeIn(700);
                        setTimeout( "$('.alert').fadeOut(1800);",1500 );
                        }else{
                            window.location=data.link;
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