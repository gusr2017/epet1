<?php
/*ejemplo de if */

$A = $_GET['A'];
?>
<html>
    <head></head>
    <body>
        <form action="clase09.php" method=GET>
            <input type="text" name='A'>
            <input type="submit" value='Enviar'>
        </form>
    </body>
</html>
<?php
if($A == 0){
    echo "El valor de A es: ".$A;
}
else{
    echo "El valor de A no es 0";
}
?>