<?php include_once (__dir__.'/../header/header1.php')?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo controlador::$rutaAPP?>app/views/admins/css/menu.css">
    <title>Admin</title>
</head>

<?php
            require_once __dir__."/../../model/getData.php";
            $persona=new GetDatos();
            $result=$persona->selectQuery("SELECT * FROM persona WHERE id= '".$_SESSION["id_usuario"]."'");
?>

<body>
	<div>
		<h1>foto</h1>
		<img src="#" alt="">
	</div>
	<div>
	<h3><?php echo $result[0]['nombres']." ".$result[0]['apellidos']?></h3>
	<span class="text muted"><?php echo $_SESSION['username']?></span>
	<br>
	<span> ip </span>
	</div>

	<div class="opsuser">
		<a href="#">Proyectos</a>
		<a href="#">Horas Ingreso</a>
		<a href="#">Configuración</a>
	</div>
	



<!-- prefix free to deal with vendor prefixes -->
<script src="http://thecodeplayer.com/uploads/js/prefixfree-1.0.7.js" type="text/javascript" type="text/javascript"></script>

<!-- jQuery -->
<script src="http://thecodeplayer.com/uploads/js/jquery-1.7.1.min.js" type="text/javascript"></script>
    <!-- <a href="http://localhost/puntualmente_login/index.php?action=operarios">Intefaz operarios</a> -->
    
    
</body>
</html>