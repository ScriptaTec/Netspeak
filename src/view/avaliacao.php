<!--Cabeçalho-->
<?php
require('header.php');
?>


<div class="lg:bg-[url(../imgs/fundoAvaliacao.png)] bg-no-repeat">

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
        class="hidden fixed inset-0 flex items-center justify-center bg-gray-50/50 z-[9999]">

        <!--Card da justificativa para a avliação-->
        <div class="bg-white mt-5 m-2 max-h-screen overflow-y-auto lg:mb-20 lg:ml-20">
            <div class="flex-col py-3 px-10 text-center rounded-4xl border-2 border-[#746587] lg:w-4xl">

                <div class="flex flex-col justify-center gap-4 items-center lg:relative lg:flex-row lg:gap-0">
                    <button type="button" onclick="voltarEtapa()" class="flex items-center ">
                        <img src="../imgs/icones/voltar.png" alt="Voltar etapa"
                            class="w-10 h-10 flex justify-center lg:absolute left-0">
                    </button>

                    <h1 id="titulo"
                        class="text-7xl text-shadow-lg decoration-4 decoration-[#746587] underline underline-offset-15">
                        Justifique sua resposta</h1>
                </div>

                <!--Formulário que engloba todas as etapas da avaliação-->
                <form action="../controller/controller_avaliacao.php" method="post">
                    <input type="hidden" name="avaliacao_geral" id="avaliacao_geral_input">
