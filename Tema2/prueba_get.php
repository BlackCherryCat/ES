<?php
if (empty($_GET["nombre"]) | empty($_GET["apellido"])) {
    echo "Faltan parametros";
} else {
    echo "Hola " . $_GET["nombre"] . " " . $_GET["apellido"];
}
