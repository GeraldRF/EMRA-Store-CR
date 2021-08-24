<?php

if (isset($_SESSION['USER']) && isset($_SESSION['UltimoAcceso'])) {
    $ahora = date("Y-n-j H:i:s");
    $antes = $_SESSION['UltimoAcceso'];
    $tiempo_transcurrido = (strtotime($ahora) - strtotime($antes));

    //comparamos el tiempo transcurrido
    if ($tiempo_transcurrido >= 60) {
        session_destroy();
        echo "Sesion caducada";
    } else {
        echo "Bienvenido " . $_SESSION['USER'] . " !";
    }
}

