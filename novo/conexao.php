<?php
$servername = "localhost"; // O endereço do servidor de banco de dados
$username = "root"; // Seu nome de usuário do banco de dados
$password = ""; // Sua senha do banco de dados
$dbname = "cafeteria_manha"; // Nome do banco de dados

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
