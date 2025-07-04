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
                <img src="../imgs/icones/menu.png" alt="ícone perfil hover"
                    class="absolute inset-0 w-full h-full opacity-0 group-hover:opacity-100 transition-opacity duration-600 ease-in-out">
            </div>
        </button>

        <!--Importar o menu de navegação rápida-->
        <?php include 'menu.php'; ?>
    </header>

    <div class="text-center text-8xl text-[#F8FBA6]"
        style="text-shadow: -5px 5px 0px #413E45; -webkit-text-stroke: 2px black; -moz-text-stroke: 2px black; text-stroke: 2px black;">
        <h1 class="lg:text-left lg:ml-20">Como podemos</h1>
        <h1 class="-mt-6 lg:text-left lg:ml-20">lhe ajudar?</h1>
    </div>

    <div class="flex flex-col mt-20 ml-32">
        <div class="flex items-center gap-5 bg-[#9E8CBE] rounded-4xl rounded-br-none px-5 py-4 w-2xl" style="box-shadow: 8px 8px 0px #605470">
        <img src="../imgs/icones/faleConosco.png" alt="Fale conosco">
        
        <h3 class="text-6xl text-[#F8FBA6]">Fale conosco!</h3>
    </div>
    </div>

</div>
<!--Rodapé-->
<?php
require('footer.php');
?>