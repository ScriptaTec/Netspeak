<?php
require '../controller/config.php';

// Inicia a sessão no início do arquivo
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Captura os dados do formulário de login
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Verifica se o email existe no banco de dados
        $sql = "SELECT id, nome, email, senha, data_nascimento FROM usuarios WHERE email = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$email]);

        // Verifica se encontrou o usuário
        if ($stmt->rowCount() > 0) {
            // Pega os dados do usuário
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

            // Verifica se a senha informada é correta
            if (password_verify($senha, $usuario['senha'])) {
                // A senha está correta, armazena os dados do usuário na sessão
                $_SESSION['user'] = [
                    'id' => $usuario['id'],
                    'nome' => $usuario['nome'],
                    'email' => $usuario['email'],
                    'data_nascimento' => $usuario['data_nascimento']
                ];

                // Redireciona o usuário para a página inicial ou área restrita
                header("Location: ../index.php");
                exit();
            } else {
                // Se a senha estiver incorreta
                $_SESSION['erro_login'] = "Senha incorreta!";
                header("Location: ../view/login.php"); // Redireciona para a página de login
                exit();
            }
        } else {
            // Se o email não for encontrado no banco de dados
            $_SESSION['erro_login'] = "Email não encontrado!";
            header("Location: ../view/login.php"); // Redireciona para a página de login
            exit();
        }
    } catch (PDOException $e) {
        echo "Erro no banco de dados: " . $e->getMessage();
    } catch (Exception $e) {
        echo "Erro: " . $e->getMessage();
    }
}
?>
