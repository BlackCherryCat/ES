<?php
$user = $_POST["user"];
$pass = $_POST["pass"];
$usercom = "user1";
$passcom = "1234";
session_start();
$_SESSION["user"] = $user;
if (isset($_POST["user"])) {
    if ($user == $usercom & $pass == $passcom & $_SERVER["REQUEST_METHOD"] == "POST") {

        header("Location: ej26_bienvenida.php");
        exit();
    } else {
        echo "Usuario incorrecto";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <form action="ej26_login.php" method="post">
        <label for="user">Usuario: </label>
        <input type="text" name="user" id="user" />
        <label for="pass">Contraseña: </label>
        <input type="password" name="pass" id="pass" />
        <button type="submit">enviar</button>
    </form>
</body>

</html>