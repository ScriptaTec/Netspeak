<?php
// Substitua pela sua chave da API
$apiKey = 'AIzaSyBOMJngpBUXNQl9JQwE6EfUwUfiQ60mbYA';

$respostaDaApi = '';

// Se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['frase'])) {
    $fraseUsuario = $_POST['frase'];

    // Monta a mensagem a ser enviada
    $mensagem = "Traduza para a linguagem netspeak a frase (só me responda com a frase e adicione emojis): $fraseUsuario";

    // Monta os dados da requisição
    $data = [
        "contents" => [
            [
                "parts" => [
                    [
                        "text" => $mensagem
                    ]
                ]
            ]
        ]
    ];

    // URL da API
    $url = 'https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key=' . $apiKey;

    // Inicializa o cURL
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

    // Executa a requisição
    $response = curl_exec($ch);

    // Verifica erro
    if (curl_errno($ch)) {
        $respostaDaApi = 'Erro na requisição: ' . curl_error($ch);
    } else {
        $resultado = json_decode($response, true);
        $respostaDaApi = $resultado['candidates'][0]['content']['parts'][0]['text'] ?? 'Erro ao obter resposta.';
    }

    curl_close($ch);
}
?>

<!-- HTML simples para exibir o formulário e o resultado -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tradutor Netspeak</title>
</head>
<body>
    <h2>Digite uma frase para traduzir para Netspeak:</h2>
    <form method="post">
        <input type="text" name="frase" required style="width: 300px;">
        <button type="submit">Enviar</button>
    </form>

    <?php if ($respostaDaApi): ?>
        <h3>Resposta da IA:</h3>
        <p><?= htmlspecialchars($respostaDaApi) ?></p>
    <?php endif; ?>
</body>
</html>
