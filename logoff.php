<?php
session_start();
 
if (isset($_SESSION["autenticado"]) && isset($_SESSION["usuario"])) {
    unset($_SESSION["autenticado"]);
    unset($_SESSION["usuario"]);
}

header("Location: login.php");
exit();
?>