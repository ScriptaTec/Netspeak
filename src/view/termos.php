<!--Termos de uso do site-->
<div
    class="termo relative max-h-screen overflow-y-auto bg-white w-3xl rounded-4xl border-2 border-gray-800 shadow-xl text-justify hover:border-black transition duration-900">

    <div class="flex justify-around">

        <div class="flex flex-col gap-5 py-10 px-5 bg-[#F8FBA6] shadow-lg">
            <!--Voltar-->
            <button type="button" onclick="sair()">
                <img src="../imgs/icones/voltar.png" alt="Voltar etapa" class="w-8 h-8">
            </button>

            <!--Navegação-->
            <ul class="flex flex-col gap-2">
                <button type="button" id="btn-1" class="btn-etapa">
                    <li class="flex items-center text-black text-xl gap-4">
                        <span class="ml-1.5 text-shadow-sm ">
                            😼
                        </span>
                        <span>
                            <h3>Introdução</h3>
                        </span>
                    </li>
                </button>

                <button type="button" id="btn-2" class="btn-etapa">
                    <li class="flex items-center text-[#746587] text-xl font-semibold gap-4">
                        <span
                            class="flex items-center justify-center shadow-sm w-8 h-8 border-2 border-[#746587] rounded-full">
                            1
                        </span>
                        <span>
                            <h3>Coleta de dados</h3>
                        </span>
                    </li>
                </button>

                <button type="button" id="btn-3" class="btn-etapa">
                    <li class="flex items-center text-[#413E45] text-xl gap-4">
                        <span class="flex items-center justify-center w-8 h-8 border border-[#413E45] rounded-full">
                            2
                        </span>
                        <span>
                            <h3>Uso do site</h3>
                        </span>
                    </li>
                </button>

                <button type="button" id="btn-4" class="btn-etapa">
                    <li class="flex items-center text-[#413E45] text-xl gap-4">
                        <span class="flex items-center justify-center w-8 h-8 border border-[#413E45] rounded-full">
                            3
                        </span>
                        <span>
                            <h3>Privacidade</h3>
                        </span>
                    </li>
                </button>

                <button type="button" id="btn-5" class="btn-etapa">
                    <li class="flex items-center text-[#413E45] text-xl gap-4">
                        <span class="flex items-center justify-center w-8 h-8 border border-[#413E45] rounded-full">
                            4
                        </span>
                        <span>
                            <h3>Responsabilidade</h3>
                        </span>
                    </li>
                </button>

                <button type="button" id="btn-6" class="btn-etapa">
                    <li class="flex items-center text-[#413E45] text-xl gap-4">
                        <span class="flex items-center justify-center w-8 h-8 border border-[#413E45] rounded-full">
                            5
                        </span>
                        <span>
                            <h3>Contato</h3>
                        </span>
                    </li>
                </button>
            </ul>
        </div>

        <!--Resultado das navegações-->
        <div id="etapa1" class="etapa py-5 px-5">
            <h1 class="text-7xl text-center">Termos de uso</h1>

            <p>O Emoji Moji é um web site desenvolvido pelas bolsistas Ana Beatriz Kraemer Ferreira e Bianca
                Jussara Wolff, como parte de um projeto de pesquisa sobre a linguagem da internet (netspeak). O
                objetivo do projeto é possibilitar que os usuários utilizem a plataforma para traduzir frases
                entre a linguagem formal e informal, aprimoramento sua compreensão sobre ambas. Por meio dessa
                interação, o usuário avaliará a ferramenta e estes dados serão utilizados para determinar a
                qualidade e eficácia do software.
            </p>
        </div>

        <div id="etapa2" class="etapa hidden py-5 px-5">

            <h2 class="text-xl">1. Coleta e uso de informações
            </h2>

            <spam>Para participar das atividades do site, iremos solicitar algumas informações básicas, como:
            </spam>

            <ul class="flex justify-around list-disc">
                <div class="flex flex-col">
                    <li>Nome completo;</li>
                    <li>E-mail;</li>
                    <li>Data de nascimento;</li>
                </div>

                <div class="flex flex-col">
                    <li>Gênero;</li>
                    <li>Grau de escolaridade</li>
                    <li>Grau de dificuldade com a tecnologia</li>
                </div>
            </ul>

            <p class="mt-2">Esses dados serão utilizados exclusivamente para fins de pesquisa e não serão
                compartilhados com terceiros, comercializados ou utilizados para fins publicitários.
            </p>
        </div>

        <div id="etapa3" class="etapa hidden py-5 px-5">
            <p>O Emoji Moji é voltado para fins de estudo e utilização da ferramenta de tradução. Ao utilizá-lo,
                você concorda em:
            </p>

            <ul class="ml-10 list-disc">
                <li>Fornecer informações pessoais verídicas;
                </li>
                <li>Relatar sua experiência de forma honesta e construtiva, ao avaliar a ferramenta.
                </li>
            </ul>
        </div>

        <div id="etapa4" class="etapa hidden py-5 px-5">
            <h5 class="text-xl">Responsabilidade</h5>

            <p>O Emoji Moji é um projeto de pesquisa e, por isso, pode conter ajustes e atualizações ao longo do
                tempo. Nós nos esforçamos para manter o site funcionando corretamente, mas não garantimos
                disponibilidade contínua ou ausência de falhas.
            </p>
        </div>

        <div id="etapa5" class="etapa hidden py-5 px-5">
            <h6 class="text-xl mt-5">Contato</h6>

            <p>Se você tiver dúvidas ou quiser saber mais sobre o projeto, entre em contato:
                E-mail: scripta.tech@gmail.com
            </p>

            <span>Data: 04/08/2025</span>
        </div>
    </div>
</div>

<script>
// 1. Seleciona todos os elementos necessários
const todosBotoes = document.querySelectorAll('.btn-etapa');
const todosConteudos = document.querySelectorAll('.etapa');

// 2. Itera sobre cada botão para adicionar o evento de clique
todosBotoes.forEach(botao => {
    botao.addEventListener('click', () => {
        // Pega o ID do botão clicado (ex: "etapa1")
        const idBotao = botao.id; 
        
        // Constrói o ID do conteúdo alvo (ex: "conteudo-etapa1")
        const idConteudoAlvo = 'conteudo-' + idBotao;

        // --- Lógica de Reset ---
        // 3. Esconde todos os conteúdos
        todosConteudos.forEach(conteudo => {
            conteudo.classList.add('hidden');
        });

        // 4. Remove a classe 'hidden' de todos os botões
        todosBotoes.forEach(b => {
            b.classList.remove('hidden');
        });

        // --- Lógica de Ativação ---
        // 5. Mostra o conteúdo correto
        const conteudoAlvo = document.getElementById(idConteudoAlvo);
        if (conteudoAlvo) {
            conteudoAlvo.classList.remove('hidden');
        }

        // 6. Adiciona a classe 'hidden' ao botão clicado
        botao.classList.add('hidden');
    });
});
</script>