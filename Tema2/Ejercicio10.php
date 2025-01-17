<?php
$num = array();
$num_cuadrado = array();
$num_cubo = array();
for ($i = 0; $i < 15; $i++) {
    $num[] = rand(1, 50);
}
$cont=0;
foreach ($num as $val) {
    $num_cuadrado[$cont]=$val*$val;
    $cont++;
}
$cont2=0;
foreach ($num as $val) {
    $num_cubo[$cont2]=$val*$val*$val;
    $cont2++;
}
echo "<table>";
echo "<tr><td>base</td><td>";
    foreach ($num as $val) {
        echo $val . "<br/>";
    }
    echo "</td><td>cuadrado</td><td>";
    foreach ($num_cuadrado as $val) {
        echo $val . "<br/>";
    }
    echo "</td><td>cubo</td><td>";
    foreach ($num_cubo as $val) {
        echo $val . "<br/>";
    }
    echo "</td></tr>";
echo "<table/>";
