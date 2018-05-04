<?php 
/*Escribe un programa que sume, reste, multiplique y divida dos números introducidos por teclado.*/
?>

<?php 
  $num1 = $_GET['number_one'];
  $num2 = $_GET['number_two'];

  $operacion = $_GET['operacion'];


  print_r(get_defined_vars());

  switch ($operacion){
    case 'sumar': 
      $num1+$num2;
      $resultado = $num1+$num2;
    break;
    case 'restar': 
      $num1-$num2;
      $resultado = $num1-$num2;
    break;
    case 'multiplicar':
      $num1*$num2;
      $resultado = $num1*$num2;
    break;
    case 'dividir': 
      $num1/$num2;
      $resultado = $num1/$num2;
    break;
    default: 
    echo "inserte una opcion valida";
  };
  
 
  echo "<center><p>El resultado de la operacion es: </p><h1>".$resultado."</h1></center>";
?>
