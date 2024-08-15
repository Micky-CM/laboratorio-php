<?php
echo "SUMA </br>";
echo 5 + 5;
echo "</br>";

echo "RESTA </br>";
echo 5 - 9;
echo "</br>";

echo "MULTIPLICACIÓN </br>";
echo 5 * 9;
echo "</br>";

echo "DIVISION </br>";
echo 5 / 9;
echo "</br>";

echo "RESIDUAL </br>";
echo 5 % 9;
echo "</br>";

echo "POTENCIA </br>";
$resultado = 5 ** 3;
echo $resultado;
echo "</br>";

echo "Operaciones </br>";
echo (5 * 6) . " " . (80 / 4) . "</br>";
echo 5 % 2;
echo "</br>";


echo "Conversión de segundos a horas </br>";
$segundos = 7201;
echo "$segundos segundo convertidos a horas son: " . ($segundos / 3600) . " horas." . "</br>";
echo "Sobran " . ($segundos % 3600) . " segundos.";
