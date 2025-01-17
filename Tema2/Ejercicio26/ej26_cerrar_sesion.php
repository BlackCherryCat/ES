<?php
session_start();
session_unset();
session_destroy();
header("Location: ej26_login.php");
exit();
