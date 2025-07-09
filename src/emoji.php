<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paleta de Emojis com Abas</title>
    <style>
        body {
            font-family: sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
            background-color: #f0f2f5;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        #emoji-palette-container {
            width: 90%;
            max-width: 900px;
            margin-bottom: 30px;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0,0,0,0.05);
            padding: 15px;
            overflow: hidden; /* Para conter os flutuantes ou grids internos */
        }

        /* --- Abas de Navegação --- */
        #category-tabs {
            display: flex;
            justify-content: space-around;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
            margin-bottom: 15px;
            overflow-x: auto; /* Permite rolagem horizontal se muitos tabs */
            -webkit-overflow-scrolling: touch; /* Suaviza a rolagem em iOS */
            scrollbar-width: none; /* Esconde a barra de rolagem para Firefox */
            -ms-overflow-style: none;  /* Esconde a barra de rolagem para IE/Edge */
        }
        #category-tabs::-webkit-scrollbar { /* Esconde a barra de rolagem para Chrome/Safari */
            display: none;
        }

        .tab-item {
            font-size: 2.2em; /* Emojis maiores para os ícones */
            cursor: pointer;
            padding: 5px 10px;
            border-radius: 8px;
            transition: background-color 0.3s ease, transform 0.1s ease;
            opacity: 0.7; /* Ícones menos destacados por padrão */
        }
        .tab-item:hover {
            background-color: #e6e6e6;
            transform: scale(1.1);
        }
        .tab-item.active {
            background-color: #f0f0f0;
            opacity: 1; /* Ícone ativo mais destacado */
            transform: scale(1.0); /* Remove o zoom no ativo */
        }

        /* --- Grids de Emoji dentro das categorias --- */
        .emoji-category-content {
            display: none; /* Esconde todas as categorias por padrão */
            padding-top: 10px;
        }
        .emoji-category-content.active {
            display: block; /* Mostra apenas a categoria ativa */
        }

        .emoji-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(45px, 1fr));
            gap: 8px;
            padding: 5px; /* Ajuste o padding para o grid */
        }
        .emoji-item {
            font-size: 28px;
            text-align: center;
            cursor: pointer;
            padding: 4px;
            border-radius: 6px;
            transition: background-color 0.2s ease, transform 0.1s ease;
        }
        .emoji-item:hover {
            background-color: #e6e6e6;
            transform: scale(1.05);
        }
        
        /* --- Textarea e Botão de Copiar --- */
        #emoji-display-area {
            width: 90%;
            max-width: 900px;
            margin-top: 30px;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.05);
            text-align: center;
        }
        #emoji-display {
            width: calc(100% - 20px);
            height: 120px;
            padding: 10px;
            font-size: 26px;
            border: 1px solid #ccc;
            border-radius: 6px;
            resize: vertical;
            margin-top: 10px;
        }
        #loading-message {
            text-align: center;
            font-size: 1.2em;
            color: #666;
            margin-top: 50px;
        }
        #copy-button {
            margin-top: 15px;
            padding: 10px 20px;
            font-size: 1em;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        #copy-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <h1>Paleta de Emojis Interativa</h1>

    <div id="loading-message">Carregando todos os emojis... Por favor, aguarde.</div>

    <div id="emoji-palette-container">
        <div id="category-tabs">
            </div>
        <div id="emoji-content-area">
            </div>
    </div>

    <div id="emoji-display-area">
        <p>Clique em um emoji para adicioná-lo abaixo:</p>
        <textarea id="emoji-display" placeholder="Seu emoji aparecerá aqui..."></textarea>
        <button id="copy-button">Copiar Emojis</button>
    </div>

    <script>
        // Busca os dados por esse https, espera e pega a informação requisitada, essa resposta não é o arquivo em si, mas sim informações sobre a conexão e como o arquivo veio.
        fetch('https://cdnjs.cloudflare.com/ajax/libs/emoji-datasource/15.1.2/emoji.json')
            .then(response => {
                // verifica se o response (a resposta) veio certa, caso não, apresenta mensagem de erro
                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }
                // pega o texto em JSON e converte de uma forma que o JS consiga ler
                return response.json();
            })
            //.then (então), execute o código. data: Este é o nome que damos para a lista completa de emojis
            .then(data => {
                const emojiPaletteContainer = document.getElementById('emoji-palette-container');
                const emojiDisplay = document.getElementById('emoji-display');
                const loadingMessage = document.getElementById('loading-message');
                const copyButton = document.getElementById('copy-button');
                const categoryTabs = document.getElementById('category-tabs');
                const emojiContentArea = document.getElementById('emoji-content-area');

                loadingMessage.style.display = 'none'; // Esconde a mensagem de carregamento

                // Define emojis característicos para cada categoria
                const categoryIcons = {
                    'Smileys & Emotion': '😀',
                    'People & Body': '👋',
                    'Animals & Nature': '🌳',
                    'Food & Drink': '🍔',
                    'Travel & Places': '🌍',
                    'Activities': '⚽',
                    'Objects': '💡',
                    'Symbols': '❤️',
                    'Flags': '🇧🇷',
                    'default': '✨' 
                };

                // Agrupar emojis por categoria
                const emojisByCategory = data.reduce((acc, emoji) => {
                    // Ignora emojis da categoria 'Component'
                    // acc (de "acumulador") é o resultado que está sendo construído (no nosso caso, um objeto vazio {} no começo)
                    if (emoji.category === 'Component') {
                        return acc;
                    }
                    // ignora o emoji se ele não tem uma categoria
                    if (!emoji.category || !emoji.unified) {
                        return acc;
                    }
                    // pega o código do emoji e o transforma no rostinho em si
                    const emojiChar = String.fromCodePoint(...emoji.unified.split('-').map(code => parseInt(code, 16)));
                    // cria um novo compartimeto para cada emoji
                    if (!acc[emoji.category]) {
                        acc[emoji.category] = [];
                    }
                    // pega o emoji no compartimento e o coloca na categoria certa
                    acc[emoji.category].push({
                        char: emojiChar,
                        name: emoji.name || 'Emoji'
                    });
                    return acc;
                }, {});

                // Ordenar as categorias para uma exibição consistente
                const sortedCategories = Object.keys(emojisByCategory).sort();

                let firstCategoryContent = null; // Para armazenar a div de conteúdo da primeira categoria

                sortedCategories.forEach((category, index) => {
                    // Criar Item da Aba
                    const tabItem = document.createElement('div');
                    tabItem.classList.add('tab-item');
                    tabItem.textContent = categoryIcons[category] || categoryIcons['default'];
                    tabItem.title = category; // Tooltip para o nome da categoria
                    tabItem.dataset.category = category.replace(/\s+/g, '-').toLowerCase(); 

                    categoryTabs.appendChild(tabItem);

                    // Criar Seção de Conteúdo da Categoria
                    const categoryContent = document.createElement('div');
                    categoryContent.classList.add('emoji-category-content');
                    categoryContent.id = `category-${tabItem.dataset.category}`; // Link para o item da aba

                    const emojiGrid = document.createElement('div');
                    emojiGrid.classList.add('emoji-grid');

                    // Ordenar emojis dentro de cada categoria
                    const sortedEmojis = emojisByCategory[category].sort((a, b) => a.name.localeCompare(b.name));

                    sortedEmojis.forEach(emoji => {
                        const emojiItem = document.createElement('div');
                        emojiItem.classList.add('emoji-item');
                        emojiItem.textContent = emoji.char;
                        emojiItem.title = emoji.name; 

                        emojiItem.addEventListener('click', () => {
                            emojiDisplay.value += emoji.char;
                            emojiDisplay.focus();
                        });
                        emojiGrid.appendChild(emojiItem);
                    });

                    categoryContent.appendChild(emojiGrid);
                    emojiContentArea.appendChild(categoryContent);

                    // Definir a primeira categoria como ativa inicialmente
                    if (index === 0) {
                        tabItem.classList.add('active');
                        categoryContent.classList.add('active');
                        firstCategoryContent = categoryContent;
                    }

                    // Adicionar listener de clique para a troca de abas
                    tabItem.addEventListener('click', () => {
                        // Desativar a aba e o conteúdo atualmente ativos
                        document.querySelectorAll('.tab-item').forEach(item => item.classList.remove('active'));
                        document.querySelectorAll('.emoji-category-content').forEach(content => content.classList.remove('active'));

                        // Ativar a aba clicada e seu conteúdo
                        tabItem.classList.add('active');
                        categoryContent.classList.add('active');
                    });
                });

                // Adiciona a funcionalidade de copiar ao botão
                copyButton.addEventListener('click', () => {
                    if (emojiDisplay.value) {
                        navigator.clipboard.writeText(emojiDisplay.value)
                            .then(() => {
                                alert('Emojis copiados para a área de transferência!');
                            })
                            .catch(err => {
                                console.error('Erro ao copiar emojis:', err);
                                alert('Não foi possível copiar os emojis. Por favor, copie manualmente.');
                            });
                    } else {
                        alert('Não há emojis para copiar!');
                    }
                });

            })
            .catch(error => {
                console.error('Erro ao carregar dados de emojis:', error);
                const emojiPaletteContainer = document.getElementById('emoji-palette-container');
                const loadingMessage = document.getElementById('loading-message');
                loadingMessage.style.display = 'none'; 
                emojiPaletteContainer.innerHTML = '<p style="color: red; text-align: center; padding: 20px;">Erro ao carregar emojis. Por favor, tente novamente mais tarde.</p>';
            });
    </script>

</body>
</html>