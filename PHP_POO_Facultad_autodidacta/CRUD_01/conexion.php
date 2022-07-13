<?php 
class conectar{
	private $servidor = "localhost";
	private $usuario = "root";
	private $bd = "biblioteca";
	private $password = "";

	public function conexion(){
		$conexion = mysqli_connect($this->servidor, 
									$this->usuario, 
									$this->password,
									$this->bd);
		return $conexion;
	}
}

/*	$con = new conectar();
	if ($con->conexion()) {
		echo "conectado";
	}
	else{
		echo "error en la conexion";
	}*/
 ?>