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
                <img src="../imgs/icones/menuRoxo.png" alt="ícone perfil"
                    class="absolute inset-0 w-full h-full opacity-100 group-hover:opacity-0 transition-opacity duration-600 ease-in-out">
                <img src="../imgs/icones/menuAmarelo.png" alt="ícone perfil hover"
                    class="absolute inset-0 w-full h-full opacity-0 group-hover:opacity-100 transition-opacity duration-600 ease-in-out">
            </div>
        </button>

        <!--Importar o menu de navegação rápida-->
        <?php include 'menu.php'; ?>
    </header>

    <div class=" text-center text-8xl text-[#F8FBA6]"
        style="text-shadow: -5px 5px 0px #413E45; -webkit-text-stroke: 2px black; -moz-text-stroke: 2px black; text-stroke: 2px black;">
        <h1 class="lg:text-left lg:ml-20">Tire suas</h1>
        <h1 class="-mt-6 lg:text-left lg:ml-20">dúvidas aqui</h1>
    </div>

    <div class="flex flex-col justify-center items-center mt-7 lg:ml-20 lg:justify-start lg:fixed">
        <div class="lg:flex lg:gap-16">
            <!--Card do video 1-->
            <a href="">
                <img src="../imgs/icones/video.png" alt="Video do tutorial"
                    class="w-72 transition duration-700 hover:scale-105 ease-in-out">
                <h4 class="text-[#413E45] text-xl text-shadow-sm ml-2">Como utilizar a ferramenta de <br> tradução?</h4>
            </a>

            <!--Card do video 2-->
            <a href="">
                <img src="../imgs/icones/video.png" alt="Video do tutorial"
                    class="w-72 transition duration-700 hover:scale-105 ease-in-out">
                <h4 class="text-[#413E45] text-xl text-shadow-sm ml-2">Como alterar seus dados?</h4>
            </a>
        </div>

        <div class="lg:flex lg:gap-16 lg:mt-5">
            <!--Card do video 3-->
            <a href="">
                <img src="../imgs/icones/video.png" alt="Video do tutorial"
                    class="w-72 transition duration-700 hover:scale-105 ease-in-out">
                <h4 class="text-[#413E45] text-xl text-shadow-sm ml-2">Como avaliar a ferramenta?</h4>
            </a>

            <!--Card do video 4-->
            <a href="">
                <img src="../imgs/icones/video.png" alt="Video do tutorial"
                    class="w-72 transition duration-700 hover:scale-105 ease-in-out">
                <h4 class="text-[#413E45] text-xl text-shadow-sm ml-2">Como redefinir minha senha?</h4>
            </a>
        </div>
    </div>
</div>

<!--Rodapé-->
<?php
require('footer.php');
?>