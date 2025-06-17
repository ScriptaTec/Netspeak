<?php
function processarFraseComGemini($fraseUsuario)
{
    $apiKey = 'AIzaSyBOMJngpBUXNQl9JQwE6EfUwUfiQ60mbYA';

    $mensagem = "Traduza para a linguagem formal da lingua portuguesa a frase (só me responda com a frase e adicione emojis): $fraseUsuario";

    $data = [
        "contents" => [
            [
                "parts" => [
                    ["text" => $mensagem]
                ]
            ]
        ]
    ];

    $url = 'https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key=' . $apiKey;

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        return 'Erro na requisição: ' . curl_error($ch);
    } else {
        $resultado = json_decode($response, true);
        return $resultado['candidates'][0]['content']['parts'][0]['text'] ?? 'Erro ao obter resposta.';
    }

    curl_close($ch);
}
