<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST" action="../controller/controller_cadastro.php">
    Nome Completo: <input type="text" name="nome" required><br>
    Email: <input type="email" name="email" required><br>
    Senha: <input type="password" name="senha" required><br>
    Data de Nascimento: <input type="date" name="data_nascimento" required><br>
    <button type="submit">Cadastrar</button>
</form>

</body>
</html>
