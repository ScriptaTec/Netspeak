<?php
// Sua API Key
$apiKey = '';

// URL da API do Gemini
$url = 'https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key=' . $apiKey;

// Dados da requisição
$data = [
    "contents" => [
        [
            "parts" => [
                [
                    "text" => "Traduza para a linguagem netspeak a frase (só me responda com a frase e adicione emojis): estou muito doente hoje, não poderei ir"
                ]
            ]
        ]
    ]
];

// Inicializa o cURL
$ch = curl_init($url);

// Configurações do cURL
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json'
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

// Executa a requisição
$response = curl_exec($ch);

// Verifica erro
if (curl_errno($ch)) {
    echo 'Erro no cURL: ' . curl_error($ch);
} else {
    // Converte e exibe o JSON formatado
    $resultado = json_decode($response, true);


    echo '<pre>';
    print_r($resultado);
    echo '</pre>';
}

// Fecha o cURL
curl_close($ch);
?>