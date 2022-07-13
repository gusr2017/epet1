<?php
include('conexion.php');

$sql = "SELECT id, nombre, ISBN, autor, editorial FROM libros";
$result = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sistema de Biblioteca</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" type="text/css" href="estilos.css">
    </head>
<body>
<div class="container">
	<!--boton de altas de libros-->
	<br>
	<form action="productos_altas.php">
		<button class="btn btn-primary" type=submit value='Altas de Libros'>Altas</button>
	</form>
</div>
<br>
<div class="container">
	<table class="table table-bordered table-hover table-condensed">
		<tr>
			<th>ID</th>
			<th>ISBN</th>
			<th>Nombre</th>
			<th>Autor</th>
			<th>Editorial</th>
			<th>Actualizar</th>
			<th>Eliminar</th>
		</tr>
		<?php
		while($fila = mysqli_fetch_array($result)){
		?>
		<tr>
			<td><?php echo $fila['id'];?></td>
			<td><?php echo $fila['ISBN'];?></td>
			<td><?php echo $fila['nombre'];?></td>
			<td><?php echo $fila['autor'];?></td>
			<td><?php echo $fila['editorial'];?></td>
			<td><a href="productos_modificacion.php?id_producto=<?php echo $fila['id']?>">Actualizar</a></td>
			<td><a href="productos_bajas.php?id_producto=<?php echo $fila['id']?>">Eliminar</a></td>
		</tr>
		<?php 
		}
		?>
	</table>
</div>
</body>
</html>