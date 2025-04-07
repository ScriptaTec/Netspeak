<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../imgs/favicon.ico" type="image/x-icon">
    
    <title>Login</title>
</head>
<body>
<form method="POST" action="../controller/controller_login.php">
    Email: <input type="email" name="email" required><br>
    Senha: <input type="password" name="senha" required><br>

    <?php
session_start();

// Verifica se existe uma mensagem de erro de login na sessão e exibe
if (isset($_SESSION['erro_login'])) {
    echo '<p style="color: red;">' . $_SESSION['erro_login'] . '</p>';
    // Limpa a variável de erro após exibir a mensagem
    unset($_SESSION['erro_login']);
}
?>

    <button type="submit">Entrar</button>
</form>

</body>
</html>