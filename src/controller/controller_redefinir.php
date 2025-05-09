<?php
session_start();
require 'config.php';

// Verifica se o usuário está logado
if (!isset($_SESSION['user'])) {
    echo "<script>alert('Você precisa estar logado.'); location.href='../view/cadastro.php';</script>";
    exit;
}

$email = $_POST['email'];
$senha_atual = $_POST['senha_atual'];
$nova_senha = $_POST['nova_senha'];
$confirmarSenha = $_POST['confirmar_senha'];

// Verifica se as senhas nova e confirmação são iguais
if ($nova_senha !== $confirmarSenha) {
    echo "<script>alert('A nova senha e a confirmação não coincidem.'); history.back();</script>";
    exit;
}

// Pega a senha atual do banco
$stmt = $pdo->prepare("SELECT senha FROM usuarios WHERE email = :email");
$stmt->bindParam(':email', $email);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Verifica se a senha atual informada está correta
    if (!password_verify($senhaAtual, $user['senha'])) {
        echo "<script>alert('Senha atual incorreta.'); history.back();</script>";
        exit;
    }

    // Verifica se a nova senha é diferente da atual
    if (password_verify($novaSenha, $user['senha'])) {
        echo "<script>alert('A nova senha não pode ser igual à senha atual.'); history.back();</script>";
        exit;
    }

    // Atualiza a senha
    $novaSenhaHash = password_hash($novaSenha, PASSWORD_DEFAULT);
    $update = $pdo->prepare("UPDATE usuarios SET senha = :senha WHERE email = :email");
    $update->bindParam(':senha', $novaSenhaHash);
    $update->bindParam(':email', $email);

    if ($update->execute()) {
        echo "<script>alert('Senha atualizada com sucesso!'); location.href='../view/perfil.php';</script>";
    } else {
        echo "<script>alert('Erro ao atualizar a senha.'); history.back();</script>";
    }
} else {
    echo "<script>alert('Usuário não encontrado.'); history.back();</script>";
}
?>
