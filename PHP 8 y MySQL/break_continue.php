<?php

$paises = array(
    'Mexico', 'España', 'Colombia', 'Peru', 'Argentina', 'Venezuela', 'Guatemala'
);

foreach ($paises as $pais) {
    if ($pais == 'España') {
        continue;
    }
    echo $pais . '<br>';
}
// Resultado: Mexico Colombia Peru Argentina Venezuela Guatemala

echo '<hr>';

foreach ($paises as $pais) {
    if ($pais == 'Argentina') {
        break;
    }
    echo $pais . '<br>';
}
// Resultado: Mexico España Colombia Peru


?>