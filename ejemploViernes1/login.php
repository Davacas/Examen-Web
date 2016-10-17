<?php
	if (!isset($_POST['user']) || !isset($_POST['password'])){
		header('location: ./error.php');
	}
	elseif($_POST['user'] == 'Davacas' && $_POST['password'] == 'proteco123'){
		session_start();
		$_SESSION['user'] = "Davacas";
		$_SESSION['favcolor'] = "rojo";
		$_SESSION['imagen'] = "./user.jpg";
		$_SESSION['instante'] = time();
		header('location: ./main.php');
	}
	else
	{
		header('location: ./error2.html');
	}
	exit();
?>