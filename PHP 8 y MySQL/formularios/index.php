<?php

if ($_POST) {
    echo $_POST['nombre'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- En este caso, $_SERVER['PHP_SELF'] devuelve el nombre del archivo actual, y htmlspecialchars() se usa para evitar ataques XSS (Cross-Site Scripting) al convertir caracteres especiales en entidades HTML.  -->
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> " method="post">
        <input type="text" placeholder="Nombre" name="nombre">
        <br>
        <label for="hombre">Hombre</label>
        <input type="radio" name="sexo" value="hombre" id="hombre">
        <br>
        <label for="mujer">Mujer</label>
        <input type="radio" name="sexo" value="mujer" id="mujer">
        <br>

        <select name="year" id="year">
            <option value="2000">2000</option>
            <option value="2001">2001</option>
            <option value="2002">2002</option>
        </select>
        <br>

        <label for="terminos">Aceptas los terminos</label>
        <input type="checkbox" name="terminos" id="terminos" value="ok">
        <br>

        <input type="submit" value="Enviar">
    </form>

</body>

</html>

<!-- Existen 2 metodos
    - GET: Envía los datos por la URL
    - POST: Envía los datos de manera interna 
-->