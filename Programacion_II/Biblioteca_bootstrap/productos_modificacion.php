<?php
include('conexion.php');

if(!empty($_GET['id_producto'])){	//determina si $_GET['id'] esta vacia

    $sql = "SELECT id, ISBN, nombre, autor, editorial FROM libros WHERE id=".$_GET['id_producto'];
    $result = mysqli_query($conexion, $sql);
    $fila = mysqli_fetch_array($result);

}

?>
<!DOCTYPE HTML>
<html>
	<head>
        <title>Altas de Productos</title>
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
	<div class="col-md-12">
		<form id="2" name="formulario" method="GET" action="productos_modificado.php">
			<input type="hidden" name="id_producto" value="<?php echo $fila['id'];?>">
			<table class="table table-bordered">
				<tr>
					<td>ISBN:</td><td><input type="text" name="ISBN" value="<?php echo $fila['ISBN'];?>"></td>
				</tr>
				<tr>
					<td>Nombre:</td><td><input size=60 type="text" name="nombre" value="<?php echo $fila['nombre'];?>"></td>
				</tr>
				<tr>
					<td>Autor:</td><td><input size=40 type="text" name="autor" value="<?php echo $fila['autor'];?>"></td>
				</tr>
				<tr>
					<td>Editorial:</td><td><input type="text" name="editorial" value="<?php echo $fila['editorial'];?>"></td>
				</tr>
				<tr>
					<td colspan=2><input class="btn btn-primary" type=submit value="Actualizar Libro"></td>
				</tr>		
			</table>
		</form>
	</div>
</div>
</body>
</html>