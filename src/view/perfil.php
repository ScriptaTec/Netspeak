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

<div class="flex justify-center items-center gap-5 m-3 lg:m-0">

    <!--Mudar foto de perfil do usuário-->
    <div class="relative z-10">
        <!--Foto de perfil do usuário-->
        <img src="../imgs/imgs_perfil/perfil1.png" alt="foto de perfil">

        <!--Ícone de mudar foto de perfil do usuário-->
        <button type="button" onclick="abrirModalFoto()" class="group">
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
            class="bg-white px-2 py-1.5 mt-3 border-2 border-black rounded-4xl rounded-tl-2xl rounded-bl-none"
            style="box-shadow: 2px 2px 0px;">

        <h3 class="text-sm mt-2 -mb-4 ml-3">Nome:</h3>
        <input type="text" value="<?= $_SESSION['user']['nome'] ?? '' ?>" disabled
            class="bg-white px-2 py-1.5 mt-3 border-2 border-black rounded-4xl rounded-tl-2xl rounded-bl-none"
            style="box-shadow: 2px 2px 1px;">

        <h3 class="text-sm mt-2 -mb-4 ml-3">Nascimento:</h3>
        <input type="date" value="<?= $_SESSION['user']['data_nascimento'] ?? '' ?>" disabled
            class="bg-white px-2 py-1.5 mt-3 border-2 border-black rounded-4xl rounded-tl-2xl rounded-bl-none"
            style="box-shadow: 2px 2px 1px;">
    </div>
</div>

<!--Navegação entre as seções-->
<div class="flex justify-center gap-5 text-center text-lg text-gray-600 mt-2 lg:mt-0">
    <button onclick="mostrarEditar()" id="btn-editar" class="hover:text-black transition duration-500 ">
        <span>Editar dados</span>
    </button>

    <button onclick="mostrarAdicionar()" id="btn-adicionar"
        class="text-black hover:text-black transition duration-500 ">
        <span>Adicionar dados</span>
    </button>

    <a href="redefinir_senha.php" class="hover:text-black transition duration-500 ">Redefinir senha</a>

    <form method="POST" action="../controller/controller_excluir.php" id="form-excluir">
        <button onclick="abrirModalExcluir()" class="hover:text-black transition duration-500 ">
            <span>Excluir conta</span>
        </button>
    </form>
</div>

