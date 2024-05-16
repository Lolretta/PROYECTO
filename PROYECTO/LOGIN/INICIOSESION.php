<?php 
    include "dbConn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tacos Ana</title>
    <link rel="stylesheet" href="./style-landing.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>

    <script>
        var inputTexto = document.getElementById('cajatexto');
        inputTexto.addEventListener('focus', function() {
            inputTexto.placeholder = '';
        });
    </script>

    <div id="izq">
        <img id="logo" src="https://scontent.fntr2-1.fna.fbcdn.net/v/t39.30808-6/326542226_699230398416490_947096932246096610_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=5f2048&_nc_ohc=aRDmXZ55Ho4Q7kNvgHwOmu-&_nc_ht=scontent.fntr2-1.fna&oh=00_AYC8x8_09dhQeet9xDoQ8Z42Crhh6czSfWfo6xGnTJifmw&oe=6648684F" alt="Tacos Ana Logo">
        <div id="iniciosesion">
            <p class="manrope-titulo">Ingresa a tu cuenta</p>
            <p class="inter-iniciosesion" style="font-size: 12px;">No tienes una cuenta? <a href="https://web.facebook.com/tacossudadosana/?locale=es_LA&_rdc=1&_rdr">Registrate</a></p>
            <p class="inter-iniciosesion">Usuario/Email</p>
            <div>
                <input type="text" class="inter-iniciosesion" id="cajatexto" placeholder="Ingresa tu usuario o email">
            </div>
            <p class="inter-iniciosesion">Contraseña</p>
            <div>
                <input type="password" class="inter-iniciosesion" id="cajatexto" placeholder="Ingresa tu contraseña">
            </div>
            <input type="checkbox" id="checkbox" value="valor"> <label class="inter-iniciosesion">Recordarme</label>
            <a href="./OLVIDARCONSTRASEÑA.html" id="contraseña" class="inter-iniciosesion">Has olvidado tu contraseña?</a>
            <br>
            <button id="boton" class="inter-iniciosesion" style="font-weight: bold; color: white;">Ingresar</button>
        </div>
    </div>
</body>
</html>