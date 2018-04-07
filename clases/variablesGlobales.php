<?php
echo "<p> Hola mundo</p>";
$integer =1;
$float =4.8;
$bool=true;
$string="Hola mundo";
$array= array('blue' =>"azul" ,'2'=>2 );
$arrayNormal= array('pepe','juan');
$globalVar="Variable global";
echo $integer;
echo $float;
echo $array['blue'];
$globalVarS="Variable global start";
echo  $arrayNormal[1];
//Variables locales y gloables
function GlobalVariable(){
  $localVar="Local var";
  echo $localVar;
  echo $GLOBALS["globalVarS"];
  echo $GLOBALS['globalVar'];
}
GlobalVariable();
?>
