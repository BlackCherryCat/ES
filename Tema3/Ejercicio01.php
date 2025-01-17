<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Consulta de Ciudades donde se han celebrado Campeonatos</h2>
    <form action="Ejercicio01.php" method="post">
        <label for="nombre">Ingrese el nombre de provincia: </label>
        <input type="text" id="nombre" name="nombre">
    </form>
    <br>
</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["nombre"])) {
    $nombre = $_POST["nombre"];
    $conexion = mysqli_connect("localhost", "root", "", "CAMPEONATOS");
    $query = "SELECT * FROM Ciudades WHERE Provincia = '$nombre'";
    echo "<h2>Ciudades de las provincia " . "'" . $nombre . "'</h2>";
    $resultado = mysqli_query($conexion, $query);
    echo "<table border=1>";
    echo "<tr>";
    echo "<th>Nombre de la Ciudad</th>";
    echo "<th>Provincia</th>";
    echo "<th>Número de Habitantes</th>";
    echo "</tr>";
    while ($registro = mysqli_fetch_assoc($resultado)) {
        echo "<tr>" . "<td>" . $registro["NombreCiudad"] . "</td>" .  "<td>" . $registro["Provincia"] . "</td>" .  "<td>" . $registro["NumHab"] . "</td>" . "</tr>";
    }
    echo "</table>";
}
?>