<?php
session_start();

if(!isset($_SESSION['user'])){
    header("Location: noidentificado.php");
    exit;
}
?>

<h2>Bienvenido a la página de especialidades</h2>
