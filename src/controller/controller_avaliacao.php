<?php
require_once "../controller/config.php";
session_start();

// Garante que o usuário está logado
$id_usuario = $_SESSION['user']['id'] ?? null;
$email = $_SESSION['user']['email'] ?? null; 
if (!$id_usuario) {
    echo "<script> location.href = '../view/cadastro.php';</script>";
    exit();
}

// Verifica se o formulário foi enviado com o método POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Obter os valores do formulário. Usamos o operador de coalescência nula (?? '') para evitar erros caso algum campo não seja enviado.
        $p1 = $_POST['p1'] ?? null;
        $p2 = $_POST['p2'] ?? null;
        $p3 = $_POST['p3'] ?? null;
        $p4 = $_POST['p4'] ?? null;
        $p5 = $_POST['p5'] ?? null;
        $p6 = $_POST['p6'] ?? null;
        $p7 = $_POST['p7'] ?? null;
        $p8 = $_POST['p8'] ?? null;
        
        $p9 = $_POST['p9'] ?? null;

        // var_dump($_POST);

        // Monta a query de INSERT usando prepared statements
        $sql = "INSERT INTO avaliacao (p1, p2, p3, p4, p5, p6, p7, p8, p9, email) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);

        // Executa a query com os valores do formulário
        $stmt->execute([
            $p1,
            $p2,
            $p3,
            $p4,
            $p5,
            $p6,
            $p7,
            $p8,
            $p9,
            $email
        ]);

        // Redireciona o usuário para uma página de sucesso após a inserção
        header("Location: ../view/tradutor.php");
        exit();

    } catch (PDOException $e) {
        // Em caso de erro, exibe uma mensagem de erro e interrompe a execução
        echo "Erro ao salvar a avaliação: " . $e->getMessage();
        exit();
    }
} else {
    // Se a página for acessada diretamente sem o envio do formulário
    header("Location: ../view/avaliacao.php");
    exit();
}