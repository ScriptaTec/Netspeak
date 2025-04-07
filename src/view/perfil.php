<?php 
session_start();

if (isset($_SESSION['user'])) {
    echo "Sessão ativa para o usuário: " . $_SESSION['user']['nome'];
} else {
    echo "<script>alert('Usuario não logado.'); location.href = 'cadastro.php';</script>"; //window.history.back(); → Retorna para a página anterior (onde estava o formulário de cadastro).
            exit();
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="shortcut icon" href="../imgs/favicon.ico" type="image/x-icon">

    <title>Perfil</title>
</head>
<body class="bg-gray-100 flex justify-start items-center min-h-screen">
    <div class="border p-10">
    <form action="">
        <img src="" alt=""><br>
        <h1>Nome de usuário</h1>

        <div class="bg-white p-5 border-current">
        <label for="nome">Nome: </label>
        <input type="text" class="border"><br><br>

        <label for="nome">Telefone: </label>
        <input type="text" class="border"><br><br>

        <label for="nome">Nascimento: </label>
        <input type="text" class="border">
        </div>

        <input type="submit" value="Editar">
        
    </form>
    </div>
</bodycla>
</html>