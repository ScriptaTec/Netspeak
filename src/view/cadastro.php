<?php
include "../controller/controller_cadastro.php";
?>
<!--Cabeçalho-->
<?php
require('header.php');
?>

<div class="h-screen lg:bg-[url(../imgs/cadastro.png)]">
    <header class="flex justify-between m-3">
        <div class="w-20">
            <a href="../index.php"><img src="../imgs/logo.png" alt="Logo do site"></a>
        </div>

        <a href="../index.php" class="text-2xl transition duration-500 hover:text-amber-300">Home</a>
    </header>

    <div class="flex items-center justify-center m-3">
        <form method="POST" action="../controller/controller_cadastro.php" id="form" class="flex flex-col">

            <h1 class="text-7xl text-center lg:text-8xl">Seja bem-vindo</h1>

            <label for="email" class="text-xl mt-3 ml-4">Email</label>
            <input type="email" name="email" required placeholder="Email..."
                class="w-full -mt-1 text-xl py-1.5 px-4 border-2 border-black rounded-4xl rounded-br-none hover:border-black focus:outline-none transition duration-500"
                style="box-shadow: 2px 2px 1px;">

            <label for="nome" class="text-xl mt-3 ml-4">Nome</label>
            <input type="text" name="nome" required placeholder="Nome..."
                class="w-full -mt-1 text-xl py-1.5 px-4 border-2 border-black rounded-4xl rounded-br-none hover:border-black focus:outline-none transition duration-500"
                style="box-shadow: 2px 2px 0px;">


            <label for="nascimento" class="text-xl mt-3 ml-4">Nascimento</label>
            <input type="date" name="data_nascimento" required
                class="w-full -mt-1 text-xl text-gray-500 py-1.5 px-4 border-2 border-black rounded-4xl rounded-br-none hover:border-black focus:outline-none focus:text-black transition duration-500"
                style="box-shadow: 2px 2px 1px;">


            <label for="senha" class="text-xl mt-3 ml-4">Senha</label>

            <div class="relative flex items-center">
                <input type="password" name="senha" id="senha" required placeholder="Senha..."
                    class="w-full -mt-1 text-xl py-1.5 px-4 border-2 border-black rounded-4xl rounded-br-none transition duration-500 hover:border-black focus:outline-none"
                    style="box-shadow: 2px 2px 1px;">

                <button type="button" onclick="acaoBotao('senha', this)" class="absolute right-0 px-3 text-gray-500">
                    <img class="ocultar " src="../imgs/icones/ocultar.png" alt="Ocultar senha">
                    <img class="mostrar hidden " src="../imgs/icones/mostrar.png" alt="Mostrar senha">
                </button>
            </div>

            <label for="senha" class="text-xl mt-3 ml-4">Repetir senha</label>

            <div class="relative flex items-center">
                <input type="password" name="confirmar_senha" id="confirmarSenha" required
                    placeholder="Repetir senha..."
                    class="w-full -mt-1 text-xl py-1.5 px-4 border-2 border-black rounded-4xl rounded-br-none transition duration-500 hover:border-black focus:outline-none"
                    style="box-shadow: 2px 2px 1px;">

                <button type="button" onclick="acaoBotao('confirmarSenha', this)"
                    class="absolute right-0 px-3 text-gray-500">
                    <img class="ocultar " src="../imgs/icones/ocultar.png" alt="Ocultar senha">
                    <img class="mostrar hidden " src="../imgs/icones/mostrar.png" alt="Mostrar senha">
                </button>
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

            <!--Modais de erro no cadastro-->
            <div id="modal-email" class="hidden fixed inset-0 z-50 flex justify-center items-center bg-gray-200/50">
                <div
                    class="bg-white py-5 px-10 rounded-4xl border-2 border-gray-800 shadow-xl hover:scale-105 hover:border-black transition duration-900">
                    <h1 class="text-3xl">O email fornecido esta incorreto!</h1>

                    <div class="flex justify-center gap-5 mt-5">
                        <button type="button"
                            class="btn-confirmar 
                    py-2 px-7 rounded-3xl bg-black text-white border-2 hover:bg-yellow-200 hover:text-black transition duration-700">
                            Ok
                        </button>
                    </div>
                </div>
            </div>

            <div id="modal-email-secundario" class="hidden fixed inset-0 z-50 flex justify-center items-center bg-gray-200/50">
                <div
                    class="bg-white py-5 px-10 rounded-4xl border-2 border-gray-800 shadow-xl hover:scale-105 hover:border-black transition duration-900">
                    <h1 class="text-3xl">Este email já esta vinculado a outra conta!</h1>

                    <div class="flex justify-center gap-5 mt-5">
                        <button type="button"
                            class="btn-confirmar 
                    py-2 px-7 rounded-3xl bg-black text-white border-2 hover:bg-yellow-200 hover:text-black transition duration-700">
                            Ok
                        </button>
                    </div>
                </div>
            </div>

            <div id="modal-senha" class="hidden fixed inset-0 z-50 flex justify-center items-center bg-gray-200/50">
                <div
                    class="bg-white py-5 px-10 rounded-4xl border-2 border-gray-800 shadow-xl hover:scale-105 hover:border-black transition duration-900">
                    <h1 class="text-3xl">As senhas não coincidem!</h1>

                    <div class="flex justify-center gap-5 mt-5">
                        <button type="button"
                            class="btn-confirmar 
                    py-2 px-7 rounded-3xl bg-black text-white border-2 hover:bg-yellow-200 hover:text-black transition duration-700">
                            Ok
                        </button>
                    </div>
                </div>
            </div>

            <!--Necessário para funcionar os modais de erro no cadastro-->
            <script>
                const modalEmail = document.getElementById("modal-email")
                const modalEmailSecundario = document.getElementById("modal-email-secundario")
                const modalSenha = document.getElementById("modal-senha")
                const confirmarEmail = modalEmail.querySelector(".btn-confirmar")
                const confirmarEmailSecundario = modalEmailSecundario.querySelector(".btn-confirmar")
                const confirmarSenha = modalSenha.querySelector(".btn-confirmar")

                function erroModalEmail(){
                    modalEmail.classList.remove("hidden")

                    confirmarEmail.addEventListener("click", () => {
                        modalEmail.classList.add("hidden")
                    })
                }

                function erroModalEmailSecundario(){
                    modalEmailSecundario.classList.remove("hidden")

                    confirmarEmailSecundario.addEventListener("click", () => {
                        modalEmailSecundario.classList.add("hidden")
                    })
                }

                function erroModalSenha(){
                    modalSenha.classList.remove("hidden")

                    confirmarSenha.addEventListener("click", () => {
                        modalSenha.classList.add("hidden")
                    })
                }
            </script>

            <?php
            // Verifica se a mensagem de erro existe na sessão e exibe
            if (isset($_SESSION['erro_email'])) {
                echo '<script>erroModalEmail()</script>';

                // Limpa a variável de sessão após exibir a mensagem
                unset($_SESSION['erro_email']);
            }

            if (isset($_SESSION['erro_email_secundario'])) {
                echo '<script>erroModalEmailSecundario()</script>';

                // Limpa a variável de sessão após exibir a mensagem
                unset($_SESSION['erro_email_secundario']);
            }

            if (isset($_SESSION['erro_senha'])) {
                echo '<script>erroModalSenha()</script>';
                unset($_SESSION['erro_senha']);
            }
            ?>
        </form>
    </div>
</div>

<?php
require('footer.php');
?>