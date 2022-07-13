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
        <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" type="text/css" href="estilos.css">		
	</head>
<body>
<br>
<!--boton de altas de libros-->
<div class="container">
	<form action="index.php">
		<button class="btn btn-primary" type=submit value='Listado de Libros'>Ver Catalogo</button>
	</form>
</div>
<br>
<br>
<div class="container">
	<p>El Registro con el ID: <?php echo $_REQUEST['id_producto']?> fue Eliminado!!</p>
</div>
</body>
</html>