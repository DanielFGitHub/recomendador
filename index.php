<?php
function Recomendacion(string $genero, int $edad): string {
  switch($genero){
    case "Drama":
       if ($edad <= 13) {
            return "Recomendamos 'Buscando a Nemo'.";
        } elseif ($edad <= 18) {
            return "Recomendamos 'Un viernes de Locos'.";
        }elseif ($edad <= 30) {
            return "Recomendamos 'La vida es bella'.";
        } elseif ($edad <= 40) {
            return "Recomendamos '7 almas'.";
        }  elseif ($edad <= 50) {
            return "Recomendamos 'Amor'.";
        }else {
            return "Recomendamos 'El abuelo'.";
        }
    case "Comedia": 
         if ($edad <= 13) {
            return "Recomendamos 'Shrek'.";
        }elseif ($edad <= 30) {
            return "Recomendamos 'Superbad'.";
        } elseif ($edad <= 40) {
            return "Recomendamos 'The Hangover'.";
        }  elseif ($edad <= 50) {
            return "Recomendamos 'Anchorman'.";
        } elseif ($edad <= 40) {
            return "Recomendamos 'Virgen a los 40'.";
        }else {
            return "Recomendamos 'Tiempos Modernos'.";
        }
    case "Crimen":
        if ($edad <= 13) {
            return "Lo sentimos pero no recomendamos películas de crimen para menores de 13 años.";
        }else if($edad<= 18){
            return "Recomendamos 'Los Goonies'.";
        }
        elseif ($edad <= 25) {
            return "Recomendamos 'Pulp Fiction'.";  
        } elseif ($edad <= 35) {
            return "Recomendamos 'El Club de la Pelea'.";
        } elseif ($edad <= 45) {
            return "Recomendamos 'El Silencio de los Inocentes'.";
        }else {
            return "Recomendamos 'El Padrino'.";
        }
        break;
    case "Musical":
        if ($edad <= 13) {
            return "Recomendamos 'High School Musical'.";
        }elseif ($edad <= 30) {
            return "Recomendamos 'Mamma Mia!'.";
        } elseif ($edad <= 40) {
            return "Recomendamos 'Chicago'.";
        }  elseif ($edad <= 50) {
            return "Recomendamos 'El Fantasma de la Opera'.";
        }else {
            return "Recomendamos 'La La Land'.";
        }
        break;
    default:
        return "Género no reconocido. Por favor, elige entre Drama, Comedia, Crimen o Musical.";
  }
}
// Si es una petición AJAX, solo responde con la recomendación
if (isset($_GET['genero']) && isset($_GET['edad'])) {
    $genero = $_GET['genero'];
    $edad = intval($_GET['edad']);
    echo Recomendacion($genero, $edad);
    exit;
} ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recomendador de peliculas</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Recomendador de Peliculas - Daniel Fonseca Torres</h1>
    <h2>Bienvenido al recomendador de peliculas.</h2>
    <p><b>
        Para hacer poser darle la mejor atención en su visita le solicitamos que ingrese 
        su edad y seleccione el genero de su preferencia, gracias.
    </b></p>
    <div class="container">
        <label for="edad">Ingresa tu edad:</label>
        <input type="number" id="edad" placeholder="Ingresa tu edad" min="1">
        
        <div class="buttons">
            <button id="drama">Drama</button>
            <button id="recommendButton2">Comedia</button>
            <button id="recommendButton3">Musical</button>
            <button id="recommendButton4">Crimen</button>
        </div>
        
        <div id="recommendation"></div>
    </div>
    <script src="./script.js"></script>
</body>
</html>