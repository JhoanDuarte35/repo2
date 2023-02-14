<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo controlador::$rutaAPP?>app/views/header/style.css">

</head>
<body>

<div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Puntualmente Logo</h3>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="">Gestionar evaluación</a>
                    <ul>
                        <li>
                        <a href="<?php echo controlador::$rutaAPP?>index.php?action=lispre">Admin preguntas</a>
                        </li>
                        <li>
                        <a href="<?php echo controlador::$rutaAPP?>index.php?action=crepre">Crear pregunta</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo controlador::$rutaAPP?>index.php?action=neweva">Nueva Evaluación</a>
                </li>
                <li>
                    <a href="#">Lista de Reportes</a>
                </li>
            </ul>

        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li>
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
