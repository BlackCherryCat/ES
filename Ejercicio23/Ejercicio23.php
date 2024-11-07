<?php
echo "<h1>¡Hola, " . $_POST["name"] . "!</h1>";
echo "Tu lenguaje favorito es: " . $_POST["lang"] . "<br/ > <br/ >";
if (!$_POST["lvl"] == "") {
    echo "Tu experiencia es: " . $_POST["lvl"] . "<br/ > <br/ >";
}

switch (True) {
    case $_POST["lang"] == "PHP" & $_POST["lvl"] == "Principiante":
        echo "PHP es el lenguaje necesario para crear las logicas de interaccion del servidor en el esquema web de cliente-servidor <br/ > <br/ >";
        break;

    case $_POST["lang"] == "PHP" & $_POST["lvl"] == "Intermedio":
        echo "PHP te permite gestionar la base de datos de tu aplicacion <br/ > <br/ >";
        break;

    case $_POST["lang"] == "PHP" & $_POST["lvl"] == "Avanzado":
        echo "Con PHP puedes lograr que una pagina web sea dinamica en base a la adicion de contenido personalizado en tiempo real <br/ > <br/ >";
        break;

    case $_POST["lang"] == "JavaScript" & $_POST["lvl"] == "Principiante":
        echo "JavaScript es el lenguaje predilecto para el frontend de las paginas webs, este consigue añadir dinamismo a las páginas web <br/ > <br/ >";
        break;

    case $_POST["lang"] == "JavaScript" & $_POST["lvl"] == "Intermedio":
        echo "En JavasScript puedes gestionar multiples tareas en tiempo real gracias a las funciones asíncronas <br/ > <br/ >";
        break;

    case $_POST["lang"] == "JavaScript" & $_POST["lvl"] == "Avanzado":
        echo "Con JavaScript y Node.js puedes conseguir que tu aplicacion web corra en un ordenador como una aplicacion convencional <br/ > <br/ >";
        break;
        
    case $_POST["lang"] == "Python" & $_POST["lvl"] == "Principiante":
        echo "Python es un lenguaje muy sencillo, adecuado para pricipiantes y multiusos <br/ > <br/ >";
        break;

    case $_POST["lang"] == "Python" & $_POST["lvl"] == "Intermedio":
        echo "En Python pueden incluso hacerse páginas web <br/ > <br/ >";
        break;

    case $_POST["lang"] == "Python" & $_POST["lvl"] == "Avanzado":
        echo "Hay navegadores web que están íntegramente escritos en Python <br/ > <br/ >";
        break;
}

echo $news = empty($_POST["news"]) ? "No has solicitado contenido adicional" : "Te has suscrito correctamente al contenido adicional";
