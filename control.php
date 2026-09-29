<?php
include('config.php');
include('lib.php');

$conexion = conectar($servidor, $usuarioServidor, $claveServidor, $based, $puerto);

$user = $_POST['user'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM users WHERE user='$user' AND pwd='$pwd'";
$consulta = mysqli_query($conexion, $sql);

if(mysqli_num_rows($consulta)){
    header('Location: especialidades.php');
}else{
    header('Location: noidentificado.php');
}
?>

