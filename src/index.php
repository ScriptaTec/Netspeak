<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script src="js/animacaoLetra.js" defer></script>
    <link rel="stylesheet" href="fonts/fonts.css">

    <title>Index</title>
</head>

<body class="jersey">

    <header class="flex justify-between p-3 relative z-50">
        <div class="w-20">
            <a href="tradutor.php"><img src="../imgs/logo.png" alt="Logo do site"></a>
        </div>

        <a href="view/login.php">
            <div class="flex border-none rounded-2xl px-3 py-1 group bg-[#8570ab]"
                style="box-shadow: -4px 4px 0px #685884">
                <span class="mr-1 text-xl text-white group-hover:text-[#FFEB70] transition duration-600">Entrar</span>

                <div class="relative w-7 h-7">
                    <img src="imgs/icones/perfilBranco.png" alt="ícone perfil"
                        class="absolute inset-0 w-full h-full opacity-100 group-hover:opacity-0 transition-opacity duration-500 ease-in-out">
                    <img src="imgs/icones/perfilHover.png" alt="ícone perfil hover"
                        class="absolute inset-0 w-full h-full opacity-0 group-hover:opacity-100 transition-opacity duration-500 ease-in-out">
                </div>
            </div>
        </a>
    </header>

    <div>
        <img src="imgs/capa.png" alt="" class="w-8xl -mt-50">
    </div>

    <div class="-mt-26">
        <div class=" text-center">
            <h1 class="text-6xl">Descubra o significado dos <span class="px-3 py-1 rounded-3xl rounded-br-none"
                    style="background-color:#ffeb70">emojis</span></h1>
        </div>

        <div class="text-center mt-1 text-xl">
            <h3>Se cadastrando e tendo acesso a <span style="color:#574d6b">ferramenta de tradução</span> <a
                    href="view/cadastro.php" class="underline">clicando aqui!</a></h3>
        </div>

        <div class="flex justify-center mt-7">
            <div class="w-full max-w-2xl bg-gray-200 px-2 py-2 flex items-center rounded-3xl border border-gray-300">

                <button class="p-2">
                    <img src="imgs/icones/mais.png" alt="icone" class="w-6 h-6" />
                </button>

                <div
                    class="flex items-center bg-white flex-grow mx-2 rounded-2xl border border-gray-300 px-3 py-2 shadow-sm">
                    <img src="imgs/icones/emoji.png" alt="icone" class="w-5 h-5 mr-2" />
                    <div type="text" class="placeholder-gray-500 bg-transparent">
                        <span id="typed-output" class="pl-2 text-xl">
                            <!--Animação da letra e as palavras chaves no arquivo animacaoLetra.js-->
                        </span>
                    </div>
                </div>

                <button class="p-2">
                    <img src="imgs/icones/microfone.png" alt="icone" class="w-6 h-6" />
                </button>
            </div>
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
                    
                    <a href="view/perfil.php" class="hover:text-[color:#f5bd20] transition duration-700">Perfil</a>
                </div>

                <div class="flex flex-col">
                    <h3 class="text-xl" class="hover:text-[color:#f5bd20] transition duration-700">
                        <b>Ferramentas</b>
                    </h3>
                    <a href="view/tradutor.php" class="hover:text-[color:#f5bd20] transition duration-700">Tradutor</a>
                </div>

                <div class="flex flex-col">
                    <h3 class="text-xl"><b>Fale conosco</b></h3>
                    <a href="view/sobre_nos.php" class="hover:text-[color:#f5bd20] transition duration-700">Sobre nós</a>
                    
                    <a href="view/suporte.php" class="hover:text-[color:#f5bd20] transition duration-700">Suporte</a>
                    
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&to=scripta.tech@gmail.com"
                        class="hover:text-[color:#f5bd20] transition duration-700">scripta.tech@gmail.com</a>
                </div>

                <div class="flex flex-col ">
                    <h3 class="text-xl"><b>Redes sociais</b></h3>

                    <div class="flex justify-center mt-2 gap-3">
                        <a href="https://www.instagram.com/netspeak_2025/"><img src="imgs/icones/instagram.png"
                                alt="instagram"></a>

                        <a href="https://github.com/ScriptaTec"><img src="imgs/icones/github.png" alt="gitHub"></a>

                        <a href="https://br.pinterest.com/scriptatech/"><img src="imgs/icones/pinterest.png"
                                alt="pinterest"></a>

                        <a href="https://wa.me/5547988703860?text=Oi!%20vim%20pelo%20site%20de%20vocês%20(:"
                            target="_blank">
                            <img src="imgs/icones/whatsapp.png" alt="WhatsApp">
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