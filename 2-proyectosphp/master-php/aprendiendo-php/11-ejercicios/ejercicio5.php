<!-- 
 Ejercicio 5: hacer un porgrama que muestre todos los numeros entre dos numeros que nos lleguen por URL ($_GET)
 -->

 <?php

echo "Ejercicio 5: hacer un porgrama que muestre todos los numeros entre dos numeros que nos lleguen por URL (GET) <hr/><br/>";

//comprobamos si los valores existen en la URL ($_GET) en las posiciones ['numero1'] y ['numero2'] para mostrat los numeros

if(isset($_GET['numero1']) && isset($_GET['numero2'])){

// Recibimos los valores del GET
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];

for($numero1 = $numero1; $numero1 <= $numero2; $numero1++){
    echo $numero1."<br/>";
}

} else{
    echo "<H1> Porfavor Introduce valores en la URL </H1> <br/>". 
        "<h2> Ejemplo: ejercicio4.php?<strong>numero1=2&numero2=10<?strong> </h2><br/>";
}

 ?>