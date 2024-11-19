<?php
session_start();
$nombre = $_POST["name"];
$apellidos = $_POST["lname"];
$edad = $_POST["age"];
$email = $_POST["mail"];
$provincia = $_POST["prov"];
$_SESSION["name"] = $nombre;
$_SESSION["lname"] = $apellidos;
$_SESSION["age"] = $edad;
$_SESSION["mail"] = $email;
$_SESSION["prov"] = $provincia;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Información de <?php echo $_SESSION["user"] ?></h2>
    <p>El nombre de <?php echo $_SESSION["user"] ?> es <?php echo $_SESSION["name"] ?></p>
    <p>El apellido de <?php echo $_SESSION["user"] ?> es <?php echo $_SESSION["lname"] ?></p>
    <p>Con una edad de <?php echo $_SESSION["age"] ?></p>
    <p>Su correo es <?php echo $_SESSION["mail"] ?></p>
    <p>Vive en <?php echo $_SESSION["prov"] ?></p>
</body>

</html>