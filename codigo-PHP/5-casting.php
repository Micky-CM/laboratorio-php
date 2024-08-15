<?php
/* que es casting?
    Casting es cuando forzamos que un tipo de dato se convierta el otro tipo de dato
*/

$numero = "5";
var_dump($numero);
echo "</br>";

$numero = (int) $numero;
var_dump($numero);
echo "</br>";

//float
$dias = 5.89;
var_dump($dias);
echo "</br>";

$dias = (int) $dias;
var_dump($dias);
echo "</br>";

//booleano
$bandera = 1;
var_dump($bandera);
echo "</br>";

$bandera = (bool) $bandera;
var_dump($bandera);

