<!-- Estructura de html -->
<!DOCTYPE html>
<html lang="es">
    <!-- Head y meta datos -->
    <head>
        <meta charset="UTF-8">
        <title>Imprimir en pantalla - Master PHP</title>
    </head>
    <!-- Contenido (Cuerpo) de la pagina -->
    <body>
        <h1>Imprimir en pantalla - Master PHP</h1>
        <!-- Apetura de Php -->
        <?php

            echo'<p>En Php utilizamos la intruccion <strong> (echo) </strong> para poder imprimir en pantalla</p><br />';
            echo"<p>Syntaxis: <strong>echo</strong> 'texto a imprimir';</p><br />";
            echo'<h3>Listado de videjuegos</h3>';
            echo'<ul>';
                echo'<li>GTA V</li>'.
                    '<li>Red Dead Redemption 2</li>'.
                    '<li>The Last of Us Part II</li>'.
                    '<li>Cyberpunk 2077</li>'.
                    '<li>Fallout 76</li>';
            echo'</ul>';
            echo'<p>Esta es la lista de'.'-'.'juegos mas jugados del 2025</p>';

        ?>
    </body>
</html>