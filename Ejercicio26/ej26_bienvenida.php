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

  <h2>Bienvenido <?php echo $_SESSION["user"] ?></h2>
  <a href="ej26_datos_personales.php">Datos personales</a> <a href="ej26_pag_adicional.php">Página adicional</a>
</body>

</html>