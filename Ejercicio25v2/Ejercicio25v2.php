<?php
if ($_POST["user"] == "user1" & $_POST["pass"] == "1234" & $_SERVER["REQUEST_METHOD"] == "POST") {
    header("Location: form_bienve25.html");
    exit();
}
if (($_FILES["img"]["size"]) > 2 * 1024 * 1024) {
    echo "Error. Imagen muy grande";
} elseif ($_FILES["img"]["type"] != "image") {
    echo $_FILES["img"]["size"] . "<br/>"; //aqui se comprueba el tamaño del archivo
    echo "Error. Solo puede subirse imágenes";
} else {
    $rutadestino = "image_up/" . basename($_FILES["img"]["name"]);
    if (move_uploaded_file($_FILES["img"]["tmp_name"], $rutadestino)) {
        echo "Imagen subida con éxito: " . $_FILES["img"]["name"];
        echo "<br/><br/>";
        echo "<p><img src='$rutadestino' type='image/*' width='600' height='500'></p>";
    } else {
        echo "No se pudo";
    }
}
