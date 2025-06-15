<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="../fonts/fonts.css">

    <link rel="icon" href="../imgs/iconeLogo.ico" type="image/x-icon">

    <title>Sobre nós</title>
</head>

<body class="jersey">

    <header>
        <div class="absolute top-0 right-0 m-5 gap-2 flex">
            <!--Ir para home caso não estiver logado e index caso estiver-->
            <a href="../home.php"
                class="text-2xl text-black transition duration-500 hover:text-yellow-300 inline-block">Home</a>

            <!--Ícone de entrar na conta-->
            <a href="perfil.php"><img src="../imgs/icones/perfil.png" alt="Ícone de perfil"></a>
        </div>
    </header>

    <div class="flex justify-center items-center gap-3 mt-15 p-3 bg-[#b09ad7]">
        <h1 class="text-9xl" style="text-shadow: -5px 5px 0px #75678e">Emojimoji</h1>

        <div class="h-25 w-1 bg-[#75678e]"></div>

        <div class="col text-2xl mt-3">
            <h2 style="text-shadow:-2px 2px 0px #75678e">Tradutor da linguagem</h2>
            <h3 class="-mt-3" style="text-shadow:-2px 2px 0px #75678e">da internet Netspeak</h3>
        </div>
    </div>

    <div class="flex justify-center mt-10 gap-12">
        <div
            class="px-9 py-7 text-4xl text-center text-[#ffae33] bg-[#f7ff87] rounded-3xl rounded-bl-none shadow-[-5px_5px_0px_#ffae33] group transition-all duration-600 ease-in-out transform hover:bg-[#b09ad7] hover:text-[#2f4157] hover:rounded-none hover:shadow-[-5px_5px_0px_#75678e]">
            <span class="block">Qual a</span>
            <span class="block">finalidade da</span>
            <span class="block">ferramenta?</span>

            <span class="text-center -mt-6 text-6xl block opacity-0 group-hover:opacity-100">...</span>
        </div>

        <div
            class="px-7 py-7 text-4xl text-center text-[#ffae33] bg-[#f7ff87] rounded-3xl rounded-bl-none shadow-[-5px_5px_0px_#ffae33] group transition-all duration-600 ease-in-out transform hover:bg-[#b09ad7] hover:text-[#2f4157] hover:rounded-none hover:shadow-[-5px_5px_0px_#75678e]">
            <span class="block">Fundamentação</span>
            <span class="block">teórica da</span>
            <span class="block">pesquisa</span>

            <span
                class="text-center -mt-6 text-6xl block opacity-0 transition duration-600 group-hover:opacity-100">...</span>
        </div>

        <div
            class="px-7 py-7 text-4xl text-center text-[#ffae33] bg-[#f7ff87] rounded-3xl rounded-bl-none shadow-[-5px_5px_0px_#ffae33] group transition-all duration-600 ease-in-out transform hover:bg-[#b09ad7] hover:text-[#2f4157] hover:rounded-none hover:shadow-[-5px_5px_0px_#75678e]">
            <span class="block">De que forma</span>
            <span class="block">os resultados</span>
            <span class="block">são coletados?</span>

            <span
                class="text-center -mt-6 text-6xl block opacity-0 transition duration-600 group-hover:opacity-100">...</span>
        </div>
    </div>

    <div class="mt-15 p-2 text-center text-4xl text-[#543a82] bg-[#b09ad7]">
        <h5>Desenvolvedoras</h5>
    </div>

    <div class="h-2 mt-3 bg-[#b09ad7]"></div>

    <div class="h-2 mt-3 bg-[#75678e]"></div>
    </div>

    <div class="flex flex-col items-center gap-10 mt-15">
        <!--Card Ana-->
        <div
            class="flex gap-10 p-5 px-9 w-max bg-[#f7ff87] text-[#ffae33] rounded-3xl rounded-bl-none shadow-[-7px_7px_0px_#ffae33] group transition-all duration-600 ease-in-out transform hover:bg-[#b09ad7] hover:text-[#2f4157] hover:rounded-none hover:shadow-[-7px_7px_0px_#75678e]">
            <img src="../imgs/fotoAna.png" alt="Foto da bolsista Ana Beatriz"
                class="h-40 shadow-[-5px_5px_0px_#ffae33] transition duration-600 group-hover:shadow-[-5px_5px_0px_#75678e]">

            <div class="col mt-5">
                <h5 class="block text-4xl">Ana Beatriz</h5>
                <h5 class="block -mt-3 text-4xl">Kraemer Ferreira</h5>
                <span class="block -mt-2 text-xl">17 anos</span>
                <span class="block text-2xl underline decoration-2 underline-offset-4 underline-[#ffae33]"><a
                        href="https://github.com/Anaaf7">Desenvolvedora front-end</a></span>

            </div>

            <div
                class="h-max ml-10 mt-7 px-5 py-2 bg-[#ffae33] text-white text-xl rounded-2xl rounded-bl-none transition duration-600 group-hover:bg-[#543a82]">
                <p>
                    Bolsista da pesquisa e estudante do ensino médio <br>técnico em informática para a a internet do
                    <br>Instituto Federal Catarinense campus Rio do Sul.
                </p>
            </div>
        </div>

        <!--Card Bianca-->
        <div
            class="flex gap-10 p-5 px-9 w-max bg-[#f7ff87] text-[#ffae33] rounded-3xl rounded-bl-none shadow-[-7px_7px_0px_#ffae33] group transition-all duration-600 ease-in-out transform hover:bg-[#b09ad7] hover:text-[#2f4157] hover:rounded-none hover:shadow-[-7px_7px_0px_#75678e]">
            <img src="../imgs/fotoBianca.png" alt="Foto da bolsista Ana Beatriz"
                class="h-40 shadow-[-5px_5px_0px_#ffae33] transition duration-600 group-hover:shadow-[-5px_5px_0px_#75678e]">

            <div class="col mt-5">
                <h5 class="block text-4xl">Bianca Jussara</h5>
                <h5 class="block -mt-3 text-4xl">Wolff</h5>
                <span class="block -mt-2 text-xl">17 anos</span>
                <span class="block text-2xl underline decoration-2 underline-offset-4 underline-[#ffae33]"><a
                        href="https://github.com/Biahjwff">Desenvolvedora back-end</a></span>

            </div>

            <div
                class="h-max ml-10 mt-7 px-5 py-2 bg-[#ffae33] text-white text-xl rounded-2xl rounded-bl-none transition duration-600 group-hover:bg-[#543a82]">
                <p>
                    Bolsista da pesquisa e estudante do ensino médio <br>técnico em informática para a a internet do
                    <br>Instituto Federal Catarinense campus Rio do Sul.
                </p>
            </div>
        </div>

        <!--Card Marcela-->
        <div
            class="flex gap-10 p-5 px-9 w-max bg-[#f7ff87] text-[#ffae33] rounded-3xl rounded-bl-none shadow-[-7px_7px_0px_#ffae33] group transition-all duration-600 ease-in-out transform hover:bg-[#b09ad7] hover:text-[#2f4157] hover:rounded-none hover:shadow-[-7px_7px_0px_#75678e]">
            <img src="../imgs/fotoMarcela.png" alt="Foto da bolsista Ana Beatriz"
                class="h-40 shadow-[-5px_5px_0px_#ffae33] transition duration-600 group-hover:shadow-[-5px_5px_0px_#75678e]">

            <div class="col mt-5">
                <h5 class="block text-4xl">Marcela</h5>
                <h5 class="block -mt-3 text-4xl">Leite</h5>
                <span class="block -mt-2 text-xl">30 anos</span>
                <span class="block text-2xl underline decoration-2 underline-offset-4 underline-[#ffae33]"><a
                        href="http://lattes.cnpq.br/4217108053843431">Orientadora da pesquisa</a></span>

            </div>

            <div
                class="h-max ml-10 mt-7 px-5 py-2 bg-[#ffae33] text-white text-xl rounded-2xl rounded-bl-none transition duration-600 group-hover:bg-[#543a82]">
                <p>
                    Professora, coordenadora do curso técnico em <br>informática para a a internet do Instituto Federal
                    <br>Catarinense campus Rio do Sul e orientadora da <br>pesquisa.
                </p>
            </div>
        </div>
    </div>

    <!--Rodapé-->
    <footer class="w-full mt-15 relative">
        <div class="flex justify-center gap-4 mb-1">
            <h6 class="text-sm">&copy; 2025 Scripta. Todos os direitos reservados.</h6>
        </div>

        <div class="absolute right-4 bottom-1">
            <a href="perfil.php">
                <img src="../imgs/icones/suporte.png" alt="">
            </a>
        </div>
    </footer>
</body>

</html>