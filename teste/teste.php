<?php
$apiKey = 'AIzaSyDWd2R7IMDClGBQIxokDhW8EovFiE9ACZw';

$prompt = "Gere uma frase curta e motivacional.";

$url = 'https://generativelanguage.googleapis.com/v1beta/models/gemini-pro:generateContent?key=' . $apiKey;

$data = [
    "contents" => [
        [
            "parts" => [
                [
                    "text" => $prompt
                ]
            ]
        ]
    ]
];

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($httpCode == 200) {
    $result = json_decode($response, true);
    // O texto gerado vem em candidates[0].content.parts[0]
    $frase = $result['candidates'][0]['content']['parts'][0]['text'] ?? 'Frase não encontrada.';
    echo "<p><strong>Frase gerada:</strong> {$frase}</p>";
} else {
    echo "<p><strong>Erro ao gerar frase.</strong><br>HTTP CODE: $httpCode</p>";
    echo "<pre>";
    print_r(json_decode($response, true));
    echo "</pre>";
}
