<?php
$arraynum = [];

for ($i = 0; $i < 20; $i++) {
    $arraynum[$i] = rand(1, 100);
}

function array_limite(&$array, $limit)
{
    foreach ($array as $key => $value) {
        if ($value >= $limit) {
            unset($array[$key]);
        }
    }
    unset($array);
}
function imprimir_arr($array)
{
    echo "<table>";
    echo "<th>Índice</th><th>Número</th>";
    foreach ($array as $key => $value) {
        echo "<tr><td>[$key]<td>$value</td></tr>";
    }
    echo "</table>";
}
echo "<h3>Array original</h3>";
imprimir_arr($arraynum);
array_limite($arraynum,50);
echo "<h3>Array modificado</h3>";
imprimir_arr($arraynum);