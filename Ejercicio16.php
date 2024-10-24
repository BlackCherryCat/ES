<?php
//Funcion que crea un array de numeros aleatorios en base a un tamaño y
//rango de valores, y luego lo devuelve
function array_aleatorio($size, $min, $max)
{
    for ($i = 0; $i < $size; $i++) {
        $array[$i] = rand($min, $max);
    }
    return $array;
}

//funcion que, con un foreach, valorara los numeros del array y
//los pares los multiplicara por 2 y los impares les sumara uno
//para luego devolver el array con dichas modificaciones
function array_ej16($array)
{
    foreach ($array as &$value) {
        if ($value % 2 == 0) {
            $value *= 2;
        } else {
            $value++;
        }
        unset($value);
    }
    return $array;
}

//Guardar el array aleatorio en arraynum
$arraynum = array_aleatorio(10, 1, 100);

//Imprimimos el array
echo "<h3>Array original</h3>";
echo "<table>";
foreach ($arraynum as $key => $value) {
    echo "<tr><td>[" . $key . "]</td>" . "<td>" . $value . "</td>" . "</tr>";
}
echo "</table>";

//Imprimimos el array metiendo al mismo por parametro a la funcion que devuelve el array modificado
echo "<h3>Array modificado</h3>";
echo "<table>";
foreach (array_ej16($arraynum) as $key => $value) {
    echo "<tr><td>[" . $key . "]</td>" . "<td>" . $value . "</td>" . "</tr>";
}
echo "</table>";
