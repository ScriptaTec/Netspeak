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
                class="px-2 py-1 text-[#746587] border-[#746587] rounded-lg bg-[#F8FBA6] transition duration-900 ease-in-out hover:bg-black hover:text-white">
                <a href="view/cadastro.php">
                    Cadastrar-se
                </a>
            </div>
        </div>
    </header>

    <div class="text-right">
        <button
            class="mt-98 mr-44 text-5xl text-[#746587] bg-white border-2 border-[#746587] rounded-lg px-10 py-1 transition duration-600 hover:border-white hover:bg-[#746587] hover:text-white">testar</button>
    </div>

    <div class="flex flex-col justify-center items-center">
        <button id="saberMais" class="mt-18 transition duration-800 hover:scale-105">
            <img src="/imgs/icones/saberMais.png" alt="Saiba mais" class="w-32">
        </button>
    </div>

    <section>
        <div class="mt-10 bg-[#F8FBA6] py-4">
            <h1 class="text-center text-[#413E45] text-7xl text-shadow-lg">Como a ferramenta funciona?</h1>
        </div>

        <div class="mt-10 flex flex-col justify-center items-center">
            <div class="flex flex-col lg:-ml-64">
                <span
                    class="text-left text-xl text-[#F8FBA6] px-4 py-3 bg-[#9E8AB7] rounded-2xl rounded-bl-none text-shadow-lg">Você
                    selecionará o tipo de tradução</span>

                <div class="-ml-88 flex flex-col items-center">
                    <img src="../imgs/icones/perfilMensagem.png" class="bg-[#F8FBA6] p-2 rounded-2xl"
                        style="box-shadow: -3px 3px 0px #746587" alt="Perfil do usuário">
                    <h2 class="mt-1 text-sm font-bold text-[#413E45]">Você</h2>
                </div>
            </div>

            <div class="flex flex-col lg:-mr-70 mb-5">
                <span
                    class="text-left text-xl text-[#413E45] px-4 py-3 bg-[#C7AFF2] rounded-2xl rounded-br-none text-shadow-lg">
                    e receberá a frase traduzida</span>

                <div class="-mr-80 flex flex-col items-center">
                    <img src="../imgs/icones/perfilMensagem.png" class="bg-[#F8FBA6] p-2 rounded-2xl"
                        style="box-shadow: -3px 3px 0px #746587" alt="Perfil do usuário">
                    <h2 class="mt-1 text-sm font-bold text-[#413E45]">EmojiMoji</h2>
                </div>
            </div>

            <div class="py-3 px-7 rounded-2xl bg-[#746587] text-left" style="box-shadow: 0px 8px 0px #AE99D2">

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
        <div class="">
            <span>sim</span>
        </div>
    </div>
</div>


<!--Necessário para o funcionamento da biblioteca FlowBite-->
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>