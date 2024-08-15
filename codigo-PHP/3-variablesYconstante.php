<?php
/*
    que es una variable?
    es algo que varia, es decir, es capaz de guardar cualquier cosa en
    su interior u puede modificar, sustituit
    o eliminar dicho elemento que est[e guardado en cualquier momento]
    que es una constante?
    es algo que nunca cambia, es decir una ves que le asigne  un valor ya no es posible modificarlo
    ni sustituirlo
    Una constante siempre mantendra su valor  intacto desde el momoetno en que se declare



    Estructura de una Variable
    simepre inicia con el signo '$'
    ejemplo
    $nombre = "erick";
    erick= se denomina asignacion
    */
// VARIABLE
$numero_1 = 8;
$numero_2 = 7;

echo $numero_1 + $numero_2;
echo "</br>";

// CONSTANTE
define("NUMERO_PI", 3.141592);
echo NUMERO_PI;
echo "</br>";
