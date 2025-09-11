<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AP61OscarG</title>
</head>
<body>

<?php if ($_SERVER["REQUEST_METHOD"] == "POST") : ?>

    <?php
    $nombre = $_POST["figura"] ?? '';
    if ($nombre == "triangulo") {
        $nombre = "Triangulo";
    } elseif ($nombre == "rectangulo") {
        $nombre = "Rectangulo";
    } elseif ($nombre == "circulo") {
        $nombre = "Circulo";
    }
    if ($nombre == "Triangulo" || $nombre == "Rectangulo") :
    ?>

        <form method="POST" action="ap1-4-2.php">
            <label for="base">Base de la figura:</label>
            <input type="text" id="base" name="base"><br><br>

            <label for="altura">Altura de la figura:</label>
            <input type="text" id="altura" name="altura"><br><br>

            <input type="hidden" id="figura" name="figura" value="<?php echo $nombre; ?>">

            <input type="submit" value="Enviar">
        </form>

    <?php elseif ($nombre == "Circulo") : ?>

        <form method="POST" action="ap1-4-2.php">
            <label for="radio">Radio de la figura:</label>
            <input type="text" id="radio" name="radio"><br><br>

            <input type="hidden" id="figura" name="figura" value="<?php echo $nombre; ?>">

            <input type="submit" value="Enviar">
        </form>

    <?php else : ?>

        <p>Figura no aceptada</p>
        <br><br>
        <p>Solo se podran calcular triangulos, rectangulos y circulos</p>
        <br><br>
        <form method="POST" action="">
            <label for="figura">Figura de area a calcular:</label>
            <input type="text" id="figura" name="figura"><br><br>

            <input type="submit" value="Enviar">
        </form>

    <?php endif; ?>

<?php else : ?>

    <p>Solo se podran calcular triangulos, rectangulos y circulos</p>
    <br><br>
    <form method="POST" action="">
        <label for="figura">Figura de area a calcular:</label>
        <input type="text" id="figura" name="figura"><br><br>

        <input type="submit" value="Enviar">
    </form>

<?php endif; ?>
</body>
</html>