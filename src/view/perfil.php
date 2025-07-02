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
            <form method="POST" action="../controller/controller_logout.php" id="form-sair"
                class="-mt-7 mr-5 flex justify-center group">

                <!--Botão de sair da conta-->
                <button type="button" data-modal-text="Você tem certeza que deseja sair da conta?"
                    data-form-target="#form-sair" class="btn-abrir-modal">
                    <img src="../imgs/icones/exit.png" alt="sair da conta"
                        class="absolute opacity-100 group-hover:opacity-0 transition-opacity duration-500 ease-in-out">
                    <img src="../imgs/icones/exitHover.png" alt="sair da conta"
                        class="absolute opacity-0 group-hover:opacity-100 transition-opacity duration-500 ease-in-out">
                </button>
            </form>
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

        <form action="../controller/controller_perfil.php" method="post" id="form-alterar">

            <div class="flex gap-10 mt-5">
                <input type="email" name="email" required placeholder="Email..."
                    value="<?= $_SESSION['user']['email'] ?? '' ?>"
                    class="w-60 p-2 text-gray-600 bg-white border-2 border-black hover:border-black focus:outline-none transition duration-500 hover:scale-105"
                    style="box-shadow: -4px 4px 1px rgb(100, 100, 100);">

                <input type="text" name="nome" required placeholder="Nome..."
                    value="<?= $_SESSION['user']['nome'] ?? '' ?>"
                    class="w-60 p-2 text-gray-600 bg-white border-2 border-black hover:border-black focus:outline-none transition duration-500 hover:scale-105"
                    style="box-shadow: -4px 4px 1px rgb(100, 100, 100);">

                <!--Campo para que funcione a requisição-->
                <input type="hidden" name="editar_dados_basicos" value="editar">
            </div>

            <!--Salvar os dados editados-->
            <button type="button" name="editar_dados_basicos" value="editar"
                data-modal-text="Você tem certeza que deseja alterar seus dados?" data-form-target="#form-alterar"
                class="btn-abrir-modal mt-3 px-4 py-1 bg-black text-white transition duration-700 hover:scale-105 hover:bg-amber-300 hover:text-black">
                <span>Editar</span>
            </button>
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
<section id="personalizar">
    <div class="flex justify-center mt-10">
        <form action="../controller/controller_perfil.php" method="POST" id="form-personalizar">
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
                
                 <!--Campo para que funcione a requisição-->
                 <input type="hidden" name="editar_personalizacao" value="editar">
                </div>
            </div>

            <!--Salvar os dados adicionados-->
            <div class="ml-5 mb-10">
                <button type="button" name="editar_personalizacao" value="editar"
                    data-modal-text="Você concorda com nossa política de dados?" data-form-target="#form-personalizar"
                    class="btn-abrir-modal 
                    mt-3 px-4 py-1 bg-black text-white transition duration-700 hover:scale-105 hover:bg-amber-300 hover:text-black">
                    <span>Adicionar</span>
                </button>
            </div>
        </form>
    </div>
</section>
<!-- Fim personalizar dados do usuário -->


<!-- Excluir conta do usuário -->
<section id="excluirConta" class="flex justify-center mt-10">
    <form method="POST" action="../controller/controller_excluir.php" id="form-excluir" class="group">

        <button type="button" data-modal-text="Você tem certeza que deseja excluir a conta?"
            data-form-target="#form-excluir" class="btn-abrir-modal">

            <img src="../imgs/icones/excluir.png" alt="sair da conta"
                class="absolute opacity-100 group-hover:opacity-0 transition-opacity duration-500 ease-in-out">
            <img src="../imgs/icones/excluirHover.png" alt="sair da conta"
                class="absolute opacity-0 group-hover:opacity-100 transition-opacity duration-500 ease-in-out">

        </button>

        <div class="ml-20 mt-3">
            <h2 class="text-2xl group-hover:text-black">Excluir conta</h2>
        </div>
    </form>
</section>
<!-- Fim excluir conta do usuário -->



<!--Pop-up generico-->
<div id="modal-confirmacao-generico" class="hidden fixed inset-0 z-50 flex justify-center items-center bg-gray-200/50">
    <div
        class="bg-white py-5 px-10 rounded-4xl border-2 border-gray-800 shadow-xl hover:scale-105 hover:border-black transition duration-900">
        <h1 id="modal-text" class="text-3xl"></h1>

        <div class="flex justify-center gap-5 mt-5">
            <button type="button"
                class="btn-confirmar 
                    py-2 px-7 rounded-3xl bg-black text-white border-2 hover:bg-yellow-200 hover:text-black transition duration-700">
                Sim
            </button>
            <button type="button"
                class="btn-cancelar
                    py-2 px-7 rounded-3xl bg-black text-white border-2 hover:bg-yellow-200 hover:text-black transition duration-700">
                Não
            </button>
        </div>
    </div>
</div>

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