<html>
    <head></head>
    <body>
        <h3>Trinomio cuadrado perfecto</h3>
        <h3><p>
<?php
/*Factoreo - caso 6 - Trinomio cuadrado perfecto*/
if(isset($_GET['a'])){
    $a = $_GET['a'];
    $b = $_GET['b'];
}
echo "Modelo:<br>";
echo "a² + 2.a.b + b²";
?>
        <form action="factoreo_caso_2.php" method=GET>
            <label for="">Ingrese a:</label>
            <input type="text" name='a'>
            <label for="">Ingrese b:</label>
            <input type="text" name='b'>
            <input type="submit" value='Enviar'>
        </form>

<?php
if (isset($_GET['a'])) {
    echo "Resolucion:<br>";
    echo $a."² + 2.".$a.".".$b." + ".$b."²";
    echo "<br>";
    echo "(".$a." + ".$b.")²";
}
?>
        </p></h3>
    </body>
</html>