<!--Cabeçalho-->
<?php
require('header.php');
?>

<main class="lg:bg-[url(../imgs/fundoSobre.png)] bg-no-repeat">
    <!--Cabeçalho-->
    <header class="flex justify-between p-3">
        <div class="w-20">
            <a href="tradutor.php"><img src="../imgs/logo.png" alt="Logo do site"></a>
        </div>

        <button type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation"
            aria-controls="drawer-navigation">
            <div class="relative w-8 h-8 group">
                <img src="../imgs/icones/menuRoxo.png" alt="ícone menu"
                    class="absolute inset-0 w-full h-full opacity-100 group-hover:opacity-0 transition-opacity duration-600 ease-in-out">
                <img src="../imgs/icones/menuAmarelo.png" alt="ícone menu hover"
                    class="absolute inset-0 w-full h-full opacity-0 group-hover:opacity-100 transition-opacity duration-600 ease-in-out">
            </div>
        </button>

        <!--Importar o menu de navegação rápida-->
        <?php include 'menu.php'; ?>
    </header>

    <div class="mt-2 lg:text-transparent">
        <div class="text-center text-7xl">
            <h1>Sobre nós</h1>
        </div>
    </div>

    <!--Opções de navegação-->
    <div class="flex flex-col gap-4 mx-7 mb-10 mt-4 lg:flex-row lg:gap-6 lg:mx-16">
        <button onclick="mostrarCardBolsa()"
            class="cursor-pointer py-1 px-2 text-xl text-[#F8FBA6] bg-[#9E8CBE] transition duration-500 hover:bg-[#F8FBA6] hover:text-[#543A82] lg:mt-44"
            style="box-shadow: 4px 4px 0px #716587; text-shadow: -1px 1px 0px #716587">
            Sobre a bolsa
        </button>

        <button onclick="mostrarCardBolsistas()"
            class="cursor-pointer py-1 px-2 text-xl text-[#F8FBA6] bg-[#9E8CBE] transition duration-500 hover:bg-[#F8FBA6] hover:text-[#543A82] lg:mt-44"
            style="box-shadow: 4px 4px 0px #716587; text-shadow: -1px 1px 0px #716587">
            Desenvolvedoras
        </button>

        <button onclick="mostrarCardObjetivo()"
            class="cursor-pointer py-1 px-2 text-xl text-[#F8FBA6] bg-[#9E8CBE] transition duration-500 hover:bg-[#F8FBA6] hover:text-[#543A82] lg:mt-44"
            style="box-shadow: 4px 4px 0px #716587; text-shadow: -1px 1px 0px #716587">
            Objetivo
        </button>

        <button onclick="mostrarCardResultados()"
            class="cursor-pointer py-1 px-2 text-xl text-[#F8FBA6] bg-[#9E8CBE] transition duration-500 hover:bg-[#F8FBA6] hover:text-[#543A82] lg:mt-44"
            style="box-shadow: 4px 4px 0px #716587; text-shadow: -1px 1px 0px #716587">
            Resultados
        </button>
    </div>

    <!--Card sobre a bolsa-->
    <div id="card-bolsa" class="mb-20 p-4 rounded-2xl rounded-br-none bg-[#F8FBA6] lg:mx-16"
        style="box-shadow: 20px 10px 0px #75678E">
        <h3 class="text-4xl text-[#543A82]" style="text-shadow: 2px 2px 0px #babc7c">O desenvolvimento de um
            interpretador para a linguagem da internet</h3>

        <p class="lg:mx-4 text-justify text-xl text-[#3A2A58]">
            Faz parte do programa de bolsas de pesquisas do CNPq (Conselho Nacional de Desenvolvimento Científico e
            Tecnológico do Brasil). O trabalho foi iniciado pela
            professora Marcela e repassado para as estudantes Alice, Ana e Bianca, que posteriormente começaram a
            desnvolver a ferramenta de tradução e o levantamento bibliográfico da
            pesquisa.
        </p>
    </div>

    <!--Card sobre as bolsistas-->
    <div id="card-bolsistas" class="hidden col mx-5 lg:mx-16">

        <!--Card Ana-->
        <div class="p-4 rounded-2xl rounded-br-none bg-[#F8FBA6] transform transition-all duration-500"
            style="box-shadow: 20px 10px 0px #75678E">

            <div class="flex flex-col items-center text-center gap-2 lg:gap-10 lg:flex-row lg:justify-between">

                <div class="flex flex-col items-center text-center gap-2 lg:flex-row">
                    <img src="../imgs/fotoAna.png" alt="Foto da bolsista Ana" class="w-56">

                    <div class="col text-[#543A82] lg:text-left">
                        <h3 class="text-5xl" style="text-shadow: 2px 2px 0px #babc7c">Ana Beatriz</h3>
                        <h3 class="-mt-3 text-5xl" style="text-shadow: 2px 2px 0px #babc7c">Kraemer Ferreira</h3>

                        <span class="block -mt-2 text-xl text-[#543a82] hover:text-black transition duration-800"><a
                                href="http://lattes.cnpq.br/1594091764854511">Bolsista</a></span>

                        <span class="block -mt-2 text-sm">17 anos</span>

                        <span
                            class="block text-2xl underline decoration-2 underline-offset-4 underline-[#ffae33] hover:text-black transition duration-800"><a
                                href="https://github.com/Anaaf7">Desenvolvedora front-end</a></span>
                    </div>
                </div>

                <p class="py-2 px-4 text-white text-xl rounded-3xl rounded-br-none bg-[#75678E] lg:mr-10">
                    Bolsista da pesquisa e estudante do ensino médio <br> técnico em informática para a a internet
                    do <br> Instituto Federal Catarinense campus Rio do Sul.</p>
            </div>
        </div>

        <!--Card Bianca-->
        <div class="p-4 mt-10 rounded-2xl rounded-br-none bg-[#F8FBA6] transform transition-all duration-500"
            style="box-shadow: 20px 10px 0px #75678E">

            <div class="flex flex-col items-center text-center gap-2 lg:gap-10 lg:flex-row lg:justify-between">

                <div class="flex flex-col items-center text-center gap-2 lg:flex-row">
                    <img src="../imgs/fotoBianca.png" alt="Foto da bolsista Bianca" class="w-56">

                    <div class="col text-[#543A82] lg:text-left">
                        <h3 class="text-5xl" style="text-shadow: 2px 2px 0px #babc7c">Bianca Jussara</h3>
                        <h3 class="-mt-3 text-5xl" style="text-shadow: 2px 2px 0px #babc7c">Wolff</h3>

                        <span class="block -mt-2 text-xl text-[#543a82] hover:text-black transition duration-800"><a
                                href="http://lattes.cnpq.br/5400312967022812">Colaboradora</a></span>

                        <span class="block -mt-2 text-sm">17 anos</span>

                        <span
                            class="block text-2xl underline decoration-2 underline-offset-4 underline-[#ffae33]  hover:text-black transition duration-800"><a
                                href="https://github.com/Biahjwff">Desenvolvedora back-end</a></span>
                    </div>
                </div>

                <p
                    class="py-2 px-4 text-white text-xl rounded-3xl rounded-br-none bg-[#75678E] lg:text-justify lg:mr-10">
                    Colaboradora da pesquisa e estudante do ensino <br> médio técnico em informática para a a
                    internet
                    do <br> Instituto Federal Catarinense campus Rio do Sul.</p>
            </div>
        </div>

        <!--Card Alice-->
        <div class="p-4 mt-10 rounded-2xl rounded-br-none bg-[#F8FBA6] transform transition-all duration-500"
            style="box-shadow: 20px 10px 0px #75678E">

            <div class="flex flex-col items-center text-center gap-2 lg:gap-10 lg:flex-row lg:justify-between">

                <div class="flex flex-col items-center text-center gap-2 lg:flex-row">
                    <img src="../imgs/fotoAlice.png" alt="Foto da bolsista Alice" class="w-56">

                    <div class="col text-[#543A82] lg:text-left">
                        <h3 class="text-5xl" style="text-shadow: 2px 2px 0px #babc7c">Alice Beatriz</h3>
                        <h3 class="-mt-3 text-5xl" style="text-shadow: 2px 2px 0px #babc7c">Mohr</h3>

                        <span class="block -mt-2 text-xl text-[#543a82] hover:text-black transition duration-800"><a
                                href="http://lattes.cnpq.br/2735911783600970">Ex-bolsista</a></span>

                        <span class="block -mt-2 text-sm">16 anos</span>

                        <span
                            class="block text-2xl underline decoration-2 underline-offset-6 underline-[#ffae33]  hover:text-black transition duration-800"><a
                                href="https://github.com/Alice130109">Pesquisadora</a></span>
                    </div>
                </div>

                <p
                    class="py-2 px-4 text-white text-xl rounded-3xl rounded-br-none bg-[#75678E] lg:text-justify lg:mr-10">
                    Ex-bolsista da pesquisa e estudante do ensino <br> médio técnico em informática para a a
                    internet
                    do <br> Instituto Federal Catarinense campus Rio do Sul.</p>
            </div>
        </div>

        <!--Card Marcela-->
        <div class="p-4 mt-10 rounded-2xl rounded-br-none bg-[#F8FBA6] transform transition-all duration-500"
            style="box-shadow: 20px 10px 0px #75678E">

            <div class="flex flex-col items-center text-center gap-2 lg:gap-10 lg:flex-row lg:justify-between">

                <div class="flex flex-col items-center text-center gap-2 lg:flex-row">
                    <img src="../imgs/fotoMarcela.png" alt="Foto da professora Marcela" class="w-56">

                    <div class="col text-[#543A82] lg:text-left">
                        <h3 class="text-5xl" style="text-shadow: 2px 2px 0px #babc7c">Marcela</h3>
                        <h3 class="-mt-3 text-5xl" style="text-shadow: 2px 2px 0px #babc7c">Leite</h3>

                        <span class="block -mt-2 text-xl text-[#543a82]">
                            Professora e coordenadora</span>

                        <span class="block -mt-2 text-sm">42 anos</span>

                        <span
                            class="block text-2xl underline decoration-2 underline-offset-6 underline-[#ffae33]  hover:text-black transition duration-800"><a
                                href="http://lattes.cnpq.br/4217108053843431">Orientadora da pesquisa</a></span>
                    </div>
                </div>

                <p
                    class="py-2 px-4 text-white text-xl rounded-3xl rounded-br-none bg-[#75678E] lg:text-justify lg:mr-10">
                    Professora, orientadora da pesquisa e coordenadora <br> do curso técnico em informática
                    para a a
                    internet do<br>
                    Instituto Federal Catarinense campus Rio do Sul.
            </div>
        </div>

        <!--Card Felipe-->
        <div class="p-4 mt-10 mb-5 rounded-2xl rounded-br-none bg-[#F8FBA6] transform transition-all duration-500"
            style="box-shadow: 20px 10px 0px #75678E">

            <div class="flex flex-col items-center text-center gap-2 lg:gap-10 lg:flex-row lg:justify-between">

                <div class="flex flex-col items-center text-center gap-2 lg:flex-row">
                    <img src="../imgs/fotoFelipe.png" alt="Foto do Felipe" class="w-56">

                    <div class="col text-[#543A82] lg:text-left">
                        <h3 class="text-5xl" style="text-shadow: 2px 2px 0px #babc7c">Felipe Caue</h3>
                        <h3 class="-mt-3 text-5xl" style="text-shadow: 2px 2px 0px #babc7c">Machado</h3>

                        <span class="block -mt-2 text-xl text-[#543a82] hover:text-black transition duration-800"><a
                                href="http://lattes.cnpq.br/1527079924503132">Voluntário</a></span>

                        <span class="block -mt-2 text-sm">26 anos</span>

                        <span
                            class="block text-2xl underline decoration-2 underline-offset-4 underline-[#ffae33]  hover:text-black transition duration-800"><a
                                href="https://github.com/FelipeTMachado">Infra</a></span>
                    </div>
                </div>

                <p
                    class="py-2 px-4 text-white text-xl rounded-3xl rounded-br-none bg-[#75678E] lg:text-justify lg:mr-10">
                    Voluntário da pesquisa e estudante do bacharelado em <br> Ciência da Computação do
                    Instituto
                    Federal Catarinense <br> campus Rio do Sul.</p>
            </div>
        </div>
    </div>

    <div id="card-objetivo" class="hidden mb-20 p-4 rounded-2xl rounded-br-none bg-[#F8FBA6] lg:mx-16"
        style="box-shadow: 20px 10px 0px #75678E">
        <h3 class="text-4xl text-[#543A82] text-justify" style="text-shadow: 2px 2px 0px #babc7c">Qual o
            nosso
            obejtivo?</h3>

        <p class="lg:mx-4 text-xl text-[#3A2A58]">
            O Tradutor Emojimoji tem como principal objetivo promover a compreensão mútua
            da linguagem da internet, facilitando a comunicação entre os diferentes tipos de usuários
            que
            frequentam as plataformas digitais.
        </p>
    </div>

    <div id="card-resultados" class="hidden mb-20 p-4 rounded-2xl rounded-br-none bg-[#F8FBA6] lg:mx-16"
        style="box-shadow: 20px 10px 0px #75678E">
        <h3 class="text-4xl text-[#543A82]" style="text-shadow: 2px 2px 0px #babc7c">Como os resultados
            da pesquisa
            são coletados?</h3>

        <p class="lg:mx-4 text-justify text-xl text-[#3A2A58]">
            Com base no feedback que o usuário fornce ao utilizar a ferramenta. Pois
            a partir dos dados que o usuário fornece em seu perfil, podemos separa-lo
            em grupos que se enquadram com as informações que o mesmo forneceu,
            como faixa etária e nível de dificuldade com a tecnologia. E enfim identificar
            se a ferramenta foi útil e sanou as dúvidas dos usuários sobre a linguagem
            da internet.
        </p>
    </div>
    </div>
</main>

<!--Rodapé-->
<footer class="relative py-2 w-full">
    <h6 class="text-sm text-center">&copy; 2025 Emojimoji. Todos os direitos reservados.</h6>

    <div class="absolute right-3 bottom-1.5">
        <a href="suporte.php">
            <img src="../imgs/icones/suporte.png" alt="ícone de suporte">
        </a>
    </div>
</footer>

<!--Necessário para o funcionamento da biblioteca FlowBite-->
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>