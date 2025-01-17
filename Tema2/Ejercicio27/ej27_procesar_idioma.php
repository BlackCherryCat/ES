<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valor = $_POST["lang"];
}
setcookie("idioma_preferido", $valor, time() + (3600 * 24 * 30));
header("Location: ej27_web_idioma.php");
exit();
