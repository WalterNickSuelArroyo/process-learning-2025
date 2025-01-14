<?php

$meses = array(
    'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio',
    'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

// count() es una función que nos permite contar los elementos de un arreglo
echo count($meses);

echo '<br>';

$ultimo_mes = count($meses) - 1;
echo 'El último mes del año es: ' . $meses[$ultimo_mes];

?>