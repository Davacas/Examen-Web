<?php
	if (isset($_POST['location'])){
		$location = POST['location'];
		header("Location: $location");
		exit();
	}
?>
<html>
	<body>
		<p>¿Qué sitio quieres visitar</p>
		<?php
		$array = array(
			"PROTECO" => "http://www.proteco.mx",
			"Google" => "http://www.google.com",
			"Ejemplo" => "./hola.php"
			);
		?>
		<form action="<?php $_SERVER( 'PHP SELF') ?>" method="POST";
			<select name="location">

				<option value="" selected disabled>
					Seleccione su página:
				</option>
				<?php
					foreach ($array as $key => $value) {
						?>
						<option value="<?php echo $value; ?>">
							<?php echo $key; ?>
						</option>
					}
				?>
			</select>
			<input type="submit">
		</form>	
	</body>
</html>