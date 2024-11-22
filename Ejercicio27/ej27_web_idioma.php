<?php
if ($_COOKIE["idioma_preferido"] == "es" | !isset($_COOKIE["idioma_preferido"])) {
    echo '<h2>Hola, bienvenido a nuestra página web</h2>
    <h3>Página en español</h3>
    <a href="ej27_idioma.html"><button>Elegir idioma</button></a>';
} else {
    echo '<h2>Hello, welcome to our website</h2>
    <h3>Page in English</h3>
    <a href="ej27_idioma.html"><button>Change language</button></a>';
}
