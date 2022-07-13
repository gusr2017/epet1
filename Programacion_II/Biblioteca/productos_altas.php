<?php
include('conexion.php');

if(!empty($_POST['ISBN']) && !empty($_POST['nombre']) && !empty($_POST['autor']) && !empty($_POST['editorial'])){	//determina si está vacia
		
	$ISBN = $_POST['ISBN'];
	$nom = $_POST['nombre'];
	$aut = $_POST['autor'];
	$edit = $_POST['editorial'];
	
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
	</head>
<body>

<form id="1" name="boton" action="index.php">
    <button type="submit" value="Ver Listado">Ver Catalogo de Libros</button>	
</form>

    <form enctype="multipart/form-data" id="2" name="formulario" method="POST" action="productos_altas.php">
	<table>
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