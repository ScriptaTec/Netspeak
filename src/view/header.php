<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Tailwind CSS-->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <!--Biblioteca FlowBite-->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <!--Fontes das letras-->
    <link rel="stylesheet" href="../fonts/fonts.css">
    <!--Navegação do sobre nós-->
    <script src="../js/sobre_nos.js" defer></script>
    <!--Animação do login, cadastro, redefinir senha, index-->
    <script src="../js/animacao.js" defer></script>
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script> <!--Animação das letras-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"><!---Animações no geral-->
    <!--Mostrar senha nos inputs-->
    <script src="../js/inputs.js"></script>
    <!--Modal de filtro nas páginas de tradução-->
    <script src="../js/tradutor.js" defer></script>
    <!--Modal de avaliacao no suporte-->
    <script src="../js/avaliacao.js" defer></script>

    <title>EmojiMoji</title>
</head>

<body class="jersey">

    <!--Tradução do site-->
    <script type="text/javascript">
        const LANG_KEY = 'traducao_preferida'; // Chave para localStorage

        // FUNÇÃO GLOBAL: Responsável por forçar a tradução
        function traduzirPagina(lng) {
            // Garante que o objeto Google já está disponível
            if (typeof google === 'object' && google.translate && google.translate.TranslateElement) {
                var select = document.querySelector('#google_translate_element_oculta select');

                if (select) {
                    select.value = lng;
                    select.dispatchEvent(new Event('change'));

                    // 1. Salva a preferência
                    localStorage.setItem(LANG_KEY, lng);
                }
            }
        }

        // FUNÇÃO PARA CARREGAR O IDIOMA SALVO
        function aplicarIdiomaSalvo() {
            const savedLang = localStorage.getItem(LANG_KEY);

            // Se houver um idioma salvo E não for o idioma original (pt), aplica.
            if (savedLang && savedLang !== 'pt') {
                traduzirPagina(savedLang);
            }
        }

        // Inicialização do Google Tradutor (chamada pelo script externo)
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'pt',
                autoDisplay: false,
                layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
            }, 'google_translate_element_oculta');

            // 2. Aplica o idioma salvo IMEDIATAMENTE após a inicialização do widget
            aplicarIdiomaSalvo();
        }
    </script>

    <script type="text/javascript"
        src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <div id="google_translate_element_oculta" class="hidden"></div>