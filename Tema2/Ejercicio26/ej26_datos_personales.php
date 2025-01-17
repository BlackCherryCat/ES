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
    <form action="ej26_pag_adicional.php" method="post">
        <label for="name">Nombre: </label>
        <input type="text" name="name" id="name"> <br>
        <label for="lname">Apellidos: </label>
        <input type="text" name="lname" id="lname"> <br>
        <label for="age">Edad: </label>
        <input type="number" name="age" id="age"> <br>
        <label for="mail">Email: </label>
        <input type="email" name="mail" id="mail"> <br>
        <label for="prov">Provincia: </label>
        <input type="text" name="prov" id="prov">
        <button type="submit">Enviar</button>
    </form>
</body>

</html>