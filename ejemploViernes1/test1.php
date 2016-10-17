<?php
	if(isset($ POST['nombre']) && isset($ POST['edad'])){
    if ($ POST['nombre'] != '' && $ POST['edad'] != ''){
      echo 'Hola '.$ POST['nombre'].'<br />';
      echo "Tienes". $ POST['edad']. "años de edad";
    }
    else{
      echo "Te faltó algún campo.";
    }
  else{
    echo $location './error.html';
    header("Location: $location");
    exit();
  }
?>
