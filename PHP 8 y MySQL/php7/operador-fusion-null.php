<?php

// El operador de fusión de null (??) se puede usar para verificar si una variable es null o no. Si la variable no es null, se devuelve su valor; de lo contrario, se devuelve el valor de la derecha.
// ejemplo
$nombre = $_GET['nombre'] ?? 'Anónimo';
echo $nombre;