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
        <button type="button" class="group">
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
<div class="flex justify-center gap-5 text-lg text-gray-600">
    <button onclick="navegacaoPerfil()" id="editarDados" class="hover:text-black transition duration-500 ">
        <span>Editar dados</span>
    </button>

    <button onclick="navegacaoPerfil()" id="adicionarDados" class="hover:text-black transition duration-500 ">
        <span>Adicionar dados</span>
    </button>

    <button onclick="navegacaoPerfil()" id="sairConta" class="hover:text-black transition duration-500 ">
        <span>Sair da conta</span>
    </button>
</div>

<div class="relative bg-[#9e8cbe] mt-5">
    <!--Fundo da página-->
    <div class="h-3 w-4 bg-[#9e8cbe] absolute left-14 -top-32"></div>
    <div class="h-6 w-10 bg-[#9e8cbe] absolute -top-24"></div>

    <div class="h-6 w-2xl bg-white absolute left-15"></div>
    <div class="h-10 w-10 bg-white absolute right-98"></div>
    <div class="h-5 w-54 bg-white absolute left-32 top-6"></div>
    <div class="h-10 w-10 bg-white absolute left-20 top-14"></div>
    <div class="h-28 w-42 bg-white absolute right-0"></div>
    <div class="h-5 w-10 bg-white absolute right-42"></div>
    <div class="h-4 w-12 bg-white absolute left-110 top-10"></div>
    <div class="h-5 w-5 bg-white absolute right-86 top-9"></div>

    <div class="h-3 w-5 bg-[#746587] absolute left-68"></div>
    <div class="h-3 w-10 bg-[#746587] absolute left-154 top-6"></div>
    <div class="h-5 w-7 bg-[#746587] absolute top-24"></div>
    <div class="h-4 w-20 bg-[#746587] absolute right-10 top-28"></div>
    <div class="h-10 w-32 bg-[#746587] absolute left-10 bottom-48"></div>
    <div class="h-16 w-20 bg-[#746587] absolute right-98 bottom-74"></div>
    
    <div class="h-20 w-54 bg-[#AE99D2] absolute left-64 top-54"></div>
    <div class="h-30 w-28 bg-[#AE99D2] absolute right-98 top-20"></div>
    <div class="h-14 w-28 bg-[#AE99D2] absolute right-148 bottom-14"></div>
    <div class="h-42 w-28 bg-[#AE99D2] absolute right-0 bottom-64"></div>

    <!--Seção de adicionar dados do usuário-->
    <div class="flex justify-center text-center py-24 relative z-10">
        <form action="../controller/controller_perfil.php" method="post"
            class="flex flex-col bg-white py-4 px-10 rounded-2xl" style="box-shadow: -10px 10px 1px #776a8f;">

            <h2 class="text-4xl text-[#413E45]">Adicione dados</h2>

            <!--Campo para nome completo-->
            <label for="nome" class="mt-3 text-left text-xl">Nome completo</label>
            <input type="text" name="nome_completo" required placeholder=". . . "
                value="<?= $_SESSION['user']['nome_completo'] ?? '' ?>"
                class="bg-[#F8FBA6] w-98 py-1.5 px-2 border border-black rounded-xl"
                style="box-shadow: -2px 2px 0px black;">

            <!--Campo para email completo-->
            <label for="email" class="mt-3 text-left text-xl">Email completo</label>
            <input type="text" name="nome_completo" required placeholder=". . . "
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

            <button
                class="bg-[#746587] mt-5 w-32 px-2 py-1.5 rounded-xl transition duration-500 hover:bg-black hover:scale-105">
                <span class="text-white text-lg">Adicionar dados</span>
            </button>
        </form>
    </div>
</div>

<!--Rodapé-->
<?php
require('footer.php');
?>