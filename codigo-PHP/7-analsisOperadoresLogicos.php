<?php
$es_michi_grande = true;
$le_gusta_comer = true;
$sabe_volar = false;
$tiene_2_patas = false;

//AND
var_dump($es_michi_grande && $le_gusta_comer);
echo "</br>";
//bool(true);

//OR
var_dump($es_michi_grande || $sabe_volar);
echo "</br>";
//bool(true);

//OR
var_dump($sabe_volar || $tiene_2_patas);
echo "</br>";
//bool(false);

//NOT
var_dump(!$le_gusta_comer);
echo "</br>";
//bool(false);

//NOT+AND
var_dump(!$le_gusta_comer && $es_michi_grande);
echo "</br>";
//bool(false);
