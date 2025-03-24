<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fonts/fonts.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="shortcut icon" href="../imgs/favicon.ico" type="image/x-icon">

    <title>Home</title>
</head>

<body class="julius text-center">

    <!---------Cabeçalho--------->
    <div class=" m-7 text-slate-700">
        <form method="POST">
            <button> <a href="./view/login.php">Login</a></button>


            <button> <a href="./view/cadastro.php">Cadastro</a></button>
        </form>
    </div>

    <!---------Nome do site--------->
    <div class="flex justify-center mt-20 mb-7 gap-10">
        <h1 class="bg-slate-600 text-white text-9xl pl-52 pr-5" style="text-shadow: 12px 1px 1px #1E293B;">Net</h1>
        <h1 class="text-slate-800 text-9xl">Speak</h1>
    </div>

    <!---------Slogan--------->
    <div class="inline-flex bg-gray-200 py-2 px-10 rounded-md gap-4">
        <img src="imgs/mais2.png" alt="" class="h-5 mt-3">

        <div class="bg-white font-sans py-2 px-10 rounded-3xl">
            <h2>O melhor site sobre emojis! 😉😎😂😱😻🤙 🍪🚀😌😳😋🙄</h2>
        </div>

        <img src="imgs/enviar.png" alt="" class="h-5 mt-3">
    </div>

    <div class="flex justify-center gap-10 mt-20">

    <div class="bg-gray-100 p-6 rounded-2xl shadow-lg hover:scale-105 transition-transform duration-300 text-center w-64">
        <img src="imgs/translate.png" alt="Ícone de tradução" class="w-16 mx-auto mb-4">
        <h1 class="text-xl font-semibold text-gray-800">Tradutor</h1>
        <p class="text-gray-600">Traduzir frases em internetês</p>
    </div>

    <div class="bg-gray-100 p-6 rounded-2xl shadow-lg hover:scale-105 transition-transform duration-300 text-center w-64">
        <img src="imgs/pesquisa.png" alt="Ícone de emoji" class="w-16 mx-auto mb-4">
        <h1 class="text-xl font-semibold text-gray-800">Lista de Emojis</h1>
        <p class="text-gray-600">Descubra o significado dos emojis</p>
    </div>
</div>


    <!---------Rodapé--------->
    <footer class="mt-20 mb-1">

        <div class="flex justify-center gap-4">
            <a href="https://github.com/ScriptaTec"><img src="imgs/github.png" alt="gitHub"></a>
            <a href="https://www.instagram.com/scripta.tech/"><img src="imgs/instagram.png" alt="instagram"></a>
        

        <div class="absolute right-4">
            <a href=""><img src="imgs/suporte.png" alt=""></a>
        </div>
        </div>
    </footer>
</body>

</html>