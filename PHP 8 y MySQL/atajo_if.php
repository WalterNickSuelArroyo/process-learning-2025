<?php

// isset() -> Determina si una variable está definida y no es NULL
// En este caso como la variable $edad no está definida, isset() devolverá false
$edad = (isset($edad)) ? $edad : 'El usuario no ha definido su edad';

echo "La edad del usuario es: $edad";

?>