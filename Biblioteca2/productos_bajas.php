<?php
include('conexion.php');

if(!empty($_REQUEST['id_producto'])){	//determina si está vacia

	$sql = "DELETE FROM libros WHERE id=".$_REQUEST['id_producto'];
	$result = mysqli_query($conexion, $sql);
	//header('Location: index.php');
}

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Altas de Productos</title>
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

<h1><?php echo (isset($result)?"El libro con el ID: ".$_REQUEST['id_producto']." fue Eliminado":"")?></h1>

</body>
</html>