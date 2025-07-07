<!--Cabeçalho-->
<?php
require('header.php');
?>

<div class="lg:bg-[url(../imgs/fundoSuporte.png)] h-screen bg-cover bg-center">

    <!--Cabeçalho-->
    <header class="flex justify-between p-3">
        <div class="w-20">
            <a href="tradutor.php"><img src="../imgs/logo.png" alt="Logo do site"></a>
        </div>

        <button type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation"
            aria-controls="drawer-navigation">
            <div class="relative w-8 h-8 group">
                <img src="../imgs/icones/menuAmarelo.png" alt="ícone de menu"
                    class="absolute inset-0 w-full h-full opacity-100 group-hover:opacity-0 duration-600">
                <img src="../imgs/icones/menu.png" alt="ícone de menu hover"
                    class="absolute inset-0 w-full h-full opacity-0 group-hover:opacity-100 duration-600">
            </div>
        </button>

        <!--Importar o menu de navegação rápida-->
        <?php include 'menu.php'; ?>
    </header>

    <div class="mt-7 text-center text-8xl text-[#F8FBA6]"
        style="text-shadow: -5px 5px 0px #413E45; -webkit-text-stroke: 2px black; -moz-text-stroke: 2px black; text-stroke: 2px black;">
        <h1 class="lg:text-left lg:ml-20">Como podemos</h1>
        <h1 class="-mt-6 lg:text-left lg:ml-20">lhe ajudar?</h1>
    </div>

    <!--Cards para as páginas faleConosco, avaliacao e tutoriais-->
    <div class="flex flex-col mt-10 lg:flex-row lg:gap-20 lg:ml-20">

        <!--Card que redireciona para a página fale conosco-->
        <a href="faleConosco.php"
            class="flex flex-col items-center text-center transition-all duration-500 hover:scale-105 ease-in-out">
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
            class="flex flex-col items-center mt-10 text-center transition-all duration-500 hover:scale-105 ease-in-out lg:mt-0">
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
            class="flex flex-col items-center mt-10 text-center transition-all duration-500 hover:scale-105 ease-in-out lg:mt-0">
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