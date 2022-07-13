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
		
    </head>
	<script>
        function eliminar(b){
            var a = confirm("Desea eliminar el libro cuya ID es: "+b+" ?");
            if(a===true){
				location.href = "http://localhost/biblioteca_bootstrap_javascript/public_html/productos_bajas.php?id_producto="+b;
            }
            else{
                alert('Operacion Cancelada!');
                return 0;
            }
        }
    </script>
<body>
<div class="container">
	<!--boton de altas de libros-->
	<br>
	<form action="productos_altas.php">
		<button class="btn btn-primary" type=submit value='Altas de Libros'>Altas</button>
	</form>
</div>
<br>
<div class="container-fluid">
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
			<td><a href="productos_modificacion.php?id_producto=<?php echo $fila['id']?>" class="btn btn-default btn-sm active" role="button">Actualizar</a></td>
			<td><a href="javascript:eliminar(<?php echo $fila['id'];?>)">Eliminar</a></td>
		</tr>
		<?php 
		}
		?>
	</table>
</div>
</body>
</html>