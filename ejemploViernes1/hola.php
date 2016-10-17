<?php
  session_start();
  if (!isset($_SESSION['user'])){
    header('location: ./index.php');
    exit();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
	<title>Ejemplo</title>
</head>
<body>

	<?php echo '¡Hola, mundo!<br>'; ?>
  <script language="php">
    echo '<b>¡Hola, soy un script de PHP!</b><br>';
  </script>
  <?php
  #Así se declaran variables
    $variable1 = 1;
    $variable2 = 2;
    $variable3 = 3;
  #Así se hacen operaciones
    $sum_total = $variable1 + $variable2 * $variable3;
    print ($sum_total.'<br>');
    echo strlen ('Hello World!').'<br>';
    define("MINSIZE", 50);
    echo MINSIZE.'<br>';
    $variable1 = 'perro';
    $variable2 = 2.00;
    $variable3 = FALSE;
    echo 'Estas son las variables. <br>';
    echo 'Variable 1: '.$variable1.'<br>';
    echo "Variable 1: $variable1 <br>"; 
    echo 'Variable 2: '.$variable2.'<br>';
    echo 'Variable 3: '.$variable3.'<br>';

    if ($variable1 == 'perro' && $variable2 >= 1)
    {
      print("Está escrito perro.<br>");
      print("El número es mayor o igual a 1.0<br>");
    }
    elseif(!$variable3){
      print("Variable 3 está en falso<br>");
    }
    else{
      print("Ninguna de las condiciones se cumplió.<br>");
    }

    $input=4;
    $i=0;
    $res=0;
    $sum=1;
    while($i < $input)
    {
      $res += $sum;
      $sum += 2;
      $i++;
    }
    echo "EL cuadrado de $input es $res <br>";

    $arr = array(1, 2, 3, 4, 5);
    foreach($arr as $valor){
      echo "el valor es $valor <br />";
    }
    echo 'El valor es '.$arr[0].'<br/>';

    $salarios = array("Jorge" => 2000, "Luis" => 100, "Pedro" => 500);
    echo 'El salario de Jorge'.$salarios['Jorge'].'<br />';
    echo 'El salario de Luis'.$salarios['Luis'].'<br />';
    echo 'El salario de Jorge'.$salarios['Pedro'].'<br />';

    srand(microtime()*1000000);
    $num = rand(1,4);
    switch($num){
      case 1:
        $image_file = "./img/imagen1.jpg";
        break;
      case 2:
        $image_file = "./img/imagen2.jpg";
        break;
      case 3:
        $image_file = "./img/imagen3.jpg";
        break;
      case 2:
        $image_file = "./img/imagen4.jpg";
        break;
      }
  ?>
  <p> Esta es nuestra imagen: <br><img src='?php echo $image file ?>' height="500" width="700"><p>
</body>
</html>