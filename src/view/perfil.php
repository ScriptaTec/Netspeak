<?php
require "../controller/controller_perfil.php";

if (!isset($_SESSION['user'])) {
    echo "<script>alert('Usuário não logado.'); location.href = 'cadastro.php';</script>";
    exit();
}
?>

<!--Cabeçalho-->
<?php
require('header.php');
?>

<div class="bg-stone-100 py-1">

    <!--Cabeçalho-->
    <header>
        <div class="w-30 mt-2 absolute top-0 left-5 transition duration-500 hover:scale-105">
            <a href="" class=""><img src="../imgs/logo.png" alt=""></a>
        </div>

        <div class="absolute top-0 right-0 m-5 gap-2 flex">
            <a href="tradutor.php"
                class="mt-1 text-2xl text-black transition duration-500 hover:text-yellow-300 inline-block">Home</a>

            <!--Ícone de sair da conta-->
            <form method="POST" action="../controller/controller_logout.php"
                class="-mt-7 mr-5 flex justify-center group">

                <!--Botão de sair da conta-->
                <button type="button" name="" value="" data-modal-target="popup-logout" data-modal-toggle="popup-logout">
                    <img src="../imgs/icones/exit.png" alt="sair da conta"
                        class="absolute opacity-100 group-hover:opacity-0 transition-opacity duration-500 ease-in-out">
                    <img src="../imgs/icones/exitHover.png" alt="sair da conta"
                        class="absolute opacity-0 group-hover:opacity-100 transition-opacity duration-500 ease-in-out">
                </button>
            </form>

            <!--Pop-up de confirmação para sair da conta-->
            <div id="popup-logout" tabindex="-1"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                        <button type="button"
                            class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="popup-logout">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Fechar pop-up</span>
                        </button>
                        <div class="p-4 md:p-5 text-center">
                            <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Você deseja sair da
                                sua conta?</h3>

                            <!--Botão de confirmação-->
                            <button data-modal-hide="popup-modal" type="button"
                                class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                Sim
                            </button>

                            <!--Botão de cancelamento-->
                            <button data-modal-hide="popup-modal" type="button"
                                class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                Não</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="flex justify-center items-center gap-5 m-10">

        <!--Mudar foto de perfil do usuário-->
        <div class="relative z-10">
            <!--Foto de perfil do usuário-->
            <img src="../imgs/imgs_perfil/perfil1.png" alt="foto de perfil">

            <!--Ícone de mudar foto de perfil do usuário-->
            <button type="button">
                <img src="../imgs/icones/editarFoto.png" alt="mudar foto de perfil"
                    class="h-12 absolute top-3 right-2 opacity-100 group-hover:opacity-0 transition-opacity duration-900">
                <img src="../imgs/icones/editarHover.png" alt="mudar foto de perfil"
                    class="h-14 absolute top-2 right-1 opacity-0 group-hover:opacity-100 transition-opacity duration-900">
            </button>
        </div>

        <!--Dados do cadastro do usuário-->
        <div class="flex-col">
            <h3 class="text-sm -mb-4 ml-3">Email:</h3>
            <input type="email" value="<?= $_SESSION['user']['email'] ?? '' ?>" disabled
                class="bg-white w-46 p-2 mt-3 border-2 border-black rounded-4xl rounded-tl-2xl rounded-bl-none"
                style="box-shadow: 2px 2px 0px;">

            <h3 class="text-sm mt-2 -mb-4 ml-3">Nome:</h3>
            <input type="text" value="<?= $_SESSION['user']['nome'] ?? '' ?>" disabled
                class="bg-white w-40 p-2 mt-3 border-2 border-black rounded-4xl rounded-tl-2xl rounded-bl-none"
                style="box-shadow: 2px 2px 1px;">

            <h3 class="text-sm mt-2 -mb-4 ml-3">Nascimento:</h3>
            <input type="date" value="<?= $_SESSION['user']['data_nascimento'] ?? '' ?>" disabled
                class="bg-white w-30 p-2 mt-3 border-2 border-black rounded-4xl rounded-tl-2xl rounded-bl-none"
                style="box-shadow: 2px 2px 1px;">
        </div>
    </div>
</div>

<!-- Botões para abas de navegação -->
<section class="mt-2 flex justify-center gap-5">
    <!--Ver os emojis favoritos do usuário -->
    <button id="btn-favoritos" class="text-gray-400 hover:text-black transition duration-700">Favoritos</button>

    <!--Alterar dados do usuário-->
    <button id="btn-alterarDados" class="text-gray-400 hover:text-black transition duration-700">Alterar
        dados</button>

    <!--Personalizar dados do usuário-->
    <button id="btn-personalizar"
        class="border-b-2 border-amber-300 font-bold transition duration-700">Personalizar</button>

    <!--Excluir conta do usuário-->
    <button id="btn-excluirConta" class="text-gray-400 hover:text-black transition duration-700">Excluir
        conta</button>
