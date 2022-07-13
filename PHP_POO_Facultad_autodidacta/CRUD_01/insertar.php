<?php
include('controlador.php');
include('conexion.php');

$datos = array($_POST['ISBN'], $_POST['titulo'], $_POST['autor'], $_POST['editorial']);

$ins = new crud();
if($ins->insertarDatos($datos)){
	header('Location:index.php');
}
else{
	echo "error al guardar";
}

 ?>