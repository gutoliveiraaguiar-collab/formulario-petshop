<?php

$login = $_POST ["usuario"] ?? "";
$senha = $_POST ["senha"] ?? "";

if ($login == "admin" && $senha == "12345") {
    session_start();
    $_SESSION["usuario"] = $login;
    $_SESSION["autenticado"] = true;

    header("Location: index.php");
    exit();
} else {
    header("Location: login.php?erro=1");
    exit();
}
?>