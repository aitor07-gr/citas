<?php
session_start();
?>

<form action="control.php" method="POST">
    Usuario: <input type="text" name="user"><br>
    Contraseña: <input type="password" name="pwd"><br>
    <input type="submit" value="Entrar">
</form>
