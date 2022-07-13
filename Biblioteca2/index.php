<?php
include('conexion.php');

$sql = "SELECT id, nombre, ISBN, autor, editorial FROM libros";
$result = mysqli_query($conexion, $sql);
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Sistema de Biblioteca</title>
            <link rel="stylesheet" type="text/css" href="estilos.css">
	</head>
        <script>
        function eliminar(b){
            var a = confirm("Desea eliminar el libro cuya ID es: "+b+"?");
            if(a===true){
				location.href = "http://localhost/biblioteca2/productos_bajas.php?id_producto="+b;
            }
            else{
                alert('Operacion Cancelada!');
                return 0;
            }
        }
        </script>
<body>
    <table class="tabla-imagenes">
        <tr>
            <td><img src="imagenes/1-PwSbmDN-0JNZGN4c3m9LwA.jpg"></td>
            <td><img src="imagenes/2217ea18e25b36e592a82f3f6df.jpg"></td>
            <td><img src="imagenes/63804-tapa_amor_liquido-big.jpg"></td>
            <td><img src="imagenes/64421-TAPA_SUE_OS_REALIZADO.jpg"></td>
            <td><img src="imagenes/Saquen-una-hoja.-2010.jpg"></td>
            <td><img src="imagenes/atravesdemarte033.jpg"></td>
            <td><img src="imagenes/feria04.jpg"></td>
            <td><img src="imagenes/feria15.jpg"></td>
            <td><img src="imagenes/imprenta-libro-lima.jpg"></td>
            <td><img src="imagenes/moral-relativism.jpg"></td>
            <td><img src="imagenes/ortega__libro_de_las_tapas.jpg"></td>
            <td><img src="imagenes/portada-todos-somos-piratas-baja.jpg"></td>
            <td><img src="imagenes/portadas-libros-2014-seis.jpg"></td>
            <td><img src="imagenes/07-banda.jpg"></td>
        </tr>
    </table>
<!--link a la pantalla de altas de libros-->
<p><a href="productos_altas.php">Formulario de Altas de Libros</a></p>
    <table>
        <tr>
            <th class="td-titulo">ID</th>
			<th>ISBN</th>
			<th>Nombre</th>
			<th>Autor</th>
			<th>Editorial</th>
			<th><img width="30" src="imagenes/file_edit.png"></th>
			<th><img width="30" src="imagenes/file_delete.png"></th>
        </tr>
    	<?php
    	while($fila = mysqli_fetch_array($result)){
	?>
	<tr>
            <!--<td class="td-contenido"><?php //echo $fila['id'];?></td><td><?php //echo $fila['ISBN'];?></td><td><?php //echo $fila['nombre'];?></td><td><?php //echo $fila['autor'];?></td><td><?php //echo $fila['editorial'];?></td><td class="td-contenido"><a class="link-abm" href="productos_modificacion.php?id_producto=<?php //echo $fila['id'];?>" title="Modificar id:<?php //echo $fila['id'];?>"><img width="20" src="imagenes/file_edit.png"></a></td><td class="td-contenido"><a id="datos" onclick="eliminar()" class="link-abm" href="productos_bajas.php?id_producto=<?php //echo $fila['id'];?>" title="Eliminar id:<?php //echo $fila['id'];?>"><img width="20" src="imagenes/file_delete.png"></a></td>-->
            <td class="td-contenido"><?php echo $fila['id'];?></td>
			<td><?php echo $fila['ISBN'];?></td>
			<td><?php echo $fila['nombre'];?></td>
			<td><?php echo $fila['autor'];?></td>
			<td><?php echo $fila['editorial'];?></td>
			<td class="td-contenido"><a class="link-abm" href="productos_modificacion.php?id_producto=<?php echo $fila['id'];?>" title="Modificar id:<?php echo $fila['id'];?>"><img width="20" src="imagenes/file_edit.png"></a></td>
			<td class="td-contenido"><a id="datos" class="link-abm" href="javascript:eliminar(<?php echo $fila['id'];?>)" title="Eliminar id:<?php echo $fila['id'];?>"><img width="20" src="imagenes/file_delete.png"></a></td>
	</tr>
	<?php 
	}
	?>
    </table>
</body>
</html>