<script src="../js/pop_ups.js" defer></script>
<!--Alterar dados do usuário-->
<div>
    <h1 class="text-left ml-10 text-3xl">Altere seus dados: </h1>
</div>

<form action="" class="flex justify-center items-center flex-col mt-5">

    <div class="flex gap-20 ml-5">
        <div class="relative flex-col">
            <input type="email" name="email" required placeholder="Email..."
                class="w-60 p-2 text-gray-600 bg-white border-2 border-black hover:border-black focus:outline-none transition duration-500 hover:scale-105"
                style="box-shadow: -4px 4px 1px rgb(100, 100, 100);">
            <img src="../imgs/editar.png" alt="ícone" class="absolute top-6 right-3 transform -translate-y-1/2">

            <!--Salvar os dados editados-->
            <div>
                <button type="button" data-target="editarDados" value="editar"
                    class="openModalBtn mt-3 px-4 py-1 bg-black text-white transition duration-700 hover:scale-105 hover:bg-amber-300 hover:text-black">
                    <span>Editar</span>
                </button>

                <!--Pop-up ao salvar os dados editados do perfil-->
                <div id="editarDados" class="hidden fixed inset-0 z-50 flex justify-center items-center bg-gray-200/50">
                    <div
                        class="bg-white py-5 px-10 rounded-4xl border border-2 border-gray-800 shadow-xl hover:scale-105 hover:border-black transition duration-900">
                        <h1 class="text-3xl">Seus dados foram editados com sucesso!</h1>

                        <div class="flex justify-center gap-5 mt-5">
                            <button type="button"
                                class="closeModalBtn
                                py-2 px-7 rounded-3xl bg-black text-white border border-2 hover:bg-yellow-200 hover:text-black transition duration-700">
                                ok
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="relative">
            <input type="text" name="nome" required placeholder="Nome..."
                class="w-60 p-2 text-gray-600 bg-white border-2 border-black hover:border-black focus:outline-none transition duration-500 hover:scale-105"
                style="box-shadow: -4px 4px 1px rgb(100, 100, 100);">
            <img src="../imgs/editar.png" alt="ícone" class="absolute top-6 right-3 transform -translate-y-1/2">
        </div>
    </div>
</form>




