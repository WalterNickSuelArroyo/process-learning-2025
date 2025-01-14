<?php

$meses = array(
    "Enero",
    "Febrero",
    "Marzo",
    "Abril",
    "Mayo",
    "Junio",
    "Julio",
    "Agosto",
    "Septiembre",
    "Octubre",
    "Noviembre",
    "Diciembre"
);

$alejandro = array('telefono' => 123456, 'edad' => 20, 'apellido' => 'Perez');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Meses</h1>
    <ul>
        <?php
        foreach ($meses as $mes) {
            echo "<li>$mes</li>";
        }

        echo "<br>";

        foreach ($alejandro as $dato => $valor) {
            echo "<li>$dato: $valor</li>";
        }

        ?>


    </ul>

</body>

</html>