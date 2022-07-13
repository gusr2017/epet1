<?php
include('conexion.php');

if(!empty($_GET['ISBN']) && !empty($_GET['nombre']) && !empty($_GET['autor']) && !empty($_GET['editorial'])){	//determina si está vacia

	$ISBN = $_GET['ISBN'];
	$nom = $_GET['nombre'];
	$aut = $_GET['autor'];
	$edit = $_GET['editorial'];
	
	$sql = "INSERT INTO libros(ISBN, nombre, autor, editorial) VALUES ('$ISBN', '$nom', '$aut', '$edit')";
	$result = mysqli_query($conexion, $sql);

	if($result==TRUE){
		echo "Libro guardado";
	}
}

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Altas de Productos</title>
		<link rel='stylesheet' href='estilos.css'>
	</head>
<body>

<form id="1" name="boton" action="index.php">
	<input type="submit" value="Ver Listado">	
</form>

<form id="2" name="formulario" method="GET" action="altas_productos.php">
	<table>
		<tr>
			<td>Categoria:</td><td><input type="text" name="categoria"></td>
		</tr>
		<tr>
			<td>ISBN:</td><td><input type="text" name="ISBN"></td>
		</tr>
		<tr>
			<td>Nombre:</td><td><input type="text" name="nombre"></td>
		</tr>
		<tr>
			<td>Autor:</td><td><input type="text" name="autor"></td>
		</tr>
		<tr>
			<td>Editorial:</td><td><input type="text" name="editorial"></td>
		</tr>
		<tr>
			<td><input type=submit value="Guardar Libro"></td>
		</tr>		
	</table>
</form>
</body>
</html>