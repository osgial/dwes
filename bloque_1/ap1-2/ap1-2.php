<?php
$array = [];

if (empty($_GET)) {
    echo "No se ha recibido ningún dato o es un valor nulo<br>";
} else {
    foreach ($_GET as $clave => $valor) {
        $array[$clave] = $valor;
    }

    foreach ($array as $clave => $valor) {
        if (is_numeric($valor)) {
            echo "Se ha recibido un número.<br>";
        } elseif (is_string($valor)) {
            echo "Se ha recibido una cadena de caracteres.<br>";
        } elseif (is_null($valor)) {
            echo "No se ha recibido ningun dato o el valor es nulo.<br>";
        }
    }
}

//echo "Hello World!";