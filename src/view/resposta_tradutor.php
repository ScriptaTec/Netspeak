<?php
require_once '../controller/geminiController.php';

$respostaDaApi = '';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['frase'])) {
    $fraseUsuario = $_POST['frase'];
    $respostaDaApi = processarFraseComGemini($fraseUsuario);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>respostaTradutor</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="../fonts/fonts.css">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
</head>

<body>
    <div class="jersey bg-[url(../imgs/respostaTradutor.png)] h-screen bg-cover bg-center">

        <!--Cabeçalho-->
        <header class="flex">

            <button class="absolute top-2 right-3" type="button" data-drawer-target="drawer-navigation"
                data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
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

        <div class="flex justify-center items-center mt-20">

            <div class="h-86 w-120 py-5 px-20 rounded-3xl border-2 border-white bg-[#9E8CBE] relative"
                style="box-shadow: -10px 10px 0px #746587">

                <!--Decoração no fundo do campo de traduções-->
                <div class="absolute top-26 right-24 h-3 w-3 bg-[#AE99D2]"></div>
                <div class="absolute top-20 right-10 h-5 w-10 bg-[#AE99D2]"></div>

                <div class="absolute bottom-40 left-0 h-10 w-10 bg-[#AE99D2]"></div>
                <div class="absolute bottom-10 left-20 h-3 w-5 bg-[#AE99D2]"></div>
                <div class="absolute bottom-0 right-40 h-5 w-24 bg-[#AE99D2]"></div>

                <!--Selecionar tipo de conversão-->
                <div class="flex justify-center">
                    <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover"
                        class="text-[#746587] bg-white focus:outline-none font-medium rounded-sm text-xl px-5 py-2.5 text-center inline-flex items-center"
                        style="box-shadow: -6px 6px 0px #AE99D2" type="button">Tipo de conversão

                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                </div>

                <!--Opções-->
                <div id="dropdownHover" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44">
                    <ul class="py-2 text-center text-sm text-[#746587]" aria-labelledby="dropdownHoverButton">
                        <li>
                            <span href="#" class="block px-4 py-2 hover:bg-gray-100">Formal para informal</span>
                        </li>
                        <li>
                            <span href="#" class="block px-4 py-2 hover:bg-gray-100">Informal para formal</span>
                        </li>
                    </ul>
                </div>

                <!--Chamar componente da mensagem e perfil do usuario-->
                <?php
                include('mensagem_tradutor.php');
                ?>
            </div>
        </div>

        <!--Card para enviar a frase-->
        <div class="flex justify-center mt-14">
            <div class="py-3 px-7 rounded-2xl bg-[#746587] text-left transition duration-500 hover:scale-105"
                style="box-shadow: 0px 8px 0px #AE99D2">

                <!--Input para enviar a frase-->
                <form method="post" action="" class="flex items-center gap-3">

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

    </div>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

</body>

</html>