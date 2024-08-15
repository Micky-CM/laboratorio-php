<?php
/* Tipo de datos
    un tipo de dato simplemente es una forma de diferenciar los datos que tenemos por medio de su tipo
    por ejemplo: si es un numero, una letra, una palabra etc.

    En programacion podemos tener varios tipos de datos pero los mas conocidos son:
    NUMERICOS
        integer
        float
        double
    CADENAS DE CARACTERES
        char
        string
    BOOLEANOS
        bool
    SIN VALOR
        null
        undefined
    TIPOS DE DATOS EN PHP
        PHP tiene tipado debil, pero eso no significa que no use tipos de datos.
        este lenguaje no nesesita que definas de forma explicita un tipo de dato,
        ya que por si mismo puede deducir que tipo de dato estamos utilizando
    CONVERSION DE TIPOS AUTOMATICA
        PHP es capaz de convertir un tipo de dato a otro de forma automatica segun el contexto donde se use
        *si sumas un numero con un string, PHP evaluara si ambos como numeros.
*/
$numero = "23"; // si colocas el tipo de dato varia

$nuevo_numero = $numero + 2;
var_dump($nuevo_numero);
echo "</br>";
var_dump($numero);
echo "</br>";

$numero = 10;
$numero = $numero + 0.5;
var_dump($numero);
echo "</br>";

$papas = "10 papas en el costal";
$cuantas_papas_hay = $papas + 5;

echo $cuantas_papas_hay;

echo "\n";
