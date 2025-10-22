<?php session_start(); ?>

<!--Cabeçalho-->
<?php
require('header.php');
?>

<div class="h-screen lg:bg-[url(../imgs/redefinir_senha.png)]">
<header class="flex justify-between m-3">
        <div class="w-20">
            <a href="../index.php"><img src="../imgs/logo.png" alt="Logo do site"></a>
        </div>

        <div class="flex gap-2 items-center">
            <div class="flex flex-col items-center group transition-all duration-400">

                <!--Tradução português-->
                <button type="submit" onclick="traduzirPagina('pt')">
                    <!--Icone tela pequena-->
                    <img src="../imgs/icones/brasil.png" alt="Brasil" class="h-5 border rounded-full lg:hidden">

                    <!--Icone tela grande-->
                    <img src="../imgs/icones/brasil.png" alt="Brasil" class="h-7 border rounded-full hidden lg:block">

                    <div class="mt-1 h-0.5 w-7 bg-[#746587] rounded-xl hidden group-hover:block"></div>

                </button>
            </div>

            <div class="flex flex-col items-center group transition-all duration-400">

                <!--Tradução inglês-->
                <button type="submit" onclick="traduzirPagina('en')">
                    <!--Icone tela pequena-->
                    <img src="../imgs/icones/estadosUnidos.png" alt="Estados Unidos"
                        class="h-5 border rounded-full lg:hidden">

                    <!--Icone tela grande-->
                    <img src="../imgs/icones/estadosUnidos.png" alt="Estados Unidos"
                        class="h-7 border rounded-full hidden lg:block">

                    <div class="mt-1 h-0.5 w-7 bg-[#746587] rounded-xl hidden group-hover:block"></div>

                </button>
            </div>

            <a href="../index.php" class="text-2xl transition duration-500 hover:text-amber-300">Home</a>
        </div>
    </header>

<div class="flex justify-center items-center">
    <form method="POST" action="../controller/controller_redefinir.php" id="form" class="flex flex-col">

        <div class="text-7xl text-center lg:text-8xl">
            <h1>Esqueceu</h1>
            <h1 class="-mt-3">a senha?</h1>
        </div>

        <label for="email" class="text-xl mt-3 ml-4">Email</label>
        <input type="email" name="email" required placeholder="Digite seu email..."
            class="w-full -mt-1 text-xl py-1.5 px-4  border-2 border-black rounded-4xl rounded-br-none transition duration-500 hover:border-black focus:outline-none"
            style="box-shadow: 2px 2px 1px;">

        <label for="senha" class="text-xl mt-3 ml-4">Senha antiga</label>

        <div class="relative flex items-center">
            <input type="password" name="senha" required placeholder="Digite a senha antiga..." id="senhaAntiga"
                class="w-full -mt-1 text-xl py-1.5 px-4 border-2 border-black rounded-4xl rounded-br-none transition duration-500 hover:border-black focus:outline-none"
                style="box-shadow: 2px 2px 1px;">

            <button type="button" onclick="acaoBotao('senhaAntiga', this)" class="absolute right-0 px-3 text-gray-500">
                <img class="ocultar " src="../imgs/icones/ocultar.png" alt="Ocultar senha">
                <img class="mostrar hidden" src="../imgs/icones/mostrar.png" alt="Mostrar senha">
            </button>
        </div>

        <label for="senha" class="text-xl mt-3 ml-4">Nova senha</label>

        <div class="relative flex items-center">
            <input type="password" name="novaSenha" required placeholder="Digite uma nova senha..." id="senhaNova"
                class="w-full -mt-1 text-xl py-1.5 px-4 border-2 border-black rounded-4xl rounded-br-none transition duration-500 hover:border-black focus:outline-none"
                style="box-shadow: 2px 2px 1px;">

            <button type="button" onclick="acaoBotao('senhaNova', this)" class="absolute right-0 px-3 text-gray-500">
                <img class="ocultar " src="../imgs/icones/ocultar.png" alt="Ocultar senha">
                <img class="mostrar hidden" src="../imgs/icones/mostrar.png" alt="Mostrar senha">
            </button>
        </div>

        <label for="senha" class="text-xl mt-3 ml-4">Confirmar senha</label>

        <div class="relative flex items-center">
            <input type="password" name="confirmSenha" required placeholder="Confirme a nova senha..."
                id="confirmarSenha"
                class="w-full -mt-1 text-xl py-1.5 px-4 border-2 border-black rounded-4xl rounded-br-none transition duration-500 hover:border-black focus:outline-none"
                style="box-shadow: 2px 2px 1px;">

            <button type="button" onclick="acaoBotao('confirmarSenha', this)" class="absolute right-0 px-3 text-gray-500">
                <img class="ocultar " src="../imgs/icones/ocultar.png" alt="Ocultar senha">
                <img class="mostrar hidden" src="../imgs/icones/mostrar.png" alt="Mostrar senha">
            </button>
        </div>

        <button type="submit" style="cursor: pointer;"
            class="relative bg-black rounded-4xl rounded-br-none overflow-hidden mt-4 p-2 pl-7 pr-7 ml-42 transition duration-500 hover:scale-110">
            <div id="progressoInterno" class="absolute left-0 top-0 h-full transition-all duration-700"
                style="width: 0%; background-color: #ffac33"></div>
            <span class="relative text-white">Redefinir</span>
        </button>
    </form>
</div>
</div>

<?php
require('footer.php');
?>