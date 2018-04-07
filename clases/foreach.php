<?php
//Array indexado
$array = array(1,2,3,4,5,6,7);
//Array asociativo
$arrayAlias = array('lunes'=>'Monday','martes'=>'thursday',
'miercoles'=>'Wednesday','jueves'=>'Thursday','viernes'=>'Friday');

$arrayBidimensional= array(array('Juan','Moreno',19),
array('Pepe','Arias',27));

foreach ($array  as $value):
  echo($value);
  echo("<br/>");
endforeach;

foreach ($arrayAlias as $key => $value) {
  echo("$key is $value");
  echo("<br/>");
}

//Cambiando los valores del arreglo con foreach
foreach ($array as $key => &$value) {
  $value*=2;
}

//Cambiando los valores del arreglo con foreach
foreach (array(1,2,3,4,5,6,7) as $key => &$value) {
  echo("pos $key -- $value");
  echo("<br/>");
}

echo("Apellido ".$arrayBidimensional[0][1]);
 ?>
