<?php
session_start();
//Usamos htmlspecialchars() para evitar que php interprete las etiquetas html que el usuario pueda meter por el formulario.
//Todo será tratado como un texto
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
    <p>Vive en <?php echo $_SESSION["prov"] ?></p>
    <p><a href="ej26_bienvenida.php">Volver</a></p>
</body>

</html>