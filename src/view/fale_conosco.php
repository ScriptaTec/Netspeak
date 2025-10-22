<!--Cabeçalho-->
<?php
require('header.php');
?>

<div class="lg:bg-[url(../imgs/fundoFaleConosco.png)] bg-cover bg-center">

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
            <h1 class="text-left lg:text-8xl text-[#F8FBA6] lg:ml-14 hidden lg:block" style="text-shadow: 7px 7px 0px #413E45; -webkit-text-stroke-width: 2.5px; -webkit-text-stroke-color: #413E45;">
                Envie uma <br> mensagem...</h1>

            <!--Título tela pequena-->
            <h1 class="text-5xl text-[#F8FBA6] mr-5 lg:hidden" style="text-shadow: 2px 2px 0px #413E45; -webkit-text-stroke-width: 1.5px; -webkit-text-stroke-color: #413E45;">
               Envie uma <br> mensagem...</h1>
        
    </div>

    <!--Formulário do feedback-->
    <form action="" class=" mb-10 m-2 lg:ml-14">
        <div class="flex-col lg:w-3xl py-3 px-10 rounded-4xl rounded-br-none border-2 border-[#746587] lg:mt-10"
            style="box-shadow: 5px 14px 0px #746587">
            <div class="flex-col lg:flex lg:flex-row gap-11">
                <div class="flex flex-col">
                    <label for="email" class="text-[#413E45] text-xl">Email</label>
                    <input type="email" placeholder="@gmail.com"
                        class="bg-[#beaddb] px-4 border-none outline-none focus:outline-none focus:ring-0 hover:border-none lg:w-78">
                </div>

                <div class="flex flex-col">
                    <label for="motivo" class="mt-5 text-[#413E45] text-xl lg:mt-0">Motivo do contato</label>
                    <input type="text" placeholder="..."
                        class="bg-[#beaddb] px-4 border-none outline-none focus:outline-none focus:ring-0 hover:border-none lg:w-78">
                </div>
            </div>

            <div class="mt-5 flex flex-col">
                <label for="relato" class="text-[#413E45] text-xl">Relato</label>
                <textarea name="" id="" placeholder="..."
                    class="resize-none bg-[#beaddb] px-4 h-74 outline-none border-none focus:outline-none focus:ring-0 hover:border-none lg:h-28 lg:w-2xl"></textarea>
            </div>

            <!--Enviar o feedback-->
            <div class="mt-5">
                <button type="button"
                    class="bg-[#746587] text-lg px-2 py-1 rounded-xl text-white hover:bg-black transition duration-600 ease-in-out">
                    <span>Enviar feedback</span>
                </button>
            </div>
        </div>
    </form>
</div>
<!--Rodapé-->
<?php
require('footer.php');
?>