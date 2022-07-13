<html>
<head>
	<title>Con while</title>
</head>
<body>
<table border=1>
	<tr>
		<td>tabla del 2</td><td>tabla del 3</td><td>tabla del 5</td>
	</tr>
<?php
	$i = 1;
	while($i<=10){
?>
	<tr>
		<td><?php echo $i?> x 2 = <?php echo $i*2?></td>
		<td><?php echo $i?> x 3 = <?php echo $i*3?></td>
		<td><?php echo $i?> x 5 = <?php echo $i*5?></td>
	</tr>
<?php
	$i = $i + 1;
	}
?>
</table>

</body>
</html>