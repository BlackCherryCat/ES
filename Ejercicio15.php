<?php
$articulos = [
    [
        "Teclado",
        58
    ],
    [
        "Ratón",
        32
    ],
    [
        "Impresora",
        185
    ],
    [
        "Altavoz",
        62
    ],
    [
        "Auriculares",
        36
    ],
    [
        "Monitor",
        102
    ],
    [
        "Webcam",
        47
    ]
];

function verContenido($array, $num)
{   
    $ind = $num - 1;
    if (count($array) <= $ind | $ind < 0) {
        echo "Estas fuera de rango";
    } else {
        echo $array[$ind][0] . " " . $array[$ind][1];
    }
}

verContenido($articulos, 3);
