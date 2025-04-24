<?php
session_start();
require '../controller/config.php';

if (!isset($_SESSION['user'])) {
    header("Location: ../view/login.php");
    exit();
}

$id_usuario = $_SESSION['user']['id'];

// Atualização
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['atualizar'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $nascimento = $_POST['data_nascimento'];
    $nome_completo = $_POST['nome_completo'];
    $email_secundario = $_POST['email_secundario'];
    $genero = $_POST['genero'];
    $grau_formacao = $_POST['grau_formacao'];
    $dificuldade = $_POST['dificuldade_tecnologia'];

    $sql = "UPDATE usuarios SET 
                nome = ?, email = ?, data_nascimento = ?, 
                nome_completo = ?, email_secundario = ?, genero = ?, 
                grau_formacao = ?, dificuldade_tecnologia = ?
            WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    if ($stmt->execute([
        $nome, $email, $nascimento, $nome_completo, $email_secundario,
        $genero, $grau_formacao, $dificuldade, $id_usuario
    ])) {
        // Atualiza a sessão
        $_SESSION['user'] = array_merge($_SESSION['user'], [
            'nome' => $nome,
            'email' => $email,
            'data_nascimento' => $nascimento,
            'nome_completo' => $nome_completo,
            'email_secundario' => $email_secundario,
            'genero' => $genero,
            'grau_formacao' => $grau_formacao,
            'dificuldade_tecnologia' => $dificuldade
        ]);
        $mensagem = "Dados atualizados com sucesso!";
    } else {
        $mensagem = "Erro ao atualizar os dados.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Meu Perfil</title>
</head>
<body>
    <h2>Perfil do Usuário</h2>

    <?php if (isset($mensagem)) echo "<p><strong>$mensagem</strong></p>"; ?>

    <form method="POST">
        <label>Nome:</label><br>
        <input type="text" name="nome" value="<?php echo $_SESSION['user']['nome']; ?>" required><br><br>

        <label>Nome completo:</label><br>
        <input type="text" name="nome_completo" value="<?php echo $_SESSION['user']['nome_completo'] ?? ''; ?>" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="<?php echo $_SESSION['user']['email']; ?>" required><br><br>

        <label>Email secundário:</label><br>
        <input type="email" name="email_secundario" value="<?php echo $_SESSION['user']['email_secundario'] ?? ''; ?>"><br><br>

        <label>Data de Nascimento:</label><br>
        <input type="date" name="data_nascimento" value="<?php echo $_SESSION['user']['data_nascimento']; ?>" required><br><br>

        <label>Gênero:</label><br>
        <select name="genero" required>
            <option value="Masculino" <?php if (($_SESSION['user']['genero'] ?? '') == 'Masculino') echo 'selected'; ?>>Masculino</option>
            <option value="Feminino" <?php if (($_SESSION['user']['genero'] ?? '') == 'Feminino') echo 'selected'; ?>>Feminino</option>
            <option value="Outro" <?php if (($_SESSION['user']['genero'] ?? '') == 'Outro') echo 'selected'; ?>>Outro</option>
        </select><br><br>

        <label>Grau de formação:</label><br>
        <select name="grau_formacao" required>
            <option value="Ensino Médio Incompleto" <?php if (($_SESSION['user']['grau_formacao'] ?? '') == 'Ensino Médio Incompleto') echo 'selected'; ?>>Ensino Médio Incompleto</option>
            <option value="Ensino Médio Completo" <?php if (($_SESSION['user']['grau_formacao'] ?? '') == 'Ensino Médio Completo') echo 'selected'; ?>>Ensino Médio Completo</option>
            <option value="Graduação" <?php if (($_SESSION['user']['grau_formacao'] ?? '') == 'Graduação') echo 'selected'; ?>>Graduação</option>
        </select><br><br>

        <label>Grau de dificuldade com tecnologia:</label><br>
        <select name="dificuldade_tecnologia" required>
            <option value="Baixo" <?php if (($_SESSION['user']['dificuldade_tecnologia'] ?? '') == 'Baixo') echo 'selected'; ?>>Baixo</option>
            <option value="Médio" <?php if (($_SESSION['user']['dificuldade_tecnologia'] ?? '') == 'Médio') echo 'selected'; ?>>Médio</option>
            <option value="Alto" <?php if (($_SESSION['user']['dificuldade_tecnologia'] ?? '') == 'Alto') echo 'selected'; ?>>Alto</option>
        </select><br><br>

        <button type="submit" name="atualizar">Atualizar</button>
    </form>

    <br><a href="logout.php">Sair</a>
</body>
</html>
