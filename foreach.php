<?php
    $platos = [
        [
            "titulo" => "Pabellón",
            "numero_comensales" => 9,
            "tipo_de_plato" => "principal",
            "precio" => 7
        ],
        [
            "titulo" => "pizza",
        "numero_comensales" => 9,
        "tipo_de_plato" => "principal",
        "precio" => 7
        ],
        [
            "titulo" => "tres chocolates",
            "numero_comensales" => 9,
            "tipo_de_plato" => "postre",
            "precio" => 7
        ],
    ];

    foreach ($platos as $plato) {
        echo "<h1>".$plato["titulo"]."</h1>";
        echo "numero de comensales: ".$plato["numero_comensales"];
        echo "<br>";
        echo "numero de comensales: ".$plato["tipo_de_plato"];

    }

    // print_r($array);
?>

