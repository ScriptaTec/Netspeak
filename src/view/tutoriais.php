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

    <div class="mt-2 text-center">
          <!--Título tela grande-->
            <h1 class="text-left lg:text-8xl text-[#F8FBA6] lg:ml-10 hidden lg:block" style="text-shadow: 7px 7px 0px #413E45; -webkit-text-stroke-width: 2.5px; -webkit-text-stroke-color: #413E45;">
                Tire suas <br> dúvidas aqui! </h1>

            <!--Título tela pequena-->
            <h1 class="text-5xl text-[#F8FBA6] mr-5 lg:hidden" style="text-shadow: 2px 2px 0px #413E45; -webkit-text-stroke-width: 1.5px; -webkit-text-stroke-color: #413E45;">
                Tire suas <br> dúvidas aqui! </h1>
        
    </div>

    <div class="flex flex-col justify-center items-center lg:ml-20 lg:justify-start lg:fixed">
        <div class="lg:flex lg:gap-16 lg:mt-5">
            <!--Card do video 1-->
            <a href="">
                <img src="../imgs/icones/video.png" alt="Video do tutorial"
                    class="w-64 transition duration-700 hover:scale-105 ease-in-out">
                <h4 class="text-[#413E45] text-xl text-shadow-sm ml-2">Como utilizar a ferramenta de <br> tradução?</h4>
            </a>

            <!--Card do video 2-->
            <a href="">
                <img src="../imgs/icones/video.png" alt="Video do tutorial"
                    class="w-64 transition duration-700 hover:scale-105 ease-in-out">
                <h4 class="text-[#413E45] text-xl text-shadow-sm ml-2">Como alterar seus dados?</h4>
            </a>
        </div>

        <div class="lg:flex lg:gap-16 lg:mt-5">
            <!--Card do video 3-->
            <a href="">
                <img src="../imgs/icones/video.png" alt="Video do tutorial"
                    class="w-64 transition duration-700 hover:scale-105 ease-in-out">
                <h4 class="text-[#413E45] text-xl text-shadow-sm ml-2">Como avaliar a ferramenta?</h4>
            </a>

            <!--Card do video 4-->
            <a href="">
                <img src="../imgs/icones/video.png" alt="Video do tutorial"
                    class="w-64 transition duration-700 hover:scale-105 ease-in-out">
                <h4 class="text-[#413E45] text-xl text-shadow-sm ml-2">Como redefinir minha senha?</h4>
            </a>
        </div>
    </div>
</div>

<!--Rodapé-->
<?php
require('footer.php');
?>