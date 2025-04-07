<?php 
session_start();

if (isset($_SESSION['user'])) {
    echo "Sessão ativa para o usuário: " . $_SESSION['user']['nome'];
} else {
    echo "<script>alert('Usuario não logado.'); location.href = 'view/cadastro.php';</script>"; //window.history.back(); → Retorna para a página anterior (onde estava o formulário de cadastro).
            exit();
}
?>