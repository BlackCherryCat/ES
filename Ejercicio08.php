<?php
$array_numerico = array(11, 20, 7, 2, 35, 12, 51, 1);
$array_provincia = array(
    "pr1" => "Almería",
    "pr2" => "Cádiz",
    "pr3" => "Córdoba",
    "pr4" => "Granada",
    "pr5" => "Huelva",
    "pr6" => "Jaén",
    "pr7" => "Málaga",
    "pr8" => "Sevilla"
);

echo "El contenido de array numérico es: <br/>";
foreach ($array_numerico as $i) {
    echo "$i <br/>";
}

echo "<br/> El nombre del índice y el contenido del array provincia es: <br/>";
foreach ($array_provincia as $i => $j) {
    echo  "$i: $j <br/>";
}

echo "<br/> Los numeros pares mas cercanos al contenido inicial son: <br/>";
foreach ($array_numerico as $i) {
    if ($i % 2 != 0) {
        echo $i + 1 . "<br/>";
    } else {
        echo "$i <br/>";
    }
}

echo "<br/> El contenido modificado del array provincia es: <br/>";
foreach ($array_provincia as $i => &$j) {
    $j = "Provincia de " . $j;
    echo  "$j <br/>";
}
