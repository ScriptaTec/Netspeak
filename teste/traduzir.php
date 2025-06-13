<?php
// traduzir.php

if (curl_errno($ch)) {
    echo json_encode(['error' => 'Erro cURL: ' . curl_error($ch)]);
    curl_close($ch);
    exit;
}
// Define os cabeçalhos para permitir requisições de outras origens (CORS) e para indicar que a resposta é JSON.
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// 1. OBTENHA SUA CHAVE DE API
// Cole sua chave de API do Google AI Studio aqui.
// EM UM PROJETO REAL, use variáveis de ambiente para mais segurança!
$apiKey = 'AIzaSyDPInQRAon48IkNEBKkEFzyGFQ02OOiuxE';

// 2. PEGUE O TEXTO ENVIADO PELO FRONTEND
// Decodifica o JSON enviado no corpo da requisição.
$inputData = json_decode(file_get_contents("php://input"));

// Validação simples: verifica se o texto foi enviado e não está vazio.
if (!isset($inputData->texto) || empty($inputData->texto)) {
    // Retorna um erro em formato JSON.
    http_response_code(400); // Bad Request
    echo json_encode(['error' => 'Nenhum texto fornecido para tradução.']);
    exit;
}

$textoFormal = $inputData->texto;

// 3. PREPARE A CHAMADA PARA A API DO GEMINI

$apiUrl = 'https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key=GEMINI_API_KEY' . $apiKey;

// O "Prompt" é a instrução que damos à IA. Seja bem específico!
$prompt = "Você é um especialista em comunicação informal e gírias da internet (netspeak). Sua tarefa é traduzir a frase formal a seguir para uma linguagem super informal, jovem, usando gírias, abreviações e emojis relevantes que façam sentido com o contexto. A resposta deve ser APENAS a frase traduzida, sem nenhum texto adicional.

Exemplo 1:
Formal: 'Gostaria de agendar uma reunião para discutirmos o projeto.'
Informal: 'e aí, bora marcar akela call pra gnt falar do projeto? 🤙'

Exemplo 2:
Formal: 'Estou muito satisfeito com os resultados obtidos.'
Informal: 'Mano, to mto feliz com o resultado, slk! 🔥🚀'

Agora, traduza a seguinte frase formal:
'$textoFormal'";

// Monta o corpo da requisição no formato que a API do Gemini espera.
$data = [
    'contents' => [
        [
            'parts' => [
                ['text' => $prompt]
            ]
        ]
    ]
];
$jsonData = json_encode($data);

// 4. FAÇA A REQUISIÇÃO USANDO cURL
$ch = curl_init($apiUrl);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, 1);

$response = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

// 5. PROCESSE A RESPOSTA E ENVIE DE VOLTA PARA O FRONTEND
if ($httpcode == 200) {
    $result = json_decode($response, true);
    
    // Extrai o texto da resposta da API. A estrutura pode ser complexa.
    // A resposta geralmente está em candidates[0]->content->parts[0]->text
    if (isset($result['candidates'][0]['content']['parts'][0]['text'])) {
        $textoTraduzido = $result['candidates'][0]['content']['parts'][0]['text'];
        echo json_encode(['traducao' => trim($textoTraduzido)]);
    } else {
        // Se a API retornou 200, mas com um formato inesperado ou erro de conteúdo
        http_response_code(500);
        echo json_encode(['error' => 'A API retornou uma resposta inesperada.', 'api_response' => $result]);
    }
} else {
    // Se a API retornou um erro (ex: chave inválida, problema no servidor do Google, etc.)
    http_response_code($httpcode);
    echo json_encode(['error' => 'Falha ao se comunicar com a API do Gemini.', 'api_response' => json_decode($response)]);
}
?>