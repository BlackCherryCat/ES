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
var_export($articulos);

//Mostramos el contenido
echo "<br/> <br/>";
echo "<table>";
echo "<tr><th>Articulo</th><th>Precio(€)</th></tr>";
foreach ($articulos as $value) {
    echo "<tr><td>" . $value[0] . "<td/><td>" . $value[1] . "</td> </tr>";
}
echo "</table>";

//Hacemos una copia del array
$art_original = array_merge($articulos);
var_export($art_original);
echo "<br/> <br/>";

//Dentro de un foreach evaluamos si las entradas que recibimos tienen un precio menor de 50 y, con una variable temporal para
//evitar que solo se quede con la ultima entrada, vamos metiendo los elementos y luego dejamos a null el contenido del indice al que
//le hemos extraido  
$cont = 0;
$baratos = [];
foreach ($articulos as $value) {
    if ($value[1] < 50) {
        $tmp = array_slice($articulos, $cont, 1);
        $baratos = array_merge($baratos, $tmp);
        $articulos[$cont] = null;
    }
    $cont++;
}

//Mostramos el contenido
echo "<table>";
echo "<tr><th>Articulo</th><th>Precio(€)</th></tr>";
foreach ($baratos as $value) {
    echo "<tr><td>" . $value[0] . "<td/><td>" . $value[1] . "</td> </tr>";
}
echo "</table>";
echo "<br/> <br/>";

//Sumamos un 15% y lo guardamos
foreach ($baratos as &$value) {
    $value[1] = $value[1] * 1.15;
}

//mezclamos ambos arrays en uno
$precio_act = array_merge($articulos, $baratos);

//Volvemos a mostrar el contenido pero del nuevo array pero ahora con un for
echo "<table>";
echo "<tr><th>Articulo</th><th>Precio(€)</th></tr>";
for ($i = 0; $i < count($precio_act); $i++) {
    echo "<tr><td>" . $precio_act[$i][0] . "<td/><td>" . $precio_act[$i][1] . "</td> </tr>";
}
echo "</table>";
