<?php
require('../controller/verifica_sessao.php');
require_once '../controller/geminiController.php';

$respostaDaApi = '';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['frase'])) {
    $fraseUsuario = $_POST['frase'];
    $respostaDaApi = processarFraseComGemini($fraseUsuario, "formal");
}
?>

<!--Cabeçalho-->
<?php
require('header.php');
?>

<div class="lg:bg-[url(../imgs/fundo.png)] h-screen bg-cover bg-center">

    <!--Cabeçalho-->
    <header class="flex justify-between p-3">
        <div class="w-20">
            <a href="tradutor.php"><img src="../imgs/logo.png" alt="Logo do site"></a>
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

        <!--Importar o menu de navegação rápida-->
        <?php include 'menu.php'; ?>
    </header>

    <div class="flex justify-center m-2">
        <div class="text-center text-6xl lg:text-transparent">
            <h1>Digite uma frase no campo abaixo</h1>
        </div>
    </div>

    <!--Tutorial para usar a ferramenta-->
    <div
        class="mx-7 text-lg text-[#75678E] font-bold underline underline-offset-4 decoration-2 decoration-[#75678E] hover:text-[#543A82] hover:decoration-[#543A82] transition duration-400 lg:ml-90 lg:mt-64">
        <a href="tutoriais.php">Precisa de ajuda?</a>
    </div>


    <!--Card para enviar a frase-->
    <div class="flex justify-center mt-7">
        <div class="py-3 px-7 rounded-2xl bg-[#746587] text-left" style="box-shadow: 0px 8px 0px #AE99D2">

            <!--Formulário para enviar para o resposta_tradutor-->
            <form method="post" action="resposta_tradutor.php" id="form" class="flex items-center gap-3">
                <input type="hidden" name="tipoTraducao" value="formal">

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
                <input type="text" name="frase" required placeholder="Aqui..."
                    class="py-2 px-3 rounded-xl bg-white text-gray-500 text-xl focus:outline-none focus:border-0 hover:border-0 focus:shadow-none focus:ring-black hover:text-[#543A82] transition-all duration-700 lg:w-120">

                <!--Botão para enviar a frase-->
                <button type="submit" onclick="mostrarModalFiltro()" class="group relative w-8 h-8"
                    data-tooltip-target="tooltip-default-enviar">
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

                <!--Selecionar o tipo de tradução-->
                <div id="modal-filtro"
                    class="hidden fixed inset-0 z-50 flex justify-center items-center bg-gray-200/50">
                    <div
                        class="flex flex-col justify-center items-center bg-white py-5 px-10 rounded-4xl border-2 border-gray-800 shadow-xl hover:border-black transition duration-900">
                        <h1 class="text-5xl">Selecione o tipo de tradução</h1>

                        <div class="flex gap-2 items-center text-2xl">
                            <input type="radio" name="tipo" value="formal" required
                                class="text-[#746587] rounded-sm border-black focus:ring-white">

                            <spam>Informal para formal</spam>
                        </div>

                        <div class="flex gap-2 items-center text-2xl">
                            <input type="radio" name="tipo" value="informal" required
                                class="text-[#746587] rounded-sm border-black focus:ring-white">
                            <spam>Formal para informal</spam>
                        </div>

                        <button type="button" id="confirmar"
                            class="
                    mt-5 py-2 px-7 rounded-3xl bg-black text-white border-2 hover:bg-yellow-200 hover:text-black transition duration-700">
                            Traduzir frase
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<!--Icone de loading-->
<div id="carregando" class="hidden fixed inset-0 flex items-center justify-center bg-gray-50/50 z-[9999]">
    <img src="../imgs/icones/carregando.gif" alt="Carregando" class="w-50">
</div>

<script>
    const form = document.getElementById("form");
    const carregando = document.getElementById("carregando");
    const modalFiltro = document.getElementById("modal-filtro");
    const confirmarFiltro = document.getElementById("confirmar");

    function mostrarModalFiltro() {
        event.preventDefault();
        modalFiltro.classList.remove("hidden");

        //Botões dentro do modal
        confirmarFiltro.addEventListener("click", () => {
            form.submit(); // Envia o formulário de Filtro 
        });
    }

    form.addEventListener('submit', function () {
        carregando.classList.remove("hidden")
    })
</script>

<!--Rodapé-->
<?php
require('footer.php');
?>