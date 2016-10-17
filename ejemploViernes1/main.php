<?php
	session_start();
	if (!isset($_SESSION['user'])){
		header('location: ./index.php');
		exit();
	}
?>

<!DOCTYPE html>
<html>
<body>
	<p>
		<?php
		echo 'El usuario es: '.$_SESSION['user'];
		echo 'Mi color favorito es: '.$_SESSION['favcolor'];
		echo date('y m d H:i:s'.$_SESSION['instante']);
		print_r($_SESSION);
		?>
	</p>
	<a href="./hola.php">Primer ejemplo</a><br>
	<a href="logoff.php">Log off</a><br>
	
</body>
</html>