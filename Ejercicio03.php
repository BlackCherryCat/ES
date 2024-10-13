<?php
$salarioxH = 8.6;
$horasT = 37;
$salarioSem = $horasT * $salarioxH;
$horasExt = 4;
$salarioT = $salarioSem + ($horasExt * $salarioxH) * 1.3;
$horasTMax = 37;
$horasExtMax = 3;
$salarioTMax = $salarioSem + ($horasExtMax * $salarioxH) * 1.3;

echo $texto = $horasT <= $horasTMax & $horasExt <= $horasExtMax
    ?
    "Número de horas trabajadas " . $horasT .
    "<br/> Salario semanal " . $salarioSem .
    "<br/> Número de horas extras " . $horasExt .
    "<br/> Salario total " . $salarioT
    :
    "Número de horas trabajadas " . $horasT .
    "<br/> Salario semanal " . $salarioSem .
    "<br/> Número de horas extras " . $horasExt .
    "<br/> Salario total " . $salarioTMax;
