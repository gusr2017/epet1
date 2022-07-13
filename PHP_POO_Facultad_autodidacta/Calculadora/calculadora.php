<!DOCTYPE html>
<html>
<head>
	<title>Calculadora</title>
</head>
<body>
<form action="procesar.php" method="post">
	<label>Valor 1:</label>
	<input type="text" name="val1">	
	<p></p>
	<label>Valor 2:</label>
	<input type="text" name="val2">
	<p></p>
	<label>Operacion:</label>
	<select name='opcion'>
		<option value="suma">Sumar</option>
		<option value="resta">Resta</option>
		<option value="multiplicacion">Multiplicacion</option>
		<option value="division">Division</option>
	</select>
	<p></p>
	<button>Calcular</button>
</form>

</body>
</html>