<?php
//Iniciamos la sesion y declaramos el array que contiene los precios
session_start();
$productosdisponibles = [
    "camiseta" =>  25,
    "pantalon" => 23,
    "zapatos" => 64
];
//En caso de que el formulario sea post y el nombre de $_POST["prod"] se encuentre en el valor de alguna de las llaves del
//array asociativo $productosdisponibles, procederá a hacer lo siguente:
if ($_SERVER["REQUEST_METHOD"] == "POST" && in_array($_POST["prod"], array_keys($productosdisponibles))) {
    //En caso de que no exista $_SESSION["carrito"], iniciarla
    if (!isset($_SESSION["carrito"])) {
        $_SESSION["carrito"] = [];
    }
    //Sumamos la cantidad de cada articulo, notese el += para que siempre incremente, para que tenga en cuenta si ya habia una cierta
    //cantidad de productos y que no se quede el ultimo valor introducido
    $_SESSION["carrito"][$_POST["prod"]] += $_POST["cant"];
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen</title>
</head>

<body>
    <h1>Formulario de compra</h1>
    <h3>Álvaro De Quinta Rivas</h3>
    <form action="formulario.php" method="post">
        <label for="prod">Selecciona un producto: </label>
        <select name="prod" id="prod">
            <option value="camiseta">Camiseta - <?php echo $productosdisponibles["camiseta"]; ?> €</option>
            <option value="pantalon">Pantalon - <?php echo $productosdisponibles["pantalon"]; ?> €</option>
            <option value="zapatos">Zapatos - <?php echo $productosdisponibles["zapatos"]; ?> €</option>
        </select> <br>
        <label for="cant">Cantidad: </label>
        <input type="number" name="cant" id="cant"> <br>
        <button type="submit">Agregar al carrito</button>
    </form>
    <hr>
    <a href="resultado.php">Ver carrito</a>
</body>

</html>