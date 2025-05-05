<?php
session_start();
require "../controller/controller_perfil.php";

if (!isset($_SESSION['user'])) {
    echo "<script>alert('Usuário não logado.'); location.href = 'cadastro.php';</script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="shortcut icon" href="../imgs/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../fonts/fonts.css">
    <script src="../js/navegacao.js" defer></script>
    <script src="../js/animacao.js" defer></script>
    <script src="../js/pop_ups.js" defer></script>
</head>

<body class="jersey min-h-screen">
    <div class="bg-stone-50 py-1">
        <!-- Cabeçalho -->
        <header>
            <div class="w-30 mt-2 absolute top-0 left-5 transition duration-500 hover:scale-105">
                <a href="../index.php"><img src="../imgs/logo4.png" alt="Logo"></a>
            </div>

            <div class="absolute top-0 right-0 m-5 gap-2 flex">
                <a href="../index.php" class="mt-1 text-2xl text-black transition duration-500 hover:text-yellow-300">Home</a>

                <!-- Ícone de sair da conta -->
                <form method="POST" action="../controller/controller_logout.php" id="logoutForm" class="-mt-7 mr-5 flex justify-center group">
                    <button type="button" class="openModalBtn" data-target="sairConta">
                        <img src="../imgs/exit.png" alt="sair da conta" class="absolute opacity-100 group-hover:opacity-0 transition-opacity duration-500 ease-in-out">
                        <img src="../imgs/exitHover.png" alt="sair da conta" class="absolute opacity-0 group-hover:opacity-100 transition-opacity duration-500 ease-in-out">
                    </button>
                </form>
            </div>
        </header>

        <!-- Pop-up de sair da conta -->
        <div id="sairConta" class="hidden fixed inset-0 z-50 flex justify-center items-center bg-gray-200/50">
            <div class="bg-white py-5 px-10 rounded-4xl border-2 border-gray-800 shadow-xl hover:scale-105 hover:border-black transition duration-900">
                <h1 class="text-3xl text-center">Você deseja sair da conta?</h1>
                <div class="flex justify-center gap-5 mt-5">
                    <button type="button" id="logout" class="py-2 px-7 rounded-3xl bg-black text-white border-2 hover:bg-yellow-200 hover:text-black transition duration-700">Sim</button>
                    <button type="button" class="closeModalBtn py-2 px-7 rounded-3xl bg-black text-white border-2 hover:bg-yellow-200 hover:text-black transition duration-700">Não</button>
                </div>
            </div>
        </div>

        <!-- Dados do usuário -->
        <div class="flex justify-center items-center gap-5 m-10">
            <!-- Foto de perfil -->
            <div class="relative z-10">
                <img src="../imgs/perfil1.png" alt="foto de perfil">
                <button type="button" class="openModalBtn group" data-target="mudarFoto">
                    <img src="../imgs/editarFoto.png" alt="editar" class="h-12 absolute top-3 right-2 opacity-100 group-hover:opacity-0 transition-opacity duration-900">
                    <img src="../imgs/editarHover.png" alt="editar hover" class="h-14 absolute top-2 right-1 opacity-0 group-hover:opacity-100 transition-opacity duration-900">
                </button>
            </div>

            <!-- Pop-up mudar foto -->
            <div id="mudarFoto" class="hidden z-50 fixed inset-0 flex justify-center items-center bg-gray-200/50">
                <button type="button" class="closeModalBtn group absolute top-5 right-5">
                    <img src="../imgs/close.png" alt="fechar" class="opacity-100 group-hover:opacity-0 transition duration-900">
                    <img src="../imgs/closeHover.png" alt="fechar hover" class="opacity-0 group-hover:opacity-100 transition duration-900">
                </button>

                <div class="bg-white py-5 px-10 rounded-4xl border-2 border-gray-400 shadow-xl hover:border-black transition duration-900">
                    <h1 class="text-center text-3xl">Edite sua foto de perfil</h1>

                    <div class="flex flex-col mt-5 gap-7">
                        <div class="flex gap-4">
                            <?php
                            $fotos = ['perfil1', 'perfil8', 'perfil2', 'perfil7', 'perfil3', 'perfil6', 'perfil4', 'perfil5'];
                            foreach ($fotos as $foto) {
                                echo "<img src='../imgs/{$foto}.png' class='h-30 hover:scale-110 hover:border-3 border-yellow-300 rounded-full transition duration-800 ease-in-out'>";
                            }
                            ?>
                        </div>
                        <div class="flex justify-center">
                            <button id="editar" class="mt-5 py-1 px-5 rounded-3xl bg-gray-300 text-gray-600 hover:bg-black hover:text-white transition duration-700">Editar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Informações básicas -->
            <div class="flex-col ml-10">
                <div class="flex flex-col">
                    <label class="mb-1 ml-1">Email</label>
                    <input type="email" value="<?= $_SESSION['user']['email'] ?? '' ?>" disabled class="bg-white w-46 p-2 mt-3 border-2 border-black rounded-4xl rounded-tl-2xl rounded-bl-none hover:border-black focus:outline-none transition duration-500 hover:scale-105" style="box-shadow: 2px 2px 0px;">
                </div>
                <input type="text" value="<?= $_SESSION['user']['nome'] ?? '' ?>" disabled class="bg-white w-50 p-2 mt-3 border-2 border-black rounded-4xl rounded-bl-none hover:border-black focus:outline-none transition duration-500 hover:scale-105" style="box-shadow: 2px 2px 1px;"><br>
                <input type="date" value="<?= $_SESSION['user']['data_nascimento'] ?? '' ?>" disabled class="bg-white w-32 p-2 mt-3 border-2 border-black rounded-4xl rounded-bl-none hover:border-black focus:outline-none transition duration-500 hover:scale-105" style="box-shadow: 2px 2px 1px;">
            </div>
        </div>
    </div>

    <!-- Seção principal -->
    <main class="mt-2 flex justify-center flex-col items-center">
        <!-- Tabs -->
        <div class="flex gap-5">
            <button id="tabFavoritos" class="text-gray-400 hover:text-black transition duration-700">Favoritos</button>
            <button id="tabPersonalizar" class="border-b-2 border-amber-300 font-bold transition duration-700">Personalizar</button>
            <button id="tabRedefinirSenha" class="text-gray-400 hover:text-black transition duration-700">Redefinir senha</button>
        </div>

        <div id="conteudo" class="mt-10"></div>

        <!-- Rodapé -->
        <footer class="w-full mt-20 relative">
            <div class="flex justify-center gap-4 mb-1">
                <h6 class="text-sm">&copy; 2025 Scripta. Todos os direitos reservados.</h6>
            </div>
            <div class="absolute right-4 bottom-1">
                <a href="perfil.php"><img src="../imgs/suporte.png" alt=""></a>
            </div>
        </footer>

        <!-- Formulário de personalização -->
        <form action="" method="POST">
            <section class="mt-10">
                <h1 class="text-3xl">Adicione dados:</h1>
                <fieldset class="border p-10 mt-5">
                    <label class="text-xl">Nome completo:</label>
                    <input type="text" name="nome_completo" required placeholder="@..." value="<?= $_SESSION['user']['nome_completo'] ?? '' ?>"><br>

                    <label class="text-xl mt-3">Email secundário:</label>
                    <input type="email" name="email_secundario" required value="<?= $_SESSION['user']['email_secundario'] ?? '' ?>"><br>

                    <!-- Gênero -->
                    <div class="flex gap-5 mt-3">
                        <label class="text-xl">Gênero:</label>
                        <?php $genero = $_SESSION['user']['genero'] ?? ''; ?>
                        <input type="radio" name="genero" value="feminino" <?= $genero === 'feminino' ? 'checked' : '' ?>><label>Feminino</label>
                        <input type="radio" name="genero" value="masculino" <?= $genero === 'masculino' ? 'checked' : '' ?>><label>Masculino</label>
                        <input type="radio" name="genero" value="outro" <?= $genero === 'outro' ? 'checked' : '' ?>><label>Outro</label>
                    </div>

                    <!-- Grau de formação -->
                    <div class="flex gap-5 mt-3">
                        <label class="text-xl">Grau de formação:</label>
                        <?php $formacao = $_SESSION['user']['grau_formacao'] ?? ''; ?>
                        <input type="radio" name="grau_formacao" value="Ensino Médio Incompleto" <?= $formacao === 'Ensino Médio Incompleto' ? 'checked' : '' ?>><label>Ensino Médio incompleto</label>
                        <input type="radio" name="grau_formacao" value="Ensino Médio Completo" <?= $formacao === 'Ensino Médio Completo' ? 'checked' : '' ?>><label>Ensino Médio completo</label>
                        <input type="radio" name="grau_formacao" value="Graduação" <?= $formacao === 'Graduação' ? 'checked' : '' ?>><label>Graduação</label>
                    </div>

                    <!-- Dificuldade com tecnologia -->
                    <div class="flex gap-5 mt-3">
                        <label class="text-xl">Dificuldade com tecnologia:</label>
                        <?php $dificuldade = $_SESSION['user']['dificuldade_tecnologia'] ?? ''; ?>
                        <input type="radio" name="dificuldade_tecnologia" value="Alto" <?= $dificuldade === 'Alto' ? 'checked' : '' ?>><label>Alta</label>
                        <input type="radio" name="dificuldade_tecnologia" value="Médio" <?= $dificuldade === 'Médio' ? 'checked' : '' ?>><label>Média</label>
                        <input type="radio" name="dificuldade_tecnologia" value="Baixo" <?= $dificuldade === 'Baixo' ? 'checked' : '' ?>><label>Baixa</label>
                    </div>
                </fieldset>

                <div class="ml-5">
                    <button type="submit" name="editar_personalizacao" value="editar" class="mt-3 px-4 py-1 bg-black text-white hover:scale-105 hover:bg-yellow-200 hover:text-black transition duration-500">Editar</button>
                </div>
            </section>
        </form>

        <!-- Temas -->
        <section class="mt-20 mb-20 flex">
            <div class="flex-col">
                <h2 class="text-7xl">Personalize</h2>
                <h2main: <?php

session_start();

require "../controller/controller_perfil.php";


if (!isset($_SESSION['user'])) {

    echo "<script>alert('Usuário não logado.'); location.href = 'cadastro.php';</script>";

    exit();

}

?>


<!DOCTYPE html>

<html lang="pt">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Perfil</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <link rel="shortcut icon" href="../imgs/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="../fonts/fonts.css">

    <script src="../js/navegacao.js" defer></script>

</head>


<body class="bg-gray-50 jersey">


    <div class="bg-gray-100 py-1">

        <header>

            <div class="w-30 mt-2 absolute top-0 left-5 transition duration-500 hover:scale-105">

                <a href="../index.php"><img src="../imgs/logo4.png" alt="Logo"></a>

            </div>


            <div class="absolute top-0 right-0 m-5 gap-2 flex">

                <a href="../index.php" class="mt-1 text-2xl text-black transition duration-500 hover:text-yellow-300">Home</a>

                <a href="logout.php"><img src="../imgs/exit.png" alt="Sair" class="transition duration-500 hover:scale-105"></a>

            </div>

        </header>


        <!-- Alerta de mensagem -->

        <?php if (isset($mensagem)) echo "<script>alert('$mensagem')</script>"; ?>


        <!-- Dados básicos do usuário -->

        <div class="flex justify-center items-center m-10">

            <img src="../imgs/mulher(1).png" alt="Avatar">


            <div class="flex-col ml-10">

                <div class="flex flex-col">

                    <label class="mb-1 ml-1">Email</label>

                    <input type="email" value="<?= $_SESSION['user']['email'] ?? '' ?>" disabled

                        class="bg-white w-60 p-2 border-2 border-black rounded-4xl rounded-bl-none hover:border-black focus:outline-none transition duration-500 hover:scale-105"

                        style="box-shadow: 2px 2px 0px;">

                </div>


                <input type="text" value="<?= $_SESSION['user']['nome'] ?? '' ?>" disabled

                    class="bg-white w-50 p-2 mt-3 border-2 border-black rounded-4xl rounded-bl-none hover:border-black focus:outline-none transition duration-500 hover:scale-105"

                    style="box-shadow: 2px 2px 1px;"><br>


                <input type="date" value="<?= $_SESSION['user']['data_nascimento'] ?? '' ?>" disabled

                    class="bg-white w-32 p-2 mt-3 border-2 border-black rounded-4xl rounded-bl-none hover:border-black focus:outline-none transition duration-500 hover:scale-105"

                    style="box-shadow: 2px 2px 1px;">

            </div>

        </div>

    </div>


    <!-- Seção principal -->

    <main class="mt-2 flex justify-center flex-col items-center">


        <!-- Tabs -->

        <div class="flex gap-5">

            <button id="tabFavoritos" class="border-b-2 border-black font-bold">Favoritos</button>

            <button id="tabPersonalizar" class="text-gray-400 hover:text-black">Personalizar</button>

            <button id="tabRedefinirSenha" class="text-gray-400 hover:text-black">Redefinir senha</button>

        </div>


        <!-- Conteúdo de cada aba -->

        <div id="conteudoFavoritos">

            <h1 class="mt-10 text-xl">Ainda não há favoritos cadastrados.</h1>

        </div>


        <div id="conteudoPersonalizar" class="flex justify-center items-center flex-col">

            <!-- Editar dados básicos -->

            <h1 class="text-3xl text-left mt-10">Altere seus dados:</h1>

            <form action="" method="POST">

                <div class="flex gap-20 ml-5">

                    <div class="relative">

                        <input type="email" name="email" required placeholder="Email..." value="<?= $_SESSION['user']['email'] ?? '' ?>"

                            class="w-60 p-2 mt-3 text-gray-600 border-2 border-black focus:outline-none transition duration-500 hover:scale-105"

                            style="box-shadow: -4px 4px 1px #646464;">

                        <img src="../imgs/edit-tool.png" alt="Editar" class="absolute top-8 right-3 transform -translate-y-1/2">

                    </div>


                    <div class="relative">

                        <input type="text" name="nome" required placeholder="Nome..." value="<?= $_SESSION['user']['nome'] ?? '' ?>"

                            class="w-60 p-2 mt-3 text-gray-600 border-2 border-black focus:outline-none transition duration-500 hover:scale-105"

                            style="box-shadow: -4px 4px 1px #646464;">

                        <img src="../imgs/edit-tool.png" alt="Editar" class="absolute top-8 right-3 transform -translate-y-1/2">

                    </div>

                </div>


                <div class="ml-5">

                    <button type="submit" name="editar_dados_basicos" value="editar"

                        class="mt-3 px-4 py-1 bg-black text-white hover:scale-105 hover:bg-yellow-200 hover:text-black transition duration-500">

                        Editar

                    </button>

                </div>

            </form>


            <!-- Sair e excluir conta -->

            <div class="flex flex-col mt-10 ml-5">

                <a href="logout.php">Sair da conta →</a>

                <a href="excluir_conta.php" class="text-red-600">Excluir conta →</a>

            </div>


            <!-- Formulário de personalização -->

            <form action="" method="POST">

                <section class="mt-10">

                    <h1 class="text-3xl">Adicione dados:</h1>

                    <fieldset class="border p-10 mt-5">


                        <label class="text-xl">Nome completo:</label>

                        <input type="text" name="nome_completo" required placeholder="@..."

                            value="<?= $_SESSION['user']['nome_completo'] ?? '' ?>"><br>


                        <label class="text-xl mt-3">Email secundário:</label>

                        <input type="email" name="email_secundario" required

                            value="<?= $_SESSION['user']['email_secundario'] ?? '' ?>"><br>


                        <!-- Gênero -->

                        <div class="flex gap-5 mt-3">

                            <label class="text-xl">Gênero:</label>

                            <?php $genero = $_SESSION['user']['genero'] ?? ''; ?>

                            <input type="radio" name="genero" value="feminino" <?= $genero === 'feminino' ? 'checked' : '' ?>>

                            <label>Feminino</label>


                            <input type="radio" name="genero" value="masculino" <?= $genero === 'masculino' ? 'checked' : '' ?>>

                            <label>Masculino</label>


                            <input type="radio" name="genero" value="outro" <?= $genero === 'outro' ? 'checked' : '' ?>>

                            <label>Outro</label>

                        </div>


                        <!-- Grau de formação -->

                        <div class="flex gap-5 mt-3">

                            <label class="text-xl">Grau de formação:</label>

                            <?php $formacao = $_SESSION['user']['grau_formacao'] ?? ''; ?>

                            <input type="radio" name="grau_formacao" value="Ensino Médio Incompleto" <?= $formacao === 'Ensino Médio Incompleto' ? 'checked' : '' ?>>

                            <label>Ensino Médio incompleto</label>


                            <input type="radio" name="grau_formacao" value="Ensino Médio Completo" <?= $formacao === 'Ensino Médio Completo' ? 'checked' : '' ?>>

                            <label>Ensino Médio completo</label>


                            <input type="radio" name="grau_formacao" value="Graduação" <?= $formacao === 'Graduação' ? 'checked' : '' ?>>

                            <label>Graduação</label>

                        </div>


                        <!-- Dificuldade com tecnologia -->

                        <div class="flex gap-5 mt-3">

                            <label class="text-xl">Dificuldade com tecnologia:</label>

                            <?php $dificuldade = $_SESSION['user']['dificuldade_tecnologia'] ?? ''; ?>

                            <input type="radio" name="dificuldade_tecnologia" value="Alto" <?= $dificuldade === 'Alto' ? 'checked' : '' ?>>

                            <label>Alta</label>


                            <input type="radio" name="dificuldade_tecnologia" value="Médio" <?= $dificuldade === 'Médio' ? 'checked' : '' ?>>

                            <label>Média</label>


                            <input type="radio" name="dificuldade_tecnologia" value="Baixo" <?= $dificuldade === 'Baixo' ? 'checked' : '' ?>>

                            <label>Baixa</label>

                        </div>

                    </fieldset>


                    <div class="ml-5">

                        <button type="submit" name="editar_personalizacao" value="editar"

                            class="mt-3 px-4 py-1 bg-black text-white hover:scale-105 hover:bg-yellow-200 hover:text-black transition duration-500">

                            Editar

                        </button>

                    </div>

                </section>

            </form>


            <!-- Temas -->

            <section class="mt-20 mb-20 flex">

                <div class="flex-col">

                    <h2 class="text-7xl">Personalize</h2>

                    <h2 class="text-7xl">sua navegação!</h2>

                    <h3 class="text-3xl text-gray-700">Escolha entre os temas:</h3>

                </div>


                <div class="flex flex-col gap-5 ml-10">

                    <button class="bg-gray-100 p-2 rounded-full">Claro</button>

                    <button class="bg-gray-400 p-2 rounded-full text-white">Escuro</button>

                </div>

            </section>

        </div>

    </main>

</body>

</html> class="text-7xl">sua navegação!</h2>
                <h3 class="text-3xl text-gray-700">Escolha entre os temas:</h3>
            </div>
            <div class="flex flex-col gap-5 ml-10">
                <button class="bg-gray-100 p-2 rounded-full">Claro</button>
                <button class="bg-gray-400 p-2 rounded-full text-white">Escuro</button>
            </div>
        </section>
    </main>
</body>
</html>
