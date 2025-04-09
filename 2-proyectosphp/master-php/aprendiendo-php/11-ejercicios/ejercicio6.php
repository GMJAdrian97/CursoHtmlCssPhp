<!-- 
 Ejercicio 6: Imprimir por pantalla todas las tablas de multiplicar del 1 al 10 y mostrarla en una tabla HTML
 -->

<?php

echo "Ejercicio 6: Imprimir por pantalla todas las tablas de multiplicar del 1 al 10 y mostrarla en una tabla HTML<hr/><br/>";

//inicializamos las variables
$numero = 1;

//mostramos la cabecera de la tabla

echo "<table border='1'>". //inicio de la tabla
        "<caption>Tablas de multiplicar</caption>". //Titulo de la tabla 
        "<tr>"; // inicio de Fila 1 de celdas o cabeceras
        for($i = $numero; $i <= 10; $i++) { // en un renglon(tr) creamos los encanezados de las columnas
            echo "<th>Tabla del $i</th>";
         }
echo "</tr>"; // cierre Fila 1 de celdas o cabeceras
         for($numeroTabla = 1; $numeroTabla <= 10; $numeroTabla++){
            echo "<tr>"; // inicio de Fila 2 de celdas  
                    for($tabla = 1; $tabla <= 10; $tabla++) { //
                        echo "<th>$tabla x $numeroTabla = ".($tabla*$numeroTabla)."</th>";
                    }
            echo "</tr>"; // cierre de Fila 2 de celdas 
         }
    "</table>";//fin de la tabla

?>

<!-- "<tr>"; 
            for($tabla = $numeroTabla; $tabla <= 10; $tabla++) { //
                echo "<th>1 x $tabla = ".($tabla*$numeroTabla)."</th>";
            }
echo    "</tr>";  -->