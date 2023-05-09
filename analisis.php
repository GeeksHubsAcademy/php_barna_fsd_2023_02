<?php
$jugo = "manzana";
$jugos = "naranjas";
    echo "Él tomó algo de jugo de $jugo.";
    echo "<br>";
    // Inválido. "s" es un carácter válido para un nombre de variable, pero la variable es $jugo.
    echo "Él tomó algo de jugo hecho de $adsdad.";
    echo "<br>";
    // Válido. Explícitamente especifica el final del nombre de lavariable encerrándolo entre llaves:
    echo "Él tomó algo de jugo hecho de {$jugo}s."
?>