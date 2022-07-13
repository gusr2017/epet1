<?php
//if(isset($_GET['A']) && isset($_GET['B'])){
$A = $_GET['A'];
$B = $_GET['B'];

if($A > $B){
	echo 'A es el mayor';
}
else{
	echo 'B es el mayor';
}
//}
?>

<html>
	<head>
		<title>Ejercicio 1</title>
		<link rel='stylesheet' type='text/css' href='estilos.css'>
	</head>
	<body>
		<form action='prueba.php' method=get>
		<table border=1>
			<tr>
				<td>Ingresar A:</td>
				<td><input type=text name='A'></td>
			</tr>
			<tr>
				<td>Ingresar B:</td>
				<td><input type=text name='B'></td>
			</tr>
			<tr>
				<td colspan=2><input type=submit value='Calcular'></td>
			</tr>
		</table>
			
		</form>
	</body>
</html>