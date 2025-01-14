<?php

// una declaración de tipo escalar es una declaración que indica el tipo de dato que se espera en una variable

// En esta funcion le digo que el parametro que recibe es un entero
// Esto me ayuda a que si le paso un string o un float me de un error
// Esto esta disponible desde PHP 7
function cuadrado(int $numero) {
    return $numero * $numero;
}

// Aqui le paso un entero
$numero = '5';

// Si le paso '5' la funcion convertira el string a entero
// Pero si le paso 'sdfsdfs' me dara un error
echo 'El cuadrado de ' . $numero . 'es ' . cuadrado($numero); 

// Si queremos que sea estrictamanete un  entero debemos hacer esto
declare(strict_types=1);