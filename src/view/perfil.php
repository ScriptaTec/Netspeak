<?php
session_start();

if (isset($_SESSION['user'])) {
    // echo "Sessão ativa para o usuário: " . $_SESSION['user']['nome'];
} else {
    echo "<script>alert('Usuario não logado.'); location.href = 'cadastro.php';</script>"; //window.history.back(); → Retorna para a página anterior (onde estava o formulário de cadastro).
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="shortcut icon" href="../imgs/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../fonts/fonts.css">
    <script src="navegacao.js" defer></script>

    <title>Perfil</title>
</head>

<body class="bg-gray-50 jersey">

    <div class="bg-gray-100 py-1">
        <header>
            <div class="w-30 mt-2 absolute top-0 left-5 transition duration-500 hover:scale-105">
                <a href="../index.php"><img src="../imgs/logo4.png" alt=""></a>
            </div>

            <div class="absolute top-0 right-0 m-5 gap-2 flex">
                <a href="../index.php" class="mt-1 text-2xl text-black transition duration-500 hover:text-yellow-300 inline-block">Home</a>
            
                <a href="logout.php"><img src="../imgs/exit.png" alt=""
                class="transition duration-500 hover:scale-105"></a>
            </div>
        </header>

        <!--Dados do usuário-->
        <form action="">
            <div class="flex justify-center items-center m-10">
                <img src="../imgs/mulher(1).png" alt="" class="">

                <div class="flex-col">
                    <input type="email" name="email" required placeholder="Email..."
                        class="bg-white w-60 p-2 mt-3 border-2 border-black rounded-4xl rounded-bl-none hover:border-black focus:outline-none transition duration-500 hover:scale-105"
                        style="box-shadow: 2px 2px 0px;"><br>

                    <input type="text" name="nome" required placeholder="Nome..."
                        class="bg-white w-50 p-2 mt-3 border-2 border-black rounded-4xl rounded-bl-none hover:border-black focus:outline-none transition duration-500 hover:scale-105"
                        style="box-shadow: 2px 2px 1px;"><br>

                    <input type="text" name="idade" required placeholder="Idade..."
                        class="bg-white w-20 p-2 mt-3 border-2 border-black rounded-4xl rounded-bl-none hover:border-black focus:outline-none transition duration-500 hover:scale-105"
                        style="box-shadow: 2px 2px 1px;"><br>
                </div>
            </div>
        </form>
    </div>

    <!--Editar e personalizar dados do usuário-->
    <main class="mt-2 flex justify-center flex-col items-center">

        <!-- Barra de abas -->
        <div class="flex gap-5">
            <button id="tabFavoritos" class="border-b-2 border-black font-bold">Favoritos</button>
            <button id="tabPersonalizar" class="text-gray-400 hover:text-black">Personalizar</button>
            <button id="tabRedefinirSenha" class="text-gray-400 hover:text-black">Redefinir senha</button>
        </div>

        <div id="conteudoFavoritos">
            <h1>ainda nao tem nada aqui</h1>
        </div>

        <div id="conteudoPersonalizar" class="flex justify-center items-center flex-col">
            <!--Editar dados-->
            <h1 class="text-3xl text-left mt-10">Altere seus dados: </h1>
            <form action="">

                <div class="flex gap-20 ml-5">
                    <div class="relative">
                        <input type="email" name="email" required placeholder="Email..."
                            class="w-60 p-2 mt-3 text-gray-600 border-2 border-black hover:border-black focus:outline-none transition duration-500 hover:scale-105"
                            style="box-shadow: -4px 4px 1px rgb(100, 100, 100);">
                        <img src="../imgs/edit-tool.png" alt="ícone"
                            class="absolute top-8 right-3 transform -translate-y-1/2">
                    </div>

                    <div class="relative">
                        <input type="text" name="nome" required placeholder="Nome..."
                            class="w-60 p-2 mt-3 text-gray-600 border-2 border-black hover:border-black focus:outline-none transition duration-500 hover:scale-105"
                            style="box-shadow: -4px 4px 1px rgb(100, 100, 100);">
                        <img src="../imgs/edit-tool.png" alt="ícone"
                            class="absolute top-8 right-3 transform -translate-y-1/2">
                    </div>
                </div>

                <div class="ml-5">
                    <button type="submit" value="editar"
                        class="mt-3 px-4 py-1 bg-black text-white border transition duration-500 hover:scale-105 hover:bg-yellow-200 hover:text-black">
                        <span>Editar</span>
                    </button>
                </div>

                <div class="flex flex-col mt-10 ml-5">
                    <a href="">Sair da conta-></a>

                    <a href="">Escluir conta -></a>
                </div>
                <!--<div class="mt-10 ml-5 text-xl">
                    <a href="logout.php" class="p-2 bg-gray-200 transition duration-500 hover:scale-110 hover:bg-black hover:text-white inline-block">Sair da conta -></a>
                </div>

                <div class="mt-5 ml-5 text-xl">
                    <a href="#" class="p-2 bg-gray-200 transition duration-500 hover:scale-110 hover:bg-black hover:text-white inline-block">Excluir conta -></a>
                </div>-->
            </form>


            <!--Personalizar dados-->
            <section class="mt-10">
                <h1 class="text-3xl">Adicione dados:</h1>
                <form action="">
                    <fieldset class="border p-10">
                        <label for="nome-completo" class="text-xl">Nome completo: </label>
                        <input type="text" name="nome-completo" required placeholder="@..."><br>

                        <label for="email-secundario" class="text-xl">Email secundário: </label>
                        <input type="email" name="email-secundario" required placeholder="...">

                        <div class="flex gap-5 mt-3">
                            <label for="genero" class="text-xl">Gênero: </label>

                            <input type="radio" name="feminino" id="feminino">
                            <label for="feminino">Feminino</label>

                            <input type="radio" name="masculino" id="masculino">
                            <label for="masculino">Masculino</label>

                            <input type="radio" name="outro" id="outro">
                            <label for="outro">Outro</label>
                        </div>

                        <div class="flex gap-5 mt-3">
                            <label for="formacao" class="text-xl">Grau de formação: </label>

                            <input type="radio" name="em-incompleto" id="em-incompleto">
                            <label for="em-incompleto">Ensino Médio incompleto</label>

                            <input type="radio" name="em-completo" id="em-completo">
                            <label for="em-completo">Ensino Médio completo</label>

                            <input type="radio" name="graduacao" id="graduacao">
                            <label for="graduacao">Graduação</label>
                        </div>

                        <div class="flex gap-5 mt-3">
                            <label for="dificuldade" class="text-xl">Nível de dificuldade com a tecnologia: </label>

                            <input type="radio" name="alta" id="alta">
                            <label for="alta">Alta</label>

                            <input type="radio" name="media" id="media">
                            <label for="media">Média</label>

                            <input type="radio" name="baixa" id="baixa">
                            <label for="baixa">Baixa</label>
                        </div>
                    </fieldset>

                    <div class="ml-5">
                    <button type="submit" value="editar"
                        class="mt-3 px-4 py-1 bg-black text-white border transition duration-500 hover:scale-105 hover:bg-yellow-200 hover:text-black">
                        <span>Editar</span>
                    </button>
                </div>
                </form>
            </section>


            <section class="mt-20 mb-20 flex">
                <div class="flex-col">
                    <h2 class="text-7xl">Personalize</h2>
                    <h2 class="text-7xl">sua navegação!</h2>
                    <h3 class="text-3xl text-gray-700">escolha entre os temas:</h3>
                </div>

                <div class="flex flex-col gap-5">
                    <button class="bg-gray-100 p-2 rounded-full">Claro</button>
                    <button class="bg-gray-400 p-2 rounded-full">Escuro</button>
                </div>
            </section>
        </div>
    </main>
    </div>

    <!--<footer class="mt-20 w-full absolute bottom-0">
        <div class="flex justify-center gap-4">
            <h6 class=" text-sm">&copy; 2025 Scripta. Todos os direitos reservados.</h6>
        </div>

        <div class="absolute right-4 bottom-0">
            <a href="perfil.php"><img src="../imgs/suporte.png" alt=""></a>
        </div>
    </footer>-->
</body>

</html>