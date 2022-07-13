<?php
include('conexion.php');

if(!empty($_POST['ISBN']) && !empty($_POST['nombre']) && !empty($_POST['autor']) && !empty($_POST['editorial'])){	//determina si está vacia
		
	$ISBN = $_POST['ISBN'];
	$nom = $_POST['nombre'];
	$aut = $_POST['autor'];
	$edit = $_POST['editorial'];
	
	if($_FILES['caratula']['type'] == 'image/jpeg'){
		move_uploaded_file($_FILES['caratula']['tmp_name'], 'imagenes/'.$_FILES['caratula']['name']);
		echo "Imagen guardada en: imagenes/".$_FILES['caratula']['name']."<br>";
	}
	else{
		echo "Error: ".$_FILES['caratula']['error'];
	}
	
	$sql = "INSERT INTO libros(ISBN, nombre, autor, editorial) VALUES ('$ISBN', '$nom', '$aut', '$edit')";
	$result = mysqli_query($conexion, $sql);

	if($result==TRUE){
		echo "Libro guardado";
	}
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Altas de Productos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" type="text/css" href="estilos.css">
    </head>
<body>
<div class="container">
	<br>
	<form id="1" name="boton" action="index.php">
		<button class="btn btn-primary" type="submit" value="Ver Listado">Ver Catalogo</button>	
	</form>
</div>
<br>
<div class="container">
	<div class="col-md-4">
    <form enctype="multipart/form-data" id="2" name="formulario" method="POST" action="productos_altas.php">
		<table class="table table-bordered">
			<tr>
				<td>ISBN:</td><td><input type="text" name="ISBN"></td>
			</tr>
			<tr>
				<td>Nombre:</td><td><input size=60 type="text" name="nombre"></td>
			</tr>
			<tr>
				<td>Autor:</td><td><input size=40 type="text" name="autor"></td>
			</tr>
			<tr>
				<td>Editorial:</td><td><input type="text" name="editorial"></td>
			</tr>
			<tr>
				<td>Caratula:</td><td><input type="file" name='caratula'></td>
			</tr>		
			<tr>
				<td colspan=2><input class="btn btn-danger" type=submit value="Guardar Libro"></td>
			</tr>		
		</table>
	</form>
	</div>
</div>
</body>
</html>