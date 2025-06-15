<?php
session_start();
?>

<script src="../js/pop_ups.js" defer></script>

<div class="mt-5 ml-10 flex">

    <!--Ícone de excluir conta-->
    <form method="POST" action="../controller/controller_excluir.php" id="excluirContaForm" class="group">
        <button type="button" class="openModalBtn" data-target="excluirConta">
            <img src="../imgs/icones/excluir.png" alt="sair da conta"
                class="absolute opacity-100 group-hover:opacity-0 transition-opacity duration-500 ease-in-out">
            <img src="../imgs/icones/excluirHover.png" alt="sair da conta"
                class="absolute opacity-0 group-hover:opacity-100 transition-opacity duration-500 ease-in-out">
        </button>

        <div class="ml-20 mt-3">
            <h2 class="text-2xl group-hover:text-black">Excluir conta</h2>
        </div>
    </form>

    <!--Pop-up de excluir conta-->
    <div id="excluirConta" class="hidden fixed inset-0 z-50 flex justify-center items-center bg-gray-200/50">
        <div
            class="bg-white py-5 px-10 rounded-4xl border-2 border-gray-800 shadow-xl hover:scale-105 hover:border-black transition duration-900">
            <h1 class="text-3xl">Você deseja excluir</h1>
            <h2 class="text-3xl text-center -mt-2">sua conta?</h2>

            <div class="flex justify-center gap-5 mt-5">
                <button type="button" id="confirmExcluirConta"
                    class="py-2 px-7 rounded-3xl bg-black text-white border-2 hover:bg-yellow-200 hover:text-black transition duration-700">
                    Sim
                </button>
                <button type="button"
                    class="closeModalBtn
                                py-2 px-7 rounded-3xl bg-black text-white border-2 hover:bg-yellow-200 hover:text-black transition duration-700">
                    Não
                </button>
            </div>
        </div>
    </div>
</div>