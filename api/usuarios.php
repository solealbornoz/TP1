<?php
$conexion = new mysqli("localhost", "phpmyadmin", "phpmyadmin", "fotomascotas");
$consulta = $conexion->query("SELECT nombre, usuario FROM usuarios");
$usuarios = [];
while ($fila = $consulta->fetch_assoc()) {
    $usuarios[] = $fila;
}
header('Content-Type: application/json');
echo json_encode($usuarios);
?>