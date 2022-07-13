<?php
//session_start();
/*if($_POST){
	$ok = 'true';
	if(!isset($_POST['usuario'])){
		$ok = 'falso';
	}
	if(!isset($_POST['pass'])){
		$ok = 'falso';
	}
	
	if($ok){
		echo $_POST['usuario'];
		echo $_POST['pass'];
	}
	else{
		header("Location: index.php");
	}
}*/
//else{
	//echo 'Los datos son incorrectos';//header("Location: login.php");
//}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" type="text/css" href="estilos.css">
    </head>
<body>
<br>
<div class="container">
	<div class="col-md-4">
    <form enctype="multipart/form-data" id="2" name="formulario" method="POST" action="proceso_login.php">
		<table class="table table-bordered">
			<tr>
				<td>Usuario:</td><td><input type="text" name="usuario"></td>
			</tr>
			<tr>
				<td>Contraseña:</td><td><input type="text" name="pass"></td>
			</tr>
			<tr>
				<td colspan=2><input class="btn btn-success" type=submit value="Ingresar"></td>
			</tr>		
		</table>
	</form>
	</div>
</div>
</body>
</html>
<?php
//session_destroy();
?>