<!--Estilização do fundo da página-->
<div class="relative bg-[#9e8cbe] mt-5">
    <div class="lg:h-3 lg:w-4 bg-[#9e8cbe] absolute left-14 -top-32"></div>
    <div class="lg:h-6 lg:w-10 bg-[#9e8cbe] absolute -top-24"></div>

    <div class="lg:h-6 lg:w-2xl bg-white absolute left-15"></div>
    <div class="lg:h-10 lg:w-10 bg-white absolute right-98"></div>
    <div class="lg:h-5 lg:w-54 bg-white absolute left-32 top-6"></div>
    <div class="lg:h-10 lg:w-10 bg-white absolute left-20 top-14"></div>
    <div class="lg:h-28 lg:w-42 bg-white absolute right-0"></div>
    <div class="lg:h-5 lg:w-10 bg-white absolute right-42"></div>
    <div class="lg:h-4 lg:w-12 bg-white absolute left-110 top-10"></div>
    <div class="lg:h-5 lg:w-5 bg-white absolute right-86 top-9"></div>

    <div class="lg:h-3 lg:w-5 bg-[#746587] absolute left-68"></div>
    <div class="lg:h-3 lg:w-10 bg-[#746587] absolute left-154 top-6"></div>
    <div class="lg:h-5 lg:w-7 bg-[#746587] absolute top-24"></div>
    <div class="lg:h-4 lg:w-20 bg-[#746587] absolute right-10 top-28"></div>
    <div class="lg:h-10 lg:w-32 bg-[#746587] absolute left-10 bottom-48"></div>
    <div class="lg:h-16 lg:w-20 bg-[#746587] absolute right-98 bottom-74"></div>

    <div class="lg:h-20 lg:w-54 bg-[#AE99D2] absolute left-64 top-54"></div>
    <div class="lg:h-30 lg:w-28 bg-[#AE99D2] absolute right-98 top-20"></div>
    <div class="lg:h-14 lg:w-28 bg-[#AE99D2] absolute right-148 bottom-14"></div>
    <div class="lg:h-42 lg:w-28 bg-[#AE99D2] absolute right-0 bottom-64"></div>

    <div class="flex justify-center py-10 text-center relative z-10 lg:py-24 ">


        <!--Seção de adicionar dados do usuário-->
        <form action="../controller/controller_perfil.php" method="post" id="form-adicionar"
            class="flex flex-col bg-white py-4 px-10 rounded-2xl" style="box-shadow: -10px 10px 1px #776a8f;">

            <h2 class="text-4xl text-[#413E45]">Adicione dados</h2>

            <!--Campo para nome completo-->
            <label for="nome" class="mt-3 text-left text-xl">Nome completo</label>
            <input type="text" name="nome_completo" required placeholder=". . . "
                value="<?= $_SESSION['user']['nome_completo'] ?? '' ?>"
                class="bg-[#F8FBA6] lg:w-98 py-1.5 px-2 border border-black rounded-xl"
                style="box-shadow: -2px 2px 0px black;">

            <!--Campo para email secundario-->
            <label for="email" class="mt-3 text-left text-xl">Email secundário</label>
            <input type="email" name="email_secundario" required placeholder=". . . "
                value="<?= $_SESSION['user']['email_secundario'] ?? '' ?>"
                class="bg-[#F8FBA6] py-1.5 px-2 border border-black rounded-xl" style="box-shadow: -2px 2px 0px black;">

            <!--Campo para gênero-->
            <label for="genero" class="mt-3 text-left text-xl">Gênero</label>

            <select id="genero" required class="bg-[#F8FBA6] py-1.5 px-2 border border-black rounded-xl text-lg"
                style="box-shadow: -2px 2px 0px black;">

                <?php $genero = $_SESSION['user']['genero'] ?? ''; ?>

                <option disabled selected>Selecione</option>
                <option value="feminino" <?= $genero === 'feminino' ? 'selected' : '' ?>>Feminino</option>
                <option value="masculino" <?= $genero === 'masculino' ? 'selected' : '' ?>>Masculino</option>
                <option value="outro" <?= $genero === 'outro' ? 'selected' : '' ?>>Outro</option>
            </select>

            <!--Campo para grau de formação-->
            <label for="formacao" class="mt-3 text-left text-xl">Grau de formação</label>

            <select id="formacao" required class="bg-[#F8FBA6] py-1.5 px-2 border border-black rounded-xl text-lg"
                style="box-shadow: -2px 2px 0px black;">

                <?php $formacao = $_SESSION['user']['grau_formacao'] ?? ''; ?>

                <option disabled selected>Selecione</option>
                <option name="grau_formacao" value="1" <?= $formacao === '1' ? 'selected' : '' ?>>Ensino Médio incompleto
                </option>
                <option name="grau_formacao" value="2" <?= $formacao === '2' ? 'selected' : '' ?>>Ensino Médio completo
                </option>
                <option name="grau_formacao" value="3" <?= $formacao === '3' ? 'selected' : '' ?>>Graduação incompleta
                </option>
                <option name="grau_formacao" value="4" <?= $formacao === '4' ? 'selected' : '' ?>>Graduação completa
                </option>
            </select>

            <!--Campo para nível de dificuldade com a tecnologia-->
            <label for="tecnologia" class="mt-3 text-left text-xl">Nível de dificuldade com a tecnologia</label>

            <select id="dificuldade" required class="bg-[#F8FBA6] py-1.5 px-2 border border-black rounded-xl text-lg"
                style="box-shadow: -2px 2px 0px black;">

                <?php $dificuldade = $_SESSION['user']['dificuldade_tecnologia'] ?? ''; ?>

                <option disabled selected>Selecione</option>
                <option value="1" <?= $dificuldade === '1' ? 'selected' : '' ?>>Baixo</option>
                <option value="2" <?= $dificuldade === '1' ? 'selected' : '' ?>>Médio</option>
                <option value="3" <?= $dificuldade === '1' ? 'selected' : '' ?>>Alto</option>
            </select>

            <!--Campo para que funcione a requisição-->
            <input type="hidden" name="editar_personalizacao" value="editar">

            <button type="button" onclick="abrirModalAdicionar()" name="editar_personalizacao"
                class="bg-[#746587] mt-5 w-32 px-2 py-1.5 rounded-xl transition duration-500 hover:bg-black hover:scale-105">
                <span class="text-white text-lg">Adicionar dados</span>
            </button>
        </form>
        <!--Fim da seção de adicionar dados-->


        <!--Seção de editar dados do usuário-->
        <form action="../controller/controller_perfil.php" method="post" id="form-editar"
            class="hidden flex flex-col bg-white py-4 px-10 rounded-2xl" style="box-shadow: -10px 10px 1px #776a8f;">

            <h2 class="text-4xl text-[#413E45]">Edite seus dados</h2>

            <!--Campo para editar nome-->
            <label for="nome" class="mt-3 text-left text-xl">Nome</label>
            <input type="text" name="nome" placeholder=". . . " value="<?= $_SESSION['user']['nome'] ?? '' ?>"
                class="bg-[#F8FBA6] lg:w-98 py-1.5 px-2 border border-black rounded-xl"
                style="box-shadow: -2px 2px 0px black;">

            <!--Campo para email-->
            <label for="email" class="mt-3 text-left text-xl">Email</label>
            <input type="email" name="email" placeholder=". . . " value="<?= $_SESSION['user']['email'] ?? '' ?>"
                class="bg-[#F8FBA6] py-1.5 px-2 border border-black rounded-xl" style="box-shadow: -2px 2px 0px black;">

            <!--Campo para que funcione a requisição-->
            <input type="hidden" name="editar_dados_basicos" value="editar">

            <button type="button" onclick="abrirModalEditar()" name="editar_dados_basicos"
                class="bg-[#746587] mt-5 w-32 px-2 py-1.5 rounded-xl transition duration-500 hover:bg-black hover:scale-105">
                <span class="text-white text-lg">Editar dados</span>
            </button>
        </form>
    </div>
