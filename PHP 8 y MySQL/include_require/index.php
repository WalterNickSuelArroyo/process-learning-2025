<?php

function suma($a, $b) {
    return $a + $b;
}

include 'vista.php';
//salida: El resultado es: 10

// include 'vista2.php';
// Como vista2.php no existe, el script se detiene y muestra un warning.
//salida: Warning: include(vista2.php): failed to open stream: No such file or directory in /var/www/html/PHP/PHP-Examples/include_require/index.php on line 16
// el include o warning no detiene la ejecución del script y si se mostrará el resto del contenido de la página, mientras que require si detiene la ejecución del script y el resto del contenido de la página no se mostrará.

// require 'vista2.php';
// Como vista2.php no existe, el script se detiene y muestra un error fatal.
//salida: Fatal error: require(): Failed opening required 'vista2.php' (include_path='.:/usr/share/php:/usr/share/pear') in /var/www/html/PHP/PHP-Examples/include_require/index.php on line 16

// La diferencia entre include y require es que si el archivo no se encuentra, include solo mostrará un warning, mientras que require mostrará un error fatal y detendrá la ejecución del script.

// Es recomendable usar require cuando se necesita que el archivo exista y se necesite que el script se detenga si no se encuentra, y usar include cuando no es necesario que el archivo exista y no se necesita que el script se detenga si no se encuentra.

// En general, es recomendable usar require en la mayoría de los casos, ya que es mejor que el script se detenga si un archivo no se encuentra, en lugar de que el script siga ejecutándose con un archivo faltante.

// Por ejemplo en casos de archivos de configuración, es mejor usar require, ya que si el archivo de configuración no se encuentra, el script no podrá funcionar correctamente y es mejor que se detenga en lugar de seguir ejecutándose con una configuración incorrecta.

?>