<!--Personalizar dados do usuário-->
<section
    class="mt-10 px-10 py-4 bg-stone-50 rounded-4xl border-2 border-gray-200 group hover:border-black transition duration-700">

    <div>
        <h1 class="text-left text-3xl group-hover:text-amber-300 transition duration-700">Adicione dados:
        </h1>
    </div>

    <form action="">

        <div class="flex gap-5 mt-5">
            <label for="nome-completo" class="text-2xl">Nome completo: </label>

            <input type="text" name="nome-completo" required placeholder="Fulana de Souza..."
                class="w-70 px-3 border-b border-b-2 border-black text-gray-600 focus:outline-none transition duration-900 hover:bg-yellow-200 hover:border-none hover:text-black hover:rounded-xl">

        </div>
        <br>

        <div class="flex gap-5">
            <label for="email-secundario" class="text-2xl">Email secundário: </label>

            <input type="email" name="email-secundario" required placeholder="Fulana_secudaria@gmail.com..."
                class="-ml-3 w-70 px-3 border-b border-b-2 border-black text-gray-600 focus:outline-none transition duration-900 hover:bg-yellow-200 hover:border-none hover:text-black hover:rounded-xl">

        </div>
        <br>

        <div class="flex gap-5">
            <label for="genero" class="text-2xl">Gênero: </label>

            <input type="radio" name="genero" id="feminino"
                class="appearance-none mt-2 w-4 h-4 border-2 border-gray-400 rounded-full checked:border-amber-300 checked:bg-amber-300">
            <label for="feminino" class="-ml-3 mr-5 mt-1">Feminino</label>

            <input type="radio" name="genero" id="masculino"
                class="appearance-none mt-2 w-4 h-4 border-2 border-gray-400 rounded-full checked:border-amber-300 checked:bg-amber-300">
            <label for="masculino" class="-ml-3 mr-5 mt-1">Masculino</label>

            <input type="radio" name="genero" id="outro"
                class="appearance-none mt-2 w-4 h-4 border-2 border-gray-400 rounded-full checked:border-amber-300 checked:bg-amber-300">
            <label for="outro" class="-ml-3 mr-5 mt-1">Outro</label>
        </div>

        <div class="flex gap-5 mt-3">
            <div class="flex flex-col text-2xl">
                <label for="formacao">Grau de</label>
                <label for="formacao" class="-mt-3">formação: </label>
            </div>

            <input type="radio" name="formacao" id="em-incompleto"
                class="appearance-none mt-4 w-4 h-4 border-2 border-gray-400 rounded-full checked:border-amber-300 checked:bg-amber-300">
            <div class="flex flex-col -ml-3 mt-2">
                <label for="em-incompleto">Ensino Médio</label>
                <label for="em-incompleto" class="-mt-2">incompleto</label>
            </div>

            <input type="radio" name="formacao" id="em-completo"
                class="appearance-none mt-4 w-4 h-4 border-2 border-gray-400 rounded-full checked:border-amber-300 checked:bg-amber-300">
            <div class="flex flex-col -ml-3 mt-2">
                <label for="em-incompleto">Ensino Médio</label>
                <label for="em-incompleto" class="-mt-2">completo</label>
            </div>

            <input type="radio" name="formacao" id="graduacao"
                class="appearance-none mt-4 w-4 h-4 border-2 border-gray-400 rounded-full checked:border-amber-300 checked:bg-amber-300">
            <label for="graduacao" class="-ml-3 mt-3">Graduação</label>
        </div>

        <div class="flex gap-5 mt-3">
            <div class="flex flex-col text-2xl">
                <label for="nivel">Nível de dificuldade</label>
                <label for="nivel" class="-mt-3">com a tecnologia: </label>
            </div>

            <input type="radio" name="nivel" id="alta"
                class="appearance-none mt-4 w-4 h-4 border-2 border-gray-400 rounded-full checked:border-amber-300 checked:bg-amber-300">
            <label for="alta" class="-ml-3 mt-3">Alta</label>

            <input type="radio" name="nivel" id="media"
                class="appearance-none mt-4 w-4 h-4 border-2 border-gray-400 rounded-full checked:border-amber-300 checked:bg-amber-300">
            <label for="media" class="-ml-3 mt-3">Média</label>

            <input type="radio" name="nivel" id="baixa"
                class="appearance-none mt-4 w-4 h-4 border-2 border-gray-400 rounded-full checked:border-amber-300 checked:bg-amber-300">
            <label for="baixa" class="-ml-3 mt-3">Baixa</label>
        </div>
</section>

<!--Salvar os dados editados-->
<div class="ml-5">
    <button type="submit" data-target="adicionarDados" value="editar"
        class="openModalBtn mt-3 px-4 py-1 bg-black text-white transition duration-700 hover:scale-105 hover:bg-amber-300 hover:text-black">
        <span>Adicionar</span>
    </button>

    <!--Pop-up ao salvar os dados adicionados ao perfil-->
    <div id="adicionarDados" class="hidden fixed inset-0 z-50 flex justify-center items-center bg-gray-200/50">
        <div
            class="bg-white py-5 px-10 rounded-4xl border border-2 border-gray-800 shadow-xl hover:scale-105 hover:border-black transition duration-900">
            <h1 class="text-3xl text-center">Obrigada por adicionar mais</h1>
            <h2 class="text-3xl text-center -mt-2">informações ao seu perfil!</h2>

            <h3 class="text-xl text-gray-600 text-center">isso será de grande valia para</h3>
            <h3 class="text-xl text-gray-600 text-center -mt-2"> os resultados da nossa pesquisa.</h3>

            <div class="flex justify-center gap-5 mt-5">
                <button type="button"
                    class="closeModalBtn
                                py-2 px-7 rounded-3xl bg-black text-white border border-2 hover:bg-yellow-200 hover:text-black transition duration-700">
                    ok
                </button>
            </div>
        </div>
    </div>
</div>
</form>

<!--Modo claro e escuro-->
<div class="mt-20 flex justify-center">
    <div class="flex-col">
        <h2 class="text-7xl">Personalize</h2>
        <h2 class="text-7xl">sua navegação!</h2>
        <h3 class="text-3xl text-gray-700">escolha entre os temas:</h3>
    </div>
</div>