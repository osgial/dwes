<?php
$array = [
    1 => "primero",
    3 => "segundo",
    5 => "tercero",
    7 => "cuarto",
    9 => "quinto",
    11 => "sexto",
];
$num = 0;
$acum = 1;
$par = true;
$impar = true;

foreach ($array as $clave => $valor) {
    if ($acum % 2 != 0) {
        echo "Estas en una posicion impar.<br>";
        $impar = true;
        $par   = false;
    } else {
        echo "Estas en una posicion par.<br>";
        $impar = false;
        $par   = true;
    }

    if ($impar == true) {
        $num += $clave;
    } elseif ($par == true) {
        $num +=  $clave;
    }

    if ($num <= 5) {
        echo "El valor de la suma es menor que 5.<br>";
    } elseif ($num <= 10) {
        echo "El valor de la suma es menor que 10.<br>";
    } elseif ($num <= 20) {
        echo "El valor de la suma es menor que 20.<br>";
    }

    $acum++;
}