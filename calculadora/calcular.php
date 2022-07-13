<?php
$valor1 = $_GET['val1'];
$valor2 = $_GET['val2'];
$ope = $_GET['operacion'];
$resultado = 0;

if($ope == 'suma'){
	$resultado = $valor1 + $valor2;
	echo 'La suma es: '.$resultado;
}
if($ope == 'Resta'){
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
?>