<?php 
if (isset($_GET['apellido'])) {
	$apellido = $_GET['apellido'];
	$nombre = $_GET['nombre'];
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<div class="container">
	<div class="row">
		<div class="border col">
			<h3>Tensión (electricidad)</h3>
			<p class="lead">La tensión eléctrica o diferencia de potencial (también denominada voltaje)1​2​ es una magnitud física que cuantifica la diferencia de potencial eléctrico entre dos puntos. También se puede definir como el trabajo por unidad de carga ejercido por el campo eléctrico sobre una partícula cargada para moverla entre dos posiciones determinadas. Se puede medir con un voltímetro.3​ Su unidad en el Sistema Internacional de Unidades (SI) es el voltio.</p>

			<h3>Potencia</h3>
			<p class="lead">Se define la potencia como la energía consumida o producida por un elemento eléctrico. La Potencia se denomina con la letra P y se mide en vatios (W). Esta energía se calcula muy fácilmente, ya que es el producto de la diferencia de potencial, en los extremos de dicho elemento, por la intensidad que pasa por éste.</p>

		    <div class="alert-info text-center">POTENCIA = INTENSIDAD * VOLTAJE</div>

			<p class="lead">Cuanto mayor sea la potencia de un dispositivo más energía consumirá durante el tiempo que esté conectado, aunque, lógicamente, también será mayor la cantidad de luz suministrada, el calor producido o la rapidez y fuerza del movimiento de un motor.</p>

			<h3 class="text-center">Intensidad</h3>
			<p class="lead">La intensidad de corriente eléctrica es la cantidad de electricidad o carga eléctrica que circula por un circuito por la unidad de tiempo. Para denominar la Intensidad se utiliza la letra I y su unidad es el Amperio (A).</p>

			<form method="GET" action="prueba2.php">
			<div class="container col-6">
			<table class="table table-bordered">
				<thead class="table-success">
					<tr>
						<th scope="col" colspan="2" id='titulo'>Calcular Voltaje</th>
					</tr>
				</thead>
				<tr>
					<td scope="row" id='texto'>Ingrese potencia:</td>
					<td><input type="text" name="potencia"></td>
				</tr>
				<tr>
					<td id='texto'>Ingrese intensidad:</td>
					<td><input type="text" name="intensidad"></td>
				</tr>
				<tr>
					<td colspan="2" id='boton'><input type="submit" value="Calcular"></td>
				</tr>
			</table>
			</div>
			</form>

			<a href="voltaje.php" target="_blank">Calcular Voltaje</a>

			<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
		</div>
	</div>
</div>
</body>
</html>