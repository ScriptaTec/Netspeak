<?php
require('header.php');
?>

<div class="lg:bg-[url(../imgs/fundoSup.png)] h-screen bg-cover bg-center">

    <header class="flex justify-between p-3">
        <div class="w-20">
            <a href="tradutor.php"><img src="../imgs/logo.png" alt="Logo do site"></a>
        </div>

        <div class="flex gap-2 items-center">
            <div class="flex flex-col items-center group transition-all duration-400">

                <button type="submit" onclick="traduzirPagina('pt')">
                    <img src="../imgs/icones/brasil.png" alt="Brasil" class="h-5 border rounded-full lg:hidden">

                    <img src="../imgs/icones/brasil.png" alt="Brasil" class="h-7 border rounded-full hidden lg:block">

                    <div class="mt-1 h-0.5 w-7 bg-[#746587] rounded-xl hidden group-hover:block"></div>

                </button>
            </div>

            <div class="flex flex-col items-center group transition-all duration-400">

                <button type="submit" onclick="traduzirPagina('es')">
                    <img src="../imgs/icones/espanha.png" alt="espanha" class="h-5 border rounded-full lg:hidden">

                    <img src="../imgs/icones/espanha.png" alt="espanha" class="h-7 border rounded-full hidden lg:block">

                    <div class="mt-1 h-0.5 w-7 bg-[#746587] rounded-xl hidden group-hover:block"></div>

                </button>
            </div>

            <div class="flex flex-col items-center group transition-all duration-400">

                <button type="submit" onclick="traduzirPagina('en')">
                    <img src="../imgs/icones/estadosUnidos.png" alt="Estados Unidos"
                        class="h-5 border rounded-full lg:hidden">

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
        <?php include 'menu.php'; ?>
    </header>

    <div class="mt-2 text-center">
        <h1 class="text-left lg:text-8xl text-[#F8FBA6] lg:ml-10 hidden lg:block"
            style="text-shadow: 7px 7px 0px #413E45; -webkit-text-stroke-width: 2.5px; -webkit-text-stroke-color: #413E45;">
            Tire suas <br> dúvidas aqui! </h1>

        <h1 class="text-5xl text-[#F8FBA6] mr-5 lg:hidden"
            style="text-shadow: 2px 2px 0px #413E45; -webkit-text-stroke-width: 1.5px; -webkit-text-stroke-color: #413E45;">
            Tire suas <br> dúvidas aqui! </h1>

    </div>

    <div class="flex flex-col justify-center items-center lg:ml-20 lg:justify-start lg:fixed">
        <div class="flex flex-col items-center mt-3 lg:flex-row lg:gap-16 lg:mt-5">
            <button type="button" onclick="abrirModal('modal-tutorial-1')">
                <img src="../imgs/icones/video.png" alt="Video do tutorial"
                    class="w-64 transition duration-700 hover:scale-105 ease-in-out">
                <h4 class="text-[#413E45] text-xl text-shadow-sm ml-2">Como utilizar a ferramenta?</h4>
            </button>

            <button type="button" onclick="abrirModal('modal-tutorial-2')">
                <img src="../imgs/icones/video.png" alt="Video do tutorial"
                    class="w-64 transition duration-700 hover:scale-105 ease-in-out">
                <h4 class="text-[#413E45] text-xl text-shadow-sm ml-2">Como adicionar seus dados?</h4>
            </button>
        </div>

        <div class="flex flex-col items-center lg:flex-row lg:gap-16 lg:mt-5">
            <button type="button" onclick="abrirModal('modal-tutorial-3')">
                <img src="../imgs/icones/video.png" alt="Video do tutorial"
                    class="w-64 transition duration-700 hover:scale-105 ease-in-out">
                <h4 class="text-[#413E45] text-xl text-shadow-sm ml-2">Como avaliar a ferramenta?</h4>
            </button>

            <button type="button" onclick="abrirModal('modal-tutorial-4')">
                <img src="../imgs/icones/video.png" alt="Video do tutorial"
                    class="w-64 transition duration-700 hover:scale-105 ease-in-out">
                <h4 class="text-[#413E45] text-xl text-shadow-sm ml-2">Como redefinir minha senha?</h4>
            </button>
        </div>
    </div>
</div>

<div id="modal-tutorial-1"
    class="modal-fundo hidden fixed inset-0 z-30 flex justify-center text-center items-center bg-gray-200/50 px-3 lg:p-0">
    <div class="relative flex ">
        <button style="cursor: pointer;" type="button" class="btn-fechar-modal group"
            data-modal-target="modal-tutorial-1">
            <img src="../imgs/icones/close.png" alt="ícone de sair"
                class="absolute -top-5 -right-5 opacity-100 group-hover:opacity-0 transition duration-900">
            <img src="../imgs/icones/closeHover.png" alt="ícone de sair hover"
                class="absolute -top-5 -right-5 opacity-0 group-hover:opacity-100 transition duration-900">
        </button>

        <div
            class="flex flex-col justify-center items-center bg-white text-2xl py-5 px-10 rounded-4xl border-2 border-gray-800 shadow-xl hover:border-black transition duration-900">

            <video class="w-full max-w-3xl rounded-lg" controls loop muted>
                <source src="../imgs/videos/ferramenta.webm" type="video/webm">
                Seu navegador não suporta vídeos .webm.
            </video>
        </div>
    </div>
</div>