</div>

<!--Modais de editar, adicionar e excluir conta-->

<div id="modal-adicionar" class="hidden fixed inset-0 z-50 flex justify-center items-center bg-gray-200/50">
    <div
        class="bg-white py-5 px-10 rounded-4xl border-2 border-gray-800 shadow-xl hover:scale-105 hover:border-black transition duration-900">
        <h1 class="text-3xl">Você deseja adicionar estes dados ao seus perfil?</h1>

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


<div id="modal-editar" class="hidden fixed inset-0 z-50 flex justify-center items-center bg-gray-200/50">
    <div
        class="bg-white py-5 px-10 rounded-4xl border-2 border-gray-800 shadow-xl hover:scale-105 hover:border-black transition duration-900">
        <h1 class="text-3xl">Você deseja editar seus dados?</h1>

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

<div id="modal-excluir" class="hidden fixed inset-0 z-50 flex justify-center items-center bg-gray-200/50">
    <div
        class="bg-white py-5 px-10 rounded-4xl border-2 border-gray-800 shadow-xl hover:scale-105 hover:border-black transition duration-900">
        <h1 class="text-3xl">Você deseja excluir a sua conta?</h1>

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


<!--Modal de mudar foto de perfil-->
<div id="modal-foto" class="hidden z-50 fixed inset-0 flex justify-center items-center bg-gray-200/50">

    <!--Fechar pop-up-->
    <button style="cursor: pointer;" type="button" class="btn-cancelar group">
        <img src="../imgs/icones/close.png" alt="ícone de sair do mudar foto de perfil"
            class="absolute top-22 right-90 opacity-100 group-hover:opacity-0 transition duration-900">
        <img src="../imgs/icones/closeHover.png" alt="ícone de sair do mudar foto de perfil"
            class="absolute top-22 right-90 opacity-0 group-hover:opacity-100 transition duration-900">
    </button>

    <div
        class="bg-white py-5 px-10 rounded-4xl border-2 border-gray-400 shadow-xl hover:border-black hover:border-3 transition duration-900">

        <h1 class="text-center text-3xl">Edite sua foto de perfil</h1>

        <!--Opções de foto de perfil-->
        <div class="flex flex-col mt-5">
            <div class="flex gap-4">
                <img src="../imgs/imgs_perfil/perfil1.png" alt=""
                    class="h-30 hover:scale-110 hover:border-3 border-yellow-300 rounded-full transition duration-800 ease-in-out">
                <img src="../imgs/imgs_perfil/perfil6.png" alt=""
                    class="h-30 hover:scale-110 hover:border-3 border-yellow-300 rounded-full transition duration-800 ease-in-out">
                <img src="../imgs/imgs_perfil/perfil2.png" alt=""
                    class="h-30 hover:scale-110 hover:border-3 border-yellow-300 rounded-full transition duration-800 ease-in-out">
                <img src="../imgs/imgs_perfil/perfil7.png" alt=""
                    class="h-30 hover:scale-110 hover:border-3 border-yellow-300 rounded-full transition duration-800 ease-in-out">
            </div>


            <div class="flex gap-4 mt-7">
                <img src="../imgs/imgs_perfil/perfil3.png" alt=""
                    class="h-30 hover:scale-110 hover:border-3 border-yellow-300 rounded-full transition duration-800 ease-in-out">
                <img src="../imgs/imgs_perfil/perfil8.png" alt=""
                    class="h-30 hover:scale-110 hover:border-3 border-yellow-300 rounded-full transition duration-800 ease-in-out">
                <img src="../imgs/imgs_perfil/perfil4.png" alt=""
                    class="h-30 hover:scale-110 hover:border-3 border-yellow-300 rounded-full transition duration-800 ease-in-out">
                <img src="../imgs/imgs_perfil/perfil5.png" alt=""
                    class="h-30 hover:scale-110 hover:border-3 border-yellow-300 rounded-full transition duration-800 ease-in-out">
            </div>
        </div>


        <div class="flex justify-center">
            <button
                class="btn-confirmar mt-5 py-1 px-5 rounded-3xl bg-gray-300 text-gray-600 hover:bg-black hover:text-white transition duration-700">
                Editar
            </button>
        </div>
    </div>
</div>

<!--Rodapé-->
<footer class="relative py-2 w-full">
    <h6 class="text-sm text-center">&copy; 2025 Emojimoji. Todos os direitos reservados.</h6>

    <div class="absolute right-3 bottom-1.5">
        <a href="suporte.php">
            <img src="../imgs/icones/suporte.png" alt="ícone de suporte">
        </a>
    </div>
</footer>

<!--Necessário para o funcionamento da biblioteca FlowBite-->
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>