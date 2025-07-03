<?php
session_start();
?>

<!--Cabeçalho-->
<?php
require('header.php');
?>

<!--esquerda encima-->
<div class="absolute left-114 top-30 text-2xl ">✨</div>
<div class="absolute left-90 top-40 text-8xl ">✨</div>
<div class="absolute left-84 top-70 text-4xl ">✨</div>


<!--esquerda embaixo-->
<div class="absolute bottom-50 left-72 text-8xl">😆</div>
<div class="absolute left-70 bottom-36 text-5xl opacity-90">😂</div>
<div class="absolute left-90 bottom-40 text-5xl">✨</div>
<div class="absolute left-100 bottom-36 text-xl">✨</div>


<!--direita encima-->
<div class="absolute right-100 top-30 text-5xl">🙃</div>
<div class="absolute right-70 top-40 text-9xl">😚</div>
<div class="absolute right-64 top-60 text-5xl ">✌️</div>


<!--direita no meio-->
<div class="absolute bottom-50 right-86 text-2xl">✨</div>
<div class="absolute bottom-30 right-86 text-7xl">✨</div>


<header class="flex justify-between m-3">
    <div class="w-20">
        <a href="../index.php"><img src="../imgs/logo.png" alt="Logo do site"></a>
    </div>

    <div class="flex gap-4 text-2xl">
        <a href="../index.php" class="transition duration-500 hover:text-amber-300">Home</a>

        <a href="perfil.php" class="relative group w-8">
            <img src="../imgs/icones/perfil.png" alt="perfil do usuario"
                class="absolute opacity-100 group-hover:opacity-0 transition-opacity duration-500 ease-in-out">
            <img src="../imgs/icones/perfilHover.png" alt="perfil do usuario"
                class="absolute opacity-0 group-hover:opacity-100 transition-opacity duration-500 ease-in-out">
        </a>
    </div>
</header>

<div class="flex items-center justify-center mt-10 text-gray-600">

    <form method="POST" action="../controller/controller_cadastro.php" id="form">

        <h1 class="text-7xl text-black">Seja bem-vindo</h1>

        <div class="flex justify-center items-center flex-col">
            <input type="email" name="email" required placeholder="Email..."
                class="w-68 p-2 mt-3 border-2 border-black rounded-4xl rounded-bl-none hover:border-black focus:outline-none transition duration-500 hover:scale-105"
                style="box-shadow: 2px 2px 1px;"><br>

            <?php

            // Verifica se a mensagem de erro existe na sessão e exibe
            if (isset($_SESSION['erro_email'])) {
                echo '<p style="color: red; padding: 2px">' . $_SESSION['erro_email'] . '</p>';

                // Limpa a variável de sessão após exibir a mensagem
                unset($_SESSION['erro_email']);
            }

            if (isset($_SESSION['erro_email_secundario'])) {
                echo '<p style="color: red; padding: 2px">' . $_SESSION['erro_email_secundario'] . '</p>';

                // Limpa a variável de sessão após exibir a mensagem
                unset($_SESSION['erro_email_secundario']);
            }
            ?>

            <input type="text" name="nome" required placeholder="Nome..."
                class="w-68 p-2 mt-3 border-2 border-black rounded-4xl rounded-bl-none hover:border-black focus:outline-none transition duration-500 hover:scale-105"
                style="box-shadow: 2px 2px 0px;"><br>

            <input type="date" name="data_nascimento" required
                class="w-68 p-2 mt-3 border-2 border-black rounded-4xl rounded-bl-none hover:border-black focus:outline-none transition duration-500 hover:scale-105"
                style="box-shadow: 2px 2px 1px;"><br>

            <input type="password" name="senha" required placeholder="Senha..."
                class="w-68 p-2 mt-3 border-2 border-black rounded-4xl rounded-bl-none hover:border-black focus:outline-none transition duration-500 hover:scale-105"
                style="box-shadow: 2px 2px 1px;"><br>

            <input type="password" name="confirmar_senha" required placeholder="Repetir senha..."
                class="w-68 p-2 mt-3 border-2 border-black rounded-4xl rounded-bl-none hover:border-black focus:outline-none transition duration-500 hover:scale-105"
                style="box-shadow: 2px 2px 1px;"><br>
            <?php
            if (isset($_SESSION['erro_senha'])) {
                echo "<p class='text-red-500 font-size: 12px; padding: 2px'>" . $_SESSION['erro_senha'] . "</p>";
                unset($_SESSION['erro_senha']);
            }
            ?>

            <button type="submit" style="cursor: pointer;"
                class="mt-5 w-68 relative bg-black rounded-4xl rounded-bl-none overflow-hidden p-2 pl-4 pr-4 transition duration-500 hover:scale-110">
                <div id="progressoInterno" class="absolute left-0 top-0 h-full transition-all duration-700"
                    style="width: 0%; background-color: #ffac33"></div>
                <span class="relative text-white">Cadastrar-se</span>
            </button>

            <div class="mt-1 text-left hover:text-black transition duration-500">
                <a href="login.php"><b>Já possuí uma conta?</b></a>
            </div>
        </div>
    </form>
</div>

<?php
require('footer.php');
?>