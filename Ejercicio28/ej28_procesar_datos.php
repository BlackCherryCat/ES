<?php
session_start();
$valor = $_POST["name"];
setcookie("nombre_usu", $valor, time() + (3600 * 24));
$_SESSION["mail"] = $_POST["mail"];
$_SESSION["color"] = $_POST["color"];
header("Location: ej28_bienvenida.php");
exit();
