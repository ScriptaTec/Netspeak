<?php
require_once '../controller/geminiController.php';

$respostaDaApi = '';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['frase'])) {
    $fraseUsuario = $_POST['frase'];
    $tipoTraducao = $_POST['tipoTraducao'];
    $respostaDaApi = processarFraseComGemini($fraseUsuario, $tipoTraducao);
}
?>

<!--Cabeçalho-->
<?php
require('header.php');
?>

<!--Id body é necessário para fechar o modal do tipo de tradução-->
<div id="body" class="lg:bg-[url(../imgs/Tradutor.png)] h-screen bg-cover bg-center">

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

    <form method="post" action="resposta_tradutor.php" id="form">

        <!--Card onde será mostrada as traduções-->
        <div class="pt-12 pb-14 px-12 rounded-3xl border-2 border-white bg-[#9E8CBE] relative lg:mx-48"
            style="box-shadow: -10px 10px 0px #746587">

            <!--Decoração no fundo do campo de traduções-->
            <div class="absolute top-26 right-24 h-3 w-3 bg-[#AE99D2]"></div>
            <div class="absolute top-20 right-10 h-5 w-10 bg-[#AE99D2]"></div>

            <div class="absolute bottom-40 left-0 h-10 w-10 bg-[#AE99D2]"></div>
            <div class="absolute bottom-10 left-20 h-3 w-5 bg-[#AE99D2]"></div>
            <div class="absolute bottom-0 right-40 h-5 w-24 bg-[#AE99D2]"></div>

            <!--Selecionar tipo de conversão-->
            <div class="flex justify-center relative z-10">
                <select name="tipoTraducao" id="tipoTraducao"
                    class="text-center text-[#746587] bg-white focus:outline-none font-xl rounded-sm text-xl "
                    style="box-shadow: -6px 6px 0px #AE99D2">
                    <option value="1">Selecione o tipo de conversão</option>
                    <option value="formal">Formal para informal</option>
                    <option value="informal">Informal para formal</option>
                </select>
            </div>

            <!--Chamar componente da mensagem e ícone do perfil do usuario-->
            <?php
            include('mensagem_tradutor.php');
            ?>
        </div>


        <!--Card para enviar a frase para o resposta_tradutor-->
        <div class="flex justify-center">
            <div class="flex items-center gap-3 mt-7 py-3 px-7 rounded-2xl bg-[#746587] text-left transition duration-500 hover:scale-105"
                style="box-shadow: 0px 8px 0px #AE99D2">

                <!--Atalho para emojis-->
                <button data-tooltip-target="tooltip-default-emoji">
                    <img src="../imgs/icones/emojiBranco.png" alt="Abrir atalho para emojis" class="w-8">
                </button>

                <!--Descrição do botão de atalho de emojis-->
                <div id="tooltip-default-emoji" role="tooltip"
                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-[#746587] transition-opacity duration-300 bg-[#F8FBA6] rounded-lg shadow-xs opacity-0 tooltip">
                    Atalho de emojis
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>

                <!--Input para enviar a frase-->
                <input type="text" name="frase" id="input" required placeholder="Escreva aqui..."
                    class="py-2 px-3 rounded-xl bg-white text-gray-500 text-xl focus:outline-none focus:border-0 hover:border-0 focus:shadow-none focus:ring-black hover:text-[#543A82] transition-all duration-700 lg:w-120">

                <!--Botão para enviar a frase-->
                <button type="submit" class="group relative w-8 h-8" data-tooltip-target="tooltip-default-enviar">
                    <img src="../imgs/icones/enviar.png" alt="Ícone de enviar frase para ser traduzida"
                        class="absolute inset-0 group-hover:opacity-0 transition-opacity duration-500">

                    <img src="../imgs/icones/enviarHover.png" alt="Ícone de enviar frase para ser traduzida"
                        class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                </button>

                <!--Descrição do botão de enviar-->
                <div id="tooltip-default-enviar" role="tooltip"
                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-[#746587] transition-opacity duration-300 bg-[#F8FBA6] rounded-lg shadow-xs opacity-0 tooltip">
                    Enviar a frase que será traduzida
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
            </div>
        </div>
    </form>
</div>

<!--Icone de loading-->
<div id="carregando" class="hidden fixed inset-0 flex items-center justify-center bg-gray-50/50 z-[9999]">
    <img src="../imgs/icones/carregando.gif" alt="Carregando" class="w-50">
</div>

<script> 
    const form = document.getElementById("form");
    const carregando = document.getElementById("carregando");

    form.addEventListener('submit', function () {
        carregando.classList.remove("hidden")
    })
</script>

<!--Rodapé-->
<?php
require('footer.php');
?>