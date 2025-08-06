<!--Termos de uso do site-->
<div class="relative">

    <!--Voltar-->
    <button type="button" onclick="sair()">
        <img src="../imgs/icones/voltar.png" alt="Voltar etapa" class="w-8 h-8 absolute top-9 -left-15">
    </button>

    <div
        class="max-h-screen overflow-y-auto bg-white w-3xl rounded-4xl border-2 border-gray-800 shadow-xl text-justify hover:border-black transition duration-900">

        <div class="flex justify-around">

            <div class="flex flex-col gap-2 py-10 px-5 bg-[#F8FBA6] shadow-lg">
                <button type="button" data-target="etapa1"
                    class="btn-etapa flex items-center text-black font-semibold text-xl gap-4">
                    <span class="icone ml-1.5 text-shadow-sm ">
                        😼
                    </span>
                    <span>
                        <h3>Introdução</h3>
                    </span>
                </button>

                <button type="button" data-target="etapa2"
                    class="btn-etapa flex items-center text-[#413E45] text-xl gap-4">
                    <span
                        class="icone flex items-center justify-center shadow-sm w-8 h-8 border border-[#413E45] rounded-full">
                        1
                    </span>
                    <span>
                        <h3>Coleta de dados</h3>
                    </span>
                </button>

                <button type="button" data-target="etapa3"
                    class="btn-etapa flex items-center text-[#413E45] text-xl gap-4">
                    <span class="icone flex items-center justify-center w-8 h-8 border border-[#413E45] rounded-full">
                        2
                    </span>
                    <span>
                        <h3>Uso do site</h3>
                    </span>
                </button>

                <button type="button" data-target="etapa4"
                    class="btn-etapa flex items-center text-[#413E45] text-xl gap-4">
                    <span class="icone flex items-center justify-center w-8 h-8 border border-[#413E45] rounded-full">
                        3
                    </span>
                    <span>
                        <h3>Privacidade</h3>
                    </span>
                </button>

                <button type="button" data-target="etapa5"
                    class="btn-etapa flex items-center text-[#413E45] text-xl gap-4">
                    <span class="icone flex items-center justify-center w-8 h-8 border border-[#413E45] rounded-full">
                        4
                    </span>
                    <span>
                        <h3>Responsabilidade</h3>
                    </span>
                </button>

                <button type="button" data-target="etapa6"
                    class="btn-etapa flex items-center text-[#413E45] text-xl gap-4">
                    <span class="icone flex items-center justify-center w-8 h-8 border border-[#413E45] rounded-full">
                        5
                    </span>
                    <span>
                        <h3>Contato</h3>
                    </span>
                </button>
            </div>

            <!--Resultado das navegações-->
            <div id="etapa1" class="etapa flex flex-col justify-center items-center py-5 px-5">
                <h1 class="text-7xl text-center">Termos de uso</h1>

                <p>O Emoji Moji é um web site desenvolvido pelas bolsistas <span class="text-[#756688]">Ana Beatriz
                        Kraemer Ferreira e Bianca
                        Jussara Wolff</span>, como parte de um projeto de pesquisa sobre a linguagem da internet
                    (netspeak). O
                    objetivo do projeto é possibilitar que os usuários utilizem a plataforma para traduzir frases
                    entre a linguagem formal e informal, aprimoramento sua compreensão sobre ambas. Por meio dessa
                    interação, o usuário avaliará a ferramenta e estes dados serão utilizados para determinar a
                    qualidade e eficácia do software.
                </p>
            </div>

            <div id="etapa2" class="etapa hidden flex flex-col justify-center items-center py-5 px-5 text-xl">

                <spam>Para participar das atividades do site, iremos solicitar algumas informações básicas, como:
                </spam>

                <ul class="flex list-disc text-lg text-[#756688]">
                    <div class="flex flex-col mr-10">
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

            <div id="etapa3" class="etapa hidden flex flex-col justify-center items-center py-5 px-5 text-xl">
                <p>O Emoji Moji é voltado para fins de estudo e utilização da ferramenta de tradução. Ao utilizá-lo,
                    você concorda em:
                </p>

                <ul class="ml-10 list-disc text-lg text-[#756688]">
                    <li>Fornecer informações pessoais verídicas;
                    </li>
                    <li>Relatar sua experiência de forma honesta e construtiva, ao avaliar a ferramenta.
                    </li>
                </ul>
            </div>

            <div id="etapa4" class="etapa hidden flex flex-col justify-center items-center py-5 px-5 text-xl">
                <p>Os dados fornecidos serão armazenados de forma segura e utilizados apenas pela equipe responsável
                    pelo
                    projeto. Caso queira solicitar a exclusão ou alteração de seus dados, entre em contato pelo e-mail:
                    <span class="text-[#756688]">scripta.tech@gmail.com</span>.
                </p>
            </div>

            <div id="etapa5" class="etapa hidden flex flex-col justify-center items-center py-5 px-5 text-xl">
                <p>O Emoji Moji é um projeto de pesquisa e, por isso, pode conter ajustes e atualizações ao longo do
                    tempo. Nós nos esforçamos para manter o site funcionando corretamente, mas não garantimos
                    disponibilidade contínua ou ausência de falhas.
                </p>
            </div>

            <div id="etapa6" class="etapa hidden flex flex-col justify-center items-center py-5 px-5 text-xl">
                <p>Se você tiver dúvidas ou quiser saber mais sobre o projeto, entre em contato pelo
                    e-mail <span class="text-[#756688]">scripta.tech@gmail.com</span>. Você também pode enviar uma
                    mensagem por meio do nosso suporte do site <span class="font-bold">;)</span>
                </p>

                <span class="mt-5 self-start">Data da última atualização: 04/08/2025</span>
            </div>
        </div>
    </div>
</div>