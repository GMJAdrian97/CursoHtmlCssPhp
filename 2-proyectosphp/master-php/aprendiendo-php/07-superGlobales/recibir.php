<?php
// Recimos la informacion del formualrio que mandamos por el metodo GET del archivo Formulario.php
echo "<h1>".$_GET["nombre"]."</h1>";
echo "<h1>".$_GET["apellidos"]."</h1>";

// Recimos la informacion del formualrio que mandamos por el metodo POST del archivo Formulario.php
echo "<h1>".$_POST["nombre"]."</h1>";
echo "<h1>".$_POST["apellidos"]."</h1>";
?>