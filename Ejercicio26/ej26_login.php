<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <form action="ej26_bienvenida.php" method="post">
        <label for="user">Usuario: </label>
        <input type="text" name="user" id="user" />
        <label for="pass">Contraseña: </label>
        <input type="password" name="pass" id="pass" />
        <button type="submit">enviar</button>
    </form>
</body>

</html>