<div id="modal-tutorial-2"
    class="modal-fundo hidden fixed inset-0 z-30 flex justify-center text-center items-center bg-gray-200/50 px-3 lg:p-0">
    <div class="relative flex ">
        <button style="cursor: pointer;" type="button" class="btn-fechar-modal group"
            data-modal-target="modal-tutorial-2">
            <img src="../imgs/icones/close.png" alt="ícone de sair"
                class="absolute -top-5 -right-5 opacity-100 group-hover:opacity-0 transition duration-900">
            <img src="../imgs/icones/closeHover.png" alt="ícone de sair hover"
                class="absolute -top-5 -right-5 opacity-0 group-hover:opacity-100 transition duration-900">
        </button>

        <div
            class="flex flex-col justify-center items-center bg-white text-2xl py-5 px-10 rounded-4xl border-2 border-gray-800 shadow-xl hover:border-black transition duration-900">

            <video class="w-full max-w-3xl rounded-lg" controls loop muted>
                <source src="../imgs/videos/adicionar.webm" type="video/webm">
                Seu navegador não suporta vídeos .webm.
            </video>
        </div>
    </div>
</div>

<div id="modal-tutorial-3"
    class="modal-fundo hidden fixed inset-0 z-30 flex justify-center text-center items-center bg-gray-200/50 px-3 lg:p-0">
    <div class="relative flex ">
        <button style="cursor: pointer;" type="button" class="btn-fechar-modal group"
            data-modal-target="modal-tutorial-3">
            <img src="../imgs/icones/close.png" alt="ícone de sair"
                class="absolute -top-5 -right-5 opacity-100 group-hover:opacity-0 transition duration-900">
            <img src="../imgs/icones/closeHover.png" alt="ícone de sair hover"
                class="absolute -top-5 -right-5 opacity-0 group-hover:opacity-100 transition duration-900">
        </button>

        <div
            class="flex flex-col justify-center items-center bg-white text-2xl py-5 px-10 rounded-4xl border-2 border-gray-800 shadow-xl hover:border-black transition duration-900">

            <video class="w-full max-w-3xl rounded-lg" controls loop muted>
                <source src="../imgs/videos/avaliar.webm" type="video/webm">
                Seu navegador não suporta vídeos .webm.
            </video>
        </div>
    </div>
</div>

<div id="modal-tutorial-4"
    class="modal-fundo hidden fixed inset-0 z-30 flex justify-center text-center items-center bg-gray-200/50 px-3 lg:p-0">
    <div class="relative flex ">
        <button style="cursor: pointer;" type="button" class="btn-fechar-modal group"
            data-modal-target="modal-tutorial-4">
            <img src="../imgs/icones/close.png" alt="ícone de sair"
                class="absolute -top-5 -right-5 opacity-100 group-hover:opacity-0 transition duration-900">
            <img src="../imgs/icones/closeHover.png" alt="ícone de sair hover"
                class="absolute -top-5 -right-5 opacity-0 group-hover:opacity-100 transition duration-900">
        </button>

        <div
            class="flex flex-col justify-center items-center bg-white text-2xl py-5 px-10 rounded-4xl border-2 border-gray-800 shadow-xl hover:border-black transition duration-900">

            <video class="w-full max-w-3xl rounded-lg" controls loop muted>
                <source src="../imgs/videos/senha.webm" type="video/webm">
                Seu navegador não suporta vídeos .webm.
            </video>
        </div>
    </div>
</div>


<script>
    // --- Funções para controlar os Modais ---

    /**
     * Abre um modal específico pelo seu ID
     * @param {string} modalId O ID do modal a ser aberto (ex: 'modal-tutorial-1')
     */
    function abrirModal(modalId) {
        const modal = document.getElementById(modalId);
        if (modal) {
            modal.classList.remove('hidden'); // Mostra o modal

            // Encontra o vídeo dentro deste modal e tenta dar play
            const video = modal.querySelector('video');
            if (video) {
                video.muted = false; // Tira o mudo (o 'muted' no HTML é para autoplay)
                video.currentTime = 0; // Sempre começa o vídeo do início
                video.play();
            }
        }
    }

    /**
     * Fecha um modal específico pelo seu ID
     * @param {string} modalId O ID do modal a ser fechado
     */
    function fecharModal(modalId) {
        const modal = document.getElementById(modalId);
        if (modal) {
            modal.classList.add('hidden'); // Esconde o modal

            // Encontra o vídeo e pausa (IMPORTANTE para não ficar tocando no fundo)
            const video = modal.querySelector('video');
            if (video) {
                video.pause();
            }
        }
    }

    // --- Adicionar Eventos (Listeners) ---
    // Isso garante que o código só rode depois que a página carregou
    document.addEventListener('DOMContentLoaded', function () {

        // 1. Adiciona evento para todos os botões de FECHAR (o 'X')
        const botoesFechar = document.querySelectorAll('.btn-fechar-modal');
        botoesFechar.forEach(button => {
            // Pega o ID do modal que este botão deve fechar (do atributo 'data-modal-target')
            const modalId = button.getAttribute('data-modal-target');
            button.addEventListener('click', () => {
                fecharModal(modalId);
            });
        });

        // 2. Adiciona evento para fechar ao clicar FORA do vídeo (no fundo cinza)
        const fundosModais = document.querySelectorAll('.modal-fundo');
        fundosModais.forEach(modal => {
            modal.addEventListener('click', (event) => {
                // Se o clique foi no próprio fundo (event.target) e não nos 'filhos' (o card do vídeo)
                if (event.target === modal) {
                    fecharModal(modal.id);
                }
            });
        });

        // 3. (Opcional) Fechar com a tecla 'Escape'
        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape') {
                // Fecha todos os modais que estiverem abertos
                fundosModais.forEach(modal => {
                    if (!modal.classList.contains('hidden')) {
                        fecharModal(modal.id);
                    }
                });
            }
        });
    });
</script>

<?php
require('footer.php');
?>