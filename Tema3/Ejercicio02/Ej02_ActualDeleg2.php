<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !isset($_POST['repeat'])) {
    $newDelegate = $_POST['newDelegate'];
    $gameId = $_POST['gameId'];

    $dominio = "localhost";
    $user = "admin";
    $pass = "admin";
    $db = "campeonatos";
    $conn = new mysqli($dominio, $user, $pass, $db);

    $sql = "UPDATE juegos SET delegado='$newDelegate' WHERE IdJuego='$gameId'";
    if ($conn->query($sql) == TRUE) {
        echo "Se ha cambiado.";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();

    echo '<form action="Ej02_ActualDeleg2.php" method="post">
            <p>¿Seguir actualizando?</p>
            <button type="submit" name="repeat" value="yes">si</button>
            <button type="submit" name="repeat" value="no">no</button>
          </form>';
} elseif (isset($_POST['repeat']) && $_POST['repeat'] == 'no') {
    session_destroy();
    header("Location: Ej02_ActualDeleg.html");
    exit;
} else {
    header("Location: Ej02_ActualDeleg.php");
    exit;
}
