<?php
$A = $_GET['a'];
$B = $_GET['B'];
echo $A * $B;
?>
<html>
    <head></head>
    <body>
        <form action="prueba03.php">
            <label>Ingrese A:</label>
            <input type="text" name="a">
            <br>
            <label>Ingrese B:</label>
            <input type="text" name="B">
            <br>
            <input type="submit" value="Calcular">
        </form>
    </body>
</html>