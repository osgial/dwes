<?php
$array = [];

foreach ($_GET as $clave => $valor) {
        $array[$clave] = $valor;
}
/*
$valor1=$_GET["clave1"];
$valor2=$_GET["clave2"];

$array=[
    "clave1"=>$valor1,
    "clave2"=>$valor2,
];
*/

foreach ($array as $clave => $valor) {
    echo "Se ha recibido $valor para la $clave.<br>";
}

//echo "Hello World!";