<!DOCTYPE html>
<html lang="pt">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="animacao.js" defer></script>
    <link rel="stylesheet" href="../fonts/fonts.css">

    <link rel="icon" href="../imgs/iconeLogo.ico" type="image/x-icon">

    <title>Cadastro</title>
</head>

<body class="jersey bg-gray-50 flex flex-col min-h-screen">

    <!--esquerda encima-->
    <div class="absolute left-114 top-30 text-2xl ">✨</div>
    <div class="absolute left-90 top-40 text-8xl ">✨</div>
    <div class="absolute left-84 top-70 text-4xl ">✨</div>


    <!--esquerda embaixo-->
    <div class="absolute bottom-50 left-72 text-8xl">😆</div>
    <div class="absolute left-70 bottom-36 text-5xl opacity-90">😂</div>
    <div class="absolute left-90 bottom-40 text-5xl">✨</div>
    <div class="absolute left-100 bottom-36 text-xl">✨</div>


    <!--direita encima-->
    <div class="absolute right-100 top-30 text-5xl">🙃</div>
    <div class="absolute right-70 top-40 text-9xl">😚</div>
    <div class="absolute right-64 top-60 text-5xl ">✌️</div>


    <!--direita no meio-->
    <div class="absolute bottom-50 right-86 text-2xl">✨</div>
    <div class="absolute bottom-30 right-86 text-7xl">✨</div>


    <header>
        <div class="w-30 mt-2 absolute left-5 transition duration-500 hover:scale-105">
            <a href="../index.php"><img src="../imgs/logo4.png" alt=""></a>
        </div>

        <div class="flex mt-5 gap-4 absolute right-5 text-xl">
            <a href="../index.php" class="transition duration-500 hover:scale-105">Home</a>
            <a href="perfil.php"><img src="../imgs/perfil.png" alt="ícone de perfil do usuário"
                    class="-mt-1 transition duration-500 hover:scale-105"></a>
        </div>
    </header>

    <main class=" flex items-center justify-center mt-20 text-gray-600">

        <form method="POST" action="../controller/controller_cadastro.php" id="cadastroForm">

            <div class="text-7xl text-center text-black flex-col mt-7 mr-10">
                <h1>Seja</h1>
                <h1>bem-vindo!</h1>
            </div>

            <div class="flex gap-5">
                <div class="flex-col">
                    <input type="email" name="email" required placeholder="Email..."
                        class="w-68 p-2 mt-3 border-2 border-black rounded-4xl rounded-bl-none hover:border-black focus:outline-none transition duration-500 hover:scale-105"
                        style="box-shadow: 2px 2px 1px;"><br>

<?php
session_start();

// Verifica se a mensagem de erro existe na sessão e exibe
if (isset($_SESSION['erro_email'])) {
echo '<p style="color: red; font-size: 12px; padding: 2px">' . $_SESSION['erro_email'] . '</p>';

// Limpa a variável de sessão após exibir a mensagem
unset($_SESSION['erro_email']);
}
?>

                    <input type="password" name="senha" required placeholder="Senha..."
                        class="w-68 p-2 mt-3 border-2 border-black rounded-4xl rounded-bl-none hover:border-black focus:outline-none transition duration-500 hover:scale-105"
                        style="box-shadow: 2px 2px 1px;"><br>

                    <input type="date" name="data_nascimento" required
                        class="w-48 p-2 mt-3 border-2 border-black rounded-4xl rounded-bl-none hover:border-black focus:outline-none transition duration-500 hover:scale-105"
                        style="box-shadow: 2px 2px 1px;"><br>
                </div>


                <div class="flex-col">
                    <input type="text" name="nome" required placeholder="Nome..."
                        class="w-68 p-2 mt-3 border-2 border-black rounded-4xl rounded-br-none hover:border-black focus:outline-none transition duration-500 hover:scale-105"
                        style="box-shadow: 2px 2px 0px;"><br>

                    <input type="password" name="senha" required placeholder="Repetir senha..."
                        class="w-68 p-2 mt-3 border-2 border-black rounded-4xl rounded-br-none hover:border-black focus:outline-none transition duration-500 hover:scale-105"
                        style="box-shadow: 2px 2px 1px;"><br>
                </div>
            </div>


            <div class="mt-10 absolute right-100 bottom-54">
                <button type="submit"
                    class="relative rounded-4xl rounded-br-none overflow-hidden mt-2 p-2 bg-black transition duration-500 hover:scale-110">
                    <div id="progressoInterno" class="absolute h-full transition-all duration-400"
                        style="width: 0%; background-color: #ffac33"></div>
                    <span class="relative text-white">Cadastrar-se</span>
                </button>

                <div class="text-xs text-right mt-1">
                    <a href="login.php">Já possuí uma conta?</a>
                </div>
            </div>
        </form>
    </main>

    <footer class="fixed bottom-1 w-full">
        <div class="flex justify-center gap-4">
            <h6 class=" text-sm">&copy; 2025 Scripta. Todos os direitos reservados.</h6>
        </div>

        <div class="absolute right-4 bottom-0">
            <a href="perfil.php"><img src="../imgs/suporte.png" alt=""></a>
        </div>
    </footer>
</body>

</html>