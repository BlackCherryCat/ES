<?php
$conexion=mysqli_connect("localhost","root","","CAMPEONATOS");
$query="SELECT * FROM Juego";
$resultado=mysqli_query($conexion,$query);
while($registro=mysqli_fetch_assoc($resultado)){
    echo "Id |" . $registro["IdJuego"];
    
    echo "| Nombre " . "|" . $registro["nombreJuego"] . "|";
    echo "<br/>";
}