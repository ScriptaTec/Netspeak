<?php
session_start();
require "../controller/controller_perfil.php";

if (!isset($_SESSION['user'])) {
    echo "<script>alert('Usuário não logado.'); location.href = 'cadastro.php';</script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="shortcut icon" href="../imgs/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../fonts/fonts.css">
    <script src="../js/navegacao.js" defer></script>
    <script src="../js/animacao.js" defer></script>
    <script src="../js/pop_ups.js" defer></script>
</head>

<body class="bg-gray-50 jersey">

    <div class="bg-stone-100 py-1">

        <!--Cabeçalho-->
        <header>
            <div class="w-30 mt-2 absolute top-0 left-5 transition duration-500 hover:scale-105">
                <a href="../index.php" class=""><img src="../imgs/logo4.png" alt=""></a>
            </div>

            <div class="absolute top-0 right-0 m-5 gap-2 flex">
                <a href="../index.php"
                    class="mt-1 text-2xl text-black transition duration-500 hover:text-yellow-300 inline-block">Home</a>

                    <a href="excluir_conta.php" class="text-red-600">Excluir conta →</a>

                <!--Ícone de sair da conta-->
                <form method="POST" action="../controller/controller_logout.php" id="logoutForm"
                    class="-mt-7 mr-5 flex justify-center group">
                    <button type="button" class="openModalBtn" data-target="sairConta">
                        <img src="../imgs/exit.png" alt="sair da conta"
                            class="absolute opacity-100 group-hover:opacity-0 transition-opacity duration-500 ease-in-out">
                        <img src="../imgs/exitHover.png" alt="sair da conta"
                            class="absolute opacity-0 group-hover:opacity-100 transition-opacity duration-500 ease-in-out">
                    </button>
                </form>

                <!--Pop-up de sair da conta-->
                <div id="sairConta" class="hidden fixed inset-0 z-50 flex justify-center items-center bg-gray-200/50">
                    <div
                        class="bg-white py-5 px-10 rounded-4xl border border-2 border-gray-800 shadow-xl hover:scale-105 hover:border-black transition duration-900">
                        <h1 class="text-3xl">Você deseja sair</h1>
                        <h2 class="text-3xl text-center -mt-2">da conta?</h2>

                        <div class="flex justify-center gap-5 mt-5">
                            <button type="button" id="logout"
                                class="py-2 px-7 rounded-3xl bg-black text-white border border-2 hover:bg-yellow-200 hover:text-black transition duration-700">
                                Sim
                            </button>
                            <button type="button"
                                class="closeModalBtn
                                py-2 px-7 rounded-3xl bg-black text-white border border-2 hover:bg-yellow-200 hover:text-black transition duration-700">
                                Não
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header>



        <!-- Alerta de mensagem -->
        <?php if (isset($mensagem))
            echo "<script>alert('$mensagem')</script>"; ?>



        <!--Dados do cadastro do usuário-->
        <div class="flex justify-center items-center gap-5 m-10">

            <!--Mudar foto de perfil do usuário-->
            <div class="relative z-10">
                <!--Foto de perfil do usuário-->
                <img src="../img_perfil/perfil1.png" alt="foto de perfil">

                <!--Ícone de mudar foto de perfil do usuário-->
                <button type="button" class="openModalBtn group" data-target="mudarFoto">
                    <img src="../imgs/editarFoto.png" alt="mudar foto de perfil"
                        class="h-12 absolute top-3 right-2 opacity-100 group-hover:opacity-0 transition-opacity duration-900">
                    <img src="../imgs/editarHover.png" alt="mudar foto de perfil"
                        class="h-14 absolute top-2 right-1 opacity-0 group-hover:opacity-100 transition-opacity duration-900">
                </button>
            </div>

            <!--Pop-up de mudar foto de perfil-->
            <div id="mudarFoto" class="hidden z-50 fixed inset-0 flex justify-center items-center bg-gray-200/50">

                <!--Fechar pop-up-->
                <button style="cursor: pointer;" type="button" class="closeModalBtn group">
                    <img src="../imgs/close.png" alt="ícone de sair do mudar foto de perfil"
                        class="absolute top-22 right-90 opacity-100 group-hover:opacity-0 transition duration-900">
                    <img src="../imgs/closeHover.png" alt="ícone de sair do mudar foto de perfil"
                        class="absolute top-22 right-90 opacity-0 group-hover:opacity-100 transition duration-900">
                </button>

                <div
                    class="bg-white py-5 px-10 rounded-4xl border border-2 border-gray-400 shadow-xl hover:border-black hover:border-3 transition duration-900">

                    <h1 class="text-center text-3xl">Edite sua foto de perfil</h1>

                    <!--Opções de foto de perfil-->
                    <div class="flex flex-col mt-5">
                        <!--Fotos de perfil variadas-->
                        <div class="flex gap-4">
                            <img src="../img_perfil/perfil1.png" alt=""
                                class="h-30 hover:scale-110 hover:border-3 border-yellow-300 rounded-full transition duration-800 ease-in-out">
                            <img src="../img_perfil/perfil8.png" alt=""
                                class="h-30 hover:scale-110 hover:border-3 border-yellow-300 rounded-full transition duration-800 ease-in-out">
                            <img src="../img_perfil/perfil2.png" alt=""
                                class="h-30 hover:scale-110 hover:border-3 border-yellow-300 rounded-full transition duration-800 ease-in-out">
                            <img src="../img_perfil/perfil7.png" alt=""
                                class="h-30 hover:scale-110 hover:border-3 border-yellow-300 rounded-full transition duration-800 ease-in-out">
                        </div>

                        <div class="flex gap-4 mt-7">
                            <img src="../img_perfil/perfil3.png" alt=""
                                class="h-30 hover:scale-110 hover:border-3 border-yellow-300 rounded-full transition duration-800 ease-in-out">
                            <img src="../img_perfil/perfil6.png" alt=""
                                class="h-30 hover:scale-110 hover:border-3 border-yellow-300 rounded-full transition duration-800 ease-in-out">
                            <img src="../img_perfil/perfil4.png" alt=""
                                class="h-30 hover:scale-110 hover:border-3 border-yellow-300 rounded-full transition duration-800 ease-in-out">
                            <img src="../img_perfil/perfil5.png" alt=""
                                class="h-30 hover:scale-110 hover:border-3 border-yellow-300 rounded-full transition duration-800 ease-in-out">
                        </div>
                    </div>

                    <div class="flex justify-center">
                        <button id="editar"
                            class=" mt-5 py-1 px-5 rounded-3xl bg-gray-300 text-gray-600 hover:bg-black hover:text-white transition duration-700">
                            Editar
                        </button>
                    </div>
                </div>
            </div>

            <div class="flex-col">
                <h3 class="text-sm -mb-4 ml-3">Email:</h3>
                <input type="email" value="<?= $_SESSION['user']['email'] ?? '' ?>" disabled
                    class="bg-white w-46 p-2 mt-3 border-2 border-black rounded-4xl rounded-tl-2xl rounded-bl-none hover:border-black focus:outline-none transition duration-500 hover:scale-105"
                    style="box-shadow: 2px 2px 0px;">

                <h3 class="text-sm mt-2 -mb-4 ml-3">Nome:</h3>
                <input type="text" value="<?= $_SESSION['user']['nome'] ?? '' ?>" disabled
                    class="bg-white w-40 p-2 mt-3 border-2 border-black rounded-4xl rounded-tl-2xl rounded-bl-none hover:border-black focus:outline-none transition duration-500 hover:scale-105"
                    style="box-shadow: 2px 2px 1px;">

                <h3 class="text-sm mt-2 -mb-4 ml-3">Nascimento:</h3>
                <input type="date" value="<?= $_SESSION['user']['data_nascimento'] ?? '' ?>" disabled
                    class="bg-white w-30 p-2 mt-3 border-2 border-black rounded-4xl rounded-tl-2xl rounded-bl-none hover:border-black focus:outline-none transition duration-500 hover:scale-105"
                    style="box-shadow: 2px 2px 1px;">
            </div>
        </div>
    </div>


    <!-- Seção principal -->
    <main class="mt-2 flex justify-center flex-col items-center">

        <!-- Barra de abas -->
        <div class="flex gap-5">
            <!--Ver os emojis favoritos do usuário no arquivo favoritos.php-->
            <button id="tabFavoritos" class="text-gray-400 hover:text-black transition duration-700">Favoritos</button>

            <!--Editar dados do usuário no arquivo personalizar.php-->
            <button id="tabPersonalizar"
                class="border-b-2 border-amber-300 font-bold transition duration-700">Personalizar</button>

            <!--Redefinir a senha do usuário no arquivo redefinir_senha.php-->
            <button id="tabRedefinirSenha" class="text-gray-400 hover:text-black transition duration-700">Redefinir
                senha</button>
        </div>


        <div id="conteudo" class="mt-10">
            <!--Conteúdo da página selecionada pelo usuário-->
        </div>
    </main>

    <!--Rodapé-->
    <footer class="w-full mt-20 relative">
        <div class="flex justify-center gap-4 mb-1">
            <h6 class="text-sm">&copy; 2025 Scripta. Todos os direitos reservados.</h6>
        </div>

        <div class="absolute right-4 bottom-1">
            <a href="perfil.php">
                <img src="../imgs/suporte.png" alt="">
            </a>
        </div>
    </footer>
</body>
</html>