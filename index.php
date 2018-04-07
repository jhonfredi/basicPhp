<?php
//funciones

hola("andres");

function hola($var){
echo "hola $var";
echo ("<br/>");
}


if(5<10){
  function condicion(){
    echo "5 es menor que 10";
  }
}
hola("pepe");
//Para llamar una función dentro de una condición, primero se debio
// haber ejecutado la condición
condicion();

//Paso por referencia
function referencia(&$b){

  $b*=2;
}
$c=9;
echo ("<br/>");
echo "el valor de c es: $c";
referencia($c);

echo ("<br/>");
echo "nuevo valor por referencia $c";
echo ("<br/>");

//Valores por default

function takeCoffee($coffee="Capuchino"){
  echo "Tomando un $coffee";
  echo ("<br/>");;

}
//tomando valor por default
takeCoffee();
//tomando valor null
takeCoffee(null);
//tomando valor enviado
takeCoffee("Cafe con leche");

//Funciones anonimas (sin nombre)
$varFunc=function ($nombre){
    echo "$nombre";
};

$varFunc('Anonymous functon');
echo ("<br/>");

$varSum=function($a,$b){
  return $a+$b;
};

echo "Anonymous function sum ".$varSum(6,4);
echo ("<br/>");

//Funciones variables
function funVar($var){
  echo "Soy la función variable $var";
}

$varFuncVariable="funVar";
echo $varFuncVariable('funVar');
echo ("<br/>");

//Las funciones variables no se puede utilizar con funciones de php
//para verificar si una función es de php se utliza:
if(function_exists('array_filter')):
  echo "La función array_filter existe";
else:
  echo "La función no exise";
endif;
echo ("<br/>");

//Para ver las funciones pertenecientes a un mdolu se utiliza:
print_r(get_extension_funcs('xml'));
echo ("<br/>");

 ?>
