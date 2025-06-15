<?php
session_start();
?>

<script src="../js/pop_ups.js" defer></script>

<!--Alterar dados do usuário-->
<div>
    <h1 class="text-left ml-10 text-3xl">Altere seus dados: </h1>
</div>

<form action="../controller/controller_perfil.php" method="post" id="editarDadosForm" class="flex justify-center items-center flex-col mt-5">

    <div class="flex gap-20 ml-5">
        <div class="relative flex-col">
            <input type="email" name="email" required placeholder="Email..."
                value="<?= $_SESSION['user']['email'] ?? '' ?>"
                class="w-60 p-2 text-gray-600 bg-white border-2 border-black hover:border-black focus:outline-none transition duration-500 hover:scale-105"
                style="box-shadow: -4px 4px 1px rgb(100, 100, 100);">
            <img src="../imgs/icones/editar.png" alt="ícone" class="absolute top-6 right-3 transform -translate-y-1/2">

            <!--Salvar os dados editados-->
            <div>
                <button type="submit" name="editar_dados_basicos" data-target="editarDados" value="editar"
                    class="openModalBtn mt-3 px-4 py-1 bg-black text-white transition duration-700 hover:scale-105 hover:bg-amber-300 hover:text-black">
                    <span>Editar</span>
                </button>

                <!--Pop-up ao salvar os dados editados do perfil-->
                <div id="editarDados" class="hidden fixed inset-0 z-50 flex justify-center items-center bg-gray-200/50">
                    <div
                        class="bg-white py-5 px-10 rounded-4xl border-2 border-gray-800 shadow-xl hover:scale-105 hover:border-black transition duration-900">
                        <h1 class="text-3xl">Seus dados foram editados com sucesso!</h1>

                        <div class="flex justify-center gap-5 mt-5">
                            <button type="button"
                                class="closeModalBtn
                                py-2 px-7 rounded-3xl bg-black text-white border-2 hover:bg-yellow-200 hover:text-black transition duration-700">
                                ok
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="relative">
            <input type="text" name="nome" required placeholder="Nome..." value="<?= $_SESSION['user']['nome'] ?? '' ?>"
                class="w-60 p-2 text-gray-600 bg-white border-2 border-black hover:border-black focus:outline-none transition duration-500 hover:scale-105"
                style="box-shadow: -4px 4px 1px rgb(100, 100, 100);">
            <img src="../imgs/icones/editar.png" alt="ícone" class="absolute top-6 right-3 transform -translate-y-1/2">
        </div>
    </div>
</form>

<!--Ícone de redefinir senha-->
<div class="mt-10 ml-10">
        <a href="redefinir_senha.php" class="group inline-block">
        <button type="button">
            <img src="../imgs/icones/redefinir.png" alt="redefinir senha"
                class="absolute opacity-100 group-hover:opacity-0 transition-opacity duration-500 ease-in-out">
            <img src="../imgs/icones/redefinirHover.png" alt="redefinir senha"
                class="absolute opacity-0 group-hover:opacity-100 transition-opacity duration-500 ease-in-out">
        </button>

        <div class="ml-20">
            <h2 class="text-3xl group-hover:text-black">Redefinir senha</h2>
        </div>
    </a>
</div>