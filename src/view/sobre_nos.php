<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="../fonts/fonts.css">
    <script src="../js/sobre_nos.js" defer></script>

    <title>Sobre nós</title>
</head>

<body class="jersey">

    <header>
        <div class="absolute top-0 right-0 m-5 gap-2 flex">
            <!--Ir para home caso não estiver logado e index caso estiver-->
            <a href="tradutor.php"
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

        <!--Card 1-->
        <div data-target="modal1"
            class="openModalBtn px-9 py-7 text-4xl text-center text-[#ffae33] bg-[#f7ff87] rounded-3xl rounded-bl-none shadow-[-5px_5px_0px_#ffae33] group transition-all duration-600 ease-in-out transform hover:bg-[#b09ad7] hover:text-[#2f4157] hover:rounded-none hover:shadow-[-5px_5px_0px_#75678e]">
            <span class="block">Qual a</span>
            <span class="block">finalidade da</span>
            <span class="block">ferramenta?</span>

            <span class="text-center -mt-6 text-6xl block group-hover:opacity-100">...</span>
        </div>

        <!--Pop-up card 1-->
        <div id="modal1" class="hidden z-50 fixed inset-0 flex justify-center items-center bg-gray-200/50">

            <!--Fechar pop-up-->
            <button style="cursor: pointer;" type="button" class="closeModalBtn group">
                <img src="../imgs/icones/close.png" alt="ícone de sair do mudar foto de perfil"
                    class="absolute top-54 right-90 opacity-100 group-hover:opacity-0 transition duration-900">
                <img src="../imgs/icones/closeHover.png" alt="ícone de sair do mudar foto de perfil"
                    class="absolute top-54 right-90 opacity-0 group-hover:opacity-100 transition duration-900">
            </button>

            <div
                class="bg-white py-5 px-10 rounded-4xl border-2 border-gray-400 shadow-xl hover:border-black hover:border-3 transition duration-900">

                <p class="text-2xl">O Tradutor Emojimoji tem como principal objetivo promover <br> a compreensão mútua
                    da linguagem da internet, facilitando<br> a comunicação entre os diferentes tipos de usuários que
                    <br> frequentam as plataformas digitais.
                </p>

            </div>
        </div>

        <!--Card 2-->
        <div data-target="modal2"
            class="openModalBtn px-7 py-7 text-4xl text-center text-[#ffae33] bg-[#f7ff87] rounded-3xl rounded-bl-none shadow-[-5px_5px_0px_#ffae33] group transition-all duration-600 ease-in-out transform hover:bg-[#b09ad7] hover:text-[#2f4157] hover:rounded-none hover:shadow-[-5px_5px_0px_#75678e]">
            <span class="block">Fundamentação</span>
            <span class="block">teórica da</span>
            <span class="block">pesquisa</span>

            <span class="text-center -mt-6 text-6xl block transition duration-600 group-hover:opacity-100">...</span>
        </div>

        <!--Pop-up card 2-->
        <div id="modal2" class="hidden z-50 fixed inset-0 flex justify-center items-center bg-gray-200/50">

            <!--Fechar pop-up-->
            <button style="cursor: pointer;" type="button" class="closeModalBtn group">
                <img src="../imgs/icones/close.png" alt="ícone de sair do mudar foto de perfil"
                    class="absolute top-42 right-70 opacity-100 group-hover:opacity-0 transition duration-760">
                <img src="../imgs/icones/closeHover.png" alt="ícone de sair do mudar foto de perfil"
                    class="absolute top-42 right-70 opacity-0 group-hover:opacity-100 transition duration-900">
            </button>

            <div
                class="bg-white py-5 px-10 rounded-4xl border-2 border-gray-400 shadow-xl hover:border-black hover:border-3 transition duration-900">

                <p class="text-2xl">Na atualidade, podemos perceber cada vez mais o crescimento e impacto <br>
                    do mundo digital em nossas vidas, principalmente na comunicação e em <br>
                    interações sociais moldadas por meio da tecnologia, como é o exemplo da <br>
                    linguagem netspeak, a língua falada dentro da internet e que grande parte <br>
                    das pessoas se adaptou e atualmente fazem parte do seu dia dia. Contudo <br>
                    muitos ainda possuem dificuldades com o netspeak, o que pode acarretar <br>
                    em erros do uso dessa linguagem e de seus elementos como emojis, gírias <br>
                    e abreviações, gerando até mesmo conflitos na comunicação.
                </p>

            </div>
        </div>

        <!--Card 3-->
        <div data-target="modal3"
            class="openModalBtn px-7 py-7 text-4xl text-center text-[#ffae33] bg-[#f7ff87] rounded-3xl rounded-bl-none shadow-[-5px_5px_0px_#ffae33] group transition-all duration-600 ease-in-out transform hover:bg-[#b09ad7] hover:text-[#2f4157] hover:rounded-none hover:shadow-[-5px_5px_0px_#75678e]">
            <span class="block">De que forma</span>
            <span class="block">os resultados</span>
            <span class="block">são coletados?</span>

            <span class="text-center -mt-6 text-6xl block transition duration-600 group-hover:opacity-100">...</span>
        </div>

        <!--Pop-up card 3-->
        <div id="modal3" class="hidden z-50 fixed inset-0 flex justify-center items-center bg-gray-200/50">

            <!--Fechar pop-up-->
            <button style="cursor: pointer;" type="button" class="closeModalBtn group">
                <img src="../imgs/icones/close.png" alt="ícone de sair do mudar foto de perfil"
                    class="absolute top-46 right-70 opacity-100 group-hover:opacity-0 transition duration-900">
                <img src="../imgs/icones/closeHover.png" alt="ícone de sair do mudar foto de perfil"
                    class="absolute top-46 right-70 opacity-0 group-hover:opacity-100 transition duration-900">
            </button>

            <div
                class="bg-white py-5 px-10 rounded-4xl border-2 border-gray-400 shadow-xl hover:border-black hover:border-3 transition duration-900">

                <p class="text-2xl">Com base no feedback que o usuário fornce ao utilizar a ferramenta. Pois<br>
                    a partir dos dados que o usuário fornece em seu perfil, podemos separa-lo<br>
                    em grupos que se enquadram com as informações que o mesmo forneceu,<br>
                    como faixa etária e nível de dificuldade com a tecnologia. E enfim identificar <br>
                    se a ferramenta foi útil e sanou as dúvidas dos usuários sobre a linguagem <br>
                    da internet.
                </p>

            </div>
        </div>

        <!--Card 4-->
        <div data-target="modal4"
            class="openModalBtn px-15 py-7 text-4xl text-center text-[#ffae33] bg-[#f7ff87] rounded-3xl rounded-bl-none shadow-[-5px_5px_0px_#ffae33] group transition-all duration-600 ease-in-out transform hover:bg-[#b09ad7] hover:text-[#2f4157] hover:rounded-none hover:shadow-[-5px_5px_0px_#75678e]">
            <span class="block">Sobre a</span>
            <span class="block">bolsa de</span>
            <span class="block">pesquisa</span>

            <span class="text-center -mt-6 text-6xl block group-hover:opacity-100">...</span>
        </div>

        <!--Pop-up card 4-->
        <div id="modal4" class="hidden z-50 fixed inset-0 flex justify-center items-center bg-gray-200/50">

            <!--Fechar pop-up-->
            <button style="cursor: pointer;" type="button" class="closeModalBtn group">
                <img src="../imgs/icones/close.png" alt="ícone de sair do mudar foto de perfil"
                    class="absolute top-40 right-86 opacity-100 group-hover:opacity-0 transition duration-880">
                <img src="../imgs/icones/closeHover.png" alt="ícone de sair do mudar foto de perfil"
                    class="absolute top-40 right-86 opacity-0 group-hover:opacity-100 transition duration-900">
            </button>

            <div
                class="bg-white py-5 px-10 rounded-4xl border-2 border-gray-400 shadow-xl hover:border-black hover:border-3 transition duration-900">

                <p class="text-2xl">O desenvovlimento de um interpretador para a linguagem <br>
                    da internet netspeak faz parte do programa de bolsas de <br>
                    pesquisas do CNPq (Conselho Nacional de Desenvolvimento <br>
                    Científico e Tecnológico do Brasil). O trabalho foi iniciado pela <br>
                    professora Marcela e repassado para as estudantes Alice, <br>
                    Ana e Bianca, que posteriormente começaram a desnvolver <br>
                    a ferramenta de tradução e o levantamento bibliográfico da <br>
                    pesquisa.
                </p>

            </div>
        </div>
    </div>

    <div class="mt-15 p-2 text-center text-4xl text-[#543a82] bg-[#b09ad7]">
        <h5 style="text-shadow: -2px 2px 0px #75678e">Desenvolvedoras</h5>
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
                <span class="block -mt-2 text-xl group-hover:text-[#f7ff87] transition duration-800"><a
                        href="http://lattes.cnpq.br/1594091764854511">Bolsista</a></span>
                <span class="block -mt-2 text-sm">17 anos</span>
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
                <span class="block -mt-2 text-xl group-hover:text-[#f7ff87] transition duration-800"><a
                        href="http://lattes.cnpq.br/5400312967022812">Colaboradora</a></span>
                <span class="block -mt-2 text-sm">17 anos</span>

                <span class="block text-2xl underline decoration-2 underline-offset-4 underline-[#ffae33]"><a
                        href="https://github.com/Biahjwff">Desenvolvedora back-end</a></span>

            </div>

            <div
                class="h-max ml-10 mt-7 px-5 py-2 bg-[#ffae33] text-white text-xl rounded-2xl rounded-bl-none transition duration-600 group-hover:bg-[#543a82]">
                <p>
                    Colaboradora da pesquisa e estudante do ensino<br> médio técnico em informática para a a internet do
                    <br>Instituto Federal Catarinense campus Rio do Sul.
                </p>
            </div>
        </div>

        <!--Card Alice-->
        <div
            class="flex gap-10 p-5 px-9 w-max bg-[#f7ff87] text-[#ffae33] rounded-3xl rounded-bl-none shadow-[-7px_7px_0px_#ffae33] group transition-all duration-600 ease-in-out transform hover:bg-[#b09ad7] hover:text-[#2f4157] hover:rounded-none hover:shadow-[-7px_7px_0px_#75678e]">
            <img src="../imgs/fotoAlice.png" alt="Foto da bolsista Ana Beatriz"
                class="h-40 shadow-[-5px_5px_0px_#ffae33] transition duration-600 group-hover:shadow-[-5px_5px_0px_#75678e]">

            <div class="col mt-5">
                <h5 class="block text-4xl">Alice Beatriz</h5>
                <h5 class="block -mt-3 text-4xl">Mohr</h5>
                <span class="block -mt-2 text-xl group-hover:text-[#f7ff87] transition duration-800"><a
                        href="http://lattes.cnpq.br/2735911783600970">Ex-bolsista</a></span>
                <span class="block -mt-2 text-sm">16 anos</span>

                <span class="block text-2xl underline decoration-2 underline-offset-4 underline-[#ffae33]"><a
                        href="https://github.com/Alice130109">Pesquisadora</a></span>

            </div>

            <div
                class="h-max ml-25 mt-7 px-5 py-2 bg-[#ffae33] text-white text-xl rounded-2xl rounded-bl-none transition duration-600 group-hover:bg-[#543a82]">
                <p>
                    Ex-bolsista da pesquisa e estudante do ensino<br> médio técnico em informática para a a internet do
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
                <span class="block -mt-2 text-sm">43 anos</span>
                <span
                    class="block text-2xl underline decoration-2 underline-offset-4 underline-[#ffae33] group-hover:text-[#f7ff87] transition duration-800"><a
                        href="http://lattes.cnpq.br/4217108053843431">Orientadora da pesquisa</a></span>

            </div>

            <div
                class="h-max ml-10 mt-7 px-5 py-2 bg-[#ffae33] text-white text-xl rounded-2xl rounded-bl-none transition duration-600 group-hover:bg-[#543a82]">
                <p>
                    Professora, orientadora da pesquisa e coordenadora <br> do curso técnico em informática para a a
                    internet do<br>
                    Instituto Federal Catarinense campus Rio do Sul.
                </p>
            </div>
        </div>
    </div>

    <!--Rodapé-->
<?php
require('footer.php');
?>
</body>

</html>