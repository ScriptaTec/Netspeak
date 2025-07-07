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
        <h1 class="lg:text-left lg:ml-20">Envie uma</h1>
        <h1 class="-mt-6 lg:text-left lg:ml-20">mensagem...</h1>
    </div>

    <form action="" class="ml-20 mt-10">
        <div class="flex-col w-3xl py-3 px-10 rounded-4xl rounded-br-none border-2 border-[#746587]"
            style="box-shadow: 5px 14px 0px #746587">
            <div class="flex gap-10">
                <div class="flex flex-col">
                    <label for="email" class="text-[#413E45] text-xl">Email</label>
                    <input type="text" placeholder="@gmail.com"
                        class="bg-[#beaddb] border-none w-68 px-4 focus:outline-none ">
                </div>

                <div class="flex flex-col">
                    <label for="email" class="text-[#413E45] text-xl">Motivo do contato</label>
                    <input type="text" placeholder="..." class="bg-[#beaddb] border-none w-68 px-4 focus:outline-none ">
                </div>
            </div>

            <div class="mt-5 flex flex-col">
            <label for="email" class="text-[#413E45] text-xl">Relato</label>
                <textarea name="" id="" placeholder="..."
                    class="bg-[#beaddb] border-none w-xl px-4 focus:outline-none "></textarea>
            </div>

            <div class="mt-10"><input type="submit" value="Enviar feedback" class="bg-[#746587] text-lg px-2 py-1 rounded-xl text-white hover:bg-black transition duration-600 ease-in-out"></div>
        </div>
    </form>
</div>
<!--Rodapé-->
<?php
require('footer.php');
?>