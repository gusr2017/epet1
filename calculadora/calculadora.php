<html>
	<head>
		<title>Calculadora</title>
		<link rel='stylesheet' type='text/css' href='css/estilos.css'>
	</head>
	<body>
	<form action='calcular.php'>
		Valor 1:<input type='text' name='val1' placeholder='Ingrese Valor'><!--aca ingreso el primer valor-->
		<br>
		Valor 2:<input type='text' name='val2' placeholder='Ingrese Valor'>
		<br>
		Operacion:
		<select name='operacion'> <!--aca estoy realizando las operaciones-->
			<option value='suma'>Suma</option>
			<option value='producto'>Producto</option>
			<option value='Resta'>Resta</option>
			<option value='division'>Division</option>
		</select>
		<br>
		<input type='submit' value='Calcular'>
	</form>
	</body>
</html>