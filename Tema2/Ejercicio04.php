<?php
$nota = 6;
if ($nota < 0 || $nota > 10) {
    echo "Nota no válida";
} elseif ($nota < 5) {
    echo "Suspenso";
} elseif ($nota < 7) {
    echo "Aprobado";
} elseif ($nota < 9) {
    echo "Notable";
} else {
    echo "Sobresaliente";
}

echo "<br/>";

switch ($nota) {
    case $nota < 0 || $nota > 10:
        echo "Nota no válida";
        break;
    case $nota < 5:
        echo "Suspenso";
        break;
    case $nota < 7:
        echo "Aprobado";
        break;
    case $nota < 9:
        echo "Notable";
        break;
    default:
        echo "Sobresaliente";
}
