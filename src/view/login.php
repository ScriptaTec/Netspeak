<?php
include "../controller/controller_login.php";
?>

<!--Cabeçalho-->
<?php
require('header.php');
?>

<div class="h-screen lg:bg-[url(../imgs/login.png)]">
    <header class="flex justify-between m-3">
        <div class="w-20">
            <a href="../index.php"><img src="../imgs/logo.png" alt="Logo do site"></a>
        </div>

        <a href="../index.php" class="text-2xl transition duration-500 hover:text-amber-300">Home</a>
    </header>

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
                <input type="password" id="senha" name="senha" required placeholder=". . ."
                    class="w-full -mt-1 text-xl py-1.5 px-4 border-2 border-black rounded-4xl rounded-br-none transition duration-500 hover:border-black focus:outline-none"
                    style="box-shadow: 2px 2px 1px;">

                <button type="button" onclick="acaoBotao('senha', this)" class="absolute right-0 px-3 text-gray-500">
                    <img class="ocultar " src="../imgs/icones/ocultar.png" alt="Ocultar senha">
                    <img class="mostrar hidden" src="../imgs/icones/mostrar.png" alt="Mostrar senha">
                </button>
            </div>

            <div class="text-right mt-1">
                <a href="redefinir_senha.php" class="text-gray-500 hover:text-black transition duration-500">Esqueceu a
                    senha?</a>
            </div>

            <button type="submit" style="cursor: pointer;"
                class="relative mt-6 bg-black rounded-4xl rounded-br-none overflow-hidden p-2 pl-5 pr-5 transition duration-500 hover:scale-110">
                <div id="progressoInterno" class="absolute left-0 top-0 h-full transition-all duration-700"
                    style="width: 0%; background-color: #ffac33"></div>
                <span class="relative text-white">Logar</span>
            </button>

            <div class="text-right mt-1">
                <a href="cadastro.php" class="text-gray-500 hover:text-black transition duration-500">Não possuí
                    conta?</a>
            </div>

            <!--Modais de mensagem de erro no login-->
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

            <div id="modal-senha" class="hidden fixed inset-0 z-50 flex justify-center items-center bg-gray-200/50">
                <div
                    class="bg-white py-5 px-10 rounded-4xl border-2 border-gray-800 shadow-xl hover:scale-105 hover:border-black transition duration-900">
                    <h1 class="text-3xl">A senha fornecida esta incorreta!</h1>

                    <div class="flex justify-center gap-5 mt-5">
                        <button type="button"
                            class="btn-confirmar 
                    py-2 px-7 rounded-3xl bg-black text-white border-2 hover:bg-yellow-200 hover:text-black transition duration-700">
                            Ok
                        </button>
                    </div>
                </div>
            </div>

            <!--Necessário para funcionar os modais-->
            <script>
                const modalEmail = document.getElementById("modal-email");
                const confirmarEmail = modalEmail.querySelector(".btn-confirmar");
                const modalSenha = document.getElementById("modal-senha");
                const confirmarSenha = modalSenha.querySelector(".btn-confirmar");

                function erroModalEmail() {
                    modalEmail.classList.remove("hidden");

                    confirmarEmail.addEventListener("click", () => {
                        modalEmail.classList.add("hidden")
                    })
                }

                function erroModalSenha() {
                    modalSenha.classList.remove("hidden");

                    confirmarSenha.addEventListener("click", () => {
                        modalSenha.classList.add("hidden")
                    })
                }
            </script>

            <?php
            // Verifica se existe uma mensagem de erro de login na sessão (email) e exibe
            if (isset($_SESSION['erro_email'])) {
                echo '<script>erroModalEmail()</script>';
                // Limpa a variável de erro após exibir a mensagem
                unset($_SESSION['erro_email']);
            }

            if (isset($_SESSION['erro_senha'])) {
                echo '<script>erroModalSenha()</script>';
                // Limpa a variável de erro após exibir a mensagem
                unset($_SESSION['erro_senha']);
            }
            ?>
        </form>
    </div>
</div>

<!--Rodapé-->
<?php
require('footer.php');
?>