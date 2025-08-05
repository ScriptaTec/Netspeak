<?php
require '../controller/config.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Buscar todos os campos necessários de uma vez
        $sql = "SELECT id, nome, email, senha, data_nascimento, nome_completo, email_secundario, genero, grau_formacao, dificuldade FROM usuarios WHERE email = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$email]);

        if ($stmt->rowCount() > 0) {
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

            if (password_verify($senha, $usuario['senha'])) {
                // Armazena todos os dados necessários na sessão
                $_SESSION['user'] = [
                    'id' => $usuario['id'],
                    'nome' => $usuario['nome'],
                    'email' => $usuario['email'],
                    'data_nascimento' => $usuario['data_nascimento'],
                    'nome_completo' => $usuario['nome_completo'],
                    'email_secundario' => $usuario['email_secundario'],
                    'genero' => $usuario['genero'],
                    'grau_formacao' => $usuario['grau_formacao'],
                    'dificuldade' => $usuario['dificuldade']
                ];

                header("Location: ../view/tradutor.php");
                exit();
            } else {
                $_SESSION['erro_senha'] = "Senha/e-mail incorretos";
                header("Location: ../view/login.php");
                exit();
            }
        } else {
            $_SESSION['erro_email'] = "Senha/e-mail incorretos";
            header("Location: ../view/login.php");
            exit();
        }
    } catch (PDOException $e) {
        echo "Erro no banco de dados:" . $e->getMessage();
    } catch (Exception $e) {
        echo "Erro: " . $e->getMessage();
    }
}
?>
