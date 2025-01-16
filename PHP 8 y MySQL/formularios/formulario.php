<?php

$errores = '';

if ($_POST['submit']) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    if (!empty($nombre)) {
        $nombre = trim($nombre);
        $nombre = htmlspecialchars($nombre);
        $nombre = stripslashes($nombre);

        // Esto ya esta deprecado
        // $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
        echo "Tu nombre es: " . $nombre . "<br>";
    } else {
        $errores .= 'Por favor ingresa tu nombre <br>';
    }

    echo "<br>";

    if (!empty($correo)) {
        $correo = trim($correo);
        $correo = htmlspecialchars($correo);
        $correo = stripslashes($correo);
        $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            $errores .= 'Por favor ingresa un correo valido <br>';
        } else {
            echo "Tu correo es: " . $correo . "<br>";
        }
    } else {
        $errores .= 'Por favor ingresa tu correo <br>';
    }
}

// trim() elimina los espacios en blanco al inicio y al final de una cadena
// htmlspecialchars() convierte caracteres especiales en entidades HTML
// stripslashes() quita las barras invertidas de una cadena
// filter_var() filtra una variable con un filtro especificado
// FILTER_SANITIZE_STRING: quita etiquetas, excepto las permitidas
// FILTER_SANITIZE_EMAIL: quita caracteres no válidos de un correo electrónico
// FILTER_VALIDATE_EMAIL: valida un correo electrónico
// La diferencia entre FILTER_SANITIZE_EMAIL y FILTER_VALIDATE_EMAIL es que el primero quita caracteres no válidos de un correo electrónico, mientras que el segundo valida un correo electrónico

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .error {
        color: red;
    }
    </style>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?> " method="post">
        <input type="text" name="nombre" placeholder="Nombre">
        <input type="text" name="correo" placeholder="Correo">

        <?php if (!empty($errores)) : ?>
        <div class="error"><?php echo $errores; ?></div>
        <?php endif; ?>

        <input type="submit" name="submit">
    </form>

</body>

</html>