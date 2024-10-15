<?php
$array1 = [];

for ($i = 0; $i < 20; $i++) {
    $array1[$i] = rand(1, 50);
}

echo "<h3>Array Original</h3>";
echo "<table>";
echo "<tr>";
foreach ($array1 as $key => $value) {
    echo "<td>" . $key . " " . "</td>";
}
echo "</tr>";

echo "<tr>";
foreach ($array1 as $key => $value) {
    echo "<td>" . $value . " " . "</td>";
}
echo "</tr>";
echo "</table>";

$arraypar = [];
$arrayimpar = [];

foreach ($array1 as $value) {
    if ($value % 2 == 0) {
        $arraypar[] = $value;
    } else {
        $arrayimpar[] = $value;
    }
}

$array1 = [];

foreach ($arraypar as $value) {
    $array1[] = $value;
}
foreach ($arrayimpar as $value) {
    $array1[] = $value;
}

echo "<h3>Array resultante</h3>";
echo "<table>";
echo "<tr>";
foreach ($array1 as $key => $value) {
    echo "<td>" . $key . " " . "</td>";
}
echo "</tr>";

echo "<tr>";
foreach ($array1 as $key => $value) {
    echo "<td>" . $value . " " . "</td>";
}
echo "</tr>";
echo "</table>";
