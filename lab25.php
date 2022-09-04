<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 2.5</title>
</head>
<body>

    <?php
    $figuras = array('cuadrado', 'tiangulo', 'circulo');
    $figuras[1] = 'rectangulo';
    mostrar_figuras($figuras, "Adicion de rectangulo");

    array_push($figuras, 'pentagono');
    mostrar_figuras($figuras, "Adicion de pentagono");

    array_unshift($figuras, 'hexagono');
    mostrar_figuras($figuras, "Adicion de hexagono");

    array_pop($figuras);
    mostrar_figuras($figuras, "Eliminacion del ultimo");
    
    array_shift($figuras);
    mostrar_figuras($figuras, "Eliminacion del primero");


    function mostrar_figuras($figuras, $mensaje) {
        echo "<br> Arreglo despues de $mensaje <br>";
        foreach($figuras as $figura) {
            echo "$figura <br>";
        }
    }

    ?>

</body>
</html>