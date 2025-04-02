<!-- 
 Ejercicio 2: Escriboir un script en php de todos los numeros pares que hay del 1 al 100
 -->

 <?php

 echo "Ejercicio 2: Escriboir un script en php de todos los numeros pares que hay del 1 al 100<hr/><br/>";


for($i = 1; $i <= 100; $i++){

    if($i % 2 == 0){
        echo $i. "<br/>";
    }
 
}
 
 ?>