<?php
include('conexion.php');
if(!$_POST){
	$sql = "SELECT id, nombre, ISBN, autor, editorial FROM libros";
}
else{
	$buscar = $_POST['buscar'];
	$campo = $_POST['campo'];
	$sql = "SELECT id, nombre, ISBN, autor, editorial FROM libros WHERE $campo LIKE '%$buscar%'";
}
$result = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sistema de Biblioteca</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="http://localhost/EPET1/Programacion_II/Biblioteca_bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
		<link href="http://localhost/EPET1/Programacion_II/Biblioteca_bootstrap/css/estilos.css" rel="stylesheet" type="text/css">
    </head>
<body>
<nav class="navbar fixed-top navbar-dark bg-primary">
	<ul class="nav">
		<li class="nav-item">
			<!--boton de altas de libros-->
			<form action="productos_altas.php">
				<button class="btn btn-outline-light" type=submit value='Altas de Libros'>Altas</button>
			</form>
		</li>
	</ul>		
	
	<form class="form-inline" action="index.php" method="POST">
		<input class="form-control mr-sm-2" type="text" name="buscar" value="" placeholder="Buscar">
		<select class="form-control mr-sm-2" name="campo">
			<option value="nombre">nombre</option>
			<option value="autor">autor</option>
			<option value="editorial">editorial</option>
		</select>
		<input rol="button" class="form-control mr-sm-2" type="submit" value="Enviar">
		<!--<button class="btn btn-outline-light " type="submit" value='Buscar'>Buscar</button>-->
	</form>
</nav>
<br>
<br>
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