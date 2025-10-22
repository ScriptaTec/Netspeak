<?php
require('../controller/verifica_sessao.php');
require_once '../controller/geminiController.php';

$respostaDaApi = '';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['frase'])) {
    $fraseUsuario = $_POST['frase'];
    $respostaDaApi = processarFraseComGemini($fraseUsuario, $tipoTraducao);

    header("Location: ../view/resposta_tradutor.php");
    exit();
}
?>

<!--Cabeçalho-->
<?php
require('header.php');
?>

<div class="lg:bg-[url(../imgs/fundoTradutor.png)] h-screen bg-cover bg-center">

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

                <!--Tradução espanhol-->
                <button type="submit" onclick="traduzirPagina('es')">
                    <!--Icone tela pequena-->
                    <img src="../imgs/icones/espanha.png" alt="espanha" class="h-5 border rounded-full lg:hidden">

                    <!--Icone tela grande-->
                    <img src="../imgs/icones/espanha.png" alt="espanha" class="h-7 border rounded-full hidden lg:block">

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
                    <img src="../imgs/icones/menu.png" alt="ícone menu hover"
                        class="absolute inset-0 w-full h-full opacity-0 group-hover:opacity-100 transition-opacity duration-600 ease-in-out">
                </div>
            </button>
        </div>
        <!--Importar o menu de navegação rápida-->
        <?php include 'menu.php'; ?>
    </header>

    <div class="flex justify-center m-2">
        <div class="text-center">
            <!--Título tela grande-->
            <h1 class="text-left lg:text-8xl text-[#F8FBA6] lg:mr-10 hidden lg:block"
                style="text-shadow: 7px 7px 0px #413E45; -webkit-text-stroke-width: 2.5px; -webkit-text-stroke-color: #413E45;">
                Digite <br> uma frase no <br> campo abaixo</h1>

            <!--Título tela pequena-->
            <h1 class="text-5xl text-[#F8FBA6] mr-5 lg:hidden"
                style="text-shadow: 2px 2px 0px #413E45; -webkit-text-stroke-width: 1.5px; -webkit-text-stroke-color: #413E45;">
                Digite <br> uma frase no <br> campo abaixo</h1>
        </div>
    </div>

    <!--Card para enviar a frase-->
    <div class="flex justify-center mt-4 lg:mt-10">
        <div class="py-3 px-7 rounded-2xl bg-[#746587] text-left" style="box-shadow: 0px 8px 0px #AE99D2">

            <!--Formulário para enviar para o resposta_tradutor-->
            <form method="post" action="../view/resposta_tradutor.php" id="form" class="flex items-center gap-3">
                <input type="hidden" name="tipoTraducao" value="formal">

                <!--Atalho para emojis-->
                <button type="button" id="open-emoji-modal-btn" data-tooltip-target="tooltip-default-emoji">
                    <img src="../imgs/icones/emojiBranco.png" alt="Abrir atalho para emojis" class="w-8">
                </button>

                <!--Descrição do botão de atalho de emojis-->
                <div id="tooltip-default-emoji" role="tooltip"
                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-[#746587] transition-opacity duration-300 bg-[#F8FBA6] rounded-lg shadow-xs opacity-0 tooltip">
                    Atalho de emojis
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>

                <!--Input para enviar a frase-->
                <input type="text" name="frase" required placeholder="Aqui..." id="emoji-display"
                    class="py-2 px-3 rounded-xl bg-white text-xl focus:outline-none focus:border-0 hover:border-0 focus:shadow-none focus:ring-black transition-all duration-700 lg:w-120">

                <!--Botão para enviar a frase-->
                <button type="submit" onclick="mostrarModalFiltro()" data-tooltip-target="tooltip-default-enviar">
                    <img src="../imgs/icones/enviar.png" alt="Ícone de enviar frase para ser traduzida" class="w-8">
                </button>

                <!--Descrição do botão de enviar-->
                <div id="tooltip-default-enviar" role="tooltip"
                    class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-[#746587] transition-opacity duration-300 bg-[#F8FBA6] rounded-lg shadow-xs opacity-0 tooltip">
                    Enviar a frase que será traduzida
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>

                <!--Selecionar o tipo de tradução-->
                <div id="modal-filtro"
                    class="hidden fixed inset-0 z-30 flex justify-center text-center items-center bg-gray-200/50 px-3 lg:p-0">

                    <div class="relative flex ">
                        <!--Fechar pop-up-->
                        <button style="cursor: pointer;" type="button" id="cancelar" class=" group">
                            <img src="../imgs/icones/close.png" alt="ícone de sair do mudar foto de perfil"
                                class="absolute -top-5 -right-5 opacity-100 group-hover:opacity-0 transition duration-900">
                            <img src="../imgs/icones/closeHover.png" alt="ícone de sair do mudar foto de perfil"
                                class="absolute -top-5 -right-5 opacity-0 group-hover:opacity-100 transition duration-900">
                        </button>

                        <div
                            class="flex flex-col justify-center items-center bg-white text-2xl py-5 px-10 rounded-4xl border-2 border-gray-800 shadow-xl hover:border-black transition duration-900">
                            <h1 class="lg:text-5xl">Selecione o tipo de tradução</h1>

                            <div class="flex gap-2 items-center text-2xl">
                                <input type="radio" name="tipoTraducao" value="informal" required
                                    class="text-[#746587] rounded-sm border-black focus:ring-white">

                                <spam>Informal para formal</spam>
                            </div>

                            <div class="flex gap-2 items-center text-2xl">
                                <input type="radio" name="tipoTraducao" value="formal" required
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
                </div>
            </form>
        </div>
    </div>

    <!--Tutorial para usar a ferramenta-->
    <div
        class="lg:ml-98 mt-3 text-lg text-[#75678E] font-bold underline underline-offset-4 decoration-2 decoration-[#75678E] hover:text-[#543A82] hover:decoration-[#543A82] transition duration-400">
        <a href="tutoriais.php" class="ml-5">Precisa de ajuda?</a>
    </div>
</div>


<!--Animação de carregamento-->
<div class="hidden flex justify-center items-center fixed inset-0 bg-gray-200/50 z-50" id="loadingScreen">
    <img src="../imgs/loading.gif" alt="Animação de Carregamento">
</div>

<div id="modal-emojis" class="hidden fixed inset-0 z-50 flex justify-center items-center bg-gray-900/60 p-4">

    <!-- Card do Modal: agora com classes de tamanho e layout -->
    <div id="emoji-modal-card"
        class="bg-white rounded-2xl shadow-xl p-5 relative max-w-md w-full max-h-[90vh] flex flex-col">

        <!-- Cabeçalho e Botão de Fechar -->
        <div class="flex-shrink-0 flex justify-between items-center mb-4">
            <h1 class="text-xl font-semibold text-gray-700">Selecione um Emoji</h1>
            <button id="close-emoji-modal-btn"
                class="text-3xl font-bold text-gray-400 hover:text-gray-800 transition-colors">&times;</button>
        </div>

        <!-- Mensagem de Carregamento -->
        <div id="loading-message" class="text-center text-gray-600 p-8">Carregando emojis...</div>

        <!-- O "Palco" que o Script precisa -->
        <!-- container-fluid é uma classe customizada que adicionamos para a barra de rolagem -->
        <div id="emoji-palette-container" class="hidden flex-grow min-h-0 flex flex-col">
            <!-- Abas de Categoria -->
            <div id="category-tabs" class="flex-shrink-0 flex justify-around border-b border-gray-200 pb-3 mb-3">
                <!-- As abas serão inseridas aqui pelo JS -->
            </div>

            <!-- Área de Conteúdo dos Emojis (com a rolagem) -->
            <div id="emoji-content-area" class="flex-grow min-h-0">
                <!-- As categorias de emojis serão inseridas aqui pelo JS -->
            </div>
        </div>
    </div>
</div>

<script>
    // Espera o documento HTML carregar completamente antes de executar o script
    document.addEventListener('DOMContentLoaded', () => {

        // --- Lógica para o modal de FILTRO DE TRADUÇÃO ---
        const form = document.getElementById("form");
        const modalFiltro = document.getElementById("modal-filtro");
        const confirmarFiltro = document.getElementById("confirmar");
        const cancelarFiltro = document.getElementById("cancelar");

        const loadingScreen = document.getElementById('loadingScreen');

        // A função para mostrar o modal de filtro agora é chamada por um event listener
        const btnEnviarFrase = document.querySelector('button[onclick="mostrarModalFiltro()"]');
        if (btnEnviarFrase) {
            btnEnviarFrase.onclick = null; // Remove o onclick antigo para evitar duplicação
            btnEnviarFrase.addEventListener('click', (event) => {
                event.preventDefault(); // Impede o envio do formulário
                modalFiltro.classList.remove("hidden");
            });
        }

        if (confirmarFiltro) {
            confirmarFiltro.addEventListener("click", () => {
                form.submit(); // Envia o formulário ao clicar em 'confirmar'

                // Exibe a tela de loading
                loadingScreen.classList.remove('hidden');
            })
        }

        if (cancelarFiltro) {
            cancelarFiltro.addEventListener("click", () => {
                modalFiltro.classList.add("hidden");
            });
        }

        // --- Lógica para o modal de EMOJIS  ---
        const emojiModal = document.getElementById('modal-emojis');
        const openEmojiBtn = document.getElementById('open-emoji-modal-btn');
        const closeEmojiBtn = document.getElementById('close-emoji-modal-btn');

        // Evento para ABRIR o modal de emojis
        if (openEmojiBtn) {
            openEmojiBtn.addEventListener('click', () => {
                emojiModal.classList.remove('hidden');
            });
        }

        // Evento para FECHAR o modal de emojis pelo botão 'X'
        if (closeEmojiBtn) {
            closeEmojiBtn.addEventListener('click', () => {
                emojiModal.classList.add('hidden');
            });
        }

        // Evento para FECHAR o modal clicando fora do card (no fundo escuro)
        if (emojiModal) {
            emojiModal.addEventListener('click', (event) => {
                // Verifica se o clique foi diretamente no fundo do modal
                if (event.target === emojiModal) {
                    emojiModal.classList.add('hidden');
                }
            });
        }

        // Evento para FECHAR o modal clicando fora do card (no fundo escuro)
        if (modalFiltro) {
            modalFiltro.addEventListener('click', (event) => {
                // Verifica se o clique foi diretamente no fundo do modal
                if (event.target === modalFiltro) {
                    modalFiltro.classList.add('hidden');
                }
            });
        }
    });
</script>

<script>
    fetch('https://cdnjs.cloudflare.com/ajax/libs/emoji-datasource/15.1.2/emoji.json')
        .then(response => {
            if (!response.ok) throw new Error(`HTTP error! status: ${response.status}`);
            return response.json();
        })
        .then(data => {
            const emojiPaletteContainer = document.getElementById('emoji-palette-container');
            const emojiDisplay = document.getElementById('emoji-display');
            const loadingMessage = document.getElementById('loading-message');
            const categoryTabs = document.getElementById('category-tabs');
            const emojiContentArea = document.getElementById('emoji-content-area');

            if (!emojiPaletteContainer || !emojiDisplay || !loadingMessage || !categoryTabs || !emojiContentArea) {
                console.error("Elementos essenciais para a paleta de emoji não foram encontrados.");
                return;
            }

            loadingMessage.style.display = 'none';
            emojiPaletteContainer.classList.remove('hidden');
            emojiPaletteContainer.classList.add('flex');

            const categoryIcons = {
                'Smileys & Emotion': '😀',
                'People & Body': '👋',
                'Animals & Nature': '🌳',
                'Food & Drink': '🍔',
                'Travel & Places': '🌍',
                'Activities': '⚽',
                'Objects': '💡',
                'Symbols': '❤️',
                'Flags': '🇧🇷',
                'default': '✨'
            };

            const emojisByCategory = data.reduce((acc, emoji) => {
                if (emoji.category === 'Component' || !emoji.category || !emoji.unified) return acc;
                const emojiChar = String.fromCodePoint(...emoji.unified.split('-').map(code => parseInt(code, 16)));
                if (!acc[emoji.category]) acc[emoji.category] = [];
                acc[emoji.category].push({ char: emojiChar, name: emoji.name || 'Emoji' });
                return acc;
            }, {});

            // Define a ordem das categorias
            const categoryOrder = [
                'Smileys & Emotion',
                'People & Body',
                'Animals & Nature',
                'Food & Drink',
                'Travel & Places',
                'Activities',
                'Objects',
                'Symbols',
                'Flags'
            ];

            // Variável para rastrear se a primeira aba já foi ativada
            let firstCategoryProcessed = false;

            // Percorre a lista de categorias na ordem desejada
            categoryOrder.forEach((category) => {
                // Verifica se a categoria existe no JSON de emojis
                if (emojisByCategory[category]) {
                    const categoryId = `category-${category.replace(/[\s&]+/g, '-').toLowerCase()}`;

                    // Cria o item da aba (ícone)
                    const tabItem = document.createElement('div');
                    tabItem.title = category;
                    tabItem.dataset.category = categoryId;
                    tabItem.textContent = categoryIcons[category] || categoryIcons['default'];
                    tabItem.className = 'text-2xl cursor-pointer p-2 rounded-lg transition-all duration-200 opacity-60 hover:scale-110';
                    categoryTabs.appendChild(tabItem);

                    // Cria o conteúdo da categoria (o grid de emojis)
                    const categoryContent = document.createElement('div');
                    categoryContent.id = categoryId;
                    categoryContent.className = 'hidden h-full';

                    const emojiGrid = document.createElement('div');
                    emojiGrid.className = 'h-full w-full max-h-[350px] overflow-y-auto p-1 pr-3 grid grid-cols-[repeat(auto-fill,minmax(40px,1fr))] gap-2 ' +
                        '[&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-purple-300 ' +
                        '[&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-thumb:hover]:bg-purple-400';

                    emojisByCategory[category].forEach(emoji => {
                        const emojiItem = document.createElement('div');
                        emojiItem.title = emoji.name;
                        emojiItem.textContent = emoji.char;
                        emojiItem.className = 'text-2xl text-center cursor-pointer p-1 rounded-lg transition-colors duration-200 hover:bg-gray-100';
                        emojiItem.addEventListener('click', () => {
                            emojiDisplay.value += emoji.char;
                            emojiDisplay.focus();
                        });
                        emojiGrid.appendChild(emojiItem);
                    });

                    categoryContent.appendChild(emojiGrid);
                    emojiContentArea.appendChild(categoryContent);

                    // Ativa a primeira categoria na ordem
                    if (!firstCategoryProcessed) {
                        tabItem.classList.remove('opacity-60');
                        tabItem.classList.add('opacity-100', 'bg-purple-100');
                        categoryContent.classList.remove('hidden');
                        categoryContent.classList.add('block');
                        firstCategoryProcessed = true;
                    }

                    // Adiciona o evento de clique para a aba
                    tabItem.addEventListener('click', () => {
                        categoryTabs.querySelectorAll('div').forEach(tab => {
                            tab.classList.remove('opacity-100', 'bg-purple-100');
                            tab.classList.add('opacity-60');
                        });
                        emojiContentArea.querySelectorAll('div[id^="category-"]').forEach(content => {
                            content.classList.remove('block');
                            content.classList.add('hidden');
                        });

                        tabItem.classList.remove('opacity-60');
                        tabItem.classList.add('opacity-100', 'bg-purple-100');
                        document.getElementById(categoryId).classList.remove('hidden');
                        document.getElementById(categoryId).classList.add('block');
                    });
                }
            });
        })
        .catch(error => {
            console.error('Erro ao carregar dados de emojis:', error);
            const loadingMessage = document.getElementById('loading-message');
            if (loadingMessage) loadingMessage.innerHTML = '<p class="text-red-500">Erro ao carregar emojis.</p>';
        });
</script>


<!--Rodapé-->
<?php
require('footer.php');
?>