<?php
session_start();
if (!isset($_SESSION['user']['email'])) {
    echo "<script>alert('Você precisa estar logado.'); location.href='cadastro.php';</script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Excluir Conta</title>
</head>
<body>
    <h2>Tem certeza que deseja excluir sua conta?</h2>

    <form action="../controller/controller_excluir.php" method="POST">
        <button type="submit">Excluir conta</button>
    </form>
</body>
</html>
