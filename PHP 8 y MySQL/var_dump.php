<?php

$texto = 'Carlos';
$numero = 10;
$numero2 = '5';
$arreglo = array('Carlos', 'Cesar', 'Alejandro');
$arreglo_asociativo = array('nombre' => 'Carlos', 'edad' => 20);
$boleano = false;

// var_dump es una funcion que nos permite ver el tipo de dato y el valor de una variable
var_dump($texto);
// resultado: string(6) "Carlos"

echo '<br>';

var_dump($numero);
// resultado: int(10)

echo '<br>';

var_dump($numero2);
// resultado: string(1) "5"

echo '<br>';

var_dump($arreglo);
// resultado: array(3) { [0]=> string(6) "Carlos" [1]=> string(5) "Cesar" [2]=> string(9) "Alejandro" }

echo '<br>';

var_dump($arreglo_asociativo);
// resultado: array(2) { ["nombre"]=> string(6) "Carlos" ["edad"]=> int(20) }

echo '<br>';

var_dump($boleano);
// resultado: bool(false)

?>