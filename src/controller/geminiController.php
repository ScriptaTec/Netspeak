<?php

require_once '../vendor/autoload.php';
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable('../');
$dotenv->load();



function processarFraseComGemini($fraseUsuario, $tipoTraducao)
{
    // Novo bloco IF (tipoTraducao === "formal" -> Informal)
if ($tipoTraducao === "formal"){
    $mensagem = "SUA MISSÃO PRIMÁRIA É: 1. **IDENTIFICAR O IDIOMA** da frase de entrada. 2. **REESCREVER** a frase, alterando-a de um tom formal para um tom informal e descolado. 3. **VOCÊ DEVE MANTER O IDIOMA ORIGINAL** (Português, Inglês ou Espanhol). Sua reescrita deve ser carregada de emojis, gírias e abreviações apropriadas para a cultura da língua detectada.

    **Regras de Estilo e Idioma:**
    - **Se ESPANHOL:** Use gírias e coloquialismos como 'chévere', 'chido', 'guay', e conjugue verbos no tratamento 'tú' ou 'vos' (dependendo da gíria).
    - **Se PORTUGUÊS:** Use gírias brasileiras e internetês (mlk, vc, tbm, hj).
    - **Se INGLÊS:** Use gírias (slang) americanas/britânicas (dude, hangout, asap).

    RESPONDA APENAS com a Frase a processar: '$fraseUsuario'";
} else {
    // Novo bloco ELSE (Outros -> Formal)
    $mensagem = "SUA MISSÃO PRIMÁRIA É: 1. **IDENTIFICAR O IDIOMA** da frase de entrada. 2. **REESCREVER** a frase, alterando-a de um tom informal e coloquial para um tom **formal e culto**. 3. **VOCÊ DEVE MANTER O IDIOMA ORIGINAL** (Português, Inglês ou Espanhol). Sua reescrita deve ser gramaticalmente correta, polida e apropriada para comunicações profissionais.

    **Regras de Estilo e Idioma:**
    - **Se ESPANHOL:** Use a norma culta e o tratamento formal 'Usted' com conjugação na terceira pessoa.
    - **Se PORTUGUÊS:** Use a norma culta do português do Brasil.
    - **Se INGLÊS:** Use inglês padrão (standard English) para contextos profissionais ou acadêmicos.

    Frase a processar: '$fraseUsuario'

    **FORMATO DE SAÍDA OBRIGATÓRIO:** Responda APENAS com a frase reescrita. O idioma da saída deve ser idêntico ao idioma da entrada.";
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
