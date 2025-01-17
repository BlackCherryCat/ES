<?php
//Crear un array de numeros aleatorios de tamaño 20, desde 1 al 40. una vez creada mostrar los numeros que son divisibles entre 4.
//Aquellos numeros que sean divisibles entre 4 multiplicarlos por dos, sin modificar, y mostralos todos
$numeros = array();
for ($i = 0; $i < 20; $i++) {
    $numeros[] = rand(1, 40);
    if ($numeros[$i] % 4 == 0) {
    echo $numeros[$i] . "<br/>";
    }
}
foreach ($numeros as $val) {
    if ($val % 4 == 0) {
        echo "<br/>" . $val * 2;
    }else{
        echo "<br/>" . $val;
    }
}
