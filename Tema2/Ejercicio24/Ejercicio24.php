<?php
if (strtotime($_POST["date"]) > strtotime("next month")) {
    echo "Error. No se puede pedir una cita para el mes que viene";
} elseif (strtotime($_POST["date"])+86400 < (strtotime("now"))) {
    echo "Error. No se puede pedir una cita para una fecha anterior a la actual";
} else {
    echo "<h1>Tu cita, " . htmlspecialchars($_POST["name"]) . "</h1>";
    echo "Número de la seguridad social: " . $_POST["seg"] . "<br/><br/>";
    echo "Vas a ser atendido para " . $_POST["type"] . "<br/><br/>";
    echo "A fecha de: " . date('d.m.Y',strtotime($_POST["date"])) . "<br/><br/>";
    echo "En horario de " . $_POST["time"];
}
