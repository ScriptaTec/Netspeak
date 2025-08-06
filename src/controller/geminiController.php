<?php

require_once '../vendor/autoload.php';
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable('../');
$dotenv->load();



function processarFraseComGemini($fraseUsuario, $tipoTraducao)
{
    if ($tipoTraducao === "informal"){
        $mensagem = "Como especialista em linguagem e tradução, sua única tarefa é converter frases da linguagem informal para a linguagem formal do português do Brasil. Você deve responder apenas com a frase traduzida, sem saudações, comentários ou explicações. Sua tradução deve considerar gírias, internetês, abreviações, coloquialismos e construções gramaticais simples, transformando-os em uma versão formal e culta da língua. Por exemplo, uma frase como E aí, tudo bom? A gente foi lá e fez, deve se tornar Olá, tudo bem? Nós fomos até lá e fizemos. Lembre-se de responder exclusivamente com a tradução da seguinte frase: $fraseUsuario";
    } else {
        $mensagem = "Beleza. Como um expert em linguagem, sua missão é traduzir frases do português formal e culto para o português informal e descolado do Brasil. Sua resposta deve ter emojis, gírias e abreviações. Você precisa responder só com a frase traduzida, sem enrolação.

Por exemplo, Agradeço imensamente o convite para o evento vira Mano, valeu pelo convite do rolê! ✌️. Você poderia, por gentileza, me ajudar com este problema? vira Me ajuda com esse BO, por favor? 🙏. Nós realizamos a tarefa com sucesso vira A gente fez o trampo e deu certo! 🚀. Lembre-se: sua resposta é a tradução informal, e só isso! adicione erros gramaticais propositais como: mlk, vc, tbm, hj. Lembre-se de responder exclusivamente com a tradução da seguinte frase: $fraseUsuario";
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
