<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION["username"] = $_POST['username'];
    $_SESSION["password"] = $_POST['password'];
}

if ($_SESSION["username"] == 'admin1' && $_SESSION["password"] == '1234') {
    echo '<form action="Ej02_ActualDeleg2.php" method="post">
        <label for="gameId">ID Juego:</label>
        <input type="text" id="gameId" name="gameId" required>
        <label for="newDelegate">Nuevo Delegado:</label>
        <input type="text" id="newDelegate" name="newDelegate" required>
        <button type="submit">Update</button>
      </form>';
} else {
    echo "Credenciales no validas.";
}
