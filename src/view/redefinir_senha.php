<div class="flex flex-col relative">

    <!--direita embaixo-->
    <div class="absolute left-90 bottom-22 text-5xl ">😊</div>
    <div class="absolute left-100 bottom-0 text-8xl ">😉</div>

    <!--direita encima-->
    <div class="absolute left-90 top-10 text-8xl ">✨</div>
    <div class="absolute left-86 top-32 text-3xl">✨</div>

    <!--esquerda encima-->
    <div class="absolute right-90 top-30 text-8xl">🧐</div>
    <div class="absolute right-80 top-54 text-5xl opacity-90">🗝️</div>
    <div class="absolute right-130 top-30 text-4xl"></div>

    <!--esquerda embaixo-->
    <div class="absolute left-0 bottom-5 text-xl">✨</div>
    <div class="absolute right-80 bottom-10 text-7xl">✨</div>


    <main class="text-center text-gray-600">

        <form method="POST" action="" id="form">

            <div class="text-8xl text-black">
                <h1>Esqueceu</h1>
                <h1 class="-mt-3">a senha?</h1>
            </div>

            <div class="mt-2">
                <input type="email" name="email" required placeholder="Email..."
                    class="w-68 p-2 mt-3 border-2 border-black rounded-4xl rounded-br-none transition duration-500 hover:scale-105 hover:border-black focus:outline-none"
                    style="box-shadow: 2px 2px 1px;"><br>

                <input type="password" name="senha_antiga" required placeholder="Senha antiga..."
                    class="w-68 p-2 mt-4 border-2 border-black rounded-4xl rounded-br-none transition duration-500 hover:scale-105 hover:border-black focus:outline-none"
                    style="box-shadow: 2px 2px 1px;"><br>

                <input type="password" name="senha_nova" required placeholder="Senha nova..."
                    class="w-68 p-2 mt-4 border-2 border-black rounded-4xl rounded-br-none transition duration-500 hover:scale-105 hover:border-black focus:outline-none"
                    style="box-shadow: 2px 2px 1px;"><br>
            </div>

            <button type="submit" style="cursor: pointer;"
                class="relative bg-black rounded-4xl rounded-br-none overflow-hidden mt-4 p-2 pl-5 pr-5 ml-46 transition duration-500 hover:scale-110">
                <div id="progressoInterno" class="absolute left-0 top-0 h-full transition-all duration-700"
                    style="width: 0%; background-color: #ffac33"></div>
                <span class="relative text-white">Redefinir</span>
            </button>

            <div class="text-right mt-1 mr-7">
                <a href="suporte.php" class="hover:text-black transition duration-500">Algo deu errado?</a>
            </div>

        </form>
    </main>
</div>
</div>