<?php
// Configurações de conexão com o banco de dados
$host = 'localhost';
$dbname = 'nome_do_banco';
$username = 'usuario';
$password = 'senha';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
?>