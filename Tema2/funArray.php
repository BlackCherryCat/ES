<?php
$array1 = ["perros", "gatos", "musarañas", "loro", "periquito"];
list($var1, $var2,,, $var3) = $array1;
echo $var3 . "<br/><br/>";
$array2 = range(10, 50, 2);
var_export($array2);
echo "<br/>";
echo (json_encode(in_array("perros", $array1)));
unset($array1[4]);
var_export($array1);
$array1[] = "periquito";
echo "<br/>";
var_export($array1);
echo "<br/> <br/>";
for ($i = 0; $i < count($array1); $i++) {
    echo $array1[$i] . " " . $i . "<br/>";
}
echo "<br/>";
shuffle($array1);
var_export($array1);
