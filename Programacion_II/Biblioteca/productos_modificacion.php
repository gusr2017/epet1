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
	</head>
<body>

<form id="1" name="boton" action="index.php">
    <button type="submit" value="Ver Listado">Ver Catalogo de Libros</button>	
</form>

    <form id="2" name="formulario" method="GET" action="productos_modificado.php">
        <input type="hidden" name="id_producto" value="<?php echo $fila['id'];?>">
	<table>
		<tr>
			<td>ISBN:</td><td><input type="text" name="ISBN" value="<?php echo $fila['ISBN'];?>"></td>
		</tr>
		<tr>
			<td>Nombre:</td><td><input type="text" name="nombre" value="<?php echo $fila['nombre'];?>"></td>
		</tr>
		<tr>
			<td>Autor:</td><td><input type="text" name="autor" value="<?php echo $fila['autor'];?>"></td>
		</tr>
		<tr>
			<td>Editorial:</td><td><input type="text" name="editorial" value="<?php echo $fila['editorial'];?>"></td>
		</tr>
		<tr>
			<td><input type=submit value="Actualizar Libro"></td>
		</tr>		
	</table>
</form>
</body>
</html>