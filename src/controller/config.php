<?php
$host = '127.0.0.1';
$dbname = 'cadastro_usuarios';
$user = 'root'; // Altere conforme necessário
$pass = '1234'; // Altere conforme necessário

try { 
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    die("Erro ao conectar ao banco de dados: " . $e->getMessage());
}
?>