<?php
$datosPersonales = [
    [
        "nombre" => "Maria",
        "apellido" => "Hernandez",
        "edad" => 23,
        "direccion" =>
        [
            "localidad" => "Nerja",
            "municipio" => "Malaga"
        ]
    ],
    [
        "nombre" => "Elena",
        "apellido" => "Gomez",
        "edad" => 17,
        "direccion" =>
        [
            "localidad" => "Motril",
            "municipio" => "Granada"
        ]
    ],
    [
        "nombre" => "Pedro",
        "apellido" => "Ruiz",
        "edad" => 17,
        "direccion" =>
        [
            "localidad" => "Torrox",
            "municipio" => "Malaga"
        ]
    ]
];
var_export($datosPersonales);
echo "<br/>";
echo $datosPersonales[1]["nombre"] . " ";
echo $datosPersonales[1]["edad"];
echo "<br/>";
echo "<br/>";
foreach ($datosPersonales as $dato) {
    echo "Nombre: " .  $dato["nombre"];
    echo "<br/>";
    echo "Apellido: " .  $dato["apellido"];
    echo "<br/>";
    echo "Edad: " .  $dato["edad"];
    echo "<br/>";
    echo "Localidad: " .  $dato["direccion"]["localidad"];
    echo "<br/>";
    echo "Municipio: " .  $dato["direccion"]["municipio"];
    echo "<br/>";
    echo "<br/>";
}
echo "<br/>";
echo "<br/>";
foreach ($datosPersonales as $dato) {
    if ($dato["edad"] < 18) {
        echo "Nombre: " .  $dato["nombre"];
        echo "<br/>";
        echo "Apellido: " .  $dato["apellido"];
        echo "<br/>";
        echo "Edad: " .  $dato["edad"];
        echo "<br/>";
        echo "Localidad: " .  $dato["direccion"]["localidad"];
        echo "<br/>";
        echo "Municipio: " .  $dato["direccion"]["municipio"];
        echo "<br/>";
        echo "<br/>";
    }
}