</section>

<!-- Favoritos -->
<section id="favoritos" class="hidden">
    <div class="flex flex-col justify-center items-center mt-10">
        <h1 class="text-center text-5xl">Veja seus emojis favoritos:</h1>

        <div class="flex gap-10 mt-5">
            <!--🤔🫡😗😍🤓🤨🤪🙃😆-->
            <span style="box-shadow: -3px 3px 0px black"
                class="bg-gray-50 px-5 py-4 border rounded-3xl text-7xl hover:scale-105 transition duration-200 ease-in-out">🤔</span>
            <span style="box-shadow: -3px 3px 0px black"
                class="bg-gray-50 px-5 py-4 border rounded-3xl text-7xl hover:scale-105 transition duration-200 ease-in-out">😗</span>
            <span style="box-shadow: -3px 3px 0px black"
                class="bg-gray-50 px-5 py-4 border rounded-3xl text-7xl hover:scale-105 transition duration-200 ease-in-out">🤪</span>
            <span style="box-shadow: -3px 3px 0px black"
                class="bg-gray-50 px-5 py-4 border rounded-3xl text-7xl hover:scale-105 transition duration-200 ease-in-out">🙃</span>
            <span style="box-shadow: -3px 3px 0px black"
                class="bg-gray-50 px-5 py-4 border rounded-3xl text-7xl hover:scale-105 transition duration-200 ease-in-out">🤗</span>
        </div>

        <div class="flex gap-10 mt-10">
            <!--🤔🫡😗😍🤓🤨🤪🙃😆-->
            <span style="box-shadow: -3px 3px 0px black"
                class="bg-gray-50 px-5 py-4 border rounded-3xl text-7xl hover:scale-105 transition duration-200 ease-in-out">🫡</span>
            <span style="box-shadow: -3px 3px 0px black"
                class="bg-gray-50 px-5 py-4 border rounded-3xl text-7xl hover:scale-105 transition duration-200 ease-in-out">😍</span>
            <span style="box-shadow: -3px 3px 0px black"
                class="bg-gray-50 px-5 py-4 border rounded-3xl text-7xl hover:scale-105 transition duration-200 ease-in-out">😭</span>
            <span style="box-shadow: -3px 3px 0px black"
                class="bg-gray-50 px-5 py-4 border rounded-3xl text-7xl hover:scale-105 transition duration-200 ease-in-out">😻</span>
            <span style="box-shadow: -3px 3px 0px black"
                class="bg-gray-50 px-5 py-4 border rounded-3xl text-7xl hover:scale-105 transition duration-200 ease-in-out">❤️</span>
        </div>
    </div>
</section>
<!-- Fim favoritos -->



<!-- Alterar dados do usuário -->
<section id="alterarDados" class="hidden">
    <div class="flex flex-col justify-center items-center mt-10">

        <h1 class="text-3xl">Altere seus dados: </h1>

        <form action="../controller/controller_perfil.php" method="post">

            <div class="flex gap-10 mt-5">
                <input type="email" name="email" required placeholder="Email..."
                    value="<?= $_SESSION['user']['email'] ?? '' ?>"
                    class="w-60 p-2 text-gray-600 bg-white border-2 border-black hover:border-black focus:outline-none transition duration-500 hover:scale-105"
                    style="box-shadow: -4px 4px 1px rgb(100, 100, 100);">

                <input type="text" name="nome" required placeholder="Nome..."
                    value="<?= $_SESSION['user']['nome'] ?? '' ?>"
                    class="w-60 p-2 text-gray-600 bg-white border-2 border-black hover:border-black focus:outline-none transition duration-500 hover:scale-105"
                    style="box-shadow: -4px 4px 1px rgb(100, 100, 100);">
            </div>

            <!--Salvar os dados editados-->
            <button type="submit" name="editar_dados_basicos" value="editar" data-modal-target="popup-alterar"
                data-modal-toggle="popup-alterar"
                class="mt-3 px-4 py-1 bg-black text-white transition duration-700 hover:scale-105 hover:bg-amber-300 hover:text-black">
                <span>Editar</span>
            </button>

            <!--Pop-up de confirmação de alteração de dados-->
            <div id="popup-alterar" tabindex="-1"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                        <button type="button"
                            class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="popup-alterar">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Fechar pop-up</span>
                        </button>
                        <div class="p-4 md:p-5 text-center">
                            <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Você deseja alterar
                                seus dados?</h3>

                            <!--Botão de confirmação-->
                            <button data-modal-hide="popup-modal" type="button"
                                class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                Sim
                            </button>

                            <!--Botão de cancelamento-->
                            <button data-modal-hide="popup-modal" type="button"
                                class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                Não</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <!--Ícone de redefinir senha-->
        <div class="mt-10 ml-10 mb-10">
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
    </div>
