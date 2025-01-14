<?php

$meses = array(
    'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio',
    'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

// usando for
for($i = 0; $i < count($meses); $i++){
    echo $meses[$i] . '<br>';
}

echo '<br>';

$contador = 0;

// usando while
while($contador < count($meses)){
    echo $meses[$contador] . '<br>';
    $contador++;
}

?>