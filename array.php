<?php
$array1 = array("hola", "adios", "mañana");
for ($i = 0; $i < count($array1); $i++) {
    echo $array1[$i] . "<br/>";
}
foreach ($array1 as $key) {
    echo "$key <br/>";
}
$array2 = array(
    "art1" => "Impresora 3D",
    "art2" => "Monitor INVES",
    "art3" => "Teclado Logitech G",
    "art4" => "Impresora HP"
);
foreach ($array2 as $key) {
    echo "$key <br/>";
}

$arraynum = array(1, 2, 3, 4, 5, 6);
$arraynum2=array();
foreach ($arraynum as $key) {
    echo "$key <br/>";
    
}
echo "<br/>";

foreach ($arraynum as &$key) {
    $key=$key*2;
    echo $key . "<br/>";
}
var_dump($arraynum);