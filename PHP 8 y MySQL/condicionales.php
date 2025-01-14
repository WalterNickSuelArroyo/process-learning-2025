<?php

// sintaxis de un condicional
// if (condicion) {
//     // código a ejecutar si la condición es verdadera
// } else {
//     // código a ejecutar si la condición es falsa
// }

/* Operadores de comparacion
== igual
!= diferente
< menor que
> mayor que
<= menor o igual que
>= mayor o igual que
! negacion
*/

/* Operadores logicos
&& and evalua que se cumplan todas las condiciones
|| or evalua que se cumpla al menos una condicion
xor evalua que se cumpla una y solo una condicion
*/


$edad = 18;
$nombre = "Juan";

if ($edad >= 18 && $nombre == "Juan") {
    echo "Puedes ingresar";
} else {
    echo "No puedes ingresar";
}

echo "<br>";

// Ejemplo 2 para el operador xor
$edad = 25;
$nombre = "Pedro";

// si la edad es mayor o igual a 18 y el nombre es igual a Juan
// Devuelve true si exactamente uno de los operandos es true, pero no ambos.
if ($edad >= 18 xor $nombre == "Juan") {
    echo "Puedes ingresar";
} else {
    echo "No puedes ingresar";
}

?>