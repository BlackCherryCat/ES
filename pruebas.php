<?php
$a = 2;
$b = 3;
function ambito() {
    global $a, $b;
   return $a * $b;
}
$prod=ambito();
echo $prod;

echo "</br>" . $_SERVER['SERVER_NAME'] . "</br>" . $_SERVER['SERVER_SOFTWARE'] . "</br>";
define("PI",3.14);
echo PI;
define("CLASE","AULA2DAW");
echo "</br>Estoy en la aula de " . CLASE . "</br>";
echo PHP_VERSION;

const CONSTANTE="AULA2DAW";
echo "</br>" . CONSTANTE;

$sistemasop = array("so1" => "Windows 10", "so2" => "ubuntu", "so3" => "Windows Server 10", "so4" => "Ubuntu Server LTS");
$vectormix = array("nombre" => "Pedro", "edad" => 27, 3 => 0.5);
$vector1 = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
echo "</br>";
echo "La posicion 4 es " . $vector1[3];
echo "</br>";
echo "El alumno " . $vectormix["nombre"] . " tiene " . $vectormix["edad"] . " años.";
echo "</br>";
var_dump($vectormix); //informacion de variables y su contenido

for ($i=1; $i <= 10; $i++) { 
    echo "<p> 7 x " . $i . " = " . 7*$i . "<p/>";
}

echo "<br/>";

for ($i=10; $i >= -10; $i--) { 
    if ($i==0) {
        echo "hola";
        continue;
    }
    echo "<p> 10 / " . $i . " = " . 10/$i . "<p/>";
}

?>