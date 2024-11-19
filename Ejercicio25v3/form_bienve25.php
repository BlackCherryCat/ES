<?php
$user = $_POST["user"];
$pass = $_POST["pass"];
$usercom = "user1";
$passcom = "1234";
if ($user == $usercom & $pass == $passcom & $_SERVER["REQUEST_METHOD"] == "POST") {
  session_start();
  $_SESSION["user"] = $_POST["user"];
  echo '<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    
    <h2>Bienvenido <?php echo $_SESSION["user"] ?></h2>
    <form
      action="Ejercicio25v3.php"
      method="post"
      enctype="multipart/form-data">
      <label for="img">Sube tu imagen (maximo 2 MB): </label>
      <input type="file" name="img" id="img" />
      <button type="submit">enviar</button>
    </form>
  </body>
</html>';
} else {
  echo "Usuario incorrecto";
}
