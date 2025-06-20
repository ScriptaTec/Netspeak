<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="../js/animacao.js" defer></script>
    <link rel="stylesheet" href="../fonts/fonts.css">

    <title>Login</title>
</head>

<body class="jersey bg-gray-50 flex flex-col min-h-screen">

    <!--esquerda encima-->
    <div class="absolute left-100 top-44 text-2xl ">✨</div>
    <div class="absolute left-110 top-30 text-7xl ">✨</div>

    <!--esquerda embaixo-->
    <div class="absolute left-100 bottom-50 text-8xl ">🥰</div>
    <div class="absolute left-120 bottom-44 text-5xl ">🫶</div>

    <!--direira encima-->
    <div class="absolute right-100 top-30 text-8xl">😊</div>
    <div class="absolute right-90 top-50 text-6xl opacity-90">😝</div>
    <div class="absolute right-130 top-30 text-4xl">😁</div>

    <!--direita embaixo-->
    <div class="absolute right-130 bottom-17 text-xl">✨</div>
    <div class="absolute right-114 bottom-24 text-7xl">✨</div>

    <header>
        <div class="w-30 mt-2 absolute left-5 transition duration-500 hover:scale-105">
            <a href="../index.php"><img src="../imgs/logo4.png" alt=""></a>
        </div>

        <div class="flex mt-5 gap-4 absolute right-5 text-xl">
            <a href="../index.php" class="transition duration-500 hover:scale-105">Home</a>
            <a href="perfil.php"><img src="../imgs/icones/perfil.png" alt="ícone de perfil do usuário" class="-mt-1 transition duration-500 hover:scale-105"></a>
        </div>
    </header>

    <main class="text-center flex items-center justify-center mt-40 text-gray-600">

        <form method="POST" action="../controller/controller_login.php" id="form">

                <div class="text-8xl text-black">
                    <h1>Bem-vindo</h1>
                    <h1 class="-mt-3">de volta!</h1>
                </div>

                <div class="mt-2">
                    <input type="email" name="email" required placeholder="Email..."
                        class="w-68 p-2 mt-3 border-2 border-black rounded-4xl rounded-br-none transition duration-500 hover:scale-105 hover:border-black focus:outline-none"
                        style="box-shadow: 2px 2px 1px;"><br>

<?php
session_start();

// Verifica se existe uma mensagem de erro de login na sessão e exibe
if (isset($_SESSION['erro_login'])) {
echo '<p style="color: red; font-size: 12px; padding: 2px; text-align: right">' . $_SESSION['erro_login'] . '</p>';
// Limpa a variável de erro após exibir a mensagem
unset($_SESSION['erro_login']);
}
?>

                    <input type="password" name="senha" required placeholder="Senha..."
                        class="w-68 p-2 mt-4 border-2 border-black rounded-4xl rounded-br-none transition duration-500 hover:scale-105 hover:border-black focus:outline-none"
                        style="box-shadow: 2px 2px 1px;"><br>

                    <a href="redefinir_senha.php" class="-ml-32 hover:text-black transition duration-500">Esqueceu a senha?</a>
                </div>

                <button type="submit" style="cursor: pointer;"
                    class="relative bg-black rounded-4xl rounded-br-none overflow-hidden p-2 pl-5 pr-5 ml-52 transition duration-500 hover:scale-110">
                    <div id="progressoInterno"
                        class="absolute left-0 top-0 h-full transition-all duration-700"
                        style="width: 0%; background-color: #ffac33"></div>
                    <span class="relative text-white">Logar</span>
                </button >

                <div class="text-right mt-1 mr-10">
                    <a href="cadastro.php" class="hover:text-black transition duration-500">Não possuí conta?</a>
                </div>

        </form>
    </main>

<?php
require('footer.php');
?>

</body>

</html>