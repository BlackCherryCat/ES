<?php
$num = 4;
if (is_int($num) && $num > 0) {
    $res = 1;
    for ($i = $num; $i > 0; $i--) {
        echo ($res = $res * $i . "<br/>");
    }
} else {
    echo ("No es un numero valido");
}
