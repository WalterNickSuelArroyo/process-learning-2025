<?php

$alex = array('telefono' => '123456789', 'edad' => 25, 'apellido' => 'González', 'pais' => 'México');

echo $alex['telefono'];

echo '<br>';

$alex['pais'] = 'España';
echo $alex['pais'];

echo '<br>';

echo 'El teléfono de Alex es: ' . $alex['telefono'];

?>