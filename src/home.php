<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.core.min.css">
    <link rel="stylesheet" href="fonts/fonts.css">
</head>

<body class="jersey">
    <header class="flex absolute right-5 mt-3 gap-4">
        <div class="flex bg-white border-none rounded-2xl px-2">
            <a href="view/login.php"><img src="imgs/perfil.png" alt="login"></a>
            <span class="mt-1 ml-1">Entrar</span>
        </div>
    </header>

    <div class="flex justify-center" style="background-color: #c7d9e5">
        <img src="imgs/indexBackground.png" alt="imagem de fundo do index" class="w-xl">
    </div>

    <div class="flex justify-center mt-5">
        <h1 class="text-5xl">Descubra o significado dos emojis</h1>
    </div>

    <div class="flex justify-center text-center text-2xl mt-5">
        <div class=" w-full max-w-md mx-auto flex items-center rounded-2xl py-2 px-2" style="background-color: #c7d9e5">
            <img src="imgs/mais.png" class="pr-4" alt="">

            <div class="glide flex bg-white rounded-xl py-1">
                <img src="imgs/emoji.png" class="pl-2" alt="">

                <div class="glide__track" data-glide-el="track">
                    <div class="glide__slides">
                        <button class="glide__slide">Frase 1</button>
                        <button class="glide__slide">Frase 2</button>
                        <button class="glide__slide">Frase 3</button>
                    </div>
                </div>
            </div>

            <img src="imgs/microfone.png" alt="">
        </div>
    </div>

    <!--Aimação do carrossel-->
    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>

    <script>
        new Glide('.glide', {
            type: 'carousel',
            autoplay: 3000,
            animationDuration: 2000
        }).mount();
    </script>


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


</body>

</html>