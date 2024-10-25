<?php
$palabras = ["Radar", "Animal", "Periquito", "Reconocer", "Aula"];

function palindromo1($array)
{
    $phrase = "";

    foreach ($array as $value) {
        if (strtolower($value) == strrev(strtolower($value))) {
            $phrase .= "¿Es " . $value . " una palabra palíndromo? Sí <br/>";
        } else {
            $phrase .= "¿Es " . $value . " una palabra palíndromo? No <br/>";
        }
    }

    return $phrase;
}

function palindromo2($array)
{
    $phrase = "";

    foreach ($array as $value) {
        $pal = "";
        for ($i = strlen($value); $i >= 0; $i--) {
            $pal .= $value[$i];
        }
        if (strtolower($value) == strtolower($pal)) {
            $phrase .= "¿Es " . $value . " una palabra palíndromo? Sí <br/>";
        } else {
            $phrase .= "¿Es " . $value . " una palabra palíndromo? No <br/>";
        }
    }

    return $phrase;
}

echo palindromo1($palabras);
echo "<br/>";
echo palindromo2($palabras);
