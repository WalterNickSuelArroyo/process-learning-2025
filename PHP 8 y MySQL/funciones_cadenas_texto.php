<?php

// htmlspecialchars() es una función que convierte caracteres especiales en entidades HTML
echo htmlspecialchars("<h1>Hola Mundo</h1>");
// salida: &lt;h1&gt;Hola Mundo&lt;/h1&gt;

echo "<br>";

// Función que recibe una cadena de texto y devuelve la misma cadena sin espacios al principio y al final
echo trim("   Hola Mundo   ");
// salida: Hola Mundo

echo "<br>";

// strlen() es una función que devuelve la longitud de una cadena de texto
echo strlen("Hola Mundo");
// salida: 10

echo "<br>";

// substr() es una función que devuelve una parte de una cadena de texto
echo substr("Hola Mundo", 0, 6);
// salida: Hola M

echo "<br>";

// Función que recibe una cadena de texto y devuelve la misma cadena con la primera letra en mayúscula
echo ucfirst("colegio");
// salida: Colegio

echo "<br>";

// Función que recibe una cadena de texto y devuelve la misma cadena con todas las letras en mayúscula
echo strtoupper("colegio");
// salida: COLEGIO

echo "<br>";

// Función que recibe una cadena de texto y devuelve la misma cadena con todas las letras en minúscula
echo strtolower("COLEGIO");
// salida: colegio

echo "<br>";

// strpos() es una función que devuelve la posición de la primera ocurrencia de una cadena de texto dentro de otra cadena de texto
echo strpos("Hola Mundo", "a");
// salida: 3


?>