<?php
$nombre="Julia";
$contraseña="aa11";
switch($nombre & $contraseña){
    case "Julia" & "aa11":
        echo "Usuario autorizado. Hola, " . $nombre;
        break;
    case "Laura" & "aa12":
        echo "Usuario autorizado. Hola, " . $nombre;
        break;
    case "Pedro" & "aa13":
        echo "Usuario autorizado. Hola, " . $nombre;
        break;
    case "Carlos" & "aa14":
        echo "Usuario autorizado. Hola, " . $nombre;
        break;
    default:
    echo "Usuario no autorizado";
}