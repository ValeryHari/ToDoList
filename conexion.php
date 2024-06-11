<?php
$servername = "localhost";
$username = "id22304609_hari";
$password = "Vale5511.";
$dbname = "id22304609_todo_list";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
