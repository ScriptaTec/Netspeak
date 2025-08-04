<?php
require "../controller/config.php";
session_start();

// echo var_dump($_POST);
$id_usuario = $_SESSION['user']['id'] ?? null;

if (!$id_usuario) {
    echo "<script>alert('Usuário não autenticado'); location.href = 'cadastro.php';</script>";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['editar_dados_basicos'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        $sql = "UPDATE usuarios SET nome = ?, email = ? WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$nome, $email, $id_usuario]);

        $_SESSION['user']['nome'] = $nome;
        $_SESSION['user']['email'] = $email;
        $mensagem = "Dados básicos atualizados!";
    }

    if (isset($_POST['editar_personalizacao'])) {
        $nome_completo = $_POST['nome_completo'];
        $email_secundario = $_POST['email_secundario'];
        $genero = $_POST['genero'] ?? '';
        $grau_formacao = $_POST['grau_formacao'] ?? '';
        $dificuldade = $_POST['dificuldade'] ?? '';

        $sql = "UPDATE usuarios SET 
            nome_completo = ?, email_secundario = ?, genero = ?, 
            grau_formacao = ?, dificuldade = ?
            WHERE id = ?";
        $stmt = $pdo->prepare($sql);

        $stmt->execute([
            $nome_completo,
            $email_secundario,
            $genero,
            $grau_formacao,
            $dificuldade,
            $id_usuario
        ]);

        $_SESSION['user'] = array_merge($_SESSION['user'], [
            'nome_completo' => $nome_completo,
            'email_secundario' => $email_secundario,
            'genero' => $genero,
            'grau_formacao' => $grau_formacao,
            'dificuldade' => $dificuldade
        ]);
        $mensagem = "Dados de personalização atualizados!";
    }
    header("Location: ../view/perfil.php");
    exit();
}
?>