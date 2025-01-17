<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div style="background-color: 
        <?php
        if (isset($_SESSION["color"])) {
            echo $_SESSION["color"];
        }
        ?>
    ;">
        <h1>Hola,
            <?php
            if (isset($_COOKIE["nombre_usu"])) {
                echo $_COOKIE["nombre_usu"];
            }
            ?>
        </h1>
        <p>Tu correo es:
            <?php
            if (isset($_SESSION["mail"])) {
                echo $_SESSION["mail"];
            }
            ?>
        </p>
        <a href="ej28_cerrar_sesion.php">Cerrar sesión</a>
    </div>

</body>

</html>