<?php
if ($_GET["num2"] == 0) {
    echo "Error. El segundo número no puede ser 0";
} else if (empty($_GET["num1"]) | empty($_GET["num2"])) {
    echo "Error. Faltan parametros";
} else if (!is_numeric($_GET["num1"]) | !is_numeric($_GET["num2"])) {
    echo "Error. Algunos no son numeros";
} else {
    echo "<h2>Resultados</h2>";
    echo "La suma entre ambos números: " . $_GET["num1"] + $_GET["num2"] . "<br/ >";
    echo "La resta entre ambos números: " . $_GET["num1"] - $_GET["num2"] . "<br/ >";
    echo "La multiplacion entre ambos números: " . $_GET["num1"] * $_GET["num2"] . "<br/ >";
    echo "La división entre ambos números: " . $_GET["num1"] / $_GET["num2"] . "<br/ >";
}
