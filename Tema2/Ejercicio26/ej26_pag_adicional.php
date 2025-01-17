<?php
session_start();
//Usamos htmlspecialchars() para evitar que php interprete las etiquetas html que el usuario pueda meter por el formulario.
//Todo será tratado como un texto
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST["name"]);
    $apellidos = htmlspecialchars($_POST["lname"]);
    $edad = htmlspecialchars($_POST["age"]);
    $email = htmlspecialchars($_POST["mail"]);
    $provincia = htmlspecialchars($_POST["prov"]);
    $_SESSION["name"] = $nombre;
    $_SESSION["lname"] = $apellidos;
    $_SESSION["age"] = $edad;
    $_SESSION["mail"] = $email;
    $_SESSION["prov"] = $provincia;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h2>Información del usuario</h2>
    <?php
    if (isset($_SESSION["name"])) {
        if ($_SESSION["name"] != "") {
            echo '<p>El nombre de ' . $_SESSION["user"] . ' es ' .  $_SESSION["name"]  . '</p>';
        }
    }
    ?>
    <?php
    if (isset($_SESSION["lname"])) {
        if ($_SESSION["lname"] != "") {
            echo '<p>El apellido de ' . $_SESSION["user"] . ' es ' . $_SESSION["lname"] . '</p>';
        }
    }
    ?>
    <?php
    if (isset($_SESSION["lname"])) {
        if ($_SESSION["age"] != "") {
            echo '<p>Tiene una edad de ' . $_SESSION["age"] . ' años </p>';
        }
    }
    ?>
    <?php
    if (isset($_SESSION["prov"])) {
        if ($_SESSION["prov"] != "") {
            echo '<p>Vive en ' . $_SESSION["prov"] . '</p>';
        }
    }
    ?>
    <?php
    if (!isset($_SESSION["name"]) & !isset($_SESSION["lname"]) & !isset($_SESSION["age"]) & !isset($_SESSION["prov"])) {
        echo '<p>No se ha introducido ningun dato personal</p>
        <a href="ej26_datos_personales.php"><button>Ir al formulario</button></a>';
    }
    ?>
    <p><a href="ej26_bienvenida.php">Volver</a></p>
</body>

</html>