<?php
include('conexion.php');

$sql = "UPDATE libros SET ISBN='".$_GET['ISBN']."', nombre='".$_GET['nombre']."', autor='".$_GET['autor']."', editorial='".$_GET['editorial']."' WHERE id=".$_GET['id_producto'];
$result = mysqli_query($conexion, $sql);
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Sistema de Biblioteca</title>
		<link rel="stylesheet" type="text/css" href="estilos.css">
	</head>
<body>
<!--boton de altas de libros-->
<form action="index.php">
    <button type=submit value='Listado de Libros'>Ver Catalogo de Libros</button>
</form>

<br>
<br>
<p>Registro Modificado!!</p>
</body>
</html>