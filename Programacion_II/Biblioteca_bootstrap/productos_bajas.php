<?php
include('conexion.php');

$sql = "DELETE FROM libros WHERE id=".$_REQUEST['id_producto'];
$result = mysqli_query($conexion, $sql);
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Sistema de Biblioteca</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="http://localhost/Biblioteca_bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" type="text/css" href="http://localhost/Biblioteca_bootstrap/css/estilos.css">		
	</head>
<body>
<nav class="navbar fixed-top navbar-dark bg-primary">
	<ul class="nav">
		<li class="nav-item">
			<!--boton de altas de libros-->
			<form action="index.php">
				<button class="btn btn-outline-light" type=submit value='Ver Listado'>Ver Listado</button>
			</form>
		</li>
	</ul>
</nav>
<br>
<br>
<br>
<div class="container">
	<p>El Registro con el ID: <?php echo $_REQUEST['id_producto']?> fue Eliminado!!</p>
</div>
</body>
</html>