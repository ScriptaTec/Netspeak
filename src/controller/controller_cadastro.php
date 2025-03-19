<?php
require '../controller/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $data_nascimento = $_POST['data_nascimento'];
    
    $sql = "INSERT INTO usuarios (nome_completo, email, senha, data_nascimento) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nome, $email, $senha, $data_nascimento]);
    echo "Cadastro realizado com sucesso!";
}
?>
