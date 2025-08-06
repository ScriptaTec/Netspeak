<?php
include "../controller/controller_cadastro.php";
?>
<!--Cabeçalho-->
<?php
require('header.php');
?>

<div class="lg:bg-[url(../imgs/cadastro.png)]">
    <header class="flex justify-between m-3">
        <div class="w-20">
            <a href="../index.php"><img src="../imgs/logo.png" alt="Logo do site"></a>
        </div>

        <a href="../index.php" class="text-2xl transition duration-500 hover:text-amber-300">Home</a>
    </header>

    <div class="flex items-center justify-center m-3">
        <form method="POST" action="../controller/controller_cadastro.php" id="form" class="flex flex-col">

            <h1 class="text-6xl text-center lg:text-8xl">Seja bem-vindo</h1>

            <label for="email" class="text-xl mt-3 ml-4">Email</label>
            <input type="email" name="email" required placeholder="Email..."
                class="w-full -mt-1 text-xl py-1.5 px-4 border-2 border-black rounded-4xl rounded-br-none hover:border-black focus:outline-none transition duration-500"
                style="box-shadow: 2px 2px 1px;">

            <?php
            if (isset($_SESSION['erro_email'])) {
                echo '<span style="color: red;">O email já está sendo usado</span>';
                unset($_SESSION['erro_email']);
            }
            ?>

            <label for="nome" class="text-xl mt-3 ml-4">Nome</label>
            <input type="text" name="nome" required placeholder="Nome..."
                class="w-full -mt-1 text-xl py-1.5 px-4 border-2 border-black rounded-4xl rounded-br-none hover:border-black focus:outline-none transition duration-500"
                style="box-shadow: 2px 2px 0px;">

            <?php
            if (isset($_SESSION['erro_senha_secundario'])) {
                echo '<span style="color: red;">Este email já esta sendo usado</span>';
                unset($_SESSION['erro_senha_secundario']);
            }
            ?>

            <label for="nascimento" class="text-xl mt-3 ml-4">Nascimento</label>
            <input type="date" name="data_nascimento" required
                class="w-full -mt-1 text-xl text-gray-500 py-1.5 px-4 border-2 border-black rounded-4xl rounded-br-none hover:border-black focus:outline-none focus:text-black transition duration-500"
                style="box-shadow: 2px 2px 1px;">



            <div class="flex gap-5">
                <div class="flex flex-col">
                    <label for="senha" class="text-xl mt-3 ml-4">Senha</label>
                    <div class="relative flex items-center">
                        <input type="password" name="senha" id="senha" required placeholder="Senha..."
                            class="w-full -mt-1 text-xl py-1.5 px-4 border-2 border-black rounded-4xl rounded-br-none rounded-tr-none transition duration-500 hover:border-black focus:outline-none"
                            style="box-shadow: 2px 2px 1px;">

                        <button type="button" onclick="acaoBotao('senha', this)"
                            class="absolute right-0 px-3 text-gray-500">
                            <img class="ocultar " src="../imgs/icones/ocultar.png" alt="Ocultar senha">
                            <img class="mostrar hidden " src="../imgs/icones/mostrar.png" alt="Mostrar senha">
                        </button>
                    </div>

                    <?php
                    if (isset($_SESSION['erro_senha'])) {
                        echo '<span style="color: red;">As senhas não coincidem</span>';
                        unset($_SESSION['erro_senha']);
                    }
                    ?>
                </div>

                <div class="flex flex-col"><label for="senha" class="text-xl mt-3 ml-4">Repetir senha</label>

                    <div class="relative flex items-center">
                        <input type="password" name="confirmar_senha" id="confirmarSenha" required
                            placeholder="Repetir senha..."
                            class="w-full -mt-1 text-xl py-1.5 px-4 border-2 border-black rounded-2xl rounded-bl-none rounded-tl-none rounded-br-none transition duration-500 hover:border-black focus:outline-none"
                            style="box-shadow: 2px 2px 1px;">

                        <button type="button" onclick="acaoBotao('confirmarSenha', this)"
                            class="absolute right-0 px-3 text-gray-500">
                            <img class="ocultar " src="../imgs/icones/ocultar.png" alt="Ocultar senha">
                            <img class="mostrar hidden " src="../imgs/icones/mostrar.png" alt="Mostrar senha">
                        </button>
                    </div>
                </div>
            </div>

            <!--Termos de uso-->
            <div class="ml-5 mt-5 flex items-center gap-2">
                <input type="checkbox" name="termo" id="" required
                    class="bg-gray-100 rounded-sm border-black text-[#746587] focus:ring-0">
                <span>Concordo com os <button onclick="abrirTermo()"
                        class="underline underline-offset-2 decoration-[#746587]">termos de uso do site</button></spam>
            </div>

            <!--Modal do termo-->
            <div id="termo" class="hidden fixed inset-0 z-50 flex justify-center items-center px-10 bg-gray-200/50">
                <!--Usará fetch para chamar termo.php--->
            </div>

            <button type="submit" style="cursor: pointer;"
                class="mt-5 w-full relative bg-black rounded-4xl rounded-br-none overflow-hidden p-2 pl-4 pr-4 transition duration-500 hover:scale-110">
                <div id="progressoInterno" class="absolute left-0 top-0 h-full transition-all duration-700"
                    style="width: 0%; background-color: #ffac33"></div>
                <span class="relative text-white">Cadastrar-se</span>
            </button>

            <div class="text-right mt-1">
                <a href="login.php" class="text-gray-500 hover:text-black transition duration-500">Já possuí uma
                    conta?</a>
            </div>

            <!--Necessário para funcionar o modal do termo de uso-->
            <script>
                const termo = document.getElementById("termo");

                function abrirTermo() {
                    //Chamar o componente
                    fetch('termos.php')
                        .then(response => {
                            return response.text();
                        })
                        .then(html => {
                            termo.innerHTML = html; //coloca o html dentro da div do termo
                            termo.classList.remove("hidden");
                            inicializarNavegacaoTermo();
                        })
                }

                function inicializarNavegacaoTermo() {
                    const buttons = document.querySelectorAll(".btn-etapa");
                    const contents = document.querySelectorAll(".etapa");
                    const icones = document.querySelectorAll(".icone");

                    buttons.forEach(button => {
                        button.addEventListener("click", () => {
                            const target = button.getAttribute("data-target");
                            contents.forEach(content => content.classList.add("hidden"));
                            buttons.forEach(btn => btn.classList.remove("text-[#746587]", "font-semibold"));
                            icones.forEach(icon => icon.classList.remove("border-[#746587]", "border-2"));
                            document.getElementById(target).classList.remove("hidden");
                            button.classList.add("text-[#746587]", "font-semibold");
                            const icon = button.querySelector(".icone");
                            if (target !== "etapa1") icon.classList.add("border-[#746587]", "border-2");
                        });
                    });
                }

                //Botao de sair dentro do modal
                function sair() {
                    termo.classList.add("hidden")
                }
            </script>
        </form>
    </div>
</div>

<?php
require('footer.php');
?>