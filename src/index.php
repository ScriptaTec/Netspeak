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

    <title>Home</title>
</head>

<body class="bg-gray-50 jersey">

    <header class="flex absolute right-5 mt-3 gap-4">
        <a href="view/logout.php" class="text-xl hover:text-yellow-400">Sair</a>

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