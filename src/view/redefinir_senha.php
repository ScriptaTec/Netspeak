<?php session_start(); ?>

<!--Cabeçalho-->
<?php
require('header.php');
?>

<!--esquerda encima-->
<div class="absolute left-118
    6 top-80 text-5xl ">🗝️</div>
<div class="absolute left-94 top-60 text-8xl ">🧐</div>

<!--esquerda embaixo-->
<div class="absolute left-110 bottom-26 text-8xl ">✨</div>
<div class="absolute left-130 bottom-22 text-2xl ">✨</div>

<!--direira encima-->
<div class="absolute right-100 top-30 text-8xl">✨</div>
<div class="absolute right-120 top-50 text-3xl opacity-90">✨</div>

<!--direita embaixo-->
<div class="absolute right-110 bottom-56 text-5xl">😊</div>
<div class="absolute right-90 bottom-30 text-8xl">😉</div>

<header>
    <div class="w-30 mt-2 absolute left-5 transition duration-500 hover:scale-105">
        <a href="../index.php"><img src="../imgs/logo.png" alt="Logo do site"></a>
    </div>

    <div class="flex mt-5 gap-4 absolute right-5 text-xl">
        <a href="tradutor.php" class="transition duration-500 hover:scale-105">Home</a>
        <a href="perfil.php"><img src="../imgs/icones/perfil.png" alt="ícone de perfil do usuário"
                class="-mt-1 transition duration-500 hover:scale-105"></a>
    </div>
</header>

<main class="text-center flex items-center justify-center mt-20 text-gray-600">

    <form method="POST" action="../controller/controller_redefinir.php" id="form">

        <div class="text-8xl text-black">
            <h1>Esqueceu</h1>
            <h1 class="-mt-3">a senha?</h1>
        </div>

        <div class="mt-2">
            <input type="email" name="email" required placeholder="Email..."
                class="w-68 p-2 mt-3 border-2 border-black rounded-4xl rounded-br-none transition duration-500 hover:scale-105 hover:border-black focus:outline-none"
                style="box-shadow: 2px 2px 1px;"><br>

            <input type="password" name="senha_atual" required placeholder="Senha antiga..."
                class="w-68 p-2 mt-4 border-2 border-black rounded-4xl rounded-br-none transition duration-500 hover:scale-105 hover:border-black focus:outline-none"
                style="box-shadow: 2px 2px 1px;"><br>

            <input type="password" name="nova_senha" required placeholder="Senha nova..."
                class="w-68 p-2 mt-4 border-2 border-black rounded-4xl rounded-br-none transition duration-500 hover:scale-105 hover:border-black focus:outline-none"
                style="box-shadow: 2px 2px 1px;"><br>

            <input type="password" name="confirmar_senha" required placeholder="Confirmar senha nova..."
                class="w-68 p-2 mt-4 border-2 border-black rounded-4xl rounded-br-none transition duration-500 hover:scale-105 hover:border-black focus:outline-none"
                style="box-shadow: 2px 2px 1px;"><br>
        </div>

        <button type="submit" style="cursor: pointer;"
            class="relative bg-black rounded-4xl rounded-br-none overflow-hidden mt-4 p-2 pl-7 pr-7 ml-42 transition duration-500 hover:scale-110">
            <div id="progressoInterno" class="absolute left-0 top-0 h-full transition-all duration-700"
                style="width: 0%; background-color: #ffac33"></div>
            <span class="relative text-white">Redefinir</span>
        </button>

        <div class="text-right mt-1 mr-7">
            <a href="suporte.php" class="hover:text-black transition duration-500">Algo deu errado?</a>
        </div>

    </form>
</main>

<?php
require('footer.php');
?>