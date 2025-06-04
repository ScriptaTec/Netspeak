<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script src="js/animacaoLetra.js" defer></script>
    <link rel="stylesheet" href="fonts/fonts.css">
</head>

<body class="jersey">

    <div class="relative">

        <!--Parte roxa-->
        <div class="bg-white w-10 h-10 absolute left-50 top-105"></div>

        <div class="bg-white w-14 h-10 absolute left-30 top-90"></div>

        <div class="bg-white w-15 h-20 absolute right-50 top-105"></div>

        <div class="bg-white w-17 h-13 absolute right-30 top-86"></div>

        <div class="bg-white w-5 h-5 absolute right-50 top-86"></div>

        <!--Parte branca-->
        <div class="bg-[color:#9e8cbe] w-10 h-10 absolute left-35 top-120"></div>

        <div class="bg-[color:#9e8cbe] w-6 h-6 absolute left-50 top-130"></div>

        <div class="bg-[color:#9e8cbe] w-15 h-10 absolute right-50 top-120"></div>

        <div class="bg-[color:#9e8cbe] w-6 h-6 absolute right-35 top-130"></div>
    </div>

    <header class="flex absolute right-5 mt-3">
        <div class="flex border-none rounded-2xl px-3 py-1"
            style="background-color: #8570ab;box-shadow: -4px 4px 0px #685884">
            <span class=" mr-1 text-xl text-white">Entrar</span>

            <a href="view/login.php"><img src="imgs/perfilBranco.png" alt="login"></a>

        </div>
    </header>

    <div class="flex justify-center" style="background-color: #9e8cbe">
        <img src="imgs/capaHome.png" alt="imagem de fundo do index" class="w-2xl -mt-15">
    </div>

    <div class=" text-center mt-5 ">
        <h1 class="text-5xl">Descubra o significado dos <span class="px-3 py-1 rounded-3xl rounded-br-none"
                style="background-color:#ffeb70">emojis</span></h1>
    </div>

    <div class="text-center mt-1 text-xl">
        <h3>Se cadastrando e tendo acesso a <span style="color:#574d6b">ferramenta de tradução</span> <a href="view/cadastro.php" class="underline">clicando aqui!</a></h3>
    </div>

    <div class="flex justify-center mt-5">
        <div class="w-full max-w-2xl bg-gray-200 px-2 py-2 flex items-center rounded-3xl border border-gray-300">

            <button class="p-2">
                <img src="imgs/mais.png" alt="icone" class="w-6 h-6" />
            </button>

            <div
                class="flex items-center bg-white flex-grow mx-2 rounded-2xl border border-gray-300 px-3 py-2 shadow-sm">
                <img src="imgs/emoji.png" alt="icone" class="w-5 h-5 mr-2" />
                <div type="text" class="placeholder-gray-500 bg-transparent">
                    <span id="typed-output" class="pl-2 text-xl">
                        <!--Animação da letra e as palavras chaves no arquivo animacaoLetra.js-->
                    </span>
                </div>
            </div>

            <button class="p-2">
                <img src="imgs/microfone.png" alt="icone" class="w-6 h-6" />
            </button>
        </div>
    </div>

    <!---------Rodapé--------->
    <footer class="bottom-1 mt-15">
        <div class=" bg-gray-200 p-10 pl-15 pr-15 text-[color:#311d56]">

            <div class="flex justify-between">

                <div class="flex flex-col">
                    <h3 class="text-xl"><b>Usuário</b></h3>
                    <a href="view/cadastro.php" class="hover:text-[color:#f5bd20] transition duration-700">Cadastro</a>
                    <a href="view/login.php" class="hover:text-[color:#f5bd20] transition duration-700">Login</a>
                    <a href="controller/controller_perfil.php"
                        class="hover:text-[color:#f5bd20] transition duration-700">Perfil</a>
                </div>

                <div class="flex flex-col">
                    <h3 class="text-xl" class="hover:text-[color:#f5bd20] transition duration-700"><b>Ferramentas</b>
                    </h3>
                    <a href="" class="hover:text-[color:#f5bd20] transition duration-700">Tradutor</a>
                    <a href="" class="hover:text-[color:#f5bd20] transition duration-700">Lista de emojis</a>
                </div>

                <div class="flex flex-col">
                    <h3 class="text-xl"><b>Fale conosco</b></h3>
                    <a href="view/suporte.php" class="hover:text-[color:#f5bd20] transition duration-700">Suporte</a>
                    <a href="view/suporte.php" class="hover:text-[color:#f5bd20] transition duration-700">Perguntas
                        frequentes</a>
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&to=scripta.tech@gmail.com"
                        class="hover:text-[color:#f5bd20] transition duration-700">scripta.tech@gmail.com</a>
                </div>

                <div class="flex flex-col ">
                    <h3 class="text-xl"><b>Redes sociais</b></h3>

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


</body>

</html>