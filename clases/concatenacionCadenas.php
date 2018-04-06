<?php
//Concatenación conComillas disponibles
//concatenación
$palabra ="Php ";
$union=$palabra."facilito ";

echo $union;
$palabra.="facilito 2";

echo $palabra;

//Interpolación
echo "<br/>";
echo " ejemplo interpolación $palabra";
echo "<br/>";
echo " ejemplo interpolación 2 corchetes {$palabra}";
echo "<br/>";
//Caracteres escapados
echo "Ejemplo \r carrial return";
echo "<br/>";

//Comillas simples
//Con las comillas simples no se puede utilizar la interpolación
//Tampoco se ueden utlizar los caracteres escapados.
echo 'No es posible interpolar con comilla simple $palabra';
//Para mostrar una comilla simple se utiliza \'
echo "<br/>";
echo 'I\'m a boy';

/*
Secuencias de escape
\a
alarma, es decir, el carácter BEL (07 hex)
\cx
"control-x", donde x es cualquier carácter
\e
escape (1B hex)
\f
salto de página (0C hex)
\n
nueva línea (0A hex)
\p{xx}
un carácter con la propiedad xx, véase propiedades unicode para más información
\P{xx}
un carácter sin la propiedad xx, véase propiedades unicode para más información
\r
retorno de carro (0D hex)
\R
salto de línea: coincide con \n, \r y \r\n
\t
tabulador (09 hex)
\xhh
carácter con el código hexadecimal hh
\ddd
carácter con el código octal ddd, o retroreferencia
*/
 ?>
