<?php
$ordenadores = [
    [
        [
            "Marca" => "HP",
            "Procesador" => "INTEL i5",
            "Precio" => 623
        ],
        [
            "Marca" => "LENOVO",
            "Procesador" => "INTEL i7",
            "Precio" => 924
        ]
    ],
    [
        [
            "Marca" => "HP",
            "Procesador" => "AMD Ryzen 5",
            "Monitor" => "LG 23.8p",
            "Precio" => 710
        ],
        [
            "Marca" => "ACER",
            "Procesador" => "INTEL i5",
            "Monitor" => "MSI 27p",
            "Precio" => 685
        ]
    ]
];

var_dump($ordenadores);

echo "<h3>Portatiles</h3>";
echo "<br/>";
foreach ($ordenadores[0] as $dato) {
    echo "Marca: " . $dato["Marca"];
    echo "<br/>";
    echo "Procesador: " . $dato["Procesador"];
    echo "<br/>";
    echo "Precio: " . $dato["Precio"];
    echo "<br/>";
    echo "<br/>";
}

echo "<h3>Sobremesa</h3>";
echo "<br/>";
foreach ($ordenadores[1] as $dato) {
    echo "Marca: " . $dato["Marca"];
    echo "<br/>";
    echo "Procesador: " . $dato["Procesador"];
    echo "<br/>";
    echo "Monitor: " . $dato["Monitor"];
    echo "<br/>";
    echo "Precio: " . $dato["Precio"];
    echo "<br/>";
    echo "<br/>";
}

$ordenadores[0][] = [
    "Marca" => "LENOVO",
    "Procesador" => "INTEL i5",
    "Precio" => 503
];

$ordenadores[1][] = [
    "Marca" => "LENOVO",
    "Procesador" => "INTEL i5",
    "Monitor" => "ASUS 23.8p",
    "Precio" => 704
];

echo "<h3>Portatiles</h3>";
echo "<br/>";
foreach ($ordenadores[0] as $dato) {
    echo "Marca: " . $dato["Marca"];
    echo "<br/>";
    echo "Procesador: " . $dato["Procesador"];
    echo "<br/>";
    echo "Precio: " . $dato["Precio"];
    echo "<br/>";
    echo "<br/>";
}

echo "<h3>Sobremesa</h3>";
echo "<br/>";
foreach ($ordenadores[1] as $dato) {
    echo "Marca: " . $dato["Marca"];
    echo "<br/>";
    echo "Procesador: " . $dato["Procesador"];
    echo "<br/>";
    echo "Monitor: " . $dato["Monitor"];
    echo "<br/>";
    echo "Precio: " . $dato["Precio"];
    echo "<br/>";
    echo "<br/>";
}
