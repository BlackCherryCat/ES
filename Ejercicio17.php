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

function agregarElemento($array, $name, $price)
{
    $array[count($array)] = [$name, $price];
    return $array;
}
function listarArticulos($array)
{
    echo "<table>";
    echo "<tr><th>Articulo</th><th>Precio(€)</th></tr>";
    foreach ($array as $value) {
        echo "<tr><td>" . $value[0] . "<td/><td>" . $value[1] . "</td> </tr>";
    }
    echo "</table>";
}
function calcularPromedio($array)
{
    $total = 0;
    $cont = 0;
    foreach ($array as $value) {
        $total += $value[1];
        $cont++;
    }
    return $total / $cont;
}
function eliminarArticulo($array, $name)
{
    foreach ($array as $key => $value) {
        if ($value[0] == $name) {
            unset($array[$key]);
            return $array;
        }
    }
}

listarArticulos($articulos);
$articulos = agregarElemento($articulos, "Ethernet", 22);
$articulos = agregarElemento($articulos, "Adaptador", 14);
listarArticulos($articulos);
$articulos = eliminarArticulo($articulos, "Monitor");
listarArticulos($articulos);
echo "<h3>El promedio de precios es:</h3>" . calcularPromedio($articulos) . "€";
