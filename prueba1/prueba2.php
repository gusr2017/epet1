<?php 
if (isset($_GET['apellido'])) {
	$apellido = $_GET['apellido'];
	$nombre = $_GET['nombre'];
}


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilos2.css">
</head>
<body>
<div id='todo'>
<form method="GET" action="prueba2.php">
<table border="1">
	<tr>
		<td colspan="2" id='titulo'>Alumnos</td>
	</tr>
	<tr>
		<td id='texto'>Apellido:</td><td><input type="text" name="apellido"></td>
	</tr>
	<tr>
		<td id='texto'>Nombre:</td><td><input type="text" name="nombre"></td>
	</tr>
	<tr>
		<td id='texto'>Documento:</td><td><input type="text" name="doc"></td>
	</tr>
	<tr>
		<td id='texto'>Curso:</td><td><input type="text" name="curso"></td>
	</tr>
	<tr>
		<td id='texto'>Division:</td><td><input type="text" name="div"></td>
	</tr>
	<tr>
		<td id='texto'>Turno:</td><td><input type="text" name="turno"></td>
	</tr>
	<tr>
		<td colspan="2" id='boton'><input type="submit" value="Enviar"></td>
	</tr>
</table>
</form>
</div>
<p>Hola Mundo!!</p>

<div>
	<img src="imagenes/images.jpg">
</div>
</body>
</html>