<!-- 
 Ejercicio 3: Escribir un porgrama que imprima por pantralla los cuadrados (Un numero multiplicadio por si mismo)
 de los primeros 40 numeros naturales.
 PD Utlizar buclke while
 -->

 <?php

 echo "Escribir un porgrama que imprima por pantralla los cuadrados (Un numero multiplicadio por si mismo)
 de los primeros 40 numeros naturales.
 PD Utlizar bucle while <hr/><br/>";

 //Delaracion de variables
 $numero = 1;
 $cuadrado = 0;
 //Bucle while
 while($numero <= 40){
    $cuadrado = ($numero * $numero);
    echo "El cuadrado del Numero $numero es igual a $cuadrado <br/>";
    $numero++;
}

echo "<br/><br/> Escribir un porgrama que imprima por pantralla los cuadrados (Un numero multiplicadio por si mismo)
 de los primeros 40 numeros naturales.
 PD Utlizar bucle FOR <hr/><br/>";

 for($i = 0; $i <= 40; $i++) {

    $cuadrado = ($i * $i);
    echo "El cuadrado del Numero $i es igual a $cuadrado <br/>";

 }

 
 ?>