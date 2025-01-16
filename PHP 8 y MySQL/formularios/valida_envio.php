<?php

// if ($_SERVER['REQUEST_METHOD'] == 'GET') {
//     echo 'Se enviaron por GET';
// } else {
//     echo 'Se enviaron por POST';
// }

// Con isset() se verifica si una variable está definida y no es NULL
// esto quier decir que si se envió el formulario
if (isset($_POST['submit'])) {
    echo 'Se enviaron los datos correctamente';
    echo '<br>';
    // print_r($_POST['submit']); permite ver los datos que se enviaron
    print_r($_POST['submit']);
}