</section>
<!-- Fim alterar dados do usuário -->



<!-- Personalizar dados do usuário -->
<section id="personalizar" class="">
    <div class="flex justify-center mt-10">
        <form action="../controller/controller_perfil.php" method="POST">
            <div
                class="mt-5 px-10 py-4 bg-stone-50 rounded-4xl border-2 border-gray-200 group hover:border-black transition duration-700">

                <div>
                    <h1 class="text-left text-3xl group-hover:text-amber-300 transition duration-700">Adicione dados:
                    </h1>
                </div>

                <div class="flex gap-5 mt-5">
                    <label for="nome_completo" class="text-2xl">Nome completo: </label>

                    <input type="text" name="nome_completo" required placeholder="Fulano da Silva..."
                        value="<?= $_SESSION['user']['nome_completo'] ?? '' ?>"
                        class="w-70 px-3 border-b-2 border-black text-gray-600 focus:outline-none transition duration-900 hover:bg-yellow-200 hover:border-none hover:text-black hover:rounded-xl">
                </div>
                <br>

                <div class="flex gap-5">
                    <label for="email_secundario" class="text-2xl">Email secundário: </label>

                    <input type="email" name="email_secundario" required placeholder="@gmail.com"
                        value="<?= $_SESSION['user']['email_secundario'] ?? '' ?>"
                        class="-ml-3 w-70 px-3 border-b-2 border-black text-gray-600 focus:outline-none transition duration-900 hover:bg-yellow-200 hover:border-none hover:text-black hover:rounded-xl">
                </div>
                <br>

                <div class="flex gap-5">
                    <label for="genero" class="text-2xl">Gênero: </label>

                    <?php $genero = $_SESSION['user']['genero'] ?? ''; ?>

                    <input type="radio" name="genero" value="feminino" <?= $genero === 'feminino' ? 'checked' : '' ?>
                        class="appearance-none mt-2 w-4 h-4 border-2 border-gray-400 rounded-full checked:border-amber-300 checked:bg-amber-300">
                    <label for="feminino" class="-ml-3 mr-5 mt-1">Feminino</label>

                    <input type="radio" name="genero" value="masculino" <?= $genero === 'masculino' ? 'checked' : '' ?>
                        class="appearance-none mt-2 w-4 h-4 border-2 border-gray-400 rounded-full checked:border-amber-300 checked:bg-amber-300">
                    <label for="masculino" class="-ml-3 mr-5 mt-1">Masculino</label>

                    <input type="radio" name="genero" value="outro" <?= $genero === 'outro' ? 'checked' : '' ?>
                        class="appearance-none mt-2 w-4 h-4 border-2 border-gray-400 rounded-full checked:border-amber-300 checked:bg-amber-300">
                    <label for="outro" class="-ml-3 mr-5 mt-1">Outro</label>
                </div>

                <div class="flex gap-5 mt-3">
                    <div class="flex flex-col text-2xl">
                        <label for="grau_formacao">Grau de</label>
                        <label for="grau_formacao" class="-mt-3">formação: </label>
                        <?php $formacao = $_SESSION['user']['grau_formacao'] ?? ''; ?>
                    </div>

                    <input type="radio" name="grau_formacao" value="1" <?= $formacao === '1' ? 'checked' : '' ?>
                        class="appearance-none mt-4 w-4 h-4 border-2 border-gray-400 rounded-full checked:border-amber-300 checked:bg-amber-300">
                    <div class="flex flex-col -ml-3 mt-2">
                        <label for="em-incompleto">Ensino Médio</label>
                        <label for="em-incompleto" class="-mt-2">incompleto</label>
                    </div>

                    <input type="radio" name="grau_formacao" value="2" <?= $formacao === '2' ? 'checked' : '' ?>
                        class="appearance-none mt-4 w-4 h-4 border-2 border-gray-400 rounded-full checked:border-amber-300 checked:bg-amber-300">
                    <div class="flex flex-col -ml-3 mt-2">
                        <label for="em-incompleto">Ensino Médio</label>
                        <label for="em-incompleto" class="-mt-2">completo</label>
                    </div>

                    <input type="radio" name="grau_formacao" value="3" <?= $formacao === '3' ? 'checked' : '' ?>
                        class="appearance-none mt-4 w-4 h-4 border-2 border-gray-400 rounded-full checked:border-amber-300 checked:bg-amber-300">
                    <label for="graduacao" class="-ml-3 mt-3">Graduação</label>
                </div>

                <div class="flex gap-5 mt-3">
                    <div class="flex flex-col text-2xl">
                        <label for="nivel">Nível de dificuldade</label>
                        <label for="nivel" class="-mt-3">com a tecnologia: </label>
                        <?php $dificuldade = $_SESSION['user']['dificuldade_tecnologia'] ?? ''; ?>
                    </div>

                    <input type="radio" name="dificuldade_tecnologia" value="1" <?= $dificuldade === '1' ? 'checked' : '' ?>
                        class="appearance-none mt-4 w-4 h-4 border-2 border-gray-400 rounded-full checked:border-amber-300 checked:bg-amber-300">
                    <label for="alta" class="-ml-3 mt-3">Alta</label>

                    <input type="radio" name="dificuldade_tecnologia" value="2" <?= $dificuldade === '2' ? 'checked' : '' ?>
                        class="appearance-none mt-4 w-4 h-4 border-2 border-gray-400 rounded-full checked:border-amber-300 checked:bg-amber-300">
                    <label for="media" class="-ml-3 mt-3">Média</label>

                    <input type="radio" name="dificuldade_tecnologia" value="3" <?= $dificuldade === '3' ? 'checked' : '' ?>
                        class="appearance-none mt-4 w-4 h-4 border-2 border-gray-400 rounded-full checked:border-amber-300 checked:bg-amber-300">
                    <label for="baixa" class="-ml-3 mt-3">Baixa</label>
                </div>
            </div>

            <!--Salvar os dados adicionados-->
            <div class="ml-5 mb-10">
                <button type="submit" name="editar_personalizacao" value="editar" data-modal-target="popup-personalizar"
                    data-modal-toggle="popup-personalizar"
                    class="mt-3 px-4 py-1 bg-black text-white transition duration-700 hover:scale-105 hover:bg-amber-300 hover:text-black">
                    <span>Adicionar</span>
                </button>
            </div>

            <!--Pop-up de confirmação para os dados adicionados-->
            <div id="popup-personalizar" tabindex="-1"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                        <button type="button"
                            class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="popup-personalizar">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Fechar pop-up</span>
                        </button>
                        <div class="p-4 md:p-5 text-center">
                            <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Você concordo com
                                nossos termos e políticas para o uso dos seus dados para a nossa pesquisa?</h3>

                            <!--Botão de confirmação-->
                            <button data-modal-hide="popup-modal" type="button"
                                class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                Sim, concordo
                            </button>

                            <!--Botão de cancelamento-->
                            <button data-modal-hide="popup-modal" type="button"
                                class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                Não concordo</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- Fim personalizar dados do usuário -->



