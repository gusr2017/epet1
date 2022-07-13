<?php

$operacion = $_GET['operacion'];
$A = $_GET['A'];
$B = $_GET['B'];
$C = 0;

if($operacion == 'suma'){
	$C = $A + $B;
	echo 'La suma es: '.$C;
}

if($operacion == 'producto'){
	$C = $A * $B;
	echo 'El producto es: '.$C;
}
?>