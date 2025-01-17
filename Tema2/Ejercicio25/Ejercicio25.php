<?php
if ($_POST["user"] == "user1" & $_POST["pass"] == "1234") {
    echo "<h2>Bienvenido user1</h2>";
    echo "<form action=\"Ejercicio25.php\" method=\"post\" enctype=\"multipart/form-data\">" .
        "<label for=\"img\">Sube tu imagen (maximo 2 MB): </label>" .
        "<input type=\"file\" name=\"img\" id=\"img\" size=\"1048576\" accept=\"image/png\">" .
        "<button type=\"submit\">enviar</button>" .
        "</form>";
}
if (isset($_FILES["img"]["type"])) {
    if ($_FILES["img"]["size"] > 1048576) {
        echo "Error. Imagen muy grande";
    } elseif ($_FILES["img"]["type"] != "image/png") {
        echo "Error. Solo puede subirse imágenes";
    } else {
        $rutadestino = "image_up/" . basename($_FILES["img"]["name"]);
        if (move_uploaded_file($_FILES["img"]["tmp_name"], $rutadestino)) {
            echo "Imagen subida con éxito: " . $_FILES["img"]["name"];
            echo "<br/><br/>";
            echo "<p><img src='$rutadestino' type='image/*' width='600' height='500'></p>";
        } else{
            echo "No se pudo";
        }
    }
}

