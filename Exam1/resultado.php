<?php
//Iniciamos la sesion y declaramos el array que contiene los precios
session_start();
$productosdisponibles = [
    "camiseta" =>  25,
    "pantalon" => 23,
    "zapatos" => 64
];

//Este if controla si hemos pulsado el boton de vaciar carrito que es el unico formulario dentro de este php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["carrito"] = [];
}
//Si carrito no existe aparece un mensaje
if (!isset($_SESSION["carrito"])) {
    echo "El carrito esta vacio";
    exit();
    //Si carrito existe pero esta vacio, aparecera el carrito pero si ningun valor ni articulo
} elseif ($_SESSION["carrito"] == []) {
    echo '
Se ha vaciado el carrito
<h1>Carrito de Compras</h1>
<h3>Álvaro De Quinta Rivas</h3>
<h2>Productos en el carrito:</h2>
<table border="solid 1px">
    <tr>
        <th>Producto</th>
        <th>Precio unitario (€)</th>
        <th>Cantidad</th>
        <th>Subtotal (€)</th>
    </tr>
</table>
<h4>Total con impuestos (21% IVA): 0.00 €</h4>
<hr>
<form action="resultado.php" method="post">
    <button type="submit">Vaciar el carrito</button>
</form>
<hr>
<a href="formulario.php">Volver al formulario</a>
';
    //En cuyo caso que haya articulos dentro del array de $_SESSION["carrito"] haermos lo siguiente:
} else {
    echo '
<h1>Carrito de Compras</h1>
<h3>Álvaro De Quinta Rivas</h3>
<h2>Productos en el carrito:</h2>
<table border="solid 1px">
    <tr>
        <th>Producto</th>
        <th>Precio unitario (€)</th>
        <th>Cantidad</th>
        <th>Subtotal (€)</th>
    </tr>';
    //Iteraremos el array en busca de cada articulo y su cantidad para
    //multiplicar la cantidad con el precio y con un switch-case, el caso de cada uno, porque cada articulo tiene un precio distinto
    foreach ($_SESSION["carrito"] as $key => $value) {
        switch ($key) {
            case 'camiseta':
                echo "<tr>
                <td>Camiseta</td>
                <td>" . $productosdisponibles["camiseta"] . "</td>
                <td>$value</td>
                <td>" . $value * $productosdisponibles["camiseta"] . "</td></tr>";
                break;
            case 'pantalon':
                echo "<tr>
                <td>Pantalón</td>
                <td>" . $productosdisponibles["pantalon"] . "</td>
                <td>$value</td>
                <td>" . $value * $productosdisponibles["pantalon"] . "</td></tr>";
                break;
            case 'zapatos':
                echo "<tr>
                <td>Zapatos</td>
                <td>" . $productosdisponibles["zapatos"] . "</td>
                <td>$value</td>
                <td>" . $value * $productosdisponibles["zapatos"] . "</td></tr>";
                break;
        }
    }
    //aqui llamamos a la funcion de TotalConImpuestos
    echo '
</table>
<h4>Total con impuestos (21% IVA): ' . TotalConImpuestos($productosdisponibles) . ' €</h4>
<hr>
<form action="resultado.php" method="post">
    <button type="submit">Vaciar el carrito</button>
</form>
<hr>
<a href="formulario.php">Volver al formulario</a>
';
}
//Esta funcion trata de coger la cantidad de cada producto y multiplicarlo por su precio y este almacenara todos los subtotales
//de cada producto en $total luego la funcion devolvera $total pero multiplicado por 1.21 (a si mismo mas el 21 por ciento)
//correspondiente al total con IVA
function TotalConImpuestos($productosdisponibles)
{
    $total = 0;
    foreach ($_SESSION["carrito"] as $key => $value) {
        switch ($key) {
            case 'camiseta':
                $total += $value * $productosdisponibles["camiseta"];
                break;
            case 'pantalon':
                $total += $value * $productosdisponibles["pantalon"];
                break;
            case 'zapatos':
                $total += $value * $productosdisponibles["zapatos"];
                break;
        }
    }
    return $total * 1.21;
}
