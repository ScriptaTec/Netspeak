<!--Cabeçalho-->
<?php
require('header.php');
?>

<div class="lg:bg-[url(../imgs/fundoSup.png)] h-screen bg-cover bg-center">

    <!--Cabeçalho-->
    <header class="flex justify-between p-3">
        <div class="w-20">
            <a href="tradutor.php"><img src="../imgs/logo.png" alt="Logo do site"></a>
        </div>

        <div class="flex gap-2 items-center">
            <div class="flex flex-col items-center group transition-all duration-400">

                <!--Tradução português-->
                <button type="submit" onclick="traduzirPagina('pt')">
                    <!--Icone tela pequena-->
                    <img src="../imgs/icones/brasil.png" alt="Brasil" class="h-5 border rounded-full lg:hidden">

                    <!--Icone tela grande-->
                    <img src="../imgs/icones/brasil.png" alt="Brasil" class="h-7 border rounded-full hidden lg:block">

                    <div class="mt-1 h-0.5 w-7 bg-[#746587] rounded-xl hidden group-hover:block"></div>

                </button>
            </div>

            <div class="flex flex-col items-center group transition-all duration-400">

                <!--Tradução inglês-->
                <button type="submit" onclick="traduzirPagina('en')">
                    <!--Icone tela pequena-->
                    <img src="../imgs/icones/estadosUnidos.png" alt="Estados Unidos"
                        class="h-5 border rounded-full lg:hidden">

                    <!--Icone tela grande-->
                    <img src="../imgs/icones/estadosUnidos.png" alt="Estados Unidos"
                        class="h-7 border rounded-full hidden lg:block">

                    <div class="mt-1 h-0.5 w-7 bg-[#746587] rounded-xl hidden group-hover:block"></div>

                </button>
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
        </div>
        <!--Importar o menu de navegação rápida-->
        <?php include 'menu.php'; ?>
    </header>

    <div class="mt-2 text-center">
        <!--Título tela grande-->
            <h1 class="text-left lg:text-8xl text-[#F8FBA6] lg:mx-14 hidden lg:block" style="text-shadow: 7px 7px 0px #413E45; -webkit-text-stroke-width: 2.5px; -webkit-text-stroke-color: #413E45;">
                Como podemos <br> lhe ajudar?</h1>

            <!--Título tela pequena-->
            <h1 class="text-5xl text-[#F8FBA6] mx-5 lg:hidden" style="text-shadow: 2px 2px 0px #413E45; -webkit-text-stroke-width: 1.5px; -webkit-text-stroke-color: #413E45;">
                 Como podemos <br> lhe ajudar?</h1>
        
    </div>

    <!--Cards para as páginas faleConosco, avaliacao e tutoriais-->
    <div class="flex flex-col gap-10 mt-2 lg:flex-row lg:gap-20 lg:ml-20">

        <!--Card que redireciona para a página fale conosco-->
        <a href="fale_conosco.php"
            class="flex flex-col items-center text-center transition-all duration-500 hover:scale-105 ease-in-out lg:mt-18 ">
            <img src="../imgs/icones/faleConosco.png" alt="Icone fale conosco" class="z-30 w-30">

            <div class="w-60 py-5 -mt-10 rounded-3xl border-2 border-[#746587] bg-[#F8FBA6]"
                style="box-shadow: 6px 8px 0px #746587">
                <div class="flex-col mt-4 text-5xl text-[#746587] text-shadow-sm">
                    <h3>Fale</h3>
                    <h3 class="-mt-2">conosco!</h3>
                </div>
            </div>
        </a>

        <!--Card que redireciona para a página de avaliação-->
        <a href="avaliacao.php"
            class="flex flex-col items-center text-center transition-all duration-500 hover:scale-105 ease-in-out lg:mt-18 ">
            <img src="../imgs/icones/avaliacao.png" alt="Icone de avaliação" class="z-30 w-30">

            <div class="w-60 py-5 -mt-10 rounded-3xl border-2 border-[#746587] bg-[#F8FBA6]"
                style="box-shadow: 6px 8px 0px #746587">
                <div class="flex-col mt-4 text-5xl text-[#746587] text-shadow-sm">
                    <h3>Avalie a</h3>
                    <h3 class="-mt-2">ferramenta</h3>
                </div>
            </div>
        </a>

        <!--Card que redireciona para a página de tutoriais-->
        <a href="tutoriais.php"
            class="flex flex-col items-center text-center transition-all duration-500 hover:scale-105 ease-in-out lg:mt-18">
            <img src="../imgs/icones/tutorial.png" alt="Icone de tutorial" class="z-30 w-30">

            <div class="w-60 py-5 -mt-10 rounded-3xl border-2 border-[#746587] bg-[#F8FBA6]"
                style="box-shadow: 6px 8px 0px #746587">
                <div class="flex-col mt-4 text-5xl text-[#746587] text-shadow-sm">
                    <h3>Veja</h3>
                    <h3 class="-mt-2">tutoriais</h3>
                </div>
            </div>

        </a>
    </div>

</div>
<!--Rodapé-->
<?php
require('footer.php');
?>