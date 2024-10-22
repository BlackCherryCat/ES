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
    if (count($array) < $num - 1 | $num - 1 <= 0) {
        echo "Estas fuera de rango";
    } else {
        echo $array[$num - 1][0] . " " . $array[$num - 1][1];
    }
}

verContenido($articulos, 3);
