<?php

/* // Condicionales 

Estructura del IF

if(condionales){
    Intrucciones
} elsae {
    Otras intrucciones
}

 */

 //Creacion de Variales ]
 $color = "Verde";

 //Condional IF

 if($color == "rojo"){
    echo "El color es rojo";
 }else{
    echo "El color no es rojo";
 }


/*  // Operadores de comparacion 
== Igual; nos compara que el dato sea igual independeiente del tipo de dato
=== Identico; Nos compara que el dato sea identico hasta en el mismo tipo de dato
!= Diferente; nos compara que el dato sean diferentes
<> Diferente; nos compara que el dato sean diferentes
!== No identico; 
< menor que
> mayor que
<= menor igual que
>= mayor igual que

*/

echo "<hr /><br />";

// ejemplo 2

// creaciuon de variables
$year = 2019;

if($year != 2019){
    echo "Estamos en año diferente a 2019";
}else{
    echo "Estamos en año 2019";
}

 
// Ejemplo 3

//Vareiables

$nombre = "adrian";
$edad = 30;
$ciudad = "Acambaro";
$estado = "Guanajato";
$mayoria_edad = 18;

if($edad >= $mayoria_edad){
    echo "<h1> Felicidades ".$nombre." eres mayor de edad con una edad de: ".$edad." años";
    if($estado == "Guanajuato"){
        echo "y eres de la cuidad de: ".$ciudad;
    } else{
        echo " Y no eres de Guanajato";
    }
} else{
    echo "<h1> Lo sentimos ".$nombre." no eres mayor de edad con una edad de: ".$edad." años";
}

echo "<hr /><br />";

// Ejemplo 4

//Vareiables

$dia = 8;

/* if($dia == 1){
    echo "Hoy es Lunes";
} else {
    if($dia == 2){
        echo "Hoy es Martes";
    } else {
        if($dia == 3){
            echo "Hoy es Miercoles";
        } else {
            if($dia == 4){
                echo "Hoy es Jueves";
            } else {
                if($dia == 5){
                    echo "Hoy es Viernes";
                } else {
                    if($dia == 6){
                        echo "Hoy es Sabado";
                    } else {
                        if($dia == 7){
                            echo "Hoy es Domingo";
                        } else {
                            
                        }
                    }
                }
            }
        }
    }
} */

if($dia == 1){
    echo "Hoy es Lunes";
} elseif ($dia == 2){
    echo "Hoy es Martes";
} elseif ($dia == 3){
    echo "Hoy es Miercoles";
} elseif ($dia == 4){
    echo "Hoy es Jueves";
} elseif ($dia == 5){
    echo "Hoy es Viernes";
} elseif ($dia == 6){
    echo "Hoy es Sabado";
} elseif ($dia == 7){
    echo "Hoy es Domingo";
} elseif ($dia >= 8){
    echo "No existe ese dia de la semana";
}


echo "<hr /><br />";

// Ejemplo 5

//Vareiables

$edad_minima = 18;
$edad_maxima = 64;
$edad_oficial = 10;

if($edad_oficial >= $edad_minima && $edad_oficial <= $edad_maxima){
    echo "Estas en la edad para poder trabajar ya que tienes ".$edad_oficial." años";
} else {
    echo "No estas en la edad para poder trabajar ya que tienes ".$edad_oficial." años";
}


echo "<hr /><br />";

// Ejemplo 6

//Vareiables

$pais = "Mexco";

if($pais == "Mexico" || $pais == "España" || $pais == "Colombia"){
    echo "En este pais se habla español";
} else {
    echo "En este pais no se habla español";
}

echo "<hr /><br />";

////////////////////////////////

//Condional Switches
$dia = 10;

switch($dia){
    case 1:
        echo "Hoy es Lunes";
        break;
    case 2:
        echo "Hoy es Martes";
        break;
    case 3:
        echo "Hoy es Miercoles";
        break;
    case 4:
        echo "Hoy es Jueves";
        break;
    case 5:
        echo "Hoy es Viernes";
        break;
    case 6:
        echo "Hoy es Sabado";
        break;
    case 7:
        echo "Hoy es Domingo";
        break;
    default:
        echo "No existe ese dia de la semana";
        break;
}

////////////////////////////////
echo "<hr /><br />";

goto marca;
echo "<h3>Seccion 1</h3>";
echo "<h3>Seccion 2</h3>";
echo "<h3>Seccion 3</h3>";
echo "<h3>Seccion 4</h3>";

marca:
echo "Me saltado 4 echos"
?>