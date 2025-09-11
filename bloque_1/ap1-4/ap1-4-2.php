<?php

$nombre = $_POST["figura"] ?? '';

if ($nombre == "Triangulo") {
    $base = $_POST["base"];
    $altura = $_POST["altura"];
    $areaCalculada = calcularAreaTriangulo($base, $altura);
    echo "El resultado es de un area del triangulo es " . $areaCalculada;
} elseif ($nombre == "Rectangulo") {
    $base = $_POST["base"];
    $altura = $_POST["altura"];
    $areaCalculada = calcularAreaRectangulo($base, $altura);
    echo "El resultado es de un area del rectangulo es " . $areaCalculada;
} elseif ($nombre == "Circulo") {
    $radio = $_POST["radio"];
    $areaCalculada = calcularAreaCirculo($radio);
    echo "El resultado es de un area del circulo es " . $areaCalculada;
}

function calcularAreaTriangulo($base, $altura): float|int {
    return ($base * $altura) / 2;
}

function calcularAreaRectangulo($base, $altura): float|int {
    return $base * $altura;
}

function calcularAreaCirculo($radio): float|int {
    return pi() * ($radio * $radio);
}

?>

<a href="ap1-4.php">
    <button>Volver a seleccion de calculo</button>
</a>
