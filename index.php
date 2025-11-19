<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema 8</title>
</head>
<body>
    <form action="" method="post">
        <div>
            <label for="nombre">Introduzca su nombre</label>
            <input type="text" id="nombre" name="nombre">
        </div>
        <div>
            <label for="usuario">Introduzca su usuario</label>
            <input type="text" id="usuario" name="usuario">
        </div>
        <div>
            <label for="pensamiento">Introduzca sus pensamientos</label>
            <textarea name="pensamiento" id="pensamiento"></textarea>
        </div>
        <div>
            <label for="fecha"></label>
            <input type="date" name="fecha" id="fecha">
        </div>
        <div>
            <input type="submit" value="enviar">
        </div>
    </form>
    
</body>
</html>

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Recogemos los datos y aplicamos trim
    $nombre = trim($_POST["nombre"]);
    $usuario = trim($_POST["usuario"]);
    $pensamiento = trim($_POST["pensamiento"]);
    $fecha = trim($_POST["fecha"]);

    echo "<h2>Resultados:</h2>";

    echo "Nombre: $nombre (" . strlen($nombre) . " caracteres)<br>";
    echo "Usuario: $usuario (" . strlen($usuario) . "caracteres)<br>";
    echo "Pensamiento: $pensamiento (" . strlen($pensamiento) . "caracteres)<br>";

    if(str_contains($pensamiento, "odio")){
        echo "Su pensamiento contiene la palabra prohibida odio<br>";
    }

    $cadena1 = "pais";
    $cadena2 = "paisaje";

    $nuevaCadena = str_replace($cadena1, $cadena2, $pensamiento);
    echo "Original: .$pensamiento <br>";
    echo "Modificada: .$nuevaCadena <br>";

    echo "Cadena sin espacios: " . trim($pensamiento) . "<br>";

    echo "Con la primera letra en mayusculas:" . ucwords($pensamiento) . "<br>";


    $array_palabras = explode(" ", $pensamiento);
    $pensamientoCifrado = implode("-STOP-", $array_palabras);
    echo  $pensamientoCifrado . "<br>";

    $fecha_raw = explode("-", $fecha);
    echo $fecha_raw;

    

}

?>