<?php
$host = 'localhost';
$dbname = 'budget_db';
$username = 'root';
$password = '';
$port = 3306; // Substitua pelo número da porta que está utilizando

// Criar conexão
$conn = new mysqli($host, $username, $password, $dbname, $port);

// Verificar conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
