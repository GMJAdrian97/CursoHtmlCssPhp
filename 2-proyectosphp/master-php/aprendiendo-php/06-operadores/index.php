<?php

// Operadores aritmeticos

$numero1 = 55;
$numero2 = 33;

echo'Operadores Aritmeticos <br /><br />';
// Suma
echo'Suma:'.($numero1 + $numero2).'<br />';

// Resta
echo'Resta:'.($numero1 - $numero2).'<br />';

// Multiplicación
echo'Multiplicación:'.($numero1 * $numero2).'<br />';

// División
echo'División:'.($numero1 / $numero2).'<br />';

// Modulo o resto
echo'Modulo o Resto:'.($numero1 % $numero2).'<br /><hr />';


// Opreadores ed incrememto y derecremento
echo'Operadores Aritmeticos <br /><br />';

$year = 2019;

$year++;


echo "<h1>$year</h1>";

// Incremento
echo "<h1>Incremento: ".($year++)."</h1>";

// Decremento   
echo "<h1>Decremento: ".($year--)."</h1>";

?>