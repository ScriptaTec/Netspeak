<?php
session_start();
require 'config.php';

// Verifica se o formulário foi enviado corretamente
if (
    empty($_POST['email']) ||
    empty($_POST['senha']) ||             // senha antiga
    empty($_POST['novaSenha']) ||
    empty($_POST['confirmSenha'])
) {
    echo "<script>alert('Preencha todos os campos.'); history.back();</script>";
    exit;
}

$email         = $_POST['email'];
$senha_antiga  = $_POST['senha'];
$nova_senha    = $_POST['novaSenha'];
$confirm_senha = $_POST['confirmSenha'];

// Verifica se a nova senha e a confirmação coincidem
if ($nova_senha !== $confirm_senha) {
    echo "<script>alert('A nova senha e a confirmação não coincidem.'); history.back();</script>";
    exit;
}

// Verifica se o usuário existe
$stmt = $pdo->prepare("SELECT id, senha FROM usuarios WHERE email = :email");
$stmt->bindParam(':email', $email);
$stmt->execute();

if ($stmt->rowCount() === 0) {
    echo "<script>alert('Email não encontrado.'); history.back();</script>";
    exit;
}

$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Verifica se a senha antiga está correta
if (!password_verify($senha_antiga, $user['senha'])) {
    echo "<script>alert('Senha antiga incorreta.'); history.back();</script>";
    exit;
}

// Impede o usuário de usar a mesma senha
if (password_verify($nova_senha, $user['senha'])) {
    echo "<script>alert('A nova senha não pode ser igual à senha antiga.'); history.back();</script>";
    exit;
}

// Atualiza a senha no banco
$nova_senha_hash = password_hash($nova_senha, PASSWORD_DEFAULT);
$update = $pdo->prepare("UPDATE usuarios SET senha = :senha WHERE id = :id");
$update->bindParam(':senha', $nova_senha_hash);
$update->bindParam(':id', $user['id']);

if ($update->execute()) {
    echo "<script>location.href='../view/perfil.php';</script>";
} else {
    echo "<script>alert('Erro ao redefinir a senha.'); history.back();</script>";
}
?>
