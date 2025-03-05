<?php

// Constantes
// Es un cotenedor de informacion que no puede variar

echo '<h2>Constantes</h2><br />'.
    'Syntaxis: <strong>define</strong>(\'NOMBRE\', \'VALOR\');'.'<br />'.
    'Ejemplo: define(\'PI\', 3.1416);'.'<br /> <br />'.
    'Luego de definir una constante, podemos utilizarla en cualquier lugar de nuestro codigo.'.'<br />'.
    'Ejemplo: echo PI; // Imprime: 3.1416'.'<br />'.
    'Para imprimir una variable solo es cuestion de usar el nombre que le dimos sin necesidad del $ que usan las variables'.'<br />'.
    'Ejemplo: echo PI; y // Imprime: 3.1416'.'<br />'.
    'SComo buiena practica siempre deberemos ecribior las constantes en mayusculas y con un _ para separar fraces ejemplo COLOR_ROJO'.'<br /><hr />';

// Defiuendo una constante

define('Nombre', 'Jorge Adrian Garcia Martionez');
define('WEB', 'www.googogle.com');

//Imprimiento una constante

echo'NOMBRE <br />';
echo'WEB <br /><hr />';


//Constantes predefinidas

echo '<h2>Constantes predefinidas</h2><br />'.
    'Existen varias constantes predefinidas en PHP que nos proporcionan información sobre el entorno y el código'.'<br />'.
    'Ejemplos: PHP_VERSION, DOCUMENT_ROOT, SERVER_NAME, etc.'.'<br />'.
    'Ejemplo: echo PHP_VERSION; // Imprime: 7.4.17'.'<br />'.
    'Las constantes predefinidas son unicamente accesibles dentro de las funciones y scripts PHP.'.'<br /><hr />';

echo PHP_VERSION;

?>