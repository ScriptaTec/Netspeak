<?php
include "../controller/controller_login.php";
?>

<!--Cabeçalho-->
<?php
require('header.php');
?>

<header class="flex justify-between m-3">
    <div class="w-20">
        <a href="../index.php"><img src="../imgs/logo.png" alt="Logo do site"></a>
    </div>

    <a href="../index.php" class="text-2xl transition duration-500 hover:text-amber-300">Home</a>
</header>


<!--esquerda encima-->
<div class="absolute left-100 top-44 text-2xl ">✨</div>
<div class="absolute left-110 top-30 text-7xl ">✨</div>

<!--esquerda embaixo-->
<div class="absolute left-100 bottom-50 text-8xl ">🥰</div>
<div class="absolute left-120 bottom-44 text-5xl ">🫶</div>

<!--direira encima-->
<div class="absolute right-100 top-30 text-8xl">😊</div>
<div class="absolute right-90 top-50 text-6xl opacity-90">😝</div>
<div class="absolute right-130 top-50 text-4xl">😁</div>

<!--direita embaixo-->
<div class="absolute right-130 bottom-17 text-xl">✨</div>
<div class="absolute right-114 bottom-24 text-7xl">✨</div>


<div class="flex justify-center items-center mt-10">
    <form method="POST" action="../controller/controller_login.php" id="form" class="flex flex-col">

        <div class="text-7xl text-center lg:text-8xl">
            <h1>Bem-vindo</h1>
            <h1 class="-mt-3">de volta!</h1>
        </div>

        <label for="email" class="text-xl mt-3 ml-4">Email</label>
        <input type="email" name="email" required placeholder="@gmail.com"
            class="w-full -mt-1 text-xl py-1.5 px-4 border-2 border-black rounded-4xl rounded-br-none transition duration-500 hover:border-black focus:outline-none"
            style="box-shadow: 2px 2px 1px;">

        <label for="senha" class="text-xl mt-3 ml-4">Senha</label>

        <div class="relative flex items-center">
            <input type="password" id="loginPwdChange" name="senha" required placeholder=". . ."
                class="w-full -mt-1 text-xl py-1.5 px-4 border-2 border-black rounded-4xl rounded-br-none transition duration-500 hover:border-black focus:outline-none"
                style="box-shadow: 2px 2px 1px;">

            <button type="button" onclick="changePwdView()" class="absolute right-0 px-3 text-gray-500">
                <img id="ocultar" class="" src="../imgs/icones/ocultar.png" alt="Ocultar senha" title="Ocultar senha">
                <img id="mostrar" class="hidden" src="../imgs/icones/mostrar.png" alt="Mostrar senha"
                    title="Mostrar senha">
            </button>
        </div>

        <div class="text-right mt-1">
            <a href="cadastro.php" class="text-gray-500 hover:text-black transition duration-500">Esqueceu a senha?</a>
        </div>

        <button type="submit" style="cursor: pointer;"
            class="relative mt-6 bg-black rounded-4xl rounded-br-none overflow-hidden p-2 pl-5 pr-5 transition duration-500 hover:scale-110">
            <div id="progressoInterno" class="absolute left-0 top-0 h-full transition-all duration-700"
                style="width: 0%; background-color: #ffac33"></div>
            <span class="relative text-white">Logar</span>
        </button>

        <div class="text-right mt-1">
            <a href="cadastro.php" class="text-gray-500 hover:text-black transition duration-500">Não possuí conta?</a>
        </div>

        <?php
        // Verifica se existe uma mensagem de erro de login na sessão (email) e exibe
        if (isset($_SESSION['erro_email'])) {
            echo '<p style="color: red; font-size: 12px; padding: 2px; text-align: right">' . $_SESSION['erro_email'] . '</p>';
            // Limpa a variável de erro após exibir a mensagem
            unset($_SESSION['erro_email']);
        }

        if (isset($_SESSION['erro_senha'])) {
            echo '<p style="color: red; font-size: 12px; padding: 2px; text-align: right">' . $_SESSION['erro_senha'] . '</p>';
            // Limpa a variável de erro após exibir a mensagem
            unset($_SESSION['erro_senha']);
        }
        ?>
    </form>
</div>

<?php
require('footer.php');
?>