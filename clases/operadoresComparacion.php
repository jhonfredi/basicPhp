<?php

//Operadores comparaciónote
$var1="11";
$var2=10;

echo "Comparador igual == ";
var_dump($var1==$var2);
echo "<br/>";
echo "Comparador identico === ";
var_dump($var1===$var2);
echo "<br/>";
echo "<br/>";

//Operador nave espacial
echo "Operador nave espacial <=> compara si un numero es mayor, menor o igual";
echo "<br/>";
var_dump($var1<=>$var2);
var_dump($var2<=>$var1);
var_dump($var1<=>11);
echo "<br/>";
echo "<br/>";

//Operador elvis
$varElvis=12;
echo "Operador elvis (?:) a?:b  si es verdadero retorna a, sino b";
echo "<br/>";
var_dump(isset($varElvis)?:"es false");
echo "<br/>";
echo "<br/>";

//Operador ternario
$varTernario=11;
echo "Operador ternario (a?b:c) Si se cumple a, entonces b, sino entonces c";
echo "<br/>";
var_dump((isset($varTernario)==12)?"Es valor 12":"No es valor 12");
echo "<br/>";
echo "<br/>";

//Operador de fusión null, se diferencia de elvis y ternario conque no es
//necesaio comparar si es nulo.
$varFunconNull;
echo "Operador fusión null  (a??b) si a es nulo entonces b";
echo "<br/>";
var_dump($varFunconNull??"varFunconNull Es nulo");
echo "<br/>";

 ?>