<input type="hidden" name="nota" id="nota_input">

                    <!--Etapa 1 da avaliação-->
                    <section id="formEtapa1" class="hidden">

                        <!--Pergunta 1-->
                        <div class="flex-col mt-5 flex justify-center items-center">
                            <label for="p1" class="mt-5 text-[#413E45] text-2xl lg:mt-0">Todas as traduções foram
                                feitas
                                corretamente?</label>

                            <div class=" lg:flex lg:flex-row gap-5">
                                <!--Opção 1-->
                                <div class="flex gap-2 items-center">
                                    <input type="radio" name="p1" value="1" required
                                        class="text-[#746587] rounded-sm border-black focus:ring-white">
                                    <label for="p1" class=" text-lg text-[#413E45]">Sim</label>
                                </div>

                                <!--Opção 2-->
                                <div class="flex gap-2 items-center">
                                    <input type="radio" name="p1" value="2" required
                                        class="text-[#746587] rounded-sm border-black focus:ring-white">
                                    <label for="p1" class=" text-lg text-[#413E45]">Mais ou
                                        menos</label>
                                </div>

                                <!--Opção 3-->
                                <div class="flex gap-2 items-center">
                                    <input type="radio" name="p1" value="3" required
                                        class="text-[#746587] rounded-sm border-black focus:ring-white">
                                    <label for="p1" class=" text-lg text-[#413E45]">Não</label>
                                </div>
                            </div>
                        </div>

                        <!--Pergunta 2-->
                        <div class="flex-col mt-5 flex justify-center items-center">
                            <label for="p2" class="mt-5 text-[#413E45] text-2xl lg:mt-0">
                                Após a tradução, o contexto da frase foi mantido?
                            </label>

                            <div class="lg:flex lg:flex-row gap-5">
                                <!--Opção 1-->
                                <div class="flex gap-2 items-center">
                                    <input type="radio" name="p2" value="1" required
                                        class="text-[#746587] rounded-sm border-black focus:ring-white">
                                    <label for="p2" class=" text-lg text-[#413E45]">Sim</label>
                                </div>

                                <!--Opção 2-->
                                <div class="flex gap-2 items-center">
                                    <input type="radio" name="p2" value="2" required
                                        class="text-[#746587] rounded-sm border-black focus:ring-white">
                                    <label for="p2" class=" text-lg text-[#413E45]">Mais ou
                                        menos</label>
                                </div>

                                <!--Opção 3-->
                                <div class="flex gap-2 items-center">
                                    <input type="radio" name="p2" value="3" required
                                        class="text-[#746587] rounded-sm border-black focus:ring-white">
                                    <label for="p2" class=" text-lg text-[#413E45]">Não</label>
                                </div>
                            </div>
                        </div>

                        <!--Pergunta 3-->
                        <div class="flex-col mt-5 flex justify-center items-center">
                            <label for="p3" class="mt-5 text-[#413E45] text-2xl lg:mt-0">A linguagem usada pela
                                ferramenta
                                foi compreenssiva?</label>

                            <div class="lg:flex lg:flex-row gap-5">
                                <!--Opção 1-->
                                <div class="flex gap-2 items-center">
                                    <input type="radio" name="p3" value="1" required
                                        class="text-[#746587] rounded-sm border-black focus:ring-white">
                                    <label for="p3" class=" text-lg text-[#413E45]">Sim</label>
                                </div>

                                <!--Opção 2-->
                                <div class="flex gap-2 items-center">
                                    <input type="radio" name="p3" value="2" required
                                        class="text-[#746587] rounded-sm border-black focus:ring-white">
                                    <label for="p3" class=" text-lg text-[#413E45]">Mais ou
                                        menos</label>
                                </div>

                                <!--Opção 3-->
                                <div class="flex gap-2 items-center">
                                    <input type="radio" name="p3" value="3" required
                                        class="text-[#746587] rounded-sm border-black focus:ring-white">
                                    <label for="p3" class=" text-lg text-[#413E45]">Não</label>
                                </div>
                            </div>
                        </div>

                        <!--Pergunta 4-->
                        <div class="flex-col mt-5 flex justify-center items-center">
                            <label for="p4" class="mt-5 text-[#413E45] text-2xl lg:mt-0">
                                Você aprendeu novas gírias, abreviações ou emojis com a ferramenta?
                            </label>

                            <div class="lg:flex lg:flex-row gap-5">
                                <!--Opção 1-->
                                <div class="flex gap-2 items-center">
                                    <input type="radio" name="p4" value="1" required
                                        class="text-[#746587] rounded-sm border-black focus:ring-white">
                                    <label for="p4" class=" text-lg text-[#413E45]">Sim</label>
                                </div>

                                <!--Opção 2-->
                                <div class="flex gap-2 items-center">
                                    <input type="radio" name="p4" value="2" required
                                        class="text-[#746587] rounded-sm border-black focus:ring-white">
                                    <label for="p4" class=" text-lg text-[#413E45]">Mais ou
                                        menos</label>
                                </div>

                                <!--Opção 3-->
                                <div class="flex gap-2 items-center">
                                    <input type="radio" name="p4" value="3" required
                                        class="text-[#746587] rounded-sm border-black focus:ring-white">
                                    <label for="p4" class=" text-lg text-[#413E45]">Não</label>
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
                            <label for="p5" class="mt-5 text-[#413E45] text-2xl lg:mt-0">
                                Você usaria essa ferramenta no seu dia a dia?
                            </label>

                            <div class="lg:flex lg:flex-row gap-5">
                                <!--Opção 1-->
                                <div class="flex gap-2 items-center">
                                    <input type="radio" name="p5" value="1" required
                                        class="text-[#746587] rounded-sm border-black focus:ring-white">
                                    <label for="p5" class=" text-lg text-[#413E45]">Sim</label>
                                </div>

                                <!--Opção 2-->
                                <div class="flex gap-2 items-center">
                                    <input type="radio" name="p5" value="2" required
                                        class="text-[#746587] rounded-sm border-black focus:ring-white">
                                    <label for="p5" class=" text-lg text-[#413E45]">Mais ou
                                        menos</label>
                                </div>

                                <!--Opção 3-->
                                <div class="flex gap-2 items-center">
                                    <input type="radio" name="p5" value="3" required
                                        class="text-[#746587] rounded-sm border-black focus:ring-white">
                                    <label for="p5" class=" text-lg text-[#413E45]">Não</label>
                                </div>
                            </div>
                        </div>

                        <!--Pergunta 6-->
                        <div class="flex-col mt-5 flex justify-center items-center">
                            <label for="p6" class="mt-5 text-[#413E45] text-2xl lg:mt-0">
                                A sua compreenssão sobre a linguagem formal melhorou?
                            </label>

                            <div class="lg:flex lg:flex-row gap-5">
                                <!--Opção 1-->
                                <div class="flex gap-2 items-center">
                                    <input type="radio" name="p6" value="1" required
                                        class="text-[#746587] rounded-sm border-black focus:ring-white">
                                    <label for="p6" class=" text-lg text-[#413E45]">Sim</label>
                                </div>

                                <!--Opção 2-->
                                <div class="flex gap-2 items-center">
                                    <input type="radio" name="p6" value="2" required
                                        class="text-[#746587] rounded-sm border-black focus:ring-white">
                                    <label for="p6" class=" text-lg text-[#413E45]">Mais ou
                                        menos</label>
                                </div>

                                <!--Opção 3-->
                                <div class="flex gap-2 items-center">
                                    <input type="radio" name="p6" value="3" required
                                        class="text-[#746587] rounded-sm border-black focus:ring-white">
                                    <label for="p6" class=" text-lg text-[#413E45]">Não</label>
                                </div>
                            </div>
                        </div>

                        <!--Pergunta 7-->
                        <div class="flex-col mt-5 flex justify-center items-center">
                            <label for="p7" class="mt-5 text-[#413E45] text-2xl lg:mt-0">
                                A sua compreenssão sobre a linguagem informal melhorou?
                            </label>

                            <div class="lg:flex lg:flex-row gap-5">
                                <!--Opção 1-->
                                <div class="flex gap-2 items-center">
                                    <input type="radio" name="p7" value="1" required
                                        class="text-[#746587] rounded-sm border-black focus:ring-white">
                                    <label for="p7" class=" text-lg text-[#413E45]">Sim</label>
                                </div>

                                <!--Opção 2-->
                                <div class="flex gap-2 items-center">
                                    <input type="radio" name="p7" value="2" required
                                        class="text-[#746587] rounded-sm border-black focus:ring-white">
                                    <label for="p7" class=" text-lg text-[#413E45]">Mais ou
                                        menos</label>
                                </div>

                                <!--Opção 3-->
                                <div class="flex gap-2 items-center">
                                    <input type="radio" name="p7" value="3" required
                                        class="text-[#746587] rounded-sm border-black focus:ring-white">
                                    <label for="p7" class=" text-lg text-[#413E45]">Não</label>
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
                            <label for="p8" class="mt-5 text-[#413E45] text-2xl lg:mt-0">
                                Você gostaria de nos enviar alguma observação?
                            </label>

                            <div class="lg:flex lg:flex-row gap-5">
                                <textarea name="p8" id="obs"
                                    class="resize-none bg-[#9380ac] text-white px-4 h-74 outline-none rounded-lg border-none focus:outline-none focus:ring-0 hover:border-none lg:h-28 lg:w-xl"></textarea>
                            </div>
                        </div>

                        <!--Pergunta 9-->
                        <div class="flex flex-col justify-center mt-7">

                            <label for="nota" class="text-2xl text-[#413E45]">De 0 a 10, qual nota a ferramenta merece
                                receber?</label>

                            <div class="flex flex-col justify-center items-center mt-4 gap-1 lg:flex-row">
                                <div class="flex">
                                    <button type="button" class="btn-estrela flex flex-col items-center">
                                        <svg class="w-10 h-10 ms-1 text-gray-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>

                                        <span class="text-lg text-[#413E45]">1</span>
                                    </button>
                                    <button type="button" class="btn-estrela flex flex-col items-center">
                                        <svg class="w-10 h-10 ms-1 text-gray-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>

                                        <span class="text-lg text-[#413E45]">2</span>
                                    </button>
                                    <button type="button" class="btn-estrela flex flex-col items-center">
                                        <svg class="w-10 h-10 ms-1 text-gray-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>

                                        <span class="text-lg text-[#413E45]">3</span>
                                    </button>
                                    <button type="button" class="btn-estrela flex flex-col items-center">
                                        <svg class="w-10 h-10 ms-1 text-gray-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>

                                        <span class="text-lg text-[#413E45]">4</span>
                                    </button>
                                    <button type="button" class="btn-estrela flex flex-col items-center">
                                        <svg class="w-10 h-10 ms-1 text-gray-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>

                                        <span class="text-lg text-[#413E45]">5</span>
                                    </button>
                                </div>

                                <div class="flex mt-2">
                                    <button type="button" class="btn-estrela flex flex-col items-center">
                                        <svg class="w-10 h-10 ms-1 text-gray-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>

                                        <span class="text-lg text-[#413E45]">6</span>
                                    </button>
                                    <button type="button" class="btn-estrela flex flex-col items-center">
                                        <svg class="w-10 h-10 ms-1 text-gray-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>

                                        <span class="text-lg text-[#413E45]">7</span>
                                    </button>
                                    <button type="button" class="btn-estrela flex flex-col items-center">
                                        <svg class="w-10 h-10 ms-1 text-gray-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>

                                        <span class="text-lg text-[#413E45]">8</span>
                                    </button>
                                    <button type="button" class="btn-estrela flex flex-col items-center">
                                        <svg class="w-10 h-10 ms-1 text-gray-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>

                                        <span class="text-lg text-[#413E45]">9</span>
                                    </button>
                                    <button type="button" class="btn-estrela flex flex-col items-center">
                                        <svg class="w-10 h-10 ms-1 text-gray-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>

                                        <span class="text-lg text-[#413E45]">10</span>
                                    </button>
                                </div>
                            </div>
                        </div>


                        <button type="submit" onclick="fecharForm()"
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