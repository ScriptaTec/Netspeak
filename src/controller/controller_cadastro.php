<?php
session_start();
require '../controller/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Captura os dados do formulário
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha_original = $_POST['senha'];
        $confirmar_senha = $_POST['confirmar_senha'];
        $data_nascimento = $_POST['data_nascimento'];
        $email_secundario = $_POST['email_secundario'] ?? null;

        // Verificação de senha
        if ($senha_original !== $confirmar_senha) {
            $_SESSION['erro_senha'] = "As senhas não coincidem.";
            header("Location: ../view/cadastro.php");
            exit();
        }

        $stmt = $pdo->prepare("SELECT id FROM usuarios WHERE email = ?");
$stmt->execute([$email]);
if ($stmt->rowCount() > 0) {
    $_SESSION['erro_email'] = "Este e-mail já está cadastrado.";
    header("Location: ../view/cadastro.php");
    exit();
}

// Verifica se o email principal informado já foi usado como email secundário
$stmt = $pdo->prepare("SELECT id FROM usuarios WHERE email_secundario = ?");
$stmt->execute([$email]);
if ($stmt->rowCount() > 0) {
    $_SESSION['erro_email'] = "Este e-mail já está cadastrado.";
    header("Location: ../view/cadastro.php");
    exit();
}

        // Criptografa a senha
        $senha_hash = password_hash($senha_original, PASSWORD_DEFAULT);

        // Insere o usuário no banco
        $sql = "INSERT INTO usuarios (nome, email, senha, data_nascimento, email_secundario) VALUES (?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$nome, $email, $senha_hash, $data_nascimento, $email_secundario]);

        if ($stmt->rowCount() > 0) {
            $_SESSION['user'] = [
                'id' => $pdo->lastInsertId(),
                'nome' => $nome,
                'email' => $email,
                'data_nascimento' => $data_nascimento
            ];
            header("Location: ../view/tradutor.php");
            exit();
        } else {
            throw new Exception("Erro ao inserir usuário no banco de dados.");
        }

    } catch (PDOException $e) {
        echo "Erro no banco de dados: " . $e->getMessage();
    } catch (Exception $e) {
        echo "Erro: " . $e->getMessage();
    }
}
?>
