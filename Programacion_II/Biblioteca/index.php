<?php
include('conexion.php');

$sql = "SELECT id, nombre, ISBN, autor, editorial FROM libros";
$result = mysqli_query($conexion, $sql);
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Sistema de Biblioteca</title>
	</head>
<body>
<!--boton de altas de libros-->
<form action="productos_altas.php">
    <button type=submit value='Altas de Libros'>Altas</button>
</form>

<br>
<br>
<table border=1>
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
</body>
</html>