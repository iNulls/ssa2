<?php
// Verificar login
if ($_POST["username"] == "professor" && $_POST["password"] == "18051998") {
    session_start();
    $_SESSION["username"] = $_POST["username"];
    header("Location: buscar-turma.php");
    exit();
} else {
    header("Location: index.html");
    exit();
}
?>