<?php 
class crud{
	public function mostrarDatos($sql){
		$c = new conectar();
		$con = $c->conexion();
		$rs = mysqli_query($con, $sql);
		return $fila = mysqli_fetch_all($rs, MYSQLI_ASSOC);
	}
	public function insertarDatos($datos){
		$c = new conectar();
		$con = $c->conexion();
		$sql = "INSERT INTO libros(ISBN, nombre, autor, editorial) VALUES ('$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]')";
		$rs = mysqli_query($con, $sql);
	}
}

 ?>