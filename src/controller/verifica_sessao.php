<?php 
session_start();

if (isset($_SESSION['user'])) {
} else {
    echo "<script>alert('Usuario não logado.'); location.href = './cadastro.php';</script>"; //window.history.back(); → Retorna para a página anterior (onde estava o formulário de cadastro).
            exit();
}
?>