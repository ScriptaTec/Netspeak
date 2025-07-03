<!--Cabeçalho-->
<?php
require('header.php');
?>

<div class="bg-[url(../imgs/sobreNos.png)] h-screen bg-cover bg-center">
    <!--Cabeçalho-->
    <header class="flex justify-between p-3">
        <div class="w-20">
            <a href="tradutor.php"><img src="../imgs/logo.png" alt="Logo do site"></a>
        </div>

        <div class="flex gap-2">
            <!--Ir para home caso não estiver logado e index caso estiver-->
            <a href="tradutor.php"
                class="text-2xl text-white transition duration-500 hover:text-amber-300 inline-block">Home</a>

            <!--Ícone de entrar na conta-->
            <a href="perfil.php">
                <div class="relative w-8 h-8 group">
                    <img src="../imgs/icones/perfilBranco.png" alt="ícone perfil"
                        class="absolute inset-0 w-full h-full opacity-100 group-hover:opacity-0 transition-opacity duration-600 ease-in-out">
                    <img src="../imgs/icones/perfilHover.png" alt="ícone perfil hover"
                        class="absolute inset-0 w-full h-full opacity-0 group-hover:opacity-100 transition-opacity duration-600 ease-in-out">
                </div>
            </a>
        </div>
    </header>

    <div class="pt-24 pl-20 text-left text-9xl">
        <h1>Sobre</h1>
        <h2 class="-mt-7">nós</h2>
    </div>

    <!--Opções de navegação-->
    <div class="flex gap-6 pl-20">
        <button id="bolsa"
            class="cursor-pointer py-1 px-2 text-xl text-[#F8FBA6] bg-[#9E8CBE] transition duration-500 hover:bg-[#F8FBA6] hover:text-[#543A82]"
            style="box-shadow: 4px 4px 0px #716587; text-shadow: -1px 1px 0px #716587">
            Sobre a bolsa
        </button>

        <button id="bolsistas"
            class="cursor-pointer py-1 px-2 text-xl text-[#F8FBA6] bg-[#9E8CBE] transition duration-500 hover:bg-[#F8FBA6] hover:text-[#543A82]"
            style="box-shadow: 4px 4px 0px #716587; text-shadow: -1px 1px 0px #716587">
            Desenvolvedoras
        </button>

        <button id="objetivo"
            class="cursor-pointer py-1 px-2 text-xl text-[#F8FBA6] bg-[#9E8CBE] transition duration-500 hover:bg-[#F8FBA6] hover:text-[#543A82]"
            style="box-shadow: 4px 4px 0px #716587; text-shadow: -1px 1px 0px #716587">
            Objetivo
        </button>

        <button id="resultados"
            class="cursor-pointer py-1 px-2 text-xl text-[#F8FBA6] bg-[#9E8CBE] transition duration-500 hover:bg-[#F8FBA6] hover:text-[#543A82]"
            style="box-shadow: 4px 4px 0px #716587; text-shadow: -1px 1px 0px #716587">
            Resultados
        </button>
    </div>

    <!--Card sobre a bolsa-->
    <div id="card_bolsa" class="hidden p-4 my-10 mx-20 rounded-2xl rounded-br-none bg-[#F8FBA6]"
        style="box-shadow: 20px 10px 0px #75678E">
        <h3 class="text-4xl text-[#543A82]" style="text-shadow: 2px 2px 0px #babc7c">O desenvolvimento de um
            interpretador para a linguagem da internet</h3>

        <p class="mx-4 text-justify text-xl text-[#3A2A58]">
            Faz parte do programa de bolsas de pesquisas do CNPq (Conselho Nacional de Desenvolvimento Científico e
            Tecnológico do Brasil). O trabalho foi iniciado pela
            professora Marcela e repassado para as estudantes Alice, Ana e Bianca, que posteriormente começaram a
            desnvolver a ferramenta de tradução e o levantamento bibliográfico da
            pesquisa.
        </p>
    </div>

    <!--Card sobre as bolsistas-->
    <div id="card_bolsistas" class="hidden col gap-20">

        <!--Card Ana-->
        <div class="p-4 my-10 mx-32 rounded-2xl rounded-br-none bg-[#F8FBA6] transform transition-all duration-500 hover:scale-105"
            style="box-shadow: 20px 10px 0px #75678E">

            <div class="flex items-center gap-10">

                <img src="../imgs/fotoAna.png" alt="Foto da bolsista Ana" class="w-56">

                <div class="col text-[#543A82]">
                    <h3 class="text-5xl" style="text-shadow: 2px 2px 0px #babc7c">Ana Beatriz</h3>
                    <h3 class="-mt-3 text-5xl" style="text-shadow: 2px 2px 0px #babc7c">Kraemer Ferreira</h3>

                    <span class="block -mt-2 text-xl text-[#543a82] hover:text-black transition duration-800"><a
                            href="http://lattes.cnpq.br/1594091764854511">Bolsista</a></span>

                    <span class="block -mt-2 text-sm">17 anos</span>

                    <span
                        class="block text-2xl underline decoration-2 underline-offset-4 underline-[#ffae33]  hover:text-black transition duration-800"><a
                            href="https://github.com/Anaaf7">Desenvolvedora front-end</a></span>
                </div>

                <p class="py-2 px-4 ml-10 text-justify text-white text-xl rounded-3xl rounded-br-none bg-[#75678E]">
                    Bolsista da pesquisa e estudante do ensino médio <br> técnico em informática para a a internet
                    do <br> Instituto Federal Catarinense campus Rio do Sul.</p>
            </div>
        </div>

        <!--Card Bianca-->
        <div class="p-4 my-10 mx-32 rounded-2xl rounded-br-none bg-[#F8FBA6] transform transition-all duration-500 hover:scale-105"
            style="box-shadow: 20px 10px 0px #75678E">

            <div class="flex items-center gap-10">

                <img src="../imgs/fotoBianca.png" alt="Foto da bolsista Bianca" class="w-56">

                <div class="col text-[#543A82]">
                    <h3 class="text-5xl" style="text-shadow: 2px 2px 0px #babc7c">Bianca Jussara</h3>
                    <h3 class="-mt-3 text-5xl" style="text-shadow: 2px 2px 0px #babc7c">Wolff</h3>

                    <span class="block -mt-2 text-xl text-[#543a82] hover:text-black transition duration-800"><a
                            href="http://lattes.cnpq.br/5400312967022812">Colaboradora</a></span>

                    <span class="block -mt-2 text-sm">17 anos</span>

                    <span
                        class="block text-2xl underline decoration-2 underline-offset-4 underline-[#ffae33]  hover:text-black transition duration-800"><a
                            href="https://github.com/Biahjwff">Desenvolvedora back-end</a></span>
                </div>

                <p class="py-2 px-4 ml-18 text-justify text-white text-xl rounded-3xl rounded-br-none bg-[#75678E]">
                    Colaboradora da pesquisa e estudante do ensino <br> médio técnico em informática para a a
                    internet
                    do <br> Instituto Federal Catarinense campus Rio do Sul.</p>
            </div>
        </div>

        <!--Card Alice-->
        <div class="p-4 my-10 mx-32 rounded-2xl rounded-br-none bg-[#F8FBA6] transform transition-all duration-500 hover:scale-105"
            style="box-shadow: 20px 10px 0px #75678E">

            <div class="flex items-center gap-10">

                <img src="../imgs/fotoAlice.png" alt="Foto da bolsista Alice" class="w-56">

                <div class="col text-[#543A82]">
                    <h3 class="text-5xl" style="text-shadow: 2px 2px 0px #babc7c">Alice Beatriz</h3>
                    <h3 class="-mt-3 text-5xl" style="text-shadow: 2px 2px 0px #babc7c">Mohr</h3>

                    <span class="block -mt-2 text-xl text-[#543a82] hover:text-black transition duration-800"><a
                            href="http://lattes.cnpq.br/2735911783600970">Ex-bolsista</a></span>

                    <span class="block -mt-2 text-sm">16 anos</span>

                    <span
                        class="block text-2xl underline decoration-2 underline-offset-6 underline-[#ffae33]  hover:text-black transition duration-800"><a
                            href="https://github.com/Alice130109">Pesquisadora</a></span>
                </div>

                <p class="py-2 px-4 ml-30 text-justify text-white text-xl rounded-3xl rounded-br-none bg-[#75678E]">
                    Ex-bolsista da pesquisa e estudante do ensino <br> médio técnico em informática para a a
                    internet
                    do <br> Instituto Federal Catarinense campus Rio do Sul.</p>
            </div>
        </div>

        <!--Card Marcela-->
        <div class="p-4 my-10 mx-32 rounded-2xl rounded-br-none bg-[#F8FBA6] transform transition-all duration-500 hover:scale-105"
            style="box-shadow: 20px 10px 0px #75678E">

            <div class="flex items-center gap-10">

                <img src="../imgs/fotoMarcela.png" alt="Foto da professora Marcela" class="w-56">

                <div class="col text-[#543A82]">
                    <h3 class="text-5xl" style="text-shadow: 2px 2px 0px #babc7c">Marcela</h3>
                    <h3 class="-mt-3 text-5xl" style="text-shadow: 2px 2px 0px #babc7c">Leite</h3>

                    <span class="block -mt-2 text-xl text-[#543a82]">
                        Professora e coordenadora</span>

                    <span class="block -mt-2 text-sm">42 anos</span>

                    <span
                        class="block text-2xl underline decoration-2 underline-offset-6 underline-[#ffae33]  hover:text-black transition duration-800"><a
                            href="http://lattes.cnpq.br/4217108053843431">Orientadora da pesquisa</a></span>
                </div>

                <p class="py-2 px-4 ml-28 text-justify text-white text-xl rounded-3xl rounded-br-none bg-[#75678E]">
                    Professora, orientadora da pesquisa e coordenadora <br> do curso técnico em informática para a a
                    internet do<br>
                    Instituto Federal Catarinense campus Rio do Sul.
            </div>
        </div>

        <!--Card Felipe-->
        <div class="p-4 my-10 mx-32 rounded-2xl rounded-br-none bg-[#F8FBA6] transform transition-all duration-500 hover:scale-105"
            style="box-shadow: 20px 10px 0px #75678E">

            <div class="flex items-center gap-10">

                <img src="../imgs/fotoFelipe.png" alt="Foto do Felipe" class="w-56">

                <div class="col text-[#543A82]">
                    <h3 class="text-5xl" style="text-shadow: 2px 2px 0px #babc7c">Felipe Caue</h3>
                    <h3 class="-mt-3 text-5xl" style="text-shadow: 2px 2px 0px #babc7c">Machado</h3>

                    <span class="block -mt-2 text-xl text-[#543a82] hover:text-black transition duration-800"><a
                            href="http://lattes.cnpq.br/1527079924503132">Voluntário</a></span>

                    <span class="block -mt-2 text-sm">26 anos</span>

                    <span
                        class="block text-2xl underline decoration-2 underline-offset-4 underline-[#ffae33]  hover:text-black transition duration-800"><a
                            href="https://github.com/FelipeTMachado">Infra</a></span>
                </div>

                <p class="py-2 px-4 ml-32 text-justify text-white text-xl rounded-3xl rounded-br-none bg-[#75678E]">
                    Voluntário da pesquisa e estudante do bacharelado em <br> Ciência da Computação do Instituto
                    Federal Catarinense <br> campus Rio do Sul.</p>
            </div>
        </div>
    </div>

    <div id="card_objetivo" class="hidden p-4 my-10 mx-20 rounded-2xl rounded-br-none bg-[#F8FBA6]"
        style="box-shadow: 20px 10px 0px #75678E">
        <h3 class="text-4xl text-[#543A82]" style="text-shadow: 2px 2px 0px #babc7c">Qual o nosso obejtivo?</h3>

        <p class="mx-4 text-justify text-xl text-[#3A2A58]">
            O Tradutor Emojimoji tem como principal objetivo promover a compreensão mútua
            da linguagem da internet, facilitando a comunicação entre os diferentes tipos de usuários que
            frequentam as plataformas digitais.
        </p>
    </div>

    <div id="card_resultados" class="hidden p-4 my-10 mx-20 rounded-2xl rounded-br-none bg-[#F8FBA6]"
        style="box-shadow: 20px 10px 0px #75678E">
        <h3 class="text-4xl text-[#543A82]" style="text-shadow: 2px 2px 0px #babc7c">Como os resultados da pesquisa
            são coletados?</h3>

        <p class="mx-4 text-justify text-xl text-[#3A2A58]">
            Com base no feedback que o usuário fornce ao utilizar a ferramenta. Pois
            a partir dos dados que o usuário fornece em seu perfil, podemos separa-lo
            em grupos que se enquadram com as informações que o mesmo forneceu,
            como faixa etária e nível de dificuldade com a tecnologia. E enfim identificar
            se a ferramenta foi útil e sanou as dúvidas dos usuários sobre a linguagem
            da internet.
        </p>
    </div>

    <!-- Chamar animação de navegação em navegacao.js -->
    <script>
        //Necessário para executar a animação apenas quando a página já tiver caarregado 100%
        document.addEventListener("DOMContentLoaded", function () {
            navegacaoSobreNos();
        });
    </script>
</div>

<!--Rodapé-->
<?php
require('footer.php');
?>