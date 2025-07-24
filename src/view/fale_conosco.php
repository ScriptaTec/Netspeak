<!--Cabeçalho-->
<?php
require('header.php');
?>

<div class="lg:bg-[url(../imgs/fundoFale.png)] bg-cover bg-center">

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

    <div class="mt-2 text-center text-6xl lg:text-transparent">
        <h1>Envie uma</h1>
        <h1>mensagem...</h1>
    </div>

    <!--Formulário do feedback-->
    <form action="" class="mt-10 mb-10 m-2 lg:ml-32">
        <div class="flex-col lg:w-3xl py-3 px-10 rounded-4xl rounded-br-none border-2 border-[#746587] lg:mt-20"
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