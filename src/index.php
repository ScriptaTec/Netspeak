<?php
require("view/header.php")
    ?>

<div class="h-screen lg:bg-[url(imgs/index.png)] bg-no-repeat bg-center">
    <header class="flex justify-between items-center p-3 relative z-50">
        <div class="w-20">
            <a href="tradutor.php"><img src="../imgs/logo.png" alt="Logo do site"></a>
        </div>

        <div class="flex items-center gap-5 text-lg">
            <a href="view/login.php" class="text-[#413E45] hover:underline hover:underline-offset-2 hover:decoration-2">
                Entrar
            </a>

            <div
                class="px-2 py-1 text-[#746587] border-[#746587] rounded-lg bg-[#F8FBA6] shadow-[#746587] shadow-xs transition duration-900 ease-in-out hover:bg-black hover:text-white">
                <a href="view/cadastro.php">
                    Cadastrar-se
                </a>
            </div>
        </div>
    </header>

    <img src="/imgs/index.png" alt="Capa do site" class="lg:hidden">

    <div class="text-right flex justify-center items-center lg:mt-0 lg:block">
        <button data-aos="zoom-out-up" data-aos-duration="1000"
            class="lg:mt-98 lg:mr-44 text-5xl text-[#746587] bg-white border-2 border-[#746587] rounded-lg px-10 py-1 transition duration-600 hover:border-white hover:bg-[#746587] hover:text-white">testar</button>
    </div>

    <div class="hidden lg:text-center lg:block">
        <button onclick="scrollSaberMais()" class="mt-18 transition duration-800 hover:scale-105">
            <img src="/imgs/icones/saberMais.png" alt="Saiba mais" class="w-32">
        </button>
    </div>

    <!--Seção com animação de scroll-->
    <section id="ferramenta">
        <div class="flex justify-between  mt-10 bg-[#F8FBA6] py-4">
            <div class="hidden lg:block">
                <div class="bg-[#413E45] w-74 h-1 rounded-lg shadow-sm"></div>
                <div class="bg-[#413E45] mt-5 w-44 h-1 rounded-lg shadow-sm"></div>
            </div>

            <h1 data-aos="fade-up" data-aos-duration="1000" class="text-[#413E45] text-center text-7xl text-shadow-lg">
                Como a
                ferramenta funciona?</h1>

            <div class="hidden lg:block mt-10">
                <div class="bg-[#413E45] w-20 h-1 rounded-lg shadow-sm"></div>
                <div class="bg-[#413E45] mt-5 w-60 h-1 rounded-lg shadow-sm"></div>
            </div>
        </div>

        <div class="mt-10 flex flex-col justify-center items-center">
            <div class="flex flex-col lg:-ml-64">
                <span data-aos="zoom-in-right" data-aos-duration="1000" data-aos-delay="200"
                    class="text-left text-xl text-[#F8FBA6] px-4 py-3 bg-[#9E8AB7] rounded-2xl rounded-bl-none text-shadow-sm shadow-xs shadow-[#413E45]">Você
                    selecionará o tipo de tradução</span>

                <div data-aos="zoom-in-right" data-aos-duration="1000" class="-ml-88 flex flex-col items-center">
                    <img src="../imgs/icones/perfilMensagem.png" class="bg-[#F8FBA6] p-2 rounded-2xl"
                        style="box-shadow: -3px 3px 0px #746587" alt="Perfil do usuário">
                    <h2 class="mt-1 text-sm font-bold text-[#413E45]">Você</h2>
                </div>
            </div>

            <div class="flex flex-col lg:-mr-70 mb-5">
                <span data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="600"
                    class="text-left text-xl text-[#413E45] px-4 py-3 bg-[#C7AFF2] rounded-2xl rounded-br-none text-shadow-sm shadow-xs shadow-[#413E45]">
                    e receberá a frase traduzida</span>

                <div data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="500"
                    class="-mr-80 flex flex-col items-center">
                    <img src="../imgs/icones/perfilMensagem.png" class="bg-[#F8FBA6] p-2 rounded-2xl"
                        style="box-shadow: -3px 3px 0px #746587" alt="Perfil do usuário">
                    <h2 class="mt-1 text-sm font-bold text-[#413E45]">EmojiMoji</h2>
                </div>
            </div>

            <div data-aos="fade-down" data-aos-duration="1000" data-aos-delay="700"
                class="py-3 px-7 rounded-2xl bg-[#746587] text-left" style="box-shadow: 0px 8px 0px #AE99D2">

                <div class="flex items-center gap-3">
                    <div class="relative">
                        <button data-tooltip-target="tooltip-default-tipo">
                            <img src="../imgs/icones/filtro.png" alt="Abrir filtro de tradução"
                                class="w-8 mt-2"></button>
                    </div>

                    <!--Descrição do botão de tipo de tradução-->
                    <div id="tooltip-default-tipo" role="tooltip"
                        class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-[#746587] transition-opacity duration-300 bg-[#F8FBA6] rounded-lg shadow-xs opacity-0 tooltip">
                        Tipo de tradução
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>

                    <!--Atalho para emojis-->
                    <button data-tooltip-target="tooltip-default-emoji">
                        <img src="../imgs/icones/emojiBranco.png" alt="Abrir atalho para emojis" class="w-8">
                    </button>

                    <!--Descrição do botão de atalho de emojis-->
                    <div id="tooltip-default-emoji" role="tooltip"
                        class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-[#746587] transition-opacity duration-300 bg-[#F8FBA6] rounded-lg shadow-xs opacity-0 tooltip">
                        Atalho de emojis
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>

                    <!--Exemplos de frases-->
                    <div
                        class="py-2 px-3 rounded-xl bg-white text-gray-500 text-xl focus:outline-none focus:border-0 hover:border-0 focus:shadow-none focus:ring-black hover:text-[#543A82] transition-all duration-700 lg:w-120">
                        <span id="typed-output" class="pl-2 text-xl">
                            <!--Animação da letra e as palavras chaves no arquivo animacao.js-->
                        </span>
                    </div>

                    <!--Botão para enviar a frase-->
                    <button type="submit" class="group relative w-8 h-8" data-tooltip-target="tooltip-default-enviar">
                        <img src="../imgs/icones/enviar.png" alt="Ícone de enviar frase para ser traduzida"
                            class="absolute inset-0 group-hover:opacity-0 transition-opacity duration-500">

                        <img src="../imgs/icones/enviarHover.png" alt="Ícone de enviar frase para ser traduzida"
                            class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </button>

                    <!--Descrição do botão de enviar-->
                    <div id="tooltip-default-enviar" role="tooltip"
                        class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-[#746587] transition-opacity duration-300 bg-[#F8FBA6] rounded-lg shadow-xs opacity-0 tooltip">
                        Enviar a frase que será traduzida
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Seção de atalhos-->
    <div class="h-screen lg:bg-[url(imgs/atalhos.png)] bg-no-repeat bg-center mt-16">
        <div class="flex flex-col m-2 mr-3 text-center lg:flex-row lg:justify-center lg:p-32 gap-10">

            <div class="flex flex-col gap-5">
                <!--Card sobre nós-->
                <a data-aos="fade-down" data-aos-duration="1000" href="/view/sobre_nos.php"
                    class="flex flex-col lg:w-xl px-10 py-4 bg-[#F8FBA6] rounded-3xl"
                    style="box-shadow: 10px 10px 0px #413E45">
                    <h2 class="text-8xl text-[#413E45] text-shadow-[#746587] text-shadow-sm">Sobre nós</h2>

                    <div class="flex flex-col text-3xl text-[#413E45] text-shadow-[#746587] text-shadow-xs">
                        <div class="hidden lg:block lg:flex gap-6 items-baseline">
                            <div class="bg-[#413E45] w-20 h-1 rounded-lg shadow-sm"></div>
                            <div class="bg-[#413E45] w-80 h-1 rounded-lg shadow-sm"></div>
                        </div>

                        <div class="flex gap-2 items-baseline">
                            <span>Conheça as desenvolvedoras</span>
                            <div class="hidden lg:block bg-[#413E45] w-36 h-1 rounded-lg shadow-sm"></div>
                        </div>

                        <div class="gap-2 items-baseline lg:flex">
                            <div class="hidden lg:block bg-[#413E45] w-40 h-1 rounded-lg shadow-sm"></div>
                            <span class="-mt-2 text-right">e a pesquisa ;)</span>
                            <div class="hidden lg:block bg-[#413E45] w-20 h-1 rounded-lg shadow-sm"></div>
                        </div>
                    </div>
                </a>

                <div class="flex flex-col lg:flex-row gap-10">
                    <!--Card suporte-->
                    <a data-aos="fade-right" data-aos-duration="1300" data-aos-delay="550" href="/view/suporte.php"
                        class="flex flex-col px-10 py-4 bg-[#746587] rounded-3xl"
                        style="box-shadow: 10px 10px 0px #413E45">
                        <div class="text-[#F8FBA6] text-6xl text-shadow-[#413E45] text-shadow-lg">
                            <h7>Suporte</h7>
                        </div>
                    </a>

                    <!--Card projeto-->
                    <a data-aos="fade-left" data-aos-duration="1400" data-aos-delay="600" href=""
                        class="flex flex-col px-10 py-4 bg-[#746587] rounded-3xl"
                        style="box-shadow: 10px 10px 0px #413E45">
                        <div class="text-[#F8FBA6] text-6xl text-shadow-[#413E45] text-shadow-lg">
                            <h6>Projeto</h6>
                        </div>
                    </a>
                </div>
            </div>

            <!--Card avalie a ferramenta-->
            <div class="block">
                <a data-aos="fade-left" data-aos-duration="1200" data-aos-delay="500" href="view/avaliacao.php"
                    class="flex flex-col px-10 py-4 bg-[#746587] rounded-3xl "
                    style="box-shadow: 10px 10px 0px #413E45">
                    <div class="text-[#F8FBA6] text-6xl text-shadow-[#413E45] text-shadow-lg">
                        <h3>Avalie a</h3>
                        <h4 class="-mt-4">ferramenta</h4>
                    </div>

                    <div class="flex flex-col text-3xl text-[#F8FBA6] text-shadow-[#413E45] text-shadow-sm">
                        <span>Nos conte sua</span>
                        <span class="-mt-2">experiência conosco!</span>
                    </div>
                </a>

                <div class="flex justify-center relative">
                    <img src="/imgs/icones/estrela.png" alt="" class="w-14 -mt-7 z-10">
                </div>
            </div>
        </div>
    </div>

    <!--Rodapé-->
    <footer class="bg-[#413E45] mt-32 lg:mt-0">
        <div class="mx-auto w-full max-w-screen-xl">
            <div class="px-4 py-4 md:flex items-center md:justify-between">
                <span class="text-lg text-white sm:text-center">© 2025 Scripta todos os direitos
                    reservados.
                </span>
                <div class="flex mt-4 sm:justify-center md:mt-0 space-x-5 rtl:space-x-reverse">

                    <a href="https://www.instagram.com/netspeak_2025/" class="text-white hover:text-[#F8FBA6]">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M7.75 2h8.5A5.75 5.75 0 0 1 22 7.75v8.5A5.75 5.75 0 0 1 16.25 22h-8.5A5.75 5.75 0 0 1 2 16.25v-8.5A5.75 5.75 0 0 1 7.75 2Zm0 1.5A4.25 4.25 0 0 0 3.5 7.75v8.5A4.25 4.25 0 0 0 7.75 20.5h8.5a4.25 4.25 0 0 0 4.25-4.25v-8.5A4.25 4.25 0 0 0 16.25 3.5h-8.5ZM12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10Zm0 1.5a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm4.75-.75a.75.75 0 1 1 0 1.5.75.75 0 0 1 0-1.5Z" />
                        </svg>
                        <span class="sr-only">Instagram</span>
                    </a>

                    <a href="https://github.com/ScriptaTec/" class="text-white hover:text-[#F8FBA6]">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">GitHub</span>
                    </a>

                    <a href="https://br.pinterest.com/scriptatech/" class="text-white hover:text-[#F8FBA6]">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12.04 2C6.55 2 2 6.58 2 12.1c0 4.18 2.58 7.75 6.22 9.12-.09-.77-.17-1.94.04-2.77.18-.76 1.2-5.14 1.2-5.14s-.31-.63-.31-1.55c0-1.46.85-2.55 1.9-2.55.9 0 1.34.67 1.34 1.47 0 .9-.58 2.25-.88 3.49-.25 1.05.53 1.9 1.57 1.9 1.89 0 3.17-1.99 3.17-4.86 0-2.54-1.82-4.32-4.41-4.32-3 0-4.77 2.25-4.77 4.58 0 .9.34 1.86.76 2.38a.3.3 0 0 1 .07.29c-.08.32-.26 1.05-.3 1.2-.05.2-.16.25-.38.15-1.42-.65-2.3-2.68-2.3-4.32 0-3.5 2.54-6.72 7.32-6.72 3.84 0 6.83 2.74 6.83 6.4 0 3.82-2.4 6.9-5.73 6.9-1.12 0-2.16-.58-2.52-1.26l-.69 2.64c-.25.98-.94 2.22-1.4 2.97.99.31 2.03.48 3.11.48 5.49 0 10-4.58 10-10.1C22 6.58 17.53 2 12.04 2Z" />
                        </svg>
                        <span class="sr-only">Pinterest</span>
                    </a>

                    <a href="https://mail.google.com/mail/?view=cm&fs=1&to=scripta.tech@gmail.com"
                        class="text-white hover:text-[#F8FBA6]">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2Zm0 2v.01L12 13l8-6.99V6H4Zm0 12h16V8l-8 7-8-7v10Z" />
                        </svg>
                        <span class="sr-only">E-mail</span>
                    </a>

                    <a href="https://wa.me/5547988703860?text=Oi!%20vim%20pelo%20site%20de%20vocês%20(:" target="_blank"
                        class="text-white hover:text-[#F8FBA6]">
                        <div class="relative w-4 h-4 flex items-center ">
                            <img src="/imgs/icones/whatsapp.png" alt="WhatsApp"
                                class="absolute right-0 hover:opacity-0">
                            <img src="/imgs/icones/whatsappAmarelo.png" alt="WhatsApp"
                                class="absolute right-0 opacity-0 hover:opacity-100">
                        </div>
                        <span class="sr-only">WhatsApp</span>
                    </a>

                </div>
            </div>
        </div>
    </footer>

</div>

<!--Rodapé-->

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    const ferramenta = document.getElementById("ferramenta")

    function scrollSaberMais() {
        // Função de animação pronta do js
        ferramenta.scrollIntoView({
            behavior: 'smooth',
        })
    }
    //Biblioteca de animacao
    AOS.init(
        { disable: 'mobile', }
    )

    document.addEventListener('DOMContentLoaded', function () {
        animacaoLetra()
    })
</script>

<!--Necessário para o funcionamento da biblioteca FlowBite-->
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>