<?php

$texto = 'Carlos';
$numero = 10;
$numero2 = '5';
$arreglo = array('Carlos', 'Cesar', 'Alejandro');
$arreglo_asociativo = array('nombre' => 'Carlos', 'edad' => 20);
$boleano = false;

print_r($texto);
// salida: Carlos

echo '<br>';

print_r($numero);
// salida: 10

echo '<br>';

print_r($numero2);
// salida: 5

echo '<br>';

print_r($arreglo);
// salida: Array ( [0] => Carlos [1] => Cesar [2] => Alejandro )

echo '<br>';

print_r($arreglo_asociativo);
// salida: Array ( [nombre] => Carlos [edad] => 20 )

echo '<br>';

print_r($boleano);
// salida: 1

?>