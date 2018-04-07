<?php
$array = array(1,2,3,4,5,6,7);
$arrayAlias = array('lunes'=>'Monday','martes'=>'thursday',
'miercoles'=>'Wednesday','jueves'=>'Thursday','viernes'=>'Friday');

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
/*

Monday
thursday
Wednesday
Thursday
Friday
0 ---- 1
1 ---- 2
2 ---- 3
3 ---- 4
4 ---- 5
5 ---- 6
6 ---- 7
lunes is Monday
martes is thursday
miercoles is Wednesday
jueves is Thursday
viernes is Friday
1
2
3
4
5
6
7
*/
 ?>
