<?php
if (empty($_GET["num1"]) | empty($_GET["num2"])) {
    echo "Error. Faltan parametros";
} else if (!is_numeric($_GET["num1"]) | !is_numeric($_GET["num2"])) {
    echo "Error. Algunos no son numeros";
} else {
    echo $_GET["num1"] + $_GET["num2"];
}
