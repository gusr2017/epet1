<?php
if($_POST){
	echo 'si';
	$ok = true;
	if(!isset($_POST['usuario']) || $_POST['usuario']==''){
		$ok = false;
		$_SESSION['usuario'] == '';
	}
	else{
		$_SESSION['usuario'] == $_POST['usuario'];
	}
	if(!isset($_POST['pass']) || $_POST['pass']==''){
		$ok = false;
		$_SESSION['pass'] == '';
	}
	else{
		$_SESSION['pass'] == $_POST['pass'];
	}
	
	if($ok){
		header("Location: index.php");
	}
	else{
		header("Location: login.php");
	}
}
else{
	//echo 'no';
	header("Location: login.php");
}
?>