<?php
$servidor = "localhost";
$usuario = "root";
$contraseña = "";
$basededatos = "tienda";

// Crear conexión
$conn = new mysqli($servidor, $usuario, $contraseña, $basededatos);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "Conexión exitosa";