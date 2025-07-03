<!--Cabeçalho-->
<?php
require('header.php');
?>

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
            <img src="../imgs/icones/menuAmarelo.png" alt="ícone perfil hover"
                class="absolute inset-0 w-full h-full opacity-0 group-hover:opacity-100 transition-opacity duration-600 ease-in-out">
        </div>
    </button>

    <!--Importar o menu de navegação rápida-->
    <?php include 'menu.php'; ?>
</header>

<div class="flex justify-center mt-10">
    <div class="font-bold text-left text-7xl text-[#F8FBA6]"
        style="text-shadow: -5px 5px 0px #413E45; -webkit-text-stroke: 2px black; -moz-text-stroke: 2px black; text-stroke: 2px black;">
        <h1>Como usar a ferramenta de tradução?</h1>
    </div>
</div>

<div class="flex justify-center items-center gap-14 py-20 mt-10 bg-[#9E8CBE] relative">

    <!--Decoração do fundo roxo-->
    <!--Parte de cima-->
    <div class="absolute -top-10 left-15 h-5 w-10 bg-[#9E8CBE]"></div>
    <div class="absolute top-0 left-0 h-5 w-26 bg-white"></div>
    <div class="absolute top-0 left-144 h-6 w-20 bg-white"></div>
    <div class="absolute top-5 left-144 h-4 w-5 bg-white"></div>
    <div class="absolute top-0 right-130 h-4 w-14 bg-[#746587]"></div>
    <div class="absolute top-0 right-76 h-4 w-10 bg-white"></div>
    <div class="absolute -top-12 right-10 h-7 w-9 bg-[#9E8CBE]"></div>
    <div class="absolute -top-20 right-20 h-5 w-4 bg-[#9E8CBE]"></div>
    <div class="absolute top-0 right-0 h-10 w-10 bg-[#746587]"></div>

    <!--Parte de baixo-->
    <div class="absolute bottom-5 left-10 h-6 w-5 bg-white"></div>
    <div class="absolute -bottom-10 left-32 h-6 w-10 bg-[#9E8CBE]"></div>
    <div class="absolute bottom-0 left-86 h-4 w-10 bg-[#746587]"></div>
    <div class="absolute bottom-0 left-112 h-4 w-18 bg-white"></div>
    <div class="absolute bottom-7 right-124 h-4 w-7 bg-white"></div>
    <div class="absolute bottom-0 right-46 h-4 w-38 bg-white"></div>
    <div class="absolute bottom-5 right-32 h-4 w-4 bg-[#746587]"></div>
    <div class="absolute -bottom-10 right-32 h-6 w-16 bg-[#9E8CBE]"></div>

    <!--Card passo 1-->
    <div class="bg-[#F8FBA6] px-10 py-4 rounded-2xl" style="box-shadow: -5px 9px 0px #716587">
        <div class="flex items-center gap-2">
            <h2 class="text-[#F8FBA6] text-6xl"
                style="text-shadow: -4px 4px 0px #413E45; -webkit-text-stroke: 2px black; -moz-text-stroke: 2px black; text-stroke: 2px black;">
                1°</h2>
            <h2 class="text-5xl text-[#413E45]">Passo</h2>
        </div>

        <p class="text-xl text-[#413E45]">Selecionar o tipo de tradução da frase <br>
            que deseja descobrir o significado.
        </p>
    </div>

    <!--Card passo 2-->
    <div class="bg-[#F8FBA6] px-10 py-4 rounded-2xl" style="box-shadow: 0px 9px 0px #716587">
        <div class="flex items-center gap-2">
            <h2 class="text-[#F8FBA6] text-6xl"
                style="text-shadow: -4px 4px 0px #413E45; -webkit-text-stroke: 2px black; -moz-text-stroke: 2px black; text-stroke: 2px black;">
                2°</h2>
            <h2 class="text-5xl text-[#413E45]">Passo</h2>
        </div>

        <p class="text-xl text-[#413E45]">Escrever a frase que você deseja <br>
            traduzir no campo roxo.</p>
    </div>

    <!--Card passo 3-->
    <div class="bg-[#F8FBA6] px-10 py-4 rounded-2xl" style="box-shadow: 5px 9px 0px #716587">
        <div class="flex items-center gap-2">
            <h2 class="text-[#F8FBA6] text-6xl"
                style="text-shadow: -4px 4px 0px #413E45; -webkit-text-stroke: 2px black; -moz-text-stroke: 2px black; text-stroke: 2px black;">
                3°</h2>
            <h2 class="text-5xl text-[#413E45]">Passo</h2>
        </div>

        <p class="text-xl text-[#413E45]">Clicar no ícone de envio para traduzir a frase. <br>
            Isso levará apenas alguns segundinhos!</p>
    </div>
</div>

<div
    class="mt-5 text-center text-2xl underline underline-offset-6 decoration-2 transition duration-500 hover:text-[#543A82] hover:decoration-[#543A82]">
    <a href="tradutor.php">Começar</a>
</div>

<!--Rodapé-->
<?php
require('footer.php');
?>