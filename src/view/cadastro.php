<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="../fonts/fonts.css">
    <link rel="shortcut icon" href="../imgs/favicon.ico" type="image/x-icon">

    <title>Cadastro</title>
</head>

<body class="julius bg-gray-50 flex flex-col min-h-screen">

    <header class="flex justify-end m-5 gap-4">
        <a href="../index.php">Home</a>
        <a href="perfil.php"><img src="../imgs/perfil.png" alt=""></a>
    </header>

    <main class="flex-grow flex items-center justify-center -mt-15">
        <div class="flex items-center shadow-lg gap-20 bg-white rounded-lg pl-10">
            <form method="POST" action="../controller/controller_cadastro.php">

                <input type="text" name="nome" required placeholder="..."
                    class="w-72 p-1.5 mt-3 border-2 border-black rounded hover:border-black focus:outline-none"
                    style="box-shadow: -2px 2px 1px;"><br>
                <label for="nome" class="text-xs ">Nome Completo</label> <br>

                <input type="email" name="email" required placeholder="@"
                    class="w-72 p-1.5 mt-3 border-2 border-black rounded hover:border-black focus:outline-none"
                    style="box-shadow: -2px 2px 1px;"><br>
                <label for="email" class="text-xs">Email</label><br>

                <input type="password" name="senha" required placeholder="123"
                    class="w-72 p-1.5 mt-3 border-2 border-black rounded hover:border-black focus:outline-none"
                    style="box-shadow: -2px 2px 1px;"><br>
                <label for="senha" class="text-xs">Senha</label> <br>

                <input type="date" name="data_nascimento" required
                    class="w-48 p-1.5 mt-3 border-2 border-black rounded hover:border-black focus:outline-none"
                    style="box-shadow: -2px 2px 1px;"><br>
                <label for="nascimento" class="text-xs"> Data de Nascimento</label><br>

                <button type="submit" class="bg-black transition-all duration-300 transform hover:scale-105 rounded-full p-2 text-white text-sm mt-2">Cadastrar</button>
            </form>

            <div class="border-collapse">
                <img class="h-96" src="https://i.pinimg.com/originals/8c/97/3f/8c973f5cfef13b3505f2ce7ad37c6b34.gif" alt="">
            </div>
        </div>
    </main>

    <footer class="fixed bottom-1 w-full">
        <div class="flex justify-center gap-4">
            <h6 class="font-sans text-sm">&copy; 2025 Scripta. Todos os direitos reservados.</h6>
        </div>

        <div class="absolute right-4 bottom-0">
            <a href="perfil.php"><img src="../imgs/suporte.png" alt=""></a>
        </div>
    </footer>

</body>


</html>