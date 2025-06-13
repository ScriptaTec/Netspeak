      
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tradutor para Netspeak</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f0f2f5;
            margin: 0;
            padding: 20px;
        }
        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        textarea {
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #ddd;
            font-size: 16px;
            margin-bottom: 15px;
            min-height: 100px;
            resize: vertical;
        }
        button {
            width: 100%;
            padding: 15px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.1s;
        }
        button:hover {
            background-color: #0056b3;
        }
        button:disabled {
            background-color: #aaa;
            cursor: not-allowed;
        }
        #resultado {
            margin-top: 25px;
            padding: 20px;
            background-color: #e9f5ff;
            border-left: 5px solid #007bff;
            border-radius: 8px;
            display: none; /* Começa escondido */
            word-wrap: break-word;
        }
        #resultado h3 {
            margin-top: 0;
            color: #0056b3;
        }
        #resultado p {
            font-size: 18px;
            color: #333;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>🗣️ Tradutor Formal ➡️ Informal</h1>
        <form id="formTradutor">
            <textarea id="textoFormal" placeholder="Digite uma frase formal aqui..." required></textarea>
            <button type="submit" id="btnTraduzir">Traduzir 🤘</button>
        </form>

        <div id="resultado">
            <h3>Tradução Informal:</h3>
            <p id="textoTraduzido"></p>
        </div>
    </div>

    <script>
        const formTradutor = document.getElementById('formTradutor');
        const inputTexto = document.getElementById('textoFormal');
        const btnTraduzir = document.getElementById('btnTraduzir');
        const divResultado = document.getElementById('resultado');
        const pTextoTraduzido = document.getElementById('textoTraduzido');

        // Adiciona um "ouvinte" ao evento de submissão do formulário
        formTradutor.addEventListener('submit', async function(event) {
            // Previne o comportamento padrão do formulário (que é recarregar a página)
            event.preventDefault();

            const textoParaTraduzir = inputTexto.value.trim();
            if (textoParaTraduzir === '') {
                alert('Por favor, digite algo para traduzir.');
                return;
            }

            // Desabilita o botão e mostra um status de "carregando"
            btnTraduzir.disabled = true;
            btnTraduzir.textContent = 'Traduzindo... 🧠';
            divResultado.style.display = 'none'; // Esconde resultado anterior

            try {
                // Faz a requisição para o nosso backend PHP
                const response = await fetch('traduzir.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    // Envia o texto dentro de um objeto JSON
                    body: JSON.stringify({ texto: textoParaTraduzir })
                });

                // Pega a resposta e converte para JSON
                const data = await response.json();

                // Verifica se a requisição foi bem-sucedida
                if (response.ok) {
                    pTextoTraduzido.textContent = data.traducao;
                    divResultado.style.display = 'block'; // Mostra o resultado
                } else {
                    // Se deu erro, mostra a mensagem de erro da API
                    alert('Ocorreu um erro: ' + data.error);
                }

            } catch (error) {
                // Captura erros de rede ou de conexão
                console.error('Erro na requisição:', error);
                alert('Não foi possível se conectar ao servidor. Verifique sua conexão ou o console do navegador.');
            } finally {
                // Este bloco sempre executa, seja com sucesso ou erro
                // Reabilita o botão e restaura o texto original
                btnTraduzir.disabled = false;
                btnTraduzir.textContent = 'Traduzir 🤘';
            }
        });
    </script>

</body>
</html>