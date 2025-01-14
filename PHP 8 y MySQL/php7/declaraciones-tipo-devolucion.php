<?php

// Las declaraciones de tipo de devolucion son una forma de especificar que tipo de valor se espera que una funcion devuelva.
// Como vemos en esta funcion se espera que devuelva un entero.
function obtenerEdad() : int {
    $edad = 23;
    return $edad;
}

echo obtenerEdad();
//Igualmente si queremos que estrictamente sea un int podemos hacer lo siguiente
declare(strict_types=1);