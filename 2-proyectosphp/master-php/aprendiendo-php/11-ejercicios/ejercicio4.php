<!-- 
 Ejercicio 4: Recoger 2 numeros por la URL (GET) y hacer todas la operaciones basicas de una calculadora (Suma, resta, multiplicacion y divicion) de esos dos numeros
 -->

<?php

 echo "Ejercicio 4: Recoger 2 numeros por la URL (GET) y hacer todas la operaciones basicas de una calculadora (Suma, resta, multiplicacion y divicion) de esos dos numeros <hr/><br/>";

//comprobamos si los valores existen en la URL ($_GET) en las posiciones ['numero1'] y ['numero2'] para realizar las operaciones
 if(isset($_GET['numero1']) && isset($_GET['numero2'])){

        //obtenemos los datos que nos mandan por la URL ($_GET) y inicializamos las variables
        $numero1 = $_GET['numero1'];
        $numero2 = $_GET['numero2'];

        //operaciones

        //Suma
        $resultado = $numero1 + $numero2;
        echo "La suma de los numeros $numero1 y $numero2 es igual a $resultado <br/>";

        //Resta

        $resultado = $numero1 - $numero2;
        echo "La resta de los numeros $numero1 y $numero2 es igual a $resultado <br/>";

        //Multiplicacion

        $resultado = $numero1 * $numero2;
        echo "La multiplicacion de los numeros $numero1 y $numero2 es igual a $resultado <br/>";

        //Division

        $resultado = $numero1 / $numero2;
        echo "La division de los numeros $numero1 y $numero2 es igual a $resultado <br/>";
        
    }else{
        echo "<H1> Porfavor Introduce valores en la URL </H1> <br/>". 
            "<h2> Ejemplo: ejercicio4.php?<strong>numero1=2&numero2=10<?strong> </h2><br/>";
    }
 
 
  ?>