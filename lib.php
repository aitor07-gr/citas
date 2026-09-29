<?php
function conectar($servidor, $usuario, $clave, $bd, $puerto){
    $conexion = mysqli_connect($servidor, $usuario, $clave, $bd, $puerto);
    return $conexion;
}
?>
