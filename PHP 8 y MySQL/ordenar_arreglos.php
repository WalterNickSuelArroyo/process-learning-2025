<?php

$meses = array(
    'Enero',
    'Febrero',
    'Marzo',
    'Abril',
    'Mayo',
    'Junio',
    'Julio',
    'Agosto',
    'Septiembre',
    'Octubre',
    'Noviembre',
    'Diciembre'
);

$numeros = array(1, 22, 3, 44, 5, 66, 7, 88, 9, 10);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meses del año</title>
</head>

<body>
    <h1>Meses del año ordenados ascendentemente</h1>

    <ul>
        <?php
        // sort() ordena el arreglo de forma ascendente
        sort($meses);
        foreach ($meses as $mes) {
            echo '<li>' . $mes . '</li>';
        }
        ?>
    </ul>

    <h1>Meses del año ordenados descendentemente</h1>

    <ul>
        <?php
        // rsort() ordena el arreglo de forma descendente
        rsort($meses);
        foreach ($meses as $mes) {
            echo '<li>' . $mes . '</li>';
        }
        ?>
    </ul>

    <h1>Numeros ordenados ascendentemente</h1>
    <ul>
        <?php 
        sort($numeros);
        foreach ($numeros as $numero) {
            echo '<li>' . $numero . '</li>';
        }
        ?>
    </ul>
</body>

</html>