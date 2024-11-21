<?php
session_start();
//Solo en el caso de que el usuario mande el formulario del login se establecerán los valores
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$_SESSION["user"] = $_POST["user"];
$_SESSION["pass"] = $_POST["pass"];
}
$usercom = "user1";
$passcom = "1234";
$user = $_SESSION["user"];
$pass = $_SESSION["pass"];

if ($user == $usercom & $pass == $passcom) {
  echo '<!DOCTYPE html>
    <html lang="en">
    <head>
     <meta charset="UTF-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <title>Document</title>
    </head>
    <body>
      <h2>Bienvenido ' . $_SESSION["user"] . '</h2>
     <a href="ej26_datos_personales.php">Datos personales</a> <a href="ej26_pag_adicional.php">Página adicional</a> 
      <form action="ej26_cerrar_sesion.php" method="post">
       <button type="submit">Cerrar sesión</button>
     </form>
  </body>
</html>';

} else {
  echo "Usuario incorrecto";
}
