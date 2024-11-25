<?php
session_start();
session_unset();
session_destroy();
setcookie("nombre_usu", "", time() - (3600 * 24));
header("Location: ej28_form_inicial.html");
exit();
