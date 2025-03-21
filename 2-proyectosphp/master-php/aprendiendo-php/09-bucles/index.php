<?php


/* //LOS BUUCLES SON UNA ESTRUCRURA DE CONTROL QIUE ITERA O REPITE LA EJECUCION DE UNA 
// SERIA DE INTRUCCIONES TANTAS VECES COMO SEAN NCESARIOS EN BASE A UN ACONDION QUE LLEVA EL BUCLE */


/* Bucle WHITE 

whilw(condicion){
    Bloque de instrucciones
    otra intruccion
}

*/

$numero = 0;

while($numero <= 100){
    echo "$numero";
    if($numero != 100){
        echo ", ";
    }
        
    $numero++;
}

echo "<hr /><br />";

/////////////////////Ejemplo 1

if(isset($_GET['numero'])){
    //Cambiar tipo de dato
    $numero = (int)$_GET['numero'];
} else{
    $numero = 1;
}


echo "<hr /><br />";


echo "<h1>Bucle WHILE</h1>";
echo "<h1>Tabla de multiplicar del numero $numero</h1>";

$multiplicador = 1;

while($multiplicador <= 10){
  $resultado = $numero * $multiplicador;
  echo "$numero x $multiplicador = $resultado <br />";
  $multiplicador++;
}


echo "<hr /><br />";

echo "<h1>Bucle DO WHILE</h1>";

/* DO WHILE
do{
    Bloque de codigo
}while(Condicion); */

$edad = 18;
$contador = 1;

do{
    echo "Tienes acceso a la zona $contador <br>";
    $contador++;
} while($edad >= 18 && $contador <= 10);

?>