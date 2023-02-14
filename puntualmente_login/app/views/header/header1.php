<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo controlador::$rutaAPP?>app/views/header/style.css">

</head>
    <title>Home</title>
</head>
<body>
    
<div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Puntualmente Logo</h3>
</div>

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

            <script>
                function cambiarch() {
                var seleccionado = document.getElementById('selectBox').value;
                window.location.replace(seleccionado);
            }
            </script>

        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="<?php echo controlador::$rutaAPP?>index.php?action=ahomeuser"><?php echo $_SESSION["username"]?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo controlador::$rutaAPP?>index.php?action=cerrar">Cerrar Sesión</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
</body>
</html>