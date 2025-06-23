<?php

require_once '../vendor/autoload.php';
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable('../');
$dotenv->load();

$host = $_ENV['DB_HOST'] ?? '127.0.0.1';
$dbname = $_ENV['MYSQL_DATABASE'] ?? 'netspeak';
$user = $_ENV['MYSQL_USER'] ?? 'root';
$pass = $_ENV['MYSQL_PASSWORD'] ?? '1234';

// PARA ALTERAR AS CONFIGURACOES DO BANCO AGORA PODEMOS TROCAR SOMENTE NO .env E ELE JA TROCA NO BANCO E NO PHP

try { 
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro ao conectar ao banco de dados: " . $e->getMessage());
}