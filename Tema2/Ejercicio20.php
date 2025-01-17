<?php
$texto = "Todos los dias de la semana voy al IES Jorge Guillén porque estoy en segundo curso del ciclo formativo DAW";
$palabra = "DAW";
$palprohibidas = ["segundo", "DAW"];

function func_texto($texto, $palabra, $palprohibidas)
{
    echo "Longitud del texto: " . strlen($texto) . "<br/>";
    echo "Cantidad de palabras: " . str_word_count($texto) . "<br/>";
    echo "Veces que la palabra DAW aparece: " . contarpalabra($texto, $palabra) . "<br/>";
    foreach ($palprohibidas as $value) {
        $ast = "";
        for ($i = 0; $i < strlen($value); $i++) {
            $ast .= "*";
        }
        $texto = str_replace(strtoupper($value), $ast, $texto);
        $texto = str_replace(strtolower($value), $ast, $texto); 
    }
    echo "Texto con palabras prohibidas reemplazadas por asteriscos: " . $texto;
}

function contarpalabra($texto, $palabra)
{
    return substr_count($texto, $palabra);
}

func_texto($texto, $palabra, $palprohibidas);
