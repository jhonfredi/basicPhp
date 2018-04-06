<?php
//Conversion a números enteros

//Conersión por contexto
$var1="10";
$int=30;
$suma=20+$var1;

echo $suma;
echo " ".gettype($suma);

//Forzado de tipos
$varInt=(int)$var1;
echo " ".gettype($varInt);

//Por funcióno
$varFloat ="5.87";
$varIntFun=floatval($varFloat);
echo " ".gettype($varIntFun);

echo("<br></br>");
//Conversión de arrays
$varNumeros="2,4,6,7";
//explode(separador,$variable,MaxLengthArray)
$arrayNumeros=explode(",",$varNumeros,10);


echo "exlode ".$arrayNumeros[1];

//Volcando un array a un $string
$varArrayString=implode("-",$arrayNumeros);

echo " Implode ".$varArrayString;


 ?>
