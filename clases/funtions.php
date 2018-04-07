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
 ?>
