<?php
$conexion = new mysqli("localhost", "phpmyadmin", "phpmyadmin", "fotomascotas");
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Login
    $data = json_decode(file_get_contents("php://input"), true);
    $usuario = $data['usuario'] ?? '';
    $password = $data['password'] ?? '';

    // Busca el usuario y verifica la contraseña
    $stmt = $conexion->prepare("SELECT nombre, usuario FROM usuarios WHERE usuario = ? AND password = ?");
    $stmt->bind_param("ss", $usuario, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        echo json_encode(['success' => true, 'usuario' => $row['usuario'], 'nombre' => $row['nombre']]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Usuario o contraseña incorrectos']);
    }
    $stmt->close();
} else {
    // GET: lista de usuarios
    $consulta = $conexion->query("SELECT nombre, usuario FROM usuarios");
    $usuarios = [];
    while ($fila = $consulta->fetch_assoc()) {
        $usuarios[] = $fila;
    }
    echo json_encode($usuarios);
}

$conexion->close();
?>