<!-- Excluir conta do usuário -->
<section id="excluirConta" class="hidden">
    <div class="flex justify-center items-center mt-10">
        <form method="POST" action="../controller/controller_excluir.php" class="group">

            <!--Botão de excluir a conta-->
            <button type="button" name="" value="" data-modal-target="popup-excluir" data-modal-toggle="popup-excluir">
                <img src="../imgs/icones/excluir.png" alt="sair da conta"
                    class="absolute opacity-100 group-hover:opacity-0 transition-opacity duration-500 ease-in-out">
                <img src="../imgs/icones/excluirHover.png" alt="sair da conta"
                    class="absolute opacity-0 group-hover:opacity-100 transition-opacity duration-500 ease-in-out">
            </button>

            <div class="ml-20 mt-3">
                <h2 class="text-2xl group-hover:text-black">Excluir conta</h2>
            </div>

            <!--Pop-up de confirmação para excluir conta-->
            <div id="popup-excluir" tabindex="-1"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
                        <button type="button"
                            class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="popup-excluir">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Fechar pop-up</span>
                        </button>
                        <div class="p-4 md:p-5 text-center">
                            <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Você deseja excluir
                                sua conta?</h3>

                            <!--Botão de confirmação-->
                            <button data-modal-hide="popup-modal" type="button"
                                class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                Sim
                            </button>

                            <!--Botão de cancelamento-->
                            <button data-modal-hide="popup-modal" type="button"
                                class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                Não</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- Fim excluir conta do usuário -->


<!-- Chamar animação de navegação em navegacao.js -->
<script>
    //Necessário para executar a animação apenas quando a página já tiver caarregado 100%
    document.addEventListener("DOMContentLoaded", function () {
        navegacaoPerfil();
    });
</script>


<!--Rodapé-->
<?php
require('footer.php');
?>