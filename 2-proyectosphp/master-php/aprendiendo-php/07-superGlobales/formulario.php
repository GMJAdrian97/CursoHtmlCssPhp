<!DOCTYPE HTML>
<html lang='es'>
    <head>
        <meta charset="utf-8" />
        <title> Formulario en php</title>
    </head>
    <body>
        <h1>Formulario en php</h1>

        <!--  El atributo method nos indica por donde madaremos los datos del formualario y el atributo action nos indica a aque pagina le mandaremos 
          la infromacion y nos redireccionara -->
    
        <form method="GET" action="recibir.php">
            <p>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre">
            </p>
            <p>
                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos">
            </p>

            <input type="submit" value="Enviar Datos"  />
        </form>

        <form method="POST" action="recibir.php">
            <p>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre">
            </p>
            <p>
                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos">
            </p>

            <input type="submit" value="Enviar Datos"  />
        </form>
    </body>
</html>
