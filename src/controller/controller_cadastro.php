<?php
 session_start();
require '../controller/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {

        // Captura os dados do formulário
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
        $data_nascimento = $_POST['data_nascimento'];

        // Verifica se o email já está cadastrado
        $sql = "SELECT id FROM usuarios WHERE email = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$email]);
        
        if ($stmt->rowCount() > 0) {
            $_SESSION['erro_email'] = "Este email já está cadastrado.";
            header("Location: ../view/cadastro.php");  // Redirecionamento para a página de cadastro
            exit();
        }        
        
        // Prepara e executa a query de inserção
        $sql = "INSERT INTO usuarios (nome, email, senha, data_nascimento) VALUES (?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$nome, $email, $senha, $data_nascimento]);

        // Verifica se a inserção foi bem-sucedida
        if ($stmt->rowCount() > 0) {
            // Pega o ID do usuário recém-cadastrado
            $user_id = $pdo->lastInsertId();

            // Armazena os dados do usuário na sessão
            $_SESSION['user'] = [
                'id' => $user_id,
                'nome' => $nome,
                'email' => $email,
                'data_nascimento' => $data_nascimento
            ];

            // Redireciona para a página inicial
            header("Location: ../index.php");
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
