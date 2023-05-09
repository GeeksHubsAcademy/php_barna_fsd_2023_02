<?php
    $array = array(
        "bar",
        [1,2,3,4],
    );
// a partir de PHP 5.4
    $array2 = [
        "bar",
        23,
    ];

    // echo $array;

    // print_r($array);

    // echo "<br>";

    // var_dump($array)

    $arrayIndexado = [
        "nombre" => "Dani",
        "age" => 23,
        "hobbies" => [
            "deportes" => [
                "petanca",
                "balonmano",
            ]
        ],
        15 => 24,
        "Leyre",
        "Tarazona"
    ];

    $arrayIndexado[] = 56; // Esto es lo mismo que $arr[18] = 56 en este punto de el script
    $arrayIndexado["year"] = 1990;
    $arrayIndexado["nombre"] = "Juan"; // Esto agrega un nuevo elemento al array con la clave "x"

    unset($arrayIndexado[15]); // Esto elimina el elemento del array
    // unset($arrayIndexado);

    print_r($arrayIndexado);

    // print_r($arrayIndexado["hobbies"]["deportes"][0]);
    // print_r($arrayIndexado[16]);
    // echo "<br>";
    // print_r($arrayIndexado[17]);
    // echo "<br>";
    // print_r($arrayIndexado["Tarazona"]);
    // echo "<br>";
    // print_r($arrayIndexado[43]);

    // const object = {
    //     name: "Dani",
    //     age: 23,
    //     hobbies: {
    //      sport1: "petanca"
    //    }
    // }
    // object.hobbies.sport1
?>