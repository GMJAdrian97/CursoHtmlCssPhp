<?php

echo "<h1>Bucle FOR</h1>";

/* FOR
for(variable contador; condición; incremento de la variable contador){
    bloque de codigo
} */

$resultado = 0;

for($i =0; $i <= 100; $i++){
    $resultado = $resultado + $i;
}
echo "<h1> El resultado es: $resultado </h1>";

echo "<hr /><br />";

// Ejemplo 1

if(isset($_GET['numero'])){
    //Cambiar tipo de dato
    $numero = (int)$_GET['numero'];
} else{
    $numero = 1;
}

echo "<h1>Tabla de multiplicar con bucle for del numero $numero</h1>";

$multiplicador = 1;

for($multiplicador = 1; $multiplicador <= 10; $multiplicador++){
    $resultado = $numero * $multiplicador;
    echo "$numero x $multiplicador = $resultado <br />";
}


// ejemplo de Break

echo "<hr /><br />";

echo "<h1>If con Break</h1>";

for($multiplicador = 1; $multiplicador <= 10; $multiplicador++){
    if($numero == 45){
        echo "No se pueden mostrar las operaciones prohiobidas";
        break;
    }
    echo "$numero x $multiplicador = $resultado <br />";
}

?>