<?php
if(isset($_GET['val1']))
	$valor1 = $_GET['val1'];

if(isset($_GET['val2']))
	$valor2 = $_GET['val2'];

if(isset($_GET['operacion'])){
	$ope = $_GET['operacion'];

	$resultado = 0;

	if($ope == 'suma'){
		$resultado = $valor1 + $valor2;
		echo 'La suma es: '.$resultado;
	}
	if($ope == 'resta'){
		$resultado = $valor1 - $valor2;
		echo 'La resta es: '.$resultado;
	}
	if($ope == 'producto'){
		$resultado = $valor1 * $valor2;
		echo 'El producto es: '.$resultado;
	}
	if($ope == 'division'){
		if($valor2==0){
			echo 'La division por cero no existe';
		}
		else{
			$resultado = $valor1 / $valor2;
			echo 'La division es: '.$resultado;
		}	
	}
}
?>

<html>
	<head>
		<title>Calculadora</title>
		<link rel='stylesheet' type='text/css' href='css/estilos.css'>
	</head>
	<body>
	<form action='calculadora.php'>
		Valor 1:<input type='text' name='val1'><!--aca ingreso el primer valor-->
		<br>
		Valor 2:<input type='text' name='val2'>
		<br>
		Operacion:
		<select name='operacion'> <!--aca estoy realizando las operaciones-->
			<option value='suma'>Suma</option>
			<option value='producto'>Producto</option>
			<option value='resta'>Resta</option>
			<option value='division'>Division</option>
		</select>
		<br>
		<input type='submit' value='Calcular'>
	</form>
	</body>
</html>