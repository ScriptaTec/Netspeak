<!--Cabeçalho-->
<?php
require('header.php');
?>

<div class="lg:bg-[url(../imgs/fundoAvaliacao.png)] bg-cover bg-center">

    <!--Cabeçalho-->
    <header class="flex justify-between p-3">
        <div class="w-20">
            <a href="tradutor.php"><img src="../imgs/logo.png" alt="Logo do site"></a>
        </div>

        <button type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation"
            aria-controls="drawer-navigation">
            <div class="relative w-8 h-8 group">
                <img src="../imgs/icones/menuRoxo.png" alt="ícone perfil"
                    class="absolute inset-0 w-full h-full opacity-100 group-hover:opacity-0 transition-opacity duration-600 ease-in-out">
                <img src="../imgs/icones/menu.png" alt="ícone perfil hover"
                    class="absolute inset-0 w-full h-full opacity-0 group-hover:opacity-100 transition-opacity duration-600 ease-in-out">
            </div>
        </button>

        <!--Importar o menu de navegação rápida-->
        <?php include 'menu.php'; ?>
    </header>

    <div class="text-center text-8xl text-[#F8FBA6]"
        style="text-shadow: -5px 5px 0px #413E45; -webkit-text-stroke: 2px black; -moz-text-stroke: 2px black; text-stroke: 2px black;">
        <h1 class="lg:text-left lg:ml-20">Qual sua experiência</h1>
        <h1 class="-mt-6 lg:text-left lg:ml-20">com a ferramenta?</h1>
    </div>

    <!--Cards para escolher a avaliação-->
    <div class="flex items-center flex-col gap-14 mt-5 lg:flex-row lg:ml-20">

        <!--Card de avalião ótima-->
        <div class="flex flex-col justify-center flex-justify-center items-center bg-[#9E8CBE] rounded-4xl w-52 py-4 px-2 relative group"
            style="box-shadow: 8px 8px 0px #605470">
            <div class="absolute top-0 right-0 bg-[#AE99D2] h-8 w-8 rounded-tr-4xl"></div>
            <div class="absolute top-20 left-0 bg-[#AE99D2] h-4 w-7"></div>
            <div class="absolute bottom-10 right-0 bg-[#AE99D2] h-4 w-4"></div>
            <div class="absolute bottom-8 left-15 bg-[#AE99D2] h-2 w-2"></div>

            <img src="../imgs/icones/emojiOtima.png" alt="Emoji muito feliz" class="w-40">

            <div class="text-center">
                <h2 class="text-4xl text-[#FEF37E]" style="text-shadow: 3px 3px 0px #605470">Ótima</h2>

                <div
                    class="opacity-0 max-h-0 transition-all duration-600 group-focus-within:max-h-40 group-focus-within:opacity-100 group-hover:max-h-40 group-hover:opacity-100">
                    <p class="text-xl text-[#F8FBA6]">Pois traduziu todas as frases corretamente</p>

                    <!--Escolher avalião muito boa-->
                    <button type="button" 
                        class="relative z-20 mt-2 bg-[#746587] text-[#F8FBA6] px-3 py-1 transition duration-300 hover:bg-[#625672]"
                        style="box-shadow: 2px 2px 0px #625672">
                        Selecionar
                    </button>
                </div>
            </div>
        </div>

        <!--Card de avalião boa-->
        <div class="flex flex-col justify-center flex-justify-center items-center bg-[#9E8CBE] rounded-4xl w-52 py-4 px-2 relative group"
            style="box-shadow: 8px 8px 0px #605470">
            <div class="absolute top-0 right-0 bg-[#AE99D2] h-8 w-8 rounded-tr-4xl"></div>
            <div class="absolute top-20 left-0 bg-[#AE99D2] h-4 w-7"></div>
            <div class="absolute bottom-10 right-0 bg-[#AE99D2] h-4 w-4"></div>
            <div class="absolute bottom-8 left-15 bg-[#AE99D2] h-2 w-2"></div>

            <img src="../imgs/icones/emojiBoa.png" alt="Emoji feliz" class="w-40">

            <div class="text-center">
                <h2 class="text-4xl text-[#FEF37E]" style="text-shadow: 3px 3px 0px #605470">Boa</h2>

                <div
                    class="opacity-0 max-h-0 transition-all duration-600 group-focus-within:max-h-40 group-focus-within:opacity-100 group-hover:max-h-40 group-hover:opacity-100">
                    <p class="text-xl text-[#F8FBA6]">Pois traduziu quase todas as frases corretamente</p>

                    <!--Escolher avalião boa-->
                    <button type="button" 
                        class="relative z-20 mt-2 bg-[#746587] text-[#F8FBA6] px-3 py-1 transition duration-300 hover:bg-[#625672]"
                        style="box-shadow: 2px 2px 0px #625672">
                        Selecionar
                    </button>
                </div>
            </div>
        </div>

        <!--Card de avalião ruim-->
        <div class="flex flex-col justify-center items-center bg-[#9E8CBE] rounded-4xl w-52 py-4 px-2 relative group"
            style="box-shadow: 8px 8px 0px #605470">
            <div class="absolute top-0 right-0 bg-[#AE99D2] h-8 w-8 rounded-tr-4xl"></div>
            <div class="absolute top-20 left-0 bg-[#AE99D2] h-4 w-7"></div>
            <div class="absolute bottom-10 right-0 bg-[#AE99D2] h-4 w-4"></div>
            <div class="absolute bottom-8 left-15 bg-[#AE99D2] h-2 w-2"></div>

            <img src="../imgs/icones/emojiRuim.png" alt="Emoji triste" class="w-40">

            <div class="text-center">
                <h2 class="text-4xl text-[#FEF37E]" style="text-shadow: 3px 3px 0px #605470">Ruim</h2>

                <div
                    class="opacity-0 max-h-0 transition-all duration-600 group-focus-within:max-h-40 group-focus-within:opacity-100 group-hover:max-h-40 group-hover:opacity-100">
                    <p class="text-xl text-[#F8FBA6]">Pois não traduziu nenhuma das frases corretamente</p>

                    <!--Escolher avalião ruim-->
                    <button type="button" 
                        class="mt-2 relative z-20 bg-[#746587] text-[#F8FBA6] px-3 py-1 transition duration-300 hover:bg-[#625672]"
                        style="box-shadow: 2px 2px 0px #625672">
                        Selecionar
                    </button>
                </div>
            </div>
        </div>
    </div>



    <!--Seção da justificativa para a avliação-->
    <section>
        <div class="text-center text-8xl text-[#F8FBA6] mt-20"
            style="text-shadow: -5px 5px 0px #413E45; -webkit-text-stroke: 2px black; -moz-text-stroke: 2px black; text-stroke: 2px black;">
            <h1 class="lg:text-left lg:ml-20">Justifique sua</h1>
            <h1 class="-mt-4 lg:text-left lg:ml-20">avaliação</h1>
        </div>

        <!--Card da justificativa para a avliação-->
        <div class="mt-5 m-2 lg:mb-20 lg:ml-20">
            <div class="flex-col py-3 px-10 rounded-4xl rounded-br-none border-2 border-[#746587] lg:w-5xl"
                style="box-shadow: 5px 14px 0px #746587">

                <!--Pergunta 1-->
                <div class="flex-col">
                    <label for="pergunta" class="mt-5 text-[#413E45] text-2xl lg:mt-0">Todas as traduções foram feitas
                        corretamente?</label>

                    <div class="lg:flex lg:flex-row gap-5">
                        <!--Opção 1-->
                        <div class="flex gap-2 items-center">
                            <input type="radio" value="sim" name="opcao" required
                                class="w-4 h-4 text-[#746587] bg-gray-100 border-gray-300 focus:ring-white focus:ring-1">
                            <label for="default-radio-1" class=" text-lg text-[#413E45]">Sim</label>
                        </div>

                        <!--Opção 2-->
                        <div class="flex gap-2 items-center">
                            <input type="radio" value="mediano" name="opcao" required
                                class="w-4 h-4 text-[#746587] bg-gray-100 border-gray-300 focus:ring-white focus:ring-1">
                            <label for="default-radio-1" class=" text-lg text-[#413E45]">Mais ou menos</label>
                        </div>

                        <!--Opção 3-->
                        <div class="flex gap-2 items-center">
                            <input type="radio" value="nao" name="opcao" required
                                class="w-4 h-4 text-[#746587] bg-gray-100 border-gray-300 focus:ring-white focus:ring-1">
                            <label for="default-radio-1" class=" text-lg text-[#413E45]">Não</label>
                        </div>
                    </div>
                </div>

                <!--Pergunta 2-->
                <div class="flex-col mt-5">
                    <label for="pergunta" class="mt-5 text-[#413E45] text-2xl lg:mt-0">A linguagem usada pela ferramenta
                        foi compreenssiva?</label>

                    <div class="lg:flex lg:flex-row gap-5">
                        <!--Opção 1-->
                        <div class="flex gap-2 items-center">
                            <input type="radio" value="sim" name="opcao" required
                                class="w-4 h-4 text-[#746587] bg-gray-100 border-gray-300 focus:ring-white focus:ring-1">
                            <label for="default-radio-1" class=" text-lg text-[#413E45]">Sim</label>
                        </div>

                        <!--Opção 2-->
                        <div class="flex gap-2 items-center">
                            <input type="radio" value="mediano" name="opcao" required
                                class="w-4 h-4 text-[#746587] bg-gray-100 border-gray-300 focus:ring-white focus:ring-1">
                            <label for="default-radio-1" class=" text-lg text-[#413E45]">Mais ou menos</label>
                        </div>

                        <!--Opção 3-->
                        <div class="flex gap-2 items-center">
                            <input type="radio" value="nao" name="opcao" required
                                class="w-4 h-4 text-[#746587] bg-gray-100 border-gray-300 focus:ring-white focus:ring-1">
                            <label for="default-radio-1" class=" text-lg text-[#413E45]">Não</label>
                        </div>
                    </div>
                </div>

                <!--Pergunta 3-->
                <div class="flex-col mt-5">
                    <label for="pergunta" class="mt-5 text-[#413E45] text-2xl lg:mt-0">A sua compreenssão sobre a
                        linguagem da
                        internet melhorou após utilizar a ferramenta?</label>

                    <div class="lg:flex lg:flex-row gap-5">
                        <!--Opção 1-->
                        <div class="flex gap-2 items-center">
                            <input type="radio" value="sim" name="opcao" required
                                class="w-4 h-4 text-[#746587] bg-gray-100 border-gray-300 focus:ring-white focus:ring-1">
                            <label for="default-radio-1" class=" text-lg text-[#413E45]">Sim</label>
                        </div>

                        <!--Opção 2-->
                        <div class="flex gap-2 items-center">
                            <input type="radio" value="mediano" name="opcao" required
                                class="w-4 h-4 text-[#746587] bg-gray-100 border-gray-300 focus:ring-white focus:ring-1">
                            <label for="default-radio-1" class=" text-lg text-[#413E45]">Mais ou menos</label>
                        </div>

                        <!--Opção 3-->
                        <div class="flex gap-2 items-center">
                            <input type="radio" value="nao" name="opcao" required
                                class="w-4 h-4 text-[#746587] bg-gray-100 border-gray-300 focus:ring-white focus:ring-1">
                            <label for="default-radio-1" class=" text-lg text-[#413E45]">Não</label>
                        </div>
                    </div>
                </div>

                <div class="mt-5 flex flex-col">
                    <label for="obs" class="text-[#413E45] text-xl">Observações</label>
                    <textarea name="" id="" placeholder="..."
                        class="resize-none bg-[#beaddb] px-4 h-74 outline-none border-none focus:outline-none focus:ring-0 hover:border-none lg:h-28 lg:w-2xl"></textarea>
                </div>

                <!--Enviar a avaliação-->
                <div class="mt-5">
                    <button type="button"
                        class="bg-[#746587] text-lg px-2 py-1 rounded-xl text-white hover:bg-black transition duration-600 ease-in-out">
                        <span>Enviar Avaliação</span>
                    </button>
                </div>
            </div>
    </section>

</div>

<!-- Chamar animação de navegação em navegacao.js -->
<script>
    //Necessário para executar a animação apenas quando a página já tiver caarregado 100%
    document.addEventListener("DOMContentLoaded", function () {
        botaoAvaliacao();
    });
</script>
<!--Rodapé-->
<?php
require('footer.php');
?>