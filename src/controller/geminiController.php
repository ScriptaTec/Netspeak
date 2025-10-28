<?php

require_once '../vendor/autoload.php';
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable('../');
$dotenv->load();

function processarFraseComGemini($fraseUsuario, $tipoTraducao)
{
    if ($tipoTraducao === "formal") { // Formal -> Informal
        $mensagem = "
        **Strict Output Instruction:** Respond *ONLY* with the rewritten sentence. Do not include greetings, explanations, language identification, or any other extra text.

        **Your Task:**
        1.  **Identify Language:** Determine if the input is Portuguese, English, or Spanish.
        2.  **Rewrite Tone:** Change the sentence from a formal tone to a casual, informal tone.
        3.  **MAINTAIN ORIGINAL LANGUAGE:** The output *MUST* be in the *SAME LANGUAGE* as the input (e.g., Spanish input -> Spanish output).

        **Style Rules (by language):**
        -   **If Spanish:** Use slang (chévere, chido, guay) and the 'tú' or 'vos' form and emojis.
        -   **If Portuguese (BR):** Use Brazilian slang and internet speech (mlk, vc, tbm, hj) and emojis.
        -   **If English:** Use American/British slang (dude, hangout, asap) and emojis.

        **Input Sentence:**
        $fraseUsuario
        ";
    } else {
        // Informal -> Formal
        $mensagem = "
        **Strict Output Instruction:** Respond *ONLY* with the rewritten sentence. Do not include greetings, explanations, language identification, or any other extra text.

        **Your Task:**
        1.  **Identify Language:** Determine if the input is Portuguese, English, or Spanish.
        2.  **Rewrite Tone:** Change the sentence from a casual/informal tone to a formal, polite, and professional tone.
        3.  **MAINTAIN ORIGINAL LANGUAGE:** The output *MUST* be in the *SAME LANGUAGE* as the input (e.g., Spanish input -> Spanish output).

        **Style Rules (by language):**
        -   **If Spanish:** Use the formal 'Usted' treatment and standard grammar.
        -   **If Portuguese (BR):** Use the standard formal norm (norma culta).
        -   **If English:** Use professional/academic standard English.

        **Input Sentence:**
        $fraseUsuario
        ";
    }

    $apiKey = $_ENV['CHAVE_API_GEMINI'];

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
