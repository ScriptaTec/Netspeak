<?php
require("view/header.php")
    ?>

<div class="h-screen lg:bg-[url(imgs/index.png)] bg-no-repeat bg-center">
    <header class="flex justify-between items-center p-3 relative z-50">
        <div class="w-20">
            <a href="tradutor.php"><img src="../imgs/logo.png" alt="Logo do site"></a>
        </div>

        <div class="flex items-center gap-5 text-lg">
            <a href="view/login.php" class="text-[#413E45] hover:underline hover:underline-offset-2 hover:decoration-2">
                Entrar
            </a>

            <div
                class="px-2 py-1 text-[#746587] border-[#746587] rounded-lg bg-[#F8FBA6] shadow-[#746587] shadow-xs transition duration-900 ease-in-out hover:bg-black hover:text-white">
                <a href="view/cadastro.php">
                    Cadastrar-se
                </a>
            </div>
        </div>
    </header>

    <div class="text-right">
        <button data-aos="zoom-out-up" data-aos-duration="1000"
            class="mt-98 mr-44 text-5xl text-[#746587] bg-white border-2 border-[#746587] rounded-lg px-10 py-1 transition duration-600 hover:border-white hover:bg-[#746587] hover:text-white">testar</button>
    </div>

    <div class="flex flex-col justify-center items-center">
        <button onclick="scrollSaberMais()" class="mt-18 transition duration-800 hover:scale-105">
            <img src="/imgs/icones/saberMais.png" alt="Saiba mais" class="w-32">
        </button>
    </div>

    <!--Seção com animação de scroll-->
    <section id="ferramenta">
        <div class="flex justify-between  mt-10 bg-[#F8FBA6] py-4">
            <div class="flex flex-col gap-5">
                <div class="bg-[#413E45] w-74 h-1 rounded-lg shadow-sm"></div>
                <div class="bg-[#413E45] w-44 h-1 rounded-lg shadow-sm"></div>
            </div>

            <h1 data-aos="fade-up" data-aos-duration="1000"  class="text-[#413E45] text-7xl text-shadow-lg">Como a ferramenta funciona?</h1>

            <div class="flex flex-col gap-5 mt-10">
                <div class="bg-[#413E45] w-20 h-1 rounded-lg shadow-sm"></div>
                <div class="bg-[#413E45] w-60 h-1 rounded-lg shadow-sm"></div>
            </div>
        </div>

        <div class="mt-10 flex flex-col justify-center items-center">
            <div class="flex flex-col lg:-ml-64">
                <span data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="200"
                    class="text-left text-xl text-[#F8FBA6] px-4 py-3 bg-[#9E8AB7] rounded-2xl rounded-bl-none text-shadow-sm shadow-xs shadow-[#413E45]">Você
                    selecionará o tipo de tradução</span>

                <div data-aos="zoom-in-right" data-aos-duration="1000" class="-ml-88 flex flex-col items-center">
                    <img src="../imgs/icones/perfilMensagem.png" class="bg-[#F8FBA6] p-2 rounded-2xl"
                        style="box-shadow: -3px 3px 0px #746587" alt="Perfil do usuário">
                    <h2 class="mt-1 text-sm font-bold text-[#413E45]">Você</h2>
                </div>
            </div>

            <div class="flex flex-col lg:-mr-70 mb-5">
                <span data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="600"
                    class="text-left text-xl text-[#413E45] px-4 py-3 bg-[#C7AFF2] rounded-2xl rounded-br-none text-shadow-sm shadow-xs shadow-[#413E45]">
                    e receberá a frase traduzida</span>

                <div data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="500"
                    class="-mr-80 flex flex-col items-center">
                    <img src="../imgs/icones/perfilMensagem.png" class="bg-[#F8FBA6] p-2 rounded-2xl"
                        style="box-shadow: -3px 3px 0px #746587" alt="Perfil do usuário">
                    <h2 class="mt-1 text-sm font-bold text-[#413E45]">EmojiMoji</h2>
                </div>
            </div>

            <div data-aos="fade-down" data-aos-duration="1000" data-aos-delay="700"
                class="py-3 px-7 rounded-2xl bg-[#746587] text-left" style="box-shadow: 0px 8px 0px #AE99D2">

                <div class="flex items-center gap-3">
                    <input type="hidden" name="tipoTraducao" value="formal">

                    <div class="relative">
                        <button data-tooltip-target="tooltip-default-tipo">
                            <img src="../imgs/icones/filtro.png" alt="Abrir filtro de tradução"
                                class="w-8 mt-2"></button>

                        <div id="modal-filtro" class="hidden absolute bottom-10 left-3 items-center w-48">

                            <div class="flex flex-col bg-white py-2 px-3 rounded-2xl rounded-bl-none border-2">

                                <spam class="text-center text-lg">Tipo de tradução:</spam>

                                <div class="flex gap-2 items-center">
                                    <input type="checkbox" name="tipo" value="formal"
                                        class="text-[#746587] rounded-sm border-black focus:ring-white">

                                    <spam class="text-lg">Informal para formal</spam>
                                </div>

                                <div class="flex gap-2 items-center">
                                    <input type="checkbox" name="tipo" value="informal"
                                        class="text-[#746587] rounded-sm border-black focus:ring-white">
                                    <spam class="text-lg">Formal para informal</spam>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Descrição do botão de tipo de tradução-->
                    <div id="tooltip-default-tipo" role="tooltip"
                        class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-[#746587] transition-opacity duration-300 bg-[#F8FBA6] rounded-lg shadow-xs opacity-0 tooltip">
                        Tipo de tradução
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>

                    <!--Atalho para emojis-->
                    <button data-tooltip-target="tooltip-default-emoji">
                        <img src="../imgs/icones/emojiBranco.png" alt="Abrir atalho para emojis" class="w-8">
                    </button>

                    <!--Descrição do botão de atalho de emojis-->
                    <div id="tooltip-default-emoji" role="tooltip"
                        class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-[#746587] transition-opacity duration-300 bg-[#F8FBA6] rounded-lg shadow-xs opacity-0 tooltip">
                        Atalho de emojis
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>

                    <!--Input para enviar a frase-->
                    <input type="text" name="frase"
                        class="py-2 px-3 rounded-xl bg-white text-gray-500 text-xl focus:outline-none focus:border-0 hover:border-0 focus:shadow-none focus:ring-black hover:text-[#543A82] transition-all duration-700 lg:w-120">

                    <!--Botão para enviar a frase-->
                    <button type="submit" class="group relative w-8 h-8" data-tooltip-target="tooltip-default-enviar">
                        <img src="../imgs/icones/enviar.png" alt="Ícone de enviar frase para ser traduzida"
                            class="absolute inset-0 group-hover:opacity-0 transition-opacity duration-500">

                        <img src="../imgs/icones/enviarHover.png" alt="Ícone de enviar frase para ser traduzida"
                            class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </button>

                    <!--Descrição do botão de enviar-->
                    <div id="tooltip-default-enviar" role="tooltip"
                        class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-[#746587] transition-opacity duration-300 bg-[#F8FBA6] rounded-lg shadow-xs opacity-0 tooltip">
                        Enviar a frase que será traduzida
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="h-screen lg:bg-[url(imgs/atalhos.png)] bg-no-repeat bg-center mt-16">
        <div class="flex justify-center p-32 gap-10">

            <div class="flex flex-col gap-5">
                <!--Card sobre nós-->
                <a data-aos="fade-down" data-aos-duration="1000" href="/view/sobre_nos.php"
                    class="flex flex-col w-xl px-10 py-4 bg-[#F8FBA6] rounded-3xl transition-all duration-700 hover:scale-105 hover:m-2"
                    style="box-shadow: 10px 10px 0px #413E45">
                    <h2 class="text-8xl text-[#413E45] text-shadow-[#746587] text-shadow-sm">Sobre nós</h2>

                    <div class="flex flex-col text-3xl text-[#413E45] text-shadow-[#746587] text-shadow-xs">
                        <div class="flex gap-6 items-baseline">
                            <div class="bg-[#413E45] w-20 h-1 rounded-lg shadow-sm"></div>
                            <div class="bg-[#413E45] w-80 h-1 rounded-lg shadow-sm"></div>
                        </div>

                        <div class="flex gap-2 items-baseline">
                            <span>Conheça as desenvolvedoras</span>
                            <div class="bg-[#413E45] w-36 h-1 rounded-lg shadow-sm"></div>
                        </div>

                        <div class="flex gap-2 items-baseline">
                            <div class="bg-[#413E45] w-40 h-1 rounded-lg shadow-sm"></div>
                            <span class="-mt-2 text-right">e a pesquisa ;)</span>
                            <div class="bg-[#413E45] w-20 h-1 rounded-lg shadow-sm"></div>
                        </div>
                    </div>
                </a>

                <div class="flex gap-10">
                    <!--Card suporte-->
                    <a data-aos="fade-right" data-aos-duration="1300" data-aos-delay="550" href="/view/suporte.php"
                        class="flex flex-col px-10 py-4 bg-[#746587] rounded-3xl  transition-all duration-700 hover:scale-105 hover:mx-2"
                        style="box-shadow: 10px 10px 0px #413E45">
                        <div class="text-[#F8FBA6] text-6xl text-shadow-[#413E45] text-shadow-lg">
                            <h7>Suporte</h7>
                        </div>
                    </a>

                    <!--Card projeto-->
                    <a data-aos="fade-left" data-aos-duration="1400" data-aos-delay="600" href=""
                        class="flex flex-col px-10 py-4 bg-[#746587] rounded-3xl  transition-all duration-700 hover:scale-105 hover:mx-2"
                        style="box-shadow: 10px 10px 0px #413E45">
                        <div class="text-[#F8FBA6] text-6xl text-shadow-[#413E45] text-shadow-lg">
                            <h6>Projeto</h6>
                        </div>
                    </a>
                </div>
            </div>

            <!--Card avalie a ferramenta-->
            <div class="block">
                <a data-aos="fade-left" data-aos-duration="1200" data-aos-delay="500" href="view/avaliacao.php"
                    class="flex flex-col px-10 py-4 bg-[#746587] rounded-3xl  transition-all duration-700 hover:scale-105 hover:m-2"
                    style="box-shadow: 10px 10px 0px #413E45">
                    <div class="text-[#F8FBA6] text-6xl text-shadow-[#413E45] text-shadow-lg">
                        <h3>Avalie a</h3>
                        <h4 class="-mt-4">ferramenta</h4>
                    </div>

                    <div class="flex flex-col text-3xl text-[#F8FBA6] text-shadow-[#413E45] text-shadow-sm">
                        <span>Nos conte sua</span>
                        <span class="-mt-2">experiência conosco!</span>
                    </div>
                </a>

                <div class="flex justify-center relative">
                    <img src="/imgs/icones/estrela.png" alt="" class="w-14 -mt-7 z-10">
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    const ferramenta = document.getElementById("ferramenta")

    function scrollSaberMais() {
        ferramenta.scrollIntoView({
            behavior: 'smooth', // Faz a rolagem suave
        });
    }
    AOS.init();
</script>

<!--Necessário para o funcionamento da biblioteca FlowBite-->
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>