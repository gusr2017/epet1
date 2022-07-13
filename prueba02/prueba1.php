<html>
	<head>
		<title>Ejercicio 1</title>
		<link rel='stylesheet' type='text/css' href='estilos.css'>
                
	</head>
	<body>
		<form action='prueba2.php' method=get>
		<table border=1>
			<tr>	
				<td>Seleccione:</td>
				<td><select name='operacion'>
						<option value='suma'>Sumar</option>
						<option value='producto'>Multiplicar</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Ingresar A:</td>
				<td><input type=text name='A' p></td>
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