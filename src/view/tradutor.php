<?php
require_once '../controller/geminiController.php';

$respostaDaApi = '';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['frase'])) {
    $fraseUsuario = $_POST['frase'];
    $respostaDaApi = processarFraseComGemini($fraseUsuario);
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Tradutor Netspeak</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="../fonts/fonts.css">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
</head>

<body>

    <div class="jersey bg-[url(../imgs/fundoTradutor.png)] h-screen bg-cover bg-center">

        <!--Cabeçalho-->
        <header class="flex">

            <button class="absolute top-2 right-3" type="button" data-drawer-target="drawer-navigation"
                data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
                <div class="relative w-8 h-8 group">
                    <img src="../imgs/icones/menu.png" alt="ícone perfil"
                        class="absolute inset-0 w-full h-full opacity-100 group-hover:opacity-0 transition-opacity duration-600 ease-in-out">
                    <img src="../imgs/icones/menuAmarelo.png" alt="ícone perfil hover"
                        class="absolute inset-0 w-full h-full opacity-0 group-hover:opacity-100 transition-opacity duration-600 ease-in-out">
                </div>
            </button>

            <!--Importar o menu de navegação rápida-->
            <?php include 'menu.php'; ?>
        </header>

        <div class="flex justify-center mt-30 -ml-10">
            <div class="text-left text-8xl text-[#F8FBA6]"
                style="text-shadow: -5px 5px 0px #413E45; -webkit-text-stroke: 2px black; -moz-text-stroke: 2px black; text-stroke: 2px black;">
                <h1>Digite</h1>
                <h1 class="-mt-6">uma frase no</h1>
                <h1 class="-mt-6">campo abaixo</h1>
            </div>
        </div>

        <!--Tutorial para usar a ferramenta-->
        <div
            class="-ml-98 -mt-3 text-center text-lg text-[#75678E] font-bold underline underline-offset-4 decoration-2 decoration-[#75678E] hover:text-[#543A82] hover:decoration-[#543A82] transition duration-400">
            <a href="tutorial.php">Precisa de ajuda?</a>
        </div>

         <!--Card para enviar a frase-->
        <div class="flex justify-center mt-7">
            <div class="py-3 px-7 rounded-2xl bg-[#746587] text-left transition duration-500 hover:scale-105"
                style="box-shadow: 0px 8px 0px #AE99D2">

                <!--Input para enviar a frase-->
                <form method="post" action="resposta_tradutor.php" class="flex items-center gap-3">

                    <img src="../imgs/icones/emojiBranco.png" alt="" class="w-8">

                    <input type="text" name="frase" required placeholder="Aqui..."
                        class="w-120 py-2 px-3 rounded-xl bg-white text-gray-500 text-xl focus:outline-none focus:border-0 hover:border-0 focus:shadow-none focus:ring-black hover:text-[#543A82] transition-all duration-700">


                    <button type="submit" class="group relative w-8 h-8" data-tooltip-target="tooltip-default">
                        <img src="../imgs/icones/enviar.png" alt="Ícone de enviar frase para ser traduzida"
                            class="absolute inset-0 group-hover:opacity-0 transition-opacity duration-500">

                        <img src="../imgs/icones/enviarHover.png" alt="Ícone de enviar frase para ser traduzida"
                            class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </button>

                    <div id="tooltip-default" role="tooltip"
                        class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-[#746587] transition-opacity duration-300 bg-[#F8FBA6] rounded-lg shadow-xs opacity-0 tooltip">
                        Clique para enviar a frase que será traduzida
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>

                </form>
            </div>
        </div>

        <?php
        require('footer.php');
        ?>
    </div>

</body>

</html>