<?php

// Una función es un bloque de código que se ejecuta cuando se llama a la función

// Sintaxis de una función
function nombreFuncion($parametro1, $parametro2) {
    // Código de la función
}

// Ejemplo de función sin parámetros
function saludar() {
    echo "Hola, ¿cómo estás?";
}
saludar();

echo "<br>";

// Ejemplo de función con parámetros
function sumar($num1, $num2) {
    $resultado = $num1 + $num2;
    echo "El resultado de la suma es: $resultado";
}
sumar(5, 3);

echo "<br>";

// Ejemplo de función con retorno
function multiplicar($num1, $num2) {
    $resultado = $num1 * $num2;
    return $resultado;
}
echo "El resultado de la multiplicación es: " . multiplicar(5, 3);

echo "<br>";

// Ejemplo de función con retorno y parámetros por defecto
function dividir($num1 = 10, $num2 = 2) {
    $resultado = $num1 / $num2;
    return $resultado;
}
echo "El resultado de la división es: " . dividir(8, 4);

echo "<br>";

?>