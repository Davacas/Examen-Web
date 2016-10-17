<?php
	session_start();
	if (isset($_SESSION['user'])){
		header('location: ./main.php');
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
	<form action = 'login.php' method 'POST'>
		Usuario <input type='text' name='user'/>
		Password <input type='password' name='password'/>
		<input type='submit'>
	</form>
</body>
</html>
