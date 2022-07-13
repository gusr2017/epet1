<?php
include('conexion.php');

if(!empty($_GET['ISBN']) && !empty($_GET['nombre']) && !empty($_GET['autor']) && !empty($_GET['editorial'])){	//determina si está vacia

	$ISBN = $_GET['ISBN'];
	$nom = $_GET['nombre'];
	$aut = $_GET['autor'];
	$edit = $_GET['editorial'];
	
	$sql = "INSERT INTO libros(ISBN, nombre, autor, editorial) VALUES ('$ISBN', '$nom', '$aut', '$edit')";
	$result = mysqli_query($conexion, $sql);

	/*if($result==TRUE){
		$aviso = "echo 'Libro guardado'";
	}*/
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

<h1>Altas Libros<?php echo (isset($aviso)?" - Libro Guardado":"")?></h1>

<form id="2" name="formulario" method="GET" action="productos_altas.php">
    <table class="tabla-form">
		<tr>
            <td>ISBN:</td><td><input type="text" name="ISBN" size="30"></td>
		</tr>
		<tr>
            <td>Nombre:</td><td><input type="text" name="nombre" size="100"></td>
		</tr>
		<tr>
            <td>Autor:</td><td><input type="text" name="autor" size="60"></td>
		</tr>
		<tr>
            <td>Editorial:</td><td><input type="text" name="editorial" size="30"></td>
		</tr>
	</table>
    <p class="p-abajo"><input class="guardar" type=submit value="Guardar Libro"></p>
</form>
</body>
</html>