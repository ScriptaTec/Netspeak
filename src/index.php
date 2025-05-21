<?php
session_start();
require "controller/verifica_sessao.php";
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fonts/fonts.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="fonts/fonts.css">
    <link rel="shortcut icon" href="../imgs/favicon.ico" type="image/x-icon">
    <script src="js/pop_ups.js" defer></script>
    <title>Home</title>
</head>

<body class="bg-gray-50 jersey">

    <header class="flex absolute right-5 mt-3 gap-4">
        <!--Ícone de sair da conta-->
        <form method="POST" action="controller/controller_logout.php" id="logoutForm"
            class="-mt-7 mr-5 flex justify-center group">
            <button type="button" class="openModalBtn" data-target="sairConta">
                <img src="imgs/exit.png" alt="sair da conta"
                    class="absolute opacity-100 group-hover:opacity-0 transition-opacity duration-500 ease-in-out">
                <img src="imgs/exitHover.png" alt="sair da conta"
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

        <a href="view/perfil.php"><img src="imgs/perfil.png" alt=""></a>
    </header>

    <main class="flex justify-center items-center min-h-screen">
        <div class="inline-flex flex-col pb-5 pl-2 pr-2 pt-2">
            <h1 class="text-center">O melhor site sobre emojis!</h1>

            <textarea name="" id="" class="bg-gray-400 w-96 "></textarea>
        </div>
    </main>

    <div class="flex justify-center gap-10">
        <div style="box-shadow: -10px 10px 0px #45556C;">
            <img src="imgs/translate.png" alt="">
        </div>
        <div class="flex-col">
            <h2>Tradutor</h2>
            <p>Digite uma frase em internetês e descubra seu significado</p>
        </div>
    </div>

    <div class="flex justify-center gap-10 mt-20">
        <div class="flex-col">
            <h2>Lista de emojis</h2>
            <p>Descubra o significado dos emojis mais famosos</p>
        </div>
        <div style="box-shadow: 10px 10px 0px #45556C;">
            <img src="imgs/translate.png" alt="">
        </div>
    </div>


    <!---------Rodapé--------->
    <footer class="bottom-1 mt-10">
        <div class=" bg-gray-200 p-10 pl-15 pr-15 text-slate-800">

            <div class="flex justify-between">

                <div class="flex flex-col">
                    <h3><b>Usuário</b></h3>
                    <a href="view/cadastro.php">Cadastro</a>
                    <a href="view/login.php">Login</a>
                    <a href="controller/controller_perfil.php">Perfil</a>
                </div>

                <div class="flex flex-col">
                    <h3><b>Ferramentas</b></h3>
                    <a href="">Tradutor</a>
                    <a href="">Lista de emojis</a>
                </div>

                <div class="flex flex-col">
                    <h3><b>Fale conosco</b></h3>
                    <a href="view/suporte.php">Suporte</a>
                    <a href="view/suporte.php">Perguntas frequentes</a>
                    <a
                        href="https://mail.google.com/mail/?view=cm&fs=1&to=scripta.tech@gmail.com">scripta.tech@gmail.com</a>
                </div>

                <div class="flex flex-col ">
                    <h3><b>Redes sociais</b></h3>

                    <div class="flex justify-center mt-2 gap-3">
                        <a href="https://www.instagram.com/netspeak_2025/"><img src="imgs/instagram.png"
                                alt="instagram"></a>

                        <a href="https://github.com/ScriptaTec"><img src="imgs/github.png" alt="gitHub"></a>

                        <a href="https://br.pinterest.com/scriptatech/"><img src="imgs/pinterest.png"
                                alt="pinterest"></a>

                        <a href="https://wa.me/5547988703860?text=Oi!%20vim%20pelo%20site%20de%20vocês%20(:"
                            target="_blank">
                            <img src="imgs/whatsapp.png" alt="WhatsApp">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>

        </div>
        </div>
    </footer>

</html>