<?php
//La inicializacion de los arrays que pide el ejercicio
$vector1 = array("Almería","Cádiz","Córdoba","Granada","Huelva","Jaén","Málaga","Sevilla");
$vector2 = array("art1" => "Impresora 3D", 
"art2" => "Monitor INVES", 
"art3" => "Teclado Logitech G", 
"art4" => "Impresora HP", 
"iva" => 0.28,
"fra" => FALSE);
//creacion de la estructura de la página
echo "<h1>EJERCICIO 1 TEMA 2. Álvaro De Quinta Rivas</h1>";
var_dump ($vector1);
echo "<h3>La capita de Andalucía es " . $vector1[7] . "</h3>";
echo "<br/>";
echo "Artículo 4: " . $vector2["art4"] . "<br/>";
echo "El artículo " . $vector2["art1"] . " tiene asociado un impuesto del " . $vector2["iva"]*100 . "%";
echo "<br/>";
echo "<h4>Factura: " . json_encode($vector2["fra"]) . "</h4>";
?>