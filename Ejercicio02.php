<?php
$articulo = 820;
$tarjeta = FALSE;
echo "El precio del articulo: " . $articulo;
$descuentoT = $articulo * 0.85;
$descuentoE = $articulo * 0.75;
$texto = !$tarjeta ? "<br/> El precio pagando con tarjeta es " . $descuentoT : "<br/> El precio pagando con efectivo es " . $descuentoE;
echo $texto;
$texto = $tarjeta ? "<br/> El precio pagando con tarjeta es " . $descuentoT : "<br/> El precio pagando con efectivo es " . $descuentoE;
echo $texto;