<?php

// El oerador de nave espacial es una forma de comparar dos valores
// En lo siguiente se observa como se compara dos valores

echo 1 <=> 1; 
// Salida: 0

// Regresa 1 si el valor de la izquierda es mayor que el de la derecha
// Regresa -1 si el valor de la derecha es mayor que el de la izquierda
// Regresa 0 si ambos valores son iguales

echo '<br>';

echo 1 <=> 2;
// Salida: -1

echo '<br>';

echo 2 <=> 1;
// Salida: 1

echo '<br>';

$arreglo = [3, 1, 2, 4];
sort($arreglo);
echo implode(' - ', $arreglo);

echo '<br>';

// Haciendo que el arreglo se ordene de forma ascendente sin usar la función sort

$arreglo2 = [6, 4, 5, 3];

// La funcion usort recibe dos parametros, el arreglo y una función anónima
// La función anónima recibe dos parametros, $a y $b
// La función anónima regresa el valor de la comparación de los dos valores
// En este caso se usa el operador de nave espacial para comparar los valores
// La función anónima regresa -1 si $a es menor que $b, 0 si son iguales y 1 si $a es mayor que $b
// La función usort ordena el arreglo de acuerdo a los valores que regresa la función anónima

usort($arreglo2, function($a, $b){
    return $a <=> $b;
});

echo implode(' - ', $arreglo2);