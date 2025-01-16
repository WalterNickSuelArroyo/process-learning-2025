<?php
//USANDO EL METODO POST
// El metodo POST es un array asociativo
// Un array asociativo es un array que tiene claves asociadas a valores
// En este caso, las claves son los nombres de los inputs
// y los valores son los valores que el usuario escribió en los inputs
// $_POST es una variable superglobal que guarda los datos que el usuario envió a través de un formulario
// Ejemplo:
// $_POST = [
//     'nombre' => 'Juan',
//     'sexo' => 'hombre',
//     'year' => '2000',
//     'terminos' => 'ok'
// ];

// print_r($_POST);

// Si hay valores, imprimira los valores, pero si no hay valores que me redirecciones a index.php
// if (!$_POST) {
//     header('Location: http://localhost/cursoPHP/formularios/');
// }
// $nombre = $_POST['nombre'];
// $sexo = $_POST['sexo'];
// $year = $_POST['year'];
// $terminos = $_POST['terminos'];

// echo 'Hola, ' . $nombre . '. Eres ' . $sexo . ' y naciste en ' . $year . '. Aceptaste los términos: ' . $terminos;



// USANDO EL METODO GET

if (!$_GET) {
    header('Location: http://localhost/cursoPHP/formularios/');
}

$nombre = $_GET['nombre'];
$sexo = $_GET['sexo'];
$year = $_GET['year'];
$terminos = $_GET['terminos'];

echo 'Hola, ' . $nombre . '. Eres ' . $sexo . ' y naciste en ' . $year . '. Aceptaste los términos: ' . $terminos;