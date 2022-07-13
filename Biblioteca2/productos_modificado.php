<?php
include('conexion.php');

$sql = "UPDATE libros SET ISBN='".$_GET['ISBN']."', nombre='".$_GET['nombre']."', autor='".$_GET['autor']."', editorial='".$_GET['editorial']."' WHERE id=".$_GET['id_producto'];
$result = mysqli_query($conexion, $sql);
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Modificacion de Productos</title>
		<link rel="stylesheet" type="text/css" href="estilos.css">
	</head>
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

<p><a href="index.php">Ver Catalogo</a></p>

<h1><?php echo ($result==TRUE?"El libro con el ID: ".$_GET['id_producto']." fue Modificado":"")?></h1>

</body>
</html>