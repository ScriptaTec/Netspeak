<!--Cabeçalho-->
<?php
require('header.php');
?>

<div class="lg:bg-[url(../imgs/fundoAvaliacao.png)] h-screen bg-cover bg-center">

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

    <form action="">
        <div class="flex justify-center items-center flex-col gap-14 mt-5 lg:flex-row lg:justify-end lg:fixed lg:ml-20">

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

                        <button type=""
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

                        <button type=""
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

                        <button type=""
                            class="mt-2 relative z-20 bg-[#746587] text-[#F8FBA6] px-3 py-1 transition duration-300 hover:bg-[#625672]"
                            style="box-shadow: 2px 2px 0px #625672">
                            Selecionar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>
<!--Rodapé-->
<?php
require('footer.php');
?>