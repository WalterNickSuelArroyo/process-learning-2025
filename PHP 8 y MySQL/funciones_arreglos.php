<?php

// array asociativo
$persona = array('nombre' => 'Juan', 'apellido' => 'Perez', 'edad' => 30);

// extract() convierte las claves de un array asociativo en variables
extract($persona);

echo $nombre; // imprime Juan
echo '<br>';
echo $apellido; // imprime Perez

echo '<br>';

$semana = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo');

// array_pop() elimina el último elemento de un array
$dia_eliminado = array_pop($semana);

echo "El dia eliminado es: " . $dia_eliminado;
// salida: El dia eliminado es: Domingo

echo '<br>';

foreach ($semana as $dia) {
    echo $dia . '<br>';
}

echo '<br>';

// join() convierte un array en un string
// Se puede especificar un separador como primer argumento
echo join(' - ', $semana);
// salida: Lunes, Martes, Miercoles, Jueves, Viernes, Sabado

echo '<br>';

$meses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio');
echo join($meses);
// salida: EneroFebreroMarzoAbrilMayoJunio

echo '<br>';

// count() cuenta la cantidad de elementos de un array
echo count($meses); // imprime 6

echo '<br>';

// sort() ordena un array en orden ascendente
sort($meses); 
echo join('-' , $meses);
// salida: Abril-Enero-Febrero-Junio-Marzo-Mayo

echo '<br>';

// rsort() ordena un array en orden descendente
rsort($meses);
echo join('-' , $meses);
// salida: Mayo-Marzo-Junio-Febrero-Enero-Abril

echo '<br>';

$meses_invertido = array_reverse($meses);
echo join('-' , $meses_invertido);
// salida: Abril-Enero-Febrero-Junio-Marzo-Mayo
// Tener en cuenta que array_reverse() no modifica el array original, sin embargo en este resultado se muestra que el array original fue modificado por el sort() anterior

?>