<?php
/*si el costo total del producto es mayor a 100
realizar un descuento del 10 por ciento, mostrar
el total del monto a pagar con descuento*/

$cantidad_producto = $_GET['cantidad_producto'];
$precio_producto = $_GET['precio_producto'];
$descuento = $_GET['descuento'];
$total_pagar = $cantidad_producto * $precio_producto;
$calculo_descuento = $descuento*$total_pagar/100;
$total_pagar_descuento = $total_pagar - $calculo_descuento;
?>
<html>
    <head>
        <link rel="stylesheet" href="estilos.css">
    </head>
    <body>
        <form action="prueba04.php">
            <table>
                <tr><td><label>Ingrese Cantidad de Productos:</label></td></tr>
                <tr><td><input type="text" name="cantidad_producto"></td></tr>
                <tr><td><label>Ingrese Precio del Producto:</label></td></tr>
                <tr><td><input type="text" name="precio_producto"></td></tr>
                <tr><td><label>Descuento del Dia:</label></td></tr>
                <tr><td><input type="text" name="descuento" value=10></td></tr>
                <tr><td><input type="submit" value="Calcular"></td></tr>
            </table>
        </form>
        <table border=1>
            <?php
            echo "<tr><td>Cantidad de productos:</td><td>$cantidad_producto</td></tr>";
            echo "<tr><td>Precio del producto:</td><td>$precio_producto</td></tr>";
            echo "<tr><td>Total a pagar:</td><td>$total_pagar</td></tr>";
                if($total_pagar > 100){
                    echo "<tr><td>Descuento del Dia:</td><td>$descuento %</td></tr>";
                    echo "<tr><td>Descuento:</td><td>$calculo_descuento</td></tr>";
                    echo "<tr><td>total a pagar con descuento</td><td>$total_pagar_descuento</td></tr>";
                }
            echo "</table>";
            ?>
    </body>
</html>