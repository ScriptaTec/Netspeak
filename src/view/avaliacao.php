<!--Cabeçalho-->
<?php
require('header.php');
?>


<div class="headline lg:bg-[url(../imgs/fundoAvaliacao.png)] bg-no-repeat">

    <!--Cabeçalho-->
    <header class="flex justify-between p-3">
        <div class="w-20">
            <a href="tradutor.php"><img src="../imgs/logo.png" alt="Logo do site"></a>
        </div>

        <button type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation"
            aria-controls="drawer-navigation">
            <div class="relative w-8 h-8 group">
                <img src="../imgs/icones/menuRoxo.png" alt="ícone perfil"
                    class="absolute inset-0 w-full h-full opacity-100 group-hover:opacity-0 transition-opacity duration-600 ease-in-out">
                <img src="../imgs/icones/menu.png" alt="ícone perfil hover"
                    class="absolute inset-0 w-full h-full opacity-0 group-hover:opacity-100 transition-opacity duration-600 ease-in-out">
            </div>
        </button>

        <!--Importar o menu de navegação rápida-->
        <?php include 'menu.php'; ?>
    </header>

    <div class="mt-2 text-center text-6xl lg:text-transparent">
        <h1>Qual sua experiência</h1>
        <h1>com a ferramenta?</h1>
    </div>

    <!--Cards para escolher a avaliação-->
    <div class="flex items-center flex-col gap-14 mt-5 lg:flex-row lg:ml-20">

        <!--Card de avalião ótima-->
        <div data-aos="fade-up" data-aos-duration="500"
            class="flex flex-col justify-center flex-justify-center items-center bg-[#9E8CBE] rounded-4xl w-52 py-4 px-2 relative group lg:mt-32"
            style="box-shadow: 8px 8px 0px #605470">
            <div class="absolute top-0 right-0 bg-[#AE99D2] h-8 w-8 rounded-tr-4xl"></div>
            <div class="absolute top-20 left-0 bg-[#AE99D2] h-4 w-7"></div>
            <div class="absolute bottom-10 right-0 bg-[#AE99D2] h-4 w-4"></div>
            <div class="absolute bottom-8 left-15 bg-[#AE99D2] h-2 w-2"></div>

            <img src="../imgs/icones/emojiOtima.png" alt="Emoji muito feliz" class="w-40">

            <div class="text-center">
                <h2 class="text-4xl text-[#FEF37E]" style="text-shadow: 3px 3px 0px #605470">Ótima</h2>

                <div
                    class="opacity-0 max-h-0 transition-all duration-600 group-focus-within:max-h-40 group-focus-within:opacity-100 group-hover:max-h-40 group-hover:opacity-100">
                    <p class="text-xl text-[#F8FBA6]">Pois traduziu todas as frases corretamente</p>

                    <!--Escolher avalião muito boa-->
                    <button type="button" onclick="abrirForm()"
                        class="relative z-20 mt-2 bg-[#746587] text-[#F8FBA6] px-3 py-1 transition duration-300 hover:bg-[#625672]"
                        style="box-shadow: 2px 2px 0px #625672">
                        Selecionar
                    </button>
                </div>
            </div>
        </div>

        <!--Card de avalião boa-->
        <div data-aos="fade-up" data-aos-duration="1000"
            class="flex flex-col justify-center flex-justify-center items-center bg-[#9E8CBE] rounded-4xl w-52 py-4 px-2 relative group lg:mt-32"
            style="box-shadow: 8px 8px 0px #605470">
            <div class="absolute top-0 right-0 bg-[#AE99D2] h-8 w-8 rounded-tr-4xl"></div>
            <div class="absolute top-20 left-0 bg-[#AE99D2] h-4 w-7"></div>
            <div class="absolute bottom-10 right-0 bg-[#AE99D2] h-4 w-4"></div>
            <div class="absolute bottom-8 left-15 bg-[#AE99D2] h-2 w-2"></div>

            <img src="../imgs/icones/emojiBoa.png" alt="Emoji feliz" class="w-40">

            <div class="text-center">
                <h2 class="text-4xl text-[#FEF37E]" style="text-shadow: 3px 3px 0px #605470">Boa</h2>

                <div
                    class="opacity-0 max-h-0 transition-all duration-600 group-focus-within:max-h-40 group-focus-within:opacity-100 group-hover:max-h-40 group-hover:opacity-100">
                    <p class="text-xl text-[#F8FBA6]">Pois traduziu quase todas as frases corretamente</p>

                    <!--Escolher avalião boa-->
                    <button type="button" onclick="abrirForm()"
                        class="relative z-20 mt-2 bg-[#746587] text-[#F8FBA6] px-3 py-1 transition duration-300 hover:bg-[#625672]"
                        style="box-shadow: 2px 2px 0px #625672">
                        Selecionar
                    </button>
                </div>
            </div>
        </div>

        <!--Card de avalião ruim-->
        <div data-aos="fade-up" data-aos-duration="1500"
            class="flex flex-col justify-center items-center bg-[#9E8CBE] rounded-4xl w-52 py-4 px-2 relative group lg:mt-32"
            style="box-shadow: 8px 8px 0px #605470">
            <div class="absolute top-0 right-0 bg-[#AE99D2] h-8 w-8 rounded-tr-4xl"></div>
            <div class="absolute top-20 left-0 bg-[#AE99D2] h-4 w-7"></div>
            <div class="absolute bottom-10 right-0 bg-[#AE99D2] h-4 w-4"></div>
            <div class="absolute bottom-8 left-15 bg-[#AE99D2] h-2 w-2"></div>

            <img src="../imgs/icones/emojiRuim.png" alt="Emoji triste" class="w-40">

            <div class="text-center">
                <h2 class="text-4xl text-[#FEF37E]" style="text-shadow: 3px 3px 0px #605470">Ruim</h2>

                <div
                    class="opacity-0 max-h-0 transition-all duration-600 group-focus-within:max-h-40 group-focus-within:opacity-100 group-hover:max-h-40 group-hover:opacity-100">
                    <p class="text-xl text-[#F8FBA6]">Pois não traduziu nenhuma das frases corretamente</p>

                    <!--Escolher avalião ruim-->
                    <button type="button" onclick="abrirForm()"
                        class="mt-2 relative z-20 bg-[#746587] text-[#F8FBA6] px-3 py-1 transition duration-300 hover:bg-[#625672]"
                        style="box-shadow: 2px 2px 0px #625672">
                        Selecionar
                    </button>
                </div>
            </div>
        </div>
    </div>



    <!--Seção da justificativa para a avliação-->
    <section id="secaoJustificativa"
        class="hidden fixed inset-0 flex items-center justify-center bg-gray-50/50 z-[9999] lg:mt-20">

        <!--Card da justificativa para a avliação-->
        <div class="bg-white mt-5 m-2 lg:mb-20 lg:ml-20">
            <div class="flex-col py-3 px-10 text-center rounded-4xl rounded-br-none border-2 border-[#746587] lg:w-4xl"
                style="box-shadow: 5px 14px 0px #746587">

                <h1 id="titulo"
                    class="text-7xl text-shadow-lg decoration-4 decoration-[#746587] underline underline-offset-15">
                    Justifique sua resposta</h1>

                <!--Formulário que engloba todas as etapas da avaliação-->
                <form action="" method="post">
                    <!--Etapa 1 da avaliação-->
                    <section id="formEtapa1" class="hidden">
                        <!--Pergunta 1-->
                        <div class="flex-col mt-5 flex justify-center items-center">
                            <label for="pergunta" class="mt-5 text-[#413E45] text-2xl lg:mt-0">Todas as traduções foram
                                feitas
                                corretamente?</label>

                            <div class=" lg:flex lg:flex-row gap-5">
                                <!--Opção 1-->
                                <div class="flex gap-2 items-center">
                                    <input type="checkbox" name="opcao" value="sim"
                                        class="text-[#746587] rounded-sm border-black focus:ring-white">
                                    <label for="default-checkbox-1" class=" text-lg text-[#413E45]">Sim</label>
                                </div>

                                <!--Opção 2-->
                                <div class="flex gap-2 items-center">
                                    <input type="checkbox" name="opcao" value="mediano"
                                        class="text-[#746587] rounded-sm border-black focus:ring-white">
                                    <label for="default-checkbox-1" class=" text-lg text-[#413E45]">Mais ou
                                        menos</label>
                                </div>

                                <!--Opção 3-->
                                <div class="flex gap-2 items-center">
                                    <input type="checkbox" name="opcao" value="nao"
                                        class="text-[#746587] rounded-sm border-black focus:ring-white">
                                    <label for="default-checkbox-1" class=" text-lg text-[#413E45]">Não</label>
                                </div>
                            </div>
                        </div>

                        <!--Pergunta 2-->
                        <div class="flex-col mt-5 flex justify-center items-center">
                            <label for="pergunta" class="mt-5 text-[#413E45] text-2xl lg:mt-0">
                                Após a tradução, o contexto da frase foi mantido?
                            </label>

                            <div class="lg:flex lg:flex-row gap-5">
                                <!--Opção 1-->
                                <div class="flex gap-2 items-center">
                                    <input type="checkbox" name="opcao" value="sim"
                                        class="text-[#746587] rounded-sm border-black focus:ring-white">
                                    <label for="default-checkbox-1" class=" text-lg text-[#413E45]">Sim</label>
                                </div>

                                <!--Opção 2-->
                                <div class="flex gap-2 items-center">
                                    <input type="checkbox" name="opcao" value="mediano"
                                        class="text-[#746587] rounded-sm border-black focus:ring-white">
                                    <label for="default-checkbox-1" class=" text-lg text-[#413E45]">Mais ou
                                        menos</label>
                                </div>

                                <!--Opção 3-->
                                <div class="flex gap-2 items-center">
                                    <input type="checkbox" name="opcao" value="nao"
                                        class="text-[#746587] rounded-sm border-black focus:ring-white">
                                    <label for="default-checkbox-1" class=" text-lg text-[#413E45]">Não</label>
                                </div>
                            </div>
                        </div>

                        <!--Pergunta 3-->
                        <div class="flex-col mt-5 flex justify-center items-center">
                            <label for="pergunta" class="mt-5 text-[#413E45] text-2xl lg:mt-0">A linguagem usada pela
                                ferramenta
                                foi compreenssiva?</label>

                            <div class="lg:flex lg:flex-row gap-5">
                                <!--Opção 1-->
                                <div class="flex gap-2 items-center">
                                    <input type="checkbox" name="opcao" value="sim"
                                        class="text-[#746587] rounded-sm border-black focus:ring-white">
                                    <label for="default-checkbox-1" class=" text-lg text-[#413E45]">Sim</label>
                                </div>

                                <!--Opção 2-->
                                <div class="flex gap-2 items-center">
                                    <input type="checkbox" name="opcao" value="mediano"
                                        class="text-[#746587] rounded-sm border-black focus:ring-white">
                                    <label for="default-checkbox-1" class=" text-lg text-[#413E45]">Mais ou
                                        menos</label>
                                </div>

                                <!--Opção 3-->
                                <div class="flex gap-2 items-center">
                                    <input type="checkbox" name="opcao" value="nao"
                                        class="text-[#746587] rounded-sm border-black focus:ring-white">
                                    <label for="default-checkbox-1" class=" text-lg text-[#413E45]">Não</label>
                                </div>
                            </div>
                        </div>

                        <!--Pergunta 4-->
                        <div class="flex-col mt-5 flex justify-center items-center">
                            <label for="pergunta" class="mt-5 text-[#413E45] text-2xl lg:mt-0">
                                Você aprendeu novas gírias, abreviações ou emojis com a ferramenta?
                            </label>

                            <div class="lg:flex lg:flex-row gap-5">
                                <!--Opção 1-->
                                <div class="flex gap-2 items-center">
                                    <input type="checkbox" name="opcao" value="sim"
                                        class="text-[#746587] rounded-sm border-black focus:ring-white">
                                    <label for="default-checkbox-1" class=" text-lg text-[#413E45]">Sim</label>
                                </div>

                                <!--Opção 2-->
                                <div class="flex gap-2 items-center">
                                    <input type="checkbox" name="opcao" value="mediano"
                                        class="text-[#746587] rounded-sm border-black focus:ring-white">
                                    <label for="default-checkbox-1" class=" text-lg text-[#413E45]">Mais ou
                                        menos</label>
                                </div>

                                <!--Opção 3-->
                                <div class="flex gap-2 items-center">
                                    <input type="checkbox" name="opcao" value="nao"
                                        class="text-[#746587] rounded-sm border-black focus:ring-white">
                                    <label for="default-checkbox-1" class=" text-lg text-[#413E45]">Não</label>
                                </div>
                            </div>
                        </div>

                        <button type="button" onclick="abrirEtapa2()"
                            class="mt-5 
                    py-2 px-5 rounded-3xl bg-black text-white border-2 hover:bg-yellow-200 hover:text-black transition duration-700">
                            Próxima etapa
                        </button>
                    </section>
                    <!--Fim da etapa 1 do formulario-->



                    
                    <!--Etapa 2 do formulario-->
                    <section id="formEtapa2" class="hidden">

                        <!--Pergunta 8-->
                        <div class="flex-col mt-5 flex justify-center items-center">
                            <label for="pergunta" class="mt-5 text-[#413E45] text-2xl lg:mt-0">
                                Você usaria essa ferramenta no seu dia a dia?
                            </label>

                            <div class="lg:flex lg:flex-row gap-5">
                                <!--Opção 1-->
                                <div class="flex gap-2 items-center">
                                    <input type="checkbox" name="opcao" value="sim"
                                        class="text-[#746587] rounded-sm border-black focus:ring-white">
                                    <label for="default-checkbox-1" class=" text-lg text-[#413E45]">Sim</label>
                                </div>

                                <!--Opção 2-->
                                <div class="flex gap-2 items-center">
                                    <input type="checkbox" name="opcao" value="mediano"
                                        class="text-[#746587] rounded-sm border-black focus:ring-white">
                                    <label for="default-checkbox-1" class=" text-lg text-[#413E45]">Mais ou
                                        menos</label>
                                </div>

                                <!--Opção 3-->
                                <div class="flex gap-2 items-center">
                                    <input type="checkbox" name="opcao" value="nao"
                                        class="text-[#746587] rounded-sm border-black focus:ring-white">
                                    <label for="default-checkbox-1" class=" text-lg text-[#413E45]">Não</label>
                                </div>
                            </div>
                        </div>

                        <!--Pergunta 6-->
                        <div class="flex-col mt-5 flex justify-center items-center">
                            <label for="pergunta" class="mt-5 text-[#413E45] text-2xl lg:mt-0">
                                A sua compreenssão sobre a linguagem formal melhorou?
                            </label>

                            <div class="lg:flex lg:flex-row gap-5">
                                <!--Opção 1-->
                                <div class="flex gap-2 items-center">
                                    <input type="checkbox" name="opcao" value="sim"
                                        class="text-[#746587] rounded-sm border-black focus:ring-white">
                                    <label for="default-checkbox-1" class=" text-lg text-[#413E45]">Sim</label>
                                </div>

                                <!--Opção 2-->
                                <div class="flex gap-2 items-center">
                                    <input type="checkbox" name="opcao" value="mediano"
                                        class="text-[#746587] rounded-sm border-black focus:ring-white">
                                    <label for="default-checkbox-1" class=" text-lg text-[#413E45]">Mais ou
                                        menos</label>
                                </div>

                                <!--Opção 3-->
                                <div class="flex gap-2 items-center">
                                    <input type="checkbox" name="opcao" value="nao"
                                        class="text-[#746587] rounded-sm border-black focus:ring-white">
                                    <label for="default-checkbox-1" class=" text-lg text-[#413E45]">Não</label>
                                </div>
                            </div>
                        </div>

                        <!--Pergunta 7-->
                        <div class="flex-col mt-5 flex justify-center items-center">
                            <label for="pergunta" class="mt-5 text-[#413E45] text-2xl lg:mt-0">
                                A sua compreenssão sobre a linguagem informal melhorou?
                            </label>

                            <div class="lg:flex lg:flex-row gap-5">
                                <!--Opção 1-->
                                <div class="flex gap-2 items-center">
                                    <input type="checkbox" name="opcao" value="sim"
                                        class="text-[#746587] rounded-sm border-black focus:ring-white">
                                    <label for="default-checkbox-1" class=" text-lg text-[#413E45]">Sim</label>
                                </div>

                                <!--Opção 2-->
                                <div class="flex gap-2 items-center">
                                    <input type="checkbox" name="opcao" value="mediano"
                                        class="text-[#746587] rounded-sm border-black focus:ring-white">
                                    <label for="default-checkbox-1" class=" text-lg text-[#413E45]">Mais ou
                                        menos</label>
                                </div>

                                <!--Opção 3-->
                                <div class="flex gap-2 items-center">
                                    <input type="checkbox" name="opcao" value="nao"
                                        class="text-[#746587] rounded-sm border-black focus:ring-white">
                                    <label for="default-checkbox-1" class=" text-lg text-[#413E45]">Não</label>
                                </div>
                            </div>
                        </div>


                        <button type="button" onclick="abrirEtapa3()"
                            class="mt-5 
                    py-2 px-5 rounded-3xl bg-black text-white border-2 hover:bg-yellow-200 hover:text-black transition duration-700">
                            Próxima etapa
                        </button>
                    </section>
                    <!--Fim da etapa 2 do formulario-->



                    <!--Etapa 3 do formulario-->
                    <section id="formEtapa3" class="hidden">
                        <!--Pergunta 8-->
                        <div class="flex-col mt-5 flex justify-center items-center">
                            <label for="pergunta" class="mt-5 text-[#413E45] text-2xl lg:mt-0">
                                Você gostaria de nos enviar alguma observação?
                            </label>

                            <div class="lg:flex lg:flex-row gap-5">
                                <textarea name="" id="" placeholder="..."
                                    class="resize-none bg-[#F8FBA6] px-4 h-74 outline-none border-none focus:outline-none focus:ring-0 hover:border-none lg:h-28 lg:w-xl"></textarea>

                            </div>
                        </div>

                        <button type="button" onclick="fecharForm()"
                            class="mt-5 
                    py-2 px-5 rounded-3xl bg-black text-white border-2 hover:bg-yellow-200 hover:text-black transition duration-700">
                            Enviar avaliacao
                        </button>
                    </section>
                    <!--Fim da etapa 3 do formulario-->
                </form>
            </div>
        </div>
    </section>
</div>

<!--Rodapé-->
<?php
require('footer.php');
?>